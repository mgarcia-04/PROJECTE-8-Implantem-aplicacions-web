<?php

$host = 'db';
$user = 'root';
$password = 'root';
$database = 'Biblioteca';

$status = 'error';
$message = 'Ha ocurrido un error inesperado.';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: formulario_afegir_llibre.html?status=error&message=' . urlencode("Accés no permès sense enviar el formulari."));
    exit();
}

$titol = trim($_POST['titol'] ?? '');
$autor = trim($_POST['autor'] ?? '');
$any_publicacio = $_POST['any_publicacio'] ?? null;
$isbn = trim($_POST['isbn'] ?? null);

if (empty($titol)) {
    $message = "El camp 'Títol' no pot estar buit.";
    header('Location: formulario_afegir_llibre.html?status=error&message=' . urlencode($message));
    exit();
} elseif (empty($autor)) {
    $message = "El camp 'Autor' no pot estar buit.";
    header('Location: formulario_afegir_llibre.html?status=error&message=' . urlencode($message));
    exit();
}

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    $message = "Error de connexió a la base de dades: " . $conn->connect_error;
    header('Location: formulario_afegir_llibre.html?status=error&message=' . urlencode($message));
    exit();
}

$conn->set_charset("utf8");

$sql = "INSERT INTO llibres (titol, autor, any_publicacio, isbn) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    $message = "Error al preparar la consulta SQL: " . $conn->error;
    $conn->close();
    header('Location: formulario_afegir_llibre.html?status=error&message=' . urlencode($message));
    exit();
}

$stmt->bind_param("ssis", $titol, $autor, $any_publicacio, $isbn);

if ($stmt->execute()) {
    $status = 'success';
    $message = "Llibre afegit correctament!";
} else {
    $message = "Error en afegir el llibre: " . $stmt->error;
}

$stmt->close();
$conn->close();

header('Location: formulario_afegir_llibre.html?status=' . $status . '&message=' . urlencode($message));
exit();
?>