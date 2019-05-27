<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticación Multinivel</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <style>
        body{
          font-family: 'Cabin', sans-serif;
        }
        </style>
    <body>
        <div class="contenedor">        
            <?php require 'seguridad-global-1.php'; ?>
            <div class="up">
                    <div class="saludo"><img src="img/logo.png" class="logo" alt=""> </div>
                    
                    <div class="cerrarSesion">
                            <div class="cuadro">
                    </div>
                    <a href="index.php" >Cerrar Sesión</a>                
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