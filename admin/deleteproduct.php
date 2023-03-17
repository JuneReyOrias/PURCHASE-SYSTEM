<?php 
   require_once '../database/database.php';
   require_once "../database/products_class.php";
    
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        print_r($_POST['action']);
        $product = new Products();
        $product->productId = $_POST['product_id'];

            if($product->delete()){
                header('location: products.php');
            }
            else{
                echo 'Error deleting products: ' ;
            }
    }
?>