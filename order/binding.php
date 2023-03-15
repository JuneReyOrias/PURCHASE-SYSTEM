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
       <a class="lefte ms-lg-3" href="../customer/dashboaard.php">Home</a>
        <a href="">Shop</a>
        <a class="order" href="order.php" >Order</a>
        <a class="order" href="orderlist.php" ><span>></span>BindingForm</a>
        <div class="ser-center fs-2 " >
             <span class="ser-center fs-2 " ></span></div> 
</div>
</div>
<body class="human " style="background-color: var(--body-color);
    transition: var(--tran-05);">
       
     
        
    
       <table  class="table-sm table-bordered table-responsive-sm "style="margin-left:15rem; margin-top:3rem;">
                        <thead class="table-light " >
                            <tr class="text-dark ">
                                <th > <label>Client Name:</label>
                                    <input  style="width:200px; " type="text" placeholder="COLLEGE OF NURSING"></th>
                                    <th > <label>Email:</label>
                                    <input  style="width:200px; " type="text" placeholder="enter email"></th>
                               
                              
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              
                            <th > <label>Type of Jobs:</label>
                                    <input  style="width:200px; " type="text" placeholder="Printing"></th>
                                    <th > <label>Contact_No.:</label>
                                    <input  style="width:200px; " type="text" value="Enter ContactNo."></th>
                                
                           
                               
                            </tr>
                        </tbody>
                     
      
</table><br>
       
                <table  class="table-sm table-bordered table-responsive" style="margin-left:15rem; margin-top:3rem;">
                        <thead class="text-center">
                            <tr>
                                <th>Uploadfile</th>
                                <th scope="col">Type of Binding</th>
                                <th scope="col">Size</th>
                                <th scope="col">Qty </th>
                                <th scope="col">Unit </th>
                                <th scope="col">Description</th>
                                <th scope="col">Unit Cost </th>
                                <th scope="col">Amount </th>
                              
                                
                                
                            </tr>
                        </thead>

<tbody>
                            <tr>
                                <td> <div class="mb-3">
    <input type="file"  aria-label="file pdf/word" required>
    <div class="invalid-feedback"> invalid file </div>
  </div></td>
                    <td>
                            <select class="printing-type"id="size">
                              <option selected>--Select--</option>
                              <option value="">Coil Binding</option>
                                 <option value="">Soft Bound</option>
                                     <option value="">Hard Bound</option>
                                        <option value="">Ring Binding</option>
                                         </select></td>
                                            <td> <select class=""id="size">
                                             <option selected>--Select--</option>
                                          <option value="Red">Red</option>
                                      <option value="Yellowt">Yellow</option>
                                  <option value="Black"> Black</option>
                                <option value="Blue"> Blue</option>  
                         <option value="Green">Green</option> 
                             </select></td>
                                <td>
                                    <div class="col-md-5 align-content-lg-center ">
                                    <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="0" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div>
                               
                                </td>
                                <td>
                                <div class="col-md-4 align-content-lg-center">
                                <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="0" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div>
                            </td>
                                    
                                </td>
                                <td >
                               
                                    <div class="input-group-center" style="width:px; alignmen:center;">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="text-center"style="width:px;  name="description" placeholder="" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    
                                </div></td>
                                <td ><div class="col-md-4 align-content-lg-center">
                                <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="240.00" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div></td>
                                <td ><div class="col-md-4 align-content-lg-center">
                                <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="240.00" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div></td></td>
                                
                              
                               
                            </tr>
                        </tbody>
                      
<tbody>
                            <tr>
                            <td> <div class="mb-3">
    <input type="file" class="form-control" aria-label="file pdf/word" required>
    <div class="invalid-feedback"> invalid file </div>
  </div></td>
  <td>
                            <select class="printing-type"id="size">
                              <option selected>--Select--</option>
                              <option value="">Coil Binding</option>
                                 <option value="">Soft Bound</option>
                                     <option value="">Hard Bound</option>
                                        <option value="">Ring Binding</option>
                                         </select></td>
                                            <td> <select class=""id="size">
                                             <option selected>--Select--</option>
                                          <option value="Red">Red</option>
                                      <option value="Yellowt">Yellow</option>
                                  <option value="Black"> Black</option>
                                <option value="Blue"> Blue</option>  
                         <option value="Green">Green</option> 
                             </select></td>
                                <td>
                                    <div class="col-md-5 align-content-lg-center ">
                                    <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="0" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div>
                               
                                </td>
                                <td>
                                <div class="col-md-4 align-content-lg-center">
                                <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="0" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div>
                            </td>
                                    
                                </td>
                                <td >
                               
                                    <div class="input-group-center" style="width:px; alignmen:center;">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="text-center"style="width:px;  name="description" placeholder="" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    
                                </div></td>
                                <td ><div class="col-md-4 align-content-lg-center">
                                <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="240.00" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div></td>
                                <td ><div class="col-md-4 align-content-lg-center">
                                <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="240.00" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div></td></td>
                                
                              
                               
                            </tr>
                        </tbody>
                        
<tbody>
                            <tr>
                            <td> <div class="mb-3">
    <input type="file" class="form-control" aria-label="file pdf/word" required>
    <div class="invalid-feedback"> invalid file </div>
  </div></td>
  <td>
                            <select class="printing-type"id="size">
                              <option selected>--Select--</option>
                              <option value="">Coil Binding</option>
                                 <option value="">Soft Bound</option>
                                     <option value="">Hard Bound</option>
                                        <option value="">Ring Binding</option>
                                         </select></td>
                                            <td> <select class=""id="size">
                                             <option selected>--Select--</option>
                                          <option value="Red">Red</option>
                                      <option value="Yellowt">Yellow</option>
                                  <option value="Black"> Black</option>
                                <option value="Blue"> Blue</option>  
                         <option value="Green">Green</option> 
                             </select></td>
                                <td>
                                    <div class="col-md-5 align-content-lg-center ">
                                    <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="0" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div>
                               
                                </td>
                                <td>
                                <div class="col-md-4 align-content-lg-center">
                                <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="0" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div>
                            </td>
                                    
                                </td>
                                <td >
                               
                                    <div class="input-group-center" style="width:px; alignmen:center;">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="text-center"style="width:px;  name="description" placeholder="" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    
                                </div></td>
                                <td ><div class="col-md-4 align-content-lg-center">
                                <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="240.00" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div></td>
                                <td ><div class="col-md-4 align-content-lg-center">
                                <div class="input-group-center" style="width:80px; ">
                                    <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                    <input  type="text" class="form-control text-center input-qty" value="240.00" >
                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                    </div>
                                </div></td></td>
                                
                              
                               
                            </tr>
                        </tbody>
                        </table>
                       
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Continue</button>
                    </div>


 