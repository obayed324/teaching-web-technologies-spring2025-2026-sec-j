<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit();
}
$pageTitle = "Change Password";
?>
<fieldset>
    <legend>CHANGE PASSWORD</legend>
    <?php if (isset($_GET['success'])): ?>
        <p class="success">Password changed successfully!</p>
    <?php endif; ?>
    <?php if (isset($_GET['error'])): ?>
        <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
    <?php endif; ?>
    <form method="post" action="changePasswordCheck.php">
        <table>
            <tr>
                <td>Current Password :</td>
                <td><input type="password" name="current_password" value="" /></td>
            </tr>
            <tr>
                <td style="color:green;">New Password :</td>
                <td><input type="password" name="new_password" value="" /></td>
            </tr>
            <tr>
                <td style="color:red;">Retype New Password :</td>
                <td><input type="password" name="confirm_password" value="" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</fieldset>
