<?php
    session_start();
    unset($_SESSION['status']);
    unset($_SESSION['username']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['gender']);
    unset($_SESSION['dob']);
    unset($_SESSION['picture']);

    setcookie('status', 'true', time() - 10, '/');
    setcookie('remember_user', '', time() - 10, '/');

    header('location: login.php');
    exit();
?>
