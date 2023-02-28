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
    <div class="card"style=" margin-top:2rem; box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;" >
      <div class="card-body">
        <h5 class="card-title">Printing</h5>
        <a href="#" class="btn btn-primary">1243</a>
        <a href="#" class="btn btn-primary">1134</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card"style="  margin-top:2rem;box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;" >
      <div class="card-body">
        <h5 class="card-title">Binding</h5>
        <a href="#" class="btn btn-primary">467</a>
        <a href="#" class="btn btn-primary">567</a>
</div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card"style=" margin-top:2rem; box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;">
      <div class="card-body" >
        <h5 class="card-title">Lamination</h5>
        <a href="#" class="btn btn-primary">467</a>
        <a href="#" class="btn btn-primary">467</a><br>
      </div>
    </div>
  </div> 
    </div>
  </div>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner"style="margin-left:4rem width:25rem; height:50vh">
    <div class="carousel-item active" style="margin-left:12rem ">
      <img src="https://www.makeitactive.com/images/2018/03/11/printing.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQbViIaXAca9Qe5soOlacLLwQdl42Z7BJS-TPcFvWPGYGMTIMOdJkf7bQEe2w3M0bhd3Q&usqp=CAU" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSW2JIWtrDq8Pq_ahT5MYalaDymg6fNlWZxw&usqp=CAU" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</section>







