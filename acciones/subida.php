<?php
    include_once ('conexion.php');

    session_start();

    if(!isset($_SESSION['usuario'])){
        header('location:login.php');
        die();
    }

    $nombre = $_GET['nombre'];
    $categoria = $_GET['categoria'];
    $descripcion = $_GET['descripcion'];
    $precio = $_GET['precio'];
    $imagen = $_GET['imagen'];

    $sql = "INSERT INTO `productos`(`nombre`, `id_categoria`, `descripcion`, `precio`, `imagen`) VALUES ('$nombre',$categoria,'$descripcion',$precio,'$imagen')";

    $datos = mysqli_query($con,$sql);

   

    header('location:../index.php');
    die();
?>