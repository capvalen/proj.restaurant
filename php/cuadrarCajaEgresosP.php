<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call cuadrarCajaEgresos();");
$totalRow= mysqli_num_rows($sql);
$sumaIngr=0;
echo '<p>N° Egresos: '.$totalRow.'</p>';
$i=0;

if($totalRow==0){
	echo '<p > No se encontraron datos aún. </p>';
}else{
	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
	{
		$i++;
		$sumaIngr+=$row['cajaMontoTotal'];
		echo '<p > #'.$i.' <span class="mayuscula">'.$row['cajaDescripcion'].'</span> = S/.  '.number_format($row['cajaMontoTotal'],2). ' </p>';
		if($totalRow==$i){
			echo '<p > <strong>Total: S/. '.number_format(round($sumaIngr,1,PHP_ROUND_HALF_UP),2).'</strong> </p>';
		}
	}
}
mysqli_close($conection); //desconectamos la base de datos

?>