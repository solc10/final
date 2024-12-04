<?php
include('conexion.php');
if (!isset($_GET['nombre']) AND !isset($_GET['descripcion']) AND !isset($_GET['precio']) AND !isset($_GET['imagen'])  AND !isset($_GET['categoria'])) {
    die("Complete todos los datos.");
}

if (!is_numeric($_GET['precio'])) {
    die("Ingrese un número.");
}

$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$imagen = $_GET['imagen'];
$categoria = $_GET['categoria'];

$id= $_GET['id_producto'];


if (strlen($_GET['id_producto'])>0) {
    $sql = "UPDATE `productos` SET `nombre`='$nombre',`imagen`='$imagen',`descripcion`='$descripcion',`precio`='$precio', `id_categoria`='$categoria' WHERE id_producto = $id
     ";}

$datos = mysqli_query($con, $sql);
if (!$datos) {
    die("Error al actualizar: " . mysqli_error($con));
 } else {
        if (strlen($_GET['id_producto'])>0) {
            header('location:index.php');
                
        }
    }
?>
