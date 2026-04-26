<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>
    <h2>Signup</h2>
    <form method="post" action="../controller/signupCheck.php">
        Username: <input type="text" name="username" value=""/> <br><br>
        Password: <input type="password" name="password" value=""/> <br><br>
        Email:    <input type="email" name="email" value=""/> <br><br>
                  <input type="submit" name="submit" value="Register"/>
                  <a href="login.php">Sign in</a>
    </form>
</body>
</html>
