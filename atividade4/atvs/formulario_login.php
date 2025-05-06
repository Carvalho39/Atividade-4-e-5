<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login do Usuário</h1>
    <form action="login.php" method="POST">
        <label for="nome">Usuário:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="passoword" id="senha" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>