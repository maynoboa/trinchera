<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticación Multinivel</title>
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">


    </head>
    <body>
        <div class="contenedor">        
            <?php require 'seguridad-global-2.php'; ?>
            <div class="up">
              <div class="encabezado-red">
                    <div class="saludo"><a href="acceso-2.php"><img src="img/logo.png" class="logo" alt=""></div>
                    <div class="cerrarSesion">
                            <div class="cuadro"> <a href="perfil.php">
                            <img src="<?php echo $_SESSION["img"]?>"  class="fotoper"><?php echo $_SESSION["no_usu"]?>
                            </div>
                    <a href="index.php" class="ocultar_cerrar">Cerrar Sesión</a>
                    </div>
                    </div>                
              </div>
            </div>
            <div class="informacion">
                <div class="infoleft">
                    <img src="<?php echo $_SESSION["img"]?>" class="img_perf resultadoo" width=250 height=250 >
                    <p class="usu_img"><?php echo $_SESSION["no_usu"]?></p>
                    <a class="image-wrapper image-sube" href="#">
          <form id="profilePictureForm" action="#">
            <input class="hidden-input" id="changePicture" type="file"/>
            <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
          </form>
        </a>
                </div>
                <div class="inforight">
                    <div class="infoname">
                        <div class="separar">
                            <?php echo $_SESSION["no_usu"] ?>
                        </div>
                        <div class="separar separarxflex">
                            <?php echo $_SESSION["ape1_usu"]?>
                        </div>
                        <a href="index.php" class="closesesion">Cerrar Sesión</a>
                    </div>
                    <div class="border">
                        <p class="separar">
                        4
                        <?php require 'contarfollower.php'; ?>
                    </div>
                    <div>
                        <div class="separar">
                            <?php echo $_SESSION["pais_usu"]?>  
                        </div>
                    </div>
                    <form enctype="multipart/form-data" method="post"  name="form1">
                     
                        <input  type="file" name="file1" required />
                        <input type="submit" value="Enviar" />
                    </form>
                </div>
            </div>

            <div class="contenidoPublicacion">
                <?php require 'mispublicaciones.php'; ?>
            </div>
        </div>
            
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <script src="js/likes.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/motor.js"></script>
    </body>
</html>