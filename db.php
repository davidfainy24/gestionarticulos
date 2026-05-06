<?php
$conn = mysqli_connect("localhost", "root", "", "gestion_inventario");
if (!$conn) { die("Error de conexión: " . mysqli_connect_error()); }
?>