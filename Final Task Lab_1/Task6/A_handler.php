<?php

    if(isset($_REQUEST['submit'])){

        $bloodgroup = $_REQUEST['bloodgroup'];

        if($bloodgroup == ""){
            echo "Please select a blood group!";
        }else{
            echo "Blood Group: " . $bloodgroup;
        }

    }else{
        echo "Please submit the form...";
    }

?>