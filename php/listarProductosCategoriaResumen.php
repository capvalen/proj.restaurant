<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarProductosCategoria();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

echo '<p class="'.$row['tpNombreWeb'].'">'.$row['tipDescripcion'].' <span class="stockPlato">(<span class="platoResValor">0</span>)</span></p>';

}
mysqli_close($conection); //desconectamos la base de datos

?>