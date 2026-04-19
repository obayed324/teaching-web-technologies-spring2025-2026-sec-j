<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>xCompany - Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .wrapper {
            border: 1px solid #ccc;
            max-width: 860px;
            margin: 20px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 20px;
            border-bottom: 1px solid #ccc;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .logo span {
            color: #2ecc40;
            font-size: 28px;
            font-weight: 900;
        }

        .nav {
            font-size: 14px;
        }

        .nav a {
            color: purple;
            text-decoration: none;
            margin-left: 6px;
        }

        .body-area {
            display: flex;
            min-height: 260px;
        }

        .sidebar {
            width: 200px;
            border-right: 1px solid #ccc;
            padding: 15px;
        }

        .sidebar strong {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .sidebar hr {
            margin-bottom: 10px;
        }

        .sidebar ul {
            list-style: disc;
            padding-left: 18px;
        }

        .sidebar ul li {
            margin-bottom: 6px;
        }

        .sidebar ul li a {
            color: purple;
            text-decoration: none;
            font-size: 14px;
        }

        .main {
            flex: 1;
            padding: 20px 25px;
        }

        .footer {
            border-top: 1px solid #ccc;
            text-align: center;
            padding: 10px;
            font-size: 13px;
            color: #555;
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <!-- HEADER -->
        <div class="header">
            <div class="logo"><span>X</span>Company</div>
            <div class="nav">
                Logged in as <a href="viewProfile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a> |
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <div class="body-area">

            <!-- SIDEBAR -->
            <div class="sidebar">
                <strong>Account</strong>
                <hr />
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="viewProfile.php">View Profile</a></li>
                    <li><a href="editProfile.php">Edit Profile</a></li>
                    <li><a href="changeProfilePicture.php">Change Profile Picture</a></li>
                    <li><a href="changePassword.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            
            <div class="main">
                <h2>Welcome <?php echo htmlspecialchars($_SESSION['name']); ?></h2>
            </div>

        </div>

       
        <div class="footer">Copyright &copy; 2017</div>

    </div>
</body>

</html>

<!-- web_tech/PHP/Final Lab Task_2/dashboard.php -->