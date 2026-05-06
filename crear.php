<?php 
include 'db.php';
if ($_POST) {
    $n = $_POST['nombre']; $m = $_POST['marca']; $c = $_POST['cantidad']; $b = $_POST['bodega'];
    mysqli_query($conn, "INSERT INTO articulos (nombre, marca, cantidad, bodega) VALUES ('$n', '$m', $c, '$b')");
    header("Location: index.php");
}
?>
<form method="POST" class="container mt-4">
    <input name="nombre" placeholder="Nombre" class="form-control mb-2" required>
    <input name="marca" placeholder="Marca" class="form-control mb-2">
    <input type="number" name="cantidad" placeholder="Cantidad" class="form-control mb-2">
    <input name="bodega" placeholder="Bodega" class="form-control mb-2">
    <button type="submit" class="btn btn-success">Guardar</button>
</form>