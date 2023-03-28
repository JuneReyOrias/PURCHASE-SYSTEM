<?php 
require_once 'database.php';

Class Category{ 
   
                                   
        public $serviceCatId;
        public $serviceCategory;
        public $description;
      
        
                                   
  

    protected $db;

    function __construct()
    {
        $this->db = new database();
    }
 
    function addCat(){
        try {
      
                $insertSql =  "INSERT INTO serivce_category(service_category, description,) VALUES 
                (:service_category, :description);";
                $insertStmt = $this->db->connect()->prepare($insertSql);
                $insertStmt->bindParam(':service_category', $this->serviceCategory);
                $insertStmt->bindParam(':description', $this->description);
            
                $insertStmt->execute();
            
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }






    public function show() {
       
            $sql = "SELECT * FROM service_category;";
            
            $query=$this->db->connect()->prepare($sql);
            $query->execute();
            
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    
    }




     

    function delete(){
        $sql = "DELETE FROM service_category WHERE serviceCat_id=:serviceCat_id";

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
    $delete_stmt = $this->db->connect()->prepare('DELETE FROM service_category WHERE serviceCat_id = :serviceCat_id ');
    $delete_stmt->bindParam(':serviceCat_id',$delete_id);

    if ($delete_stmt->execute()) {
        echo 'Record deleted successfully.';
    } else {
        echo 'Failed to delete the record.';
    }
}

}

?>