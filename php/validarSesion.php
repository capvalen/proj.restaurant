<?php 
ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");
session_start();
header('Content-Type: text/html; charset=utf8');
include 'conectkarl.php';

//echo "select * from  usuario u where usuNick = '".$_POST['user']."' and usuPass='".md5($_POST['pws'])."' and usuActivo=1;";
$log = mysqli_query($conection,"select * from  usuario u where usuNick = '".$_POST['user']."' and usuPass='".md5($_POST['pws'])."' and usuActivo=1;");

$row = mysqli_fetch_array($log, MYSQLI_ASSOC);
if ($row['idUsuario']>=1){
	$_SESSION['Atiende']=$row['usuNombres'].', '.$row['usuApellidos'];
	$_SESSION['Power']=$row['usuPoder'];
	$_SESSION['idUsuario']=$row['idUsuario'];
	//echo "Welcome guy!";
	echo $row['usuPoder'];
}

/* liberar la serie de resultados */
mysqli_free_result($log);

/* cerrar la conexión */
mysqli_close($conection);

 ?>