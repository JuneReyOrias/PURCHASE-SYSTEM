
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
                <span class="name">UPRESS</span>
               
            </div>
            
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>
    <hr class="divider">

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
                    <a href="../purchase/purchase.php">
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

                <li class="nav-link">
                        <a href="../admin/notification.php">
                            <i class='bx bx-cart icon' ></i>
                            <span class="text nav-text">Notidication</span>
                        </a>
                    </li>
            </ul>
        </div>
   
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img class ="rounded-circle img-fluid" src="../img/maderal.jpg" class="img-responsive" alt="">
          <div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<a href="../customer/userprof.php">Joe Maderal</a>
					</div>
				
				</div>
            


        <div class="bottom-content">
            <li class="">
                <a href="../login/login.php">
                    <i class='bx bx-log-out icon' ></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>

          
            
        </div>
    </div>

</nav>



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
