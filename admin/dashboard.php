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
   

   <div class="multi-carousel" data-mdb-interval="3000" data-mdb-items="5">
    <div class="d-flex justify-content-center m-2 mb-3">
        <button class="carousel-control-prev btn btn-pink btn-floating mx-3" type="button" tabindex="0" data-mdb-slide="prev">
            <i class="fas fa-angle-left fa-lg"></i>
        </button>
        <button class="carousel-control-next btn btn-pink btn-floating mx-3" type="button" tabindex="0" data-mdb-slide="next">
            <i class="fas fa-angle-right fa-lg"></i>
        </button>
    </div>  


    <div class="multi-carousel-inner"style="margin-left:10rem;">
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(4).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Moda</h5>
                    <p class="card-text">Plan B</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        
                    </ul>
                    <p class="price mb-0">9,99 $</p>
                </div>
            </div>
        </div>
        <div class="multi-carousel-item"style="margin-left:-34rem;">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(1).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Indie City</h5>
                    <p class="card-text">Pixies</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                      
                    </ul>
                    <p class="price mb-0">14,99 $</p>
                </div>
       