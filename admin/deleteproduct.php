<?php 
    require_once '../database/database.php';
    require_once "../database/product_class.php";
    
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        $product = new Products();
        $product->productId = $_POST['product_id'];
            if($fee->delete()){
                header('location: products.php');
            }
            else{
                echo 'Error deleting products: ' ;
            }
    }
?>