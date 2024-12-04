<?php
    include ('acciones/conexion.php');

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/068337eaff.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body id="bodyindex2">
<header>
        <nav>
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a href="index.php#service">PRODUCTOS</a></li>
                <li><a href="index.php#ubicacion">CONTACTO</a></li>
                <li><a href="encuesta.php">CALIFÍCANOS</a></li>
                
            </ul>
        </nav>
</header>
<section class="contenedor">
        <div id="invisible">
            <div id="titulo2">
                <h1>Iniciar sesion</h1>
        </div>
        <div id="formulario">
            <form action="acciones/sesion.php" method="POST" id= "formjs">
        
            <label for="usuario">Usuario</label><br>
            <input type="text" name="usuario" id="usuario"><br>
            <label for="clave">Contraseña</label><br>
            <input type="password" name="clave" id="clave"><br>    
            <?php
            if($_GET){ ?>
                <p class="warnings" id="warnings">Error al logear. Intente otra vez.</p>
            <?php }
            ?>
            <button type="submit" id="log">Ingresar</button>
            <p class="warnings" id="warnings"></p>
            </form>
        </div>
        </div>
</section>
</body>
</html>