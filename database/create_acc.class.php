<?php 
require_once 'database.php';

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
        $this->db = new Database();
    }

    function signup() {
        $sql = "INSERT INTO 'user_acc' (id, user_name, user_pass, firstname,  lastname,  email,   role,)
                               VALUES(:email, :password, :firstname,  :lastname,  :email,  :role,)";

        $query=$this->db->connect()->prepare($sql);

        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        $query->bindParam(':firstname', $this->firstname);
        
        $query->bindParam(':lastname', $this->lastname);
        
        $query->bindParam(':email', $this->email);
    
        $query->bindParam(':role', $this->role);
       
       
        if($query->execute()){
            $this-> id = $this -> getlatestid();
             
            $sql =  "INSERT INTO 'user_acc_data' ('id', 'user_name', 'user_pass', 'role', 'type')
            VALUES (:id, :email, :password, :role, :type)";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':id', $this->id);
            $query->bindParam(':email', $this-> email);
            $query->bindParam(':password', $this->password);
            $query->bindParam(':role', $this->role);
            

            if($query-> execute()){
               return"added successfully 2";
              
            }
            return"added successfully 1";


        } 
        return "error adding ";
    }
}