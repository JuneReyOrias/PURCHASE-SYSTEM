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
   
   <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide"style="width:40%;float:center;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators"style="width:50%;float:center;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"style="width:50%;"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner"style="width:100%;height:50vh">

      <div class="item active">
        <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="Los Angeles" style="width:100%;height:50vh">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="Chicago" style="width:100%;height:50vh">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="New York"style="width:100%;height:50vh">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


   
<div class="container">
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide"style="width:40%;float:center;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators"style="width:50%;float:center;">
      <li data-target="#myCarousel" data-slide-to="0" class="active"style="width:50%;"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner"style="width:100%;height:50vh">

      <div class="item active">
        <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="Los Angeles" style="width:100%;height:50vh">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="Chicago" style="width:100%;height:50vh">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="New York"style="width:100%;height:50vh">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



</body>
</html>