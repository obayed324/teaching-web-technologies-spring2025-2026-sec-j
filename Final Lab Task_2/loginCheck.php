<?php
session_start();

if (isset($_REQUEST['submit'])) {

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $remember = isset($_REQUEST['remember']) ? true : false;

    if ($username == "" || $password == "") {
        header('location: login.php?error=Username+or+password+cannot+be+empty!');
        exit();
    }

    
    if (!isset($_SESSION['users'])) {
        header('location: login.php?error=Invalid+username+or+password!');
        exit();
    }

    $users = $_SESSION['users'];
    $found = false;

    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $found = true;
            // Set logged-in session
            $_SESSION['status']   = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['name']     = $user['name'];
            $_SESSION['email']    = $user['email'];
            $_SESSION['gender']   = $user['gender'];
            $_SESSION['dob']      = $user['dob'];
            $_SESSION['picture']  = isset($user['picture']) ? $user['picture'] : '';
            break;
        }
    }

    if (!$found) {
        header('location: login.php?error=Invalid+username+or+password!');
        exit();
    }

    
    if ($remember) {
        setcookie('remember_user', $username, time() + (30 * 24 * 3600), '/');
    }

    setcookie('status', 'true', time() + 3000, '/');
    header('location: dashboard.php');
    exit();
} else {
    echo "Please submit the form...";
}
