<?php
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: login.php');
        exit();
    }

    if(isset($_REQUEST['submit'])){

        $name   = $_REQUEST['name'];
        $email  = $_REQUEST['email'];
        $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
        $dob    = $_REQUEST['dob'];

        if($name == "" || $email == ""){
            header('location: editProfile.php?error=Name+and+email+are+required!');
            exit();
        }

        // Update session data
        $_SESSION['name']   = $name;
        $_SESSION['email']  = $email;
        $_SESSION['gender'] = $gender;
        $_SESSION['dob']    = $dob;

        // Also update in the users array stored in session
        if(isset($_SESSION['users'])){
            foreach($_SESSION['users'] as &$user){
                if($user['username'] == $_SESSION['username']){
                    $user['name']   = $name;
                    $user['email']  = $email;
                    $user['gender'] = $gender;
                    $user['dob']    = $dob;
                    break;
                }
            }
            unset($user);
        }

        header('location: dashboard.php?success=1');
        exit();

    } else {
        echo "Please submit the form...";
    }
?>