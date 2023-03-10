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
    
  

    <section class="home-dash ms-5 ms-5"style="left:25px;" >
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>
               <hr class="divider">
                  
                </div>
               

           
        </header>
   
      
        <div class="tapnav">
        <  <a class="lefte ms-lg-3" href="../customer/dashboard.php">Home</a>
        <a href="">Shop</a>
        <a class="order" href="order.php" ><span></span>Order</a>
        <a class="order" href="orderlist.php" ><span>></span>Lamination</a><br>
        <div class="ser-center fs-2 " >
             <span class="ser-center fs-2 " >Services</span></div> 
</div>
       

<body class="human " style="background-color: var(--body-color);
    transition: var(--tran-05);">
     
        
        
    <div class="select-container-md">              
            <form class="select-form form-control-md"  action="sample.php" method="post">
            <div class="col2" ><spani class='bx bx-printer icon' >Lamination</span></div>

            <label  for="username">Name</label>
            <input class="form-print" type="text" id="user_name" name="user_name" placeholder="Enter name" required tabindex="1">
            <label for="password">Email</label>
            <input class="form-print" type="password" id="password" name="password" placeholder="Enter email" required tabindex="2">
            <label for="password">Contact</label>
            <input class="form-print" type="password" id="password" name="password" placeholder="Contact" required tabindex="2">
            

        <label class="design"for=""></i>Lamination type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        
        <option value="">Wholepage Only</option>
     

        <div>
        <input class="fc" type="text" name="digitall" placeholder="Quantity">
        <input class="form-control" id="formFileSm" type="file" />
        

            <input class="size" placeholder="Input Size"list="size" name="size"><br>
            <select class="size"id="size">
            <option selected>size</option>
            <option value="A4">A4</option>
            <option value="Letter">Letter</option>
            
</select><br>
        <label class="design"for=""></i>Lamination type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        
        <option value="">Wholepage Only</option>

     

        <div>
        <input class="fc" type="text" name="digitall" placeholder="Quantity">
        <input class="form-control" id="formFileSm" type="file" />
        <input class="size" placeholder="Input Size"list="size" name="size"><br>
            <select class="size"id="size">
            <option selected>size</option>
            <option value="A4">A4</option>
            <option value="Letter">letter</option>
           
</selected>
        <input class="buttons" href="order.php" type="submit" value="continue" name="continue" tabindex="3" >
        </div>
       
        </div>
        



</form> 
                    </div>
                </div>

            
                
 <div>

 </div>
          
    </section>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".multiple-select").select2({
    maximumSelectionLength: 1
    
});
</script>
<script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})
decodeURI                   
searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

   
    <script src="./js/sidebar.js"></script>
  </body>
</html>
