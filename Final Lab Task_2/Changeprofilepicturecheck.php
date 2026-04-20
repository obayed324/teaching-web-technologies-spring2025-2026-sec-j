<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit();
}

if (isset($_REQUEST['submit'])) {

    if (!isset($_FILES['picture']) || $_FILES['picture']['error'] != 0) {
        header('location: changeProfilePicture.php?error=Please+choose+a+file!');
        exit();
    }

    $file     = $_FILES['picture'];
    $allowed  = array('image/jpeg', 'image/png', 'image/gif', 'image/webp');

    if (!in_array($file['type'], $allowed)) {
        header('location: changeProfilePicture.php?error=Only+JPG,+PNG,+GIF,+WEBP+allowed!');
        exit();
    }

    
    $imageData   = file_get_contents($file['tmp_name']);
    $base64Image = 'data:' . $file['type'] . ';base64,' . base64_encode($imageData);

    $_SESSION['picture'] = $base64Image;

    
    if (isset($_SESSION['users'])) {
        foreach ($_SESSION['users'] as &$user) {
            if ($user['username'] == $_SESSION['username']) {
                $user['picture'] = $base64Image;
                break;
            }
        }
        unset($user);
    }

    header('location: dashboard.php?success=1');
    exit();
} else {
    echo "Please submit the form...";
}
?>
