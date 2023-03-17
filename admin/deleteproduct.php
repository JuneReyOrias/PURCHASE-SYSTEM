<?php 
   require_once '../database/database.php';
   require_once "../database/products_class.php";
    
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
         $product = new Products();
         $id = $_POST['delete_id'];
    
            if($product->delete()){
                header('location: products.php');
            }
            else{
                echo 'Error deleting products: ' ;
            }
    }
?>