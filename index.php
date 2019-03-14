<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticación Multinivel</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">     
        <link href="signin.css" rel="stylesheet">
    </head>
    <body>
        <?php
        /* INICIO DE SESIÓN, AUNQUE YA ESTÉ INICIADA, PARA
         * DESTRUIRLA AL CERRAR LA SESIÓN DESDE acceso-aceptado-n.php
         */
        if (!isset($_SESSION)) {
            session_start();
        }
        /* DESTRUCCIÓN DE LA SESIÓN */
        session_destroy();
        ?>
       
           <div >
            <form id="f1" class="formu form-signin" >
                <div id="resultado" style="margin: 29px;">&nbsp;</div>
                <div><input type="text" name="usuario" class="form-control pad" id="usuario" placeholder="Usuario"></div>
                <div><input type="password" name="clave"  class="form-control pad" id="clave" placeholder="Clave"></div>
                <div><input type="button" value="Iniciar Sesión" class="btn btn-lg btn-primary btn-block pad" id="b1"></div>
            </form>  
        </div>
           
            <!-- <div>Datos de Acceso Nivel 1</div>
            <div>Usuario: u1 Clave: c1</div>
            <div>Usuario: u2 Clave: c2</div>
            <div>Datos de Acceso Nivel 2</div>
            <div>Usuario: u3 Clave: c3</div>
            <div>Usuario: u4 Clave: c4</div>
            <div>Usuario: u5 Clave: c5</div>
            <div>Usuario: u6 Clave: c6</div>
            <div>Usuario: u7 Clave: c7</div>
            <div>Usuario: u8 Clave: c8</div>
            <div>Usuario: u9 Clave: c9</div>
            <div>Usuario: u10 Clave: c10</div> -->
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
    </body>
</html>
