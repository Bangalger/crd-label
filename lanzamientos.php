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
                    <ul id="nav" class="nav navbar-nav">
                        <li><a>Iniciar Sesion</a></li>
                        <li><a>Registro</a></li>
                    </ul>
                </nav>
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="current"><a href="artistas.php">Artistas</a></li>
                        <li><a href="lanzamiento.php">Lanzamientos</a></li>
                        <li><a href="concursos.php">Concursos</a></li>
                        <li><a href="http://crd-label.com.ar/ventas/">Shop</a></li>
                        <li><a href="#">Demos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>

<section id="team" class="team">
			<div class="container">
				<div class="row">
		
					<div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
						<h2>Lanzamientos</h2>
						<!--div class="devider"><i class="fa fa-heart-o fa-lg"></i></div-->
					</div>
					
					<div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
						<p></p>
					</div>

					
					<?php
				if( $conexion = mysqli_connect("localhost","oy000250_crd","da72KOvofo","oy000250_crd")){
					$consulta = "SELECT * FROM lanzamientos";
					$resultado = mysqli_query($conexion,$consulta);
					//no agarre lo del ul, no lo voy a hacer
					while($fila = mysqli_fetch_array($resultado)){
						$id = $fila["id_lanzamiento"];
						$img = $fila["imagen"];
						$nom= $fila["nombre_artista"];
						$nom_lanz= $fila["nombre_lanzamiento"];
						

						echo '<figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">';
						echo '<div class="member-thumb">';
						echo '<img src="'.$img.'" alt="'.$nom.'" class="img-responsive">';
						echo '</div>';
						echo '<h4>'.$nom_lanz.'</h4>';
						echo '<span>'.$nom.'</span>';
						echo '</figure>';
						}
					}else{
						echo "<p>No se pudo</p>";
						}
?>
					
					
				</div>
			</div>
		</section>


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