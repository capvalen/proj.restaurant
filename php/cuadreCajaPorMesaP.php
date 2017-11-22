<?php 
require("conectkarl.php");

$sql = mysqli_query($conection,"call cuadreCajaPorMesa();");
$totalRow= mysqli_num_rows($sql);
$sumaIngr=0;
echo '<p>N° Ventas: '.$totalRow.'</p>';
$i=0;

if($totalRow==0){
	echo '<p > No se encontraron datos aún. </p>';
}else{
	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
	{
		$i++;
		$sumaIngr+=$row['dineroIngeso'];
		echo '<p > Mesa #'.$row['idMesa']. ': '.$row['modDescripcion'].' = S/.  '.$row['dineroIngeso']. ' </p>';
		if($totalRow==$i){
			echo '<p > <strong>Total: S/. '.number_format(round($sumaIngr,1,PHP_ROUND_HALF_UP),2).'</strong> </p>';
		}
	}
}
mysqli_close($conection); //desconectamos la base de datos

?>