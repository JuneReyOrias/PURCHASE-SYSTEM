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
    transition: var(--tran-05); ">
</body>

<div class="container style=margin-left:10rem;">

  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide"style="width:40%; margin-left:50px;" data-ride="carousel">
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
  <div class="multi-carousel" data-mdb-interval="3000" data-mdb-items="5">
    <div class="d-flex justify-content-center m-2 mb-3">
        <button class="carousel-control-prev btn btn-pink btn-floating mx-3" type="button" tabindex="0" data-mdb-slide="prev">
            <i class="fas fa-angle-left fa-lg"></i>
        </button>
        <button class="carousel-control-next btn btn-pink btn-floating mx-3" type="button" tabindex="0" data-mdb-slide="next">
            <i class="fas fa-angle-right fa-lg"></i>
        </button>
    </div>
    <div class="conatainer">
    <div class="row">
  <div class="col-sm-3">
    <div class="multi-carousel-inner">
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(4).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Moda</h5>
                    <p class="card-text">Plan B</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="price mb-0">9,99 $</p>
                </div>
      
                <div class="multi-carousel-inner">
        <div class="multi-carousel-item">
            <div class="card m-3">
            <div class="row">
                <div class="col-sm-3">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(4).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Moda</h5>
                    <p class="card-text">Plan B</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="price mb-0">9,99 $</p>
                </div>
            </div>
        </div>
            </div>
        </div>

  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide float-md-center"style="width:40%;margin-left:50px;" data-ride="carousel">
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



</section>
