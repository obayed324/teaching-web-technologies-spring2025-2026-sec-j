<!DOCTYPE html>
<html lang="en">

<head>
    <title>xCompany - Registration</title>
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
            width: 440px;
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
            vertical-align: middle;
        }

        input[type=text],
        input[type=email],
        input[type=password] {
            width: 160px;
            padding: 3px 5px;
            border: 1px solid #999;
        }

        input[type=submit],
        input[type=reset] {
            padding: 3px 10px;
            cursor: pointer;
        }

        .dob-group input {
            width: 45px;
        }

        .error {
            color: red;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .success {
            color: green;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .gender-group fieldset {
            border: 1px solid #ccc;
            padding: 6px 10px;
        }

        .dob-fieldset {
            border: 1px solid #ccc;
            padding: 6px 10px;
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
                <legend>REGISTRATION</legend>
                <?php if (isset($_GET['error'])): ?>
                    <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
                <?php endif; ?>
                <?php if (isset($_GET['success'])): ?>
                    <p class="success">Registration successful! <a href="login.php">Login here</a></p>
                <?php endif; ?>
                <form method="post" action="registerCheck.php">
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>: <input type="text" name="name" value="" /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: <input type="email" name="email" value="" /> <b>i</b></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td>: <input type="text" name="username" value="" /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>: <input type="password" name="password" value="" /></td>
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                            <td>: <input type="password" name="confirm_password" value="" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset class="gender-group">
                                    <legend>Gender</legend>
                                    <input type="radio" name="gender" value="Male" /> Male &nbsp;
                                    <input type="radio" name="gender" value="Female" /> Female &nbsp;
                                    <input type="radio" name="gender" value="Other" /> Other
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <fieldset class="dob-fieldset">
                                    <legend>Date of Birth</legend>
                                    <div class="dob-group">
                                        <input type="text" name="dob_dd" maxlength="2" placeholder="dd" style="width:40px" /> /
                                        <input type="text" name="dob_mm" maxlength="2" placeholder="mm" style="width:40px" /> /
                                        <input type="text" name="dob_yyyy" maxlength="4" placeholder="yyyy" style="width:55px" />
                                        <span style="font-size:12px; color:#888;">(dd/mm/yyyy)</span>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Submit" />
                                <input type="reset" value="Reset" />
                            </td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
        <div class="footer">Copyright &copy; 2017</div>
    </div>
</body>

</html>