<?php
require_once '../Models/Fornecedor.php';

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

    // Método para listar todos os fornecedores
    public function listarFornecedores()
    {
        return $this->fornecedorModel->listarFornecedores();
    }

    // Método para atualizar um fornecedor
    public function atualizarFornecedor($id, $nome, $telefone, $email, $cnpj)
    {
        if ($id && $nome && $telefone && $email && $cnpj) {
            return $this->fornecedorModel->atualizarFornecedor($id, $nome, $telefone, $email, $cnpj);
        } else {
            throw new Exception("Todos os campos são obrigatórios.");
        }
    }

    // Método para deletar um fornecedor
    public function deletarFornecedor($id)
    {
        if ($id) {
            return $this->fornecedorModel->deletarFornecedor($id);
        } else {
            throw new Exception("ID do fornecedor é obrigatório.");
        }
    }
}
