<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

//echo "call eliminarProductoPedido (".$_POST['idProd'].", ".$_POST['mesa'].", ".$_POST['idUser']." );";
$sql= "call eliminarDescuentoPedido (".$_POST['idPed'].", ".$_POST['idProd'].", ".$_POST['descto']." );";
//echo $sql;

if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas compleja con retorno de dato de sql del procedure.
	/* obtener el array de objetos */
  echo true;
	/* liberar el conjunto de resultados */
}else{echo false;}



?>