<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit();
}
$pageTitle = "Change Profile Picture";

?>
<fieldset>
    <legend>PROFILE PICTURE</legend>

    <?php if (isset($_GET['success'])): ?>
        <p class="success">Profile picture updated!</p>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
    <?php endif; ?>

    <div style="margin-bottom:12px;">
        <?php if (!empty($_SESSION['picture'])): ?>
            <img src="<?php echo htmlspecialchars($_SESSION['picture']); ?>" class="profile-pic" />
        <?php else: ?>
            <div class="profile-pic-placeholder">&#128100;</div>
        <?php endif; ?>
    </div>
    
    <form method="post" action="changeProfilePictureCheck.php" enctype="multipart/form-data">
        <input type="file" name="picture" accept="image/*" /><br /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>
</fieldset>
