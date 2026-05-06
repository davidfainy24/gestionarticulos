<?php
include 'db.php';

// 1. Cargar los datos actuales del artículo
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado = mysqli_query($conn, "SELECT * FROM articulos WHERE id = $id");
    $articulo = mysqli_fetch_assoc($resultado);
}

// 2. Procesar la actualización al enviar el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $bodega = $_POST['bodega'];

    $sql = "UPDATE articulos SET 
            nombre='$nombre', 
            marca='$marca', 
            cantidad=$cantidad, 
            bodega='$bodega' 
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Artículo</title>
    <link rel="stylesheet" href="https://jsdelivr.net">
</head>
<body class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Editar Artículo</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <!-- Campo oculto para mantener el ID -->
                        <input type="hidden" name="id" value="<?php echo $articulo['id']; ?>">
                        
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?php echo $articulo['nombre']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label>Marca</label>
                            <input type="text" name="marca" class="form-control" value="<?php echo $articulo['marca']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Cantidad</label>
                            <input type="number" name="cantidad" class="form-control" value="<?php echo $articulo['cantidad']; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Bodega</label>
                            <input type="text" name="bodega" class="form-control" value="<?php echo $articulo['bodega']; ?>">
                        </div>
                        
                        <div class="d-flex justify-content-between">
                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-success">Actualizar Cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>