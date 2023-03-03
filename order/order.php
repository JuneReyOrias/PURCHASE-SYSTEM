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
    
  

    <section class="home-dash ms-5 ms-5"style="left:25px;">
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>
               <hr class="divider">
                  
                </div>
               

           
        </header>
   
      
        <div class="tapnav">
       <a class="lefte ms-lg-3" href="addcustomer.php">Home</a>
        <a href="">Shop</a>
        <a class="order" href="order.php" ><span>></span>Order</a><br>
        <div class="ser-center fs-2 " >
             <span class="ser-center fs-2 " >Services</span></div> 
</div>
        
</div>
<body class="human " style="background-color: var(--body-color);
    transition: var(--tran-05);">
<div class="row">
  <div class="col-sm-3"style="margin-left:8rem;" >
    <div class="card"style="  margin-top:3rem; box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;">
      <div class="card-body">
        <h5 class="card-title">Printing</h5>
      
        <a href="print.php" class="btn btn-primary">Continue</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card"style="   margin-top:3rem;box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;">
      <div class="card-body">
        <h5 class="card-title">Binding</h5>
    
        <a href="binding.php" class="btn btn-primary">Continue</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card"style="  margin-top:3rem;box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;">
      <div class="card-body">
        <h5 class="card-title">Lamination</h5>
    
        <a href="lamination.php" class="btn btn-primary">Continue</a><br>
      </div>
    </div>
  </div>
  <div class="col-sm-4" style="margin-top:2rem;">
    <div class="card"style="  box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;">
      <div class="card-body">
        <h5 class="card-title">Printing and Binding</h5>
    
        <a href="#" class="btn btn-primary">Continue</a>
      </div>
    </div>
  </div>
 <div class="col-sm-4" style="margin-top:2rem;">
    <div class="card"style="  box-shadow: 0 14px 16px #990000;border-radius: 12px; height:10rem;">
      <div class="card-body">
        <h5 class="card-title">Printing and Binding</h5>
    
        <a href="#" class="btn btn-primary">Continue</a>
      </div>
    </div>
  </div>

</div>
          
    </section>

