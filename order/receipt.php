
<?php
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
               







     <!-- Modal -->
     <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Products </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                
                <form action="addproduct.php" method="POST">

                <div class="modal-body">
                        <div class="form-group">
                        <label>ProductName </label>
                            <input type="text" name="product_name" id="product_name" class="form-control"
                                placeholder="Enter ProductName">
                        </div>

                        <div class="form-group">
                            <label> ProductDesc </label>
                            <input type="text" name="product_desc" id="product_desc" class="form-control"
                                placeholder="Enter ProducDesc">
                        </div>

                        <div class="form-group">
                            <label> UnitPrices </label>
                            <input type="text" name="unit_price" id="unit_price" class="form-control"
                                placeholder="Enter UnitPrice">
                        </div>
                        <div class="form-group">
                            <label> Quantity</label>
                            <input type="text" name="qty" id="qty" class="form-control"
                                placeholder="Enter Lastname">
                        </div>
                        
                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="hidden" name="action" value="add">
					<input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="producteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Customer Accounts </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatecode.php" method="POST">

                   
               
                <div class="modal-body">
                        <div class="form-group">
                        <label>ProductName </label>
                            <input type="text" name="product_name" id="product_name" class="form-control"
                                placeholder="Enter ProductName">
                        </div>

                        <div class="form-group">
                            <label> ProductDesc </label>
                            <input type="text" name="product_desc" id="product_desc" class="form-control"
                                placeholder="Enter ProducDesc">
                        </div>

                        <div class="form-group">
                            <label> UnitPrices </label>
                            <input type="text" name="unit_price" id="unit_price" class="form-control"
                                placeholder="Enter UnitPrice">
                        </div>
                        <div class="form-group">
                            <label> Quantity</label>
                            <input type="text" name="qty" id="qty" class="form-control"
                                placeholder="Enter Lastname">
                        </div>
                        
                   
                    </div>
                    <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id" value="<?php echo $users['id']; ?>">
                                <input type="submit" class="btn btn-info" value="Update">
                            </div>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="productdeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Account </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Product ??</h4>
                    </div>
                    <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo $users['id']; ?>">
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                </div>
                </form>

            </div>
        </div>
    </div>


    <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Customer Accounts </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->
                        <h4 id="user_name"> <?php echo ''; ?> </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>


  
            

    <div class="form-group">
                        <label>ProductName </label>
                            <input type="text" name="product_name" id="product_name" class="form-control"
                                placeholder="Enter ProductName">
                        </div>

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
                                <th scope="col">Amount</th>
                                
                                
                            </tr>
                        </thead>
                       <?php
                            /// $product= new ProductS();
                           ///  $productdata= $product->show();
                             
                        // foreach($productdata as $product){ 
    

            ?>

    
                <tbody>
            <tr>
                <td> <div class="mb-3" style="width:220px;">
<input type="text" value="nurshingfile" disabled >
<div class="invalid-feedback"> invalid file </div>
</div></td>

                                <td> Colored </td>
                                <td> Long </td>
                                <td> 2 </td>
                                <td> pcs </td>
                                <td> document  </td>
                                <td> 240</td>
                                <td>480  </td>
                              
            

               
            </tr>
        </tbody>
      
<tbody>
            <tr>
            <td> <div class="mb-3" style="width:220px;">
<input type="text" value="nurshingfile" disabled >
<div class="invalid-feedback"> invalid file </div>
</div></td>

                                <td> Colored </td>
                                <td> Long </td>
                                <td> 2 </td>
                                <td> pcs </td>
                                <td> document  </td>
                                <td> 240</td>
                                <td>480  </td>
            
               
            </tr>
        </tbody>
        
<tbody>
            <tr>
            <td> <div class="mb-3" style="width:220px;">
<input type="text" value="nurshingfile" disabled >
<div class="invalid-feedback"> invalid file </div>
</div></td>

                                <td> Colored </td>
                                <td> Long </td>
                                <td> 2 </td>
                                <td> pcs </td>
                                <td> document  </td>
                                <td> 240</td>
                                <td>480  </td>
                              
                <td>
               
            </tr>
        </tbody>

        <tbody>
            <tr>
            <td> <div class="mb-3" style="width:220px;">
<input type="text" value="nurshingfile" disabled >
<div class="invalid-feedback"> invalid file </div>
</div></td>

                                <td> Colored </td>
                                <td> Long </td>
                                <td> 2 </td>
                                <td> pcs </td>
                                <td> document  </td>
                                <td> 240</td>
                                <td>480  </td>
                              
                   
               
            </tr>
        </tbody>
        </table>
       
        <input type="hidden" name="action" value="save">
    <input type="submit" class="btn btn-primary float-end" style="width:30rem; margin-left:-80rem" value="Save">
                    </form> 
     


