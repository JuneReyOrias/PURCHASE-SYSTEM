<nav class="sidebar close" style="color:#990000";>
        <header>
            <div class="image-text">
                <span class="image">
                <img src="../img/upress-logo.png" alt="">
                </span>

            
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../admin/dashboard.php">
                            <i class='bx bxs-dashboard icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                        
                    </li>

                    <li class="nav-link">
                        <a href="../admin/products.php">
                            <i class='bx bx-shopping-bag icon' ></i>
                            <span class="text nav-text">Products</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="services.php">
                            <i class='bx bx-printer icon' ></i>
                            <span class="text nav-text">Services</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../admin/customers.php">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">Customer</span>
                        </a>
                    </li>

                   
                    <li class="nav-link">
                        <a href="../admin/order.php">
                            <i class='bx bx-cart icon' ></i>
                            <span class="text nav-text">Orders</span>
                        </a>
                    </li>

                </ul>
            </div>
         
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img class ="rounded-circle img-fluid" href="../admin/adprofile.php"src="../img/maderal.jpg" class="img-responsive" alt="">
          <div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<a href="../admin/adprofile.php">Admin</a>
					</div>
				
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