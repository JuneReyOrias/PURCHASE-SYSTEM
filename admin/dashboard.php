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
<body class="human " style="background-color: var(--body-color);
    transition: var(--tran-05);">
   
   <div>
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">

            <!--Carousel item 1-->
            <div class="item active">
                <img src="http://localhost:6054/wp-content/themes/BLANK-Theme/images/material/ej-manuel.png" alt="buffalo-skyline" width="640" height="360" />
                <div class="carousel-caption">
                    <h4>First Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>

            <!--Carousel item 2-->
            <div class="item">
                <img src="https://api.metroprint.ph/storage/product-preset-categories/PEnaYVabqL3wR91/preset-dd804abf49cf0e65a92931efaf7a42e0.webp" width="640" height="360" />
                <div class="carousel-caption">
                    <h4>Second Thumbnail label</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>

            <!--Carousel item 3-->
            <div class="item">
                <img src="http://localhost:6054/wp-content/themes/BLANK-Theme/images/material/images.jpg" alt="the-buzz-img3" width="640" height="360" >
                <div class="carousel-caption">
                    <h4>Third Thumbnail label</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>
   



</body>
</section>