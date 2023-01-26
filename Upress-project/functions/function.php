<?php
if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once('.../login/login.php');
    require_once('../database/database.php');

    if (emptyInputLogin($username, $pasword) != false) {
        header("location=../logon.php?error=emptyinput");
        exit();

    }

    loginUser($conn, $username, $password);

}
else{
    header("location: ../login.php");
    exit;
}
function emptyInputLogin($username, $password)
{
    $result;

    if (empty($username) || empty($password)) {
        $results = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function loginUser($username, $password){
 
}
function uidExist ($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid=? OR usersEmail= ?;";
    $stmt = mysqli_stmt($conn);
    if  (!mysqli_stmt_prepare($stmt, $sql) ){
        header("locationn:../login.php?error=stmt failed");
        exit;

    }
    mysql_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt );

    $resultdata = mysqli_stmt_get_result($stmt);
}

?>
