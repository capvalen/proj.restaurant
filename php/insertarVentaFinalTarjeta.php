<?php 
header('Content-Type: text/html; charset=utf8');
require("conectkarl.php");

//echo "call insertarVentaFinal (".$_POST['mesa'].", ".$_POST['cuantoCobra'].", ".$_POST['idUser'].", ".$_POST['idCli'].", ".$_POST['montoTotal']." );";
$sql= "call insertarVentaFinalTarjeta (".$_POST['mesa'].", ".$_POST['idUser'].", ".$_POST['idCli'].", ".$_POST['montoTotal'].", ".$_POST['idModo'].", ".$_POST['pagaTarj'].", ".$_POST['pagaEfe']." );";
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