<?php
require_once '../../db.php';

class Cliente {
    private $conn;
    private $table_name = "clientes";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function listarTodos() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}