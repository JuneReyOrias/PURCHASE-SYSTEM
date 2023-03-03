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
       
     
        
        
<form class="row g-4">
  <div class="col-md-4">
    <div class="form-outline">
      <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required />
      <label for="validationServer01" class="form-label">First name</label>
      <div class="valid-feedback">Looks good!</div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-outline">
      <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required />
      <label for="validationServer02" class="form-label">Last name</label>
      <div class="valid-feedback">Looks good!</div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="input-group form-outline">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input
        type="text"
        class="form-control is-invalid"
        id="validationServerUsername"
        aria-describedby="inputGroupPrepend3"
        required
      />
      <label for="validationServerUsername" class="form-label">Username</label>
      <div class="invalid-feedback">Please choose a username.</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline">
      <input type="text" class="form-control is-invalid" id="validationServer03" required />
      <label for="validationServer03" class="form-label">City</label>
      <div class="invalid-feedback">Please provide a valid city.</div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-outline">
      <input type="text" class="form-control is-invalid" id="validationServer05" required />
      <label for="validationServer05" class="form-label">Zip</label>
      <div class="invalid-feedback">Please provide a valid zip.</div>
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required />
      <label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label>
      <div class="invalid-feedback">You must agree before submitting.</div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>

        <label class="design"for=""></i>Binding type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        <option selected>Binding Type</option>
        <option value="">Coil Binding</option>
        <option value="">Soft Bound</option>
        <option value="">Hard Bound</option>
        <option value="">Ring Binding</option>

        <div>
        <input class="fc" type="text" name="digitall" placeholder="Quantity">
        <input class="form-control" id="formFileSm" type="file" />
        
        <input class="color" id="color" placeholder="Input Color" list="color" name="color">
        <select class="color"id="color">
        
        <option selected>Color</option>
        <option value="Red">Red</option>
        <option value="Yellowt">Yellow</option>
        <option value="Black"> Black</option>
        <option value="Blue"> Blue</option>  
        <option value="Green">Green</option>  
</select>
        <div>
        <label class="design"for=""></i>Binding type</label>
        <select name="Printing type "class="select multiple-select" multiple >
        <option value="">Coil Binding</option>
        <option value="">Soft Bound</option>
        <option value="">Hard Bound</option>
        <option value="">Ring Binding</option>

        <div>
        <input class="fc" type="text" name="digitall" placeholder="Quantity">
        <input class="form-control" id="formFileSm" type="file" />
        <input class="color" id="color" placeholder="Input Color" list="color" name="color">
        
            <select class="color"id="color">
            <option selected>Color</option>
            <option value="Green"> Red</option>
            <option value="Green"> Yellow</option>
            <option value="Green"> Black</option>
            <option value="Green"> Blue</option>
            <option value="Green"> Green</option>
</select>
        <input class="buttons" href="orderlist.php" type="submit" value="continue" name="continue" tabindex="3" >
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
