<?php
session_start();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    if ($email == "") {
        header('location: forgotPassword.php?error=Please+enter+your+email!');
        exit();
    }

    if (!isset($_SESSION['users'])) {
        header('location: forgotPassword.php?error=No+account+found+with+that+email!');
        exit();
    }

    $found = false;
    $foundUsername = '';
    $foundPassword = '';

    foreach ($_SESSION['users'] as $user) {
        if ($user['email'] == $email) {
            $found         = true;
            $foundUsername = $user['username'];
            $foundPassword = $user['password']; 
            break;
        }
    }

    
    if (!$found) {
        if (isset($_COOKIE['reg_email']) && $_COOKIE['reg_email'] == $email) {
            $found         = true;
            $foundUsername = $_COOKIE['reg_username'];
            $foundPassword = $_COOKIE['reg_password'];
        }
    }

    if (!$found) {
        header('location: forgotPassword.php?error=No+account+found+with+that+email!');
        exit();
    }


    header('location: forgotPassword.php?found=1&username=' . urlencode($foundUsername) . '&password=' . urlencode($foundPassword));
    exit();
} else {
    echo "Please submit the form...";
}
