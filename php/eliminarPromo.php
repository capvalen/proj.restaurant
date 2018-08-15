<?php 
session_start();
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");


$sql= "UPDATE `promociones` SET `promoActivo` = b'0' WHERE `idPromocion` = {$_POST['idProd']};";
//echo $sql;

if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas compleja con retorno de dato de sql del procedure.
	/* obtener el array de objetos */
	echo true;
	
}else{echo false;}



?>