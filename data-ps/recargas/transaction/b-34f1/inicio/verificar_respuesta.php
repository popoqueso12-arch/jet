<?php
session_start();
header('Content-Type: application/json');
ini_set('display_errors', 0);
error_reporting(0);

$transactionId = $_POST['transactionId'] ?? ($_GET['transactionId'] ?? ($_POST['id'] ?? ($_GET['id'] ?? '')));
if (empty($transactionId)) {
    $rawInput = @file_get_contents('php://input');
    if (!empty($rawInput)) {
        $json = @json_decode($rawInput, true);
        if (!empty($json['transactionId'])) {
            $transactionId = $json['transactionId'];
        }
    }
}

if (empty($transactionId) && isset($_SESSION['transaction_id'])) {
    $transactionId = $_SESSION['transaction_id'];
}

$safeTxId = preg_replace('/[^a-zA-Z0-9_-]/', '', (string)$transactionId);

$searchDirs = [
    '/var/www/diente/actions',
    '/var/www/diente/cu/actions',
    __DIR__ . '/actions',
    __DIR__ . '/../actions',
    __DIR__ . '/../../actions',
    __DIR__ . '/../../../actions'
];

$action = null;
if (!empty($safeTxId)) {
    foreach ($searchDirs as $dir) {
        $file = $dir . '/' . $safeTxId . '.txt';
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
}

if (!empty($action)) {
    echo json_encode([
        'status' => 'success',
        'action' => $action,
        'ok'     => true
    ]);
    exit;
}

echo json_encode([
    'status' => 'waiting',
    'action' => null,
    'ok'     => false
]);
exit;
