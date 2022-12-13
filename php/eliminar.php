<?php
include("config/conexion.php");

$id=$_GET['id'];//por el metodo get capturamos el id del contacto

$consulta="DELETE FROM contactos  WHERE id='$id'";
$resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        Header("Location: mostrar.php");
    }
?>