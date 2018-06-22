<?php 
require("conectkarl.php");


echo "UPDATE `producto` SET `prodActivo`=1 WHERE `idProducto` = {$_POST['idProd']}";
$sql = mysqli_query($conection,"UPDATE `producto` SET `prodActivo`=1 WHERE `idProducto` = {$_POST['idProd']}");

echo true;

mysqli_close($conection); //desconectamos la base de datos
?>