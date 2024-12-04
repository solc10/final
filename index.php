<?php
    include ('acciones/conexion.php');
    session_start();



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
    <title>Sol Craft</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php
                if (!$_SESSION) {
               
                echo '<li><a href="#inicio">INICIO</a></li>';
                echo '<li><a href="#service">PRODUCTOS</a></li>';
                echo '<li><a href="#ubicacion">CONTACTO</a></li>';
                echo '<li><a href="encuesta.php">CALIFÍCANOS</a></li>';
                echo '<li><a href="login.php">INICIAR SESIÓN</a></li>';
                
                }else{ 
                    echo '<li><a href="#inicio">INICIO</a></li>';
                    echo '<li><a href="#service">PRODUCTOS</a></li>';
                    echo '<li><a href="#ubicacion">CONTACTO</a></li>';
                    echo '<li><a href="encuesta.php">CALIFÍCANOS</a></li>';
                    echo '<li><a href="formulario.php">CARGAR </a></li>';
                    echo '<li><a href="tabla.php">TABLA</a></li>';
                    echo '<li><a href="cerrarSesion.php">CERRAR SESION</a></li>';
                }
                ?>
                
            </ul>
        </nav>
        <div id="logo">
            <form action="index.php#service">
                <input type="search" name="buscar">
                <button type="submit">Buscar</button>
            </form>
        </div>
    </header>
    <section id="inicio">
    
    </section>
    <?php
        if($_GET){
            $buscar = $_GET['buscar'];
            $sql = "SELECT p.*, c.nombre_categoria FROM productos p
            INNER JOIN categorias c ON p.id_categoria = c.id_categoria
            WHERE p.precio LIKE '%$buscar%' OR c.nombre_categoria LIKE '%$buscar%' OR p.nombre LIKE '%$buscar%'";
        }else{
            $sql = "SELECT p.*, c.nombre_categoria FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria";
        }
        try {
            $datos = mysqli_query ($con,$sql) ;
        } catch (mysqli_sql_exception $e) {
           echo "errorS";
        }
        
        foreach ($datos as $d){
    ?>
    <section id="service" class="reservas r1" style = "background-image: url(imagenes/<?php echo $d['imagen'] ?>)";>
        <div class="info">
            <h1><?php echo $d['nombre'] ?></h1><br>
            <h2><?php echo $d['descripcion'] ?></h2><br>
            <h3><?php echo $d['nombre_categoria'] ?></h3>
        </div>
        <div class="precio">
            <h1>$<?php echo $d['precio'] ?></h1>
            <a href="consulta.php?id=<?php echo $d['id_producto'] ?>">Ver mas</a>
        </div>
    </section>
        <?php } ?>
    <footer id="footer1">
        <div class="datos" id="ubicacion">
            <h1>Nuestra  Ubicaci&oacute;n</h1>
            <h1> Avenida Ramirez  de velazco Km 3.5</h1>
            <div id="maps"><a href="https://www.google.com.ar/maps/@-29.4087881,-66.8868943,3a,75y,176.36h,76.04t/data=!3m6!1e1!3m4!1scCR8zqwYeZwhD80o4U6WCQ!2e0!7i16384!8i8192?entry=ttu" target="_blank"><img src="imagenes/ubiacion.jpg" alt=""></a></div>
        </div>
        <div class="datos" id="contacto">
            <h1>Cont&aacute;ctanos</h1>
            <h1>Cel: 03804403721</h1>
            <h1>Email: candesara01@gmail.com</h1>
            <h1>Instragram: @SolCraft__</h1>
            <a href="#" class="fa-brands fa-square-whatsapp" id="whatsapp"></a>
        </div>
        <div class="datos" id="pago">
            <h1>Formas de <br> Pago</h1>
            <h1>-Mercado Pago <br>-Tarjeta de Debito <br>-Efectivo o transferencia</h1>
        </div>
        <div id="equipo">
            <h1>Equipo</h1>
        </div>
        <div id="integrantes">
            <div class="alumnos" id="diseñador">
                <div class="foto">
                    <img src="imagenes/demmy.jpeg" alt="">
                </div>
                <div class="texto">
                    <h1>Colab. creativa</h1>
                    <h2>Demmy Gonz&aacute;lez</h2>
                </div>
            </div>
            <div class="alumnos" id="desarrollador">
                <div class="foto">
                    <img src="imagenes/sol.jpeg" alt="">
                </div>
                <div class="texto">
                    <h1>Dueña y creadora</h1>
                    <h2>Candela Sarasúa</h2>
                </div>
            </div>
        </div>
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