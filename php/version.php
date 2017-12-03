<?php 
echo "Ver. 1.12 Compilación 03.12.17";
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

Ver 1.12
- Reduce stock: Actualizado SP actualizarStockPrecioProducto y Modificado la estructura de stockdetalle
-  modificado SP: insertarPedidoCabecera
- ALTER TABLE `pedidodetalle` ADD `pedNota` VARCHAR(200) NOT NULL DEFAULT '' AFTER `pedSubtotal`;
- Agrego notas por producto
 */
 ?>


