<?php

$nom_persona = "Clara"; 
$edat_persona = 30;    
$ciutat_persona = "Girona";
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taula del projecte</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>El meu projecte</h1>

    <table>
        <thead>
            <tr>
                <th>Etiqueta</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nom</td>
                <td><?php echo $nom_persona; ?>Tobias</td>
            </tr>
            <tr>
                <td>Edat</td>
                <td><?php echo $edat_persona; ?>21</td>
            </tr>
            <tr>
                <td>Poble</td>
                <td><?php echo $poble_persona; ?>Ginestar</td>
            </tr>
        </tbody>
    </table>

</body>
</html>