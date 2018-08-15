<?php 
require("conectkarl.php");
//echo "call listarPromos(".$_POST['idProd'].");";
$sql = mysqli_query($esclavo,"call listarPromos(".$_POST['idProd'].");");

$cuantosDebe = $_POST['debe'];

//echo "Debe: ".$cuantosDebe."<br>";
while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
{
	$numCombos = intval($cuantosDebe/$row['promoCantidad']);
	if($numCombos>0){
    $sqlDscto = "INSERT INTO `pedidodetalle`(`idPedidoDetalle`, `idProducto`, `pedPrecio`, `pedCantidad`, `pedSubtotal`, `pedNota`)
    VALUES ({$_POST['pedid']},{$_POST['idProd']},-".number_format($numCombos*$row['promoDescuento'],2).",{$numCombos},-".number_format($numCombos*$row['promoDescuento'],2).",'Combo de ".$row['promoCantidad']." unds.');";
    $sqlPromo = $conection->query($sqlDscto);
    
    
    //echo "S/ -".number_format($numCombos*$row['promoDescuento'],2);
	}
	$cuantosDebe=intval($cuantosDebe%$row['promoCantidad']);
 //var_dump($row);
 //echo "<br>";

}
//echo "Cobrar Und. => ".$cuantosDebe;
mysqli_close($esclavo); //desconectamos la base de datos

?>