
<?php 
session_start();
require 'php/licence.php';
 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	if ($_SESSION['licencia']=='Ok'){ ?>
	<h1>hola mundo</h1>
	<h3>Contenido de prueba</h3>
	<?php 
	}else{
		include 'php/licenciaDemo.php';
	}
	 ?>
</body>
</html>