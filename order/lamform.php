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
?>
    
   
    
   
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <img src="../img/upress-logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">University</span>
                    <span class="profession">Press</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../customer/dashboard.php">
                            <i class='bx bxs-dashboard icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                        
                    </li>

                    <li class="nav-link">
                        <a href="../purchase/purchases.php">
                            <i class='bx bx-shopping-bag icon' ></i>
                            <span class="text nav-text">Purchase</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="order.php">
                            <i class='bx bx-cart icon' ></i>
                            <span class="text nav-text">Orders</span>
                        </a>
                    </li>

                   
                    <li class="nav-link">
                        <a href="../trackordr/trackorder.php">
                            <i class='bx bx-map icon' ></i>
                            <span class="text nav-text">Track Orders</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../login/login.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>



       
    </section>

    <section class="home">
    <header>
            <div class="image-logo">
                <span >
                <img src="../img/upress-logo.png" >
                </span>

                <div class="text">
                    <span class="name">UNIVERSITY PRESS</span>
                  
                </div>
                </div>

           
        </header>
   
        <hr class= "divider">
        <div class="tapnav">
        <a class="active" href="../customer/dashboard.php">Home</a>
        <a href="order.php">Shop</a>
        <a class="order" href="order.php" ><span>></span>Order</a>
        <a class="order" href="lamination.php" ><span>></span>Lamination</a>
        <a class="order" href="order.php" ><span>></span>Form</a>
        
</div>
       
     
        
        <div class="home-content">
    <div class="select-container">              
            <form class="select-form" action="order.php" method="post">
            <div class="col2" ><spani class='bx bx-printer icon' >Form</span></div>

            <label for="username">Name</label>
            <input type="text" id="user_name" name="user_name" placeholder="Enter name" required tabindex="1">
            <label for="password">Email</label>
            <input type="password" id="password" name="password" placeholder="Enter email" required tabindex="2">
            <label for="password">Contact</label>
            <input type="password" id="password" name="password" placeholder="Contact" required tabindex="2">
            

        <label class="design"for=""></i>Lamination type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        
        <option value="">Digital Color</option>
        <option value="">Digital Black and White</option>
        <option value="">Photo Printing</option>
        <option value="">Rhisograph</option>
        <option value="">Kromekote</option>

        <div>
        <input class="fc" type="text" name="digitall" placeholder="Qty per type">
        <input class="form-control" id="formFileSm" type="file" />
        <label class="design"for=""></i>Lamination type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        
        <option value="">Digital Color</option>
        <option value="">Digital Black and White</option>
        <option value="">Photo Printing</option>
        <option value="">Rhisograph</option>
        <option value="">Kromekote</option>

        <div>
        <input class="fc" type="text" name="digitall" placeholder="Qty per type">
        <input class="form-control" id="formFileSm" type="file" />
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
