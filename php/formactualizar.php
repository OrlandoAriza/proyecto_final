<?php 
    include("config/conexion.php");

$id=$_GET['id'];//por el metodo get capturamos el id del contacto

$consulta="SELECT * FROM contactos WHERE id='$id'";
$resultado=mysqli_query($conexion, $consulta);

$fila=mysqli_fetch_array($resultado);
?>

<?php
include("templates/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
                  <div class="row align-items-start">
                     <div class="col"></div>
                     <div class="col">
                         <br><br> <br>
                        <h2  align="center">Actualizar datos</h2>
                       <br>

                        <form action="actualizar.php" method="POST">
                        <center><h1 style="font-size:14px">Nombre</h1></center>
                                <input type="hidden" name="id" value="<?php echo $fila['id']  ?>">
                                
                                <div class="mb-3">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $fila['name']  ?>">
                                </div>                                

                                <div class="mb-3">
                                <center><h1 style="font-size:14px">Nùmero de telèfono</h1></center>
                                <input type="text" class="form-control" name="telefono" placeholder="Teléfono" value="<?php echo $fila['phone']  ?>">
                                </div>

                                <div class="mb-3">
                                <center><h1 style="font-size:14px">Correo Electrònico</h1></center>
                                <input type="e-mail" class="form-control" name="correo" placeholder="Correo" value="<?php echo $fila['email']  ?>">
                                </div>  

                                 <div class="mb-3">
                                 <center><h1 style="font-size:14px">Direcciòn</h1></center>
                                <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?php echo $fila['address']  ?>">
                                </div>  

                                <div class="mb-3">
                                <center><h1 style="font-size:14px">Paìs</h1></center>
                                <input type="text" class="form-control" name="pais" placeholder="País" value="<?php echo $fila['country']  ?>">
                                 </div>  

                                 <div class="mb-3">
                                 <center><h1 style="font-size:14px">Edad</h1></center>
                                <input type="text" class="form-control" name="edad" placeholder="Edad" value="<?php echo $fila['edad']  ?>">
                                 </div>  

                                 <div class="mb-3">
                                 <center><h1 style="font-size:14px">Acudiente</h1></center>
                                <input type="text" class="form-control" name="acudiente" placeholder="Acudiente" value="<?php echo $fila['acudiente']  ?>">
                                 </div>  

                                 <div class="mb-3">
                                 <center><h1 style="font-size:14px">Especilista</h1></center>
                                <input type="text" class="form-control" name="especialista" placeholder="Nombre del especialista" value="<?php echo $fila['especialista']  ?>">
                                 </div>  

                                 <div class="mb-3">
                                 <center><h1 style="font-size:14px">Motivo de la Consulta</h1></center>
                                <input type="text" class="form-control" name="motivo" placeholder="Motivo" value="<?php echo $fila['motivo']  ?>">
                                 </div>  

                                <div class="mb-3" align="center">
                                  <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
                                  <a type="button" href="mostrar.php" class="btn btn-danger">volver</a>
                                </div>
                                
                         </form>

                </div>
                <div class="col"></div>
                </div>
                <center><h1 style="font-size:14px">Desarrollado por: ANA LILIA CARVAJAL MAYA -- ORLANDO ARIZA VESGA  --   MARIA ISABEL MERIÑO GARCIA</h1></center>
<?php include("templates/footer.php"); ?>

