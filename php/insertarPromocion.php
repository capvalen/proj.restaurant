<?php 
session_start();
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");


$sql= "call insertarPromocion (".$_POST['idProd'].", ".$_POST['cant'].",".$_POST['descto']." )";
//echo $sql;

if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas compleja con retorno de dato de sql del procedure.
	/* obtener el array de objetos */
	echo true;
	
}else{echo false;}



?>