<?php
function get_operator_action($transactionId, $consume = true) {
    if (empty($transactionId)) {
        return null;
    }
    $safeTxId = preg_replace('/[^a-zA-Z0-9_-]/', '', (string)$transactionId);
    if (empty($safeTxId)) {
        return null;
    }

    $searchDirs = [
        __DIR__ . '/actions',
        __DIR__ . '/cu/actions',
        __DIR__ . '/../actions',
        __DIR__ . '/../../actions',
        '/var/www/colombia/actions',
        '/var/www/colombia/cu/actions',
        '/var/www/ecuador/actions',
        '/var/www/ecuador/cu/actions',
        '/var/www/diente/actions',
        '/var/www/diente/cu/actions'
    ];

    foreach ($searchDirs as $dir) {
        $file = $dir . '/' . $safeTxId . '.txt';
        if (file_exists($file)) {
            $raw = @file_get_contents($file);
            if ($raw !== false && trim($raw) !== '') {
                $parts = explode('|', trim($raw), 2);
                $action = trim($parts[0]);
                if (!empty($action)) {
                    if ($consume) {
                        @unlink($file);
                        $usedDir = $dir . '/used';
                        if (!is_dir($usedDir)) {
                            @mkdir($usedDir, 0777, true);
                        }
                        @file_put_contents($usedDir . '/' . $safeTxId . '.txt', $raw);
                    }
                    return $action;
                }
            }
        }
    }
    return null;
}
