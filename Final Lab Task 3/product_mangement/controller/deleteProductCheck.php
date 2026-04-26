<?php
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $products = $_SESSION['products'];
        foreach($products as $key => $p){
            if($p['id'] == $id){
                unset($products[$key]);
                break;
            }
        }
        
        $_SESSION['products'] = array_values($products);
        $_SESSION['msg'] = "Product deleted successfully!";
        header('location: ../view/product_list.php');
    }else{
        header('location: ../view/product_list.php');
    }
?>