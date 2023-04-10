<?php 
require_once 'database.php';

class multi{
    public $serviceCatId;
    public $serviceCategory;
    public $description;
 //service parameter
    public $size;
    public $unitPrice;
    public $printType;
    // service order
    public $materialId;
    public $qty;
    public $serviceId;
    public $totalPrice;
    public $filename;
    
    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function createProgram() {
        try {
    
 

// Insert data into table1
$table1_sql = "INSERT INTO service_category (service_category, description) VALUES (:service_order, :description)";
$table1_stmt= $this->db->connect()->prepare($table1_sql);
$table1_stmt->bindParam(':service_category', $serviceCategory);
$table1_stmt->bindParam(':description', $description);

$table1_stmt->execute();

// Insert data into table2
$table2_sql = "INSERT INTO serivce_parameter (size, unit_price, print_type, color_type) VALUES (:order_id, :product_name, :quantity)";
$table2_stmt = $this->db->connect()->prepare($table2_sql);
$table2_stmt->bindParam(':size', $size);
$table2_stmt->bindParam(':unit_price', $unitPrice);
$table2_stmt->bindParam(':print_type', $printType);
$table2_stmt->bindParam(':color_type', $colorType);
$table2_stmt->execute();

// Insert data into table3
$table3_sql = "INSERT INTO serivce_order(material_id, qty, serviceCat_id, total_price, filename) VALUES (:material_id, :qty, :serviceCat_id, :filename)";
$table3_stmt =$this->db->connect()->prepare($table3_sql);
$table3_stmt->bindParam(':material_id', $materialId);
$table3_stmt->bindParam(':qty', $qty);
$table3_stmt->bindParam(':serviceCat_id', $serviceCatId);
$table3_stmt->bindParam(':total_price', $totalPrice);
$table3_stmt->bindParam(':filename', $filename);
$table3_stmt->execute();

echo "Data inserted successfully\n";


    
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

}