<?php 
require_once '../database/database.php';
require_once "../database/service_parameter.php";
require_once "../database/service_order.class.php";
// Check if the fosaverm has been submitted
f (isset($_POST['action']) && $_POST['action'] == 'add') {
   print_r ($_POST['add']);
    $service = new ServiceParam();
    // Sanitize input data

    $service->size= $_POST['size'];
    $service->unitPrice = $_POST['unit_price'];
    $service->printType= $_POST['print_type'];
    $service->colorType = $_POST['color_type'];
   
 

   
    

    // Check if any of the form fields are empty
    //if (empty($servcname)  || empty($firstname)||empty($lastname)||empty($email)||empty($contactNo)||empty($role)) {
      //  echo 'All fields are required';
      //  exit();
//}

    
    // Add the fee to the database
    if ($service->addparam()) {
        // Redirect to a success page or display a success message
        header("Location: invoices.php");
    } else {
        // Redirect to an error page or display an error message
        echo 'error';
    }
}