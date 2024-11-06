<?php
require_once 'MVC/Models/Funcionariomodels.php';

class FuncionarioController {
    private $funcionarioModel;

    public function __construct() {
        $this->funcionarioModel = new Funcionario();
    }

    public function cadastrarFuncionario($nome_completo, $cargo, $email, $telefone) {
        $this->funcionarioModel->cadastrar($nome_completo, $cargo, $email, $telefone);
    }

    public function listarFuncionarios() {
        return $this->funcionarioModel->listartodos();
    }
}
