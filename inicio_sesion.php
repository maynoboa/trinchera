<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticación Multinivel</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    </head>
    <style>
      .btn-primary{
        margin: -10% 5% 0% 0%;
        padding: 4% 13% 4% 13%;
      }
      .fa-eye, .fa-eye-slash{
      position: absolute;
      opacity: 0.5;
      right: 6.5%;
		  top: 37.5%;
    }
    </style>
    <body>
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        session_destroy();
        ?>

<div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <h1 class="logo__text">La trinchera del Meme</h1>
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="encabezado-primario">Bienvenido a la Trinchera del Meme.</h1>
      <h2 class="encabezado-secundario">¿Quieres hecharte unas risas?. Esta es tu página.</h2>
      <h2 class="encabezado-secundario">Inicia Sesión.</h2>
    </div>
    <div class="redes">
      <ul class="list-inline m-b-0 text-center">
        <li><a href="" target="_blank"><i class="fa fa-globe"></i></a></li>
        <li><a href="" target="_blank"><i class="fa fa-behance"></i></a></li>
        <li><a href="" target="_blank"><i class="fa fa-github"></i></a></li>
        <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>
    <div class="signup__overlay"></div>
  </div>
       
  <div class="container__child signup__form">
    <form>
      <div class="division">
          <label for="username">Usuario</label>
              <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
      </div>
      <br>
      <div class="division">
        <label for="password">Contraseña</label>
          <input type="password" name="clave"  class="form-control" id="clave" placeholder="Clave">
      </div>
      <label id="vision">
            <input type="checkbox" id="methods" onclick="ojo()">
            <i class="fa fa-eye-slash" ></i>
            <i class="fa fa-eye " ></i>        
          </label>
      <br>
        <div id="resultado" style="margin: 2px;">&nbsp;</div>
            <div class="m-t-lg">
              <ul class="list-inline">
                    <input type="button" value="Iniciar Sesión" class="btn btn-lg btn-primary btn-block pad" id="b1">
                  <br><br>
                  <p class="titulo_registro">Tambien te puedes registrar en este enlace <a href="registro.php" style="color:#FF0000">Registrarse</a> o ir a la página oficial <a href="index.php" 
                  style="color:#FF0000">Aquí</a></p>
              </ul>
            </div>
        </form>  

    <script> 
    function ojo() { 
        var temp = document.getElementById("clave"); 
        if (temp.type === "password") { 
            temp.type = "text"; 
        } else { 
            temp.type = "password"; 
        } 
    } 
    </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/funciones.js" type="text/javascript"></script>
    </body>
</html>