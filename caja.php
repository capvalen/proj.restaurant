<?php
session_start();
require 'php/licence.php';
if (@!$_COOKIE['ckidUsuario']){//sino existe enviar a index
	header("Location:index.php");
}else{
	if($_SESSION['Power']==3){header("Location:pedidos.php");}

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Caja: Infocat Snack</title>
	<?php include 'headers.php'; ?>
</head>

<body>

<style>
.divUnSoloProducto{color: #949494!important;}
.divUnSoloDescuento{color: #f54242!important;}
.text-danger {color: #d9534f;}
.btn-azul{color: #0078D7;}
#smallLibre, #smallOcupado{cursor:pointer;}
.btnMesa:focus{color: #484848!important;}
</style>
<div id="wrapper">

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
				
				<div class="logoEmpresa ocultar-mostrar-menu">
					<img class="img-responsive" src="images/empresa.png?version=1.0" alt="">
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
				<li class="active">
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
				<li>
						<a href="reporte.php"><i class="icofont icofont-ui-copy"></i> Reportes</a>
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
						<a class="navbar-brand ocultar-mostrar-menu" href="#"><img id="imgLogoInfocat" class="img-responsive" src="images/logo.png?version=1.3" alt=""></a>
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
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid noselect">				 
			<div class="row">
				<div class="col-lg-12 contenedorDeslizable">
				<!-- Empieza a meter contenido principal dentro de estas etiquetas -->
				 <?php 
			if ($_SESSION['licencia']=='Ok'){ ?>
				<!-- Contenido para licenciar -->
				<div class="row container-fluid">
				 	<h2 class="purple-text text-lighten-1" style=" display: inline-block;"><i class="icofont icofont-lens"></i> Cobro en caja - Casa de Barro <small class="purple-text text-lighten-1" id="smallLibre"><i class="icofont icofont-cube"></i> Libres</small> <small class="red-text text-darken-2" id="smallOcupado"><i class="icofont icofont-cube"></i> Ocupadas</small></h2> 
				 </div>
				 <div class="row container-fluid">
				 	<button class="btn btn-default btn-outline pull-right hidden" id="btnMoverSelecionados" style="margin: 0 10px"><i class="icofont icofont-spoon-and-fork"></i> Mover seleccionados</button>
					 <button class="btn btn-success btn-outline pull-right" id="btnObtenerEstadoMesas"><i class="icofont icofont-spoon-and-fork"></i> Actualizar mesas</button> 
					 <button class="btn btn-success btn-outline pull-right hidden" id="btnRegresarAMesas"><i class="icofont icofont-spoon-and-fork"></i> Regresar a mesas</button>
					 <button class="btn btn-warning btn-outline pull-right" id="btnVerTickets" style="margin: 0 10px"><i class="icofont icofont-ui-copy"></i> Ver últimos tickets</button>
				 </div>
				<div class="row divMesas "> <span class="hidden" id="spanTipoCliente"></span>
				<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="1"><i class="icofont icofont-food-cart"></i> Mesa 1</button></div>
				<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="2"><i class="icofont icofont-restaurant-menu"></i> Mesa 2</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="3"><i class="icofont icofont-restaurant-menu"></i> Mesa 3</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="4"><i class="icofont icofont-restaurant-menu"></i> Mesa 4</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="5"><i class="icofont icofont-restaurant-menu"></i> Mesa 5</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="6"><i class="icofont icofont-restaurant-menu"></i> Mesa 6</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="7"><i class="icofont icofont-restaurant-menu"></i> Mesa 7</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="8"><i class="icofont icofont-restaurant-menu"></i> Mesa 8</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="9"><i class="icofont icofont-restaurant-menu"></i> Mesa 9</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="10"><i class="icofont icofont-restaurant-menu"></i> Mesa 10</button></div>
					
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="11"><i class="icofont icofont-restaurant-menu"></i> Mesa 11</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="12"><i class="icofont icofont-restaurant-menu"></i> Mesa 12</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="13"><i class="icofont icofont-restaurant-menu"></i> Mesa 13</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="14"><i class="icofont icofont-restaurant-menu"></i> Mesa 14</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="15"><i class="icofont icofont-restaurant-menu"></i> Mesa 15</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="16"><i class="icofont icofont-restaurant-menu"></i> Mesa 16</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="17"><i class="icofont icofont-restaurant-menu"></i> Mesa 17</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="18"><i class="icofont icofont-restaurant-menu"></i> Mesa 18</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="19"><i class="icofont icofont-restaurant-menu"></i> Mesa 19</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="20"><i class="icofont icofont-restaurant-menu"></i> Mesa 20</button></div>

					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="21"><i class="icofont icofont-restaurant-menu"></i> Mesa 21</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="22"><i class="icofont icofont-restaurant-menu"></i> Mesa 22</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="23"><i class="icofont icofont-restaurant-menu"></i> Mesa 23</button></div>
					
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="24"><i class="icofont icofont-restaurant-menu"></i> Delivery 1</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="25"><i class="icofont icofont-restaurant-menu"></i> Delivery 2</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="26"><i class="icofont icofont-restaurant-menu"></i> Delivery 3</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="27"><i class="icofont icofont-restaurant-menu"></i> Delivery 4</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="28"><i class="icofont icofont-restaurant-menu"></i> Delivery 5</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="29"><i class="icofont icofont-restaurant-menu"></i> Delivery 6</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="30"><i class="icofont icofont-restaurant-menu"></i> Delivery 7</button></div>

					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="31"><i class="icofont icofont-restaurant-menu"></i> Delivery 8</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="32"><i class="icofont icofont-restaurant-menu"></i> Delivery 9</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="33"><i class="icofont icofont-restaurant-menu"></i> Delivery 10</button></div>
					<!-- <div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="34"><i class="icofont icofont-restaurant-menu"></i> Mesa 34</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="35"><i class="icofont icofont-restaurant-menu"></i> Mesa 35</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="36"><i class="icofont icofont-restaurant-menu"></i> Mesa 36</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="37"><i class="icofont icofont-restaurant-menu"></i> Mesa 37</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="38"><i class="icofont icofont-restaurant-menu"></i> Mesa 38</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="39"><i class="icofont icofont-restaurant-menu"></i> Mesa 39</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-azul btn-lg btn-block btn-outline btnMesa btnSinBorde" id="40"><i class="icofont icofont-restaurant-menu"></i> Mesa 40</button></div> -->
				</div>

		<div class="row DetalleMesa hidden">
			<div class="col-xs-12 col-sm-9">
				
				<div class="row obsMesa">
					<div class="col-xs-6"><label for="">Observaciones para Cocina:</label>
					<p class="mayuscula" id="pDetCocina"></p></div>
					<div class="col-xs-6"><label for="">Observaciones para Bar:</label>
					<p class="mayuscula" id="pDetBar"></p></div>
				</div>
				<div class="row">
						<div class="col-xs-6 text" style="padding-left: 45px;"><h4>Producto</h4></div>
						<div class="col-xs-3 text"><h4>Cantidad</h4></div>
						<div class="col-xs-2 text"><h4>SubTotal</h4></div>
					
				</div>
				<div class="contanedorDivsProductos">

					<!-- <div class="divUnSoloProducto row"><div class="col-xs-7"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto" id="">Suspiro a la limeña</h4> </div><div class="col-xs-3"><button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">1</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">6.10</span>S/. <span class="valorTotalProducto">6.10</span></h5></div></div> -->
				</div>
			</div>
			<div class="col-xs-12 col-sm-3">
				<h3 class="text-center">Mesa: <span id="idMesaSpan"></span></h3> <span class="hidden" id="idPedidoMesa"></span>
				<p><strong>N° Items por categoría:</strong></p>
				<div class="clContenedorCateg">
						<?php include 'php/listarCategoriasGrupal.php'; ?>
					</div>
				<h3 class="text-center">Total S/. <span id="idTotalSpan">0.00</span></h3>
					
				<button class="btn btn-primary btn-outline btn-block hidden"><i class="icofont icofont-users"></i> Asignar cliente</button>
				<button class="btn btn-morado btn-outline btn-block" id="btnImprCta"><i class="icofont icofont-print"></i> Imprimir cuenta</button>
				<button class="btn btn-success btn-outline btn-block" id="btnCobrarCliente"><i class="icofont icofont-money-bag"></i> Cobrar</button>
				<button class="btn btn-warning btn-outline btn-block" id="btnCajaAgregarProducto"><i class="icofont icofont-bbq"></i> Agregar producto</button>
				<button class="btn btn-danger btn-outline btn-block" id="btnCancelarPedido"><i class="icofont icofont-close-circled"></i> Cancelar pedido</button>
				<button class="btn btn-primary btn-outline btn-block" id="btnMoverPedido"><i class="icofont icofont-paper"></i> Mover mesa</button>
				<button class="btn btn-morado btn-outline btn-block" id="btnMoverPlatos"><i class="icofont icofont-pie"></i> Separar platos</button>
				<!-- <button class="btn btn-danger btn-lg btn-outline btn-block" id="btnDsctoOcasional"><i class="icofont icofont-paper"></i> Agregar descuento</button> -->
			</div>
		</div>
			<?php 
			}else{ include 'php/licenciaDemo.php'; } ?>
					<!-- Fin de meter contenido principal -->
				</div>
					
				</div>
		</div>
</div>
<!-- /#page-content-wrapper -->
</div><!-- /#wrapper -->

<!-- Modal para preguntar que tipo de cliente es -->
<div class="modal fade modal-preguntarCliente" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog " role="document">
	<div class="modal-content">
		<div class="modal-header-wysteria">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Pago con efectivo: <span id="spanIdInventario"></span></h4>
		</div>
		<div class="modal-body">
				<div class="container-fluid">
					<div class="col-xs-6"><button class="btn  btn-primary btn-lg btn-block btn-outline" id="btnClienteSimple"><i class="icofont icofont-money-bag"></i> Pago efectivo</button></div>
				<div class="col-xs-6"><button class="btn  btn-success btn-lg btn-block btn-outline" id="btnClienteEspecial"><i class="icofont icofont-visa-alt"></i> Pago tarjeta</button></div>
				</div>
		</div>
		<div class="modal-footer"> <button class="btn btn-danger btn-outline" data-dismiss="modal"><i class="icofont icofont-close"></i> Cancelar</button></div>
	</div>
</div>
</div>

<!-- Modal para finalizar el pedido como venta con tarjeta -->
<div class="modal fade modal-finalizarPedidoAVentaTarjeta" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog " role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Pago con tarjeta: <span id="spanIdInventario"></span></h4>
		</div>
		<div class="modal-body text-center">
			<p>La cuenta de la <strong>«Mesa <span id="queMesaEsSpan2"></span>»</strong> es de </p>
			<div><h3 style="display: inline-block; margin-top: 0px; margin-bottom: 0px;">S/. </h3> <h3 id="h3CuentaFinal2" style="display: inline-block;margin-top: 0px; margin-bottom: 0px;">0.00</h3></div>
			<p class="">¿Con qué tarjeta está pagando el cliente?</p>
			<div class="row ">
				<div  id="divSelectTarjeta">
					<select class="selectpicker mayuscula" title="Tarjeta..."  data-width="50%" data-live-search="true">
						<?php require 'php/listarTarjetasPagoOpt.php'; ?>
					</select>
				</div>
			</div>
			
			
			<div class="row ">
				<p>Ingrese el monto de la tarjeta:</p>
				<div class=" col-xs-6  col-xs-offset-3"><input type="number" id="txtCuantPagaClienteTarjet" class="form-control input-lg esMoneda text-center"></div>
			</div>
			<div class="row ">
				<p>Monto restante en efectivo:</p>
				<div class=" col-xs-6  col-xs-offset-3"><input type="number" id="txtCuantPagaClienteEfect" disabled class="form-control input-lg esMoneda text-center"></div>
			</div>
			<label class="text-danger text-center labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		<div class="modal-footer"> <button class="btn btn-danger btn-outline" data-dismiss="modal"><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-primary btn-outline" id="btbSalvarVentaTarjeta"><i class="icofont icofont-save"></i> Guardar</button></div>
	</div>
</div>
</div>



<!-- Modal para completar datos de facturación -->
<div class="modal fade " id="modalTipoComprobante" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog " role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Tipo de comprobante</h4>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<p >¿Qué comprobante desea?</p>
					<select class="form-control" id="sltComprobanteEfectivo" >
						<option value="0">Venta interna</option>
						<option value="3">Boleta electrónica</option>
						<option value="1">Factura electrónica</option>
					</select>
				</div>
				<div class="col-xs-8 col-xs-offset-2 hidden" id="divDetalleBoleta">
					<p id="pRuc">RUC - DNI</p>
					<div class="input-group">
						<input type="text" id="txtRUC" class="form-control input-lg text-center" autocomplete="off">
						<span class="input-group-btn">
							<button class="btn btn-secondary btn-lg" onclick="buscarReniec()"><img src="images/reniec.png" width="20"> Reniec</button>
						</span>
					</div>
					<p id="pRazon">Nombre o Razón social</p>
					<input type="text" id="txtRazon" class="form-control input-lg text-center" autocomplete="off">
					<p>Dirección</p>
					<input type="text" id="txtDireccion" class="form-control input-lg text-center" autocomplete="off">
					<div class="hidden text-danger" id="divErrorMnj"> <br><i class="icofont icofont-warning"></i> <span class="texto"></span></div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button class="btn btn-success btn-outline" id="btnSiguientePaso"><i class="icofont icofont-simple-right"></i> Siguiente</button></div>
	</div>
</div>
</div>

<!-- Modal para finalizar el pedido como venta con efectivo -->
<div class="modal fade modal-finalizarPedidoAVenta" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog " role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Pago con efectivo: <span id="spanIdInventario"></span></h4>
		</div>
		<div class="modal-body">
			<p class="text-center">La cuenta de la <strong>«Mesa <span id="queMesaEsSpan"></span>»</strong> es de </p>
			<div class="text-center"><h3 style="display: inline-block; margin-top: 0px; margin-bottom: 0px;">S/. </h3> <h3 id="h3CuentaFinal" style="display: inline-block;margin-top: 0px; margin-bottom: 0px;">0.00</h3></div>
			<p class="text-center">¿Con cuánto está pagando el cliente?</p>
			<div class="row ">
				<div class=" col-xs-6  col-xs-offset-3"><input type="number" id="txtCuantoPagaCliente" class="form-control input-lg esMoneda text-center"></div>
			</div>
			<label class="text-danger text-center labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		<div class="modal-footer"> <button class="btn btn-danger btn-outline" data-dismiss="modal"><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-primary btn-outline" id="btbSalvarVenta"><i class="icofont icofont-save"></i> Guardar</button></div>
	</div>
</div>
</div>

<!-- Modal para indicar que falta completar campos o datos con error -->
<div class="modal fade modal-mostrarDetalleInventario" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Detalles del inventario: <span id="spanIdInventario"></span></h4>
		</div>
		<div class="modal-body">
			<div class="row container"> <strong>
				<div class="col-xs-4">Producto</div>
				<div class="col-xs-1">Cantidad</div>
				<div class="col-xs-2">Precio</div>
				<div class="col-xs-2">Sub-Total</div></strong>
			</div>
			<div class="row container" id="detProductoInv">
				
			</div>
			<div class="row container-fluid text-right" style="padding-right: 100px"><strong>Total valorizado:</strong> <span id="spanvalorInvent">S/. 3.00</span></div>
		</div>
		<div class="modal-footer"> <button class="btn btn-primary btn-outline" data-dismiss="modal"><i class="icofont icofont-alarm"></i> Aceptar</button></div>
	</div>
</div>
</div>

<!-- Modal para decir el vuelto -->
<div class="modal fade modal-VueltoConExito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Venta guardada con éxito</h4>
		</div>
		<div class="modal-body">
			<p><strong>Venta guardada</strong>. Cuenta S/. <span id="spanVueltoEx"></span></p>
			<div class="text-center"><h3 style="display: inline-block; margin-top: 0px; margin-bottom: 0px;">S/. </h3> <h3 id="h3VueltoFinal" style="display: inline-block;margin-top: 0px; margin-bottom: 0px;">0</h3></div>
		<div class="modal-footer">
			<button class="btn btn-success btn-outline" data-dismiss="modal" ><i class="icofont icofont-social-meetme"></i> Aceptar</button>
		</div>
	</div>
	</div>
</div>
</div>

<!-- Modal para ver los ultimos tickets -->
<div class="modal fade modal-ver10Tickets noselect" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm"  role="document">
	<div class="modal-content">
		<div class="modal-header-morado">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ver 10 últimos tickets</h4>
		</div>
		<div class="modal-body">
			<?php include 'php/listar10UltimosPedidos.php'; ?>
			<!-- <p> <span>11.35 am</span> <strong>Mesa 1: </strong> <span>S/. 50.20</span> <button class="btn btn-sm btn-morado btn-outline"><i class="icofont icofont-print"></i></button></p> -->

		</div>
		<div class="modal-footer">
			<button class="btn btn-morado btn-outline" data-dismiss="modal"  ><i class="icofont icofont-social-meetme"></i> Aceptar</button>
		</div>
	

	</div>
</div>
</div>

<!-- Modal para mover de mesa a un pedido -->
<div class="modal fade modal-moverMesa noselect" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm"  role="document">
	<div class="modal-content">
		<div class="modal-header-morado">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Mover pedido</h4>
		</div>
		<div class="modal-body">
			<label for="">Ingrese ¿A qué mesa debe ir el pedido?</label>
			<input type="number" class="form-control text-center" id="txtDestinoDeMesa">
			<label class="text-danger text-center labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		<div class="modal-footer">
			<button class="btn btn-morado btn-outline" id="btnMoverMesa" ><i class="icofont icofont-social-meetme"></i> Mover</button>
		</div>
	

	</div>
</div>
</div>

<!-- Modal para buscar un producto -->
<div class="modal fade modal-buscarProducto noselect" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog"  role="document">
	<div class="modal-content">
		<div class="modal-header-morado">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Agregar producto</h4>
		</div>
		<div class="modal-body">
			<!-- <label for="">Ingrese un término para filtrar</label>
			<input type="text" class="form-control" id="txtParaFiltrarProducto"> -->
			<?php include 'php/rellenoCategoriasCabeceras.php'; ?>
	</div>
	</div>
</div>
</div>

<!-- Modal para advertir que se elimina todo -->
<div class="modal fade modal-deseasAnular" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog " role="document">
	<div class="modal-content">
		<div class="modal-header-danger">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Anular pedido</h4>
		</div>
		<div class="modal-body">
			<p class="text-center">Estas por anular el pedido, deseamos saber: ¿Por qué deseas anular?</p>
			<div class="container-fluid">
				<div class="col-xs-8 col-xs-offset-2"><input type="text" class="form-control mayuscula" id="txtRazonAnular" autocomplete="off"></div>
			</div>
			<div class="checkbox checkbox-success text-center">
						<input id="chkReglas" class="styled" type="checkbox" value="">
						<label for="chkReglas">Acepto los cambios</label>
					</div>
			<label class="text-danger text-center labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		<div class="modal-footer">
			<button class="btn btn-default btn-outline" data-dismiss="modal"><i class="icofont icofont-alarm"></i> Cerrar</button>
			<button class="btn btn-danger btn-outline" id="btnAnularPedidov2"><i class="icofont icofont-fire"></i> Anular pedido</button>
		</div>
	</div>
	</div>
</div>

<!-- Modal para: -->
<div class='modal fade modalDescuentoEspecial' tabindex='-1' role='dialog' aria-hidden='true'>
	<div class='modal-dialog modal-sm' >
	<div class='modal-content '>
		<div class='modal-header-danger'>
			<button type='button' class='close' data-dismiss='modal' aria-label='Close' ><span aria-hidden='true'>&times;</span></button>
			<h4 class='modal-tittle'> Agregar descuento</h4>
		</div>
		<div class='modal-body'>
			<label for="">Descuento para «<span id="spanProdDscto"></span>»</label>
			<label for="">Monto S/ <small><em>(Máximo 10% = S/. <span id="spanDsctoMaximo2"></span> )</em></small></label>
			<input type="number" class="form-control input-lg text-center esMoneda" id="txtModalDescuento" autocomplete="off">
			<label for="">Motivo de descuento:</label>
			<input type="text" class="form-control input-lg text-center mayuscula" id="txtModalObsDscto" autocomplete="off">
			<label class="text-danger text-center labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		<div class='modal-footer'>
			<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>
			<button type='button' class='btn btn-danger btn-outline' id="btnAplicarDscto">Agregar descuento</button>
		</div>
		</div>
	</div>
</div>
		
<!-- Modal para indicar que falta completar campos o datos con error -->
	<div class="modal fade modal-faltaCompletar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header-danger">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Campos incorrectos o faltantes</h4>
			</div>
			<div class="modal-body">
				Ups, un error: <i class="icofont icofont-animal-squirrel"></i> <strong id="lblFalta"></strong>
			</div>
			<div class="modal-footer"> <button class="btn btn-danger btn-outline" data-dismiss="modal"><i class="icofont icofont-alarm"></i> Ok, revisaré</button></div>
		</div>
	</div>
	</div>


<!-- Modal para mostrar que meses son libres para mover -->
<div class="modal fade  noselect" id="modalMesasLibres" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm"  role="document">
	<div class="modal-content">
		<div class="modal-header-morado">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Mesas libres para mover</h4>
		</div>
		<div class="modal-body">
			<p>Seleccione una mesa nueva:</p>
			<select name="" id="sltLibresParaMover" class="form-control"></select>
			<p>Esta moviendo los platos:</p>
			<ul id="listaNombres"></ul>
		</div>
		<div class="modal-footer">
			<button class="btn btn-morado btn-outline" id="btnSepararPlatos" data-dismiss="modal"><i class="icofont icofont-pie"></i> Separar platos</button>
	</div>

	</div>
</div>
</div>

<?php include 'php/llamandoModals.php';
include "footers.php";
?>

<style>
	
</style>

<script>
$(document).ready(function(){
datosUsuario();
$.ticket = [];
$.pedido=[];
$.creandoFactura=false;
$.estadoDividir=true;
$('#btnObtenerEstadoMesas').click();
$('.selectpicker').selectpicker('refresh');
$('.mitooltip').tooltip();
$('input').keypress(function (e) {
	if (e.keyCode == 13)
	{
		$(this).parent().next().children().focus();
		//$(this).parent().next().children().removeAttr('disabled'); //agregar atributo desabilitado
	}
});

});//Fin de document ready

$('#btnObtenerEstadoMesas').click(function () {
	$.ajax({url:'php/retornarMesaEstado.php', type: 'POST'}).done(function (resp) {
		//console.log(resp)
		$.each(JSON.parse(resp), function (i, dato) {// console.log(dato)
			if(dato.estadoMesa=='mesaOcupado'){
				$(`#${dato.idMesa}`).removeClass('mesaLibre').removeClass('btn-azul').addClass(`${dato.estadoMesa}`).addClass('btn-rojoFresa').find('i').removeClass('icofont-food-cart').addClass('icofont-spoon-and-fork');
			}else{
				$(`#${dato.idMesa}`).removeClass('mesaOcupado').removeClass('btn-rojoFresa').addClass(`${dato.estadoMesa}`).addClass('btn-azul').find('i').removeClass('icofont-spoon-and-fork').addClass('icofont-food-cart');;
			}
		});
	});
});
$('.btnMesa').click(function () {
	if( $(this).hasClass('mesaOcupado')){
		$('.divMesas').addClass('hidden');
		$('.DetalleMesa').removeClass('hidden');
		$('#btnRegresarAMesas').removeClass('hidden');
		$('#btnObtenerEstadoMesas').addClass('hidden');
		var iddeMesa=$(this).attr('id');
		$('#idMesaSpan').text(iddeMesa);
		var sumaTotales=0, cantRes=0,  descontar=0;
		$('.contanedorDivsProductos').children().remove();
		
		$.ajax({url:'php/listarPedidoMesaOcupada.php', type: 'POST', data: {mesa: iddeMesa}}).done(function (resp) { 
			//console.log(resp);
			$.pedido=JSON.parse(resp);
			$.each(JSON.parse(resp), function (i, dato) { //console.log(dato)
				if(dato.observacCocina==''){$('#pDetCocina').parent().addClass('hidden');}else{$('#pDetCocina').text(dato.observacCocina).parent().removeClass('hidden');}
				if(dato.observacBar==''){$('#pDetBar').parent().addClass('hidden');}else{$('#pDetBar').text(dato.observacBar).parent().removeClass('hidden');}
				$('#idPedidoMesa').text(dato.idPedido);
				if(dato.prodPrecio>0){
					$('.contanedorDivsProductos').append(`<div class="divUnSoloProducto row"><div class="col-xs-6"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto" id="${dato.idProducto}"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto mayuscula" id="${dato.idProducto}">${dato.prodDescripcion}</h4> <span class="notaPed">${dato.pedNota}</span></div><div class="col-xs-3"><button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">${dato.pedCantidad}</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">${dato.prodPrecio}</span>S/. <span class="valorTotalProducto">${parseFloat(dato.subTotal).toFixed(2)}</span></h5></div> <div class="divPrint"><button class="btn btn-success btn-outline btn-sm btnSinBorde btnPrintHot" data-quees="${dato.tpDivBebidaCocina}" ><i class="icofont icofont-print"></i></button><button class="btn btn-danger btn-outline btn-sm btnSinBorde btnDsctoHot" ><i class="icofont icofont-swoosh-down"></i></button></div>
						<div class="divSeleccionar hidden">
							<div class="form-check">
							  <input class="form-check-input chkPlato" data-id="${dato.id}" type="checkbox" value="" id="">
							</div>
						</div>
					</div>`);
				}else{
					$('.contanedorDivsProductos').append(`<div class="divUnSoloProducto divUnSoloDescuento row"><div class="col-xs-6"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto" id="${dato.idProducto}"><i class="icofont icofont-close"></i></button> <span class="h4NombreProducto mayuscula " id="${dato.idProducto}">${dato.pedNota}:</span> <em class="mayuscula notaPed">${dato.prodDescripcion}</em></div><div class="col-xs-3"></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">${dato.prodPrecio}</span>S/. <span class="valorTotalProducto">${parseFloat(dato.subTotal).toFixed(2)}</span></h5></div> </div>`);
				}
				
				var promos= listarPromos(dato.idProducto, dato.pedCantidad);
				
				if(dato.idProcedencia==2){
					cantRes=parseInt($(`.todasBebidas`).find('.platoResValor').text())+1;
					$(`.todasBebidas`).find('.platoResValor').text(cantRes);}
				else{
					cantRes=parseInt($(`.${dato.tpNombreWeb}`).find('.platoResValor').text())+1;
					$(`.${dato.tpNombreWeb}`).find('.platoResValor').text(cantRes);}
				
				promos.done(function () {
					sumaTotales+=parseFloat(dato.subTotal);
					$('#idTotalSpan').text(parseFloat(sumaTotales-$.sumaDscto).toFixed(2));
				});
				
			});
		});

	}else{
		toastr.options={'positionClass': "toast-bottom-center"}
		toastr.warning('Ésta mesa aún no tiene pedidos.');
	}
});

function verPedidoPorMesa(iddeMesa){
	$.ajax({url:'php/listarPedidoMesaOcupada.php', type: 'POST', data: {mesa: iddeMesa}}).done(function (resp) { 
		//console.log(resp);
		$.pedido=JSON.parse(resp);
	});
}
$('#btnRegresarAMesas').click(function () {
	$('.divMesas').removeClass('hidden');
	$('#btnMoverPlatos').removeClass('hidden');
	$('.DetalleMesa').addClass('hidden');
	$('#btnMoverSelecionados').addClass('hidden');
	$('#btnRegresarAMesas').addClass('hidden');
	$('#btnObtenerEstadoMesas').removeClass('hidden');
	$('.platoResValor').text(0);
	$('#btnObtenerEstadoMesas').click();

});
$('#txtCuantoPagaCliente').keypress(function (e) {
	if (e.keyCode == 13) { 	$('#btbSalvarVenta').click(); }
})
$('#btnCancelarPedido').click(function () {
	$('#txtRazonAnular').val('');
	//$('#chkReglas:checked').val('');
	$('#chkReglas').prop('checked', false);
	$('.modal-deseasAnular').modal('show');
});
$('body').on('click', '.btnRemoverProducto',function () {
	var padre= $(this).parent().parent();
	var idEliminar=$(this).attr('id');
	//var contenedor=$(this).parent().parent();
	var cantDivs=$('.contanedorDivsProductos .divUnSoloProducto ').length;
	if (cantDivs==1){
		$('#btnCancelarPedido').click();
	}
	else{
		if( padre.hasClass('divUnSoloDescuento') ){
			$.ajax({url:'php/eliminarDescuentoPedido.php', type:"POST", data:{idPed:$('#idPedidoMesa').text() , idProd:idEliminar, descto: padre.find('.valorUndProducto').text() }}).done(function (resp) {//console.log(resp)
				if(resp==true){
					$('#idTotalSpan').text(parseFloat(parseFloat($('#idTotalSpan').text())-parseFloat(padre.find('.valorUndProducto').text())).toFixed(2));
					padre.remove();
				}
			});
		}
		else{
			$.ajax({url:'php/eliminarProductoPedido.php', type:"POST", data:{idProd:idEliminar , mesa:$('#idMesaSpan').text(), idUser:$.JsonUsuario.idUsuario }}).done(function (resp) { console.log(resp)
			if(parseInt(resp)>0){
				var vTotalProd=parseFloat($(`.contanedorDivsProductos`).find(`#${idEliminar}`).parent().parent().find('.valorTotalProducto').text());
				var vTotalPed=parseFloat($('#idTotalSpan').text());
				$('#idTotalSpan').text(parseFloat(vTotalPed-vTotalProd).toFixed(2));
				$(`.contanedorDivsProductos`).find(`#${idEliminar}`).parent().parent().remove();
			}
		});}
	}
});

$('#btnCobrarCliente').click(function () {
	verPedidoPorMesa($('#idMesaSpan').text());
	$('#sltComprobanteEfectivo').val(0).change();
	$('#queMesaEsSpan').text($('#idMesaSpan').text());
	$('#queMesaEsSpan2').text($('#idMesaSpan').text());
	$('#h3CuentaFinal').text($('#idTotalSpan').text());
	$('#txtCuantoPagaCliente').val('0.00');
	$('#txtCuantPagaClienteTarjet').val('0.00');
	$('#txtCuantPagaClienteEfect').val('0.00');
	$('#txtRUC').val('');
	$('#txtRazon').val('');
	//$('.modal-preguntarCliente').modal('show');
	$('#modalTipoComprobante').modal('show');
});
$('.modal-finalizarPedidoAVenta').on('shown.bs.modal', function() {
	$('#txtCuantoPagaCliente').focus();
});
$('.modal-moverMesa').on('shown.bs.modal', function() {
	$('#txtDestinoDeMesa').val('').focus();
});
$('#btnClienteEspecial').click(function(){
	$('#queMesaEsSpan').text($('#idMesaSpan').text())
	$('#h3CuentaFinal2').text($('#idTotalSpan').text())
	$('#spanTipoCliente').text(2);
	$('.modal-preguntarCliente').modal('hide');
	$('.modal-finalizarPedidoAVentaTarjeta').modal('show');

});
$('#btnClienteSimple').click(function(){
	$('#spanTipoCliente').text(1);
	$('.modal-preguntarCliente').modal('hide');
	$('.modal-finalizarPedidoAVenta').modal('show');

});
function imprimirCajaCuenta() { console.log('hola')
	console.log($.ticket.length);
	$.each($('.divUnSoloProducto'), function (i, dato) {
		$.ticket.push({'id': $(dato).find('.h4NombreProducto').attr('id'), 'nomProducto': $(dato).find('.cantidadProducto').text() +' Und. '+ $(dato).find('.h4NombreProducto').text() , 'cant': $(dato).find('.cantidadProducto').text(), 'sub': $(dato).find('.valorTotalProducto').text() });
		});
		var fecha=moment().format('DD/MM/YYYY H:mm a');
		
		$.ajax({url: 'printTicketCaja.php', type: 'POST', data: {numMesa: $('#idMesaSpan').text(), hora: fecha, texto: retornarCadenaImprimir() , usuario: $.JsonUsuario.usuNombres, cuentaTotal: $('#idTotalSpan').text(), paga: $('#txtCuantPagaClienteTarjet').val(), cambio: '0.00'} });
}
$('#btbSalvarVentaTarjeta').click(function () {
	var idMod=$('#divSelectTarjeta').find('li.selected a').attr('data-tokens');
	if( $('#txtCuantPagaClienteTarjet').val()==''){
		$('.modal-finalizarPedidoAVentaTarjeta .labelError').removeClass('hidden').find('.mensaje').text('No se puede guardar montos vacíos.');	}
	else if(idMod==null){ $('.modal-finalizarPedidoAVentaTarjeta .labelError').removeClass('hidden').find('.mensaje').text('Debe selecionar una tarjeta.');}
	else if( $('#txtCuantPagaClienteTarjet').val()> parseFloat( $('#h3CuentaFinal2').text()) ){
		$('.modal-finalizarPedidoAVentaTarjeta .labelError').removeClass('hidden').find('.mensaje').text('El monto de la tarjeta no puede ser superior a la cuenta final.');
	}
	else{
		if(!$.creandoFactura){
			creandoFactura = true;
			insertarAlFacturador();
			/* 	$.each(".divUnSoloProducto", (dato)=>{
					consumo.push({
						nombre: 
					});
				}) */
		
				$.ajax({url:'php/insertarVentaFinalTarjeta.php', type: 'POST', data: {
					mesa: $('#idMesaSpan').text(), idUser: $.JsonUsuario.idUsuario, 
					idCli : 1, //$('#spanTipoCliente').text(), 
				montoTotal: $('#idTotalSpan').text(), idModo: idMod,  pagaTarj: $('#txtCuantPagaClienteTarjet').val(), pagaEfe: $('#txtCuantPagaClienteEfect').val() }}).done(function (resp) { console.log(resp)
					if(parseInt(resp)>0){
						abriCajon();
						var vuelto= parseFloat($('#txtCuantPagaClienteTarjet').val()-$('#idTotalSpan').text()).toFixed(2);
		
						$('.modal-finalizarPedidoAVentaTarjeta').modal('hide');
						$('.modal-VueltoConExito').modal('show');
						$('#h3VueltoFinal').text('0.00');
						$('#spanVueltoEx').text(parseFloat($('#idTotalSpan').text()).toFixed(2));
						$('#btnRegresarAMesas').click();
						$('#btnObtenerEstadoMesas').click();
						$.creandoFactura=false;
						abriCajon();
					}
				});

		}

	}
});
$('.modal-deseasAnular').on('shown.bs.modal', function() { $('#txtRazonAnular').focus(); });

$('#btbSalvarVenta').click(function () {
	if($('#txtCuantoPagaCliente').val()< parseFloat($('#h3CuentaFinal').text()) || $('#txtCuantoPagaCliente').val()==''){
		$('.modal-finalizarPedidoAVenta .labelError').removeClass('hidden').find('.mensaje').text('No se puede guardar un monto menor a la cuenta.');	}
	else{
		
		insertarAlFacturador();

		/* $.each(".divUnSoloProducto", (dato)=>{
			consumo.push({
				nombre: 
			});
		}) */

		$.ajax({url:'php/insertarVentaFinal.php', type: 'POST', data: {
			mesa: $('#idMesaSpan').text(),cuantoCobra: $('#txtCuantoPagaCliente').val(), idUser: $.JsonUsuario.idUsuario, 
			idCli : 1, //$('#spanTipoCliente').text(),
			montoTotal: $('#idTotalSpan').text() }}).done(function (resp) { console.log(resp)
			if(parseInt(resp)==true){
				abriCajon();
				var vuelto= parseFloat($('#txtCuantoPagaCliente').val()-$('#idTotalSpan').text()).toFixed(2);

				$('.modal-finalizarPedidoAVenta').modal('hide');
				$('.modal-VueltoConExito').modal('show');
				$('#h3VueltoFinal').text(vuelto);
				$('#spanVueltoEx').text(parseFloat($('#idTotalSpan').text()).toFixed(2));
				$('#btnRegresarAMesas').click();
				$('#btnObtenerEstadoMesas').click();
			}
		});
	}
});
$('#btnImprCta').click(function () { imprimirCuentaCliente(); });
function imprimirCuentaCliente() {
	$.ticket=[];
	var cantidadRowTicket=$('.contanedorDivsProductos .divUnSoloProducto').length; //console.log(cantidadRowTicket)
	$.each($('.contanedorDivsProductos .divUnSoloProducto'), function (i, dato) {
		if($(dato).hasClass('divUnSoloDescuento')){
			$.ticket.push({'id': $(dato).find('.h4NombreProducto').attr('id'), 'nomProducto': $(dato).find('.cantidadProducto').text() +'Dcto. '+ $(dato).find('.h4NombreProducto').text() , 'cant': $(dato).find('.cantidadProducto').text(), 'sub': $(dato).find('.valorTotalProducto').text() }); //montoDescontar
		}else{
			$.ticket.push({'id': $(dato).find('.h4NombreProducto').attr('id'), 'nomProducto': $(dato).find('.cantidadProducto').text() +' Und. '+ $(dato).find('.h4NombreProducto').text() , 'cant': $(dato).find('.cantidadProducto').text(), 'sub': $(dato).find('.valorTotalProducto').text() });
		}
		
		if( cantidadRowTicket-1==i){
			var fecha=moment().format('DD/MM/YYYY H:mm a');
			$.ajax({url: 'printTicketCaja.php', type: 'POST', data: {numMesa: $('#idMesaSpan').text(), hora: fecha, texto: retornarCadenaImprimir() , usuario: $.JsonUsuario.usuNombres, cuentaTotal: $('#idTotalSpan').text(), } }).done(function(resp){ console.log( resp );});
		}
		/*console.log($(dato).find('.h4NombreProducto').text() );*/
	
	});
	
}

function retornarCadenaImprimir(){
var totalImprimir=40; //40 defecto
var funProducto = '';
var funPrecio = '';
var lineaImpr='';
var espacioslibres='';
var lineaEntera ='';
var cantlibres=0;
	

$.each($.ticket, function (i, elem) {
	funProducto= elem.nomProducto;
	funPrecio= 'S/. '+elem.sub;
	lineaEntera = funProducto+funPrecio;
	cantlibres=0; espacioslibres='';

// console.log('tamaño total: '+ lineaEntera.length)
// console.log('calculo de linea '+lineaEntera.length/totalImprimir)


	if (lineaEntera.length/totalImprimir>1){
		// console.log('dos lineas')
		cantlibres=50-lineaEntera.length%50;
		// console.log('espacios libres para ultima linea '+ cantlibres)

	for (var i = cantlibres - 1; i >= 0; i--) {
		espacioslibres+=' ';
	};
	lineaImpr+=" "+funProducto+ espacioslibres+funPrecio+'\n';
	// console.log(lineaImpr)
	// console.log(lineaImpr.length)
	}
	else{//console.log('una linea');
		cantlibres=parseInt(totalImprimir-lineaEntera.length);
		//console.log('espacios libres en ultima linea '+ parseInt(totalImprimir-lineaEntera.length))

		for (var i = cantlibres - 1; i >= 0; i--) {
			espacioslibres+=' ';
		};
		lineaImpr+=" "+funProducto+ espacioslibres+funPrecio+'\n';
		//console.log(lineaImpr)
		//console.log(lineaImpr.length)

	}
	});
// console.log(lineaImpr)
return lineaImpr;
}
$('.modal-buscarProducto').on('shown.bs.modal', function() { /*$('#txtParaFiltrarProducto').focus();*/

});
$('#btnCajaAgregarProducto').click(function () {
	listarProductos();
	$('.bs-callout').find('.panel-heading').addClass('collapsed').attr({'aria-expanded':'false'});
	$('.bs-callout').find('.panel-collapse').removeClass('in');
	$('.modal-buscarProducto').modal('show'); });
function listarProductos() {
	$('.modal-buscarProducto .panel-body').children().remove();
	$.ajax({url:'php/listarProductos.php', type:'POST'}).done(function (resp) {
		$.each(JSON.parse(resp), function (i, dato) {
			if(dato.idProcedencia==2){
				if($('#RegTodosBebidas .tipTrago:contains("'+dato.tipDescripcion+'")').length==0){
					$(`#RegTodosBebidas .panel-body`).append(`<p class="tipTrago mayuscula">${dato.tipDescripcion}</p>`);
				}
				$(`#RegTodosBebidas .panel-body`).append(`
				<div class="row divUnSoloProducto" id="${dato.idProducto}"><div class="col-xs-7"><h4 class="h4NombreProducto mayuscula ${dato.tpDivBebidaCocina}" id="${dato.idProducto}">${dato.prodDescripcion}</h4> <span class="stockPlato">(<span class="stockFict">${dato.stockCantidad}</span>)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">${parseFloat(dato.prodPrecio).toFixed(2)}</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
				`);
			}else{
				$(`#${dato.tpNombreWeb} .panel-body`).append(`
				<div class="row divUnSoloProducto" id="${dato.idProducto}"><div class="col-xs-7"><h4 class="h4NombreProducto mayuscula ${dato.tpDivBebidaCocina}" id="${dato.idProducto}">${dato.prodDescripcion}</h4> <span class="stockPlato">(<span class="stockFict">${dato.stockCantidad}</span>)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">${parseFloat(dato.prodPrecio).toFixed(2)}</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
				`);
			}
			
		});
		//console.log(resp);
	});
}
$('.DetalleMesa').on('click', '.btnSumarProducto', function () { 
	var contenedor=$(this).parent().parent();
	var idProd= contenedor.find('.h4NombreProducto').attr('id');
	var preciov=parseFloat(contenedor.find('.valorUndProducto').text());
	var idmesa=$('#idMesaSpan').text();

	$.ajax({url:'php/sumarUnProductoAMesa.php', type: 'POST', data:{idProd: idProd, mesa:idmesa, idUser: $.JsonUsuario.idUsuario, cantidad:1 }}).done(function(resp){// console.log(resp)
		var response=JSON.parse(resp)[0];
		if(response.respuesta=='Y'){
			var cant=parseInt(contenedor.find('.cantidadProducto').text())+1;
			contenedor.find('.cantidadProducto').text(cant);
			contenedor.find('.valorTotalProducto').text(parseFloat(preciov*cant).toFixed(2));
			var total=parseFloat(parseFloat($('#idTotalSpan').text())+preciov).toFixed(2);
			$('#idTotalSpan').text(total);
		}
	});
});
$('.DetalleMesa').on('click', '.btnRestarProducto', function () { 
	var contenedor=$(this).parent().parent();
	var idProd= contenedor.find('.h4NombreProducto').attr('id');
	var preciov=parseFloat(contenedor.find('.valorUndProducto').text());
	var idmesa=$('#idMesaSpan').text();

	if(contenedor.find('.cantidadProducto').text()>1){
		$.ajax({url:'php/restarUnProductoAMesa.php', type: 'POST', data:{prod: idProd, mesa:idmesa, idUser: $.JsonUsuario.idUsuario, precio:preciov }}).done(function(resp){ //console.log(resp)
			if(parseInt(resp)>0){
				var cant=parseInt(contenedor.find('.cantidadProducto').text())-1;
				contenedor.find('.cantidadProducto').text(cant);
				contenedor.find('.valorTotalProducto').text(parseFloat(preciov*cant).toFixed(2));
				var total=parseFloat(parseFloat($('#idTotalSpan').text())-preciov).toFixed(2);
				$('#idTotalSpan').text(total);
			}
		});	
	}
});
$('#txtCuantPagaClienteTarjet').keyup(function (e) {
	var cantT=parseFloat($('#h3CuentaFinal2').text());
	var pagT=parseFloat($('#txtCuantPagaClienteTarjet').val());
	resF= cantT-pagT;/* console.log(resF)*/
	if(resF>=0){$('#txtCuantPagaClienteEfect').val(resF.toFixed(2))}
		else{$('#txtCuantPagaClienteEfect').val('0.00')}
});
$('.modal-buscarProducto').on('click', '.btnAgregarProducto', function () {
	var contenedor=$(this).parent().parent();
	var idProd=contenedor.attr('id'); 
	var padreMayor=contenedor.parent().parent().attr('id'); 
	var platoProd='';
	if(padreMayor=='RegTodosBebidas'){platoProd='divProdBebida'}else{platoProd='divFondos';}
	var preccio=parseFloat(contenedor.find('.valorProducto').text());
	if($('.contanedorDivsProductos').find('#'+idProd).html()==null){
		$('.contanedorDivsProductos').append(`<div class="divUnSoloProducto row"><div class="col-xs-6"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto" id="${idProd}"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto mayuscula" id="${idProd}">${contenedor.find('.h4NombreProducto').text()}</h4> </div><div class="col-xs-3"><button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">1</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">${preccio.toFixed(2)}</span>S/. <span class="valorTotalProducto">${preccio.toFixed(2)}</span></h5></div> <div><button class="btn btn-success btn-outline btn-sm btnPrintHot"  data-quees="${platoProd}" ><i class="icofont icofont-print"></i></button><button class="btn btn-danger btn-outline btn-sm btnSinBorde btnDsctoHot" ><i class="icofont icofont-swoosh-down"></i></button></div></div>`);
		$.ajax({url: 'php/insertarPedidoDetalle.php', type:'POST', data:{idProd:idProd ,  precio:preccio, cantidad:1,  idPedido: $('#idPedidoMesa').text(), nota: '' }}).done(function (resp) { console.log(resp)
				var response=JSON.parse(resp)[0];
				if(response.respuesta=='Y'){
					var cant=1;
					var total=parseFloat(parseFloat($('#idTotalSpan').text())+preccio);
					// console.log(total)
					$('#idTotalSpan').text(total.toFixed(2));
			}
			$.estadoDividir=false;
			$('#btnMoverPlatos').click();
			$('#btnMoverSelecionados').addClass('hidden');
			$('#btnMoverPlatos').addClass('hidden');
		});
	}else{
		$('.contanedorDivsProductos').find('#'+idProd).parent().parent().find('.btnSumarProducto').click();
	}
	$('.modal-buscarProducto').modal('hide');
});
$('#btnAnularPedidov2').click(function () {
	if( $('#txtRazonAnular').val()=='' ){$('.modal-deseasAnular .labelError').removeClass('hidden').find('.mensaje').text('Debe incluir una razón breve para guardar');}
	else if( !( $('#chkReglas').prop('checked') )){ //$('#chkReglas:checked').val()==''
		$('.modal-deseasAnular .labelError').removeClass('hidden').find('.mensaje').text('Tiene que aceptar los cambios que se harán.');
	}else{
		$('.modal-deseasAnular .labelError').addClass('hidden');
		$.ajax({url:'php/cancelarPedido.php', type:'POST', data:{mesa:$('#idMesaSpan').text() , idUser: $.JsonUsuario.idUsuario, comentario:'«'+$('#txtRazonAnular').val()+'». '+$.JsonUsuario.usuNombres }}).done(function (resp) {
		//console.log(resp)
		$('.modal-deseasAnular').modal('hide');
		if(parseInt(resp)>0){
			$('#btnRegresarAMesas').click();
			$('#btnObtenerEstadoMesas').click();
		}
		})
	}
});
$('#btnMoverPedido').click(function () {
	$('.modal-moverMesa').modal('show');
});
$('#txtDestinoDeMesa').keypress(function (e) {
	if (e.keyCode == 13){$('#btnMoverMesa').click();}
});
$('#btnMoverMesa').click(function () {
	if( $('#txtDestinoDeMesa').val()<=0 || $('#txtDestinoDeMesa').val()>40 || $('#txtDestinoDeMesa').val()=='' ){
		$('.modal-moverMesa .labelError').removeClass('hidden').find('.mensaje').text('Ingrese una mesa en el rango de 1 a 40.');
	}
	else if($('#txtDestinoDeMesa').val()==$('#idMesaSpan').text()){
		$('.modal-moverMesa .labelError').removeClass('hidden').find('.mensaje').text('El pedido ya se encuentra en ésta mesa.');
	}
	else{
		$.ajax({url: 'php/updateMoverMesa.php', type: 'POST', data: {mesaAnt: $('#idMesaSpan').text(), mesaNuevo: $('#txtDestinoDeMesa').val()}}).done(function (data) {
			if(parseInt(data)>0){
				$('.modal-moverMesa').modal('hide');
				$('#btnRegresarAMesas').click();
			}
		});
		$('.modal-moverMesa .labelError').addClass('hidden');
	}
});
$('#btnVerTickets').click(function () {
	$('.modal-ver10Tickets').modal('show');
});
$('.btnReImprimirTicket').click(function () {
	var iddeMesa=$(this).attr('idMesa');
	var itemsCocina='', itemsBar='';
	$.ajax({url:'php/listarPedidoMesaOcupada.php', type: 'POST', data: {mesa: iddeMesa}}).done(function (resp) { 
		var cantElem=JSON.parse(resp).length;
		$.each(JSON.parse(resp), function (i, dato) { console.log(dato)
			if(dato.idProcedencia==2){//se va a bar
				itemsBar+=' '+dato.pedCantidad +' '+dato.prodDescripcion+'. '+dato.pedNota+"\n";
			}else{//se va a cocina
				itemsCocina+=' '+dato.pedCantidad +' '+dato.prodDescripcion+'. '+dato.pedNota+"\n";
			}
			if(i==cantElem-1){
				if(itemsBar.length>0){
					$.ajax({url:'printTicketBar.php', type:'POST', data: {hora:moment().format('DD [de] MMMM [de] YYYY h:mm a'),numMesa:$('#spanNumMesa').text(), texto:itemsBar, usuario: $.JsonUsuario.usuNombres, obsBarra: '' }}).done(function (resp) {
				console.log(resp)
				});
				}
				if(itemsCocina.length>0){
					$.ajax({url:'printTicketCocina.php', type:'POST', data: {hora:moment().format('DD [de] MMMM [de] YYYY h:mm a'),numMesa:$('#spanNumMesa').text(), texto:itemsCocina, usuario: $.JsonUsuario.usuNombres, obsCocina: '' }}).done(function (resp) {
					console.log(resp)
					});
				}
				/*console.log(itemsBar)
				console.log(itemsCocina)*/
			}
		});
	});
});
$('.DetalleMesa').on('click', '.btnPrintHot', function() {
	//console.log($('#idPedidoMesa').text());
	var mesa = $('#idMesaSpan').text();
	var quees= $(this).attr('data-quees');
	var contenedor = $(this).parent().parent();
	var cantidad = contenedor.find('.cantidadProducto').text();
	var producto = contenedor.find('.h4NombreProducto').text()
	var itemsBar= ' '+cantidad +' '+producto+'. '+"\n";
	if( quees == 'divProdBebida'){
		$.ajax({url:'printTicketBar.php', type:'POST', data: {hora:moment().format('DD/MM/YYYY h:mm a'), numMesa: mesa, texto:itemsBar, usuario: $.JsonUsuario.usuNombres, obsBarra: '' }}).done(function (resp) {
			console.log(resp)
		});
	}else{
		$.ajax({url:'printTicketCocina.php', type:'POST', data: {hora:moment().format('DD/MM/YYYY h:mm a'), numMesa: mesa, texto:itemsBar, usuario: $.JsonUsuario.usuNombres, obsBarra: '' }}).done(function (resp) {
			console.log(resp)
		});
	}
});
function listarPromos(idProduc, cantidad) {
	return $.ajax({url: 'php/listarPromociones.php', type: 'POST', data: {idProd:idProduc, debe: cantidad }}).done(function (resp) {
		// console.log(resp);
		$('.contanedorDivsProductos').append(resp);
		$.sumaDscto = 0;
		$.each($('.contanedorDivsProductos').find('.montoDescontar'), function (i, ele) {
			$.sumaDscto+= parseFloat($(ele).text());
			//console.log($(ele).text());
		});

	});
}
$('.modalDescuentoEspecial').on('shown.bs.modal', function () {
	$('#txtModalDescuento').val('').focus();
	var maximo= parseFloat($('#idTotalSpan').text())*0.1;
	$('#spanDsctoMaximo2').text( maximo.toFixed(2));
});
$('.contanedorDivsProductos').on('click', '.btnDsctoHot', function (e) {
	$('#spanProdDscto').text( $(this).parent().parent().find('.h4NombreProducto').text() );
	$('#spanProdDscto').attr('data-idPro', $(this).parent().parent().find('.h4NombreProducto').attr('id') );
	$('#spanProdDscto').attr('data-nomPro', $(this).parent().parent().find('.h4NombreProducto').text() );
	$('.modalDescuentoEspecial').modal('show');
});
$('#btnAplicarDscto').click(function() {
	var maximo= parseFloat($('#idTotalSpan').text())*0.1;
	if( $('#txtModalDescuento').val()<= maximo ){
		$.ajax({url: 'php/insertarPromocionEspecial.php', type: 'POST', data: {
			pedid: $('#idPedidoMesa').text(),
			idProd: $('#spanProdDscto').attr('data-idPro'),
			montoDscto: $('#txtModalDescuento').val(),
			obsDscto: $('#txtModalObsDscto').val()
		 }}).done(function(resp) {
			$('.modalDescuentoEspecial').modal('hide');

			$('.contanedorDivsProductos').append(`<div class="divUnSoloProducto divUnSoloDescuento row"><div class="col-xs-6"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto" id="${$('#spanProdDscto').attr('data-idPro')}"><i class="icofont icofont-close"></i></button> <span class="h4NombreProducto mayuscula " id="${$('#spanProdDscto').attr('data-idPro')}">${$('#txtModalObsDscto').val()}:</span> <em class="mayuscula notaPed">${$('#spanProdDscto').attr('data-nomPro')}</em></div><div class="col-xs-3"></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">-${$('#txtModalDescuento').val()}</span>S/. <span class="valorTotalProducto">-${$('#txtModalDescuento').val()}</span></h5></div> </div>`);
			var total=parseFloat(parseFloat($('#idTotalSpan').text())-$('#txtModalDescuento').val());
			$('#idTotalSpan').text(total.toFixed(2));

		});
	}else{
		$('.modalDescuentoEspecial .labelError').removeClass('hidden').find('.mensaje').text('Valor máximo para descontar es de S/ ' + maximo.toFixed(2));
	}
});
$('#smallLibre').click(function() {
	$('.divMesas').find('.mesaOcupado').parent().toggleClass('hidden');
});
$('#smallOcupado').click(function() {
	$('.divMesas').find('.mesaLibre').parent().toggleClass('hidden');
});
$('#sltComprobanteEfectivo').change(function() {
	switch($('#sltComprobanteEfectivo').val()){
		case '0': $('#divDetalleBoleta').addClass('hidden'); break;
		case '3': 
			$('#divDetalleBoleta').removeClass('hidden');
			$('#pRuc').text('D.N.I. o R.U.C.');
			$('#pRazon').text('Nombre o Razón Social');
		break;
		case '1': 
			$('#divDetalleBoleta').removeClass('hidden');
			$('#pRuc').text('R.U.C.');
			$('#pRazon').text('Razón Social');
		break;
		default: break;
	}
});
$('#txtRUC').keypress(function (e) { 
	if(e.keyCode == 13){ 
		buscarReniec();
	}
});
$('#txtRUC').focusout(function() {
	//buscarCliente();
});
function  buscarReniec(){
	if( $('#txtRUC').val().length==8 || $('#txtRUC').val().length==11 ){
		let datos = new FormData();
		datos.append('ruc', $('#txtRUC').val())
		fetch('http://localhost/pluginSunat/php/dataSunat.php',{
			method:'POST', body:datos
		})
		.then(resServ=> resServ.json())
		.then(respuesta=>{
			console.log('es',respuesta);
			$('#txtRazon').val( respuesta.razon_social );
			$('#txtDireccion').val( respuesta.domicilio_fiscal );
		})

		/* axios.post('http://localhost/pluginSunat/php/dataSunat.php', {ruc: $('#txtRUC').val()})
		.then((response)=>{ console.log( response.data );
			respuesta = response.data;
			if(respuesta.length>0){
				$('#txtRUC').val( respuesta[0].razon_social );
				$('#txtRazon').val( respuesta[0].domicilio_fiscal );		
			}
		})
		.catch((error)=>{ console.log( error );}); */
	}
}
$('#btnSiguientePaso').click(function() {
	//console.log( $.pedido );

	$('#divErrorMnj').removeClass('hidden');

	if( $('#sltComprobanteEfectivo').val()=="3" && $('#txtRUC').val().length !=8 && parseFloat($('#idTotalSpan').text())>700 ){
		$('#divErrorMnj .texto').text('El campo de RUC/DNI está vacío o no es correcto');
	}else if( $('#sltComprobanteEfectivo').val()=="1" && $('#txtRUC').val().length !=11 ){
		$('#divErrorMnj .texto').text('El campo de RUC/DNI está vacío o no es correcto');
	}else{
		$('#divErrorMnj').addClass('hidden');
		$('#modalTipoComprobante').modal('hide');
		$('.modal-preguntarCliente').modal('show');
		//console.log( 'Pasa' );
	}
});
function insertarAlFacturador(){
	var serie='';

	switch( $('#sltComprobanteEfectivo').val() ){
		case 1: case '1': //Factura
			serie= 'FE02';
		break;
		case 3: case '3': //Boleta
			serie= 'BE02';
		break;
		case 0: case '0': //Otros=Ticket
			serie = '';
		break;
		case -1: case '-1':
			serie = '';
		break;
	}
	var empresa ={
		ruc: '<?= $_COOKIE['ruc'];?>',
		crearArchivo: '<?= $_COOKIE['crearArchivo'];?>',
		facturador: "<?= $_COOKIE['facturador'];?>",
		sucursal: "001"
	};
	var cliente= {dni: '00000000', razon: 'Cliente simple', idCliente:1, tipo:'persona', direccion:'',
		contado: 1, //1:contado, 2:credito
		fechaCredito : moment().format('YYYY-MM-DD'),
		adelanto: 0,
		montoCredito: 0
	};
	var jsonProductos=[];
	if( $('#txtRUC').val()!='' ){
		cliente.dni = $('#txtRUC').val() ;
		cliente.razon = $('#txtRazon').val() ;
		cliente.direccion = $('#txtDireccion').val() ;
	}
	
	$.each($.pedido, (index, data)=>{
		console.log( data );
		jsonProductos.push({
			id: 1,
			nombre: data.prodDescripcion,
			cantidad: data.pedCantidad,
			unidad: 'Und.',
			unidadSunat: 'NIU',
			precio: data.prodPrecio,
			descuento: 0,
			afecto: '1',
			subTotal: data.subTotal
		})
	})
	

	let cabecera = { tipo:$('#sltComprobanteEfectivo').val(), serie, fecha: moment().format('YYYY-MM-DD') }
	axios.post('http://localhost/pluginSunat/php/insertarBoleta_v4.php', {empresa, cliente, cabecera, jsonProductos }) 
	.then((response)=>{ console.log( response.data );
		var jTicket = response.data;
		if($('#sltComprobanteEfectivo').val()!=0){
		$.ajax({url: "http://localhost/pluginSunat/printComprobante.php", type: 'POST', data: {
			ticketera: 'CAJA',
			tipoComprobante: jTicket[0].tipoComprobante,
			rucEmisor: jTicket[0].rucEmisor,
			queEs: jTicket[0].queSoy,
			serie: jTicket[0].serie,
			correlativo: jTicket[0].correlativo,
			tipoCliente: jTicket[0].tipoCliente,
			fecha: jTicket[0].fechaEmision,
			fechaLat: moment(jTicket[0].fechaEmision, 'YYYY-MM-DD').format('DD/MM/YYYY'),
			cliente: jTicket[0].razonSocial,
			docClient: jTicket[0].ruc,
			monedas: jTicket[0].letras,
			descuento: parseFloat(jTicket[0].descuento).toFixed(2),
			costoFinal: parseFloat(jTicket[0].costoFinal).toFixed(2),
			igvFinal: parseFloat(jTicket[0].igvFinal).toFixed(2),
			totalFinal: parseFloat(jTicket[0].totalFinal).toFixed(2),
			productos: jTicket[1],
			direccion:jTicket[0].direccion,
			exonerado: parseFloat(jTicket[0].exonerado).toFixed(2),
			/* placa: jTicket[0].placa, */
		}}).done(function(resp) {
			console.log(resp)
			//location.reload();
		});

		}

	})
	.catch((error)=>{ console.log( error );
	});
	
}
$('#btnMoverPlatos').click(function() {
	if($.estadoDividir){
		$('.divPrint').addClass('hidden')
		$('.divSeleccionar').removeClass('hidden')
		$('#btnMoverSelecionados').removeClass('hidden')
	}else{
		$('.divPrint').removeClass('hidden')
		$('.divSeleccionar').addClass('hidden')
		$('#btnMoverSelecionados').addClass('hidden')
	}
	$.estadoDividir=!$.estadoDividir;

});
$('#btnMoverSelecionados').click(function() {
	var movibles = document.getElementsByClassName('chkPlato');
	var libres = [];
	var nombres='';
	$.platos=[];
	Array.from(movibles).forEach(plato=>{
		
		if( plato.checked ){
			$.platos.push(plato.getAttribute('data-id'))
			nombres +="<li>"+ plato.parentElement.parentElement.parentElement.firstChild.textContent +"</li>";
		}
	});
	if($.platos.length>0){
		$('#sltLibresParaMover').html('');
		$.ajax({url:'php/retornarMesaEstado.php', type: 'POST'}).done(function (resp) {
			//console.log(resp)
			$.each(JSON.parse(resp), function (i, dato) {
				if(dato.estadoMesa!='mesaOcupado'){
					libres.push(dato.idMesa);
					$('#sltLibresParaMover').append(`<option value="${dato.idMesa}">Mesa ${dato.idMesa}</option>`);
				}
			});
	
			$('#listaNombres').html(nombres);
			$('#modalMesasLibres').modal('show');
		});
	}
	
});
$('#btnSepararPlatos').click(function() {
	let idMesa = $('#sltLibresParaMover').val();
	$.post('php/separarPlatos.php',{idMesa, platos: $.platos, idUser: $.JsonUsuario.idUsuario })
	.done((data)=>{
		console.log( data );
		if(data =='ok'){
			$('#btnRegresarAMesas').click();
		}else{
			alert('Hubo un error');
		}
	})
});
function abriCajon(){
	$.post('http://127.0.0.1/restaurant/soloAbrirCaja.php');
}
// SELECT DATE_FORMAT(`cajaFechaRegistro`,'%d/%m/%Y') FROM `caja`
</script>

</body>

</html>
