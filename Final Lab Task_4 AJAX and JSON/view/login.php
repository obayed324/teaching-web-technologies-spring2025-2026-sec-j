<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

    <div class="form-container">
        <h2>Login</h2>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username" />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" />
        </div>

        <input type="button" id="loginBtn" class="btn" value="Login" onclick="loginAjax()" />

        <div id="message" class="message"></div>

        <div class="form-footer">
            Don't have an account? <a href="signup.php">Sign up</a>
        </div>
    </div>

    <script src="../js/login.js"></script>
</body>

</html>