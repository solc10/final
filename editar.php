<?php
include('conexion.php');
if ($_GET) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM `productos` WHERE id_producto = '$id' ";

	try { $datos = mysqli_query($con, $sql) ;
									
	} catch ( mysqli_sql_exception $e) {
		echo 'Error al traer los datos.' . $e ->getMessage();
	}
	$d = mysqli_fetch_assoc($datos) ;
}
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
    <title>Editar producto</title>
</head>
<body>
<section class="contenedor cont2">
<div id="invisible">
            <div id="formulario2">
                <h1>Editar Producto</h1>
            </div>
    
    <?php
    $sql = "SELECT c.* FROM categorias c";
    $datos = mysqli_query($con,$sql);
    ?>
    <form action="actualizar.php" method="get" id="form_subida">
    <input type="hidden" name="id_producto" value="<?php echo ($_GET== true ? $d['id_producto'] : ''); ?>">
        <label for="">Ingrese el nuevo nombre del producto</label>
        <input value="<?php echo ($_GET== true ? $d['nombre'] : ''); ?>" required="required" type="text" name="nombre"><br>
        <label for="">Ingrese la nueva descripcion del producto</label>
        <textarea name="descripcion" placeholder="Descripcion"><?php echo ($_GET== true ? $d['descripcion'] : ''); ?></textarea><br>
        <label for="">Ingrese el nuevo precio del producto</label>
        <input value="<?php echo ($_GET== true ? $d['precio'] : ''); ?>" required="required" type="number" name="precio"><br>
        <label for="imagen">Seleccione una imagen</label>
        <select name="imagen" id="" class="select" value="<?php echo ($_GET== true ? $d['imagen'] : ''); ?>" required="required"><br>
                <option value="">-----</option>
                <option value="12.png">Suelto Papel</option>
                <option value="5.png">Suelto Vinilo</option>
                <option value="6.png">Suelto Premium</option>
                <option value="11.png">Marcapáginas</option>
                <option value="8.png">Planchas</option>
                <option value="10.png">Pack por 5</option>
            </select><br>
            <label for="categoria">Categoría del producto</label>
            <select name="categoria" class="select" value="<?php echo ($_GET== true ? $d['nombre_categoria'] : ''); ?>" required="required">
            <option value="">-----</option>
            <?php foreach ($datos as $d){ ?>
                <option value="<?php echo $d['id_categoria'] ?>"><?php echo $d['nombre_categoria'] ?></option>
            <?php
                }
            ?>
            </select><br>
            <button type="submit" id="log">Actualizar</button>
            <a id="back" href="tabla.php">Ir a la tabla</a>
            <a id="back" href="index.php">Volver a inicio</a>

    </form>
    </select><br>
</body>
</html>