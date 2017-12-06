<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listar10UltimosPedidos();");


while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	echo '<p> <span>'.$row['pedFecha'].'</span> <strong>Mesa '.$row['idMesa'].': </strong> <span>S/. '.$row['subTotal'].'</span> <button class="btn btn-sm btn-morado btn-outline btnReImprimirTicket" idMesa="'.$row['idMesa'].'"><i class="icofont icofont-print"></i></button></p>';

}

mysqli_close($conection); //desconectamos la base de datos

?>