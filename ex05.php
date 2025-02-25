<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário em PHP</title>
</head>
<body>
  <form method="POST" action="">
    <label>Frase: </label>
    <input type="text" name="frase" placeholder="Digite a sua frase: " required/>
    <button type="submit"> Enviar </button>
  </form>
  
  <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $palavra = $_POST['frase'];
      $frase = explode(" ", $palavra);
      echo "A frase contém " . str_word_count($palavra) . " palavras <br>";

      foreach ($frase as $nome){
        echo "A frase separada é $nome <br>";
      }
    }
  ?>
</body>
</html>