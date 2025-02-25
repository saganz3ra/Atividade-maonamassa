<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário PHP</title>
</head>
<body>
  <h2>Digite seu nome:</h2>
  <form method="POST" action="">
    <input type="text" name="nome" placeholder="Seu nome" required/>
    <button type="submit">Enviar</button>
  </form>


  <?php
  echo "Questão de número 1";
    //Verificar se o formulário foi enviado
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $nome = $_POST['nome']; // Ele pega o conteudo do input lá do HTML

      foreach(str_split($nome) as $char){
        $array[] = $char;
          if ($char == 'a'){
            $char = "*";
          }
          
          if ($char == 'e'){
            $char = "*";
          }
          
          if ($char == 'i'){
            $char = "*";
          }
          
          if ($char == 'o'){
            $char = "*";
          }
          
          if ($char == 'u'){
            $char = "*";
          }
          
          echo $char;
      }
    }
  ?>  

</body>
</html>
