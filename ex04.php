<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificador de Números</title>
</head>
<body>
    <form method="POST" action="">
      <label>Digite um número:</label>
      <input type="number" name="numero" placeholder="Digite seu número" required />
      <button type="submit">Enviar</button>
    </form>
  
  <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $numero = $_POST["numero"];

      if ($numero == 0) {
        echo "<p>O número digitado é igual a 0!</p>";
      } else {
        echo "<p>O número digitado é " . (($numero > 0) ? "positivo" : "negativo") . ".</p>";
      }
    }
  ?>
</body>
</html>
