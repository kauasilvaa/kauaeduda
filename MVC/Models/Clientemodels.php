<?php
require_once 'db.php';

class Cliente {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function criarCliente($nome, $cpf, $data_nascimento) {
        $sql = "INSERT INTO clientes (nome, cpf, data_nascimento) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$nome, $cpf, $data_nascimento]);
        return $stmt->rowCount();
    }

    public function listarClientes() {
        $sql = "SELECT * FROM clientes";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarCliente($id, $nome, $cpf, $data_nascimento) {
        $sql = "UPDATE clientes SET nome = ?, cpf = ?, data_nascimento = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$nome, $cpf, $data_nascimento, $id]);
        return $stmt->rowCount();
    }

    public function deletarCliente($id) {
        $sql = "DELETE FROM clientes WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->rowCount();
    }
}
?>
