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
<section class="home-dash"style="
left:25px;" >
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>

                  
                </div>
               

           
        </header>
   
        <hr class= "divider">
        <div class="tapnav">
        <a class="lefte ms-lg-3" href="dashboard.php">Home</a>
        <a href="#adprofile.php">Admin</a>
        <a href='#contact us'>Hola!</a>
        <a href="">Profile</a></br>
        <div class="ser-center fs-2 " >

        <span></span></div> 
</div>
</div>

<body class="human " style="background-color: var(--body-color); 
    transition: var(--tran-05);">
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="../img/maderal.jpg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Admin Joe M</h5>
            <p class="text-muted mb-1">Staff head</p>
            <p class="text-muted mb-4">Putik Zamboanga City, Philippines</p>
            <div class="d-flex justify-content-center mb-2">
            </div>
          </div>
        </div>
        
       