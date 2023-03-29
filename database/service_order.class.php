<?php 
require_once 'database.php';

Class ServiceOrder{ 
   
                                   
        public $serviceId;
        public $materialName;
        public $qty;
        public $serviceCatId;
        public $totalPrice;
        public $filename;
        
                                   
  

    protected $db;

    function __construct()
    {
        $this->db = new database();
    }
 
    function addServO(){
        try {

            $serviceCatSql = "SELECT 	serviceCat_id FROM service WHERE 	serviceCat_id= :serviceCat_id";
            $serviceCatStmt = $this->db->connect()->prepare($serviceCatSql);
            $serviceCatStmt->bindParam(':serviceCat_id', $this->serviceCatId);
            $serviceCatStmt->execute();
            $serviceCatId = $serviceCatStmt->fetchColumn();
                $insertSql =  "INSERT INTO serivce_order(material_id, qty, serviceCat_id, filename) VALUES 
                (:material_id, :qty, :serviceCat_id, :filename);";
                $insertStmt = $this->db->connect()->prepare($insertSql);
                $insertStmt->bindParam(':material_id', $this->materialName);
                $insertStmt->bindParam(':qty', $this->qty);
                $insertStmt->bindParam(':serviceCat_id', $this->serviceCatId);
                $insertStmt->bindParam(':total_price', $this->totalPrice);
                $insertStmt->bindParam(':filename', $this->filename);
            
                $insertStmt->execute();
            
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function addServ(){
        try {

   
                $insertSql =  "INSERT INTO serivce_order(material_id, qty, serviceCat_id, filename) VALUES 
                (:material_id, :qty, :serviceCat_id, :filename);";
                $insertStmt = $this->db->connect()->prepare($insertSql);
                $insertStmt->bindParam(':material_id', $this->materialName);
                $insertStmt->bindParam(':qty', $this->qty);
                $insertStmt->bindParam(':serviceCat_id', $this->serviceCatId);
                $insertStmt->bindParam(':total_price', $this->totalPrice);
                $insertStmt->bindParam(':filename', $this->filename);
            
                $insertStmt->execute();
            
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }





    public function show() {
       
            $sql = "SELECT * FROM service_order;";
            
            $query=$this->db->connect()->prepare($sql);
            $query->execute();
            
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    
    }




     

    function delete(){
        $sql = "DELETE FROM service_order WHERE service_id=:service_id";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':service_id', $this->serviceId);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

public function deletes($delete_id) {
    $delete_stmt = $this->db->connect()->prepare('DELETE FROM service_order WHERE service_id = :service_id ');
    $delete_stmt->bindParam(':service_id',$delete_id);

    if ($delete_stmt->execute()) {
        echo 'Record deleted successfully.';
    } else {
        echo 'Failed to delete the record.';
    }
}

}

?>