<!DOCTYPE html>
<html lang="en">

<head>
    <title>xCompany - Home</title>
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

        .nav a {
            color: purple;
            text-decoration: none;
            margin-left: 10px;
            font-size: 14px;
        }


        .content {
            min-height: 200px;
            padding: 40px 30px;
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
        <div class="header">
            <div class="logo"><span>X</span>Company</div>
            <div class="nav">
                <a href="index.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="register.php">Registration</a>

            </div>
        </div>
        <div class="content">
            <h2>Welcome to xCompany</h2>
        </div>
        <div class="footer">Copyright @ 2017</div>
    </div>
</body>

</html>