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
    <title>Product Details</title>
</head>
<body>
    <h1>Product Details</h1>
    <a href="product_list.php">Back</a> |
    <a href="../controller/logout.php">Logout</a>
    <br><br>

    <table border="1">
        <tr><th>ID</th><td><?= $product['id'] ?></td></tr>
        <tr><th>Name</th><td><?= $product['name'] ?></td></tr>
        <tr><th>Category</th><td><?= $product['category'] ?></td></tr>
        <tr><th>Price</th><td><?= $product['price'] ?> BDT</td></tr>
        <tr><th>Stock</th><td><?= $product['stock'] ?></td></tr>
    </table>
    <br>
    <a href="edit_product.php?id=<?= $product['id'] ?>">Edit this product</a>
</body>
</html>
