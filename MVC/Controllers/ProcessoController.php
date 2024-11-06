<?php
require_once '../Models/Processo.php';

class ProcessoController {
    private $processoModel;

    public function __construct() {
        $this->processoModel = new Processo();
    }

    public function cadastrarProcesso($data_inicio, $quantidade, $status, $localizacao) {
        $this->processoModel->cadastrar($data_inicio, $quantidade, $status, $localizacao);
    }

    public function listarProcessos() {
        return $this->processoModel->listar();
    }
}
