<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>

<?php
function fibonacci($n) {
    $fibonacci = [1, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$termos = 10;
$fibonacci_sequence = fibonacci($termos);

echo "Os primeiros $termos termos da sequência de Fibonacci são: " . implode(", ", $fibonacci_sequence);
?>

</html>