<?php
header('Content-Type: application/json');
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

$logFile = __DIR__ . '/webhook.log';

function logMsg($msg) {
    global $logFile;
    $timestamp = '[' . date('Y-m-d H:i:s') . '] ';
    $line = $timestamp . $msg . PHP_EOL;

    // Intentar escribir en archivo
    @file_put_contents($logFile, $line, FILE_APPEND | LOCK_EX);

    // Asegurar permisos
    if (file_exists($logFile)) {
        @chmod($logFile, 0666);
    }
}

$configPath = __DIR__ . '/config.php';
$config = file_exists($configPath) ? include $configPath : [];

$botToken = $config['bot_token'] ?? '8714922704:AAG9dcP56xY_gdUktBusuZFMdlj5Aqo2p4k';
$chatId   = $config['chat_id']   ?? '-5234970591';
$webhookUrl = $config['webhook_url'] ?? 'https://jets-shs0wolf.b4a.run/webhook.php';

// Log inicial
logMsg("🚀 Webhook iniciado - Método: " . $_SERVER['REQUEST_METHOD'] . " | URL: " . $_SERVER['REQUEST_URI']);

// GET request with ?set=1 to easily register webhook
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['set'])) {
    logMsg("📍 Intentando registrar webhook: $webhookUrl");
    $url = "https://api.telegram.org/bot{$botToken}/setWebhook?url=" . urlencode($webhookUrl);
    $res = file_get_contents($url);
    logMsg("✅ Respuesta setWebhook: $res");
    echo $res;
    exit;
}

// GET request with ?info=1 to check webhook info
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['info'])) {
    logMsg("🔍 Consultando webhook info");
    $res = file_get_contents("https://api.telegram.org/bot{$botToken}/getWebhookInfo");
    logMsg("Webhook info: $res");
    echo $res;
    exit;
}

$content = file_get_contents("php://input");
logMsg("📨 Webhook recibido: " . substr($content, 0, 200));

$update = json_decode($content, true);

if (!$update) {
    logMsg("❌ JSON inválido");
    echo json_encode(['ok' => true]);
    exit;
}

// Log completo de la actualización
logMsg("Update completo: " . json_encode($update));

if (!isset($update['callback_query'])) {
    logMsg("⚠️ No es un callback_query, es: " . json_encode(array_keys($update)));
    echo json_encode(['ok' => true]);
    exit;
}

logMsg("✅ Callback query detectado");

$cb = $update['callback_query'];
$cbData = $cb['data'] ?? '';
$actionType = '';
$transactionId = '';

if (strpos($cbData, ':') !== false) {
    list($actionType, $transactionId) = explode(':', $cbData, 2);
} elseif (strpos($cbData, '|') !== false) {
    list($actionType, $transactionId) = explode('|', $cbData, 2);
} else {
    $actionType = $cbData;
}

if ($actionType !== '' && $transactionId !== '') {
    logMsg("🎯 Procesando acción: $actionType | $transactionId");
    $safeTxId = preg_replace('/[^a-zA-Z0-9_-]/', '', $transactionId);

    // Directorio limpio y exclusivo para Back4App
    $centralDir = __DIR__ . '/actions';
    if (!is_dir($centralDir)) {
        @mkdir($centralDir, 0777, true);
        @chmod($centralDir, 0777);
        logMsg("📁 Carpeta /actions creada");
    }

    $usedDir = $centralDir . '/used';
    if (!is_dir($usedDir)) {
        @mkdir($usedDir, 0777, true);
        @chmod($usedDir, 0777);
    }

    $usedFile = $usedDir . '/' . $safeTxId . '.txt';
    if (file_exists($usedFile)) {
        @unlink($usedFile);
        logMsg("🗑️ Archivo used eliminado: $safeTxId");
    }

    $actionFile = $centralDir . '/' . $safeTxId . '.txt';
    $stamp = time() . '_' . bin2hex(random_bytes(3));
    $success = file_put_contents($actionFile, $actionType . '|' . $stamp, LOCK_EX);
    @chmod($actionFile, 0666);

    if ($success) {
        logMsg("✅ Acción guardada en: $actionFile");
    } else {
        logMsg("❌ Error guardando acción en: $actionFile");
    }
} else {
    logMsg("⚠️ ActionType o TransactionId vacío: actionType='$actionType' | txId='$transactionId'");
}

// Answer callback query
$answerPayload = [
    'callback_query_id' => $cb['id'],
    'text' => '✅ Acción recibida: ' . $actionType
];
$ch = curl_init("https://api.telegram.org/bot{$botToken}/answerCallbackQuery");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($answerPayload),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_TIMEOUT => 3
]);
curl_exec($ch);
curl_close($ch);

// Edit message in telegram
$from = $cb['from'] ?? [];
$operador = !empty($from['username']) ? '@' . $from['username'] : trim(($from['first_name'] ?? '') . ' ' . ($from['last_name'] ?? ''));
if ($operador === '') $operador = 'Operador';

$message = $cb['message'] ?? [];
$msgChatId = $message['chat']['id'] ?? $chatId;
$msgId = $message['message_id'] ?? null;
$originalText = $message['text'] ?? ($message['caption'] ?? '');

if ($msgChatId && $msgId && $originalText) {
    $newText = $originalText . "\n\n✅ Acción: <b>" . ucfirst(str_replace('_', ' ', $actionType)) . "</b>\n👤 Por: " . $operador;
    $editPayload = [
        'chat_id' => $msgChatId,
        'message_id' => $msgId,
        'text' => $newText,
        'parse_mode' => 'HTML'
    ];
    $chEdit = curl_init("https://api.telegram.org/bot{$botToken}/editMessageText");
    curl_setopt_array($chEdit, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($editPayload),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_TIMEOUT => 3
    ]);
    curl_exec($chEdit);
    curl_close($chEdit);
}

// GET request con ?logs=1 para ver los logs
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['logs'])) {
    header('Content-Type: text/plain');

    $debug = "=== WEBHOOK LOG DEBUG ===\n";
    $debug .= "Log file path: $logFile\n";
    $debug .= "File exists: " . (file_exists($logFile) ? "YES" : "NO") . "\n";
    $debug .= "Is writable: " . (is_writable(dirname($logFile)) ? "YES" : "NO") . "\n";
    $debug .= "PHP version: " . phpversion() . "\n";
    $debug .= "Current time: " . date('Y-m-d H:i:s') . "\n";
    $debug .= "\n=== LOGS ===\n";

    if (file_exists($logFile)) {
        $lines = file($logFile);
        $recent = array_slice($lines, -50); // Últimas 50 líneas
        $debug .= implode('', $recent);
    } else {
        $debug .= "No log file found yet. Waiting for first webhook call...\n";
    }

    echo $debug;
    exit;
}

logMsg("✅ Webhook completado correctamente");
echo json_encode(['ok' => true]);