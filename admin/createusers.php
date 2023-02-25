<?php
require_once '../database/user.class.php';
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
    
   
    



    <div class="home-content">
        <div class="table-container">
            <div class="table-heading">
            <form class="select-forms" action="custinsert.php" method="post">
                <h3 class="table-title">Faculty Profile</h3>
                
                    <a href="addaccount.php" class="button">Add New Faculty</a>
              
            
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Academic Rank</th>
                        <th>Department</th>
                        <th>Admission Role</th>
                        <th>Status</th>
                        <?php
                            if($_SESSION['user_type'] == 'admin'){ 
                        ?>
                            <th class="action">Action</th>
                        <?php
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once '../database/user.class.php';

                        $users = new users();
                        //We will now fetch all the records in the array using loop
                        //use as a counter, not required but suggested for the table
                        $i = 1;
                        //loop for each record found in the array
                        $output= $user -> login(); //start of loop
                    ?>
                        <tr>
                            <!-- always use echo to output PHP values -->
                            <td><?php echo $i ?></td>
                            <td><?php echo $value['lastname'] . ', ' . $value['firstname'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['academic_rank'] ?></td>
                            <td><?php echo $value['department'] ?></td>
                            <td><?php echo $value['admission_role'] ?></td>
                            <td><?php echo $value['status'] ?></td>
                            <?php
                                if($_SESSION['user_type'] == 'admin'){ 
                            ?>
                                <td>
                                    <div class="action">
                                        <a class="action-edit" href="#">Edit</a>
                                        <a class="action-delete" href="#">Delete</a>
                                    </div>
                                </td>
                            <?php
                                }
                            ?>
                        </tr>
                    <?php
                        $i++;
                    //end of loop
                    
                    ?>
                </tbody>
            </table>
                            </form>
        </div>
    </div>

?>

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
