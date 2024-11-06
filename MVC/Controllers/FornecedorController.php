<?php
require_once 'MVC/Models/Fornecedormodels.php';

class FornecedorController {
    private $fornecedorModel;

    public function __construct() {
        $this->fornecedorModel = new Fornecedor();
    }

    public function cadastrarFornecedor($nome, $telefone, $email, $cnpj) {
        $this->fornecedorModel->cadastrar($nome, $telefone, $email, $cnpj);
    }

    public function listarFornecedores() {
        return $this->fornecedorModel->listarTodos();
    }
}
