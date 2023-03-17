
<?php

require_once 'database.class.php';

class Purchase{
    public $orderId;
    public $orderdate;
    public $customerid;
    public $staffid;
    public $status;
    public $requireddate;
    public $exp_dlvdate;
    public $paymentid;
    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function insertPurchase() {
        try {
    
            // Get the ID of the semester with the given semester name
            $customerSql = "SELECT id FROM customer WHERE id = :customer_id";
            $customerStmt = $this->db->connect()->prepare($customerSql);
            $customerStmt->bindParam(':customer_id', $this->customerid);
            $customerStmt->execute();
            $customerID = $customerStmt->fetchColumn();

            $staffSql = "SELECT id FROM staff WHERE id = :staff_id";
            $staffStmt = $this->db->connect()->prepare($staffSql);
            $staffStmt->bindParam(':staff_id', $this->staffid);
            $staffStmt->execute();
            $staffID = $staffStmt->fetchColumn();

            $paymentSql = "SELECT id FROM payment WHERE id = :payment_id";
            $paymentStmt = $this->db->connect()->prepare($paymentSql);
            $paymentStmt->bindParam(':payment_id', $this->paymentid);
            $paymentStmt->execute();
            $paymentID = $paymentStmt->fetchColumn();
            

    
    
            // Insert the new row into the purchase_schedule table with the retrieved ID values
            $insertSql = "INSERT INTO purchase (order_date, customer_id, required_date, exp_dlv_date,payment_id)
            VALUES (:order_date, :customer_id, :required_date, :exp_dlv_date,:payment_id)";
            "INSERT INTO paymemt (method, due)
            VALUES (:method, :due)";
            $insertStmt = $this->db->connect()->prepare($insertSql);
            $insertStmt->bindParam(':order_date', $this->orderdate);
            $insertStmt->bindParam(':customer_id', $customerid);
            $insertStmt->bindParam(':required_date', $requireddate);
            $insertStmt->bindParam(':exp_dlv_date', $exp_dlvdate);
            $insertStmt->bindParam(':payment_id', $paymentid);
            $insertStmt->bindParam(':method', $method);
            $insertStmt->bindParam(':due', $due);
            $insertStmt->execute();

    
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function delete(){
            $sql = "DELETE FROM purchase WHERE order_id=:order_id";
    
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':order_id', $this->orderId);
    
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	
        }

        function update(){
                $sql = "UPDATE programs SET program_name=:program_name WHERE id=:id";
                $query=$this->db->connect()->prepare($sql);
                $query->bindParam(':program_name', $this->programName);
                $query->bindParam(':id', $this->orderId);
                
                if ($query->execute()) {
                    $count = $query->rowCount();
                    echo "$count row updated";
                    return true;
                } else {
                    $error = $query->errorInfo();
                    echo "Update failed: " . $error[2];
                    return false;
                }	
            }


    function show(){
        $sql = "SELECT * FROM programs ORDER BY programs.id ASC";
        $query=$this->db->connect()->prepare($sql);
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;   
    }

    function showAllDetailsByPrcustomer_id() {
        $sql = "SELECT p.program_name, p.id, p.college_id, c.college_name, c.college_code
                FROM programs p
                JOIN colleges c ON p.college_id = c.id
                WHERE p.college_id = :college_id";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->bindValue(':college_id', $collegeid, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProgramByCollegeId($college_id) {
        $stmt = $this->db->connect()->prepare("SELECT * FROM programs WHERE college_id = :college_id");
        $stmt->bindParam(":college_id", $college_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    function get($id) {
        $stmt = $this->db->connect()->prepare("SELECT * FROM programs WHERE college_id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


   
}

?>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
wmsu-collection-system/program.class.php at main · LurDooDev/wmsu-collection-system · GitHub 