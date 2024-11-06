<?php
require_once 'MVC/Models/Clientemodels.php';

class ClienteController {
    private $clienteModel;

    public function __construct() {
        $this->clienteModel = new Cliente();
    }

    public function listarClientes() {
        return $this->clienteModel->listarTodos();
    }
}
