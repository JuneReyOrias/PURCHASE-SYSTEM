<?php
    
    //this is where the page starts

    //start session
    session_start();

    //check if user is login already otherwise send to login page
    if (isset($_SESSION['acc']) == 'customer'){
        header('location: ../customer/dashboard.php');
    }
    else if (isset($_SESSION['acc']) == 'admin'){
        header('location: ../admin/purchase.php');
    }
    else{
       header('location: ../customer/dashboard.php');
    }

?>
