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

        <span>Services</span></div> 
</div>
</div>
       

        
<div class="row">
  <div class="col-sm-3">
    <div class="card"style="  box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;" >
      <div class="card-body">
        <h5 class="card-title">Printing</h5>
        <a href="#" class="btn btn-primary">1243</a>
        <a href="#" class="btn btn-primary">1134</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card"style="  box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;" >
      <div class="card-body">
        <h5 class="card-title">Binding</h5>
        <a href="#" class="btn btn-primary">467</a><
        <a href="#" class="btn btn-primary">567</a>
      </div
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body"style="  box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;" >
        <h5 class="card-title">Lamination</h5>
        <a href="#" class="btn btn-primary">467</a>
        <a href="#" class="btn btn-primary">467</a><br>
      </div>
    </div>
  </div> 
    </div>
  </div>


</section>







