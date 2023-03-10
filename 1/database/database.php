<?php

class Database{
    public $host = 'localhost';
    public $username = 'u151063784_upress';
    public $password = 'c#0DVuCD';
    public $database = 'u151063784_upressprs';
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

