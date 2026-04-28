<?php

$conn = new mysqli("db", "root", "root", "tienda");

$id = $_GET['id'];

if($_POST){

    $nombre = $_POST['nombre'];
    $plataforma = $_POST['plataforma'];
    $precio = $_POST['precio'];


    $conn->query("UPDATE videojuegos 
    SET nombre='$nombre', plataforma='$plataforma', precio='$precio'
    WHERE id=$id");

    header("Location: index.php");

}


$result = $conn->query("SELECT * FROM videojuegos WHERE id=$id");
$row = $result->fetch_assoc();

?>

<form method="POST">
    Nombre: <input name="nombre" value="<?= $row['nombre'] ?>"><br>
    Plataforma: <input name="plataforma" value="<?= $row['plataforma'] ?>"><br>
    Precio: <input name="precio" value="<?= $row['precio'] ?>"><br>
    <button>Actualizar</button>

</form>
