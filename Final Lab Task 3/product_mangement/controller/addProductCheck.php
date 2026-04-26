<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $name     = $_REQUEST['name'];
        $category = $_REQUEST['category'];
        $price    = $_REQUEST['price'];
        $stock    = $_REQUEST['stock'];

        if($name == "" || $category == "" || $price == "" || $stock == ""){
            $_SESSION['error'] = "All fields are required!";
            header('location: ../view/add_product.php');
            exit;
        }

        
        if(!isset($_SESSION['products'])){
            $_SESSION['products'] = [];
        }

        
        $products = $_SESSION['products'];
        $newId = 1;
        if(!empty($products)){
            $maxId = max(array_column($products, 'id'));
            $newId = $maxId + 1;
        }

        $newProduct = [
            'id'       => $newId,
            'name'     => $name,
            'category' => $category,
            'price'    => (int)$price,
            'stock'    => (int)$stock,
        ];

        $products[] = $newProduct;
        $_SESSION['products'] = $products;
        $_SESSION['msg'] = "Product added successfully!";
        header('location: ../view/product_list.php');
    }else{
        echo "please submit form...";
    }
?>