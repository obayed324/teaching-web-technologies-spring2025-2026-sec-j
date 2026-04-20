<?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: login.php');
    exit();
}
$pageTitle = "Edit Profile";
?>
<fieldset>
    <legend>EDIT PROFILE</legend>
    <?php if (isset($_GET['success'])): ?>
        <p class="success">Profile updated successfully!</p>
    <?php endif; ?>
    <form method="post" action="editProfileCheck.php">
        <table>
            <tr>
                <td>Name</td>
                <td>: <input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['name']); ?>" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <input type="email" name="email" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" /> <b>i</b></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:
                    <input type="radio" name="gender" value="Male" <?php echo ($_SESSION['gender'] == 'Male') ? 'checked' : ''; ?> /> Male &nbsp;
                    <input type="radio" name="gender" value="Female" <?php echo ($_SESSION['gender'] == 'Female') ? 'checked' : ''; ?> /> Female &nbsp;
                    <input type="radio" name="gender" value="Other" <?php echo ($_SESSION['gender'] == 'Other') ? 'checked' : ''; ?> /> Other
                </td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>:
                    <input type="text" name="dob" value="<?php echo htmlspecialchars($_SESSION['dob']); ?>" style="width:110px;" />
                    <br /><small style="color:#888;">(dd/mm/yyyy)</small>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
            </tr>
        </table>
    </form>
</fieldset>