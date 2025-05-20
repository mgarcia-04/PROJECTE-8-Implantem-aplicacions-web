<?php
$numero = readline("Introdueix un número:  ");

if (!is_numeric($numero)) {
    echo "Aixo no és un numero vàlid." . PHP_EOL;
} else {
    if ($numero%2 == 0) {
        echo "El número " . $numero . " és parell." . PHP_EOL;
    } else {
        echo "El número " . $numero . " és senar." . PHP_EOL;
    }
}
?>