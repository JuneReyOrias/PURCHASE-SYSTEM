<?php 
require_once 'database.php';

Class users{
    public $firstname;
    public $lastname;
    public $type;
    public $username;
    public $password;

    protected $db;

    function __construct()
    {
        $this->db = new database();
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