<?php
echo "Introdueix la teva edat: ";
$edat = trim(fgets(STDIN));

if (is_numeric($edat)) {
    if ($edat >= 18) {
        echo "Ets major d'edat.\n";
    } else {
        echo "No ets major d'edat.\n";
    }
} else {
    echo "Entrada no vàlida.\n";
}
?>

