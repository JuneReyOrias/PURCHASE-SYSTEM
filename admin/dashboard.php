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
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Responsive Card Slider in HTML CSS & JavaScript with Swiperjs</title>-->

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container swiper">
      <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/fullDev.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile1.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">David Cardlos</h3>
                <h4 class="job">Full Stack Developer</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/photographer.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile2.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">Siliana Ramis</h3>
                <h4 class="job">Photographer</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/dataAna.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile3.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">Richard Bond</h3>
                <h4 class="job">Data Analyst</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/appDev.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile4.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">Priase</h3>
                <h4 class="job">App Developer</h4>
              </div>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-box">
              <!--<img src="images/showImg/blogger.jpg" alt="" />-->
            </div>
            <div class="profile-details">
              <!--<img src="images/profile/profile5.jpg" alt="" />-->
              <div class="name-job">
                <h3 class="name">James Laze</h3>
                <h4 class="job">Blogger</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>
<script>
var swiper = new Swiper(".slide-container", {
    slidesPerView: 4,
    spaceBetween: 20,
    sliderPerGroup: 4,
    loop: true,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1000: {
            slidesPerView: 4,
        },
    },
});</script>
 
    <script src="./js/sidebar.js"></script>
    
  </body>
</html>





</body>
</section>
