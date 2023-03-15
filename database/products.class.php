<?php 
require_once 'database.php';

Class Products{ 
                                   
    public $productName;
    public $productDesc;
    public $unitPrice;
    public $qty;
    public $productId;

    protected $db;

    function __construct()
    {
        $this->db = new database();
    }
 

    function get(){
        $sql = "SELECT * FROM products;";
        
        $query=$this->db->connect()->prepare($sql);
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;

}
function add(){
    $sql = "INSERT INTO products(product_name, product_desc, unit_price, qty) VALUES 
    (:product_name, :product_desc, :unit_price, :qty);";

    $query=$this->db->connect()->prepare($sql);
    $query->bindParam(':product_name', $this->productName);
    $query->bindParam(':product_desc', $this->productDesc);
    $query->bindParam(':unit_price', $this->unitPrice);
    $query->bindParam(':qty', $this->qty);
  
    if($query->execute()){
        return true;
    }
    else{
        return false;
    }	
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