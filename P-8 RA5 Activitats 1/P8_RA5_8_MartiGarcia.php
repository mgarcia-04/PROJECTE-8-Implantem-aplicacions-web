<?php

function factorial(int $n)
{
    if ($n < 0) {
        return "Error: El factorial només es defineix per a números enters no negatius.";
    }

    if ($n == 0) {
        return 1;
    }

    $resultat = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultat *= $i;
    }

    return $resultat;
}

echo "Factorial de 0: " . factorial(0) . PHP_EOL;
echo "Factorial de 1: " . factorial(1) . PHP_EOL;
?>