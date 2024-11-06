<?php
require_once 'MVC/Models/Estoquemodels.php';

class EstoqueController {
    private $estoqueModel;

    public function __construct() {
        $this->estoqueModel = new Estoque();
    }

    public function cadastrarProduto($nome, $categoria, $data_entrada, $data_saida) {
        $this->estoqueModel->cadastrar($nome, $categoria, $data_entrada, $data_saida);
    }

    public function listarProdutos() {
        return $this->estoqueModel->listartodos();
    }
}
