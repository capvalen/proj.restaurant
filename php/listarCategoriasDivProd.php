<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarCategorias();");

echo '<ul class="nav nav-tabs">';
while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	echo '<li ><a href="#'.$row['tpDivBebidaCocina'].'" data-toggle="tab" class="mayuscula">'.$row['tipDescripcion'].'</a></li>';

}
echo '</ul><div class="tab-content">';
mysqli_data_seek( $sql, 0 );

while($row2 = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	echo '<div class="tab-pane fade container-fluid" id="'.$row2['tpDivBebidaCocina'].'">
			<!--Inicio de pestaña -->
			<div class="row"><strong>
					<div class="col-xs-2">Categoría</div>
					<div class="col-xs-5">Producto</div>
					<div class="col-xs-2">Precio</div>
					<div class="col-xs-2">Stock</div>
					<div class="col-xs-1">@</div></strong>
				</div>
			<!--Fin de pestaña -->
			</div>';

}
echo '</div>';
mysqli_close($conection); //desconectamos la base de datos

?>