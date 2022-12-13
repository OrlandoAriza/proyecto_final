<?php
session_start();
include("templates/header.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <br> 
  <br>
   <br><div class="container">
            <form action="registrar.php" method="POST">
                <div class="row">
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <input type="text" class="form-control"  name="nombre"placeholder=" Nombre" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="telefono" placeholder=" Teléfono" required>
                        </div>  
                        <div class="form-group">
                            <input type="e-mail" class="form-control" name="correo" placeholder=" E-mail"required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="direccion" placeholder=" Dirección de Residencia"required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                            <input type="text" class="form-control" name="pais" placeholder=" Pais de Origen"required>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                        <input type="number" class="form-control" name="edad" placeholder=" Edad"required>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                            <input type="text" class="form-control" name="acudiente" placeholder=" Acudiente"required>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                            <input type="text" class="form-control" name="especialista" placeholder=" Nombre del especialista"required>
                        </div>

                            <label for ="description"> Motivo</label>
                            <textarea  type="text" class="form-control" name="motivo" placeholder=" Motivo"required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary submit"><i aria-hidden="true"></i>registrar</button>
                        <a type="button" href="mostrar.php" class="btn btn-danger">volver</a>
                    </div>        
                </div>
            </form>
        </div>
     
     <center><h1 style="font-size:14px">Desarrollado por: ANA LILIA CARVAJAL MAYA -- ORLANDO ARIZA VESGA  --   MARIA ISABEL MERIÑO GARCIA</h1></center>
<?php include("templates/footer.php"); ?>
  
