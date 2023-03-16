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
    
   



       
 

    <section class="home-dash" style="left:25px; " >
<div>
        <header>


                <div class="text-center" style= "color: #990000;">
                <img src="/img/upress-logo.png" class="rounded mx-auto d-block" alt="UPRESS">
                <span class="text-center fs-1">UNIVERSITY PRESS</span>
               <hr class="divider">
                  
                </div>
               

           
        </header>
   
      
        <div class="tapnav">
        <  <a class="lefte ms-lg-3" href="dashboard.php">Home</a>
        <a href="">Shop</a>
        <a class="order" href="purchase.php" ><span>></span>Purchase</a><br>

        
</div>
</div>
<body class="human " style="background-color: var(--body-color); 
    transition: var(--tran-05);">
    <!-- Modal -->
    <div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="timeline" id="parcel_history">
				
			</div>
		</div>
	</div>
</div>
<div id="clone_timeline-item" class="d-none">
	<div class="iitem">
	    <i class="fas fa-box bg-blue"></i>
	    <div class="timeline-item">
	      <span class="time"><i class="fas fa-clock"></i> <span class="dtime">12:05</span></span>
	      <div class="timeline-body">
	      	asdasd
	      </div>
	    </div>
	  </div>
</div>
<script>
	function track_now(){
		start_load()
		var tracking_num = $('#ref_no').val()
		if(tracking_num == ''){
			$('#parcel_history').html('')
			end_load()
		}else{
			$.ajax({
				url:'ajax.php?action=get_parcel_heistory',
				method:'POST',
				data:{ref_no:tracking_num},
				error:err=>{
					console.log(err)
					alert_toast("An error occured",'error')
					end_load()
				},
				success:function(resp){
					if(typeof resp === 'object' || Array.isArray(resp) || typeof JSON.parse(resp) === 'object'){
						resp = JSON.parse(resp)
						if(Object.keys(resp).length > 0){
							$('#parcel_history').html('')
							Object.keys(resp).map(function(k){
								var tl = $('#clone_timeline-item .iitem').clone()
								tl.find('.dtime').text(resp[k].date_created)
								tl.find('.timeline-body').text(resp[k].status)
								$('#parcel_history').append(tl)
							})
						}
					}else if(resp == 2){
						alert_toast('Unkown Tracking Number.',"error")
					}
				}
				,complete:function(){
					end_load()
				}
			})
		}
	}
	$('#track-btn').click(function(){
		track_now()
	})
	$('#ref_no').on('search',function(){
		track_now()
	})
</script>


    <div class="container" >
       
    <h1>Order Tracking</h1>
    <form method="post" action="track.php">
      <label for="order-id">Order ID:</label>
      <input type="text" id="order-id" name="order_id" required>
    </br>

      <div style="margin-left:5px;">
       
                    <button type="button" class="btn btn-primary float-end" data-toggle="modal" data-target="#studentaddmodal" style="margin-top:5px; margin-bottom:5px;">
                        Track Order
                    </button>
                </div></br>
    </form>
    <div id="order-details"></div>
    <script src="script.js"></script>
           



                <?php
                $connection = mysqli_connect('localhost','u151063784_upresswmsuprs','LadQw702+&3');
                $db = mysqli_select_db($connection, 'u151063784_db_upress');

                $query = "SELECT * FROM purchase_order";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered border-dark table-responsive-sm">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">OrderId</th>
                                <th scope="col">OrderDate </th>
                                <th scope="col">BuyerId </th>
                                <th scope="col">requireDate </th>
                                <th scope="col">Expe_deliverDate</th>
                                <th scope="col">paymentId </th>
                                <th scope="col"> Status </th>
                                
                                
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                                <td > <?php echo $row['ordr_id']; ?> </td>
                                <td> <?php echo $row['ordr_date']; ?> </td>
                                <td> <?php echo $row['buyer_id']; ?> </td>
                                <td> <?php echo $row['req_date']; ?> </td>
                                <td> <?php echo $row['exp_deliver_date']; ?> </td>
                                <td> <?php echo $row['payment_id']; ?> </td>
                                <td> <?php echo $row['status']; ?> </td>
                              
                               
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
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



 