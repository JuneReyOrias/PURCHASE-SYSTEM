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

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

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
                        <a href="../order/order.php">
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
        <a class="active" href="dashboard.php">Home</a>
        <a href="order.php">Shop</a>
        
</div>
        <div class="col1" ><span>Offered Services</span></div>
     
        
        <div class="home-content">
    <div class="checkbox-container">              
            <form class="checkbox-form" action="order.php" method="post">
              
            <div>
            <input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
            <label for="checkbox-1" class="checkbox-custom-label">First Choice</label>
        </div>
        <div>
  <input id="checkbox-2" class="checkbox-custom" name="checkbox-2" type="checkbox">
  <label for="checkbox-2" class="checkbox-custom-label">Second Choice  <i class='bx bx-cart icon' ></i></label>
</div>

    <div>
         <input id="checkbox-3" class="checkbox-custom" name="checkbox-3" type="checkbox">
         <label for="checkbox-3" class="checkbox-custom-label">my king</label>
</div>
            </form>

           <input class="button" type="submit" value="Login" name="login" tabindex="3">
            
                    </div>
                </div>

            
                
 <div>

 </div>
          
    </section>

</nav>


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
