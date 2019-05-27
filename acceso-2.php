<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticación Multinivel</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script>
     
</script>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    style="margin-right: 3%; margin-top: 1%">
                    Cerrar sesión
                    </button> 
                    </div>
                    </div>                
              </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            ¿Estás seguro de cerrar la sesión?. Se te redireccionará a la página principal.
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                              <button type="button" class="btn btn-primary" onclick="location.href='index.php'">Cerrar sesíon</button>
                            </div>
                          </div>
                  </div>
            </div>
            <div id="columnaIzq">
                
                <input type="button" class="botonpub botonseguir" value="Puedes seguir" >
               
                <div id="queNosigo" ><?php require 'queNosigo.php'; ?></div>
            </div>
            <div id="columnaCen">
                
                <div class="publicacion">
                <input type="button" class="botonpub" id="botonpub1" value="Actualizar" >
                       <div class="publicacion"><textarea rows="4" cols="50" class="texto" name="texto1" id="texto1"></textarea></div>                  
                    <div id="respuesta"></div>
       	                <div class="publicacion"><input type="button" name="boton1" id="boton1" class="botonpub" value="Publicar" ></div>
                        <div class="contenidoPublicacion">
                            <?php require 'publicaciones.php'; ?>
                            
                        </div>
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
        <script src="js/likes.js" type="text/javascript"></script>
    </body>
</html>
