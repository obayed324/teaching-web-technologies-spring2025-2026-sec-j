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
    <title>Task 6B - Blood Group Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 400px;">
            <legend><strong>BLOOD GROUP</strong></legend>
            <select name="bloodgroup">
                <option value="">-- Select --</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select> <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>