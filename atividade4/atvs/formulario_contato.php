<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Contato </title>
</head>
<body>
    <h2>Contato</h2>
        <form action="contato.php" method="POST">
            <label>Nome:</label><br>
            <input type="text" name="nome" required><br><br>

            <label>Email:</label><br>
            <input type="email" name="email" required><br><br>

            <label>Assunto:</label><br>
            <input type="text" name="assunto" required><br><br>

            <label>Mensagem:</label><br>
            <textarea name="mensagem" rows="5" required></textarea><br><br>

            <button type="submit">Enviar</button>
        </form>
    
</body>
</html>