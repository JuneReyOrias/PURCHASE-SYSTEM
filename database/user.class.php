<?php 
require_once 'database.php';

Class users{
                                   
    public $username;
    public $password;
    public $firstname;
    public $lastname;
    public $email;
    public $contactNo;
    public $role;
    public $id;

    protected $db;

    function __construct()
    {
        $this->db = new database();
    }
 
    function login(){
        $sql = "SELECT * FROM user WHERE user_name = :email and user_pass = :password" ;
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
           $data = $query->fetch();
        }
     	return $data;
    }

    function show(){
        $sql = "SELECT * FROM user;";
        
        $query=$this->db->connect()->prepare($sql);
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;

}
function addUser(){
    try {
  
            $insertSql =  "INSERT INTO user(user_name, user_pass, lastname, firstname, email, contact_no, role) VALUES 
            (:user_name, :user_pass, :lastname, :firstname, :email, :contact_no, :role);";
            $insertStmt = $this->db->connect()->prepare($insertSql);
            $insertStmt->bindParam(':user_name', $this->username);
            $insertStmt->bindParam(':user_pass', $this->password);
            $insertStmt->bindParam(':lastname', $this->lastname);
            $insertStmt->bindParam(':firstname', $this->firstname);
            $insertStmt->bindParam(':email', $this->email);
            $insertStmt->bindParam(':contact_no', $this->contactNo);
            $insertStmt->bindParam(':role', $this->role);
            $insertStmt->execute();
        
        return true;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}
function delete(){
    $sql = "DELETE FROM user WHERE id=:id";

    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':id', $this->id);

    if($query->execute()){
        return true;
    }
    else{
        return false;
    }	
}
function update(){
    $sql = "UPDATE user SET user_name=:user_name, user_pass=:user_pass, lastname=:lastname, firstname=:firstname, email=:email, contact_no=:contact_no, role=:role WHERE id=:id";
    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':user_name', $this->username);
    $query->bindParam(':user_pass', $this->password);
    $query->bindParam(':lastname', $this->lastname);
    $query->bindParam(':firstname', $this->firstname);
    $query->bindParam(':email', $this->email);
    $query->bindParam(':contactNo', $this->contactNo);
    $query->bindParam(':role', $this->role);
    $query->bindParam(':id', $this->id);
    if ($query->execute()) {
        $count = $query->rowCount();
        echo "$count row updated";
        return true;
    } else {
        $error = $query->errorInfo();
        echo "Update failed: " . $error[2];
        return false;
    }	
}


function fetch($id){
    $sql = "SELECT * FROM user WHERE id = :id;";
    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':id', $id);
    if($query->execute()){
        $data = $query->fetch();
    }
    return $data;
}


/*    function login(){
        $sql = "SELECT * FROM users WHERE BINARY email = :email AND BINARY password = :password AND type = 'customers';";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }

    function sign_in_admin(){
        $sql = "SELECT * FROM user WHERE BINARY email = :email AND BINARY password = :password AND type != 'customer';";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }

   public function get_user_info($id=0){
        if($id == 0){
            $sql = "SELECT * FROM user WHERE BINARY email = :email AND BINARY password = :password;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':email', $this->email);
            $query->bindParam(':password', $this->password);
        }else{
            $sql = "SELECT * FROM users WHERE id = :id;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
        }
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
*/
}

?>