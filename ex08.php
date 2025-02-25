<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forumlário em PHP</title>
</head>
<body>
  <form method="POST" action="">
    <label>Vamos lá, dígite: </label>
    <input type="text" name="frase" placeholder="Dígite sua frase:" required />
    <input type="submit" placeholder="Enviar" />
  </form>
  
  <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
      $frase = $_POST['frase'];
      $junta = explode(" ",$frase);
      $remove = implode("", $junta);

      echo "A frase é com os espaçoes removidos é: $remove";
    }
  ?>

</body>
</html>