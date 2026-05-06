<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Se recomienda usar sentencias preparadas para mayor seguridad
    mysqli_query($conn, "DELETE FROM articulos WHERE id = $id");
}

header("Location: index.php");
exit();
?>