<?php
session_start();
if (!isset($_SESSION['userid'])) { //not logged in

    //redirect to homepage

    //header("Location: http://localhost/nacho-login/login.php");
    header( "refresh:5; url=index.php" );
    echo '<p>Inicia sesion!<br>Redireccionando...</p>';
    die();
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>
	<ul>
		<li><a href="agregarverusuarios.php">Ususarios(Backend)</a></li>
		<li><a href="upload/formulario-artistas.php">Subir Artista</a></li>
		<li><a href="upload/formulario-lanzamiento.php">Subir Lanzamiento</a></li>
		<li><a href="upload/formulario-concurso.php">Concursos (Ver concursos y agregar nuevo concurso)</a></li>
		<li><a href="#">Mensajes recibidos</a></li>
		<li><a href="logout.php">Cerrar Sesión</a></li>
	</ul>
</body>
</html>