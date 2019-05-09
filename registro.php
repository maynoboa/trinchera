<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <title>Document</title>
</head>
<style>

    i{
      position: absolute;
      opacity: 0.5;
      right: 5%;
		  top: 48.5%;
    }
</style>

<body>
    <div class="signup__container_2">
  <div class="container__child signup__thumbnail2">
    <div class="thumbnail__logo">
      <h1 class="logo__text">La trinchera del Meme</h1>
    </div>
    <div class="thumbnail__content2 text-center">
      <h2 class="encabezado-secundario">Completa los siguientes pasos para crear un nuevo perfil.</h2>
      <br>
      <form>
      <div class="division">
          <label for="username">Usuario</label>
              <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
      </div>
      <br>
      <div class="division">
          <label for="username">Contraseña</label>
              <input type="password" name="clave" class="form-control" id="clave" placeholder="Contraseña">
          <label id="vision">
            <input type="checkbox" id="methods" onclick="ojo()">
            <i class="fa fa-eye" ></i>
            <i class="fa fa-eye-slash" ></i>        
          </label>
      </div>
      <br>
      <div class="division">
          <label for="username">Correo Electrónico</label>
              <input type="text" name="correo_electronico" class="form-control" id="correo_electronico" placeholder="Correo Electrónico">
      </div>
      <br>
      <div class="division">
          <label for="username">Nombre</label>
              <input type="text" name="nombre_usuario" class="form-control" id="nombre_usuario" placeholder="Nombre">
      </div>
    </div>
    <div class="signup__overlay"></div>
</form>
  </div>
       
  <div class="container__child signup__form">
    <form>
    <input name="ni_usu" id="ni_usu" type= hidden>
      <div class="division">
          <label for="username">Primer Apellido</label>
              <input type="text" name="apellido_1" class="form-control" id="apellido_1" placeholder="Primer Apellido">
      </div>
      <br>
      <div class="division">
        <label for="username">Segundo Apellido</label>
          <input type="text" name="apellido_2"  class="form-control" id="apellido_2" placeholder="Segundo Apellido">
      </div>
      <br>
      <div class="division">
        <label for="username">País</label>
          <input type="text" name="pais"  class="form-control" id="pais" placeholder="País">
      </div>
      <br>
      <div class="division">
        <label for="username">Sexo</label>
        <select name="sexo" class="form-control" id="sexo" placeholder="Sexo">
          <option value="">Elige una opción</option>
            <option>Hombre</option>
            <option>Mujer</option>
            <option>N/A</option>
        </select>
      </div>
      <br>
        <div id="resultado_3" style="margin: 2px;">&nbsp;</div>
            <div class="m-t-lg">
              <ul class="list-inline">
                  <li>
                    <input type="button" value="Registrarse" class="btn btn-lg btn-primary btn-block pad" id="reg_usu">
                        <!--margin: -10% 5% 0% 45%;
                        padding: 8% 13% 8% 13%; ESTO ES PARA EL BOTON-->
                  </li>
                  <br><br>
                  <p class="titulo_registro">Volver atras <a href="index.php" style="color:#FF0000">Aquí</a></p>
              </ul>
            </div>
    </form> 
  </div>  
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/funciones.js" type="text/javascript"></script>
</body>
</html>