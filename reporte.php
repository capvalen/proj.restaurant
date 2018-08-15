<?php
session_start();
if (@!$_SESSION['Atiende']){//sino existe enviar a index
	header("Location:index.php");
}else{
	if($_SESSION['Power']==3){header("Location:pedidos.php");}
	if($_SESSION['Power']==2){header("Location:caja.php");}
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Reporte: Infocat Snack</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link rel="shortcut icon" href="images/peto.png?version=1.0" />
		<link href="css/estilosElementosv2.css?version=1.0.1" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.2" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.1">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/snack.css?version=1.0.6">

		<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
		<link rel="shortcut icon" href="images/peto.png" />
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css"> <!-- extraido de: http://flatlogic.github.io/awesome-bootstrap-checkbox/demo/-->
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"> <!-- extraído de: https://uxsolutions.github.io/bootstrap-datepicker/-->

</head>

<body>

<div id="wrapper">

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
				
				<div class="logoEmpresa ocultar-mostrar-menu">
					<img class="img-responsive" src="images/empresa.png" alt="">
				</div>
				<li>
						<a href="principal.php"><i class="icofont icofont-space-shuttle"></i> Inicio</a>
				</li>
				<li>
						<a href="productos.php"><i class="icofont icofont-restaurant-menu"></i> Productos Carta</a>
				</li>
				<li>
						<a href="pedidos.php"><i class="icofont icofont-fork-and-knife"></i> Pedidos</a>
				</li>
				<li>
						<a href="caja.php"><i class="icofont icofont-cart-alt"></i> Cobrar</a>
				</li>
				<li>
						<a href="ventas.php"><i class="icofont icofont-calculator-alt-1"></i> Cuadrar caja</a>
				</li>
				<li>
						<a href="#!" id="aGastoExtra"><i class="icofont icofont-ui-rate-remove"></i> Gasto extra</a>
				</li>
				<li >
						<a href="#!" id="aIngresoExtra"><i class="icofont icofont-ui-rate-add"></i> Ingreso extra</a>
				</li>
				<li>
						<a href="usuarios.php"><i class="icofont icofont-users"></i> Usuarios</a>
				</li>
				<li class="active">
						<a href="#!"><i class="icofont icofont-ui-copy"></i> Reportes</a>
				</li>
				<li>
						<a href="#!" class="ocultar-mostrar-menu"><i class="icofont icofont-swoosh-left"></i> Ocultar menú</a>
				</li>
		</ul>
	</div>
			<!-- /#sidebar-wrapper -->
<div class="navbar-wrapper">
	<div class="container-fluid">
			<nav class="navbar navbar-fixed-top encoger">
				<div class="container">
					<div class="navbar-header ">
					<a href="#!" class="btn btn-infocat ocultar-mostrar-menu"><i class="icofont icofont-navigation-menu"></i></a>
					<a class="navbar-brand ocultar-mostrar-menu" href="#"><img id="imgLogoInfocat" class="img-responsive" src="images/logo.png" alt=""></a>
							<button type="button" class="navbar-toggle collapsed" id="btnColapsador" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							
					</div>
					<div id="navbar" class="navbar-collapse collapse ">
							<ul class="nav navbar-nav">
								<li class="hidden down"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HR <span class="caret"></span></a>
									<ul class="dropdown-menu">
											<li><a href="#">Change Time Entry</a></li>
											<li><a href="#">Report</a></li>
									</ul>
								</li>
							</ul>
							<ul class="nav navbar-nav pull-right">
								 <li>
									<div class="btn-group has-clear hidden"><label for="txtBuscarNivelGod" class="text-muted visible-xs">Buscar algo:</label>
										<input type="text" class="form-control" id="txtBuscarNivelGod" placeholder="&#xeded;">
										<span class="form-control-clear glyphicon glyphicon-remove-circle form-control-feedback hidden"></span>
									</div>
								 </li>
								 <li id="liDatosPersonales"><a href="#!"><p><strong>Usuario: </strong> <span class="mayuscula" id="menuNombreUsuario"><?php echo $_SESSION["Atiende"]; ?></span></p><small class="text-center" id="menuFecha"><span id="fechaServer"></span> <span id="horaServer"><?php require('php/gethora.php') ?></span> </small></a></li>
									
				<li class="text-center"><a href="php/desconectar.php"><span class="visible-xs">Cerrar Sesión</span><i class="icofont icofont-sign-out"></i></a></li>
							</ul>
							
					</div>
			</div>
			</nav>
	</div>
</div>

<style>
.tab-pane .row:hover{background-color: transparent!important;}
</style>
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid">				 
			<div class="row">
				<div class="col-lg-12 contenedorDeslizable">
				<!-- Empieza a meter contenido principal dentro de estas etiquetas -->
				 <h2 class="purple-text text-lighten-1"><i class="icofont icofont-options"></i> Reportes</h2>

					<ul class="nav nav-tabs">
					<li class="active"><a href="#tabAgregarLabo" data-toggle="tab">Resumen</a></li>
					<li class="hidden"><a href="#tabCambiarPassUser" data-toggle="tab">Cambiar contraseña</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para buscar productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabAgregarLabo">
						<!--Inicio de pestaña 01-->
							<div class="row">
								
							</div>
							<div class="row">
								<p>Seleccione dos fechas para filtrar por favor:</p>
								
								<div class="col-xs-6">
									<div class="sandbox-container">
									<div class="input-daterange input-group" id="datepicker">
									<input type="text" class="input-sm form-control" id="inputFechaInicio" name="start" />
									<span class="input-group-addon">hasta</span>
									<input type="text" class="input-sm form-control" id="inputFechaFin" name="end" />
									</div>
									</div>
									<button class="btn btn-success btn-outline" id="btnGenerarExcel"><i class="icofont icofont-file-text"></i> Generar archivo excel</button>
								</div>
								<div class="col-xs-2 hidden">
									<button class="btn btn-success btn-outline" id="btnFiltarFechas"><i class="icofont icofont-search-alt-1"></i> Filtrar</button>
								</div>
								
							</div><br>
							<div class="row">
								<ul class="nav nav-tabs">
									<li><a href="#tabVerPorUsuario" data-toggle="tab">Por usuario</a></li>
									<li><a href="#tabVerPorMesa" data-toggle="tab">Por mesas</a></li>
									<li><a href="#tabVerPorProducto" data-toggle="tab">Por productos</a></li>
									<li><a href="#tabVerPorBebida" data-toggle="tab">Por bebidas</a></li>
									<li><a href="#tabVerPorDetalle" data-toggle="tab">Detallado</a></li>
									<li><a href="#tabVerPorAlmacen" data-toggle="tab">Almacén</a></li>
									<li><a href="#tabVerPorKardexProdu" data-toggle="tab">Kardex productos</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade container-fluid" id="tabVerPorUsuario">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>Usuario</th>
												<th>Nivel</th>
												<th>SubTotal</th>
											</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								
									<div class="tab-pane fade container-fluid" id="tabVerPorMesa">
										<table class="table table-hover" id="tablaSumaMesas">
											<thead>
											<tr>
												<th>N° Mesa</th>
												<th>Total</th>
											</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
										<table class="table table-hover" id="tablaIncidentesMesas">
											<thead>
											<tr>
												<th>N° Mesa anulada</th>
												<th>Razón</th>
												<th>Total</th>
											</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade container-fluid" id="tabVerPorProducto">
										<table class="table table-hover" id="tablaProductoCantidad">
											<thead>
											<tr>
												<th>Cantidad</th>
												<th>Producto</th>
												<th>SubTotal</th>
											</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
										<table class="table table-hover" id="tablaReducidoStock">
											<thead>
											<tr>
												<th>Cantidad Menos</th>
												<th>Productos descartados en stock</th>
												<th>Motivo</th>
											</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade container-fluid" id="tabVerPorBebida">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>Cantidad</th>
												<th>Categoría</th>
												<th>Bebida</th>
												<th>SubTotal</th>
											</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade container-fluid" id="tabVerPorDetalle">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>Detalle</th>
												<th>Pedido</th>
												<th>Total</th>
											</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade container-fluid" id="tabVerPorAlmacen">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>Detalle</th>
												<th>Pedido</th>
												<th>Cantidad</th>
											</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
									<div class="tab-pane fade container-fluid" id="tabVerPorKardexProdu">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>Detalle</th>
												<th>Pedido</th>
												<th>Cantidad</th>
											</tr>
											</thead>
											<tbody>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- <p>Fecha generada: <strong><span id="spanFechaLetra"></span></strong></p>
							<div class="row">
								<strong>
									<div class="col-xs-3">Cliente</div>
									<div class="col-xs-2">Tipo</div>
									<div class="col-xs-1">Monto</div>
									<div class="col-xs-2">Resp.</div>
									<div class="col-xs-3">Fecha</div>
								</strong>
							</div>
							<div class="" id="divRowResumenVentas"></div>
							<div class="text-center hidden" id="divRowResumenSuma" style="padding-top: 15px;">
								<p><strong>Total de Ventas: S/. <span id="spanVentasSuma"></span></strong></p>
								<p><strong>Total de Ingresos: S/. <span id="spanIngresosSuma"></span></strong></p>
								<p><strong>Total de Egresos: S/. <span id="spanEgresosSuma"></span></strong></p>
							</div> -->
							

						<!--Fin de pestaña 01-->
						</div>

						

						<!--Panel para nueva compra-->
						<div class="tab-pane fade container-fluid" id="tabCambiarPassUser">
						<!--Inicio de pestaña 02-->
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, quis, facilis beatae recusandae optio molestias ipsam quibusdam aliquid rerum voluptatem incidunt in vero quo illo natus? Asperiores, ipsum placeat dolorum.
						<!--Fin de pestaña 02-->
						</div>
						
					</div>
					<!-- Fin de meter contenido principal -->
					</div>
					
				</div>
		</div>
</div>
<!-- /#page-content-wrapper -->
</div><!-- /#wrapper -->
<?php include 'php/llamandoModals.php'; ?>
	
<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/inicializacion.js"></script>
<script src="js/accionesGlobales.js?version=1.1"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$(document).ready(function(){
datosUsuario();
$('.selectpicker').selectpicker('refresh');

$('.mitooltip').tooltip();
$('input').keypress(function (e) {
	if (e.keyCode == 13)
	{
		$(this).parent().next().children().focus();
		//$(this).parent().next().children().removeAttr('disabled'); //agregar atributo desabilitado
	} 
});
$('.sandbox-container input').datepicker({language: "es", autoclose: true, clearBtn: true, todayBtn: "linked", todayHighlight: true});
$('.sandbox-container .input-daterange').datepicker({language: "es", autoclose: true,  clearBtn: true, todayBtn: "linked", todayHighlight: true});

});//fin de document ready
$('#btnBuscarVentas').click(function () {
	moment.locale('es')
	var letraFecha= moment($('#dtpFechaInicio').val(), 'DD/MM/YYYY').format('dddd, DD [de] MMMM [de] YYYY');
	$('#spanFechaLetra').text(letraFecha);
	$('#divRowResumenVentas').children().remove();
	var sumaVentas=0, sumaIngresos=0, sumaEgresos=0;
	$.ajax({url: 'php/solicitarVentasPorDia.php', type: 'POST', data: {fecha: $('#dtpFechaInicio').val()}}).done(function (resp) {
		if(JSON.parse(resp).length==0){
			$('#divRowResumenSuma').addClass('hidden');
			$('#divRowResumenVentas').append('<p>No hay resultados para ésta fecha.</p>');
		}else{$('#divRowResumenSuma').removeClass('hidden');}
		$.each(JSON.parse(resp), function (i, dato) {
			$('#divRowResumenVentas').append(`<div class="row"><div class="col-xs-3">${i+1}. ${dato.cliRazonSocial}</div>
					<div class="col-xs-2">${dato.tpDescripcion}</div>
					<div class="col-xs-1">${parseFloat(dato.cajaMontoTotal).toFixed(2)}</div>
					<div class="col-xs-2">${dato.usuNombres}</div>
					<div class="col-xs-3">${moment(dato.cajaFechaRegistro).format('DD/MM/YYYY h:mm a')}</div></div>`);
			if(dato.idTipoProceso==5 ){sumaVentas+=parseFloat(dato.cajaMontoTotal);}
			else if(dato.idTipoProceso==6){sumaIngresos+=parseFloat(dato.cajaMontoTotal);}
			else if(dato.idTipoProceso==7){sumaEgresos-=parseFloat(dato.cajaMontoTotal);}
		
		$('#spanVentasSuma').text(parseFloat(sumaVentas).toFixed(2));
		$('#spanIngresosSuma').text(parseFloat(sumaIngresos).toFixed(2));
		$('#spanEgresosSuma').text(parseFloat(sumaEgresos).toFixed(2));
		});
	});

});
$('#btnFiltarFechas').click(function () {
	

	if(iniciofecha!=''){
		// if(iniciofecha==finFecha){
		// }
	}
	
});
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {	
var target = $(e.target).attr("href");
//console.log(target);
if(target=='#tabVerPorUsuario'){ cajaPorUser(); }
if(target=='#tabVerPorMesa'){ cajaPorMesa(); }
if(target=='#tabVerPorProducto'){ cajaPorProducto(); }
if(target=='#tabVerPorBebida'){ cajaPorBebidas(); }
if(target=='#tabVerPorDetalle'){ cajaPorDetalle(); }
if(target=='#tabVerPorAlmacen'){ cajaPorAlmacen(); }
if(target=='#tabVerPorKardexProdu'){ cajaPorKardex(); }
});

function cajaPorUser() {
	var sumConjunto=0;
	var iniciofecha = $('#inputFechaInicio').val();
	var finFecha= $('#inputFechaFin').val();
	$('#tabVerPorUsuario tbody').children().remove();
	$.ajax({url:'php/reporteCajaPorUsuario.php', type: 'POST', data: {fechaIni:iniciofecha, fechaFin:finFecha}}).done(function (resp) {
		//console.log(resp)
		var maxElem=JSON.parse(resp).length;
		if(maxElem>0){
			$.each(JSON.parse(resp), function (i, elem) {
			sumConjunto+=parseFloat(elem.dineroIngeso);
			$('#tabVerPorUsuario tbody').append(`<tr>
					<td class="mayuscula">${elem.Nombres}</td>
					<td>${elem.Descripcion}</td>
					<td>${parseFloat(elem.dineroIngeso).toFixed(2)}</td>
				  </tr>`);
			if(maxElem-1==i){
				$('#tabVerPorUsuario tbody').append(`<tr>
					<td colspan="3"> <strong class="pull-right" style="padding-right: 100px;">Suma Total: S/. ${sumConjunto.toFixed(2)}</strong></td>
					</tr>`); }
			});
		}else{
			$('#tabVerPorUsuario tbody').append(`<tr><td class="">No se encontraron datos para ésta fecha</td></tr>`);
		}
	});
}
function cajaPorMesa() {
	var sumConjunto=0;
	var iniciofecha = $('#inputFechaInicio').val();
	var finFecha= $('#inputFechaFin').val();
	$('#tabVerPorMesa tbody').children().remove();
	$.ajax({url:'php/reporteCajaPorMesa.php', type: 'POST', data: {fechaIni:iniciofecha, fechaFin:finFecha}}).done(function (resp) {
		var maxElem=JSON.parse(resp).length;
		if(maxElem>0){

			$.each(JSON.parse(resp), function (i, elem) {
			sumConjunto+=parseFloat(elem.dineroIngeso);
			$('#tablaSumaMesas tbody').append(`<tr>
					<td class="mayuscula">Mesa ${elem.idMesa}</td>
					<td>${parseFloat(elem.dineroIngeso).toFixed(2)}</td>
				  </tr>`);
			if(maxElem-1==i){
				$('#tablaSumaMesas tbody').append(`<tr>
					<td colspan="3"> <strong class="pull-right" style="padding-right: 100px;">Suma Total: S/. ${sumConjunto.toFixed(2)}</strong></td>
					</tr>`); }
			});
		}else{
			$('#tablaSumaMesas tbody').append(`<tr><td class="">No se encontraron datos para ésta fecha</td></tr>`);
		}
	});
	$.ajax({url: 'php/reportePedidosAnulados.php', type: 'POST', data: {fechaIni:iniciofecha, fechaFin:finFecha}}).done(function (anul) {
		console.log(anul)//tablaIncidentesMesas
		var maxElem2=JSON.parse(anul).length; console.log(maxElem2)
		if(maxElem2==0){
			$('#tablaIncidentesMesas tbody').append('<tr><td>No hay mesas anuladas en estas fechas.</td></tr>');
		}else{
			$.each(JSON.parse(anul), function (i, dato) {
				$('#tablaIncidentesMesas tbody').append(`<tr>
					<td class="mayuscula">Mesa ${dato.idMesa}</td>
					<td class="mayuscula">${dato.pedRazonAnular}</td>
					<td>${parseFloat(dato.total).toFixed(2)}</td>
				  </tr>`);
			});
		}
		
	});
}
function cajaPorProducto() {
	var sumConjunto=0;
	var iniciofecha = $('#inputFechaInicio').val();
	var finFecha= $('#inputFechaFin').val();
	$('#tabVerPorProducto tbody').children().remove();
	$.ajax({url:'php/reporteCajaPorProducto.php', type: 'POST', data: {fechaIni:iniciofecha, fechaFin:finFecha}}).done(function (resp) {
		var maxElem=JSON.parse(resp).length;
		if(maxElem>0){
			$.each(JSON.parse(resp), function (i, elem) {
			sumConjunto+=parseFloat(elem.dineroIngeso);
			$('#tablaProductoCantidad tbody').append(`<tr>
					<td>${elem.Qproduct}</td>
					<td class="mayuscula">${elem.prodDescripcion}</td>
					<td>${parseFloat(elem.dineroIngeso).toFixed(2)}</td>
				  </tr>`);
			if(maxElem-1==i){
				$('#tablaProductoCantidad tbody').append(`<tr>
					<td colspan="3"> <strong class="pull-right" style="padding-right: 100px;">Suma Total: S/. ${sumConjunto.toFixed(2)}</strong></td>
					</tr>`); }
			});
		}else{
			$('#tablaProductoCantidad tbody').append(`<tr><td class="">No se encontraron datos para ésta fecha</td></tr>`);
		}
	});
	$.ajax({url: 'php/reporteProductosMenosStock.php', type: 'POST', data: {fechaIni:iniciofecha, fechaFin:finFecha}}).done(function (resp2) {
		//console.log(resp2)
		var maxElem=JSON.parse(resp2).length;
		if(maxElem>0){
			$.each(JSON.parse(resp2), function (i, elemStk) {
				$('#tablaReducidoStock tbody').append(`<tr>
					<td>${elemStk.stdCantidad}</td>
					<td class="mayuscula">${elemStk.prodDescripcion}</td>
					<td class="mayuscula">${elemStk.stdDetalle}</td>
				  </tr>`);
			});}else{
				$('#tablaReducidoStock tbody').append(`<tr><td class="">No se encontraron datos en ésta fecha</td></tr>`);
			}
	});
}
function cajaPorBebidas() {
	var sumConjunto=0;
	var iniciofecha = $('#inputFechaInicio').val();
	var finFecha= $('#inputFechaFin').val();
	$('#tabVerPorBebida tbody').children().remove();
	$.ajax({url:'php/reporteCajaPorBebidas.php', type: 'POST', data: {fechaIni:iniciofecha, fechaFin:finFecha}}).done(function (resp) {
		var maxElem=JSON.parse(resp).length;
		if(maxElem>0){
			$.each(JSON.parse(resp), function (i, elem) {
			sumConjunto+=parseFloat(elem.dineroIngeso);
			$('#tabVerPorBebida tbody').append(`<tr>
					<td>${elem.Qproduct}</td>
					<td class="mayuscula">${elem.tipDescripcion}</td>
					<td class="mayuscula">${elem.prodDescripcion}</td>
					<td>${parseFloat(elem.dineroIngeso).toFixed(2)}</td>
				  </tr>`);
			if(maxElem-1==i){
				$('#tabVerPorBebida tbody').append(`<tr>
					<td colspan="4"> <strong class="pull-right" style="padding-right: 100px;">Suma Total: S/. ${sumConjunto.toFixed(2)}</strong></td>
					</tr>`); }
			});
		}else{
			$('#tabVerPorBebida tbody').append(`<tr><td class="">No se encontraron datos para ésta fecha</td></tr>`);
		}
	});
}
function cajaPorDetalle() {
	var sumConjunto=0;
	var iniciofecha = $('#inputFechaInicio').val();
	var finFecha= $('#inputFechaFin').val();
	$('#tabVerPorDetalle tbody').children().remove();
	$.ajax({url:'php/reporteCajaPorDetalle.php', type: 'POST', data: {fechaIni:iniciofecha, fechaFin:finFecha}}).done(function (resp) {
		var maxElem=JSON.parse(resp).length;
		if(maxElem>0){
			$.each(JSON.parse(resp), function (i, dato) { //console.log(dato.cajaMontoTotal)
			
			if(i>=1){ //console.log(dato.idPedido)
				//console.log($('#tabVerPorDetalle tbody tr').last().attr('id'))
				if(dato.idPedido==$('#tabVerPorDetalle tbody tr').last().attr('id')){
					$('#tabVerPorDetalle tbody #'+dato.idPedido).find('.relleno').append(`
					<p> ${dato.pedCantidad} x ${dato.prodDescripcion}  = ${parseFloat(dato.pedSubtotal).toFixed(2)}<p>`);
				}else{
					sumConjunto+=parseFloat(dato.cajaMontoTotal);
					$('#tabVerPorDetalle tbody').append(`<tr id="${dato.idPedido}">
					<td>
					<p><strong>Mesa:</strong> ${dato.idMesa} <br> <strong>Usuario:</strong> ${dato.usuApellidos} ${dato.usuNombres} <br> <strong>Fecha:</strong> ${moment(dato.cajaFechaRegistro).format('DD/MM/YYYY h:m a')}<p>
					</td><td class="relleno">
						<p> ${dato.pedCantidad} x ${dato.prodDescripcion}  = ${parseFloat(dato.pedSubtotal).toFixed(2)}<p>
					</td>
					<td><strong>S/. ${parseFloat(dato.cajaMontoTotal).toFixed(2)}</strong></td>
				  </tr>`);
				}
			}else{
				sumConjunto+=parseFloat(dato.cajaMontoTotal);
				$('#tabVerPorDetalle tbody').append(`<tr id="${dato.idPedido}">
					<td>
					<p><strong>Mesa:</strong> ${dato.idMesa} <br> <strong>Usuario:</strong> ${dato.usuApellidos} ${dato.usuNombres} <br> <strong>Fecha:</strong> ${moment(dato.cajaFechaRegistro).format('DD/MM/YYYY h:m a')}<p>
					</td><td class="relleno">
						<p> ${dato.pedCantidad} x ${dato.prodDescripcion}  = ${parseFloat(dato.pedSubtotal).toFixed(2)}<p>
					</td><td><strong>S/. ${parseFloat(dato.cajaMontoTotal).toFixed(2)}</strong></td>
				  </tr>`);
			}
			if(maxElem-1==i){
				$('#tabVerPorDetalle tbody').append(`<tr>
					<td colspan="2"> <strong class="pull-right" style="padding-right: 100px;">Suma Total: S/. ${sumConjunto.toFixed(2)}</strong></td>
					</tr>`); }
			/*$('#tabVerPorDetalle tbody').append(`<tr>
					<td>${elem.Qproduct}</td>
					<td class="mayuscula">${elem.tipDescripcion}</td>
					<td class="mayuscula">${elem.prodDescripcion}</td>
					<td>${parseFloat(elem.dineroIngeso).toFixed(2)}</td>
				  </tr>`);*/

			});
		}else{
			$('#tabVerPorDetalle tbody').append(`<tr><td class="">No se encontraron datos para ésta fecha</td></tr>`);
		}
	});
}
function cajaPorAlmacen() {
	var sumConjunto=0;
	var iniciofecha = $('#inputFechaInicio').val();
	var finFecha= $('#inputFechaFin').val();
	$('#tabVerPorAlmacen tbody').children().remove();
	$.ajax({url:'php/reporteCajaPorAlmacen.php', type: 'POST', data: {fechaIni:iniciofecha, fechaFin:finFecha}}).done(function (resp) {
		var maxElem=JSON.parse(resp).length;
		if(maxElem>0){
			$.each(JSON.parse(resp), function (i, elem) {
			sumConjunto+=parseFloat(elem.dineroIngeso);
			$('#tabVerPorAlmacen tbody').append(`<tr>
					<td class="mayuscula">${elem.prodDescripcion}</td>
					<td class="mayuscula">${elem.tpDescripcion}</td>
					<td>${elem.Qproduct}</td>
				  </tr>`);
			});
		}else{
			$('#tabVerPorAlmacen tbody').append(`<tr><td class="">No se encontraron datos para ésta fecha</td></tr>`);
		}
	});
}
function cajaPorKardex() {
	var sumConjunto=0;
	var iniciofecha = $('#inputFechaInicio').val();
	var finFecha= $('#inputFechaFin').val();
	$('#tabVerPorKardexProdu tbody').children().remove();
	$.ajax({url:'php/reporteKardex.php', type: 'POST', data: {fechaIni:iniciofecha, fechaFin:finFecha}}).done(function (resp) {
		var maxElem=JSON.parse(resp).length;
		if(maxElem>0){
			$.each(JSON.parse(resp), function (i, elem) {
			sumConjunto+=parseFloat(elem.dineroIngeso);
			$('#tabVerPorKardexProdu tbody').append(`<tr>
					<td class="mayuscula">${elem.prodDescripcion}</td>
					<td class="mayuscula">${elem.tpDescripcion}</td>
					<td>${elem.Qproduct}</td>
				  </tr>`);
			});
		}else{
			$('#tabVerPorAlmacen tbody').append(`<tr><td class="">No se encontraron datos para ésta fecha</td></tr>`);
		}
	});
}

$('#btnGenerarExcel').click(function () {
	if($('#inputFechaInicio').val()!='' ){
		var inicNomb=$('#inputFechaInicio').val().replace(/\//g, '-');
		var finNomb=$('#inputFechaFin').val().replace(/\//g, '-');
		var inputs = '<input type="hidden" name="nombreArchivo" value="Reporte_'+inicNomb+'_hasta_'+$('#inputFechaFin').val()+'" />';
		inputs+= '<input type="hidden" name="fechaIni" value="'+$('#inputFechaInicio').val()+'" />';
		inputs+= '<input type="hidden" name="fechaFin" value="'+$('#inputFechaFin').val()+'" />';
		inputs+= '<input type="hidden" name="hoy" value="'+moment().format('DD/MM/YYYY h:m a')+'" />';
		$("body").append('<form action="generarExcel.php" method="post" id="poster">'+inputs+'</form>');
	    $("#poster").submit();
	    $('#poster').remove();
	}
});
</script>

</body>

</html>
