<?php
	$server="localhost";
	$username="oy000250_crd";
	$password="da72KOvofo";
	$db='oy000250_crd';
	$conexion=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($conexion,$db)or die("la base de datos no existe");
?>