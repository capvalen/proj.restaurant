<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarCategoriasGrupal();");

while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{

echo '<p class="'.$row['tpNombreWeb'].'">'.$row['tipDescripcion'].' <span class="stockPlato">(<span class="platoResValor">0</span>)</span></p>';

}
echo '<p class="todasBebidas">Bebidas <span class="stockPlato">(<span class="platoResValor">0</span>)</span></p>';
mysqli_close($conection); //desconectamos la base de datos

?>