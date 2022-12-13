    <?php include ('config/conexion.php');?>
    <?php include ('templates/header.php');?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
<br><br>
   <a name="" id="" class="btn btn-success" href="formregistro.php" role="button">CREAR USUARIO</a>
   <br> <br>

  <div class="table-responsive-sm">
    <table class="table" style="font-size: 12px; color:black;">
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th style="background-color: green; color:white;">ID</th>
                                        <th style="background-color: green; color:white;">NOMBRE</th>
                                        <th style="background-color: green; color:white;">TELEFONO</th>
                                        <th style="background-color: green; color:white;">CORREO ELECTRONICO</th>
                                        <th style="background-color: green; color:white;">DIRECCION</th>
                                        <th style="background-color: green; color:white;">PAIS</th>
                                        <th style="background-color: green; color:white;">EDAD</th>
                                        <th style="background-color: green; color:white;">ACUDIENTE</th>
                                        <th style="background-color: green; color:white;">NOMBRE ESPECIALISTA</th>
                                        <th style="background-color: green; color:white;">MOTIVO</th>
                                        <th style="background-color: green; color:white;">OPERACION</th>
                                        <th style="background-color: green; color:white;"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                                $consulta='SELECT * FROM contactos'; 
                                                $resultado=mysqli_query($conexion, $consulta);

                                                while($fila=mysqli_fetch_array($resultado)){//Esto es un bucle
                                        ?>
                                            <tr>
                                                <th><?php  echo $fila['id']?></th>
                                                <th><?php  echo $fila['name']?></th>
                                                <th><?php  echo $fila['phone']?></th>
                                                <th><?php  echo $fila['email']?></th>
                                                <th><?php  echo $fila['address']?></th>
                                                <th><?php  echo $fila['country']?></th>
                                                <th><?php  echo $fila['edad']?></th>
                                                <th><?php  echo $fila['acudiente']?></th>
                                                <th><?php  echo $fila['especialista']?></th>
                                                <th><?php  echo $fila['motivo']?></th>
                                                <th><a href="formactualizar.php?id=<?php echo $fila['id'] ?>" class="btn btn-primary">Editar</a></th>
                                                <th><a href="eliminar.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
  </div>
  <center><h1 style="font-size:14px">Desarrollado por: ANA LILIA CARVAJAL MAYA -- ORLANDO ARIZA VESGA  --   MARIA ISABEL MERIÑO GARCIA</h1></center>

  <?php include("templates/footer.php");?>
