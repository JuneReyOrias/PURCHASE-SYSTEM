<?php
require_once '../database/database.php';
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
    $obj_database= new Database();
    if(isset($_POST['save_student_btn']))
    { print_r($_POST);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Insert data into database using PDO in PHP</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">

                <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                    endif; 
                ?>

                <div class="card">
                    <div class="card-header">
                        <h3>Insert data into database using PDO in PHP</h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="createusers.php" method="POST">
                            <div class="mb-3">
                                <label>username</label>
                                <input type="text" name="user_name" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>password</label>
                                <input type="text" name="password" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Firstname</label>
                                <input type="text" name="firstname" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Lastname</label>
                                <input type="text" name="lastname" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Role</label>
                                <input type="text" name="role" class="form-control" />
                            </div>
                          
                            <div class="mb-3">
                                <button type="submit" name="save_" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>