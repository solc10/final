<?php
    include('acciones/conexion.php');

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('location:login.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/068337eaff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>New producto</title>
</head>
<body>
<section class="contenedor cont2">
<div id="invisible">
            <div id="formulario2">
                <h1>Ingrese los nuevos datos para <br> un nuevo producto</h1>
            </div>
<?php
    $sql = "SELECT c.* FROM categorias c";
    $datos = mysqli_query($con,$sql);
?>
    <form action="acciones/subida.php" id="form_subida">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" name="nombre"><br>
            <textarea name="descripcion" id="descripcion" cols="10" rows="5" placeholder="Agregue una descripción para el producto"></textarea><br>
            <label for="precio">Precio del producto</label>
            <input type="number" name="precio"><br>
            <label for="imagen">Seleccionar imagen de muestra</label>
            <select name="imagen" id="" class="select"><br>
                <option value="">-----</option>
                <option value="12.png">Suelto Papel</option>
                <option value="5.png">Suelto Vinilo</option>
                <option value="6.png">Suelto Premium</option>
                <option value="7.png">Marcapáginas</option>
                <option value="8.png">Planchas</option>
                <option value="10.png">Pack por 5</option>
            </select>
            <label for="categoria">Categoría del producto</label>
            <select name="categoria" class="select">
            <option value="">-----</option>
            <?php foreach ($datos as $d){ ?>
                <option value="<?php echo $d['id_categoria'] ?>"><?php echo $d['nombre_categoria'] ?></option>
            <?php
                }
            ?>
            </select><br>
        <button type="submit" id="log">Cargar datos</button>
        <a id="back" href="tabla.php">Ir a la tabla</a>
        <a id="back" href="index.php">Volver a inicio</a>
    </form>
</section>

</body>
</html>