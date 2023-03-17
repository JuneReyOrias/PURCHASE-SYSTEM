<?php 
require_once '../database/database.php';
require_once "../database/user.class.php";

// Check if the fosaverm has been submitted
if (isset($_POST['action']) && $_POST['action'] == 'add') {
   
    $newuser = new Users();
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

    
    // Add the fee to the database
    if ($newuser->addUser()) {
        // Redirect to a success page or display a success message
        header("Location: customers.php");
    } else {
        // Redirect to an error page or display an error message
        echo 'error';
    }
}