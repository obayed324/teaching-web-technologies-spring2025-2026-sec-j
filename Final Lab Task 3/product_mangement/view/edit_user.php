<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
        exit;
    }
    $id = $_GET['id'];
    $users = $_SESSION['users'];
    $user = [];
    foreach($users as $u){
        if($u['id'] == $id){
            $user = $u;
            break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <a href="user_list.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
    <br><br>

    <form method="post" action="../controller/updateUserCheck.php">
        <input type="hidden" name="id" value="<?= $user['id'] ?>"/>
        Username: <input type="text" name="username" value="<?= $user['username'] ?>"/> <br><br>
        Email:    <input type="email" name="email" value="<?= $user['email'] ?>"/> <br><br>
                  <input type="submit" name="submit" value="Update"/>
    </form>
</body>
</html>
