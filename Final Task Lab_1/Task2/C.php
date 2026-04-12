<?php

    if(isset($_POST['submit'])){

        $email = $_REQUEST['email'];

        if($email == ""){
            echo "Email field is empty!";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 400px;">
            <legend><strong>EMAIL</strong></legend>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $email; } ?>" /> <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>