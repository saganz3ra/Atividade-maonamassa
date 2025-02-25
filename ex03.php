<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário PHP</title>
</head>
<body>
  <form method="POST" action="">
    <input type="text" name="string" placeholder="Digite uma palavra" required />
    <button type="submit"> Enviar </button>
  </form>

  <?php 
    echo 'Questão de numero 03 <br>';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $lista = $_POST["string"];
      $inverso = '';
      $tamanho = strlen($lista) - 1;

      for ($i = $tamanho; $i >= 0; $i--) {
        $inverso .= $lista[$i];
      }
    }

    echo "$inverso";
  ?>
</body>
</html>