<?php

$conn = new mysqli("db", "root", "root", "Biblioteca", "3306");

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

$sql = "INSERT INTO llibres (titol, autor, any) VALUES 
    ('Cien años de soledad', 'Gabriel García Márquez', 1967),
    ('1984', 'George Orwell', 1949),
    ('Don Quijote de la Mancha', 'Miguel de Cervantes', 1605),
    ('El Principito', 'Antoine de Saint-Exupéry', 1943),
    ('La sombra del viento', 'Carlos Ruiz Zafón', 2001)";

if ($conn->query($sql) === TRUE) {
    echo "Llibres inserits correctament.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>