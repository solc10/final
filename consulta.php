<?php
    include('acciones/conexion.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM `productos` WHERE id_producto = '$id'" ;
    $result = mysqli_query($con,$sql);
    $dato = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/068337eaff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Detalles</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="index.php#service">PRODUCTOS</a></li>
                <li><a href="index.php#ubicacion">CONTACTO</a></li>
                <li><a href="encuesta.php">CALIFÍCANOS</a></li>
                <li><a href="login.php">INICIAR SESION</a></li>
            </ul>
        </nav>
    </header>
    <section class="contenedor">
        <div id="invisiblecompra">
            <div id="titulo2">
                <h1>Detalles del producto</h1>
            </div>
            <div class="cuadro c2" id="imagencompra" style = "background-image: url(imagenes/<?php echo $dato['imagen'] ?>)"></div>
            <div class="cuadro c3" id="detallecompra">
                <h1><?php echo $dato['nombre'] ?></h1>
                <h2><?php echo $dato['descripcion'] ?></h2>
                <h2>Precio: $<?php echo $dato['precio'] ?></h2>
                <h2>Categoría del producto: <?php echo $dato['id_categoria'] ?></h2>
            </div>
            <div id="enviar" class="e2">
                <input type="submit" value="Comprar">
            </div>
            
        </div>
    </section>
    <footer id="footer2">
        <div id="copy">
            <div>
                <h2>Seguinos en nuestras redes <a href="#" class="fa-brands fa-square-instagram"></a> <a href="#" class="fa-brands fa-square-facebook"></a></h2>
            </div>
            <div>
                <h2><a class="fa-solid fa-copyright"></a> 2023 CopyRight SolCraft</h2>
            </div>
        </div>
    </footer>
</body>
</html>