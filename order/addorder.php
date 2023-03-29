<?php 
require_once '../database/database.php';
require_once "../database/service_parameter.php";
require_once "../database/service_order.class.php";
// Check if the fosaverm has been submitted
if (isset($_POST['action']) && $_POST['action'] == 'Continue') {
   print_r ($_POST);
    $servc = new ServiceParam();
    // Sanitize input data

    $servc->size= $_POST['size'];
    $servc->unitPrice = $_POST['unit_price'];
    $servc->printType= $_POST['print_type'];
    $servc->colorType = $_POST['color_type'];
    $servc->serviceCatId = $_POST['serviceCat_id'];
 

   
    

    // Check if any of the form fields are empty
    //if (empty($servcname)  || empty($firstname)||empty($lastname)||empty($email)||empty($contactNo)||empty($role)) {
      //  echo 'All fields are required';
      //  exit();
//}

    
    // Add the fee to the database
    if ($servc->addparam()) {
        // Redirect to a success page or display a success message
        header("Location: orderlist.php");
    } else {
        // Redirect to an error page or display an error message
        echo 'error';
    }
}