<?php

    if(isset($_POST['submit'])){

        $degrees = isset($_REQUEST['degree']) ? $_REQUEST['degree'] : [];

        if(empty($degrees)){
            echo "Please select at least one degree!";
        }else{
            echo "Selected Degree(s): " . implode(", ", $degrees);
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 5C - Degree Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 400px;">
            <legend><strong>DEGREE</strong></legend>
            <input type="checkbox" name="degree[]" value="SSC" <?php if(isset($_POST['degree']) && in_array("SSC", $degrees)){ echo "checked"; } ?> /> SSC
            <input type="checkbox" name="degree[]" value="HSC" <?php if(isset($_POST['degree']) && in_array("HSC", $degrees)){ echo "checked"; } ?> /> HSC
            <input type="checkbox" name="degree[]" value="BSc" <?php if(isset($_POST['degree']) && in_array("BSc", $degrees)){ echo "checked"; } ?> /> BSc
            <input type="checkbox" name="degree[]" value="MSc" <?php if(isset($_POST['degree']) && in_array("MSc", $degrees)){ echo "checked"; } ?> /> MSc <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>