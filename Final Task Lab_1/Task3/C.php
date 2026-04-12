<?php

    if(isset($_REQUEST['submit'])){

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
    <title>Task 3C - Date of Birth Form</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend><strong>DATE OF BIRTH</strong></legend>
            dd &nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>
            <input type="text" name="dd"   maxlength="2" size="3" value="<?php if(isset($_POST['dd'])){ echo $dd; } ?>" />  /
            <input type="text" name="mm"   maxlength="2" size="3" value="<?php if(isset($_POST['mm'])){ echo $mm; } ?>" />  /
            <input type="text" name="yyyy" maxlength="4" size="5" value="<?php if(isset($_POST['yyyy'])){ echo $yyyy; } ?>" /> <br><br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>
</html>