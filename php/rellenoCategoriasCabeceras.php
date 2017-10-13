<?php 
require("conectkarl.php");


$sql = mysqli_query($conection,"select tipDescripcion, tpNombreWeb from tipoproducto where tpActivo=1;");


while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	echo '<div class="panel bs-callout bs-callout-primary panel-sombreado" style="margin-bottom: 10px;">
			<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#'.$row['tpNombreWeb'].'" aria-expanded="false" aria-controls="'.$row['tpNombreWeb'].'"><h4 class="panel-title"><strong class="mayusculas"><i class="icofont icofont-chicken-fry"></i> '.$row['tipDescripcion'].'</strong></h4>
			</div>
			<div id="'.$row['tpNombreWeb'].'" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
				<div class="panel-body">
				</div>
			</div>
		</div>';
}
mysqli_close($conection); //desconectamos la base de datos

?>