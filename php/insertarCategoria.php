<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

$sql= "call insertarCategoria ('".$_POST['nombreCateg']."','".$_POST['nombreWeb']."', '".$_POST['divProd']."')";
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