<?php

    if(isset($_POST['submit'])){

        $gender = $_REQUEST['gender'];

        if($gender == ""){
            echo "Please select a gender!";
        }else{
            echo "Gender: " . $gender;
        }

    }else{
        echo "Please submit the form...";
    }

?>