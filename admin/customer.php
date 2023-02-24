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
                        <a href="#">
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
        <a href="#contact">Contact</a>
        <a href='#contact us'>About</a>
</div>
        <div class="col1" ><span>Customer info</span></div>
     
        
        <div class="home-content">
       <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-11">
                    <h2 class="text-center"> Customer Information </h2>        
                </div>
                <div class="col-md-1 mt-2">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-plus-square-o" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="inserted_item_data" class="mt-2"></div>

            <div class="modal" id="myModal">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Create Customer Account</h4></h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table text-center table-striped table-bordered" id="crud_table">
                                <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Fistname</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th><button type="button" name="add" id="add" class="btn btn-success">ADD</button></th>
                                </tr>
                                <tr>
                                    <td contenteditable="true" class="user_name"></td>
                                    <td contenteditable="true" class="password"></td>
                                    <td contenteditable="true" class="firstname"></td>
                                    <td contenteditable="true" class="lastname"></td>
                                    <td contenteditable="true" class="email"></td>
                                    <td contenteditable="true" class="role"></td>
                                    <td><button type='button' name='remove' data-row='row1' class='btn btn-danger btn-xs remove'>-</button></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" name="save" id="save" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var count = 1;
        $('#add').click(function(){
            count = count + 1;
            var html_code = "<tr id='row"+count+"'>";
            html_code += "<td contenteditable='true' class='name'></td>";
            html_code += "<td contenteditable='true' class='email'></td>";
            html_code += "<td contenteditable='true' class='mobile'></td>";
            html_code += "<td contenteditable='true' class='message text-start'></td>";
            html_code += "<td contenteditable='true' class='mobile'></td>";
            html_code += "<td contenteditable='true' class='message text-start'></td>";
            html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
            html_code += "</tr>";  
            $('#crud_table').append(html_code);
        });

        $(document).on('click', '.remove', function(){
             $(this).parent().parent().remove();
        });

        $('#save').click(function(){
            var name = [];
            var email = [];
            var mobile = [];
            var message = [];
            
            $('.name').each(function(){
                name.push($(this).text());
            });
            
            $('.email').each(function(){
                email.push($(this).text());
            });
            
            $('.mobile').each(function(){
                mobile.push($(this).text());
            });
            
            $('.message').each(function(){
                message.push($(this).text());
            });
            
            $.ajax({
                url:"insert.php",
                method:"POST",
                data:{name:name, email:email, mobile:mobile, message:message},
                success:function(data){
                    alert(data);
                    $("td[contentEditable='true']").text("");
                        for(var i=2; i<= count; i++){
                            $('tr#'+i+'').remove();
                        }
                        fetch_item_data();
                    }
                });
            });

        function fetch_item_data(){
            $.ajax({
                url:"fetch.php",
                method:"POST",
                    success:function(data){
                        $('#inserted_item_data').html(data);
                    }
            })
        }
        fetch_item_data();
    });
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
