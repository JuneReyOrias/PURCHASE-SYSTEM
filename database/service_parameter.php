<?php 
require_once 'database.php';

Class ServiceParam { 
   
                    
        public $serviceCatId;
        public $size;
        public $unitPrice;
        public $printType;
        public $colorType;
        
                                   
  

    protected $db;

    function __construct()
    {
        $this->db = new database();
    }
 
    function addparam($size, $unit_price, $print_type, $color_type){
        try {
           
        
            $serviceCatSql = "SELECT 	serviceCat_id FROM service WHERE 	serviceCat_id= :	serviceCat_id";
            $serviceCatStmt = $this->db->connect()->prepare($serviceCatSql);
            $serviceCatStmt->bindParam(':serviceCat_id', $this->serviceCatId);
            $serviceCatStmt->execute();
            $serviceCatId = $serviceCatStmt->fetchColumn();

                $insertSql =  "INSERT INTO serivce_parameter(size, unit_price, print_type, color_type) VALUES 
                (:size, :unit_price, :print_type, :color_type);";
                $insertStmt = $this->db->connect()->prepare($insertSql);
                $insertStmt->bindParam(':size', $this->size);
                $insertStmt->bindParam(':unit_price', $this->unitPrice);
                $insertStmt->bindParam(':print_type', $this->printType);
                $insertStmt->bindParam(':color_type', $this->colorType);
            
                $insertStmt->execute();
            
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }






    public function show() {
       
            $sql = "SELECT * FROM service_parameter;";
            
            $query=$this->db->connect()->prepare($sql);
            $query->execute();
            
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    
    }




     

    function delete(){
        $sql = "DELETE FROM service_parameter WHERE serviceCat_id=:serviceCat_id";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':serviceCat_id', $this->serviceCatId);

        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

public function deletes($delete_id) {
    $delete_stmt = $this->db->connect()->prepare('DELETE FROM service_parameter WHERE serviceCat_id = :serviceCat_id ');
    $delete_stmt->bindParam(':serviceCat_id',$delete_id);

    if ($delete_stmt->execute()) {
        echo 'Record deleted successfully.';
    } else {
        echo 'Failed to delete the record.';
    }
}

}

?>