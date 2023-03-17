<?php 
require_once 'database.php';

Class Products{ 
   
                                   
        public $productId;
        public $productName;
        public $productDesc;
        public $unitPrice;
        public $qty;
                                   
  

    protected $db;

    function __construct()
    {
        $this->db = new database();
    }
 
    function addProduct(){
        try {
      
                $insertSql =  "INSERT INTO products(product_name, product_desc, unit_price, qty) VALUES 
                (:product_name, :product_desc, :unit_price, :qty);";
                $insertStmt = $this->db->connect()->prepare($insertSql);
                $insertStmt->bindParam(':product_name', $this->productName);
                $insertStmt->bindParam(':product_desc', $this->productDesc);
                $insertStmt->bindParam(':unit_price', $this->unitPrice);
                $insertStmt->bindParam(':qty', $this->qty);
            
                $insertStmt->execute();
            
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }






    public function show() {
       
            $sql = "SELECT * FROM products;";
            
            $query=$this->db->connect()->prepare($sql);
            $query->execute();
            
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    
    }




     

function delete(){
    $sql = "DELETE FROM products WHERE product_id=:product_id";

    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':product_id', $this->productId);

    if($query->execute()){
        return true;
    }
    else{
        return false;
    }	
}


}

?>