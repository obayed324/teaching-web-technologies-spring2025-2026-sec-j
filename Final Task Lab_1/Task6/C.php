<?php

    if(isset($_POST['submit'])){

        $bloodgroup = $_REQUEST['bloodgroup'];

        if($bloodgroup == ""){
            echo "Please select a blood group!";
        }else{
            echo "Blood Group: " . $bloodgroup;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 6C - Blood Group Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 400px;">
            <legend><strong>BLOOD GROUP</strong></legend>
            <select name="bloodgroup">
                <option value="">-- Select --</option>
                <option value="A+"  <?php if(isset($_POST['bloodgroup']) && $bloodgroup == "A+") { echo "selected"; } ?>>A+</option>
                <option value="A-"  <?php if(isset($_POST['bloodgroup']) && $bloodgroup == "A-") { echo "selected"; } ?>>A-</option>
                <option value="B+"  <?php if(isset($_POST['bloodgroup']) && $bloodgroup == "B+") { echo "selected"; } ?>>B+</option>
                <option value="B-"  <?php if(isset($_POST['bloodgroup']) && $bloodgroup == "B-") { echo "selected"; } ?>>B-</option>
                <option value="AB+" <?php if(isset($_POST['bloodgroup']) && $bloodgroup == "AB+"){ echo "selected"; } ?>>AB+</option>
                <option value="AB-" <?php if(isset($_POST['bloodgroup']) && $bloodgroup == "AB-"){ echo "selected"; } ?>>AB-</option>
                <option value="O+"  <?php if(isset($_POST['bloodgroup']) && $bloodgroup == "O+") { echo "selected"; } ?>>O+</option>
                <option value="O-"  <?php if(isset($_POST['bloodgroup']) && $bloodgroup == "O-") { echo "selected"; } ?>>O-</option>
            </select> <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>