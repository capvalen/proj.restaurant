<?php 
require("conectkarl.php");

$info = array('bs-callout-primary', 'bs-callout-success', 'bs-callout-warning');
$i=0; $color='';
$sql = mysqli_query($conection,"select tipDescripcion, tpNombreWeb, count(*) as totalItems
from tipoproducto tp inner join producto p on p.idTipoProducto = tp.idTipoProducto
where tpActivo=1 and tpDivBebidaCocina<>'divProdBebida' and tpDivBebidaCocina<>'divAlmacen' and prodActivo = 1
group by tpdivbebidacocina
order by tipDescripcion asc");


while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	// echo $i;
	if($i>count($info)-1){ $i=0; }
	$color=$info[$i];/* echo $color;*/
	$i++;
	switch ($row['tipDescripcion']) {
		case 'Entradas': $icono = "icofont-sandwich"; break;
		case 'Especiales': $icono = "icofont-shrimp"; break;
		case 'Fondos': $icono = "icofont-restaurant"; break;
		case 'Postres': $icono = "icofont-ice-cream"; break;
		
		default:
			$icono = "icofont-chicken-fry";
			
			break;
	}
	?>
	<div class="noselect panel bs-callout <?= $color?> " style="margin-bottom: 10px;">
		<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?= $row['tpNombreWeb']; ?>" aria-expanded="false" aria-controls="'.$row['tpNombreWeb'].'"><h4 class="panel-title"><strong class="mayuscula"><i class="icofont <?= $icono; ?>"></i> <?= $row['tipDescripcion']; ?></strong> <span class="badge" style="float:right"><?= $row['totalItems']; ?></span></h4>
		</div>
		<div id="<?= $row['tpNombreWeb'];?>" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
			<div class="panel-body">
			</div>
		</div>
	</div>
	<?php
}

mysqli_free_result($sql);

$sqlBebida = mysqli_query($conection, "select  count(*) as totalItems
from tipoproducto tp inner join producto p on p.idTipoProducto = tp.idTipoProducto
where tpActivo=1  and tpDivBebidaCocina<>'divProdBebida' and prodActivo = 1
order by tipDescripcion asc");
$row = mysqli_fetch_array($sqlBebida, MYSQLI_ASSOC);

echo '<div class="noselect panel bs-callout bs-callout-success " style="margin-bottom: 10px;">
			<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#RegTodosBebidas" aria-expanded="false" aria-controls="RegTodosBebidas"><h4 class="panel-title"><strong class="mayuscula"><i class="icofont icofont-beer"></i> Bebidas</strong> <span class="badge" style="float:right">'.$row['totalItems'].'</span></h4>
			</div>
			<div id="RegTodosBebidas" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
				<div class="panel-body" style="padding-top: 20px!important;">
				</div>
			</div>
		</div>';
mysqli_close($conection); //desconectamos la base de datos

?>