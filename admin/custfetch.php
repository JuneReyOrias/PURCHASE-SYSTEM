<?php 
$_SESSION();
require_once '../database/database.php';
$obj= new Database();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Fetch data from database using pdo in php</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
        <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                    endif; 
                ?>
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Fetch data from database using pdo in php </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once '../database/databse.php';
                                    $query =" SELECT * FROM `user_acc`";
                                    $statement = $connect->prepare($query);
                                    $statement->execute();

                                    
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row->id; ?></td>
                                                <td><?= $row->username; ?></td>
                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5">No Record Found</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>