<?php

$conn = new mysqli("db", "root", "root", "tienda");

$id = $_GET['id'];

$conn->query("DELETE FROM videojuegos WHERE id=$id");

header("Location: index.php");
