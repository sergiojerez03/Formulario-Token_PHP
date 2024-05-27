<?php
session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
}

$token = 'Medisin' . str_pad($_SESSION['contador'], 5, '0', STR_PAD_LEFT);


$_SESSION['contador']++;


echo json_encode(['token' => $token]);
?>
