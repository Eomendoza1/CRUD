<?php
	$server = "localhost";
	$user = "root";
	$password = "";//poner tu propia contraseña, si tienes una.
	$bd = "prueba_bd";

	$conexion = mysqli_connect($server, $user, $password, $bd);
	if (!$conexion){ 
		die('Error de Conexión: ' . mysqli_connect_errno());	
	}
?>