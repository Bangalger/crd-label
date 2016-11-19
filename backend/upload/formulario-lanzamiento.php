<!DOCTYPE html>
<html>
<body>
	<form action="upload-lanz.php" method="post" enctype="multipart/form-data"> <!-- IMPORTANTISIMO AGREGAR EL ENCTYPE AL FORM, SINO NO FUNCIONA EL UPLOAD -->
	    <p>
	    	<label>Subir una imagen</label>
	    	<input type="file" name="archivo_a_subir">
	    </p>
	    <p>
	    	<label>Nombre Artista</label>
	    	<input type="text" name="nombre_artista" placeholder="Ingresar nombre de artista">
	    </p>
	    <p>
	    	<label>Nombre Lanzamiento</label>
	    	<input type="text" name="nombre_lanzamiento" placeholder="Ingresar nombre de lanzamiento">
	    </p>
	    <p>
	    	<label>Link Soundcloud</label>
	    	<input type="text" name="link_soundcloud" placeholder="Ingrese Link de Souncloud (embed)">
	    </p>
	    <p>
	    	<label>Link Boton Venta</label>
	    	<input type="text" name="link_btn_venta" placeholder="Ingrese Link de E-commerce (url)">
	    </p>
	    <input type="submit" value="Subir!" name="submit">
	</form>
</body>
</html>