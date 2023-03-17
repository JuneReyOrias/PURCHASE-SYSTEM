<?php 
require_once '../database/database.php';
require_once "../database/user.class.php";

// Check if the fosaverm has been submitted
if (isset($_POST['insertdata']) && $_POST['insertdata'] == 'Save data') {
    print_r($_POST);
    // Sanitize input data
    $username = htmlspecialchars($_POST['user_name']);
    $password = htmlspecialchars($_POST['user_pass']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $contactNo = htmlspecialchars($_POST['contact_no']);
    $role = htmlspecialchars($_POST['role']);
    // Check if any of the form fields are empty
    if (empty($username) || empty($password) || empty($firstname)||empty($lastname)||empty($email)||empty($contactNo)||empty($role)) {
        echo 'All fields are required';
        exit();
    }

    // Validate fee amount: must be a positive number
    //if (!is_numeric($feeAmount) || $feeAmount <= 0) {
      //  echo 'Invalid fee amount';
     //   exit();
    //}

    // Create a new Fee object and set its properties
    $user = new Users();
    $insertdata = $user->add();
    
    // Add the fee to the database
    if ($user->add()) {
        header('location: customers.php');
    } else {
        echo 'Failed to add fee.';
    }
    
}

?>