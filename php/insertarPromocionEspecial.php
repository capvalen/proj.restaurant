<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");


if( floatval($_POST['porcentaje']>10) ){

	$sqlClave = $auxiliar->prepare("SELECT idConf from configuracion where confVariable = 'claveDescuento' and confValor = ? ");
	$sqlClave->execute([ $_POST['clave'] ]);
	//$fetchClave = $sqlClave->fetch(PDO::FETCH_ASSOC);
	$contarClave = $sqlClave->rowCount();
	//echo 'registros '. $contarClave;

	if($contarClave == 1) registrarDescuento($auxiliar);
	else echo 'noClave';
}else{
	registrarDescuento($auxiliar);
}


function registrarDescuento($auxiliar){
	try {
	$sql = $auxiliar->prepare("INSERT INTO `pedidodetalle`(`idPedidoDetalle`, `idProducto`, `pedPrecio`, `pedCantidad`, `pedSubtotal`, `pedNota`)
			VALUES ( ?, ?, ?, 0, ?, ?);");
	//echo $sql;
		if($sql->execute([
		$_POST['pedid'], $_POST['idProd'], -$_POST['montoDscto'], -$_POST['montoDscto'], $_POST['obsDscto'] ?? ''
	]))
		echo $auxiliar->lastInsertId();
	else echo 'error';
	} catch (ErrorException $th) {
		echo $th;
	}
	
}
?>