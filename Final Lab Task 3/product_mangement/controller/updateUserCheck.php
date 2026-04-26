<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $id       = $_REQUEST['id'];
        $username = $_REQUEST['username'];
        $email    = $_REQUEST['email'];
        if($username == "" || $email == ""){
            echo "null username/email!";
        }else{
            $users = $_SESSION['users'];
            foreach($users as $key => $u){
                if($u['id'] == $id){
                    $users[$key]['username'] = $username;
                    $users[$key]['email']    = $email;
                    break;
                }
            }
            $_SESSION['users'] = $users;
            $_SESSION['msg'] = "User updated successfully!";
            header('location: ../view/user_list.php');
        }
    }else{
        echo "please submit form...";
    }
?>