<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Club Rayo Disquets</title>		
		<!-- Meta Description -->
        <meta name="description" content="Sitio Web de Club Rayo Disquets">
        <meta name="keywords" content="crd, club, rayo, disquets, argentina, music, techno, house, deep house, tech-house, progressive house, label">
        <meta name="author" content="German R. Figueroa">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css">

        <!-- My styles -->
    	<link rel="stylesheet" href="css/media_styles.css">

		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">
	
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/logo-crd.png" alt="Club Rayo Disquets">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation" id="nav-user-in">
                    
                    <!-- al ser una pagina donde se muestra info mas detallada y donde se puede comprar, no voy a mostrar aca
                    el log in ni el sign up, deberia colocar un LOG OUT con un header location a index.html.
                    ul id="nav" class="nav navbar-nav">
                        <li><a>Iniciar Sesion</a></li>
                        <li><a>Registro</a></li>
                    </ul-->
                </nav>
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="artistas.php">Artistas</a></li>
                        <li><a href="lanzamientos.php">Lanzamientos</a></li>
                        <li><a href="concursos.php">Concursos</a></li>
                        <li><a href="http://crd-label.com.ar/ventas/">Shop</a></li>
                        <li><a href="demos.php">Demos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				<div id="formulario" class="extradelfrom">
				<form  action="#" method="POST" class="popuptext" id="myPopup">
                    <label for="usuario">Usuario: </label>
                    <br/>
                    <input id=""  type="text" name="usuario" >
                    <br/>
                    <label for="clave">Clave: </label>
                    <br>
                    <input id=""  type="text" name="clave" >
                    <br/>
                    <br/>
                    <input  type="submit" value="INGRESAR" />
				</form>

            </div>
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div class="item active" style="background-image: url(backend/upload/img/lanzamientos/daiz_portada.jpg);">
						<div class="carousel-caption">
							<!-- saque el class="carousel-caption" ficha el main.css que es donde se tiene que meter lo de la barra al costado "FIESTA"-->
							<!--h2>Remixa a Midu</h2>
							<p>Reversiona su ultimo EP <br>y participa por premios</p-->
						</div>
					</div>
					<!-- end single slide -->
					
					

					
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->

        <section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">
					
					<!-- contact address -->
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 colorn wow fadeInLeft animated" data-wow-duration="500ms">
						<div class="contact-address">
							<h3>LOST MY SOUL</h3>
							<h2>DAIZ</h2>
							<img class="imgart" src="backend/upload/img/artistas/juanantoniodeep.jpg">
						</div>
					</div>
					<!-- end contact address -->
					
					<!-- contact form -->
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 extrapadding colorn wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<h3>BIO</h3>
							<p>Con años 17 y medio de edad, logró sumergido en la zona de discotecas de su ciudad natal, Bariloche, situado en la Patagonia Argentina y hoy se presenta a sí mismo en los lugares más representativos de la escena de la Patagonia y Buenos Aires de la ciudad. Algunos dicen que es uno de los nuevos talentos de la música electrónica underground de Argentina, junto con su socio cercano; Dani Labb.
Él se las arregló para compartir escenario con Jimmy Van M, Nico Cano, Lucianno Villarreal, Lolu Menayed y Lucas Ferro.
La música que hace ha recibido el apoyo de dj de todo el mundo tales como Neverdogs, Massimo Cassini, Reelow, Mihai Popoviciu, Wally Stryk, Stacey Pullen, Matheo Vélez, David Museen, Stefano Noferini, Neverdogs, Miguel Lobo, Jimmy Van M, y está recibiendo constantemente el apoyo de los artistas argentinos nacionales Jonas de Narvaez, Bs As profundo, Gruuve y Lolu Menayed.
Compañías discográficas: Deep Disco Music, Deep Sense Records, Onward Recordings, Hermine Records, Boutade Musique, MUUV, SAMANI.</p> 
							
						</div>
					</div>
					<!-- end contact form -->
					<div class="col-lg-12 md-mt-20">
					<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/200244062&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
					</div>

					<div class="col-lg-12 md-mt-20" align="center"> 
						<button id="btnvnt" type="button"><a id="d" href="http://crd-label.com.ar/ventas/index.php?route=product/product&path=60&product_id=59" target="_blank">Comprar $1.99</a></button> 
					</div>
				</div>
			</div>
					
</section>

<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" style="text-align:center;">
						<div class="footer-single">
							<!--img src="img/footer-logo.png" alt=""-->
							<h6>Idioma</h6>
							<a href="artista=1.php">ES</a>
							<a href="artista=1_en.php">/EN</a>
						</div>
					</div>
				
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms" style="text-align:center;">
						<script type="text/javascript" src="http://v2.envialosimple.com/form/show/AdministratorID/93288/FormID/2/format/widget">
						</script>
					</div>
				
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms" style="text-align:center;">
						<div class="footer-single">
							<h6>Seguinos</h6>
							<ul>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Instagram</a></li>
								<li><a href="#">Google+</a></li>
							</ul>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2016 <a href="#">Club Rayo Disquets</a>. All rights reserved. Designed & developed by <a href="#">Germán Figueroa</a>
						</p>
					</div>
				</div>
			</div>
		</footer>

        
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="js/custom.js"></script>
		
    </body>
</html>