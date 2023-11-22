DROP PROCEDURE `reporteCajaPorAlmacen`;
DROP PROCEDURE `reporteCajaPorBebidas`; 
DROP PROCEDURE `reporteCajaPorDetalle`; 
DROP PROCEDURE `reporteCajaPorMesa`; 
DROP PROCEDURE `reporteCajaPorProducto`; 
DROP PROCEDURE `reporteCajaPorUsuario`; 
DROP PROCEDURE `reporteKardex`;
DROP PROCEDURE `reportePedidosAnulados`;
DROP PROCEDURE `reporteProductosMenosStock`;

DELIMITER $$
CREATE PROCEDURE `reporteCajaPorAlmacen`(IN `fechaIni` TEXT, IN `fechaFin` TEXT)
    NO SQL
SELECT pr.idProducto, pr.prodDescripcion, stdCantidad as Qproduct, tp.tpDescripcion 
FROM `stockdetalle` sd
inner join producto pr on pr.idProducto= sd.idProducto
inner join `tipoproceso` tp on tp.idTipoProceso= sd.idTipoProceso
WHERE FIND_IN_SET(sd.`idtipoproceso`, '2,8') and pr.`idProcedencia`=3  and
/*DATE_FORMAT(`stdFechaRegistro`,'%d/%m/%Y') BETWEEN fechaIni and fechaFin */
stdFechaRegistro between concat(fechaIni, ' 00:00:00') and concat(fechaFin, ' 23:59:59')
order by prodDescripcion$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `reporteCajaPorBebidas`(IN `fechaIni` TEXT, IN `fechaFin` TEXT)
    NO SQL
SELECT pd.idProducto, pr.prodDescripcion, sum(pd.pedCantidad) as Qproduct, round(sum( pd.pedSubtotal),2) as dineroIngeso, tip.tipDescripcion
FROM `caja` c
inner join pedido p on p.idPedido=c.idPedido
inner join pedidodetalle pd on pd.idPedidoDetalle=p.idPedido
inner join producto pr on pr.idProducto= pd.idProducto
inner join tipoproducto tip on tip.idTipoProducto=pr.idTipoProducto
WHERE  FIND_IN_SET(c.`idtipoproceso`, '5') and
FIND_IN_SET(c.`idtipoproceso`, '5') and `idProcedencia`=2 and
/*DATE_FORMAT(`cajaFechaRegistro`,'%d/%m/%Y') BETWEEN fechaIni and fechaFin*/
cajaFechaRegistro between concat(fechaIni, ' 00:00:00') and concat(fechaFin, ' 23:59:59')
group by pd.idProducto
order by tip.tipDescripcion, prodDescripcion asc$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `reporteCajaPorDetalle`(IN `fechaIni` TEXT, IN `fechaFin` TEXT)
    NO SQL
SELECT  `idCliente`, cajaFechaRegistro, p.`idPedido`, p.idMesa,
`cajaMontoTotal`, c.`idTipoProceso`, tp.tpDescripcion, `cajaDescripcion`, m.modDescripcion, u.`idUsuario`, u.usuApellidos, u.usuNombres,
p.idMesa, pd.idProducto, pr.prodDescripcion, pd.pedCantidad, pd.pedPrecio, pd.pedSubtotal, DATE_FORMAT(cajaFechaRegistro, '%h:%i %p') as Hora
FROM `caja` c
inner join pedido p on p.idPedido=c.idPedido
inner join tipoproceso tp on tp.idTipoProceso= c.idtipoproceso
inner join modalidad m on m.idModalidad=c.idModalidad
inner join usuario u on u.idUsuario=c.idUsuario
inner join pedidodetalle pd on pd.idPedidoDetalle=p.idPedido
inner join producto pr on pr.idProducto= pd.idProducto
WHERE  FIND_IN_SET(c.`idtipoproceso`, '3,5') and
/*DATE_FORMAT(`cajaFechaRegistro`,'%d/%m/%Y') BETWEEN fechaIni and fechaFin*/
`cajaFechaRegistro` between concat(fechaIni, ' 00:00:00') and concat(fechaFin, ' 23:59:59')
order by idPedido asc$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `reporteCajaPorMesa`(IN `fechaIni` TEXT, IN `fechaFin` TEXT)
    NO SQL
SELECT  p.idMesa, round(sum(`cajaMontoTotal`),2) as dineroIngeso
FROM `caja` c
inner join pedido p on p.idPedido=c.idPedido
WHERE  FIND_IN_SET(c.`idtipoproceso`, '5,6,7') and
/*DATE_FORMAT(`cajaFechaRegistro`,'%d/%m/%Y') BETWEEN fechaIni and fechaFin*/
`cajaFechaRegistro` between concat(fechaIni, ' 00:00:00') and concat(fechaFin, ' 23:59:59')
group by p.idMesa
order by p.idMesa asc$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `reportePedidosAnulados`(IN `fechaIni` TEXT, IN `fechaFin` TEXT)
    NO SQL
SELECT pe.*, round(sum(pedSubtotal),2) as total FROM `pedido` pe
inner join pedidodetalle pd on  pe.idPedido=pd.idPedidoDetalle
WHERE `idEstadoMesa`=4 and
/*DATE_FORMAT(`pedFecha`,'%d/%m/%Y') BETWEEN fechaIni and fechaFin*/
`pedFecha` between concat(fechaIni, ' 00:00:00') and concat(fechaFin, ' 23:59:59')
group by idPedidoDetalle$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `reporteProductosMenosStock`(IN `fechaIni` TEXT, IN `fechaFin` TEXT)
    NO SQL
SELECT st.*, p.prodDescripcion
FROM `stockdetalle` st
inner join producto p on p.idProducto = st.idProducto
where idTipoProceso=8 and p.idProcedencia<>3 and
/*DATE_FORMAT(`stdFechaRegistro`,'%d/%m/%Y') BETWEEN fechaIni and fechaFin*/
`stdFechaRegistro` between concat(fechaIni, ' 00:00:00') and concat(fechaFin, ' 23:59:59')$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `reporteCajaPorProducto`(IN `fechaIni` TEXT, IN `fechaFin` TEXT)
    NO SQL
SELECT pd.idProducto, pr.prodDescripcion, sum(pd.pedCantidad) as Qproduct, round(sum( pd.pedSubtotal),2) as dineroIngeso, p.idPedido, c.idCaja
FROM `caja` c
inner join pedido p on p.idPedido=c.idPedido
inner join pedidodetalle pd on pd.idPedidoDetalle=p.idPedido
inner join producto pr on pr.idProducto= pd.idProducto
WHERE 
FIND_IN_SET(c.`idtipoproceso`, '5') and `idProcedencia`=1 and
/*DATE_FORMAT(`cajaFechaRegistro`,'%d/%m/%Y') BETWEEN fechaIni and fechaFin*/
`cajaFechaRegistro` between concat(fechaIni, ' 00:00:00') and concat(fechaFin, ' 23:59:59')
group by pd.idProducto
order by prodDescripcion$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `reporteCajaPorUsuario`(IN `fechaIni` TEXT, IN `fechaFin` TEXT)
    NO SQL
SELECT round(sum( `cajaMontoTotal`),2) as dineroIngeso, concat(u.usuApellidos,' ', u.usuNombres) as Nombres, tp.tpDescripcion, p.idUsuario, pw.Descripcion
FROM `caja` c
inner join tipoproceso tp on tp.idTipoProceso= c.idtipoproceso
inner join pedido p on p.idPedido= c.idPedido
inner join usuario u on u.idUsuario=p.idUsuario
inner join poder pw on pw.idPoder = u.usuPoder
WHERE FIND_IN_SET(c.`idtipoproceso`, '5,6,7') and 
/*DATE_FORMAT(`cajaFechaRegistro`,'%d/%m/%Y') BETWEEN fechaIni and fechaFin*/
`cajaFechaRegistro` between concat(fechaIni, ' 00:00:00') and concat(fechaFin, ' 23:59:59')
GROUP BY tp.tpDescripcion, p.idUsuario$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE `reporteKardex`(IN `fechaInicio` TEXT, IN `fechaFin` TEXT)
    NO SQL
SELECT pr.idProducto, pr.prodDescripcion, stdCantidad as Qproduct, tp.tpDescripcion 
FROM `stockdetalle` sd
inner join producto pr on pr.idProducto= sd.idProducto
inner join `tipoproceso` tp on tp.idTipoProceso= sd.idTipoProceso
WHERE 
/*DATE_FORMAT(`stdFechaRegistro`,'%d/%m/%Y') BETWEEN fechaInicio and fechaFin*/
`stdFechaRegistro` between concat(fechaIni, ' 00:00:00') and concat(fechaFin, ' 23:59:59')
order by idStockDetalle asc$$
DELIMITER ;
