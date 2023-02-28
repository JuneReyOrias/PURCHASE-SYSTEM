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

        <header>
            <div class="image-logo-center">
                <span >
              
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="...">
                </span>

                <div class="text-center">
                    <span class="name">UNIVERSITY PRESS</span>
                  
                </div>
                </div>

           
        </header>
   
        <hr class= "divider">
        <div class="tapnav">
        <a class="active" href="addcustomer.php">Home</a>
        <a href="#contact">Contact</a>
        <a href='#contact us'>About</a>
</div>
        <div class="col1" ><span>Offered Services</span></div>
     
        
        <div class="home-content">
        <div class="overview-boxes" >
  
            <div class="box">
                <div class="right-side">
                    <div class="box-topic" class="btn-1">Printing</div> </br>
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
                
 <div>

 </div>
          

