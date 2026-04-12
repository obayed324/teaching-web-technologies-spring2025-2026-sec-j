<?php

    if(isset($_POST['submit'])){

        $gender = $_REQUEST['gender'];

        if($gender == ""){
            echo "Please select a gender!";
        }else{
            echo "Gender: " . $gender;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 400px;">
            <legend><strong>GENDER</strong></legend>
            <input type="radio" name="gender" value="Male"   <?php if(isset($_POST['gender']) && $gender == "Male")  { echo "checked"; } ?> />  Male
            <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $gender == "Female"){ echo "checked"; } ?> />  Female
            <input type="radio" name="gender" value="Other"  <?php if(isset($_POST['gender']) && $gender == "Other") { echo "checked"; } ?> />  Other <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>