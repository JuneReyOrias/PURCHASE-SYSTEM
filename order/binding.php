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
        <a class="order" href="order.php" ><span>></span>Binding</a>
        
</div>
       
     
        
        <div class="home-content">
    <div class="select-container">              
            <form class="select-form" action="bindform.php" method="post">
            <div class="col2" ><spani class='bx bx-printer icon' >Binding</span></div>
        <div class="main-form">
        <div class="row">
        <label class="design"for=""></i>Binding Type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        
        <option value="">Coil Binding</option>
        <option value="">Soft Bound</option>
        <option value="">Hard Bound</option>
        <option value="">Ring Binding</option>
        <option value="">Kromekote</option>

        <div>
    
        <input class="fc" type="text" name="digitall" placeholder="Qty per type">
        <input class="form-control" id="formFileSm" type="file" />
        

        <label class="design"for=""></i>Binding type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        
        <option value="">Coil Binding</option>
        <option value="">Soft Bound</option>
        <option value="">Hard Bound</option>
        <option value="">Ring Binding</option>
        <option value="">Kromekote</option>

        <div>
        <input class="fc" type="text" name="digitall" placeholder="Qty per type">
        <input class="form-control" id="formFileSm" type="file" />
        <label class="design"for=""></i>Binding Type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        
        <option value="">Coil Binding</option>
        <option value="">Soft Bound</option>
        <option value="">Hard Bound</option>
        <option value="">Ring Binding</option>
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
 <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {

            $(document).on('click', '.remove-btn', function () {
                $(this).closest('.col2').remove();
            });
            
            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append(' <div class="main-form">\
                                <div class="row">\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Name</label>\
                                            <input type="text" name="name[]" class="form-control" required placeholder="Enter Name">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <label for="">Phone Number</label>\
                                            <input type="text" name="phone[]" class="form-control" required placeholder="Enter Phone Number">\
                                        </div>\
                                    </div>\
                                    <div class="col-md-4">\
                                        <div class="form-group mb-2">\
                                            <br>\
                                            <button type="button" class="remove-btn btn btn-danger">Remove</button>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
            });

        });
    </script>

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
