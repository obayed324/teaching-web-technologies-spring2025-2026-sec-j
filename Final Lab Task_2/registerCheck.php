<?php
    session_start();

    if(isset($_POST['submit'])){

        $name             = $_POST['name'];
        $email            = $_POST['email'];
        $username         = $_POST['username'];
        $password         = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $gender           = isset($_POST['gender']) ? $_REQUEST['gender'] : '';
        $dob_dd           = $_POST['dob_dd'];
        $dob_mm           = $_POST['dob_mm'];
        $dob_yyyy         = $_POST['dob_yyyy'];
        $dob              = $dob_dd . '/' . $dob_mm . '/' . $dob_yyyy;

        // Validation
        if($name == "" || $email == "" || $username == "" || $password == "" || $confirm_password == ""){
            header('location: register.php?error=All+fields+are+required!');
            exit();
        }

        if($password != $confirm_password){
            header('location: register.php?error=Passwords+do+not+match!');
            exit();
        }

        if($gender == ""){
            header('location: register.php?error=Please+select+a+gender!');
            exit();
        }

        // Check if username already exists
        if(isset($_SESSION['users'])){
            foreach($_SESSION['users'] as $user){
                if($user['username'] == $username){
                    header('location: register.php?error=Username+already+taken!');
                    exit();
                }
                if($user['email'] == $email){
                    header('location: register.php?error=Email+already+registered!');
                    exit();
                }
            }
        }

        // Store user in session (as data storage per lab instructions)
        $newUser = array(
            'name'     => $name,
            'email'    => $email,
            'username' => $username,
            'password' => $password,
            'gender'   => $gender,
            'dob'      => $dob,
            'picture'  => ''
        );

        if(!isset($_SESSION['users'])){
            $_SESSION['users'] = array();
        }

        $_SESSION['users'][] = $newUser;

        header('location: register.php?success=1');
        exit();

    } else {
        echo "Please submit the form...";
    }
?>