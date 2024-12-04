<?php
include('acciones/conexion.php');
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
    <title>Calificanos</title>
</head>
<body>
<header>
        <nav>
            <ul>
            <?php
                if (!$_SESSION) {
               
                echo '<li><a href="index.php">INICIO</a></li>';
                echo '<li><a href="login.php">INICIAR SESIÓN</a></li>';
                
                }else{ 
                    echo '<li><a href="index.php">INICIO</a></li>';
                    echo '<li><a href="formulario.php">CARGAR </a></li>';
                    echo '<li><a href="tabla.php">TABLA</a></li>';
                    echo '<li><a href="cerrarSesion.php">CERRAR SESION</a></li>';
                }
                ?>
            </ul>
        </nav>
        <div id="logo">
            <img src="/imagenes/logo.png" alt="">
        </div>
    </header>
    <section class="contenedor" style="border:black;">
        <div id="invisible2">
            <div id="titulo3">
                <h1>Califica nuestros stickers <br> Tu opini&oacute;n nos ayuda a mejorar</h1>
            </div>
                <div class="cuadro2">
                    <form action="">
                        <label for="" class="pregunta">¿Qu&eacute; te parecieron los stickers?</label><br> <br>
                        <input type="radio" id="exc" name="encuesta1"><label for="exc">Excelente</label><br>
                        <input type="radio" id="bueno" name="encuesta1"><label for="bueno">Muy bueno</label><br>
                        <input type="radio" id="regular" name="encuesta1"><label for="regular">Regular</label><br>
                        <input type="radio" id="malo" name="encuesta1"><label for="malo">Malo</label><br>
                        <input type="radio" id="muymalo" name="encuesta1"><label for="muymalo">Muy malo</label> <br> <br>
                        <label for="" class="pregunta">¿Cómo te pareci&oacute; su calidad?</label><br> <br>
                        <input name="encuesta2" type="radio" id="muy"><label for="muy">Muy bueno</label><br>
                        <input name="encuesta2" type="radio" id="bueno2"><label for="bueno2">Bueno</label><br>
                        <input name="encuesta2" type="radio" id="regu"><label for="regu">Regular</label><br>
                        <input name="encuesta2" type="radio" id="malo2"><label for="malo2">Malo</label> <br> <br>
                </div>
                <div class="cuadro2 cuadroderecho">
                    <label for="" class="pregunta">¿Qu&eacute; producto compraste?</label><br> <br>
                        <input type="radio" id="basico" name="encuesta3"><label for="basico">Planchas</label><br>
                        <input type="radio" id="semi" name="encuesta3"><label for="semi">Packs</label><br>
                        <input type="radio" id="pleno" name="encuesta3"><label for="pleno">Sueltos</label><br>
                        <select name="" class="select s2">
                            <option value="">Califica la duración de los stickers</option>
                            <option value="">Muy buena</option>
                            <option value="">Buena</option>
                            <option value="">Regular</option>
                            <option value="">Puede mejorar</option>
                        </select>
                        <select name="" class="select s2">
                            <option value="">Califica tu experiencia comprando por la web</option>
                            <option value="">Muy buena, la web es muy intuitiva</option>
                            <option value="">Buena, me gusta la distribución de algunas cosas</option>
                            <option value="">Mala, me costó encontrar el producto que buscaba</option>
                        </select>
                </div>
                <div id="text">
                    <label for="" class="pregunta">¿Qu&eacute; es lo que m&aacute;s te gust&oacute; y qu&eacute; cambiar&iacute;as o mejorar&iacute;as?</label><br> <br>
                    <textarea name="" id="tarea" cols="80" rows="5"></textarea>
                </div>
                    <div id="enviar">
                        <input type="submit">
                    </div>
            </form>
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