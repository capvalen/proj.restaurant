<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

//echo "call eliminarProductoPedido (".$_POST['idProd'].", ".$_POST['mesa'].", ".$_POST['idUser']." );";
$sql= "call eliminarUsuario (".$_POST['idUser'].");";
//echo $sql;

if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas compleja con retorno de dato de sql del procedure.
	/* obtener el array de objetos */
	while ($resultado = $llamadoSQL->fetch_row()) {
		echo $resultado[0]; //Retorna los resultados via post del procedure
	}
	/* liberar el conjunto de resultados */
	$llamadoSQL->close();
}else{echo '0';}



?>