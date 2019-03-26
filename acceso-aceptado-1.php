<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticación Multinivel</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <div class="contenedor">        
            <?php require 'seguridad-global-1.php'; ?>
            <div class="up">
                    <div class="saludo"><img src="img/logo.png" class="logo" alt=""> </div>
                    
                    <div class="cerrarSesion">
                            <div class="cuadro">
                    </div>
                    <a href="index.php">Cerrar Sesion</a></div>                   
                    </div>
            <div id="columnaIzq">
                <h4 class="puedesSeguir">Puedes bloquear</h4>
                <div id="queNosigo"><?php require 'activos.php'; ?></div>
    
            </div>
            <div id="columnaDer">
                <h4 class="estasSiguiendo">Los bloqueados</h4>
                <div id="queSisigo"><?php require 'desactivados.php'; ?></div> 
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
    </body>
</html>