<?php
$conn = new mysqli("db", "root", "root", "tienda");
$result = $conn->query("SELECT * FROM videojuegos");
?>


<h1> Videojuegos</h1>
<form action="guardar.php" method="POST">
    Nombre: <input name="nombre"><br>
    Plataforma: <input name="plataforma"><br>
    Precio: <input name="precio"><br>
    <button type="submit">Guardar</button>
</form>
<hr>
<?php while($row = $result->fetch_assoc()): ?>
    <?= $row['nombre'] ?> - <?= $row['plataforma'] ?> - <?= $row['precio'] ?>
    <a href="borrar.php?id=<?= $row['id'] ?>">Borrar</a>
    <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
    <br>
<?php endwhile; ?>
