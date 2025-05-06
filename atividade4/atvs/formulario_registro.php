<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Registro de Participantes</title>
</head>
<body>
    <h1>Registro de Participantes</h1>
    
    <form action="registro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="evento">Evento de Interesse:</label>
        <select id="evento" name="evento" required>
            <option value="Evento A">Cruzeiro x Vasco </option>
            <option value="Evento B">Cruzeiro x Vila Nova</option>
            <option value="Evento C">Cruzeiro x Flamengo</option>
        </select><br><br>
        
        <input type="submit" value="Registrar Participante">
    </form>
</body>
</html>
