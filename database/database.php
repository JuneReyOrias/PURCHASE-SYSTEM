<?php

class Database{
    public $host = 'localhost';
    public $username = 'u151063784_upresswmsuprs';
    public $password = 'LadQw702+&3';
    public $database = 'u151063784_db_upress';
    protected $connection;

    function connect(){
        try 
			{
				$this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", 
											$this->username, $this->password);
			} 
			catch (PDOException $e) 
			{
				echo "Connection error " . $e->getMessage();
			} {
                echo " Connected " ;

            }
        return $this->connection;
    }

public function inserRecord($post){
    $username=$post['user_name'];
   $password=$post['password'];
   $firstname=$post['firstname'];
   $lastname=$post['lastname'];
   $email=$post['email'];
   $role=$post['role'];
   $sql = "INSERT INTO `user_acc`( `user_name`, `user_pass`, `firstname`, `lastname`, `email`, `role`) VALUES ('','','','','','')";
   $result=$this->connect()->query($sql);
   if($result){
    header('location: addcustomer.php?msg=');

   }else{
    echo "Error".$sql."<br".$this->connection;
   }
}

}



?>