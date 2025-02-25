<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Questionário PHP</title>
</head>
<body>
  <?php 
    for ($i = 0; $i <= 20; $i++){
      if (is_int(($i / 3))) {
        echo "O número é ?";
      } else {
        echo "O número é $i";
      }
      echo "<br/>";
    }
  ?>
</body>
</html>