<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call listarCabecerasCategorias();");

echo '<ul class="nav nav-tabs">';
while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	echo '<li ><a href="#'.$row['tpdivbebidacocina'].'" data-toggle="tab" class="mayuscula">'.$row['tipDescripcion'].'</a></li>';

}
echo '</ul><div class="tab-content">';
mysqli_data_seek( $sql, 0 );

while($row2 = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{?>
	<div class="tab-pane fade container-fluid tabElementos" id="<?= $row2['tpdivbebidacocina'] ?>">
		<!--Inicio de pestaña -->
		<?php if($row2['tpdivbebidacocina']=='divProdBebida'):
			$sqlCocina = $cadena->query("SELECT * FROM `tipoproducto` where tpDivBebidaCocina = 'divProdBebida' and tpActivo =1");
			echo '<ul class="nav nav-tabs" id="ulSubCocina">';
			while($rowCocina =$sqlCocina->fetch_array(MYSQLI_ASSOC) ){?>
				  <li ><a data-toggle="tab" class="mayuscula" href="#<?= $rowCocina['tpNombreWeb']; ?>"><?= $rowCocina['tipDescripcion']; ?></a></li>
		<?php }
		echo "</ul>";
		$sqlCocina->data_seek(0);
			while($rowSubCocina =$sqlCocina->fetch_array(MYSQLI_ASSOC)){?>
				<div class="tab-pane fade container-fluid " id="<?= $rowSubCocina['tpNombreWeb'] ?>">
					<div class="row"><strong>
						<div class="col-xs-3">Categoría</div>
						<div class="col-xs-4">Producto</div>
						<div class="col-xs-2">Precio</div>
						<div class="col-xs-2">Stock</div>
						<div class="col-xs-1">@</div></strong>
					</div>
				</div>
			<?php  }
		else :?>
			<div class="row"><strong>
				<div class="col-xs-3">Categoría</div>
				<div class="col-xs-4">Producto</div>
				<div class="col-xs-2">Precio</div>
				<div class="col-xs-2">Stock</div>
				<div class="col-xs-1">@</div></strong>
			</div>
		<?php endif; ?>

		
		<!--Fin de pestaña -->
		</div>

<?php  }
echo '</div>';
mysqli_close($conection); //desconectamos la base de datos

?>