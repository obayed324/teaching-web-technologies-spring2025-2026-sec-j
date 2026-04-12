<?php

    if(isset($_REQUEST['submit'])){

        $email = $_REQUEST['email'];

        if($email == ""){
            echo "Email field is empty!";
        }else{
            echo "Email: " . $email;
        }

    }else{
        echo "Please submit the form...";
    }

?>