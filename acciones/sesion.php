<?php
    include ('conexion.php');

    session_start();

    if(!$_POST){
        header('location:../login.php');
        die();
    }

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave'";

    $datos = mysqli_query($con,$sql);

    $filas = mysqli_num_rows($datos);

    $dato = mysqli_fetch_assoc($datos);

    if($filas == 1){
        $_SESSION['usuario'] = $dato['usuario'];
        header('location:../index.php');
        die();
    }else{
        header('location:../login.php?msg-error_log');
        die();
    }
?>