<?php
require_once 'MVC/Models/Fornecedormodels.php';

class FornecedorController
{

    private $fornecedorModel;

    public function __construct($fornecedorModel)
    {
        $this->fornecedorModel = $fornecedorModel;
    }

    // Método para criar um novo fornecedor
    public function criarFornecedor($nome, $telefone, $email, $cnpj)
    {
        if ($nome && $telefone && $email && $cnpj) {
            return $this->fornecedorModel->criarFornecedor($nome, $telefone, $email, $cnpj);
        } else {
            throw new Exception("Todos os campos são obrigatórios.");
        }
    }

    public function listarFornecedores() {
        return $this->fornecedorModel->listarTodos();
    }
}
