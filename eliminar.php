<?php
include('acciones/conexion.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `productos` WHERE id_producto = $id";
    $datos = mysqli_query($con, $sql);

    if (!$datos) {
        die("Error al eliminar:".mysqli_error($con));
    }else {
        header("Location:tabla.php");
    }

}
