<?php

    if(isset($_POST['submit'])){

        $dd   = $_REQUEST['dd'];
        $mm   = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];

        if($dd == "" || $mm == "" || $yyyy == ""){
            echo "Date of Birth fields are empty!";
        }else{
            echo "Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy;
        }

    }else{
        echo "Please submit the form...";
    }

?>