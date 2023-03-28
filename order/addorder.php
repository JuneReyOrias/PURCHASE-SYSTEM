<?php 
require_once '../database/database.php';
require_once "../database/user.class.php";

// Check if the fosaverm has been submitted
if (isset($_POST['action']) && $_POST['action'] == 'Continue') {
   
    $user = new ServiceParam();
    // Sanitize input data

    $user->size= $_POST['user_name'];
    $user->unitPrice = $_POST['user_pass'];
    $user->printType= $_POST['lastname'];
    $user->colorType = $_POST['firstname'];
    
    $user = new ServiceOrder();
    $user->materialName = $_POST['user_pass'];
    $user->filename = $_POST['lastname'];

   
    

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