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
                    <h5 class="modal-title" id="exampleModalLabel">Create Account </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcode.php" method="POST">

                    <div class="modal-body">
                        <div class="form-group">
                        <label>Username </label>
                            <input type="text" name="user_name" id="user_name" class="form-control"
                                placeholder="Enter UserName">
                        </div>

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
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
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

                <form action="deletecode.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Account ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
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


    <div class="container" >
       
                <h2> orderlist </h2>
           
                            
       
             <table  class="table-sm table-bordered table-responsive-sm "style="margin-left:15rem; margin-top:7rem;">
                        <thead class="table-light " >
                            <tr class="text-dark ">
                                <th > <label>Order_date:</label></br>
                                    <input  style="width:200px; " type="text" placeholder="March 16,2023"></th>
                                    <th > <label>Payment:</label></br>
                                   
                            <select style="width:200px; "class="text-center"id="size">
                            <option selected>Cash</option>
                             
                                 </select> </th>
                              
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              
                            <th > <label>Required_date:</label></br>
                                    <input  style="width:200px; " type="text" placeholder="03-20-2023"></th>
                                    <th > <label>expect_delivery_date:</label></br>
                                    <input  style="width:200px; " type="text" placeholder="03-19-2023"></th>
                                
                           
                               
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                              
                            <th > <label>Client Name:</label></br>
                            <select style="width:200px; margin-left: 6px; "class="text-center"id="size">
                            <option selected>College of Nursing-</option>
                             
                                 </select></th>
                                    <th > <label>Email:</label></br>
                                    <input  style="width:200px; " type="text" placeholder="email"></th>
                                
                           
                               
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                              
                            <th > <label>Type of Jobs:</label></br>
                                    <input  style="width:200px; " type="text" placeholder="Printing_Laminate_Layout_Binding"></th>
                                    <th > <label>Contact_No.:</label></br>
                                    <input  style="width:200px; " type="text" placeholder="Enter ContactNo."></th>
                                
                           
                               
                            </tr>
                        </tbody>
      
</table><br>
       
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
                                <th scope= "col">Action</th>

                              
                                
                                
                            </tr>
                        </thead>

<tbody>
                            <tr>
                                <td> <div class="mb-3" style="width:220px;">
    <input type="file"  aria-label="file pdf/word" required>
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
    <input type="file" aria-label="file pdf/word" required>
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
    <input type="file"  aria-label="file pdf/word" required>
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
    <input type="file"  aria-label="file pdf/word" required>
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
                                <td>
                                   <!-- Example single danger button -->
                                   <div class="btn-group">
                                   <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a type="button" class="dropdown-sucsess editbtn" href="#">Edit</a>
    <a type="button" class="dropdown-danger deletebtn" href="#">Delete</a>
   
  </div>
</div>
</td>
                              
                               
                            </tr>
                        </tbody>
                        </table>
                       

                        <a href="orderlist.php" name="" class="btn btn-primary float-md-end">Continue</a>
                     


 

              

         
                    </table>
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-sm-center">
  <button class="btn btn-primary btn-lg me-md-2" type="button">Save</button>

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


   <!-- <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>-->

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



 