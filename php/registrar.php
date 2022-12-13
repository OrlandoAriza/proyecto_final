<?php
  session_start();

if($_REQUEST){

include("config/conexion.php");
$nombre=$_REQUEST['nombre'];
$telefono=$_REQUEST['telefono'];
$correo=$_REQUEST['correo'];
$direccion=$_REQUEST['direccion'];
$pais=$_REQUEST['pais'];
$edad=$_REQUEST['edad'];
$acudiente=$_REQUEST['acudiente'];
$especialista=$_REQUEST['especialista'];
$motivo=$_REQUEST['motivo'];


$insertar="INSERT INTO contactos  (name,phone,email,address,country,edad,acudiente,especialista,motivo) VALUES ('$nombre','$telefono','$correo','$direccion','$pais','$edad','$acudiente','$especialista','$motivo')";
$resultado=mysqli_query($conexion,$insertar);
    
  if($resultado){
    echo'<script type="text/javascript">
    alert("Registro Exitoso");
    window.location.href="/index.html";
    </script>';
  }

}else{
    header('location:formregistro.php');
}


?>