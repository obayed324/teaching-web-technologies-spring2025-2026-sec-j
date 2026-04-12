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
    <title>Task 5B - Degree Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 400px;">
            <legend><strong>DEGREE</strong></legend>
            <input type="checkbox" name="degree[]" value="SSC" /> SSC
            <input type="checkbox" name="degree[]" value="HSC" /> HSC
            <input type="checkbox" name="degree[]" value="BSc" /> BSc
            <input type="checkbox" name="degree[]" value="MSc" /> MSc <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>