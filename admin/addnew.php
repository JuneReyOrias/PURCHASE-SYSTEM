<?php 
require_once '../database/database.php';
require_once "../database/user.class.php";

// Check if the fosaverm has been submitted
if (isset($_POST['action']) && $_POST['action'] == 'add') {
   
    $user = new Users();
    // Sanitize input data

   
    

    // Check if any of the form fields are empty
    //if (empty($username)  || empty($firstname)||empty($lastname)||empty($email)||empty($contactNo)||empty($role)) {
      //  echo 'All fields are required';
      //  exit();
//}

    
    // Add the fee to the database
    if ($user->add()) {
        // Redirect to a success page or display a success message
        header("Location: customers.php");
    } else {
        // Redirect to an error page or display an error message
        echo 'error';
    }
}