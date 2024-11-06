<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Acompanhamento de Processos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Acompanhamento de Processos</h1>
    <form method="POST" action="processos.php">
        <label>Data de Início:</label>
        <input type="date" name="data_inicio" required>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" required>

        <label>Status do Processo:</label>
        <input type="text" name="status" required>

        <label>Localização Atual:</label>
        <input type="text" name="localizacao" required>

        <input type="submit" value="Cadastrar">
    </form>
</div>
</body>
</html>
