<?php

require_once 'database.class.php';
 class Product{
    
    public $productId;
    public $productName;
    public $productDesc;
    public $unitPrice;
    public $Qty;
   

    protected $db;

    function __construct()
    {
        $this->db = new database();
    }


    function show(){
        $sql = "SELECT * FROM product;";
        
        $query=$this->db->connect()->prepare($sql);
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function addproduct(){
        $sql = "INSERT INTO product(product_name, product_desc, unit_price, qty) VALUES 
        (:product_name, :product_desc, :unit_price, :qty);";
    
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':product_name', $this->productName);
        $query->bindParam(':product_desk', $this->productDesc);
        $query->bindParam(':unit_price', $this->unitPrice);
        $query->bindParam(':qty', $this->Qty);
   
        
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
 }