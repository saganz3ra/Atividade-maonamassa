<?php
function ehPangrama($texto) {
    $texto = strtolower($texto);
    $texto = preg_replace('/[^a-z]/', '', $texto);

    $letras = array_unique(str_split($texto));

    return count($letras) === 26;
}

$texto1 = "The quick brown fox jumps over the lazy dog";
$texto2 = "Este texto não é um pangrama";

echo ehPangrama($texto1) ? "É um pangrama" : "Não é um pangrama";
echo "<br/>";
echo ehPangrama($texto2) ? "É um pangrama" : "Não é um pangrama";
?>
