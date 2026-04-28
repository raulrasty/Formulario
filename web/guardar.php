<?php
$conn = new mysqli("db", "root", "root", "tienda");
$nombre = $_POST['nombre'];
$plataforma = $_POST['plataforma'];
$precio = $_POST['precio'];

$conn->query("INSERT INTO videojuegos (nombre, plataforma, precio)
VALUES ('$nombre','$plataforma','$precio')");

header("Location: index.php");
