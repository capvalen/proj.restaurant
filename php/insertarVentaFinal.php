<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

/*Listando las promociones si hubiera */

$sqlListaProd= "SELECT pe.idPedido, pd.idProducto, pd.pedCantidad FROM `pedido` pe inner join pedidodetalle pd on pd.idPedidodetalle = pe.idPedido where idMesa = {$_POST['mesa']} and idEstadoMesa = 2;";
$llamadoProd = $cadena->query($sqlListaProd);
while($resultadoProd = $llamadoProd->fetch_assoc()){
	$_POST['pedid']=$resultadoProd['idPedido'];
	$_POST["idProd"]=$resultadoProd['idProducto'];
	$_POST["debe"]=$resultadoProd['pedCantidad'];
	include 'insertarPromosBD.php';
	//echo $resultadoProd['idProducto']." cant: {$resultadoProd['pedCantidad']}\n";
}
//$llamadoProd->close();



$sql= "call insertarVentaFinalEfectivo (".$_POST['mesa'].", ".$_POST['cuantoCobra'].", ".$_POST['idUser'].", ".$_POST['idCli'].", ".$_POST['montoTotal']." );";
//echo $sql;

if ($llamadoSQL = $conection->query($sql)) { //Ejecución mas compleja con retorno de dato de sql del procedure.
	// obtener el array de objetos
	// while ($resultado = $llamadoSQL->fetch_row()) {
	// 	echo $resultado[0]; //Retorna los resultados via post del procedure
	// }
	echo true;
	// liberar el conjunto de resultados 
	$llamadoSQL->close();
}else{echo false;
echo $llamadoSQL->error;}



?>