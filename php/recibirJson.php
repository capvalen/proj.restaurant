<?php 
require("conectkarl.php");
header('Content-Type: text/html; charset=utf8');

//$array = json_decode($_POST['jsonDatos']);
$resultados=array();


$sql = mysqli_query($conection,"call sumarPedidoDetallePrueba(".$_POST['idProd'].", ".$_POST['cantidad']." );");
$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);
//echo $row['resp'][0];

$resultados[]= array('idProducto' => $_POST['idProd'],
	'respuesta' => $row['resp'],
	'stockActual' => $row['stockCantidad']	);
// while($row=mysqli_fetch_array($sql, MYSQLI_ASSOC)){
// 	echo $row['resp'];	
// }



// echo json_encode($resultados);
mysqli_close($conection); //desconectamos la base de datos
echo json_encode($resultados);
?>