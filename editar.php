<?php
include 'db.php';

// 1. Cargar los datos actuales del artículo
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado = mysqli_query($conn, "SELECT * FROM articulos WHERE id = $id");
    $articulo = mysqli_fetch_assoc($resultado);
}
