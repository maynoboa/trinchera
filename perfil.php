<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticación Multinivel</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <script>
     
</script>
    </head>
    <body>
        <div class="contenedor">        
            <?php require 'seguridad-global-2.php'; ?>
           
            <div class="up">
                    <div class="saludo"><a href="acceso-aceptado-2.php"> <img src="img/logo.png" class="logo" alt=""> </div>
                   
                    <div class="cerrarSesion">
                            <div class="cuadro"> <a href="perfil.php">
                            <img src="<?php echo $_SESSION["img"]?>"  class="fotoper"><?php echo $_SESSION["no_usu"]?>
                            </div>
                    <a href="index.php">Cerrar Sesion</a></div>                   
                    </div>
            <div id="columnaIzq">   
                 <h1>perfil</h1>
                 
                <!-- <h4 class="puedesSeguir">Puedes seguir</h4> -->
                <input type="button" class="botonpub botonseguir" value="Puedes seguir" >
               
                <div id="queNosigo" ><?php require 'queNosigo.php'; ?></div>
            </div>
            <div id="columnaCen">
            <div>
            <h4>cambiar foto de perfil</h4>
            <form enctype="multipart/form-data" method="post" name="form1" >
                    <input type="file" name="file1" required />
                    <input type="submit" value="Enviar" />
                </form>
                <div id="resultado"></div>
            </div>
                
                <div class="publicacion">
                    <input type="button" class="botonpub" id="botonpub1" value="Actualizar" >
                        <div class="publicacion">
                            <textarea rows="4" cols="50" class="texto" name="texto1" id="texto1">
                            </textarea>
                        </div>
                <div id="respuesta"></div>                   
       	                <div class="publicacion"><input type="button" name="boton1" id="boton1" class="botonpub" value="Publicar" ></div>
                        <div class="contenidoPublicacion"><?php require 'mispublicaciones.php'; ?></div>
                </div>
            </div>

            <div id="columnaDer">               
                <input type="button" class="botonpub botonseguir" value="Estas siguiendo" >
                <div id="queSisigo"><?php require 'queSisigo.php'; ?></div> 
            </div>
            <div class="down">
            <div class="saludo logo1"><img src="img/logo.png" class="logo logo2" alt=""> </div>
            </div>


            </div>        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <script type="text/javascript" src="motor.js"></script>
    </body>
</html>
