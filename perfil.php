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
            <div class="up2">
                    <div class="saludo2"><a href="acceso-aceptado-2.php"> 
                        <img src="img/logo.png" class="logo2" alt=""> 
                    </div>                    
                    <div class="cerrarSesion2">
                        <div class="cuadro2"> <a href="perfil.php">
                            <div class="fotoper2"><img src="<?php echo $_SESSION["img"]?>" class="fotoper3" ></div>
                            <div><?php echo $_SESSION["no_usu"] ?></div>
                        </div>   
                        <div>
                            <a href="index.php">Cerrar Sesion</a>
                        </div>                                         
                    </div>                  
            </div> 
            <div class="informacion">
                <div class="infoleft">
                    <img src="<?php echo $_SESSION["img"]?>" class="img_perf" width=250 height=250 >
                    <p class="usu_img"><?php echo $_SESSION["no_usu"]?></p>
                </div>
                <div class="inforight">
                    <div>
                        <div class="separar">
                            <?php echo $_SESSION["ape1_usu"] ?>
                        </div>
                        <div class="separar">
                            <?php echo $_SESSION["ape2_usu"]?>
                        </div>
                    </div>
                    <div class="border">
                        <p class="separar">4</p>
                    </div>
                    <div>
                        <div class="separar">
                            <?php echo $_SESSION["correo_usu"]?>
                        </div>
                        <div class="separar">
                            <?php echo $_SESSION["pais_usu"]?>  
                        </div>
                    </div>
                 <input type="file" class="form-control" id="img" name="img">
                </div>
            </div>
            <!-- <div id= "parte-superior">
                <div class="Bienvenido">
                    <img src="<php echo $_SESSION["img"]?>" class="img_perf" width=250 height=250 >
                    <p class="usu_img"><php echo $_SESSION["no_usu"]?></p>
                    
                    
                    <div class="info"> 
                        <div id="queSisigo2">Quien sigues<br><br><php require 'queSisigo.php'; ?></div> 
                    </div>
                    <div class= "info2">
                    APELLIDOS<br><br>
                    <php echo $_SESSION["ape1_usu"]>
                    <php echo $_SESSION["ape2_usu"]>
                    <br><br>
                    CORREO<br><br>
                    <php echo $_SESSION["correo_usu"]>
                    </div>
                    <div class="info_pais">
                    PAÍS<br><br>
                    <php echo $_SESSION["pais_usu"]>
                    </div>
                </div>
            </div> -->

            <div class="contenidoPublicacion">
                <?php require 'mispublicaciones.php'; ?>
            </div>
        </div>
            
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
    </body>
</html>