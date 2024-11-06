<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Controle de Estoque</h1>
    <form method="POST" action="estoque.php">
        <label>Nome do Produto:</label>
        <input type="text" name="produto" required>

        <label>Categoria:</label>
        <input type="text" name="categoria" required>

        <label>Data de Entrada:</label>
        <input type="date" name="data_entrada" required>

        <label>Data de Saída:</label>
        <input type="date" name="data_saida">

        <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>
