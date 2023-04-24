<?php
;
    //resume session here to fetch session values
    session_start();
    require_once '../database/service_category.class.php';
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
    
   



       
 

    <section class="home-dash ms-5 ms-5"style="left:25px;">
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>
               <hr class="divider">
                  
                </div>
               

           
        </header>
   
      
        <div class="tapnav">
         <a class="lefte ms-lg-3" href="dashboard.php">Home</a>
        <a href="">Shop</a>
        <a class="order" href="order.php" ><span></span>Order</a>
        <a class="order" href="binding.php" ><span></span>BindingForm</a>
        <a class="order" href="orderlist.php" ><span>></span>OrderList</a><br>

        </div>
<body class="human " style="background-color: var(--body-color);
    transition: var(--tran-05);"> 
               
       
       
         <form action="addorder.php" method="POST">
             <table  class="table-sm table-bordered table-responsive-sm "style="margin-left:15rem; margin-top:7rem;">
                        <thead class="table-light " >
                            <tr class="text-dark ">
                                <th > <label>Order_date:</label></br>
                                   <input  style="width:200px; " type="date" class="datepicker" ></th>
                                       <th > <label>Payment:</label></br>    
                                    <select style="width:200px; "class="text-center"id="size">
                                <option selected>--Select--</option>
                             <option value="Long">Cash</option>
                        <option value="Short">Credit</option>
                     <option value="A4">Funds</option>
                   </select> </th>
                  </tr>
                  </thead>
                   <tbody>
                     <tr>
                        <th > 
                           <label>Required_date:</label></br>
                              <input  style="width:200px; " type="date" class="datepicker"></th>
                                  <th > <label>expect_delivery_date:</label></br>
                                     <input  style="width:200px; " type="date" class="datepicker"></th>
  
                                  </tr>
                               </tbody>
                             <tbody>
                        <tr>  
                            <th > <label>Colleges/Department:</label></br>
                              <select style="width:200px; margin-left: 6px; "class="text-center"id="size">
                               <option selected>--Select--</option>
                                <option value="Long">College of Architechture</option>
                                  <option value="Short">College of Nursing</option>
                                   <option value="A4">College of Teacher Education</option>
                                    <option value="A4">College of Engineering</option>
                                     <option value="A4">College of Criminal Justice Education</option>
                                      <option value="A4">College of Science and Mathematics</option>
                                       </select></th>
                                        <th > <label>Email:</label></br>
                                        <input  style="width:200px; " type="text" placeholder="email"></th>
                                    </tr>
                                </tbody>
                            <tbody>
                         <tr>
                            <th > 
                                <label>Type of Jobs:</label></br>
                                 <input  style="width:200px; font-size: 12px; " type="text"  id ="" value="<?php $categ = new Category();
                                    $categdata= $categ->show();
                                     foreach($categdata as $categ){
                                      ?> <?php echo $categ['service_category'] ?><?php }?>" disabled></th>
                                       <th > <label>Contact_No.:</label></br>
                                    <input  style="width:200px; " type="text" placeholder="Enter ContactNo."></th>
                                </tr>
                           </tbody>
                        <table  class="table-sm table-bordered table-responsive" style="margin-left:15rem; margin-top:3rem;">
                    <thead class="text-center">
                        <tr>
                         <th scope="col">Uploadfile</th>
                          <th scope="col">colorType</th>
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
                       <td> <div class="mb-3" style="width:220px;">
                        <input type="file"  aria-label="file pdf/word" >
                             <div class="invalid-feedback"> invalid file </div>
                                 </div></td>
                                    <td>
                                     <select class="printing-type"id="size">
                                       <option selected>--Select--</option>
                                         <option value="">Colored</option>
                                          <option value="">Black</option>
                                           </select></td>
                                            <td> <select class=""id="size">
                                             <option selected>--Select--</option>
                                              <option value="Long">Long</option>
                                               <option value="Short">Short</option>
                                                <option value="A4">A4</option>
                                           <option value="A4">Letter</option>
                                       <option value="A4">Tabloid</option>
                                  <option value="A4">A3</option>
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
                             <input  type="text" class="form-control text-center input-qty" value="pcs" >
                                <!--<button class="input-group-text increment-btn">+</button>-->
                                 </div>
                                   </div>
                                      </td>
                                      </td>
                                        <td >
                                         <select class=""id="size">
                                          <option selected>--TypePrinting--</option>
                                             <option value="Long">Documents</option>
                                                 <option value="Short">Poster</option>
                                                   <option value="A4">PhotosA4</option>
                                                      <option value="A4">Forms</option>
                                                        </select>
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
                                   <td> <div class="mb-3"style="width:220px;">
                               <input type="file" aria-label="file pdf/word">
                         <div class="invalid-feedback"> invalid file </div>
                     </div></td>
                  <td>
                     <select class="printing-type"id="size">
                        <option selected>--Select--</option>
                            <option value="">Colored</option>
                                <option value="">Black</option>
                                     </select></td>
                                        </select></td>
                                           <td> <select class=""id="size">
                                              <option selected>--Select--</option>
                                                 <option value="Long">Long</option>
                                                     <option value="Short">Short</option>
                                                        <option value="A4">A4</option>
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
                                                                            <input  type="text" class="form-control text-center input-qty" value="pcs" >
                                                                         <!--<button class="input-group-text increment-btn">+</button>-->
                                                                     </div>
                                                                  </div>
                                                              </td>
                                                         </td>
                                                     <td >
                                                 <select class=""id="size">
                                             <option selected>--TypeLamination--</option>
                                         <option value="Long">Lamination</option>
                                      <option value="Long">WholePage</option>
                                   </select>
                                </div></td>
                             <td ><div class="col-md-4 align-content-lg-center">
                          <div class="input-group-center" style="width:80px; ">
                       <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                         <input  type="number" class="form-control text-center input-qty" value="240.00" >
                             <!--<button class="input-group-text increment-btn">+</button>-->
                                </div>
                                   </div></td>
                                      <td ><div class="col-md-4 align-content-lg-center">
                                         <div class="input-group-center" style="width:80px; ">
                                           <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                             <input  type="number" class="form-control text-center input-qty" value="240.00" >
                                               <!--<button class="input-group-text increment-btn">+</button>-->
                                                  </div>
                                                      </div></td></td> 
                                                         </tr>
                                                            </tbody>
                                                              <tbody>
                                                                <tr>
                                                                   <td> <div class="mb-3"style="width:220px;">
                                                                       <input type="file"  aria-label="file pdf/word" >
                                                                           <div class="invalid-feedback"> invalid file </div>
                                                                              </div></td>
                                                                                <td>
                                                                                  <select class="printing-type"id="size">
                                                                                    <option selected>--Select--</option>
                                                                                      <option value="">Colored</option>
                                                                                         <option value="">Black</option>
                                                                                             </select></td>
                                                                                               <td> <select class=""id="size">
                                                                                                   <option selected>--Select--</option>
                                                                                                      <option value="Long">Long</option>
                                                                                                         <option value="Short">Short</option>
                                                                                                            <option value="A4">A4</option>
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
                                                                          <input  type="text" class="form-control text-center input-qty" value="pcs" >
                                                                     <!--<button class="input-group-text increment-btn">+</button>-->
                                                                 </div>
                                                             </div>
                                                        </td>
                                                   </td>
                                               <td >
                                           <select class=""id="size">
                                      <option selected>--TypeLayout--</option>
                                   <option value="Long">Program Invitation</option>
                                <option value="Short">Tarpaulint</option>
                            <option value="A4">Calling Card</option>
                        </select>
                    </div></td>
                 <td ><div class="col-md-4 align-content-lg-center">
            <div class="input-group-center" style="width:80px; ">
                 <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                     <input  type="number" class="form-control text-center input-qty" value="240.00" >
                        <!--<button class="input-group-text increment-btn">+</button>-->
                          </div>
                                </div></td>
                                     <td ><div class="col-md-4 align-content-lg-center">
                                        <div class="input-group-center" style="width:80px; ">
                                            <!--<button class="input-group-text decrement-btn g-md-1">-</button>-->
                                               <input  type="number" class="form-control text-center input-qty" value="240.00" >
                                                    <!--<button class="input-group-text increment-btn">+</button>-->
                                                      </div>
                                                        </div></td></td>
                                                            </tr>
                                                               </tbody>
                                                                  <tbody>
                                                                     <tr>
                                                                        <td> <div class="mb-3"style="width:220px;">
                                                                           <input type="file"  aria-label="file pdf/word">
                                                                              <div class="invalid-feedback"> invalid file </div>
                                                                                 </div></td>
                                                                                   <td>
                                                                                      <select class="printing-type"id="size">
                                                                                         <option selected>--Select--</option>
                                                                                            <option value="">Colored</option>
                                                                                               <option value="">Black</option>
                                                                                                   </select></td>
                                                                                              <td> <select class=""id="size">
                                                                                          <option selected>--Select--</option>
                                                                                     <option value="Long">Long</option>
                                                                                <option value="Short">Short</option>
                                                                            <option value="A4">A4</option>
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
                 <input  type="text" class="form-control text-center input-qty" value="pcs" >
             <!--<button class="input-group-text increment-btn">+</button>-->
               </div>
                    </div>
                         </td>    
                             </td>
                                 <td >   <select class=""id="size">
                                   <option selected>--TypeBinding--</option>
                                     <option value="Long">Softbound</option>
                                        <option value="Short">Hardbound</option>
                                           </select>
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
                       
                        <input type="hidden" name="action" value="add">
					<input type="submit" class="btn btn-primary float-md-end" style="width:20rem;" value="add"> 
                                    </form> 
                     


 