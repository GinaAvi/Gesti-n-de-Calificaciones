<?php
$servername = "localhost";
$username = "id22199871_ginaav";
$password = "Lira407<";
$dbname = "id22199871_todo_list";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
