<?php
// Exercici 8: Canvi de valors
$valor1 = 10;
$valor2 = 20;

echo "<h2>Valors abans de l'intercanvi:</h2>";
echo "Valor 1: " . $valor1 . "<br>";
echo "Valor 2: " . $valor2 . "<br>";

$temp = $valor1;
$valor1 = $valor2;
$valor2 = $temp;

echo "<h2>Valors després de l'intercanvi:</h2>";
echo "Valor 1: " . $valor1 . "<br>";
echo "Valor 2: " . $valor2 . "<br>";
?>