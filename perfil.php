<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticación Multinivel</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">

    </head>
    <body>
        <div class="contenedor">        
            <?php require 'seguridad-global-2.php'; ?>
            <div class="up">
                    <div class="saludo"><img src="img/logo.png" class="logo" alt=""> </div>
                    
                    <div class="cerrarSesion">
                    <a href="index.php">Cerrar Sesion</a>
                    <br>
                    <a href="acceso-aceptado-2.php">Volver</a> 
                    </div>                  
                    </div> 

            <div id= "parte-superior">
                <div class="Bienvenido">
                    <img src="<?php echo $_SESSION["img"]?>" class="img_perf" width=250 height=250 >
                    <p class="usu_img"><?php echo $_SESSION["no_usu"]?></p>
                    
                    
                    <div class="info"> 
                        <div id="queSisigo2">Quien sigues<br><br><?php require 'queSisigo.php'; ?></div> 
                    </div>
                    <div class= "info2">
                    APELLIDOS<br><br>
                    <?php echo $_SESSION["ape1_usu"]?>
                    <?php echo $_SESSION["ape2_usu"]?>
                    <br><br>
                    CORREO<br><br>
                    <?php echo $_SESSION["correo_usu"]?>
                    </div>
                    <div class="info_pais">
                    PAÍS<br><br>
                    <?php echo $_SESSION["pais_usu"]?>
                    </div>
                </div>
            </div>

            <div class="contenidoPublicacion"><?php require 'mispublicaciones.php'; ?>
        </div>

            
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
    </body>
</html>