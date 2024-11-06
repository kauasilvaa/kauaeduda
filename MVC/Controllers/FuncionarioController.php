<?php
require_once 'MVC/Models/FuncionarioModels.php';

class FuncionarioController {
    private $funcionarioModel;

    public function __construct() {
        $this->funcionarioModel = new Funcionario();
    }

    public function criarFuncionario($nome_completo, $cargo, $email, $telefone) {
        if (empty($nome_completo) || empty($cargo) || empty($email) || empty($telefone)) {
            return "Todos os campos devem ser preenchidos!";
        }
        
        $resultado = $this->funcionarioModel->criarFuncionario($nome_completo, $cargo, $email, $telefone);
        
        return $resultado ? "Funcionário cadastrado com sucesso!" : "Erro ao cadastrar funcionário.";
    }

    public function listarFuncionarios() {
        return $this->funcionarioModel->listarFuncionarios();
    }

    public function atualizarFuncionario($id, $nome_completo, $cargo, $email, $telefone) {
        if (empty($id) || empty($nome_completo) || empty($cargo) || empty($email) || empty($telefone)) {
            return "Todos os campos devem ser preenchidos!";
        }
        
        $resultado = $this->funcionarioModel->atualizarFuncionario($id, $nome_completo, $cargo, $email, $telefone);
        return $resultado ? "Funcionário atualizado com sucesso!" : "Erro ao atualizar funcionário.";
    }

    public function deletarFuncionario($id) {
        if (empty($id)) {
            return "ID do funcionário é necessário!";
        }
        
        $resultado = $this->funcionarioModel->deletarFuncionario($id);
        return $resultado ? "Funcionário deletado com sucesso!" : "Erro ao deletar funcionário.";
    }
}
?>
