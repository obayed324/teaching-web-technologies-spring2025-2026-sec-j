<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

    <div class="form-container">
        <h2>Sign Up</h2>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username" />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password" />
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter email" />
        </div>

        <input type="button" id="signupBtn" class="btn" value="Register" onclick="signupAjax()" />

        <div id="message" class="message"></div>

        <div class="form-footer">
            Already have an account? <a href="login.php">Sign in</a>
        </div>
    </div>

    <script src="../js/signup.js"></script>
</body>

</html>
<!-- web_tech/PHP/php all things/ajax_and_json_By_User_Mnt/view/signup.php -->