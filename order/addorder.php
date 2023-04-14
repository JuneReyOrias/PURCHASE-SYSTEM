<?php 
require_once '../database/database.php';
require_once "../database/service_parameter.php";
require_once "../database/multipletable.class.php";
// Check if the fosaverm has been submitted
if (isset($_POST['action']) && $_POST['action'] == 'add') {
  
    $service = new multi();
    // Sanitize input data

    $service->Service_Category= $_POST['service_category'];
    $service->description= $_POST['description'];

    $service->size= $_POST['size'];
    $service->unitPrice = $_POST['unit_price'];
    $service->printType= $_POST['print_type'];
    $service->colorType = $_POST['color_type'];
 
    $service->materialId= $_POST['material_id'];
    $service->qty = $_POST['qty'];
    $service->ServiceCatId= $_POST['serviceCat_id'];
    $service->totalPrice = $_POST['total_price'];
    $service->filename = $_POST['filename'];
   
    

    // Check if any of the form fields are empty
    //if (empty($servcname)  || empty($firstname)||empty($lastname)||empty($email)||empty($contactNo)||empty($role)) {
      //  echo 'All fields are required';
      //  exit();
//}

    
    // Add the fee to the database
    if ($service->createProgram()) {
        // Redirect to a success page or display a success message
        header("Location: invoices.php");
    } else {
        // Redirect to an error page or display an error message
        echo 'error';
    }
}
?>