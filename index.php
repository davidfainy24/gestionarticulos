<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Artículos</title>
    <link rel="stylesheet" href="https://jsdelivr.net">
</head>
<body class="container mt-4">
    <h2>Inventario de Artículos</h2>
    <a href="crear.php" class="btn btn-primary mb-3">Nuevo Artículo</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th><th>Marca</th><th>Cantidad</th><th>Bodega</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $res = mysqli_query($conn, "SELECT * FROM articulos");
            while($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                    <td>{$row['nombre']}</td>
                    <td>{$row['marca']}</td>
                    <td>{$row['cantidad']}</td>
                    <td>{$row['bodega']}</td>
                    <td>
                        <a href='editar.php?id={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                        <a href='eliminar.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Borrar?\")'>Eliminar</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
asd