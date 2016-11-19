<!DOCTYPE html>
<html>
<body>
	<form action="uploadmascon.php" method="post" enctype="multipart/form-data"> <!-- IMPORTANTISIMO AGREGAR EL ENCTYPE AL FORM, SINO NO FUNCIONA EL UPLOAD -->
	    <p>
	    	<label>Subir una imagen</label>
	    	<input type="file" name="imagen_a_subir">
	    </p>
	    <p>
	    	<label>Subir un archivo comprimido</label>
	    	<input type="file" name="archivo_a_subir">
	    </p>
	    <p>
	    	<label>Titulo</label>
	    	<input type="text" name="titulo" placeholder="Ingresar Titulo del Concurso">
	    </p>
	    <p>
	    	<label>Texto</label>
	    	<input type="text" name="texto" placeholder="Ingresar Texto">
	    </p>

	    <p>
	    	<label>Descripción</label>
	    	<input type="text" name="descripcion" placeholder="Ingresar Descripción">
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