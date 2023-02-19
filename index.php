<?php
    
    //this is where the page starts

    //start session
    session_start();

    //check if user is login already otherwise send to login page
    if (isset($_SESSION['role']) == 'twst'){
        header('location: ../customer/dashboard.php');
    }
    else if (isset($_SESSION['role']) == 'staff'){
        header('location: ../purchase/purchase.php');
    }
    else{
       header('location: ../customer/dashboard.php');
    }

?>
