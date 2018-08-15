<?php 
require("conectkarl.php");
//echo "call listarPromos(".$_POST['idProd'].");";
$sql = mysqli_query($conection,"call listarPromos(".$_POST['idProd'].");");

$filas=array();
$i=0;
while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	
	$filas[$i]= $row;
	$i++;

}
//echo "Cobrar Und. => ".$cuantosDebe;
mysqli_close($conection); //desconectamos la base de datos
echo json_encode($filas);

?>