<?php
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: login.php');
        exit();
    }
    $pageTitle = "View Profile";
    include('header_auth.php');
?>
            <fieldset>
                <legend>PROFILE</legend>
                <table>
                    <tr>
                        <td style="width:200px;">
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>: <?php echo htmlspecialchars($_SESSION['name']); ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: <?php echo htmlspecialchars($_SESSION['email']); ?></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>: <?php echo htmlspecialchars($_SESSION['gender']); ?></td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>: <?php echo htmlspecialchars($_SESSION['dob']); ?></td>
                                </tr>
                            </table>
                            <br/>
                            <a href="editProfile.php">Edit Profile</a>
                        </td>
                        <td style="vertical-align: top; text-align: center;">
                            <?php if(!empty($_SESSION['picture'])): ?>
                                <img src="<?php echo htmlspecialchars($_SESSION['picture']); ?>" class="profile-pic"/>
                            <?php else: ?>
                                <div class="profile-pic-placeholder">&#128100;</div>
                            <?php endif; ?>
                            <br/>
                            <a href="changeProfilePicture.php">Change</a>
                        </td>
                    </tr>
                </table>
            </fieldset>
<?php include('footer_auth.php'); ?>