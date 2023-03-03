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
    
  

    <section class="home-dash "style="left:25px;">
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>
               <hr class="divider">
                  
                </div>
               

           
        </header>
   
      
        <div class="tapnav">
       <a class="lefte ms-lg-3" href="dashboaard.php">Home</a>
        <a href="">Shop</a>
        <a class="order" href="order.php" >Order</a>
        <a class="order" href="orderlist.php" ><span>></span>BindingForm</a>
        <div class="ser-center fs-2 " >
             <span class="ser-center fs-2 " ></span></div> 
</div>
</div>
<body class="human " style="background-color: var(--body-color);
    transition: var(--tran-05);">
       
     
        
        
    <div class="select-container">              
            <form class="select-form" action="orderlist.php" method="post">
            <div class="col2" ><spani class='bx bx-book icon' ><span>Binding Form</span></div>

            <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom01" value="Mark" required />
      <label for="validationCustom01" class="form-label">First name</label>
      <div class="valid-feedback">Looks good!</div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom02" value="Otto" required />
      <label for="validationCustom02" class="form-label">Last name</label>
      <div class="valid-feedback">Looks good!</div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="input-group form-outline">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required />
      <label for="validationCustomUsername" class="form-label">Username</label>
      <div class="invalid-feedback">Please choose a username.</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom03" required />
      <label for="validationCustom03" class="form-label">City</label>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline">
      <input type="text" class="form-control" id="validationCustom05" required />
      <label for="validationCustom05" class="form-label">Zip</label>
      <div class="invalid-feedback">Please provide a valid zip.</div>
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
      <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
      <div class="invalid-feedback">You must agree before submitting.</div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
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
