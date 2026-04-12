<?php

    if(isset($_POST['submit'])){

        $username = $_REQUEST['username'];

        if($username == ""){
            echo "Name field is empty!";
        }else{
            echo "Name: " . $username;
        }

    }else{
        echo "Please submit the form...";
    }

?>

<!-- web_tech/PHP/Final Task Lab_1/Task1/A_Handler.php -->