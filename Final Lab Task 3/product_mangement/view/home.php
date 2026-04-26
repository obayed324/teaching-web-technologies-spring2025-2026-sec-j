<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="user_list.php">User Management</a> |
    <a href="product_list.php">Product Management</a> |
    <a href="../controller/logout.php">Logout</a>
</body>
</html>
