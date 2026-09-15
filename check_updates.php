<?php
// Configuración básica
header("Content-Type: application/json");

// Obtener el transaction_id del cliente
$data = json_decode(file_get_contents("php://input"), true);
$transaction_id = $data["transaction_id"] ?? "";

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
        $action = trim(file_get_contents($actionFile));
        break;
    }
}

if ($action) {
    echo json_encode(["status" => "success", "action" => $action]);
    exit;
}

echo json_encode(["status" => "waiting"]);
