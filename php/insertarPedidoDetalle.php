<?php 
require("conectkarl.php");
header('Content-Type: text/html; charset=utf8');

//$array = json_decode($_POST['jsonDatos']);
$resultados=array();

//echo "call insertarPedidoDetalle(".$_POST['idProd'].", ".$_POST['precio'].", ".$_POST['cantidad'].", ".$_POST['idPedido'].", '".$_POST['nota']."')";
$sql = mysqli_query($conection,"call insertarPedidoDetalle(".$_POST['idProd'].", ".$_POST['precio'].", ".$_POST['cantidad'].", ".$_POST['idPedido'].", '".$_POST['nota']."' );");
$row=mysqli_fetch_array($sql, MYSQLI_ASSOC);
//echo $row['resp'][0];

$resultados[]= array('idProducto' => $_POST['idProd'],
	'respuesta' => $row['resp'],
	'stockActual' => $row['stockCantidad']);
// while($row=mysqli_fetch_array($sql, MYSQLI_ASSOC)){
// 	echo $row['resp'];	
// }



// echo json_encode($resultados);
mysqli_close($conection); //desconectamos la base de datos
echo json_encode($resultados);
?>