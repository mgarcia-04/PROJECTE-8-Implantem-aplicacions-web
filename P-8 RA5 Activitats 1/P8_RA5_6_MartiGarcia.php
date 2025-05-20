<?php
$alumnes = [
    "Tobias" => 20, 
    "Sebastian" => 15, 
    "Andreu" => 13, 
    "Bernat" => 24, 
    "Josele" => 18
];

echo "Alumnes majors d'edat: ". PHP_EOL;

foreach ($alumnes as $nom => $edat) {
    if ($edat >= 18) {
        echo $nom ." té ". $edat ." anys.". PHP_EOL;
    }
}

?>