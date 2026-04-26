<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
        exit;
    }
    $id = $_GET['id'];
    $products = $_SESSION['products'];
    $product = [];
    foreach($products as $p){
        if($p['id'] == $id){
            $product = $p;
            break;
        }
    }
    if(empty($product)){
        header('location: product_list.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <a href="product_list.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
    <br><br>

    <?php if(isset($_SESSION['error'])){ ?>
        <p><b><?= $_SESSION['error'] ?></b></p>
        <?php unset($_SESSION['error']); ?>
    <?php } ?>

    <form method="post" action="../controller/updateProductCheck.php">
        <input type="hidden" name="id" value="<?= $product['id'] ?>"/>
        Name:     <input type="text"   name="name"     value="<?= $product['name'] ?>"/> <br><br>
        Category: <input type="text"   name="category" value="<?= $product['category'] ?>"/> <br><br>
        Price:    <input type="number" name="price"    value="<?= $product['price'] ?>" min="0"/> <br><br>
        Stock:    <input type="number" name="stock"    value="<?= $product['stock'] ?>" min="0"/> <br><br>
                  <input type="submit" name="submit" value="Update"/>
    </form>
</body>
</html>
