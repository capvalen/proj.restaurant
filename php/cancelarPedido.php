<?php 
require("conectkarl.php");



$sql = mysqli_query($conection,"call cancelarPedido(".$_POST['mesa'].", ".$_POST['idUser']." );");
$i=0;
// if (!$sql) { ////codigo para ver donde esta el error
//     printf("Error: %s\n", mysqli_error($conection));
//     exit();
// }
while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	echo $row['mesa'];
}
mysqli_close($conection); //desconectamos la base de datos

?>