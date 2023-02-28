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
    
  
    </section>

    <section class="home-dash ms-5 ms-5"style="height:34rem;background-color: var(--body-color); transition: var(--tran-05);
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
        <  <a class="lefte ms-lg-3" href="addcustomer.php">Home</a>
        <a href="">Shop</a>
        <a class="order" href="order.php" ><span>></span>Order</a><br>
        <div class="ser-center fs-2 " >
             <span class="ser-center fs-2 " >Services</span></div> 
</div>
        
     
        
            <div class="home-content">
            <div class="card">
            <div class="checkbox-container">  

            <form  action="print.php" method="post">
            <div>
            <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
            <label for="checkbox-1" class="checkbox-custom-label"><i class='bx bx-printer icon' ></i>   Printing</label>
        </div>
        <div>
  <input id="checkbox-2" class="checkbox-custom" name="checkbox-2" type="checkbox">
  <label for="checkbox-2" class="checkbox-custom-label"><i class='bx bx-book icon' ></i> <a class="order" href="binding.php" ><span></span>Binding </a> </label>
</div>

    <div>
         <input id="checkbox-3" class="checkbox-custom" name="checkbox-3" type="checkbox">
         <label for="checkbox-3" class="checkbox-custom-label"><i class='bx bx-printer icon' ></i><a class="order" href="lamination.php" ><span>Lamination </span></a></label>
</div>
          

<input class="buttons" href="order.php" type="submit" value="continue" name="continue" tabindex="3" >
</form>
</select>

                    </div>
                </div>


 <div>

 </div>
          
    </section>

