<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
        exit;
    }

    // Initialize default products in session if not set
    if(!isset($_SESSION['products'])){
        $_SESSION['products'] = [
            ['id'=> 1, 'name'=>'Laptop',     'category'=>'Electronics', 'price'=>75000, 'stock'=>10],
            ['id'=> 2, 'name'=>'Mouse',      'category'=>'Electronics', 'price'=>500,   'stock'=>50],
            ['id'=> 3, 'name'=>'Desk',       'category'=>'Furniture',   'price'=>8000,  'stock'=>5],
            ['id'=> 4, 'name'=>'Notebook',   'category'=>'Stationery',  'price'=>50,    'stock'=>200],
            ['id'=> 5, 'name'=>'Headphones', 'category'=>'Electronics', 'price'=>3000,  'stock'=>20],
        ];
    }

    $products = $_SESSION['products'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product Management</h1>
    <a href="home.php">Home</a> |
    <a href="add_product.php">Add Product</a> |
    <a href="../controller/logout.php">Logout</a>
    <br><br>

    <?php if(isset($_SESSION['msg'])){ ?>
        <p><b><?= $_SESSION['msg'] ?></b></p>
        <?php unset($_SESSION['msg']); ?>
    <?php } ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CATEGORY</th>
            <th>PRICE (BDT)</th>
            <th>STOCK</th>
            <th>ACTION</th>
        </tr>
        <?php foreach($products as $product){ ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['category'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><?= $product['stock'] ?></td>
            <td>
                <a href="edit_product.php?id=<?= $product['id'] ?>">EDIT</a> |
                <a href="details_product.php?id=<?= $product['id'] ?>">DETAILS</a> |
                <a href="../controller/deleteProductCheck.php?id=<?= $product['id'] ?>" onclick="return confirm('Delete this product?')">DELETE</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
