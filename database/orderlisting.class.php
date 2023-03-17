<?php

require_once 'database.php';
class Orderlist{
    public $orderId;
    public $productId;
    public $unitPrice;
    public $quantity;
    public $serviceId;
   

    protected $db;

    function __construct()
    {
        $this->db = new database();
    }
    function insertOrder(){ 
        try {
             // Get the ID of the semester with the given  name
            $serviceSql = "SELECT id FROM service WHERE id = :service_id";
            $serviceStmt = $this->db->connect()->prepare($serviceSql);
            $serviceStmt->bindParam(':service_id', $this->serviceId);
            $serviceStmt->execute();
            $serviceID = $serviceStmt->fetchColumn();


            $sql = "INSERT INTO order_listing (order_id, product_id, unit_price, qty, service_id) VALUES (:order_id, :product_id, :unit_price, :qty, :service_id)";
            $stmt = $this->db->connect()->prepare($sql);
            $stmt->bindParam(':order_id', $this->orderId);
            $stmt->bindParam(':prodcuct_id', $this->productId);
            $stmt->bindParam(':unit_price', $this->unitPrice);
            $stmt->bindParam(':qty', $this->quantity);
            $stmt->bindParam(':service_id', $this->serviceId);
         
            
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    
    }
    function show(){
        $sql = "SELECT * FROM `order_listing` ORDER BY `order_id`.`order_id` ASC";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function delete(){
        $sql = "DELETE FROM order_listing WHERE order_id=:order_id";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':order_id', $this->orderId);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }
}



?>