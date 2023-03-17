<?php 
    require_once '../database/database.php';
    require_once "../database/product_class.php";
    
    if (isset($_POST['action']) && $_POST['action'] == 'delete') {
        
    
            if($productid->deleteRecords()){
                header('location: products.php');
            }
            else{
                echo 'Error deleting products: ' ;
            }
    }
?>