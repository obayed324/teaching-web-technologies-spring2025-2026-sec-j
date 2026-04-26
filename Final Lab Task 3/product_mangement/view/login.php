<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="../controller/loginCheck.php">
        Username: <input type="text" name="username" value=""/> <br><br>
        Password: <input type="password" name="password" value=""/> <br><br>
                  <input type="submit" name="submit" value="Login"/>
                  <a href="signup.php">Sign up</a>
    </form>
</body>
</html>
