<?php 
require_once 'database.php';

class multi{
    public $serviceCatId;
    public $size;
    public $unitPrice;
    public $printType;
    public $colorType;
    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function createProgram() {
        try {
    
            // Get the ID of the semester with the given semester name
            $collegeSql = "SELECT id FROM colleges WHERE id = :college_id";
            $collegeStmt = $this->db->connect()->prepare($collegeSql);
            $collegeStmt->bindParam(':college_id', $this->collegeID);
            $collegeStmt->execute();
            $collegeID = $collegeStmt->fetchColumn();
    
    
            // Insert the new row into the fee_schedule table with the retrieved ID values
            $insertSql = "INSERT INTO programs (program_name, college_id)
            VALUES (:program, :college_id)";
            $insertStmt = $this->db->connect()->prepare($insertSql);
            $insertStmt->bindParam(':program', $this->programName);
            $insertStmt->bindParam(':college_id', $collegeID);
            $insertStmt->execute();

    
            return true;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

}