<?php 
echo "Ver. 1.11 Compilación 29.11.21";
/*Cambios


Ver 1.9
- Update sp solicitarVentasPorDia, reporteCajaPorDetalle, cuadreCajaPorMesa, actualizarStockPrecioProducto
- Borrar las fechas cruzadas del 22 al 23 de noviembre
- cambios ligeros en caja, reporte
- fix cobrar, suma correcta y resta correcta de productos
- Cambio en cuadre de caja, no se consideraban efectivo y tarjetas en cobros multiples en la misma caja.
- se agrego la opcion de editar el nombre del producto


Ver 1.10
- Se agrego suma total al cuadre
- Se arregló la impreson de nota de pedido
- Se arregló ingreso de usuario
- Se arregló ingreso de tarjetas

Ver 1.11
- Se arreglo doble guardado al hacer doble click en guardar
- Se revisó cuadre de caja impresión en miles fallida
- Se agregó detalle de notas en los pedidos para caja y cocina: BD-> tbl Pedido -> 2 campos más:
    ALTER TABLE `pedido` ADD `observacBar` VARCHAR(200) NOT NULL DEFAULT '' AFTER `pedRazonAnular`, ADD `observacCocina` VARCHAR(200) NOT NULL DEFAULT '' AFTER `observacBar`;
- 
 */
 ?>


