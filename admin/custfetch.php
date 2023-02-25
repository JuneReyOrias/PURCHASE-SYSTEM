
<?php

require_once '../database/database.php';
require_once '../databse/user.class.php';
    ?>
<?php
 $connect = mysqli_connect('localhost', 'u151063784_upresswmsuprs', 'LadQw702+&3', 'u151063784_db_upress');
    $query = "SELECT * FROM user_acc ORDER BY id DESC";
    $result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <table class="table text-center table-striped table-bordered">
            <tr>
            <th>Username</th>
              <th>Password</th>
                <th>Fistname</th>
                     <th>LastName</th>
                      <th>Email</th>
                        <th>Role</th>
            </tr>
            <?php 
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>".$row["user_name"]."</td>";
                        echo "<td>".$row["password"]."</td>";
                        echo "<td>".$row["firstname"]."</td>";
                        echo "<td>".$row["lastname"]."</td>";
                        echo "<td>".$row["email"]."</td>";
                        echo "<td>".$row["role"]."</td>";
                       
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
