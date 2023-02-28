       
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



<section class="home-dash ms-5 ms-5"style="height:220vh;width:130%;background-color: var(--body-color); transition: var(--tran-05);
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
    <a class="order" href="order.php" ><span>></span>Order</a>
    <a class="order" href="order.php" ><span>></span>Printing</a><br>
    <div class="ser-center fs-2 " >
         <span class="ser-center fs-2 " >Services</span></div> 
</div> 
        
        <div class="home-content">
    <div class="select-container">              
            <form class="select-form" action="sample.php" method="post">
            <div class="col2" ><spani class='bx bx-printer icon' >Printing Form</span></div>

            <label  for="username">Name</label>
            <input class="form-print" type="text" id="user_name" name="user_name" placeholder="Enter name" required tabindex="1">
            <label for="password">Email</label>
            <input class="form-print" type="password" id="password" name="password" placeholder="Enter email" required tabindex="2">
            <label for="password">Contact</label>
            <input class="form-print" type="password" id="password" name="password" placeholder="Contact" required tabindex="2">
            

        <label class="design"for=""></i>Printing type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        
        <option value="">Digital Color</option>
        <option value="">Digital Black and White</option>
        <option value="">Photo Printing</option>
        <option value="">Rhisograph</option>
        <option value="">Kromekote</option>

        <div>
        <input class="fc" type="text" name="digitall" placeholder="Quantity">
        <input class="form-control" id="formFileSm" type="file" />
        

            <input class="size" list="size" name="size">
            <datalist class="size"id="size">
            <option label="size">size</option>
            <option value="Long">
            <option value="Short">
            <option value="A4">
            </datalist>
        
        <label class="design"for=""></i>Printing type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        
        <option value="">Digital Color</option>
        <option value="">Digital Black and White</option>
        <option value="">Photo Printing</option>
        <option value="">Rhisograph</option>
        <option value="">Kromekote</option>

        <div>
        <input class="fc" type="text" name="digitall" placeholder="Quantity">
        <input class="form-control" id="formFileSm" type="file" />
        <input class="size" list="size" name="size">
            <datalist class="size"id="size">
            <option label="size">size</option>
            <option value="Long">
            <option value="Short">
            <option value="A4">
            </datalist>
        <input class="buttons" href="order.php" type="submit" value="continue" name="continue" tabindex="3" >
        </div>
       
        </div>
        



</form> 
                    </div>
                </div>

            
                
 <div>

 </div>
          
    </section>

</nav>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".multiple-select").select2({
    maximumSelectionLength: 1
    
});
