<?php

    if(isset($_REQUEST['submit'])){

        $email = $_REQUEST['email'];

        if($email == ""){
            echo "Email field is empty!";
        }else{
            echo "Email: " . $email;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 2B - Email Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend><strong>EMAIL</strong></legend>
            <input type="email" name="email" /> <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>