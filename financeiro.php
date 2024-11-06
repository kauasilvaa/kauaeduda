<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório Financeiro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Relatório Financeiro</h1>
    <form method="POST" action="financeiro.php">
        <label>Nome do Cliente:</label>
        <input type="text" name="nome_cliente" required>

        <label>CPF do Cliente:</label>
        <input type="text" name="cpf_cliente" required>

        <label>Valor Total da Venda:</label>
        <input type="number" name="valor_total" required>

        <label>Data da Venda:</label>
        <input type="date" name="data_venda" required>

        <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>
