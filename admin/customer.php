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
    
   
    </main> -->
   

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
                        <a href="dashboard.php">
                            <i class='bx bxs-dashboard icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                        
                    </li>

                    <li class="nav-link">
                        <a href="items.php">
                            <i class='bx bx-shopping-bag icon' ></i>
                            <span class="text nav-text">Items</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="services.php">
                            <i class='bx bx-printer icon' ></i>
                            <span class="text nav-text">Services</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="customer.php">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text">Customer</span>
                        </a>
                    </li>

                   
                    <li class="nav-link">
                        <a href="orders.php">
                            <i class='bx bx-cart icon' ></i>
                            <span class="text nav-text">Orders</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img class ="rounded-circle img-fluid" src="../img/maderal.jpg" class="img-responsive" alt="">
          <div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<a href="#">Joe Maderal</a>
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
    
</div>
<div class="col1" ><span>Customer</span></div>
        
        <div class="home-content">
        <h2>View Records
    <a href="add.php" class="btn btn-primary" style="float:right;">Add New Record</a>
  </h2>
  <table class="table table-bordered table-striped" id="usersTable">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $users = $userObj->displayData(); 
          foreach ($users as $rs) {
        ?>
        <tr>
          <td><?php echo $rs['id'] ?></td>
          <td><?php echo $rs['name'] ?></td>
          <td><?php echo $rs['email'] ?></td>
          <td><?php echo $rs['username'] ?></td>
          <td>
            <a href="edit.php?editId=<?php echo $rs['id'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a> 
            <a href="index.php?deleteId=<?php echo $rs['id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#usersTable').DataTable();
} );
</script>
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
