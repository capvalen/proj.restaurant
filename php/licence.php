<?php 
$hoy=date('Y-m-d');
$fechaInicial = date('Y-m-d', strtotime("2017-11-16"));
$fechaFinal = date('Y-m-d', strtotime("2018-01-04"));

if (($hoy >= $fechaInicial) && ( $hoy <= $fechaFinal))
{
	$_SESSION['licencia']='Ok';
}else{
	$_SESSION['licencia']='no va más';
}
?>