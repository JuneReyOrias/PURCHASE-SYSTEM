
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


          
    <h2 style="margin-left: 40rem;"> Product </h2>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal"style="margin-left: 148px;">
                        Add New Product
                    </button>
            

      

                    <table id="datatableid" class="table table-bordered table-responsive"style="margin-left:150px;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col"> ProductID</th>
                                <th scope="col">ProductName </th>
                                <th scope="col">ProductDesc </th>
                                <th scope="col">Unit_Prices </th>
                                <th scope="col"> Quantity </th>
                                <th scope="col"> Action </th>
                                
                            </tr>
                        </thead>
                        <?php
                             $product= new ProductS();
                             $productdata= $product->show();
                             
                             foreach($productdata as $product){ 
    

            ?>
                
                        <tbody>
                            <tr>
                                <td > <?php echo $product['product_id']; ?> </td>
                                <td> <?php echo $product['product_name']; ?> </td>
                                <td> <?php echo $product['product_desc']; ?> </td>
                                <td> <?php echo $product['unit_price']; ?> </td>
                                <td> <?php echo $product['qty']; ?> </td>
                               
                                <td>
                                  
                                  
                                    <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#producteditmodal"> EDIT </button>
                                   <button type="button" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#productdeletemodal"> DELETE </button>
            
                                </td>
                            </tr>
                        </tbody>
                        <?php   

             }
           
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>




    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#productdeletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#productdelete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#user_name').val(data[1]);
                $('#user_pass').val(data[2]);
                $('#firstname').val(data[3]);
                $('#lastname').val(data[4]);
                $('#email').val(data[5]);
                $('#role').val(data[6]);
            });
        });
    </script>