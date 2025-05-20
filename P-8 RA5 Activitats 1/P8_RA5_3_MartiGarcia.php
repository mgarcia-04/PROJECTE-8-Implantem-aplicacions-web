<?php
$numero = (int) readline ("Introdueix un número entre l'1 i el 10: ");

if ($numero > 10 or $numero < 1) {
    echo "Introdueix un número entre 1 i 10 siusplau: " . PHP_EOL;
} else {
    echo "Taula de multiplicar: " . PHP_EOL;

    for ($i = 1; $i <= 10; $i++) {
        $resultat = $numero * $i;
        echo $numero . " x " . $i . " = " . $resultat . PHP_EOL;
    }
}
?>