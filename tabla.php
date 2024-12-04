<?php
include('acciones/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body id="tabla" style="display:flex; flex-direction: column; align-items:center;justify-content:center; text-align:center">
    <h1>Tabla de productos</h1><br>
    <div id="table">
        <table border="1">
            <tr>
                <th>Nombre producto</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Categoria</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            <?php
            $sql = "SELECT p.*, c.nombre_categoria FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria";
            $datos = mysqli_query($con,$sql) ;
            foreach ($datos as $d) {
            ?>
            <tr>
                <td><?php echo $d['nombre'] ?></td>
                <td><?php echo $d['descripcion'] ?></td>
                <td><?php echo $d['nombre_categoria'] ?></td>
                <td><?php echo $d['precio'] ?></td>
                <td><a href="editar.php?id=<?php echo $d['id_producto'] ?>">Editar</a></td>
                <td><a href="eliminar.php?id=<?php echo $d['id_producto'] ?>">Eliminar</a></td>
            </tr>
            <?php
            }
            ?>
        </table>
        
    </div>
    <a id="vol" href="index.php">Volver atrás</a>
</body>
</html>