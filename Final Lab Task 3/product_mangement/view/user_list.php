
<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
        exit;
    }

    
    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [
            ['id'=> 1, 'username'=>'obayed',   'email'=> 'obayed@aiub.edu'],
            ['id'=> 2, 'username'=>'tanha',    'email'=> 'tanha@aiub.edu'],
            ['id'=> 3, 'username'=>'rakib',    'email'=> 'rakib@aiub.edu'],
            ['id'=> 4, 'username'=>'ummeHani', 'email'=> 'ummeHani@aiub.edu'],
            ['id'=> 5, 'username'=>'ruhi',     'email'=> 'ruhi@aiub.edu'],
        ];
    }

    $users = $_SESSION['users']; // read from session, not hardcoded
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
    <h1>List of Users</h1>
    <a href="home.php">Home</a> |
    <a href="../controller/logout.php">Logout</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>ACTION</th>
        </tr>
        <?php foreach($users as $user){ ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
            <td>
                <a href="edit_user.php?id=<?= $user['id'] ?>">EDIT</a> |
                <a href="details_user.php?id=<?= $user['id'] ?>">DETAILS</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
