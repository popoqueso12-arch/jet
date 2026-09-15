<?php
header('Content-Type: application/json');

// 1. Soportar tanto GET (como lo está pidiendo tu JS) como POST por seguridad
$transaction_id = $_GET['transaction_id'] ?? '';

if (empty($transaction_id)) {
    $inputData = json_decode(file_get_contents("php://input"), true);
    $transaction_id = $inputData['transaction_id'] ?? $_POST['transaction_id'] ?? '';
}

if (empty($transaction_id)) {
    echo json_encode(["status" => "error", "message" => "Transaction ID requerido"]);
    exit;
}

$safeTxId = preg_replace("/[^a-zA-Z0-9_-]/", "", (string)$transaction_id);

$searchDirs = [
    __DIR__ . "/actions",
    "/var/www/colombia/actions",
    "/var/www/ecuador/actions",
    "/var/www/diente/actions",
    __DIR__ . "/../actions"
];

$action = null;
foreach ($searchDirs as $dir) {
    $actionFile = $dir . "/" . $safeTxId . ".txt";
    if (file_exists($actionFile)) {
        $content = trim(file_get_contents($actionFile));
        // El webhook guarda 'accion|timestamp', extraemos únicamente la acción limpia
        $parts = explode('|', $content);
        $action = $parts[0] ?? '';
        break;
    }
}

if (!empty($action)) {
    echo json_encode(["status" => "success", "action" => $action]);
    exit;
}

echo json_encode(["status" => "waiting"]);
?>