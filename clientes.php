<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Cadastro de Clientes</h1>
    <form method="POST" action="clientes.php">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>CPF:</label>
        <input type="text" name="cpf" required>

        <label>Data de Nascimento:</label>
        <input type="date" name="data_nascimento" required>

        <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>
