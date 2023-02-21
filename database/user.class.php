<?php 
require_once '../database/database.php';

Class users{
                                   
    public $username;
    public $password;
    public $firstname;
    public $lastname;
    public $email;
    public $role;


    protected $db;

    function __construct()
    {
        $this->db = new database();
    }
 
    function login(){
        $sql = "SELECT * FROM user_acc WHERE user_name = :email and user_pass = :password" ;
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
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