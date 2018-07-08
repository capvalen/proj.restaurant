<?php 
echo "Ver. 1.20 Compilación 18.07.07";
/*Cambios

Ver 1.20
- Agregado descuentos por promociones en cada producto.

Ver 1.19
- revisar  `observacBar`, `observacCocina`

CREATE TABLE IF NOT EXISTS `promociones` 
(`idPromocion` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
 `promoCantidad` int(11) NOT NULL,
  `promoDescuento` float NOT NULL,
 `promoActivo` bit(1) NOT NULL DEFAULT b'1' COMMENT '1 para activo') 
ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
ALTER TABLE `promociones` ADD PRIMARY KEY (`idPromocion`);
ALTER TABLE `promociones` MODIFY `idPromocion` int(11) NOT NULL AUTO_INCREMENT;

DROP PROCEDURE `listarProductosAdmin`; CREATE DEFINER=`root`@`localhost` PROCEDURE `listarProductosAdmin`() NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER SELECT p.`idProducto`, tp.tipDescripcion, `prodDescripcion`, `prodPrecio`, p.`idTipoProducto`, `prodActivo`, tpNombreWeb,tpDivBebidaCocina, s.stockCantidad, idProcedencia FROM `producto` p inner JOIN tipoproducto tp on tp.idTipoProducto= p.idtipoProducto inner join stock s on p.idProducto=s.idProducto order by prodActivo desc, tp.tipDescripcion, `prodDescripcion` asc;


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


Ver 1.13
INSERT INTO `procedencia` (`idProcedencia`, `procDescripcion`) VALUES ('3', 'Almacén');

Change tipoProducto
UPDATE `tipoproducto` SET `tpDivBebidaCocina` = 'divAlmacen' WHERE `tipoproducto`.`idTipoProducto` = 23;
change reporteProductosMenosStock
add reporteCajaPorAlmacen
 */
 ?>


