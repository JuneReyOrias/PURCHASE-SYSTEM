<?php

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    //if the above code is false then html below will be displayed

   
    $page_title = 'Upress | Dashboard';
    $dashboard = 'active';

    require_once '../includes/header.php';
    require_once '../includes/cust.sidebar.php';
?>
    
   



       
 

    <section class="home-dash"style="
left:25px; " >
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>
               <hr class="divider">
                  
                </div>
               

           
        </header>
   
      
        <div class="tapnav">
        <  <a class="lefte ms-lg-3" href="dashboard.php">Home</a>
        <a href="">Shop</a>
        <a class="order" href="purchase.php" ><span>></span>Purchase</a><br>

        </div>
</div>

<body class="human " style="background-color: var(--body-color); 
    transition: var(--tran-05);">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking</title>
    <link rel="stylesheet" href="style.css">

    <!-- UniIcon CDN Link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="main">

        
        <ul>
            <li>
                <i class="icon uil uil-capture"></i>
                <div class="progress one">
                    <p>1</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Add To Cart</p>
            </li>
            <li>
                <i class="icon uil uil-clipboard-notes"></i>
                <div class="progress two">
                    <p>2</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Fill Details</p>
            </li>
            <li>
                <i class="icon uil uil-credit-card"></i>
                <div class="progress three">
                    <p>3</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Make Payment</p>
            </li>
            <li>
                <i class="icon uil uil-exchange"></i>
                <div class="progress four">
                    <p>4</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order in Progress</p>
            </li>
            <li>
                <i class="icon uil uil-map-marker"></i>
                <div class="progress five">
                    <p>5</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Order Arrived</p>
            </li>
        </ul>

    </div>

    <script src="main.js"></script>
</body>
</html>
