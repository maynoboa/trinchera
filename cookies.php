<!DOCTYPE html>
<html lang="es">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">

</head>
<body>

<header class="py-4" id="move-menu">
	<div class="container">
			<div id="logo">
				<h1> <a href="index.php"><span aria-hidden="true"></span> La Trinchera del Meme</a></h1>
			</div>
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars" aria-hidden="true"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class=""><a href="index.php">Inicio</a></li>
                <li class=""><a href="index.php#about">Acerca de</a></li>
                <li class=""><a href="inicio_sesion.php">Inicio Seguro</a></li>
				<li><a href="">Editor</a></li>
				<li class="">
				<label for="drop-2" class="toggle">Más <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
				<a href="#">Más <span class="fa fa-angle-down" aria-hidden="true"></span></a>
				<input type="checkbox" id="drop-2"/>
				<ul class="inner-ul">
					<li><a href="index.php#process">Proceso de Mercado</a></li>
					<li><a href="index.php#memes">Memes más destacados</a></li>
				    <li><a href="index.php#partners">Redes Sociales</a></li>
                    <li><a href="cookies.sphp">Información Cookies</a></li>
				</ul>
				</li>
			</ul>
			<div class="login-icon ml-lg-2">
				<a class="user" href="#popup3">Inicia Sesión / Registrate.</a>
			</div>
		</nav>
		<div class="clear"></div>
	</div>
</header>


<div class="banner2" id="home">
	<div class="container">
		<div class="row banner-text">
			<div class="slider-info col-lg-6">
				<div class="banner-info-grid mt-lg-5">
					<h2>Las Cookies. ¿Que son?</h2>
					<p>Las Cookies son ficheros que se almacenan en su ordenador, al acceder a paginas determinadas de la web. 
                    Con las cookies, puedes recuperar y almacenar información sobre las costumbres de un equipo o de un usuario.</p>
                    <p>Con esto, podemos identificar al usuario, por medio del historial, y con esto recomendarle los hábitos que
                    mas le gustán.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
				<img src="images/ventana.png" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</div>


<section class="about py-5" id="about_cookies">
	<div class="container py-lg-5 py-sm-3">
		<div class="row">
			<div class="col-lg-3 about-left">	
				<h3 class="heading mb-lg-5 mb-4">Tipos de Cookies</h3>
			</div>
			<div class="col-lg-5 col-md-7 about-text">
				<h3>Cookies persistentes y de sesión</h3>
				<p class="mt-3">Las Cookies persistentes almacenan los datos en el terminal, y puedes acceder durante un tiempo determinado.</p>
                <p class="mt-2">Las Cookies de Sesión recogen los datos del usuario, mientras que este, esté navegando por la página web..</p>
                <br>
                <h3>Cookies de análisis</h3>
                <p class="mt-3">Las Cookies de análisis, recogen datos sobre la conducta de los usuarios, y permiten elaborar un perfil del usuario.</p>
			</div> 
			<div class="col-lg-4 col-md-5 about-img">
				<img src="images/cookies_analisis.png" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>


<section class="about py-5" id="about">
	<div class="container py-lg-5 py-sm-3">
		<div class="row">
        <div class="col-lg-4 col-md-5 about-img">
				<img src="images/googleanalytics.png" alt="" class="img-fluid"/>
			</div>
			<div class="col-lg-5 col-md-7 about-text">
				<h3>Cumplimiento de normas de Google</h3>
				<p class="mt-3">Tenemos la oportunidad de poner estas cookies, pero esto se debe comprobar en Google Analystics.</p>
				<p class="mt-2">Recogemos los datos necesarios para cumplir estas normas, y de que no haya ningún tipo de problema. Y nos aseguramos de la privacidad de los usuarios.</p>
			</div> 
            <div class="col-lg-3 about-left">	
				<h3 class="heading mb-lg-5 mb-4">Normas Google</h3>
			</div>
		</div>
	</div>
</section>


<footer class="footer-emp-w3ls py-5">
	<div class="container pt-lg-3">
		<div class="row footer-top">
			<div class="col-lg-4 col-sm-6 footer-grid-wthree">
				<h4 class="footer-title text-uppercase mb-4">¿Quienes somos?</h4>
				<div class="contact-info">
					<p>Somos una red social, en la que se puede publicar desde chistes, hasta realizar memes a través de 
						nuestro editor o enviar videos que tengan gracia.<p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid-wthree mt-sm-0 mt-4">
				<h3 class="footer-title text-uppercase mb-4">Noticias</h3>
				<div class="contact-info">
					<div class="footer-style-w3ls">
						<h4 class="mb-2"><span class="far fa-newspaper"></span> Desarrollo de un grán proyecto</h4>
						<p>Comenzamos a desarrollar el proyecto, fase de ideas y de desarrollo</p>
						<p class="date">Enero-Febrero</p>
					</div>
					<div class="footer-style-w3ls mt-3">
						<h4 class="mb-2"><span class="far fa-newspaper"></span> Final del proyecto</h4>
						<p>Nuestro proyecto a sido realizado con éxito</p>
						<p class="date">Junio</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 footer-grid-wthree mt-lg-0 mt-sm-5 mt-4">
				<h3 class="footer-title text-uppercase mb-4">Contacta con nosotros</h3>
				<div class="contact-info">
					<div class="footer-style-w3ls">
						<h4 class="mb-2"> <span class="fa mr-1 fa-map-marker"></span> Localización</h4>
						<p>Calle Julián Camarillo 6A, Madrid, España.</p>
					</div>
					<div class="footer-style-w3ls my-3">
						<h4 class="mb-2"><span class="fa mr-1 fa-phone"></span> Teléfono</h4>
						<p>+34 91 666 666</p>
					</div>
					<div class="footer-style-w3ls">
						<h4 class="mb-2"><span class="fa mr-1 fa-envelope-open"></span> Email</h4>
						<p><a href="mailto:info@example.com">info@example.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-6 footer-grid-wthree mt-lg-0 mt-sm-5 mt-4">
				<h3 class="footer-title text-uppercase mb-4">Quick Links</h3>
				<ul class="links list-unstyled">
					<li>
						<a class="" href="index.php#home"> Home</a>
					</li>
					<li>
						<a class="" href="index.php#about"> Acerca de nosotros</a>
					</li>
					<li>
						<a class="" href="">Editor</a>
					</li>
					<li>
						<a class="" href="index.php#services">Que ofrecemos</a>
					</li>
					<li>
						<a class="" href="index.php#process">Mercado</a>
					</li>
					<li>
						<a class="" href="index.php#memes">Memes más destacados</a>
					</li>
					<li>
						<a class="" href="cookies.php">Normas y cookies</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<div class="copy-right-top border-top">
	<p class="copy-right text-center py-4">&copy; 2019 Trinchera del Meme. Todos los derechos reservados | Desarrollado por Mass y May</p>
</div>


<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>


<div id="popup3" class="popup-effect">
		<div class="popup">
			<div class="login px-sm-4 mx-auto mw-100">
				<h5 class="text-center mb-4">Inicia sesíon</h5>
				<form method="post">
					<div class="form-group">
						<label class="mb-2">Correo Electrónico</label>
						<input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
					</div>
					<div class="form-group">
						<label class="mb-2">Contraseña</label>
						<input type="password" name="clave"  class="form-control" id="clave" placeholder="Clave">
					</div>
					<input type="button" value="Iniciar Sesión" class="btn btn-lg btn-primary btn-block pad" id="b1">
					<p class="text-center mt-2">
						<a href="registro.php">¿No tienes cuenta? Registrate Aquí.</a>
					</p>
				</form>
			</div>
			<a class="close" href="#">&times;</a>
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/funciones.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>   
</body>
</html>