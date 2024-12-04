<?php
include ('conexion.php');

if (!isset($_GET['nombre']) AND !isset($_GET['imagen']) AND !isset($_GET['precio']) AND !isset($_GET['descripcion']) AND !isset($_GET['id_categoria'])) {
    die("Complete todos los datos.");
}

if (!is_numeric($_GET['precio'])) {
    die("Ingrese un número.");
}
$id= $_GET['id_producto'];
$nombre = $_GET['nombre'];
$imagen = $_GET['imagen'];
$estreno = $_GET['precio'];
$descripcion = $_GET['descripcion'];
$categoria = $_GET['categoria'];


if (strlen($_GET['id'])>0) {
    $sql = "UPDATE `productos` SET `nombre`='$nombre',`descripcion`= '$descripcion',`precio`=$precio ,`imagen`='$imagen',`id_categoria`=$categoria WHERE id_producto = $id
     ";


}else{
    $sql = "INSERT INTO productos(
        `id_producto`,
        `nombre`,
        `descripcion`,
        `precio`,
        `imagen`,
        `id_categoria`

    ) VALUES (
        NULL,
        '$nombre',
        '$descripcion',
         '$precio',
        '$imagen',
        $categoria
    )";

}
    $datos = mysqli_query($con, $sql);
    if (!$datos) {
        die("Error al insertar: " . mysqli_error($con));
     } else {
            if (strlen($_GET['id_producto'])>0) {
                echo "Producto modificado correctamente.";
                    
            }else {
                echo "Peroducto ingresado correctamente.";
                }
               
            }
?>
