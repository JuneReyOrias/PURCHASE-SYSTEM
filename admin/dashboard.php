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
    require_once '../includes/sidebar.php';
?>
<section class="home-dash ms-5"style="left:25px;" >
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>

                  
                </div>
               

           
        </header>
   
        <hr class= "divider">
        <div class="tapnav">
        <a class="lefte ms-lg-3" href="addcustomer.php">Home</a>
        <a href="#contact">Admin</a>
        <a href='#contact us'>Hola!</a><br>
        <div class="ser-center fs-2 " >

        <span></span></div> 
</div>
</div>
<body class="human " style="background-color: var(--body-color) height;70vh;
    transition: var(--tran-05);">
   

   



</body>
</section>