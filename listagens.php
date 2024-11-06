<?php
include 'db.php';

// Funções para buscar dados de cada tabela
function getClientes($pdo) {
    $query = "SELECT * FROM clientes";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFornecedores($pdo) {
    $query = "SELECT * FROM fornecedores";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getEstoque($pdo) {
    $query = "SELECT * FROM estoque";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFuncionarios($pdo) {
    $query = "SELECT * FROM funcionarios";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getFinanceiro($pdo) {
    $query = "SELECT * FROM financeiro";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProcessos($pdo) {
    $query = "SELECT * FROM processos";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagens</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .content { display: none; }
        .active { display: block; }
        .button { margin: 5px; padding: 10px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h1>Listagens</h1>
    <div class="menu">
        <button onclick="showContent('clientes')" class="button">Clientes</button>
        <button onclick="showContent('fornecedores')" class="button">Fornecedores</button>
        <button onclick="showContent('estoque')" class="button">Estoque</button>
        <button onclick="showContent('funcionarios')" class="button">Funcionários</button>
        <button onclick="showContent('financeiro')" class="button">Financeiro</button>
        <button onclick="showContent('processos')" class="button">Processos</button>
    </div>

    <div id="clientes" class="content">
        <h2>Clientes</h2>
        <table>
            <tr><th>ID</th><th>Nome</th><th>CPF</th><th>Data de Nascimento</th></tr>
            <?php foreach (getClientes($pdo) as $cliente): ?>
                <tr>
                    <td><?= $cliente['id'] ?></td>
                    <td><?= $cliente['nome'] ?></td>
                    <td><?= $cliente['cpf'] ?></td>
                    <td><?= $cliente['data_nascimento'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div id="fornecedores" class="content">
        <h2>Fornecedores</h2>
        <table>
            <tr><th>ID</th><th>Nome</th><th>Telefone</th><th>Email</th><th>CNPJ</th></tr>
            <?php foreach (getFornecedores($pdo) as $fornecedor): ?>
                <tr>
                    <td><?= $fornecedor['id'] ?></td>
                    <td><?= $fornecedor['nome'] ?></td>
                    <td><?= $fornecedor['telefone'] ?></td>
                    <td><?= $fornecedor['email'] ?></td>
                    <td><?= $fornecedor['cnpj'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div id="estoque" class="content">
        <h2>Estoque</h2>
        <table>
            <tr><th>ID</th><th>Nome do Produto</th><th>Categoria</th><th>Data de Entrada</th><th>Data de Saída</th></tr>
            <?php foreach (getEstoque($pdo) as $item): ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nome_produto'] ?></td>
                    <td><?= $item['categoria'] ?></td>
                    <td><?= $item['data_entrada'] ?></td>
                    <td><?= $item['data_saida'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div id="funcionarios" class="content">
        <h2>Funcionários</h2>
        <table>
            <tr><th>ID</th><th>Nome Completo</th><th>Cargo</th><th>Email</th><th>Telefone</th></tr>
            <?php foreach (getFuncionarios($pdo) as $funcionario): ?>
                <tr>
                    <td><?= $funcionario['id'] ?></td>
                    <td><?= $funcionario['nome_completo'] ?></td>
                    <td><?= $funcionario['cargo'] ?></td>
                    <td><?= $funcionario['email'] ?></td>
                    <td><?= $funcionario['telefone'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div id="financeiro" class="content">
        <h2>Financeiro</h2>
        <table>
            <tr><th>ID</th><th>Nome do Cliente</th><th>CPF do Cliente</th><th>Valor Total</th><th>Data da Venda</th></tr>
            <?php foreach (getFinanceiro($pdo) as $item): ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nome_cliente'] ?></td>
                    <td><?= $item['cpf_cliente'] ?></td>
                    <td><?= $item['valor_total'] ?></td>
                    <td><?= $item['data_venda'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div id="processos" class="content">
        <h2>Processos</h2>
        <table>
            <tr><th>ID</th><th>Data de Início</th><th>Quantidade</th><th>Status</th><th>Localização</th></tr>
            <?php foreach (getProcessos($pdo) as $processo): ?>
                <tr>
                    <td><?= $processo['id'] ?></td>
                    <td><?= $processo['data_inicio'] ?></td>
                    <td><?= $processo['quantidade'] ?></td>
                    <td><?= $processo['status'] ?></td>
                    <td><?= $processo['localizacao'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<script>
function showContent(sectionId) {
    document.querySelectorAll('.content').forEach(section => {
        section.classList.remove('active');
    });
    document.getElementById(sectionId).classList.add('active');
}
</script>

</body>
</html>
