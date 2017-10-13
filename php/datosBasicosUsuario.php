<?php
session_start();
require("conectkarl.php");

$filas=array();
$sql = mysqli_query($conection,"call datosBasicosUsuario(".$_SESSION['idUsuario'].");");
$i=0;

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	$filas[$i]= $row;
	$i++;
}
mysqli_close($conection); //desconectamos la base de datos
echo json_encode($filas);
?>