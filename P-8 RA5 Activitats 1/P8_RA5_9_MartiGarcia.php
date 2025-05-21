<?php

$notes = [7.5, 6.0, 4.0, 8.5, 5.0];

echo "Notes de l'alumne: " . implode(", ", $notes) . PHP_EOL;

$sumaNotes = array_sum($notes);

$nombreDeNotes = count($notes);

$mitjana = 0;

if ($nombreDeNotes > 0) {
    $mitjana = $sumaNotes / $nombreDeNotes;
}

echo "La nota mitjana de l'alumne és: " . round($mitjana, 2) . PHP_EOL;

if ($mitjana >= 5) {
    echo "L'alumne ha APROVAT! :)" . PHP_EOL;
} else {
    echo "L'alumne ha SUSPÈS. :(" . PHP_EOL;
}

?>