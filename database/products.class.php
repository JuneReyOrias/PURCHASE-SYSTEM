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






    public function fetchAllRecords() {

        $data = null;

        $select_stmt = $this->db->connect()->prepare('SELECT product_id, product_name, product_desc, unit_price, qty FROM products;');
        $select_stmt->execute();

        $data = $select_stmt->fetchAll();

        return $data;
    }




     

function delete(){
    $sql = "DELETE FROM product WHERE product_id=:product_id";

    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':product_id', $this->productId);

    if($query->execute()){
        return true;
    }
    else{
        return false;
    }	
}

/*    function login(){
        $sql = "SELECT * FROM users WHERE BINARY email = :email AND BINARY password = :password AND type = 'customers';";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }

    function sign_in_admin(){
        $sql = "SELECT * FROM user WHERE BINARY email = :email AND BINARY password = :password AND type != 'customer';";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        if($query->execute()){
            if($query->rowCount()>0){
                return true;
            }
        }
        return false;
    }

   public function get_user_info($id=0){
        if($id == 0){
            $sql = "SELECT * FROM user WHERE BINARY email = :email AND BINARY password = :password;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':email', $this->email);
            $query->bindParam(':password', $this->password);
        }else{
            $sql = "SELECT * FROM users WHERE id = :id;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id);
        }
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
*/
}

?>