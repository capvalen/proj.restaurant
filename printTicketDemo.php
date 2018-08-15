<?php
session_start();
/* Change to the correct path if you copy this example! */
require __DIR__ . '/vendor/mike42/escpos-php/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

/**
 * Assuming your printer is available at LPT1,
 * simpy instantiate a WindowsPrintConnector to it.
 *
 * When troubleshooting, make sure you can send it
 * data from the command-line first:
 *  echo "Hello World" > LPT1
 */
$_POST['campo']= 'Estamos hechos de fuego 1234567890, y1'; //=> 38 caracteres
include 'mostrar.php';
 
    $connector_caja = new WindowsPrintConnector("smb://127.0.0.1/XP-58");//BIXOLON_CAJA
try {
    
    // A FilePrintConnector will also work, but on non-Windows systems, writes
    // to an actual file called 'LPT1' rather than giving a useful error.
    // $connector = new FilePrintConnector("LPT1");

    /* Print a "Hello world" receipt" */
    $tux = EscposImage::load("temp.png", false);
    $printer = new Printer($connector_caja);
    $printer -> text("            La Casa de Barro \n");
    $printer -> text("   Nota de Pedido « Caja ». Mesa # \n");
    $printer -> text("Estamos hechos de fuego y de papel, y ocultar que. \n");
    $printer -> bitImage($tux);
    $printer -> cut();

    /* Close printer */
    $printer -> close();
} catch (Exception $e) {
    echo "No se pudo imprimir en la impresora: " . $e -> getMessage() . "\n";
}
