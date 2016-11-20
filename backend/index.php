<?php  //Start the Session
session_start();
 require('connect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['usuario']) and isset($_POST['passw'])){
//3.1.1 Assigning posted values to variables.
$usuario = $_POST['usuario'];
$passw = $_POST['passw'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `usuarios` WHERE usuario='$usuario' and passw='$passw'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['usuario'] = $usuario;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Datos incorrectos";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['usuario'])){
$usuario = $_SESSION['usuario'];
echo "Buenas " . $usuario . "";
echo '<ul>';
echo '<li><a href="agregarverusuarios.php">Ususarios(Backend)</a></li>';
echo '<li><a href="upload/formulario-artistas.php">Subir Artista</a></li>';
echo '<li><a href="upload/formulario-lanzamiento.php">Subir Lanzamiento</a></li>';
echo '<li><a href="upload/formulario-concurso.php">Concursos (Ver concursos y agregar nuevo concurso)</a></li>';
echo '<li><a href="#">Mensajes recibidos</a></li>';
echo '</ul>';
echo "<a href='logout.php'>Logout</a>"; 
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
?>
<html>
<head>
	<title>Login</title>
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
      <form class="form-signin" method="POST">
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2 class="form-signin-heading">Inicio de Sesión</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
	</div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="passw" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <!--a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a-->
      </form>
</div>

</body>

</html>
<?php } ?>