<?php
	$server="localhost";
	$username="root";
	$password="*123456*";
	$db='casadebarro';
	$conection= mysqli_connect($server,$username,$password)or die("No se ha podido establecer la conexion");
	$sdb= mysqli_select_db($conection,$db)or die("La base de datos no existe");
	$conection->set_charset("utf8");

	$cadena= new mysqli($server, $username, $password, $db);
	$cadena->set_charset("utf8");

	$esclavo= new mysqli($server, $username, $password, $db);
	$esclavo->set_charset("utf8");
?>