<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarNiveles();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

echo '<option class="optProducto mayuscula" data-tokens="'.$row['idPoder'].'">'.$row['Descripcion'].'</option>';

}
mysqli_close($conection); //desconectamos la base de datos

?>