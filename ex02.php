<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário PHP</title>
</head>
<body>
  <form method="POST" action="">
    <h2>Este numero é primo?</h2>
    <label>Digite algum número para ver se ele é primo</label>
    <input type="nunber" name="numero" placeholder="Dígite seu número" required>
    <button type="submit">Enviar</button>
  </form>

  <?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $numero = $_POST['numero'];
      function numeroPrimo($numero) {
        if ($numero < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $numero = $_POST['numero']; 

        if (numeroPrimo($numero)) {
            echo "<h2>$numero é um número primo.</h2>";
        } else {
            echo "<h2>$numero não é um número primo.</h2>";
        }

    

    }
  ?>

</body>
</html>
