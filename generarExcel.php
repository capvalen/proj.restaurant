<?php
/*
Extraído de: https://github.com/PHPOffice/PHPExcel
*/

/** Reportes de error */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Lima');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Incluir la librería */
require_once dirname(__FILE__) . '/PHPExcel/Classes/PHPExcel.php';


// crea un nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Agrega las propiedades al documento
$objPHPExcel->getProperties()->setCreator("Infocat Soluciones SAC")
							 ->setLastModifiedBy("Casa de barro")
							 ->setTitle("Resumen de ventas")
							 ->setDescription("Autogenerado por Info-Snack");


// agregando datos a la hoja 0
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Hello')
            ->setCellValue('B2', 'world!')
            ->setCellValue('C1', 'Hello')
            ->setCellValue('D2', 'world!');

//Le da espaciado automático a la columna A
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
// Renombrando la hoja activa
$objPHPExcel->getActiveSheet()->setTitle('Hola de prueba 1');
$sLloremIpsum = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus eget ante. Sed cursus nunc semper tortor. Aliquam luctus purus non elit. Fusce vel elit commodo sapien dignissim dignissim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur accumsan magna sed massa. Nullam bibendum quam ac ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin augue. Praesent malesuada justo sed orci. Pellentesque lacus ligula, sodales quis, ultricies a, ultricies vitae, elit. Sed luctus consectetuer dolor. Vivamus vel sem ut nisi sodales accumsan. Nunc et felis. Suspendisse semper viverra odio. Morbi at odio. Integer a orci a purus venenatis molestie. Nam mattis. Praesent rhoncus, nisi vel mattis auctor, neque nisi faucibus sem, non dapibus elit pede ac nisl. Cras turpis.';

// agrega una nueva hoja de calculo
$objPHPExcel->createSheet();
// asigna a que hoja debe de insertar
$objPHPExcel->setActiveSheetIndex(1);
// Renombrando la hoja activa
$objPHPExcel->getActiveSheet()->setTitle('Hola de prueba 2')
	->setCellValue('A1', 'Terms and conditions a1');
$objPHPExcel->getActiveSheet()->setCellValue('A3', $sLloremIpsum);
$objPHPExcel->getActiveSheet()->setCellValue('A4', $sLloremIpsum);
$objPHPExcel->getActiveSheet()->setCellValue('A5', $sLloremIpsum);
$objPHPExcel->getActiveSheet()->setCellValue('A6', $sLloremIpsum);


// elije cual hoja sera la que se habra por defecto
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="ReporteVentas.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');



$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
