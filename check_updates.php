<?php
header('Content-Type: application/json');

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

// Ruta exclusiva y local para Back4App
$actionFile = __DIR__ . "/actions/" . $safeTxId . ".txt";

$action = null;
if (file_exists($actionFile)) {
    $content = trim(file_get_contents($actionFile));
    $parts = explode('|', $content);
    $action = $parts[0] ?? '';
}

if (!empty($action)) {
    echo json_encode(["status" => "success", "action" => $action]);
    exit;
}

echo json_encode(["status" => "waiting"]);
?>