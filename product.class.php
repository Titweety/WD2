<?php
include_once 'database.class.php';

class Products {
    private $conn;
    private $table_name = "eto";

    public $product_id;
    public $product_name;
    public $type;
    public $availability;

    public function __construct() {
        $this->conn = new Database;

    }

    
    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->getConnection()->prepare($query);
       if($stmt->execute()){
        $data = $stmt->fetchAll();
       }
        return $data;
    }
}
?>