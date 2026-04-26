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
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    <a href="user_list.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
    <br><br>

    <table border="1">
        <tr><th>ID</th><td><?= $user['id'] ?></td></tr>
        <tr><th>Username</th><td><?= $user['username'] ?></td></tr>
        <tr><th>Email</th><td><?= $user['email'] ?></td></tr>
    </table>
</body>
</html>
