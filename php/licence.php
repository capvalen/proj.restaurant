<?php 
$hoy=date('Y-m-d');
$fechaInicial = date('Y-m-d', strtotime("2018-06-19"));
$fechaFinal = date('Y-m-d', strtotime("2018-09-30"));

if (($hoy >= $fechaInicial) && ( $hoy <= $fechaFinal))
{
	$_SESSION['licencia']='Ok';
}else{
	$_SESSION['licencia']='no va más';
}
?>