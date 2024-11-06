<?php
require_once 'MVC/Models/ClienteModel.php';

class ClienteController {
    private $clienteModel;

    public function __construct() {
        $this->clienteModel = new Cliente();
    }

    public function criarCliente($nome, $cpf, $data_nascimento) {
        if (empty($nome) || empty($cpf) || empty($data_nascimento)) {
            return "Todos os campos devem ser preenchidos!";
        }

        $resultado = $this->clienteModel->criarCliente($nome, $cpf, $data_nascimento);
        return $resultado ? "Cliente cadastrado com sucesso!" : "Erro ao cadastrar cliente.";
    }

    public function listarClientes() {
        return $this->clienteModel->listarClientes();
    }

    public function atualizarCliente($id, $nome, $cpf, $data_nascimento) {
        $resultado = $this->clienteModel->atualizarCliente($id, $nome, $cpf, $data_nascimento);
        return $resultado ? "Cliente atualizado com sucesso!" : "Erro ao atualizar cliente.";
    }

    public function deletarCliente($id) {
        $resultado = $this->clienteModel->deletarCliente($id);
        return $resultado ? "Cliente deletado com sucesso!" : "Erro ao deletar cliente.";
    }
}
?>
