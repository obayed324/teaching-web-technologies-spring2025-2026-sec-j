<?php

    if(isset($_POST['submit'])){

        $degrees = isset($_REQUEST['degree']) ? $_REQUEST['degree'] : [];

        if(empty($degrees)){
            echo "Please select at least one degree!";
        }else{
            echo "Selected Degree(s): " . implode(", ", $degrees);
        }

    }else{
        echo "Please submit the form...";
    }

?>