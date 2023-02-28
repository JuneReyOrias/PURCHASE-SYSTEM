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

<section class="home-dash ms-5 ms-5"style="height:160vh; width:120%; background-color: var(--body-color); transition: var(--tran-05);
left:25px; " >
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
        <a href="#contact">Contact</a>
        <a href='#contact us'>About</a><br>
        <div class="ser-center fs-2 " >

    
</div>
</div>





<section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
              <img src="../img/maderal.jpg"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                style="width: 150px; z-index: 1">
              <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                style="z-index: 1;">
                Edit profile
              </button>
            </div>
            <div class="ms-3" style="margin-top: 130px;">
              <h5>Joe Maderal</h5>
              <p>Philippines </p>
            </div>
          </div>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1">
              <div>
                <p class="mb-1 h5">253M</p>
                <p class="small text-muted mb-0">Photos</p>
              </div>
              <div class="px-3">
                <p class="mb-1 h5">1026M</p>
                <p class="small text-muted mb-0">Followers</p>
              </div>
              <div>
                <p class="mb-1 h5">478m</p>
                <p class="small text-muted mb-0">Following</p>
              </div>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1">About</p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">Web Developer</p>
                <p class="font-italic mb-1">Lives in New Zamboanga  City</p>
                <p class="font-italic mb-0">Choreographer</p>
              </div>
            </div>
           
        </div>
      </div>
    </div>
  </div>
</section>