<?php
require("php/conectkarl.php");
/*
Extraído de: https://github.com/PHPOffice/PHPExcel
*/

date_default_timezone_set("America/Lima");

/** Reportes de error */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Lima');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Incluir la librería */
require_once dirname(__FILE__) . '/PHPExcel/Classes/PHPExcel.php';

$styleThinBlackBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => 'FF000000'),
		),
	),
);

// crea un nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Agrega las propiedades al documento
$objPHPExcel->getProperties()->setCreator("Infocat Soluciones SAC")
							 ->setLastModifiedBy("Casa de barro")
							 ->setTitle("Resumen de ventas")
							 ->setDescription("Autogenerado por Info-Snack");


// agregando datos a la hoja 0

$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A1', 'REPORTE DE VENTAS POR MESA')
			->setCellValue('A2', 'De: '.$_POST['fechaIni'].' hasta '.$_POST['fechaFin'])
			->setCellValue('A4', 'DETALLE')
			->setCellValue('B4', 'TOTAL')
			->mergeCells('A1:B1')
			->mergeCells('A2:B2')
			->setTitle('Mesas');
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('A1:B4')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A4:B4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$objPHPExcel->getActiveSheet()->getStyle('A1:B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A4:B4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A4:B4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(27);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(27);

$consulta = $conection->prepare("call reporteCajaPorMesa('".$_POST['fechaIni']."', '".$_POST['fechaFin']."');");
$consulta->execute();
$resultado = $consulta->get_result();
$i=5;
$numLineas=$resultado->num_rows; $sumaCant=0;
while ($row = $resultado->fetch_array(MYSQLI_ASSOC))
{
	$sumaCant+=$row['dineroIngeso'];
	if($numLineas==$i-4){
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.($i+1), $sumaCant);
		$objPHPExcel->getActiveSheet()->getStyle('B'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$objPHPExcel->getActiveSheet()->getStyle('B'.($i+1))->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('B'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');

		$objPHPExcel->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_POST['hoy']);
		$objPHPExcel->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);

	}
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, 'Mesa '.$row['idMesa']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, $row['dineroIngeso']);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$i++;
}
$consulta->fetch();
$consulta->close();





// agrega una nueva hoja de calculo
$objPHPExcel->createSheet();
// asigna a que hoja debe de insertar
$objPHPExcel->setActiveSheetIndex(1);

// Renombrando la hoja activa
$objPHPExcel->getActiveSheet()
		->setCellValue('A1', 'REPORTE DE VENTAS POR PRODUCTO')
		->setCellValue('A2', 'De: '.$_POST['fechaIni'].' hasta '.$_POST['fechaFin'])
		->setCellValue('A4', 'CANT.')
		->setCellValue('B4', 'DETALLE')
		->setCellValue('C4', 'TOTAL')
		->mergeCells('A1:C1')
		->mergeCells('A2:C2')
		->setTitle('Productos');
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('A1:C4')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A4:C4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$objPHPExcel->getActiveSheet()->getStyle('A1:C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A4:C4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A4:C4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(7);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(27);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(27);

$consulta2 = $conection->prepare("call reporteCajaPorProducto('".$_POST['fechaIni']."', '".$_POST['fechaFin']."');");
$consulta2->execute();
$resultado2 = $consulta2->get_result();
$i=5;
$numLineas=$resultado2->num_rows; $sumaCant=0;
while ($row = $resultado2->fetch_array(MYSQLI_ASSOC))
{
	$sumaCant+=$row['dineroIngeso'];
	if($numLineas==$i-4){
		$objPHPExcel->setActiveSheetIndex(1)->setCellValue('C'.($i+1), $sumaCant);
		$objPHPExcel->getActiveSheet()->getStyle('C'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$objPHPExcel->getActiveSheet()->getStyle('C'.($i+1))->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('C'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
		$objPHPExcel->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_POST['hoy']);
		$objPHPExcel->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);
	}
	$objPHPExcel->setActiveSheetIndex(1)->setCellValue('A'.$i, $row['Qproduct']);
	$objPHPExcel->setActiveSheetIndex(1)->setCellValue('B'.$i, ucwords($row['prodDescripcion']));
	$objPHPExcel->setActiveSheetIndex(1)->setCellValue('C'.$i, $row['dineroIngeso']);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setIndent(1);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$i++;
}
$consulta2->fetch();
$consulta2->close();



// agrega una nueva hoja de calculo
$objPHPExcel->createSheet();
// asigna a que hoja debe de insertar
$objPHPExcel->setActiveSheetIndex(2);

// Renombrando la hoja activa
$objPHPExcel->getActiveSheet()
		->setCellValue('A1', 'REPORTE DE VENTAS POR BEBIDAS')
		->setCellValue('A2', 'De: '.$_POST['fechaIni'].' hasta '.$_POST['fechaFin'])
		->setCellValue('A4', 'CANT.')
		->setCellValue('B4', 'DETALLE')
		->setCellValue('C4', 'TOTAL')
		->mergeCells('A1:C1')
		->mergeCells('A2:C2')
		->setTitle('Bebidas');
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('A1:C4')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A4:C4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$objPHPExcel->getActiveSheet()->getStyle('A1:C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A4:C4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A4:C4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(7);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(27);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(27);

$consulta3 = $conection->prepare("call reporteCajaPorBebidas('".$_POST['fechaIni']."', '".$_POST['fechaFin']."');");
$consulta3->execute();
$resultado3 = $consulta3->get_result();
$i=5;
$numLineas=$resultado3->num_rows; $sumaCant=0;
while ($row = $resultado3->fetch_array(MYSQLI_ASSOC))
{
	$sumaCant+=$row['dineroIngeso'];
	if($numLineas==$i-4){
		$objPHPExcel->setActiveSheetIndex(2)->setCellValue('C'.($i+1), $sumaCant);
		$objPHPExcel->getActiveSheet()->getStyle('C'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$objPHPExcel->getActiveSheet()->getStyle('C'.($i+1))->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('C'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
		$objPHPExcel->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_POST['hoy']);
		$objPHPExcel->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);
	}
	$objPHPExcel->setActiveSheetIndex(2)->setCellValue('A'.$i, $row['Qproduct']);
	$objPHPExcel->setActiveSheetIndex(2)->setCellValue('B'.$i, ucwords($row['prodDescripcion']));
	$objPHPExcel->setActiveSheetIndex(2)->setCellValue('C'.$i, $row['dineroIngeso']);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setIndent(1);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$i++;
}
$consulta3->fetch();
$consulta3->close();



// agrega una nueva hoja de calculo
$objPHPExcel->createSheet();
// asigna a que hoja debe de insertar
$objPHPExcel->setActiveSheetIndex(3)
			->setCellValue('A1', 'REPORTE DE VENTAS POR USUARIO')
			->setCellValue('A2', 'De: '.$_POST['fechaIni'].' hasta '.$_POST['fechaFin'])
			->setCellValue('A4', 'DETALLE')
			->setCellValue('B4', 'TOTAL')
			->mergeCells('A1:B1')
			->mergeCells('A2:B2')
			->setTitle('Usuario');
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('A1:B4')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A4:B4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$objPHPExcel->getActiveSheet()->getStyle('A1:B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A4:B4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A4:B4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(31);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(27);

$consulta4 = $conection->prepare("call reporteCajaPorUsuario('".$_POST['fechaIni']."', '".$_POST['fechaFin']."');");
$consulta4->execute();
$resultado4 = $consulta4->get_result();
$i=5;
$numLineas=$resultado4->num_rows; $sumaCant=0;
while ($row = $resultado4->fetch_array(MYSQLI_ASSOC))
{
	$sumaCant+=$row['dineroIngeso'];
	if($numLineas==$i-4){
		$objPHPExcel->getActiveSheet()->setCellValue('B'.($i+1), $sumaCant);
		$objPHPExcel->getActiveSheet()->getStyle('B'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$objPHPExcel->getActiveSheet()->getStyle('B'.($i+1))->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('B'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
		$objPHPExcel->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_POST['hoy']);
		$objPHPExcel->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);
	}
	$objPHPExcel->getActiveSheet()->setCellValue('A'.$i, ucwords($row['Nombres']));
	$objPHPExcel->getActiveSheet()->setCellValue('B'.$i, $row['dineroIngeso']);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setIndent(1);
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$i++;
}
$consulta4->fetch();
$consulta4->close();



// agrega una nueva hoja de calculo
$objPHPExcel->createSheet();
// asigna a que hoja debe de insertar
$objPHPExcel->setActiveSheetIndex(4)
			->setCellValue('A1', 'REPORTE DE VENTAS POR DETALLADO')
			->setCellValue('A2', 'De: '.$_POST['fechaIni'].' hasta '.$_POST['fechaFin'])
			->setCellValue('A4', 'MESA')
			->setCellValue('B4', 'CANT.')
			->setCellValue('C4', 'DETALLE')
			->setCellValue('D4', 'PRECIO')
			->setCellValue('E4', 'HORA')
			->setCellValue('F4', 'TOTAL')
			->mergeCells('A1:F1')
			->mergeCells('A2:F2')
			->setTitle('Detallado');
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$objPHPExcel->getActiveSheet()->getStyle('A1:F4')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A4:F4')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$objPHPExcel->getActiveSheet()->getStyle('A1:F4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A4:F4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A4:F4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(7);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(17);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(17);


$consulta5 = $conection->prepare("call reporteCajaPorDetalle('".$_POST['fechaIni']."', '".$_POST['fechaFin']."');");
$consulta5->execute();
$resultado5 = $consulta5->get_result();
$i=5;
$numLineas=$resultado5->num_rows; $sumaCant=0;
$repetido=0;
while ($row = $resultado5->fetch_array(MYSQLI_ASSOC))
{
	if($i==5){
		$objPHPExcel->setActiveSheetIndex(4)->setCellValue('A'.$i, 'Mesa '.$row['idMesa']);
		$objPHPExcel->setActiveSheetIndex(4)->setCellValue('B'.$i, $row['pedCantidad']);
		$objPHPExcel->setActiveSheetIndex(4)->setCellValue('C'.$i, ucwords($row['prodDescripcion']));
		$objPHPExcel->setActiveSheetIndex(4)->setCellValue('D'.$i, $row['pedPrecio']);
		$objPHPExcel->setActiveSheetIndex(4)->setCellValue('E'.$i, $row['Hora']);
		$objPHPExcel->setActiveSheetIndex(4)->setCellValue('F'.$i, $row['cajaMontoTotal']);
	}else{

		if($row['idPedido']==$idAnterior){
			$repetido++;
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('B'.$i, $row['pedCantidad']);
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('C'.$i, ucwords($row['prodDescripcion']));
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('D'.$i, $row['pedPrecio']);
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('E'.$i, $row['Hora']);
		}
		else{
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('A'.$i, 'Mesa '.$row['idMesa']);
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('B'.$i, $row['pedCantidad']);
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('C'.$i, ucwords($row['prodDescripcion']));
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('D'.$i, $row['pedPrecio']);
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('E'.$i, $row['Hora']);
			$objPHPExcel->setActiveSheetIndex(4)->setCellValue('F'.$i, $row['cajaMontoTotal']);

			if($repetido<>0){
				$mezclar1='A'.($i-$repetido).':A'.$i;
				$mezclar2='F'.($i-$repetido).':F'.$i;
				$mezclar3='E'.($i-$repetido).':E'.$i;
				$objPHPExcel->setActiveSheetIndex(4)->setCellValue('A'.($i-$repetido), 'Mesa '.$row['idMesa']);
				$objPHPExcel->setActiveSheetIndex(4)->setCellValue('F'.($i-$repetido), $row['cajaMontoTotal']);
				$objPHPExcel->setActiveSheetIndex(4)->setCellValue('F'.($i), '');
				$objPHPExcel->getActiveSheet()->mergeCells($mezclar1);
				$objPHPExcel->getActiveSheet()->mergeCells($mezclar2);
				$objPHPExcel->getActiveSheet()->mergeCells($mezclar3);
			}
			$repetido=0;
			
		}


	}
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setIndent(1);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setIndent(1);
	$objPHPExcel->getActiveSheet()->getStyle('D'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$objPHPExcel->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('E'.$i)->getAlignment()->setIndent(1);
	$objPHPExcel->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('F'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$objPHPExcel->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$objPHPExcel->getActiveSheet()->getStyle('A')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$objPHPExcel->getActiveSheet()->getStyle('E')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$objPHPExcel->getActiveSheet()->getStyle('F')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

	$sumaCant+=$row['cajaMontoTotal'];
	if($numLineas==$i-4){
		$objPHPExcel->getActiveSheet()->setCellValue('F'.($i+1), '=SUM(F5:F'.$i.')');
		$objPHPExcel->getActiveSheet()->getStyle('F'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$objPHPExcel->getActiveSheet()->getStyle('F'.($i+1))->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('F'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
		$objPHPExcel->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_POST['hoy']);
		$objPHPExcel->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);
	}
	$idAnterior=$row['idPedido'];
	$i++;
}
$consulta5->fetch();
$consulta5->close();

// elije cual hoja sera la que se habra por defecto
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="'.$_POST['nombreArchivo'].'.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');



$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
