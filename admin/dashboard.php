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
<section class="home-dash "style=" background-color: var(--body-color);
left:22px;" >
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
        <a href="#contact">Contact</a>
        <a href='#contact us'>About</a><br>
        <div class="ser-center fs-2 " >

        <span>Services</span></div> 
</div>
</div>
       
        
        <div class="home-content">
        <div class="overview-boxes ms-lg-5" >
            <div class="box ms-lg-5 " style= "margin-left:23px">
                <div class="right-side">
                    <div class="box-topic ms-lg-3" class="btn-1">Printing</div> </br>
                    <div class="number">Printing is a process for mass reproducing text and images using a master form or template.</div>
                    
                    </div>
                </div>

                <div class="box">
                <div class="center">
                    <div class="box-topic" class="btn-1">Layout</div></br>
                    <div class="number">The act or process of planning or laying out in detail.</div>
                    
                    </div>
                </div>
                
               
            <div class="box">
                <div class="left-side">
                    <div class="box-topic" class="btn-1">Binding</div></br>
                    <div class="number">A strong covering holding the pages of a book together</div>
                    
                    </div>
                    
                </div>

                <div class="box">
                <div class="left-side">
                    <div class="box-topic" class="btn-1">Binding</div></br>
                    <div class="number">A strong covering holding the pages of a book together</div>
                    
                    </div>
                    
                </div>

                
 <div>
    

 </div>
   
 <div>
    
 </div>
 <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../img/binding.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Binding</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../img/printing.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
</section>

