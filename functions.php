<?php

function safeOutput($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function getCsrfToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function validateCsrf() {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
        die("Invalid CSRF token.");
    }
}

?>
    