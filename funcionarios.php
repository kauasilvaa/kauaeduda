<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Funcionários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Gestão de Funcionários</h1>
    <form method="POST" action="funcionarios.php">
        <label>Nome Completo:</label>
        <input type="text" name="nome_completo" required>

        <label>Cargo:</label>
        <input type="text" name="cargo" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Telefone de Contato:</label>
        <input type="text" name="telefone" required>

        <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>
