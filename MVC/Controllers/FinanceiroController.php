<?php
require_once '../Models/Financeiro.php';

class FinanceiroController {
    private $financeiroModel;

    public function __construct() {
        $this->financeiroModel = new Financeiro();
    }

    public function registrarVenda($nome_cliente, $cpf_cliente, $valor_total, $data_venda) {
        $this->financeiroModel->registrar($nome_cliente, $cpf_cliente, $valor_total, $data_venda);
    }

    public function listarVendas() {
        return $this->financeiroModel->listar();
    }
}
