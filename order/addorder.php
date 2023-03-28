<?php 
require_once '../database/database.php';
require_once "../database/service_parameter.class.php";
require_once "../database/service_order.class.php";
// Check if the fosaverm has been submitted
if (isset($_POST['action']) && $_POST['action'] == 'Continue') {
   
    $user = new ServiceParam();
    // Sanitize input data

    $user->size= $_POST['size'];
    $user->unitPrice = $_POST['unit_price'];
    $user->printType= $_POST['print_type'];
    $user->colorType = $_POST['color_type'];
    
    $user = new ServiceOrder();
    $user->materialName = $_POST['material_name'];
    $user->filename = $_POST['filename'];

   
    

    // Check if any of the form fields are empty
    //if (empty($username)  || empty($firstname)||empty($lastname)||empty($email)||empty($contactNo)||empty($role)) {
      //  echo 'All fields are required';
      //  exit();
//}

    
    // Add the fee to the database
    if ($user->addService()) {
        // Redirect to a success page or display a success message
        header("Location: orderlist.php");
    } else {
        // Redirect to an error page or display an error message
        echo 'error';
    }
}