<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <a href="product_list.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
    <br><br>

    <?php if(isset($_SESSION['error'])){ ?>
        <p><b><?= $_SESSION['error'] ?></b></p>
        <?php unset($_SESSION['error']); ?>
    <?php } ?>

    <form method="post" action="../controller/addProductCheck.php">
        Name:     <input type="text"   name="name"     value=""/> <br><br>
        Category: <input type="text"   name="category" value=""/> <br><br>
        Price:    <input type="number" name="price"    value="" min="0"/> <br><br>
        Stock:    <input type="number" name="stock"    value="" min="0"/> <br><br>
                  <input type="submit" name="submit" value="Add Product"/>
    </form>
</body>
</html>
