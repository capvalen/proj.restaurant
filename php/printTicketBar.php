<?php
session_start();
/* Change to the correct path if you copy this example! */
require __DIR__ . '/vendor/mike42/escpos-php/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

/**
 * Assuming your printer is available at LPT1,
 * simpy instantiate a WindowsPrintConnector to it.
 *
 * When troubleshooting, make sure you can send it
 * data from the command-line first:
 *  echo "Hello World" > LPT1
 */

 
    $connector_bar = new WindowsPrintConnector("smb://127.0.0.1/BARC");
try {
    
    // A FilePrintConnector will also work, but on non-Windows systems, writes
    // to an actual file called 'LPT1' rather than giving a useful error.
    // $connector = new FilePrintConnector("LPT1");

    /* Print a "Hello world" receipt" */
    $printer = new Printer($connector_bar);
    $printer -> text("            La Casa de Barro \n");
    $printer -> text("       Pedido « Bar ». Mesa # ".$_POST['numMesa']."\n");
    $printer -> text("----------------------------------------");
    $printer -> text("   ".$_POST['hora']."\n\n");
    $printer -> text("Cant.  Producto\n");
    $printer -> text("".$_POST['texto']." \n\n");
    if($_POST['obsBar']<>''){
        $printer -> text("Obs.: ".$_POST['obsBarra']." \n\n");
    }
    $printer -> text("*  Usuario: ".$_POST['usuario']."  *\n");
    $printer -> cut();

    /* Close printer */
    $printer -> close();
} catch (Exception $e) {
    echo "No se pudo imprimir en la impresora: " . $e -> getMessage() . "\n";
}
