<?php

$nom = "Marti";
$data_actual = date("d/m/Y");

$missatge_benvinguda = "Bones!";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La meva Targeta Personal</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px; /* Bordes más suaves */
            padding: 20px; /* Reducido un poco para ajustarse mejor */
            box-shadow: 2px 2px 8px rgba(0,0,0,0.15); /* Sombra más pronunciada */
            max-width: 600px; /* Suficientemente ancho para contenido horizontal */
            display: flex; /* Habilitar Flexbox para disposición horizontal */
            align-items: center; /* Alinear verticalmente los ítems en el centro */
            gap: 25px; /* Espacio entre la imagen y el texto */
        }
        .card img {
            width: 120px;
            height: 120px;
            border-radius: 15%;
            object-fit: cover;
            flex-shrink: 0;
            border: 3px solid #007bff;
        }
        .card-content {
            text-align: left;
            flex-grow: 1;
        }
        h2 {
            margin: 0 0 5px 0;
            color: #333;
        }
        p {
            color: #666;
            font-size: 0.9em;
            margin: 5px 0;
        }
        .date {
            font-size: 0.8em;
            color: #999;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="https://i.ytimg.com/vi/Dyf65sInB00/hqdefault.jpg?sqp=-oaymwEmCOADEOgC8quKqQMa8AEB-AG-AoAC8AGKAgwIABABGE8gXChlMA8=&rs=AOn4CLBGMToibjStlu3RcPO8i-mtByqF0g" alt="Foto de perfil">
        <div class="card-content"> <h2><?php echo $nom; ?></h2>
            <p><?php echo $missatge_benvinguda; ?></p>
        </div>
    </div>
</body>
</html>