<?php

    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];

        if($username == ""){
            echo "Name field is empty!";
        }else{
            echo "Name: " . $username;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Name Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 400px;">
            <legend><strong>NAME</strong></legend>
            <input type="text" name="username" /> <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>