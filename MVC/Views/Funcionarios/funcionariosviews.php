<?php
require_once '../../Controllers/FuncionarioController.php';

$funcionarioController = new FuncionarioController();
$funcionarios = $funcionarioController->listarFuncionarios();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Funcionários</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h2>Funcionários</h2>
    <table border="1">
        <tr><th>ID</th><th>Nome Completo</th><th>Cargo</th><th>Email</th><th>Telefone</th></tr>
        <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <td><?= $funcionario['id'] ?></td>
                <td><?= htmlspecialchars($funcionario['nome_completo']) ?></td>
                <td><?= htmlspecialchars($funcionario['cargo']) ?></td>
                <td><?= htmlspecialchars($funcionario['email']) ?></td>
                <td><?= htmlspecialchars($funcionario['telefone']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="../index.php">Voltar</a>
</body>
</html>
