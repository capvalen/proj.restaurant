<?php 
require("conectkarl.php");
//echo "call listarPromos(".$_POST['idProd'].");";
$sql = mysqli_query($conection,"call listarPromos(".$_POST['idProd'].");");

$cuantosDebe = $_POST['debe'];

//echo "Debe: ".$cuantosDebe."<br>";
while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	$numCombos = intval($cuantosDebe/$row['promoCantidad']);
	if($numCombos>0){
		echo "<div class='divUnSoloProducto soyDscto row'>";
		echo "<h4 class='col-xs-9' style='padding-left:58px;'><span class='h4NombreProducto'>".ucwords($row['prodDescripcion'])."</span> x <span class='cantidadProducto'>".$numCombos."</span> Combos </h4><h5 class='col-xs-3 dscPacial'> S/ -<span class='montoDescontar'>". number_format($numCombos*$row['promoDescuento'],2)."</span></h5>";
		echo "</div>";
	}
	$cuantosDebe=intval($cuantosDebe%$row['promoCantidad']);
 //var_dump($row);
 //echo "<br>";

}
//echo "Cobrar Und. => ".$cuantosDebe;
mysqli_close($conection); //desconectamos la base de datos

?>