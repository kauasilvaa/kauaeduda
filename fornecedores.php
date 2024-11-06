<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Fornecedores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Cadastro de Fornecedores</h1>
    <form method="POST" action="fornecedores.php">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Telefone:</label>
        <input type="text" name="telefone" required>

        <label>Email:</label>
        <input type="text" name="email" required>

        <label>CNPJ:</label>
        <input type="text" name="cnpj" required>

        <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>
