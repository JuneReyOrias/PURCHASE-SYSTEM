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
    
   



       
 

    <section class="home-dash ms-5 ms-5"style="height:38rem;background-color: var(--body-color); transition: var(--tran-05);
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
    <div class="table-container">
        <div class="table-heading">
            <h3 class="table-title">PURCHASE ORDERS</h3>
           
            
        </div>
        <div class="divider-no-border"></div>
        <table class="table">
            <thead>
                <tr>
                    
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Total</th>
                   
                    <th class="action">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td>1</td>
                    <td>Jaydee</td>
                    <td>200</td>
                    
                    <td class="action">
                        <a class="action-edit" href="#">View</a>
                        
                    </td>
                </tr>
                <tr>
                    
                    <td>2</td>
                    <td>Jaydee</td>
                    <td>100</td>
                    
                    <td class="action">
                        <a class="action-edit" href="#">View</a>
                    </td>
                </tr>
                <tr>
                    
                    <td>3</td>
                    <td>Jaydee</td>
                    <td>400</td>
                    
                    <td class="action">
                        <a class="action-edit" href="#">View</a>
                    </td>
                </tr>
                <tr>
                    
                    <td>4</td>
                    <td>Jaydee</td>
                    <td>120</td>
                    
                    <td class="action">
                        <a class="action-edit" href="#">View</a>
                    </td>
                </tr>
                <tr>
                    
                    <td>5</td>
                    <td>Jaydee</td>
                    <td>50</td>
                  
                    <td class="action">
                        <a class="action-edit" href="#">View</a>
                    </td>
                </tr>
                <tr>
                   
                    <td>6</td>
                    <td>Jaydee</td>
                    <td>600</td>
                    
                    <td class="action">
                        <a class="action-edit" href="#">View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


              
    </section>

