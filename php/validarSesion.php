<?php 
ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");
session_start();
header('Content-Type: text/html; charset=utf8');
include 'conectkarl.php';

$local='/';
$expira=time()+60*60*8; //cookie para 3 horas

//echo "select * from  usuario u where usuNick = '".$_POST['user']."' and usuPass='".md5($_POST['pws'])."' and usuActivo=1;";
$log = mysqli_query($conection,"SELECT * from  usuario u where usuNick = '".$_POST['user']."' and usuPass='".md5($_POST['pws'])."' and usuActivo=1;");

$row = mysqli_fetch_array($log, MYSQLI_ASSOC);
if ($row['idUsuario']>=1){


	$sqlConf = "SELECT `idConf`, `confVariable`, `confValor` FROM `configuracion` where 1;";
	//echo $sqlConf;
	$resultadoConf=$esclavo->query($sqlConf);
	while($rowConf=$resultadoConf->fetch_assoc()){
		setcookie($rowConf['confVariable'], $rowConf['confValor'], $expira, $local);
	}


	$_SESSION['Atiende']=$row['usuNombres'].', '.$row['usuApellidos'];
	$_SESSION['Power']=$row['usuPoder'];
	$_SESSION['idUsuario']=$row['idUsuario'];
	setcookie('ckidUsuario', $row['idUsuario'], $expira, $local);
	//echo "Welcome guy!";
	echo $row['usuPoder'];
}



	
/* liberar la serie de resultados */
mysqli_free_result($log);

/* cerrar la conexión */
mysqli_close($conection);

?>