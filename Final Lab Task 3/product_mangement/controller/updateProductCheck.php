<?php
    session_start();
    if(isset($_REQUEST['submit'])){
        $id       = $_REQUEST['id'];
        $name     = $_REQUEST['name'];
        $category = $_REQUEST['category'];
        $price    = $_REQUEST['price'];
        $stock    = $_REQUEST['stock'];

        if($name == "" || $category == "" || $price == "" || $stock == ""){
            $_SESSION['error'] = "All fields are required!";
            header('location: ../view/edit_product.php?id='.$id);
            exit;
        }

        $products = $_SESSION['products'];
        foreach($products as $key => $p){
            if($p['id'] == $id){
                $products[$key]['name']     = $name;
                $products[$key]['category'] = $category;
                $products[$key]['price']    = (int)$price;
                $products[$key]['stock']    = (int)$stock;
                break;
            }
        }
        $_SESSION['products'] = $products;
        $_SESSION['msg'] = "Product updated successfully!";
        header('location: ../view/product_list.php');
    }else{
        echo "please submit form...";
    }
?>