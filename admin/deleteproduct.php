<?php 
   require_once '../database/database.php';
   require_once "../database/products_class.php";
    
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        
        $productid = new Products();
        $productid->productId = $_POST['product_id'];
            if($productid->delete()){
                header('location: products.php');
            }
            else{
                echo 'Error deleting products: ' ;
            }
    }
?>