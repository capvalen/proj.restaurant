<?php 
require("conectkarl.php");

$filas=array();
//echo "call reporteCajaPorUsuario('".$_POST['fechaIni']."', '".$_POST['fechaFin']."');";
$sql = mysqli_query($conection,"call reporteCajaPorBebidas('".$_POST['fechaIni']."', '".$_POST['fechaFin']."');");
$i=0;

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	$filas[$i]= $row;
	$i++;
}
mysqli_close($conection); //desconectamos la base de datos
echo json_encode($filas);
?>