<?php 
require_once '../database/database.php';
require_once "../database/products.class.php";

// Check if the fosaverm has been submitted
if (isset($_POST['action']) && $_POST['action'] == 'add') {
   
    $product = new Products();
    // Sanitize input data

    $product->productName = $_POST['product_name'];
    $product->productDesc = $_POST['product_desc'];
    $product->unitPrice = $_POST['unit_price'];
    $product->qty = $_POST['qty'];
   
  
   
    

    // Check if any of the form fields are empty
    //if (empty($productname)  || empty($firstname)||empty($lastname)||empty($email)||empty($contactNo)||empty($role)) {
      //  echo 'All fields are required';
      //  exit();
//}

    
    // Add the fee to the database
    if ($product->addProduct()) {
        // Redirect to a success page or display a success message
        header("Location: products.php");
    } else {
        // Redirect to an error page or display an error message
        echo 'error';
    }
}