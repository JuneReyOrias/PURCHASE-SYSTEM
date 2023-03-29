<?php 
require_once '../database/database.php';
require_once "../database/user.class.php";

// Check if the fosaverm has been submitted
if (isset($_POST['action']) && $_POST['action'] == 'update') {
   
    $user = new Users();
    // Sanitize input data

    $user->username = $_POST['user_name'];
    $user->password = $_POST['user_pass'];
    $user->lastname = $_POST['lastname'];
    $user->firstname = $_POST['firstname'];
    $user->email = $_POST['email'];
    $user->contactNo= $_POST['contact_no'];
    $user->role = $_POST['role'];
  
   
    

    // Check if any of the form fields are empty
    //if (empty($username)  || empty($firstname)||empty($lastname)||empty($email)||empty($contactNo)||empty($role)) {
      //  echo 'All fields are required';
      //  exit();
//}

    
    // Add the fee to the database
    if ($user->update()) {
        // Redirect to a success page or display a success message
        header("Location: customers.php");
    } else {
        // Redirect to an error page or display an error message
        echo 'error';
    }
}