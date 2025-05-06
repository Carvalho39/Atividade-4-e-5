<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h2>Calculadora</h2>
  <form action="calcular.php" method="POST" id="formulario-calculadora">
    <label>Número 1:</label><br>
    <input type="number" name="num1" step="any" required><br><br>

    <label>Número 2:</label><br>
    <input type="number" name="num2" step="any" required><br><br>

    <label>Operação:</label><br>
    <select name="operacao" required>
      <option value="soma">Adição</option>
      <option value="subtracao">Subtração</option>
      <option value="multiplicacao">Multiplicação</option>
      <option value="divisao">Divisão</option>
    </select><br><br>
    <button type="submit">Calcular</button>
  </form>
  <div id="resultado" value="Calcular"></div>
  <script>
        $(document).ready(function() {
            $('#formulario-calculadora').submit(function(event) {
                event.preventDefault(); // Evita a submissão padrão do formulário
			

                var numero1 = $('#numero1').val();
                var numero2 = $('#numero2').val();
                var operacao = $('#operacao').val();

                // Requisição AJAX para calcular.php
                $.ajax({
                    type: 'POST',
                    url: 'calcular.php',
                    data: {
                        numero1: numero1,
                        numero2: numero2,
                        operacao: operacao
                    },
                    success: function(response) {
                        $('#resultado').html('Resultado: ' + response);
                    },
                    error: function(xhr, status, error) {
                        $('#resultado').html('Erro: ' + error);
                    }
                });
            });
        });
    </script>
</body>
</html>
