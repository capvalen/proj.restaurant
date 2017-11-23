<?php 
require("conectkarl.php");

$info = array('bs-callout-primary', 'bs-callout-success', 'bs-callout-warning');
$i=0; $color='';
$sql = mysqli_query($conection,"select tipDescripcion, tpNombreWeb from tipoproducto
where tpActivo=1 and tpDivBebidaCocina<>'divProdBebida'
group by tpdivbebidacocina
order by tipDescripcion asc");


while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	// echo $i;
	if($i>count($info)-1){ $i=0; }
	$color=$info[$i];/* echo $color;*/
	$i++;
	echo '<div class="panel bs-callout '.$color.' panel-sombreado" style="margin-bottom: 10px;">
			<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#'.$row['tpNombreWeb'].'" aria-expanded="false" aria-controls="'.$row['tpNombreWeb'].'"><h4 class="panel-title"><strong class="mayuscula"><i class="icofont icofont-chicken-fry"></i> '.$row['tipDescripcion'].'</strong></h4>
			</div>
			<div id="'.$row['tpNombreWeb'].'" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
				<div class="panel-body">
				</div>
			</div>
		</div>';
}
echo '<div class="panel bs-callout bs-callout-success panel-sombreado" style="margin-bottom: 10px;">
			<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#RegTodosBebidas" aria-expanded="false" aria-controls="RegTodosBebidas"><h4 class="panel-title"><strong class="mayuscula"><i class="icofont icofont-beer"></i> Bebidas</strong></h4>
			</div>
			<div id="RegTodosBebidas" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
				<div class="panel-body">
				</div>
			</div>
		</div>';
mysqli_close($conection); //desconectamos la base de datos

?>