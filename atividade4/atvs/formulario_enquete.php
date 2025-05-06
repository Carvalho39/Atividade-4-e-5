<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Enquete </title>
</head>
<body>
    <h1>Qual a sua estação favorita?</h1>
    
    <form action="enquete.php" method="POST">
        <input type="radio" id="est1" name="est" value="Verão" required>
        <label for="est1">Verão</label><br>
        
        <input type="radio" id="est2" name="est" value="Star Wars" required>
        <label for="est2">Inverno</label><br>
        
        <input type="radio" id="est3" name="est" value="Outono" required>
        <label for="est3">Outono</label><br>
        
        <input type="radio" id="est4" name="est" value="Primavera" required>
        <label for="est4">Primavera</label><br><br>
        
        <input type="submit" value="Votar">
    </form>
</body>
</html>
