<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);

function requireLogin() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit;
    }
}

function requireLibrarian() {
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'librarian') {
        header("Location: ../login.php");
        exit;
    }
}
?>
    