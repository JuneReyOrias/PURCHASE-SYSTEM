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
   

   

<!-- Home Section Start  -->
<section class="home">

   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <!-- PHSI Carousel Start -->
         <?php 
         require_once 'classes/carousel_model.php';
         $carousel = new Carousel();
         //We will now fetch all the records in the array using loop
         //use as a counter, not required but suggested for the table
         $i = 1;
         //loop for each record found in the array
         foreach ($carousel->fetchAllRecords() as $value) { //start of loop
         $carousel_img = $value['filename'];
         $caousel_head = $value['carousel_title'];
         $carousel_body = $value['carousel_content'] ;
         ?>
         <section class="swiper-slide slide"  style="background: url('uploads/<?php echo $carousel_img; ?>') no-repeat;">
            <div class="content" id="unesco_content">
               <h3><?php echo $value['carousel_title'] ?></h3>
               <p><?php echo $value['carousel_content'] ?></p>
               <!--<a href="#" class="btn">Read more</a> -->
            </div>
         </section>
         <?php
         $i++;
      }
      //end loop
  ?>
         <!-- PHSI Carousel End -->
      </div>
      <!--Next/Prev Carousel Button-->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!--Current Carousel 3 dots-->
      <div class="swiper-pagination"></div>
   </div>

</section>
</body>
</section>