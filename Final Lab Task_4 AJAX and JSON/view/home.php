<?php
session_start();
if (!isset($_COOKIE['status'])) {
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body class="home-body">

    <div class="navbar">
        <span class="site-name">WebTech</span>
        <div>
            <a href="user_list.php">User Management</a>
            <a href="product_list.php">Product Management</a>
            <a href="../controller/logout.php">Logout</a>
        </div>
    </div>

    <div class="home-content">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>You are logged in. Use the menu above to navigate.</p>
    </div>

</body>

</html>