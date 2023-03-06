<?php

require_once 'database.class.php';

class Purchase {
    public $orderID;
    public $orderDate;
    public $customerId;
    public $staffId;
    public $status;
    public $requiredDate;
    public $expe_dlvDate;
    public $paymentId;
    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function createFee() {
        try {
            $sql = "INSERT INTO purchase_order (order_id, order_date, customer_id, status, required_date, exp_dlv_date, payment_id) VALUES (:order_id, :order_date, :customer_id, :status, :required_date, :exp_dlv_date, payment_id)";
            $stmt = $this->db->connect()->prepare($sql);
            $stmt->bindParam(':oder_id', $this->orderID);
            $stmt->bindParam(':oder_date', $this->orderDate);
            $stmt->bindParam(':customer_id', $this->customerId);
            $stmt->bindParam(':status', $this->status);
            $stmt->bindParam(':required_date', $this->requiredDate);
            $stmt->bindParam(':exp_dlv_date', $this->expe_dlvDate);
            $stmt->bindParam(':paymet_id', $this->paymentId);
            
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function get($fee_id) {
        $stmt = $this->db->connect()->prepare("SELECT * FROM fee WHERE fee_id = :fee_id");
        $stmt->bindParam(":fee_id", $fee_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function show(){
        $sql = "SELECT * FROM fee ORDER BY fee.fee_id ASC";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function delete(){
        $sql = "DELETE FROM fee WHERE fee_id=:fee_id";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':fee_id', $this->feeID);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

   
}

?>