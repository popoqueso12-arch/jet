<?php
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

$logFile = __DIR__ . '/webhook.log';

function logMsg($msg) {
    global $logFile;
    $line = '[' . date('Y-m-d H:i:s') . '] ' . $msg . PHP_EOL;
    @file_put_contents($logFile, $line, FILE_APPEND | LOCK_EX);
}

$configPath = __DIR__ . '/config.php';
$config = file_exists($configPath) ? include $configPath : [];

$botToken   = $config['bot_token']    ?? '8714922704:AAG9dcP56xY_gdUktBusuZFMdlj5Aqo2p4k';
$chatId     = $config['chat_id']      ?? '-5234970591';
$webhookUrl = $config['webhook_url']  ?? 'https://jets-8jev79ij.b4a.run/webhook.php';

// ── GET: ?logs=1 ──────────────────────────────────────────────
if (isset($_GET['logs'])) {
    header('Content-Type: text/plain');
    $debug  = "=== WEBHOOK DEBUG ===\n";
    $debug .= "Dir: " . __DIR__ . "\n";
    $debug .= "Writable: " . (is_writable(__DIR__) ? "YES" : "NO") . "\n";
    $actionsDir = __DIR__ . '/actions';
    $debug .= "Actions dir exists: " . (is_dir($actionsDir) ? "YES" : "NO") . "\n";
    if (is_dir($actionsDir)) {
        $files = array_diff(scandir($actionsDir), ['.', '..', 'used']);
        $debug .= "Files in actions: " . implode(', ', $files) . "\n";
    }
    $debug .= "\n=== LOGS ===\n";
    $debug .= file_exists($logFile) ? implode('', array_slice(file($logFile), -60)) : "Sin logs aún\n";
    echo $debug;
    exit;
}

// ── GET: ?set=1 ───────────────────────────────────────────────
if (isset($_GET['set'])) {
    header('Content-Type: application/json');
    logMsg("📍 Registrando webhook: $webhookUrl");
    $res = file_get_contents("https://api.telegram.org/bot{$botToken}/setWebhook?url=" . urlencode($webhookUrl));
    logMsg("Respuesta: $res");
    echo $res;
    exit;
}

// ── GET: ?info=1 ──────────────────────────────────────────────
if (isset($_GET['info'])) {
    header('Content-Type: application/json');
    echo file_get_contents("https://api.telegram.org/bot{$botToken}/getWebhookInfo");
    exit;
}

// ── GET: ?test=1 — prueba si el filesystem persiste ───────────
if (isset($_GET['test'])) {
    header('Content-Type: text/plain');
    $testFile = __DIR__ . '/actions/test_' . time() . '.txt';
    @mkdir(__DIR__ . '/actions', 0777, true);
    $wrote = file_put_contents($testFile, 'OK');
    $read  = file_exists($testFile) ? file_get_contents($testFile) : 'NO EXISTE';
    echo "Escritura: " . ($wrote !== false ? "OK ($wrote bytes)" : "FALLO") . "\n";
    echo "Lectura: $read\n";
    echo "Ruta: $testFile\n";
    exit;
}

// ── POST: procesar callback de Telegram ───────────────────────
header('Content-Type: application/json');

$content = file_get_contents("php://input");
logMsg("📨 POST recibido: " . substr($content, 0, 300));

$update = json_decode($content, true);

if (!$update) {
    logMsg("❌ JSON inválido o vacío");
    echo json_encode(['ok' => true]);
    exit;
}

if (!isset($update['callback_query'])) {
    $keys = implode(', ', array_keys($update));
    logMsg("⚠️ No es callback_query. Claves: $keys");
    echo json_encode(['ok' => true]);
    exit;
}

logMsg("✅ callback_query recibido");

$cb     = $update['callback_query'];
$cbData = $cb['data'] ?? '';
logMsg("📋 callback_data: $cbData");

$actionType    = '';
$transactionId = '';

if (strpos($cbData, ':') !== false) {
    [$actionType, $transactionId] = explode(':', $cbData, 2);
} elseif (strpos($cbData, '|') !== false) {
    [$actionType, $transactionId] = explode('|', $cbData, 2);
} elseif (preg_match('/^([a-z_]+)_([a-f0-9]{10,})$/', $cbData, $m)) {
    // formato "accion_transactionid" — solo si txId parece hex
    $actionType    = $m[1];
    $transactionId = $m[2];
} else {
    $actionType = $cbData;
}

logMsg("Acción: '$actionType' | TxID: '$transactionId'");

// Guardar acción en archivo
if ($actionType !== '' && $transactionId !== '') {
    $safeTxId   = preg_replace('/[^a-zA-Z0-9_-]/', '', $transactionId);
    $centralDir = __DIR__ . '/actions';
    @mkdir($centralDir, 0777, true);
    @mkdir($centralDir . '/used', 0777, true);

    // Limpiar archivo "used" si existe
    $usedFile = $centralDir . '/used/' . $safeTxId . '.txt';
    if (file_exists($usedFile)) @unlink($usedFile);

    $actionFile = $centralDir . '/' . $safeTxId . '.txt';
    $stamp      = time() . '_' . bin2hex(random_bytes(3));
    $result     = file_put_contents($actionFile, $actionType . '|' . $stamp, LOCK_EX);
    @chmod($actionFile, 0666);

    if ($result !== false) {
        logMsg("✅ Guardado: $actionFile → $actionType|$stamp");
    } else {
        logMsg("❌ FALLO al escribir: $actionFile");
    }
} else {
    logMsg("⚠️ TxID vacío, no se guarda acción");
}

// Responder al callback
$from     = $cb['from'] ?? [];
$operador = !empty($from['username'])
    ? '@' . $from['username']
    : trim(($from['first_name'] ?? '') . ' ' . ($from['last_name'] ?? ''));
if ($operador === '') $operador = 'Operador';

$ch = curl_init("https://api.telegram.org/bot{$botToken}/answerCallbackQuery");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode(['callback_query_id' => $cb['id'], 'text' => '✅ ' . $actionType]),
    CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
    CURLOPT_TIMEOUT        => 3
]);
curl_exec($ch);
curl_close($ch);

// Editar mensaje
$message      = $cb['message'] ?? [];
$msgChatId    = $message['chat']['id'] ?? $chatId;
$msgId        = $message['message_id'] ?? null;
$originalText = $message['text'] ?? ($message['caption'] ?? '');

if ($msgChatId && $msgId && $originalText) {
    $newText = $originalText . "\n\n✅ <b>" . ucfirst(str_replace('_', ' ', $actionType)) . "</b> por " . $operador;
    $chEdit = curl_init("https://api.telegram.org/bot{$botToken}/editMessageText");
    curl_setopt_array($chEdit, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => json_encode(['chat_id' => $msgChatId, 'message_id' => $msgId, 'text' => $newText, 'parse_mode' => 'HTML']),
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        CURLOPT_TIMEOUT        => 3
    ]);
    curl_exec($chEdit);
    curl_close($chEdit);
}

logMsg("✅ Completado");
echo json_encode(['ok' => true]);
