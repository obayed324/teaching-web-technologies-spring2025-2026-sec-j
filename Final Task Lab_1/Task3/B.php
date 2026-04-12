<?php

    if(isset($_POST['submit'])){

        $dd   = $_REQUEST['dd'];
        $mm   = $_REQUEST['mm'];
        $yyyy = $_REQUEST['yyyy'];

        if($dd == "" || $mm == "" || $yyyy == ""){
            echo "Date of Birth fields are empty!";
        }else{
            echo "Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Date of Birth Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset style="width: 400px;">
            <legend><strong>DATE OF BIRTH</strong></legend>
            dd &nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>
            <input type="text" name="dd" maxlength="2" size="3" />  /
            <input type="text" name="mm" maxlength="2" size="3" />  /
            <input type="text" name="yyyy" maxlength="4" size="5" /> <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>