<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call cuadreCajaPorMesa();");
$totalRow= mysqli_num_rows($sql);
$sumaVisa=0;
$sumaMaster=0;
$sumaIngr=0;
$sumaEfectivo=0;
echo '<p>N° Ventas: '.$totalRow.'</p>';
$i=0;

if($totalRow==0){
	echo '<p > No se encontraron datos aún. </p>';
}else{
	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
	{
		$i++;
		$sumaIngr+=$row['dineroIngeso'];
		
		if($row['idModalidad']==2){
			$sumaVisa+=$row['cobraMontoTarjeta'];
			$sumaEfectivo+=$row['cajaCobraMonto'];
			echo '<p > <strong>Mesa #'.$row['idMesa'].':</strong> <small>S/. '.$row['dineroIngeso']. '</small>
				<ul>
					<li>Efectivo = S/.  '.number_format(round($row['cajaCobraMonto'],1,PHP_ROUND_HALF_UP),2). '</li>
					<li>'.$row['modDescripcion'].' = S/.  '.number_format(round($row['cobraMontoTarjeta'],1,PHP_ROUND_HALF_UP),2). '</li>
				</ul>
			 </p>';
		}
		if($row['idModalidad']==3){
			$sumaMaster+=$row['cobraMontoTarjeta'];
			$sumaEfectivo+=$row['cajaCobraMonto'];
			echo '<p > <strong>Mesa #'.$row['idMesa'].':</strong> <small>S/. '.$row['dineroIngeso']. '</small>
				<ul>
					<li>Efectivo = S/.  '.number_format(round($row['cajaCobraMonto'],1,PHP_ROUND_HALF_UP),2). '</li>
					<li>'.$row['modDescripcion'].' = S/.  '.number_format(round($row['cobraMontoTarjeta'],1,PHP_ROUND_HALF_UP),2). '</li>
				</ul>
			 </p>';
		}
		if($row['idModalidad']==1){
			$sumaEfectivo+=$row['cajaCobraMonto'];
			echo '<p > <strong>Mesa #'.$row['idMesa']. ':</strong> 
				<ul>
					<li>'.$row['modDescripcion'].' = S/.  '.number_format(round($row['cajaCobraMonto'],1,PHP_ROUND_HALF_UP),2). '</li>
				</ul>
				</p>';
		}
		if($totalRow==$i){
			echo '<p> <strong>Suma Mastercard: S/. '.number_format(round($sumaMaster,1,PHP_ROUND_HALF_UP),2).'</span></strong> </p>';
			echo '<p> <strong>Suma Visa: S/. '.number_format(round($sumaVisa,1,PHP_ROUND_HALF_UP),2).'</span></strong> </p>';
			echo '<p> <strong>Suma Efectivo: S/. '.number_format(round($sumaEfectivo,1,PHP_ROUND_HALF_UP),2).'</span></strong> </p>';
			/*echo '<hr>';
			echo '<p> <strong>Total: S/. '.number_format(round($sumaIngr,1,PHP_ROUND_HALF_UP),2).'</span></strong> </p>';*/

			echo '<span class="hidden" id="spanCuadreMaster">'.number_format(round($sumaMaster,1,PHP_ROUND_HALF_UP),2).'</span>';
			echo '<span class="hidden" id="spanCuadreVisa">'.number_format(round($sumaVisa,1,PHP_ROUND_HALF_UP),2).'</span>';
			echo '<span class="hidden" id="spanCuadreEfec">'.number_format(round($sumaEfectivo,1,PHP_ROUND_HALF_UP),2).'</span>';
			echo '<span class="hidden" id="spanCuadreTotal">'.number_format(round($sumaIngr,1,PHP_ROUND_HALF_UP),2).'</span>';
		}
	}
}
mysqli_close($conection); //desconectamos la base de datos

?>