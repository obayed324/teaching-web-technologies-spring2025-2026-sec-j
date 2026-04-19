<!DOCTYPE html>
<html lang="en">

<head>
    <title>xCompany - Login</title>
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
            min-height: 220px;
            padding: 30px;
            display: flex;
            justify-content: center;
        }

        .footer {
            border-top: 1px solid #ccc;
            text-align: center;
            padding: 10px;
            font-size: 13px;
            color: #555;
        }

        fieldset {
            padding: 15px 20px;
            width: 380px;
        }

        legend {
            font-weight: bold;
            padding: 0 6px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 6px 4px;
            font-size: 14px;
        }

        input[type=text],
        input[type=password] {
            width: 160px;
            padding: 3px 5px;
            border: 1px solid #999;
        }

        input[type=submit] {
            padding: 3px 10px;
            cursor: pointer;
        }

        .error {
            color: red;
            font-size: 13px;
            margin-top: 8px;
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
            <fieldset>
                <legend>LOGIN</legend>

                <?php if (isset($_GET['error'])): ?>
                    <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
                <?php endif; ?>

                <form method="post" action="loginCheck.php">
                    <table>
                        <tr>
                            <td>User Name :</td>
                            <td><input type="text" name="username" value="" /></td>
                        </tr>
                        <tr>
                            <td>Password :</td>
                            <td><input type="password" name="password" value="" /></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="checkbox" name="remember" value="1" /> Remember Me</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Submit" />
                                <a href="forgotPassword.php">Forgot Password?</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
        <div class="footer">Copyright @ 2017</div>
    </div>
</body>

</html>