<?php
require_once 'MVC/Models/Estoquemodels.php';

class EstoqueController {
    private $estoqueModel;

    public function __construct() {
        $this->estoqueModel = new Estoque();
    }

    public function criarProduto($nome_produto, $categoria, $data_entrada, $data_saida)
    {
        $result = $this->estoqueModel->criarProduto($nome_produto, $categoria, $data_entrada, $data_saida);

        if ($result > 0) {
            echo "Produto criado com sucesso!";
        } else {
            echo "Erro ao criar o produto.";
        }
    }

    public function listarProdutos() {
        return $this->estoqueModel->listartodos();
    }

    public function atualizarProduto($id, $nome_produto, $categoria, $data_entrada, $data_saida)
    {
        $result = $this->estoqueModel->atualizarProduto($id, $nome_produto, $categoria, $data_entrada, $data_saida);

        if ($result > 0) {
            echo "Produto atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar o produto.";
        }
    }

    public function deletarProduto($id)
    {
        $result = $this->estoqueModel->deletarProduto($id);

        if ($result > 0) {
            echo "Produto deletado com sucesso!";
        } else {
            echo "Erro ao deletar o produto.";
        }
    }
}