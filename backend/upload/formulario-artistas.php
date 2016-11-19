<!DOCTYPE html>
<html>
<body>
	<form action="uploadmascon.php" method="post" enctype="multipart/form-data"> <!-- IMPORTANTISIMO AGREGAR EL ENCTYPE AL FORM, SINO NO FUNCIONA EL UPLOAD -->
	    <p>
	    	<label>Subir una imagen</label>
	    	<input type="file" name="archivo_a_subir">
	    </p>
	    <p>
	    	<label>Nombre Artista</label>
	    	<input type="text" name="nombre_artista" placeholder="Ingresar nombre de artista">
	    </p>
	    <p>
	    	<label>Biografia</label>
	    	<input type="text" name="biografia" placeholder="Ingresar biografia">
	    </p>
	    <p>
	    	<label>Biografia Ingles</label>
	    	<input type="text" name="biografia_en" placeholder="Ingresar biografia en ingles">
	    </p>
	    <input type="submit" value="Subir!" name="submit">
	</form>


	<!-- Colocar: 
	-Demos y mensajes recibidos? algo de recibido. 
	-"Subir archivos para concurso" 
	(quizas seria mejor mostrar concursos, y al final "agregar un concurso" y ahi adentro meter un 
	"agregar archivos para concurso" que seria la misma logica que upload imagenes.
	-->
</body>
</html>