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
        <meta name="description" content="Sitio web del sello Club Rayo Disquets">
        <meta name="keywords" content="argentina, musica, music, label, crd, techno, house, deep house, progressive house, record label">
        <meta name="author" content="German R Figueroa">
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
<script>
	// abre el popup cuando se hace click
		function abrirLogin() {
    	var popup = document.getElementById('myPopup');
    	popup.classList.toggle('show');
    		}
</script>

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
                        <li><a class="popup" onclick="abrirLogin()">Log In</a></li>
                        <li><a>Sign Up</a></li>
                    </ul>
                </nav>
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="artistas_en.php">Artists</a></li>
                        <li><a href="lanzamientos.php">Releases</a></li>
                        <li><a href="concursos_en.php">Contests</a></li>
                        <li><a href="http://crd-label.com.ar/ventas/">Shop</a></li>
                        <li><a href="demos_en.php">Demos</a></li>
                        <li><a href="contacto_en.php">Contact</a></li>
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

			<section id="contact" class="contact">
						<div class="container">
							<div class="row mb50">
							
								<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms" style="margin-top:50px">
									<h2>Send us your music!</h2>
									<div class="devider"></i></div>
								</div>
								
								<div class="sec-sub-title text-center wow fadeInDown animated" data-wow-duration="1000ms">
									<p>Please upload your demos via this page and somebody will come back to you as soon as possible.</p>
								</div>
								
								<!-- contact address -->
								
								<!-- end contact address -->
								
								<!-- contact form -->
								<div class="col-lg-12 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
									<div class="contact-form">
										<h3>Form</h3>
										<form action="#" id="contact-form">
											<div class="input-group name-email">
												<div class="input-field">
													<input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
												</div>
												<div class="input-field">
													<input type="email" name="email" id="email" placeholder="Email" class="form-control">
												</div>
											</div>
											<div class="input-group">
												<textarea name="message" id="message" placeholder="Mensaje" class="form-control"></textarea>
											</div>
											<div class="input-group">
												<textarea name="linkdemo" id="message" placeholder="Coloca el link de tu demo (Dropbox, Wetransfer, Mediafire..)" class="form-control"></textarea>
											</div>
											<div class="input-group">
												<input type="submit" class="pull-right" value="Enviar">
											</div>
										</form>
									</div>
								</div>
								<!-- end contact form fichar que es lo que tiene id="form-submit", por lo del css -->

								
								<!-- footer social links -->
								<div class="col-lg-12 col-md-8 col-sm-7 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms" style="text-align: center;">
									<img id="logos" src="img/logos.png">
								</div>
								<!-- end footer social links -->
								
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
							<a href="demos.php">ES</a>
							<a href="demos_en.php">/EN</a>
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
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
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
        

        <script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "¡Este campo es obligatorio!",
							minlength: "Tu nombre es mas de dos caracteres."
						},
						email: {
							required: "Sin email, no podemos contactarte."
						},
						message: {
							required: "Deberias escribir algo aca.",
							minlength: "¿Solamente eso?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
		
    </body>
</html>