<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formuário PHP</title>
</head>
<body>
  <form method="POST" action="">
    <label>Verificador se a palavra é um palidromo</label>
    <input type="text" name="palavra" placeholder="Dígite sua palavra" required />
    <br/>
    <button type="submit">Enviar</button>
    <br/>
  </form>

  <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $palavra = $_POST['palavra'];
      $arvalap = strrev($palavra);

      if ($palavra == $arvalap) {
        echo "A palavra '$palavra' é um palidromo!";
      } else {
        echo "A palavra '$palavra' não é um palidromo!"; 
           }
    }
  ?>

  
</body>
</html>