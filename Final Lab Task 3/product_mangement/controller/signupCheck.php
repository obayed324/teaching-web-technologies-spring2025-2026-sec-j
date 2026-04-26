<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email    = $_REQUEST['email'];

        if($username == "" || $password == "" || $email == ""){
            echo "null username/password/email!";
        }else{
            
            $_SESSION['user'] = ['username'=>$username, 'password'=>$password, 'email'=>$email];

            
            if(!isset($_SESSION['users'])){
                $_SESSION['users'] = [];
            }
            $newId = empty($_SESSION['users']) ? 1 : max(array_column($_SESSION['users'], 'id')) + 1;
            $_SESSION['users'][] = ['id'=>$newId, 'username'=>$username, 'email'=>$email];

            header('location: ../view/login.php');
        }
    }else{
        echo "please submit form...";
    }
?>