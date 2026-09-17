<?php
header('Content-Type: application/json');

$transaction_id = $_GET['transaction_id'] ?? '';

if (empty($transaction_id)) {
    $inputData = json_decode(file_get_contents("php://input"), true);
    $transaction_id = $inputData['transaction_id'] ?? $_POST['transaction_id'] ?? '';
}

$safeTxId = preg_replace("/[^a-zA-Z0-9_-]/", "", (string)$transaction_id);
$actionFile = '/tmp/actions/' . $safeTxId . ".txt";

// Leer la carpeta actions para ver qué archivos existen realmente
$actionsDir = '/tmp/actions';
$existingFiles = is_dir($actionsDir) ? array_diff(scandir($actionsDir), ['.', '..', 'used']) : [];

if (file_exists($actionFile)) {
    $content = trim(file_get_contents($actionFile));
    $parts = explode('|', $content);
    $action = $parts[0] ?? '';
    if (!empty($action)) {
        echo json_encode(["status" => "success", "action" => $action]);
        exit;
    }
}

// MODO DEBUG: Esto te dirá qué ID está buscando el navegador y qué archivos hay en la carpeta
echo json_encode([
    "status" => "waiting",
    "debug_looking_for" => $safeTxId,
    "debug_files_in_server" => array_values($existingFiles)
]);