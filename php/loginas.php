<?php
    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (isset($_SESSION['cliente'])){
        $cliente = $_SESSION['cliente'];
    }else{
 header('Location: mostrar.php');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Panel del cliente</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

    <body>
        <div id="sesion_cliente">
            <?php 
            //Si existe la sesión "cliente"...
            if(isset($_SESSION['cliente'])){
                echo "<p class='negrita'>Bienvenido ".$cliente."&nbsp;&nbsp;";
                echo "<a href='reservar.php?salir=1'>Salir</a></p>";
                //Si existe y hemos pulsado el link "Salir"...
                if(isset($_REQUEST["salir"])){
                    //Borramos o destruimos la sesión "cliente".
                    unset($_SESSION["cliente"]);
                }
            }
            ?>
        </div>

        <div id="menu_cliente">
            <ul id="menu_horizontal">
                <li class="nueva" id="nueva"><a class="active" href="menu_cliente.php?nueva=1#nueva">NUEVA OPINIÓN</a></li>
                <li class="ver" id="ver"><a href="menu_cliente.php?ver=1#ver">VER OPINIONES</a></li>
                <li class="eliminar" id="eliminar"><a href="menu_cliente.php?eliminar=1#eliminar">ELIMINAR OPINIÓN</a></li>
                <li class="datos_cliente" id="datos_cliente"><a href="menu_cliente.php?datos_cliente=1#datos_cliente">DATOS PERSONALES</a></li>
            </ul>

            <div id="cuerpo_body">
                <!-- Aqui va todo el código del cuerpo... -->
            </div>
        </div>
    </body>
</html>