<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina PHP + HTML</title>
</head>
<body>
    <h1>Benvingut a la meva pàgina PHP!</h1>
    <p>
        <?php
        $nom_usuari = "Tobias";
        echo "Hola, " . $nom_usuari . "! Aquesta és una demostració de PHP incrustat en HTML.";
        ?>
    </p>
    <p>Esperem que gaudeixis aprenent PHP.</p>
</body>
</html>