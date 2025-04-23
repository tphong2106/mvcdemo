<?php
require_once __DIR__ . '/../../Core/database.php';
class ProductModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
    public function getAllProducts()
    {
        $stmt = $this->db->prepare("SELECT * FROM products ORDER BY id ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertProduct($name, $price, $image)
    {
        $sql = "INSERT INTO products (Name, Price, Image) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $price, $image]);
    }
}
