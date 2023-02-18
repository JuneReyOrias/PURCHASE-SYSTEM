<?php 
require_once 'database.php';

Class users{
    public $firstname;
    public $lastname;
    public $type;
    public $username;
    public $password;
    public $email;

    protected $db;

    function __construct()
    {
        $this->db = new database();
    }
 
    function login(){
        $sql = "SELECT * FROM users WHERE email= :email and password = :password" ;
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
           $data = $query->fetch();
        }
     	return $data;
    }





    function validate(){
        $sql = "SELECT * FROM users WHERE username =:username and password = :password ;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':username', $this->username);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }
}

?>