<?php 
require_once '../database/database.php';
require_once "../database/service_parameter.php";
require_once "../database/multipletable.class.php";

print_r($_POST);

// Check if the fosaverm has been submitted
if (isset($_POST['action']) && $_POST['action'] == 'add') {
  
    $multi = new multi();
    // Sanitize input data

    $multi->Service_Category= $_POST['service_category'];
    $multi->description= $_POST['description'];

    $multi->size= $_POST['size'];
    $multi->unitPrice = $_POST['unit_price'];
    $multi->printType= $_POST['print_type'];
    $multi->colorType = $_POST['color_type'];
 
    $multi->materialId= $_POST['material_id'];
    $multi->qty = $_POST['qty'];
    $multi->ServiceCatId= $_POST['serviceCat_id'];
    $multi->totalPrice = $_POST['total_price'];
    $multi->filename = $_POST['filename'];
   
    

    // Check if any of the form fields are empty
    //if (empty($servcname)  || empty($firstname)||empty($lastname)||empty($email)||empty($contactNo)||empty($role)) {
      //  echo 'All fields are required';
      //  exit();
//}

    
    // Add the fee to the database
    if ($multi->createProgram()) {
        // Redirect to a success page or display a success message
        header("Location: invoices.php");
    } else {
        // Redirect to an error page or display an error message
        echo 'error';
    }
}
?>