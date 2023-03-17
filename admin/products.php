<?php
 require_once '../database/products_class.php';
    //resume session here to fetch session values
    session_start();
  
    /*
        if user is. not login then redirect to login page,
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
    require_once '../includes/sidebar.php';

   
?>
<section class="home-dash"style="
left:25px;" >
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>

                  
                </div>
               

           
        </header>
   
        <hr class= "divider">
        <div class="tapnav">
        <a class="lefte ms-lg-3" href="dashboard.php">Home</a>
        <a href="#contact">Admin</a>
        <a href='#contact us'>Hola!</a>
        <a href='create_user.php'>CreateUsers</a>
        <a href='items.php'>Product</a><br>
        <div class="ser-center fs-2 " >

       
</div>
</div>

<body class="human " style="background-color: var(--body-color); 
    transition: var(--tran-05);">

    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create New Product </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="addproduct.php" method="POST">

                <div class="modal-body">
                        <div class="form-group">
                        <label>Productname </label>
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
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> Password </label>
                            <input type="text" name="user_pass" id="user_pass" class="form-control"
                                placeholder="Enter Password">
                        </div>

                        <div class="form-group">
                            <label> Firstname </label>
                            <input type="text" name="firstname" id="firstname" class="form-control"
                                placeholder="Enter Firstname">
                        </div>
                        <div class="form-group">
                            <label> lastname </label>
                            <input type="text" name="lastname" id="lastname" class="form-control"
                                placeholder="Enter Lastname">
                        </div>
                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Enter Fullname">
                        </div>
                        <div class="form-group">
                            <label> role </label>
                            <input type="text" name="role" id="role" class="form-control"
                                placeholder="Enter Role">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Account </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deleteproduct.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="action" id="delete" value="delete">

                        <h4> Do you want to Delete this Product ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>

                        <button type="submit" name="action" value="delete"class="btn btn-primary"> Yes !! Delete it. </button>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal"style="margin-left: 135px;">
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
                                    <button type="button" class="btn btn-info viewbtn"> VIEW </button>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
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

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

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
