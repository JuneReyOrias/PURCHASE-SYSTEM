<?php

class Database{
    public $host = 'localhost';
    public $username = 'root';
    public $password = '';
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
			}
        return $this->connection;
    }

}

?>