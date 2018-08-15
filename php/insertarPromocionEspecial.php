<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

$sql = "INSERT INTO `pedidodetalle`(`idPedidoDetalle`, `idProducto`, `pedPrecio`, `pedCantidad`, `pedSubtotal`, `pedNota`)
    VALUES ({$_POST['pedid']},{$_POST['idProd']}, -{$_POST['montoDscto']},0,-".number_format($_POST['montoDscto'],2).",'{$_POST['obsDscto']}');";
//echo $sql;
if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas compleja con retorno de dato de sql del procedure.
	/* obtener el array de objetos */
	echo true;
	/* liberar el conjunto de resultados */
	
}else{echo false;}



?>