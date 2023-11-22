<?php
require("./conectkarl.php");
require('./../vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$styleThinBlackBorderOutline = array(
	'borders' => array(
		'outline' => array(
			'style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
			'color' => array('argb' => 'FF000000'),
		),
	),
);

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'REPORTE DE VENTAS POR MESA');
$sheet->setCellValue('A2', 'De: '.$_GET['fechaIni'].' hasta '.$_GET['fechaFin']);
$sheet->setCellValue('A4', 'DETALLE');
$sheet->setCellValue('B4', 'TOTAL');
$sheet->mergeCells('A1:B1');
$sheet->mergeCells('A2:B2');
$sheet->setTitle('Mesas');

$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1:B4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A4:B4')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('A1:B4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('A4:B4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
$spreadsheet->getActiveSheet()->getStyle('A4:B4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(27);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(27);

$consulta = $conection->prepare("call reporteCajaPorMesa('".$_GET['fechaIni']."', '".$_GET['fechaFin']."');");
$consulta->execute();
$resultado = $consulta->get_result();
$i=5;
$numLineas=$resultado->num_rows; $sumaCant=0;
while ($row = $resultado->fetch_array(MYSQLI_ASSOC)){
	$sumaCant+=$row['dineroIngeso'];
	if($numLineas==$i-4){
		$spreadsheet->setActiveSheetIndex(0)->setCellValue('B'.($i+1), $sumaCant);
		$spreadsheet->getActiveSheet()->getStyle('B'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$spreadsheet->getActiveSheet()->getStyle('B'.($i+1))->getFont()->setBold(true);
		$spreadsheet->getActiveSheet()->getStyle('B'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');

		$spreadsheet->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_GET['hoy']);
		$spreadsheet->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);

	}
	$spreadsheet->setActiveSheetIndex(0)->setCellValue('A'.$i, 'Mesa '.$row['idMesa']);
	$spreadsheet->setActiveSheetIndex(0)->setCellValue('B'.$i, $row['dineroIngeso']);
	$spreadsheet->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
	$spreadsheet->getActiveSheet()->getStyle('B'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$spreadsheet->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$i++;
}
$consulta->next_result();


$spreadsheet->createSheet();
$spreadsheet->setActiveSheetIndex(1);

$spreadsheet->getActiveSheet()
		->setCellValue('A1', 'REPORTE DE VENTAS POR PRODUCTO')
		->setCellValue('A2', 'De: '.$_GET['fechaIni'].' hasta '.$_GET['fechaFin'])
		->setCellValue('A4', 'CANT.')
		->setCellValue('B4', 'DETALLE')
		->setCellValue('C4', 'TOTAL')
		->mergeCells('A1:C1')
		->mergeCells('A2:C2')
		->setTitle('Productos');
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1:C4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('A1:C4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(7);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(27);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(27);

$consulta2 = $conection->prepare("call reporteCajaPorProducto('".$_GET['fechaIni']."', '".$_GET['fechaFin']."');");
$consulta2->execute();
$resultado2 = $consulta2->get_result();
$i=5;
$numLineas=$resultado2->num_rows; $sumaCant=0;
while ($row = $resultado2->fetch_array(MYSQLI_ASSOC))
{
	$sumaCant+=$row['dineroIngeso'];
	if($numLineas==$i-4){
		$spreadsheet->setActiveSheetIndex(1)->setCellValue('C'.($i+1), $sumaCant);
		$spreadsheet->getActiveSheet()->getStyle('C'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$spreadsheet->getActiveSheet()->getStyle('C'.($i+1))->getFont()->setBold(true);
		$spreadsheet->getActiveSheet()->getStyle('C'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
		$spreadsheet->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_GET['hoy']);
		$spreadsheet->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);
	}
	$spreadsheet->setActiveSheetIndex(1)->setCellValue('A'.$i, $row['Qproduct']);
	$spreadsheet->setActiveSheetIndex(1)->setCellValue('B'.$i, ucwords($row['prodDescripcion']));
	$spreadsheet->setActiveSheetIndex(1)->setCellValue('C'.$i, $row['dineroIngeso']);
	$spreadsheet->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setIndent(1);
	$spreadsheet->getActiveSheet()->getStyle('C'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$spreadsheet->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$i++;
}
$consulta2->next_result();




// agrega una nueva hoja de calculo
$spreadsheet->createSheet();
// asigna a que hoja debe de insertar
$spreadsheet->setActiveSheetIndex(2);

// Renombrando la hoja activa
$spreadsheet->getActiveSheet()
		->setCellValue('A1', 'REPORTE DE VENTAS POR BEBIDAS')
		->setCellValue('A2', 'De: '.$_GET['fechaIni'].' hasta '.$_GET['fechaFin'])
		->setCellValue('A4', 'CANT.')
		->setCellValue('B4', 'DETALLE')
		->setCellValue('C4', 'TOTAL')
		->mergeCells('A1:C1')
		->mergeCells('A2:C2')
		->setTitle('Bebidas');
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1:C4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('A1:C4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(7);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(27);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(27);

$consulta3 = $conection->prepare("call reporteCajaPorBebidas('".$_GET['fechaIni']."', '".$_GET['fechaFin']."');");
$consulta3->execute();
$resultado3 = $consulta3->get_result();
$i=5;
$numLineas=$resultado3->num_rows; $sumaCant=0;
while ($row = $resultado3->fetch_array(MYSQLI_ASSOC))
{
	$sumaCant+=$row['dineroIngeso'];
	if($numLineas==$i-4){
		$spreadsheet->setActiveSheetIndex(2)->setCellValue('C'.($i+1), $sumaCant);
		$spreadsheet->getActiveSheet()->getStyle('C'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$spreadsheet->getActiveSheet()->getStyle('C'.($i+1))->getFont()->setBold(true);
		$spreadsheet->getActiveSheet()->getStyle('C'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
		$spreadsheet->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_GET['hoy']);
		$spreadsheet->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);
	}
	$spreadsheet->setActiveSheetIndex(2)->setCellValue('A'.$i, $row['Qproduct']);
	$spreadsheet->setActiveSheetIndex(2)->setCellValue('B'.$i, ucwords($row['prodDescripcion']));
	$spreadsheet->setActiveSheetIndex(2)->setCellValue('C'.$i, $row['dineroIngeso']);
	$spreadsheet->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('B'.$i)->getAlignment()->setIndent(1);
	$spreadsheet->getActiveSheet()->getStyle('C'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$spreadsheet->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$i++;
}
$consulta3->next_result();



// agrega una nueva hoja de calculo
$spreadsheet->createSheet();
// asigna a que hoja debe de insertar
$spreadsheet->setActiveSheetIndex(3)
			->setCellValue('A1', 'REPORTE DE VENTAS POR USUARIO')
			->setCellValue('A2', 'De: '.$_GET['fechaIni'].' hasta '.$_GET['fechaFin'])
			->setCellValue('A4', 'DETALLE')
			->setCellValue('B4', 'TOTAL')
			->mergeCells('A1:B1')
			->mergeCells('A2:B2')
			->setTitle('Usuario');
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1:B4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A4:B4')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('A1:B4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('A4:B4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
$spreadsheet->getActiveSheet()->getStyle('A4:B4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(31);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(27);

$consulta4 = $conection->prepare("call reporteCajaPorUsuario('".$_GET['fechaIni']."', '".$_GET['fechaFin']."');");
$consulta4->execute();
$resultado4 = $consulta4->get_result();
$i=5;
$numLineas=$resultado4->num_rows; $sumaCant=0;
while ($row = $resultado4->fetch_array(MYSQLI_ASSOC))
{
	$sumaCant+=$row['dineroIngeso'];
	if($numLineas==$i-4){
		$spreadsheet->getActiveSheet()->setCellValue('B'.($i+1), $sumaCant);
		$spreadsheet->getActiveSheet()->getStyle('B'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$spreadsheet->getActiveSheet()->getStyle('B'.($i+1))->getFont()->setBold(true);
		$spreadsheet->getActiveSheet()->getStyle('B'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
		$spreadsheet->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_GET['hoy']);
		$spreadsheet->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);
	}
	$spreadsheet->getActiveSheet()->setCellValue('A'.$i, ucwords($row['Nombres']));
	$spreadsheet->getActiveSheet()->setCellValue('B'.$i, $row['dineroIngeso']);
	$spreadsheet->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setIndent(1);
	$spreadsheet->getActiveSheet()->getStyle('B'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$spreadsheet->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$i++;
}
$consulta4->next_result();



// agrega una nueva hoja de calculo
$spreadsheet->createSheet();
// asigna a que hoja debe de insertar
$spreadsheet->setActiveSheetIndex(4)
			->setCellValue('A1', 'REPORTE DE VENTAS POR DETALLADO')
			->setCellValue('A2', 'De: '.$_GET['fechaIni'].' hasta '.$_GET['fechaFin'])
			->setCellValue('A4', 'MESA')
			->setCellValue('B4', 'CANT.')
			->setCellValue('C4', 'DETALLE')
			->setCellValue('D4', 'PRECIO')
			->setCellValue('E4', 'PRECIO')
			->setCellValue('F4', 'HORA')
			->setCellValue('G4', 'TOTAL')
			->mergeCells('A1:G1')
			->mergeCells('A2:G2')
			->setTitle('Detallado');
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1:G4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A4:G4')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('A1:G4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('A4:G4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
$spreadsheet->getActiveSheet()->getStyle('A4:G4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(13);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(7);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(17);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(12);
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(17);
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(17);


$consulta5 = $conection->prepare("call reporteCajaPorDetalle('".$_GET['fechaIni']."', '".$_GET['fechaFin']."');");
$consulta5->execute();
$resultado5 = $consulta5->get_result();
$i=5;
$numLineas=$resultado5->num_rows; $sumaCant=0;
$repetido=0;
while ($row = $resultado5->fetch_array(MYSQLI_ASSOC)){
	if($i==5){
		$idAnterior=$row['idPedido'];
		$spreadsheet->setActiveSheetIndex(4)->setCellValue('A'.$i, 'Mesa '.$row['idMesa']);
		$spreadsheet->getActiveSheet()->getStyle('A'.$i)->getFont()->getColor()->applyFromArray(array('rgb' => 'E26B0A'));
		$spreadsheet->setActiveSheetIndex(4)->setCellValue('B'.$i, $row['pedCantidad']);
		$spreadsheet->setActiveSheetIndex(4)->setCellValue('C'.$i, ucwords($row['prodDescripcion']));
		$spreadsheet->setActiveSheetIndex(4)->setCellValue('D'.$i, $row['pedPrecio']);
		$spreadsheet->setActiveSheetIndex(4)->setCellValue('E'.$i, $row['pedSubtotal']);
		$spreadsheet->setActiveSheetIndex(4)->setCellValue('F'.$i, $row['Hora']);
		$spreadsheet->setActiveSheetIndex(4)->setCellValue('G'.$i, $row['cajaMontoTotal']);
	}else{
		$nuevo=$row['idPedido'];
		if($idAnterior==$nuevo){
			$repetido++;
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('B'.$i, $row['pedCantidad']);
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('C'.$i, ucwords($row['prodDescripcion']) );
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('D'.$i, $row['pedPrecio']);
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('E'.$i, $row['pedSubtotal']);
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('F'.$i, $row['Hora']);
		}
		else{

			// if($repetido>0){
			// 	$mezclar1='A'.($i-$repetido).':A'.$i;
			// 	$mezclar2='F'.($i-$repetido).':F'.$i;
			// 	$mezclar3='E'.($i-$repetido).':E'.$i;
			// 	$spreadsheet->setActiveSheetIndex(4)->setCellValue('A'.($i-$repetido), 'Mesa '.$row['idMesa']);
			// 	$spreadsheet->setActiveSheetIndex(4)->setCellValue('F'.($i-$repetido), $row['cajaMontoTotal']);
			// 	$spreadsheet->setActiveSheetIndex(4)->setCellValue('F'.($i), '');
			// 	$spreadsheet->getActiveSheet()->mergeCells($mezclar1);
			// 	$spreadsheet->getActiveSheet()->mergeCells($mezclar2);
			// 	$spreadsheet->getActiveSheet()->mergeCells($mezclar3);
			// }

			$idAnterior=$nuevo;
			$repetido =0;
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('A'.$i, 'Mesa '.$row['idMesa']);
			$spreadsheet->getActiveSheet()->getStyle('A'.$i)->getFont()->getColor()->applyFromArray(array('rgb' => 'E26B0A'));
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('B'.$i, $row['pedCantidad']);
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('C'.$i, ucwords($row['prodDescripcion']) );
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('D'.$i, $row['pedPrecio']);
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('E'.$i, $row['pedSubtotal']);
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('F'.$i, $row['Hora']);
			$spreadsheet->setActiveSheetIndex(4)->setCellValue('G'.$i, $row['cajaMontoTotal']);	
		}
	}
	if($row['pedSubtotal']>0){
		$spreadsheet->getActiveSheet()->getStyle('D'.$i)->getFont()->getColor()->applyFromArray(array('rgb' => '03229D'));
		$spreadsheet->getActiveSheet()->getStyle('E'.$i)->getFont()->getColor()->applyFromArray(array('rgb' => '03229D'));
	}else{
		$spreadsheet->getActiveSheet()->getStyle('D'.$i)->getFont()->getColor()->applyFromArray(array('rgb' => 'E10531'));
		$spreadsheet->getActiveSheet()->getStyle('E'.$i)->getFont()->getColor()->applyFromArray(array('rgb' => 'E10531'));
	}
	
	$spreadsheet->getActiveSheet()->getStyle('A'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('B'.$i)->applyFromArray($styleThinBlackBorderOutline);
	
	$spreadsheet->getActiveSheet()->getStyle('C'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setIndent(1);
	$spreadsheet->getActiveSheet()->getStyle('C'.$i)->getAlignment()->setIndent(1);
	$spreadsheet->getActiveSheet()->getStyle('D'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$spreadsheet->getActiveSheet()->getStyle('D'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('E'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$spreadsheet->getActiveSheet()->getStyle('E'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('F'.$i)->getAlignment()->setIndent(1);
	$spreadsheet->getActiveSheet()->getStyle('F'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('G'.$i)->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
	$spreadsheet->getActiveSheet()->getStyle('G'.$i)->applyFromArray($styleThinBlackBorderOutline);
	$spreadsheet->getActiveSheet()->getStyle('A')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
	$spreadsheet->getActiveSheet()->getStyle('F')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
	$spreadsheet->getActiveSheet()->getStyle('G')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);

	$sumaCant+=$row['cajaMontoTotal'];
	
	if($numLineas==$i-4){
	


		$spreadsheet->getActiveSheet()->setCellValue('G'.($i+1), '=SUM(G5:F'.$i.')');
		$spreadsheet->getActiveSheet()->getStyle('G'.($i+1))->applyFromArray($styleThinBlackBorderOutline);
		$spreadsheet->getActiveSheet()->getStyle('G'.($i+1))->getFont()->setBold(true);
		$spreadsheet->getActiveSheet()->getStyle('G'.($i+1))->getNumberFormat()->setFormatCode('_("$"* #,##0.00_);_("$"* \(#,##0.00\);_("$"* "-"??_);_(@_)');
		$spreadsheet->getActiveSheet()->setCellValue('A'.($i+3), 'Emitido el '. $_GET['hoy']);
		$spreadsheet->getActiveSheet()->getStyle('A'.($i+3))->getFont()->setSize(9);
	}
//	$idAnterior=$row['idPedido'];
	$i++;
	
}
$consulta5->next_result();



// agrega una nueva hoja de calculo
$spreadsheet->createSheet();
// asigna a que hoja debe de insertar
$spreadsheet->setActiveSheetIndex(5)
			->setCellValue('A1', 'REPORTE DE ALMACEN')
			->setCellValue('A2', 'De: '.$_GET['fechaIni'].' hasta '.$_GET['fechaFin'])
			->setCellValue('A4', 'CANT.')
			->setCellValue('B4', 'DETALLE')
			->setCellValue('C4', 'PRODUCTO')
			->mergeCells('A1:C1')
			->mergeCells('A2:C2')
			->setTitle('Almacen');
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1:C4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('A1:C4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(13);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(17);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);

$consulta6 = $conection->prepare("call reporteCajaPorAlmacen('".$_GET['fechaIni']."', '".$_GET['fechaFin']."');");
$consulta6->execute();
$resultado6 = $consulta6->get_result();
$i=5;

while ($row = $resultado6->fetch_array(MYSQLI_ASSOC))
{
	$spreadsheet->setActiveSheetIndex(5)->setCellValue('A'.$i, $row['Qproduct']);
	$spreadsheet->setActiveSheetIndex(5)->setCellValue('B'.$i, $row['tpDescripcion']);
	$spreadsheet->setActiveSheetIndex(5)->setCellValue('C'.$i, ucwords($row['prodDescripcion']));
	$i++;
}
$consulta6->next_result();




// agrega una nueva hoja de calculo
$spreadsheet->createSheet();
// asigna a que hoja debe de insertar
$spreadsheet->setActiveSheetIndex(6)
			->setCellValue('A1', 'KARDEX')
			->setCellValue('A2', 'De: '.$_GET['fechaIni'].' hasta '.$_GET['fechaFin'])
			->setCellValue('A4', 'CANT.')
			->setCellValue('B4', 'DETALLE')
			->setCellValue('C4', 'PRODUCTO')
			->mergeCells('A1:C1')
			->mergeCells('A2:C2')
			->setTitle('Kardex');
$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('A1:C4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
$spreadsheet->getActiveSheet()->getStyle('A1:C4')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
$spreadsheet->getActiveSheet()->getStyle('A4:C4')->getFill()->getStartColor()->setARGB('FF404040');
//Seteando espaciado a columnas
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(13);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(17);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);

$consulta6 = $conection->prepare("call reporteKardex('".$_GET['fechaIni']."', '".$_GET['fechaFin']."');");
$consulta6->execute();
$resultado6 = $consulta6->get_result();
$i=5;

while ($row = $resultado6->fetch_array(MYSQLI_ASSOC))
{
	$spreadsheet->setActiveSheetIndex(6)->setCellValue('A'.$i, $row['Qproduct']);
	$spreadsheet->setActiveSheetIndex(6)->setCellValue('B'.$i, $row['tpDescripcion']);
	$spreadsheet->setActiveSheetIndex(6)->setCellValue('C'.$i, ucwords($row['prodDescripcion']));
	$i++;
}
$consulta6->next_result();

// elije cual hoja sera la que se habra por defecto
$spreadsheet->setActiveSheetIndex(0);



$writer = new Xlsx($spreadsheet);

$writer->save('Resumen_de_ventas.xlsx');
// Redireccionamos para que descargue el archivo generado
header("Location: Resumen_de_ventas.xlsx");
?>