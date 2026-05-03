<?php
    session_start();
    session_destroy();
    setcookie('status', '', time() - 3600, '/');
    header('Location: ../view/login.php');
    exit;
?>