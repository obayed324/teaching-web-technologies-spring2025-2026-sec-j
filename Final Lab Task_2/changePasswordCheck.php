<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit();
}

if (isset($_REQUEST['submit'])) {

    $current_password  = $_REQUEST['current_password'];
    $new_password      = $_REQUEST['new_password'];
    $confirm_password  = $_REQUEST['confirm_password'];

    if ($current_password == "" || $new_password == "" || $confirm_password == "") {
        header('location: changePassword.php?error=All+fields+are+required!');
        exit();
    }

    if ($new_password != $confirm_password) {
        header('location: changePassword.php?error=New+passwords+do+not+match!');
        exit();
    }

    
    $verified = false;
    if (isset($_SESSION['users'])) {
        foreach ($_SESSION['users'] as &$user) {
            if ($user['username'] == $_SESSION['username']) {
                if ($user['password'] == $current_password) {
                    $verified = true;
                    $user['password'] = $new_password;
                }
                break;
            }
        }
        unset($user);
    }

    if (!$verified) {
        header('location: changePassword.php?error=Current+password+is+incorrect!');
        exit();
    }

    header('location: dashboard.php?success=1');
    exit();
} else {
    echo "Please submit the form...";
}

?>
