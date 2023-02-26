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
				$this->connection = new mysqli("mysql:host=$this->host;dbname=$this->database", 
											$this->username, $this->password);
              if($this->connection->connect_error){
                echo 'Connection Failed';
                
               }else{
                echo 'Connected';
               }

            }
        }

}

?>