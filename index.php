
<!DOCTYPE html>
<html lang="es">
<head>
<title>La Trinchera del Meme</title>
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
    <link href="css/style.css" rel='stylesheet' type='text/css' />
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
				<li class=""><a href="#about">Acerca de</a></li>
				<li class=""><a href="inicio_sesion.php">Inicio Seguro</a></li>
				<li><a target="_blank" href="editor-meme/editor.php">Editor</a></li>
				<li class="">

				<label for="drop-2" class="toggle">Más <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
				<a href="#">Más <span class="fa fa-angle-down" aria-hidden="true"></span></a>
				<input type="checkbox" id="drop-2"/>
				<ul class="inner-ul">
					<li><a href="#process">Proceso de Mercado</a></li>
					<li><a href="#memes">Memes más destacados</a></li>
					<li><a href="#partners">Redes Sociales</a></li>
					<li><a href="cookies.php">Información Cookies</a></li>
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


<div class="banner" id="home">
	<div class="container">
		<div class="row banner-text">
			<div class="slider-info col-lg-6">
				<div class="banner-info-grid mt-lg-5">
					<h2>Bienvenido a la trinchera del meme</h2>
					<p>La red social que te hará sonreir, estar bien y poder comentar los tipos de humores que te gustén más.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-8 mt-lg-0 mt-sm-5 mt-3 banner-image text-lg-center">
				<img src="images/1.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</div>


<div id="overbox3">
    <div id="infobox3">
        <p>Esta web utiliza cookies para obtener datos estadísticos de la navegación de sus usuarios. Si continúas navegando consideramos que aceptas su uso.
        <a href="cookies.php" >Más información</a>
        <a onclick="aceptar_cookies();" style="cursor:pointer;">X Cerrar</a></p>
    </div>
</div>


<section class="about py-5" id="about">
	<div class="container py-lg-5 py-sm-3">
		<div class="row">
			<div class="col-lg-3 about-left">	
				<h3 class="heading mb-lg-5 mb-4">Acerca de Nosotros</h3>
			</div>
			<div class="col-lg-5 col-md-7 about-text">
				<h3>¿Que es lo que nosotros proponemos haciendo esto?</h3>
				<p class="mt-3">Hemos creado una red social, en la que se puede publicar desde chistes, hasta realizar memes a través de nuestro editor o enviar videos que tengan gracia.</p>
				<p class="mt-2">Con esto queremos llegar a ser una grán comunidad, y conseguir un grán nivel en el mundo de las redes sociales.</p>
			</div> 
			<div class="col-lg-4 col-md-5 about-img">
				<img src="images/lol-tr.png" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>


<section class="choose py-5" id="services">
	<div class="container py-md-3">
		<h3 class="heading mb-5">Que ofrecemos</h3>
		<div class="feature-grids row">
			<div class="col-lg-3 col-sm-6">
				<div class="f1 icon1 p-4">
					<div class="icon">
						<span class="fas fa-pencil-alt"></span>
					</div>
					<h3 class="my-3">Editor Propio</h3>
					<p>Tenemos nuestro propio editor, en el cual puedes editar las imagenes de manera más sencilla y eficiente.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
				<div class="f1 icon2 p-4">
					<div class="icon">
						<span class="fas fa-satellite-dish"></span>
					</div>
					<h3 class="my-3">Conectividad</h3>
					<p>Poder conectarse con la red social de manera inmediata, sin tener que esperar demasiado (Se requiere Internet).</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 icon3 p-4">
					<div class="icon">
						<span class="fa fa-dollar-sign"></span>
					</div>
					<h3 class="my-3">Promociones</h3>
					<p>Ventajas al ser miembro vip en la red social. Tendrás muchas más ventajas que los demás usuarios.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
				<div class="f1 icon4 p-4">
					<div class="icon">
						<span class="fa fa-cloud"></span>
					</div>
					<h3 class="my-3">Recuperación</h3>
					<p>Recuperarás los datos aunque pierdas la conexión, todo seguirá donde lo dejaste sin ningún cambio.</p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="process py-5" id="process">
	<div class="container py-md-3">
		<h3 class="heading mb-5">Proceso de Mercado</h3>
		<div class="row process-grids">
			<div class="col-lg-3 col-md-6 my-lg-4 w3pvt-ab position-relative">
				<div class="">
					<img src="images/Tierra.png" alt="" class="img-fluid">
				</div>
				<h4 class="feed-title my-md-3 mb-3">Expansión Mundial</h4>
				<p>Desarrollo por todo el mundo para conseguir destacar en el sector.</p>
			</div>
			<div class="col-lg-3 col-md-6 my-lg-4 mt-md-0 mt-4 w3pvt-ab position-relative">
				<div class="">
					<img src="images/manos-corazon.png" alt="" class="img-fluid">
				</div>
				<h4 class="feed-title my-md-3 mb-3">Beneficios Solidarios</h4>
				<p>Una parte de nuestros beneficios se destinarán a luchar ante enfermedades raras de poco seguimiento.</p>
			</div>
			<div class="col-lg-3 col-md-6 my-lg-4 mt-sm-5 mt-4 w3pvt-ab position-relative">
				<div class="">
					<img src="images/manos.png" alt="" class="img-fluid">
				</div>
				<h4 class="feed-title my-md-3 mb-3">Planes Financieros</h4>
				<p>Llegar a colaborar con grandes empresas y realizar proyectos en casos específicos.</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-4 mt-sm-5 mt-4 w3pvt-ab">
				<div class="">
					<img src="images/infra.png" alt="" class="img-fluid">
				</div>
				<h4 class="feed-title my-md-3 mb-3">Infraestructuras y Software</h4>
				<p> Utilización de nuevas tecnologías, optimizandolo en todo momento.</p>
			</div>
		</div>
	</div>
</section>


<section class="video py-5" id="video">
	<div class="container">
		<div class="inner-sec-w3ls py-lg-5 py-3">
			<div class="row">
				<div class="col-lg-6 video-right px-lg-5 px-2">
					<h3 class="tittle-w3">Conclusión</h3>
					<p class="mt-4">Cada día la gente esta más estresada, no paramos de ir corriendo a todas partes, no pensamos en nosotros mismos. La risa es vida, es necesaria y te ayuda a ser feliz. Por eso hemos creado esta red social. Ríe y disfruta :).</p>

				</div>
				<div class="col-lg-6 video-img mt-lg-0 mt-4">
					<img src="images/amigos-riendo.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>


<section class="portfolio py-5" id="memes">
	<div class="container py-3">
		<h3 class="heading text-capitalize mb-md-5 mb-4">Memes más destacados<span></span></h3>
		<div class="row news-grids text-center">
			<div class="col-md-3 col-6 gal-img">
				<a><img src="images/mem1.jpg" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a><img src="images/mem2.jpg" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a><img src="images/mem3.jpg" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a><img src="images/mem4.jpg" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a><img src="images/mem5.jpg" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a><img src="images/mem6.jpg" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a><img src="images/mem7.jpg" alt="portfolio image" class="img-fluid"></a>
			</div>
			<div class="col-md-3 col-6 gal-img">
				<a><img src="images/mem8.jpg" alt="portfolio image" class="img-fluid"></a>
			</div>
		</div>
	</div>
</section>


<section class="partners py-5" id="partners">
	<div class="container py-md-3">
		<h3 class="heading mb-5">Redes Sociales</h3>
		<div class="inner-sec-w3ls">
			<div class="sponsers-icon text-center">
				<ul class="list-unstyled partners-icon row">
					<li class="col-md-2 col-4 border-right mt-md-0 mt-3">
						<a target="_blank" href="https://www.pinterest.es/"><span class="fab fa-pinterest" id="pinterest" aria-hidden="true"></span></a>
					</li>
					<li class="col-md-2 col-4 border-right mt-md-0 mt-3">
						<a target="_blank" href="https://www.instagram.com/?hl=es"><span class="fab fa-instagram" id="instagram" aria-hidden="true"></span></a>
					</li>
					<li class="col-md-2 col-4 mt-md-0 mt-3">
						<a target="_blank" href="https://www.youtube.com/?gl=ES&hl=es"><span class="fab fa-youtube" id="youtube" aria-hidden="true"></span></a>
					</li>
					<li class="col-md-2 col-4">		
						<a target="_blank" href="https://twitter.com/?lang=es"><span class="fab fa-twitter" id="twitter" aria-hidden="true"></span></a>
					</li>
					<li class="col-md-2 col-4 border-left border-right">
						<a target="_blank" href="https://es-es.facebook.com/"><span class="fab fa-facebook-f" id="facebook" aria-hidden="true"></span></a>
					</li>
					<li class="col-md-2 col-4 border-right">
						<a target="_blank" href="https://github.com"><span class="fab fa-github" id="github" aria-hidden="true" ></span></a>
					</li>
				</ul>
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
						<a class="" href="#home"> Home</a>
					</li>
					<li>
						<a class="" href="#about"> Acerca de nosotros</a>
					</li>
					<li>
						<a class="" href="editor.php">Editor</a>
					</li>
					<li>
						<a class="" href="#services">Que ofrecemos</a>
					</li>
					<li>
						<a class="" href="#process">Mercado</a>
					</li>
					<li>
						<a class="" href="#memes">Memes más destacados</a>
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