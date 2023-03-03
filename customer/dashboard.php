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

<section class="home-dash ms-5 ms-5"style="left:25px;" >
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>
               <hr class="divider">
                  
                </div>
               

           
        </header>
   
     
        <div class="tapnav">
        <a class="lefte ms-lg-3" href="addcustomer.php">Home</a>
        <a class="lefte ms-lg-3" href="order.php">Shop</a><br>
        <div class="ser-center fs-2 " > 


        <span class="text-center fs-1">Services</span></div> 
</div>
</div>
       <body class="human " style="background-color: var(--body-color);
    transition: var(--tran-05);">

 
<div class="card-group" style="margin-right:70px; margin-top:3rem; margin-left:3rem;">
  <div class="card">
    <img class="card-img-top" src="https://api.metroprint.ph/storage/product-preset-categories/OAQ9pd7BeD31Poe/preset-394bed0faadce20ef547ced4275be82b.webp" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Printing</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://api.metroprint.ph/storage/product-preset-categories/OAQ9pd7BeD31Poe/preset-394bed0faadce20ef547ced4275be82b.webp" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Binding</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://api.metroprint.ph/storage/product-preset-categories/OAQ9pd7BeD31Poe/preset-394bed0faadce20ef547ced4275be82b.webp" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Lamination</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://api.metroprint.ph/storage/product-preset-categories/OAQ9pd7BeD31Poe/preset-394bed0faadce20ef547ced4275be82b.webp" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Printing and Layout</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>


</section>
<section>
<div class="container style=margin-left:10rem;">

<h2 class="text-center">TOP Services</h2>
<div id="myCarousel" class="carousel slide"style="width:80%; height:50vh;margin-left:80px;" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators"style="width:50%;float:center;">
    <li data-target="#myCarousel" data-slide-to="0" ></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner"style="width:100%;height:50vh">

    <div class="item active">
      <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="Los Angeles" style="width:100%;height:50vh;">
      <div class="carousel-caption">
        <h3>Printing</h3>
        <p>Price</p>
      </div>
    </div>

    <div class="item">
      <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="Chicago" style="width:100%;height:50vh">
      <div class="carousel-caption">
        <h3>Binding</h3>
        <p>Price</p>
      </div>
    </div>
  
    <div class="item">
      <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="New York"style="width:100%;height:50vh">
      <div class="carousel-caption">
        <h3>Printing and Layout</h3>
        <p>Price</p>
      </div>
    </div>

  </div>


</div>
<div class="multi-carousel" data-mdb-interval="3000" data-mdb-items="5">

      </button>
  </div>
 
<h2 class="text-center"> Products</h2>
<div id="myCarousel" class="carousel slide float-md-center"style="width:80%; height:50vh;margin-left:80px;" data-ride="carousel">
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
        <h3>MUGs</h3>
        <p>Price!</p>
      </div>
    </div>

    <div class="item">
      <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="Chicago" style="width:100%;height:50vh">
      <div class="carousel-caption">
        <h3>Lanyard</h3>
        <p>Price</p>
      </div>
    </div>
  
    <div class="item">
      <img src="https://api.metroprint.ph/storage/product-preset-categories/GKlRbDv5lLrBa2p/preset-1c1876ceb4829ddef89befa5b773e544.webp" alt="New York"style="width:100%;height:50vh">
      <div class="carousel-caption">
        <h3>ID Holder</h3>
        <p>Price</p>
      </div>
    </div>

  </div>

 



</section>
