<?php

$host = 'db'; 
$user = 'root';
$password = 'root';
$database = 'Biblioteca';

$conn = null; 
$output = ''; 

try {
    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        throw new Exception("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");

    $sql = "SELECT id, titol, autor, any_publicacio FROM llibres ORDER BY titol ASC";
    $result = $conn->query($sql);

    if ($result === false) {
        throw new Exception("Error en la consulta SQL: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $output .= '<table>';
        $output .= '<thead>';
        $output .= '<tr><th>ID</th><th>Títol</th><th>Autor</th><th>Any Publicació</th></tr>';
        $output .= '</thead>';
        $output .= '<tbody>';
        while ($row = $result->fetch_assoc()) {
            $output .= '<tr>';
            $output .= '<td>' . htmlspecialchars($row['id']) . '</td>';
            $output .= '<td>' . htmlspecialchars($row['titol']) . '</td>';
            $output .= '<td>' . htmlspecialchars($row['autor']) . '</td>';
            $output .= '<td>' . htmlspecialchars($row['any_publicacio']) . '</td>';
            $output .= '</tr>';
        }
        $output .= '</tbody>';
        $output .= '</table>';
    } else {
        $output .= '<p class="no-results">No hi ha llibres a la base de dades.</p>';
    }

} catch (Exception $e) {
    $output = '<p class="error-message">';
    $output .= '<strong>Error al cargar la tabla:</strong> ' . htmlspecialchars($e->getMessage());
    $output .= '<br>Verifica la configuración de la base de datos o si el servidor MySQL está activo.';
    $output .= '</p>';
} finally {
    if (isset($conn) && $conn) {
        $conn->close();
    }
}

echo $output;
?>