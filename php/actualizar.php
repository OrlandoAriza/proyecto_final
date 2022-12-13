<?php
session_start();
include("config/conexion.php");

$id=$_REQUEST['id'];//el id no se actualiza
$nombre=$_REQUEST['nombre'];
$telefono=$_REQUEST['telefono'];
$correo=$_REQUEST['correo'];
$direccion=$_REQUEST['direccion'];
$pais=$_REQUEST['pais'];
$edad=$_REQUEST['edad'];
$acudiente=$_REQUEST['acudiente'];
$especialista=$_REQUEST['especialista'];
$motivo=$_REQUEST['motivo'];

$consulta="UPDATE contactos SET  name='$nombre',phone='$telefono', email='$correo',address='$direccion',country='$pais',edad='$edad',acudiente='$acudiente',especialista='$especialista',motivo='$motivo' WHERE id='$id'";
$resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        Header("Location: mostrar.php");
    }
?>