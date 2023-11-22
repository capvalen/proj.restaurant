<?php
session_start();
require 'php/licence.php';
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
	<title>Productos: Infocat Snack</title>
	<?php include 'headers.php'; ?>
</head>

<body>

<style type="text/css">
.tab-pane {
	display: none;
}
.tab-pane .active {
	display: block;
}
</style>

<div id="wrapper">

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
				
				<div class="logoEmpresa ocultar-mostrar-menu">
					<img class="img-responsive" src="images/empresa.png?version=1.0.png" alt="">
				</div>
				<li>
						<a href="principal.php"><i class="icofont icofont-space-shuttle"></i> Inicio</a>
				</li>
				<li class="active">
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
	<div class="container-fluid">				 
			<div class="row">
				<div class="col-lg-12 contenedorDeslizable">
				<!-- Empieza a meter contenido principal dentro de estas etiquetas -->
				 <?php 
					if ($_SESSION['licencia']=='Ok'){ ?>
					<h2 class="purple-text text-lighten-1"><i class="icofont icofont-options"></i> Panel de configuraciones generales</h2>

					<ul class="nav nav-tabs">
					<li class="active"><a href="#tabAgregarLabo" data-toggle="tab">Listado de productos</a></li>
					<li><a href="#tabCambiarPassUser" data-toggle="tab">Categorías</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para buscar productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabAgregarLabo">
						<!--Inicio de pestaña 01-->
						<button class="btn btn-success btn-outline btn-lg" id="btnAddNewProduct"><i class="icofont icofont-chef"></i> Agregar nuevo producto</button>
							
							<?php include 'php/listarCabecerasCategorias.php'; ?>
							<!-- <div class="row"><strong>
								<div class="col-xs-2">Categoría</div>
								<div class="col-xs-5">Producto</div>
								<div class="col-xs-2">Precio</div>
								<div class="col-xs-2">Stock</div>
								<div class="col-xs-1">@</div></strong>
							</div>
							<div id="divProductosListado">
								
							</div> -->

						<!--Fin de pestaña 01-->
						</div>

						

						<!--Panel para nueva compra-->
						<div class="tab-pane fade container-fluid" id="tabCambiarPassUser">
						<!--Inicio de pestaña 02-->
						<button class="btn btn-success btn-lg btn-outline" id="btnNewCategoria"><i class="icofont icofont-chef"></i> Nueva categoría</button>
						<div class="row"><strong><div class="col-xs-2 text-center">Detalle</div><div class="col-xs-1 text-center">@</div></strong></div>
						<div id="divCategoriaListas"></div>
						<!--Fin de pestaña 02-->
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

<!-- Modal para agregar producto nuevo a la BD -->
<div class="modal fade modal-addProductoBD" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Agregar nuevo producto</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">Producto:</label> <input type="text" class="form-control text-center mayuscula" id="txtModalProdNomAdd">
				<label for="">Precio:</label>
				<input type="number" class="form-control mayuscula text-center esMoneda" id="txtModalPrecioadd" value="0" min=0 step=1 >
				<label for="">Categoría:</label>
				<div  id="divSelectProductoListNew">
					<select class="selectpicker mayuscula" title="Producto..."  data-width="100%" data-live-search="true">
						<?php require 'php/listarProductosCategoriaOption.php'; ?>
					</select>
				</div>
				<label for="">Procedencia:</label>
				<div  id="divSelectProcedenciaListNew">
					<select class="selectpicker mayuscula" title="Procedencia..."  data-width="100%" data-live-search="true">
						<option class="optProducto mayuscula" data-tokens="1">Cocina</option>
						<option class="optProducto mayuscula" data-tokens="2">Bar</option>
						<option class="optProducto mayuscula" data-tokens="3">Almacén</option>
					</select>
				</div>
			</div>
			<div class="" id="divCajaProductosExtrResultado" style="padding-top: 15px;">

			</div>
			</div>
			<label class="text-danger labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-success btn-outline" id="btnGuardarAddConfig"><i class="icofont icofont-save"></i> Guardar</button>
		</div>
	</div>
	</div>
</div>

<!-- Modal para editar una categoría a la BD -->
<div class="modal fade modal-updateStockLessProducto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-danger">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Reducir stock</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row"><span class="hidden" id="spanStockUpd"></span><span class="hidden" id="spanPrecioUpd"></span><span class="hidden" id="spanCategStock"></span><span class="hidden" id="spanMaxStockLess"></span>
					<label for="">Producto: </label> <span id="lessStockNomProducto"></span> <br>
					<label for="">Cantidad a reducir:</label> <input type="number" class="form-control text-center" id="txtLessStockCantidad" step=1 min=0>
					<label for="">Detalle:</label> <input type="text" class="form-control text-center mayuscula" id="txtLessStockDetalle" autocomplete="off">
				</div>
			</div>
			<label class="text-danger labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		
		<div class="modal-footer">
			<button class="btn btn-default btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-danger btn-outline" id="btnUpdLessStock"><i class="icofont icofont-save"></i> Guardar</button>
		</div>
	</div>
	</div>
</div>


<!-- Modal para editar una categoría a la BD -->
<div class="modal fade modal-updateCategoryBD" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Editar Categoría</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
				<div class="row"><span class="hidden" id="spanCategUpd"></span>
					<label for="">Categoría:</label> <input type="text" class="form-control text-center mayuscula" id="txtModalNomCategUpd">
					<label for="">Procedencia:</label>
					<div  id="divSelectProcedenciaUpdCateg">
						<select class="selectpicker mayuscula" title="Procedencia..."  data-width="100%" data-live-search="true">
							<option class="optProducto mayuscula" data-tokens="1">Cocina</option>
							<option class="optProducto mayuscula" data-tokens="2">Bar</option>
						</select>
					</div>
					<!-- <label for="">Activo:</label>
					<div class="checkbox checkbox-success">
						<input id="chkReglas" class="styled" type="checkbox" value="" checked>
						<label for="chkReglas">Activo</label>
					</div> -->
				</div>
			</div>
			<label class="text-danger labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-success btn-outline" id="btnUpdCategConfig"><i class="icofont icofont-save"></i> Guardar</button>
		</div>
	</div>
	</div>
</div>


<!-- Modal para agregar producto extra a caja -->
<div class="modal fade modal-configurarProducto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Configuración de producto</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">Producto:</label>
				<input type="text" class="form-control mayuscula" id="txtModalNomConf">
				<span class="hidden" id="spanModalIdProdConf"></span>
			</div>
			<div class="row">
				<label for="">Categoría:</label>
				<div  id="divSelectProductoListado">
					<select class="selectpicker mayuscula" title="Producto..."  data-width="100%" data-live-search="true">
						<?php require 'php/listarProductosCategoriaOption.php'; ?>
					</select>
				</div>
			</div>
			<div class="row">
				<label for="">Precio:</label>
				<input type="number" class="form-control mayuscula text-center esMoneda" id="txtModalPrecioConf" min=0 step=1 >
			</div>
			<div class="row" style="padding-top: 10px">
				<label for="">Stock actual:</label> <span id="spanStockAct">0</span>
			</div>
			<div class="row">
				<label for="">Agregar</label>
				<input type="number" class="form-control mayuscula text-center" id="txtModalStockConf" value="0"  min=0 step=1 ><input type="number" class="hidden" id="stockAnterior">
			</div>
			<div class="" id="divCajaProductosExtrResultado" style="padding-top: 15px;">

			</div>
			</div>
			<label class="text-danger labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-warning btn-outline" id="btnGuardarCambioConfig"><i class="icofont icofont-save"></i> Guardar</button>
		</div>
	</div>
	</div>
</div>

<!-- Modal para administrar descuentos -->
<div class="modal fade modal-adminDsctos" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-infocat">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Administrar descuentos</h4>
		</div>
		<div class="modal-body">
			<div class="panel panel-default">
				<label style="padding-left: 10px;">Nuevo Descuento</label>
				<div class="panel-body" style="padding: 10px!important;">
					<label>Cantidad:</label>
					<input type="text" id="txtCantDscto" class="form-control text-center" autocomplete="off">
					<label>Descuento S/:</label>
					<input type="numberic" id="txtMontoDscto" class="form-control text-center txtNumeroDecimal" autocomplete="off"><br>
					<button class="btn btn-default btn-block" id="btn-agregarDscto">Agregar descuento</button>
				</div>
			</div>
			<div class="container-fluid">
			<div class="row">
				<p>Éste artículo tiene <span id="spanCantDsctos">0</span> descuentos</p>
				<div id="divListaDescuentos"></div>
			</div>

			</div>
			<label class="text-danger labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		
		<div class="modal-footer">
			<button class="btn btn-default btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
		</div>
	</div>
	</div>
</div>

<!-- Modal para agregar categoria nueva -->
<div class="modal fade modal-nuevaCategoria" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Crear nueva categoría</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">Detalle de categoría:</label>
				<input type="text" class="form-control" id="txtCateDetalle">
				<label for="">Procedencia:</label>
				<div  id="divSelectProcedenciaAddCategv2">
					<select class="selectpicker mayuscula" title="Procedencia..."  data-width="100%" data-live-search="true">
						<option class="optProducto mayuscula" data-tokens="1">Cocina</option>
						<option class="optProducto mayuscula" data-tokens="2">Bar</option>
						<option class="optProducto mayuscula" data-tokens="3">Almacén</option>
					</select>
				</div>
			</div>

			</div>
			<label class="text-danger labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-success btn-outline" id="btnGuardarNuevCategor"><i class="icofont icofont-save"></i> Guardar</button>
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

<!-- Modal para eliminar producto de la BD -->
<div class="modal fade modal-removerCategoria" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-danger">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Eliminar Categoría</h4>
		</div>
		<div class="modal-body">
			<p>Desea eliminar la Categoría <strong>«<span id="remoCatNombre"></span>»</strong><span class="hidden" id="remoCatdId"></span>. </p>
			<p>Confirme con su contraseña por favor.</p>
			<input type="password" id="txtPassRemover2" class="form-control text-center" >
			<label class="text-danger labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal"><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-danger btn-outline" id="btnEliminarCatModal"><i class="icofont icofont-alarm"></i> Ok, eliminar</button>
		</div>
	</div>
</div>
</div>

<!-- Modal para eliminar producto de la BD -->
<div class="modal fade modal-removerProducto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-danger">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Deshabilitar Producto</h4>
		</div>
		<div class="modal-body">
			<p>Desea deshabilitar el producto <strong>«<span id="remoProdNombre"></span>»</strong><span class="hidden" id="remoProdId"></span>. </p>
			<p>Confirme con su contraseña por favor.</p>
			<input type="password" id="txtPassRemover" class="form-control text-center" >
			<label class="text-danger labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal"><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-danger btn-outline" id="btnEliminarProdModal"><i class="icofont icofont-alarm"></i> Ok, deshabilitar</button>
		</div>
	</div>
</div>
</div>

<?php include 'php/llamandoModals.php';
include "footers.php";
?>

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

$.ajax({url:'php/listarProductosAdmin.php', data: 'POST'}).done(function (resp) { //console.log(resp)
	$.each(JSON.parse(resp), function (i, dato) { //console.log(dato)
		var cant= $('#'+dato.tpDivBebidaCocina+' .row').length;
		//console.log(dato.tpDivBebidaCocina)
		if(dato.tpDivBebidaCocina=='divProdBebida'){ //console.log(dato)
			if(dato.prodActivo==0){
				$('#'+dato.tpNombreWeb).append(`<div class="row">  `+
				`<div class="col-xs-3 mayuscula"><button class="btn btn-success btn-circle btn-NoLine btn-outline btnActivarProducto text-muted" id="${dato.idProducto}"><i class="icofont icofont-check"></i></button> ${cant}. <span class="spanCategoria">${dato.tipDescripcion}</span><span class="hidden spanIdCategoria" >${dato.idTipoProducto}</span></div> `+
				`<div class="col-xs-4 mayuscula divNombrProd">${dato.prodDescripcion}</div> `+
				`<div class="col-xs-2 divPrecPro">${parseFloat(dato.prodPrecio).toFixed(2)}</div> `+
				`<div class="col-xs-1 divStockPro">${dato.stockCantidad}</div> </div>`);
			}
			else{$('#'+dato.tpNombreWeb).append(`<div class="row">  `+
				`<div class="col-xs-3 mayuscula"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto" id="${dato.idProducto}"><i class="icofont icofont-close"></i></button> ${cant}. <span class="spanCategoria">${dato.tipDescripcion}</span><span class="hidden spanIdCategoria" >${dato.idTipoProducto}</span></div> `+
				`<div class="col-xs-4 mayuscula divNombrProd">${dato.prodDescripcion}</div> `+
				`<div class="col-xs-2 divPrecPro">${parseFloat(dato.prodPrecio).toFixed(2)}</div> `+
				`<div class="col-xs-1 divStockPro">${dato.stockCantidad}</div> `+
				`<div class="col-xs-2 text-right"><button class="btn btn-infocat btn-outline btn-NoLine btn-sm btnListarDsctos" data-id="${dato.idProducto}"><i class="icofont icofont-swoosh-down"></i></button><button class="btn btn-danger btn-outline btn-NoLine btn-sm btnConfigReducirStock" id="${dato.idProducto}"><i class="icofont icofont-minus"></i></button><button class="btn btn-success btn-outline btn-NoLine btn-sm btnConfigProducto" id="${dato.idProducto}"><i class="icofont icofont-options"></i></button></div></div>`);}
		}else{ 
			if(dato.prodActivo==0){
				$('#'+dato.tpDivBebidaCocina).append(`<div class="row">  `+
				`<div class="col-xs-3 mayuscula"><button class="btn btn-success btn-circle btn-NoLine btn-outline btnActivarProducto text-muted" id="${dato.idProducto}"><i class="icofont icofont-check"></i></button> ${cant}. <span class="spanCategoria">${dato.tipDescripcion}</span><span class="hidden spanIdCategoria" >${dato.idTipoProducto}</span></div> `+
				`<div class="col-xs-4 mayuscula divNombrProd">${dato.prodDescripcion}</div> `+
				`<div class="col-xs-2 divPrecPro">${parseFloat(dato.prodPrecio).toFixed(2)}</div> `+
				`<div class="col-xs-1 divStockPro">${dato.stockCantidad}</div> </div>`);
			}
			else{$('#'+dato.tpDivBebidaCocina).append(`<div class="row">  `+
				`<div class="col-xs-3 mayuscula"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto" id="${dato.idProducto}"><i class="icofont icofont-close"></i></button> ${cant}. <span class="spanCategoria">${dato.tipDescripcion}</span><span class="hidden spanIdCategoria" >${dato.idTipoProducto}</span></div> `+
				`<div class="col-xs-4 mayuscula divNombrProd">${dato.prodDescripcion}</div> `+
				`<div class="col-xs-2 divPrecPro">${parseFloat(dato.prodPrecio).toFixed(2)}</div> `+
				`<div class="col-xs-1 divStockPro">${dato.stockCantidad}</div> `+
				`<div class="col-xs-2 text-right"><button class="btn btn-infocat btn-outline btn-NoLine btn-sm btnListarDsctos" data-id="${dato.idProducto}"><i class="icofont icofont-swoosh-down"></i></button><button class="btn btn-danger btn-outline btn-NoLine btn-sm btnConfigReducirStock" id="${dato.idProducto}"><i class="icofont icofont-minus"></i></button><button class="btn btn-success btn-outline btn-NoLine btn-sm btnConfigProducto" id="${dato.idProducto}"><i class="icofont icofont-options"></i></button></div></div>`);}
		}
	});
});
}); //Fin de document ready

$('body').on('click', '.btnConfigProducto', function () {
	var contenedor= $(this).parent().parent();
	$('#spanModalIdProdConf').text($(this).attr('id'));
	$('#txtModalNomConf').val(contenedor.find('.divNombrProd').text());
	$('#txtModalPrecioConf').val(contenedor.find('.divPrecPro').text());
	$('#txtModalStockConf').val(0);
	$('#spanStockAct').text(contenedor.find('.divStockPro').text());
	$('#stockAnterior').val(contenedor.find('.divStockPro').text());
	$('#divSelectProductoListado .selectpicker').selectpicker('val',contenedor.find('.spanCategoria').text()).selectpicker('refresh');
	$('.modal-configurarProducto').modal('show');
});
$('#btnGuardarCambioConfig').click(function () {
	if($('#txtModalPrecioConf').val()<0 || $('#txtModalStockConf').val()<0 ){
		$('.modal-configurarProducto .labelError').removeClass('hidden').find('.mensaje').text('No se pueden guardar valores negativos');
	}else{
		$('.modal-configurarProducto .labelError').addClass('hidden');
		var idCategoria=$('#divSelectProductoListado').find('li.selected a').attr('data-tokens');
		//console.log(idCategoria);
		var diferencia= $('#txtModalStockConf').val();/*-$('#stockAnterior').val();*/
		//console.log(diferencia)
		$.ajax({url:'php/actualizarStockPrecioProducto.php', type: 'POST', data:{idProd: $('#spanModalIdProdConf').text(), nomPro:$('#txtModalNomConf').val(),  precio: $('#txtModalPrecioConf').val() , categoria: idCategoria, idUser: $.JsonUsuario.idUsuario, cantidad: diferencia, detalle: '' }}).done(function (resp) {
			console.log(resp)
			if(resp>0){location.reload();}
		});
	}
});
$('body').on('click','.btnRemoverCategoria',function () {
	var contenedor= $(this).parent().parent();
	var idElim=$(this).attr('id');
	$('#remoCatNombre').text(contenedor.find('.spanCategoria').text());
	$('#remoCatdId').text(idElim);
	$('.modal-removerCategoria').modal('show');
});
$('body').on('click','.btnRemoverProducto',function () {
	var contenedor= $(this).parent().parent();
	var idElim=$(this).attr('id');
	$('#remoProdNombre').text(contenedor.find('.divNombrProd').text());
	$('#remoProdId').text(idElim);
	$('.modal-removerProducto').modal('show');
});
$('#btnEliminarCatModal').click(function () {
	$.ajax({url: 'php/eliminarCategoriaBD.php', type: 'POST', data: {idCat:$('#remoCatdId').text(), idUser: $.JsonUsuario.idUsuario, pass: $('#txtPassRemover2').val()  }}).done(function (resp) { //console.log(resp);
		if(resp=='Y'){location.reload();}
		else{$('.modal-removerProducto .labelError').removeClass('hidden').find('.mensaje').text('Su contraseña no es la correcta.');}
	});
});
$('#btnEliminarProdModal').click(function () {
	$.ajax({url: 'php/eliminarProductoBD.php', type: 'POST', data: {idProd:$('#remoProdId').text(), idUser: $.JsonUsuario.idUsuario, pass: $('#txtPassRemover').val()  }}).done(function (resp) { //console.log(resp);
		if(resp=='Y'){location.reload(); /*window.location.href = 'productos.php';*/}
		else{$('.modal-removerProducto .labelError').removeClass('hidden').find('.mensaje').text('Su contraseña no es la correcta.');}
	});
});
$('#btnAddNewProduct').click(function () {
	$('.modal-addProductoBD').modal('show');
});
$('#btnGuardarAddConfig').click(function () {
	var idCategoria=$('#divSelectProductoListNew').find('li.selected a').attr('data-tokens');
	var idProcedencia=$('#divSelectProcedenciaListNew').find('li.selected a').attr('data-tokens');
	if($('#txtModalProdNomAdd').val()==''){ $('.modal-addProductoBD .labelError').removeClass('hidden').find('.mensaje').text('Debe ingresar un nombre.');}
	else if($('#txtModalPrecioadd').val()<0){ $('.modal-addProductoBD .labelError').removeClass('hidden').find('.mensaje').text('Un precio no puede ser negativo.');}
	else if(idCategoria==null){ $('.modal-addProductoBD .labelError').removeClass('hidden').find('.mensaje').text('Debe selecionar una categoría.');}
	else if(idProcedencia==null){ $('.modal-addProductoBD .labelError').removeClass('hidden').find('.mensaje').text('Debe selecionar una procedencia.');}
	else{
		$('.modal-addProductoBD .labelError').addClass('hidden');
		$.ajax({url:'php/insertarProductoNuevo.php', type: 'POST', data:{descripcion: $('#txtModalProdNomAdd').val(), precio: $('#txtModalPrecioadd').val(), tipoProd: idCategoria, procedencia: idProcedencia }}).done(function (resp) {
			if(resp>0){location.reload();}
		});
	}
});
$('#btnNewCategoria').click(function () {
	$('.modal-nuevaCategoria').modal('show');
});
$('#btnGuardarNuevCategor').click(function () {
	var nomWeb= $('#txtCateDetalle').val().split(' ').join('');
	var nomDivWeb='';
	var idProcedencia=$('#divSelectProcedenciaAddCategv2').find('li.selected a').attr('data-tokens');
	if(idProcedencia==1){nomDivWeb='div'+nomWeb;}else{nomDivWeb='divProdBebida';}
	if(idProcedencia == null){$('.modal-nuevaCategoria .labelError').removeClass('hidden').find('.mensaje').text('Debe seleccionar una procedencia');}
	else if($('#txtCateDetalle').val()==''){$('.modal-nuevaCategoria .labelError').removeClass('hidden').find('.mensaje').text('No se puede guardar detalle vacío');}
	else{
		$('.modal-nuevaCategoria .labelError').addClass('hidden');
		$.ajax({url: 'php/insertarCategoria.php', type: 'POST', data:{ nombreCateg:$('#txtCateDetalle').val(), nombreWeb:nomWeb, divProd:nomDivWeb } }).done(function (resp) {
			location.reload();
		});
	}
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {	
var target = $(e.target).attr("href");
//console.log(target);
if(target=='#tabCambiarPassUser'){
	$('#divCategoriaListas').children().remove();
	$.ajax({url:'php/listarCategorias.php', data: 'POST'}).done(function (resp) { //console.log(resp)
	$.each(JSON.parse(resp), function (i, dato) {
		$('#divCategoriaListas').append(`<div class="row">`+
			`<div class="col-xs-2 mayuscula"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverCategoria" id="${dato.idTipoProducto}"><i class="icofont icofont-close"></i></button>${i+1}. <span class="spanCategoria">${dato.tipDescripcion}</span></div>`+
			`<div class="col-xs-1"><button class="btn btn-success btn-outline btn-NoLine btnConfigCategoria" id="${dato.idTipoProducto}"><i class="icofont icofont-options"></i></button></div></div>`);
	});
});
}
});

$('body').on('click', '.btnConfigCategoria', function () {
	var contenedor=$(this);
	$('#spanCategUpd').text(contenedor.attr('id'));
	$('#txtModalNomCategUpd').val(contenedor.parent().parent().find('.spanCategoria').text());
	$('.modal-updateCategoryBD').modal('show');
});
$('#btnUpdCategConfig').click(function () {
	var activ=0;
	var nomWeb= $('#txtModalNomCategUpd').val().split(' ').join('');
	var idProcedencia=$('#divSelectProcedenciaUpdCateg').find('li.selected a').attr('data-tokens');
	if(idProcedencia==1){nomDivWeb='div'+nomWeb;}else{nomDivWeb='divProdBebida';}
	// if(!($('#chkReglas:checked').val()=='')){activ=0;}else{activ=1;}
	
	if(idProcedencia == null){$('.modal-updateCategoryBD .labelError').removeClass('hidden').find('.mensaje').text('Debe seleccionar una procedencia');}
	else if($('#txtModalNomCategUpd').val()==''){$('.modal-updateCategoryBD .labelError').removeClass('hidden').find('.mensaje').text('No se puede guardar detalle vacío');}
	else{
		$('.modal-updateCategoryBD .labelError').addClass('hidden');
		$.ajax({url: 'php/updateCategoria.php', type: 'POST', data:{idCat:$('#spanCategUpd').text(), nomCat:$('#txtModalNomCategUpd').val(), activCat: 1, webCat:nomWeb, divCat:nomDivWeb } }).done(function (resp) {// console.log(resp)
			location.reload();
		});
	}
});
$('body').on('click', '.btnConfigReducirStock', function () {
	var contenedor=$(this);
	$('#spanStockUpd').text(contenedor.attr('id'));
	$('#spanPrecioUpd').text(contenedor.parent().parent().find('.divPrecPro').text());
	$('#spanCategStock').text(contenedor.parent().parent().find('.spanIdCategoria').text());
	$('#spanMaxStockLess').text(contenedor.parent().parent().find('.divStockPro').text());
	$('#lessStockNomProducto').text(contenedor.parent().parent().find('.divNombrProd').text());
	$('#txtLessStockCantidad').val('0');
	$('#txtLessStockDetalle').val('');
	$('.modal-updateStockLessProducto').modal('show');
});
$('#btnUpdLessStock').click(function () {
	// $('#spanStockUpd').text()
	if( $('#txtLessStockCantidad').val()<=0){$('.modal-updateStockLessProducto .labelError').removeClass('hidden').find('.mensaje').text('No se puede guardar valores ceros o negativos.'); }
	else if( $('#txtLessStockCantidad').val()>parseInt($('#spanMaxStockLess').text())){$('.modal-updateStockLessProducto .labelError').removeClass('hidden').find('.mensaje').text('No puede disminuir más de lo que se encuentra en stock.'); }
	else if( $('#txtLessStockDetalle').val()==''){$('.modal-updateStockLessProducto .labelError').removeClass('hidden').find('.mensaje').text('Debe ingresar un campo de detalle.'); }
	else{
		var diferencia= 0 - $('#txtLessStockCantidad').val();/*-$('#stockAnterior').val();*/
		//console.log(diferencia)
		$.ajax({url:'php/actualizarStockPrecioProducto.php', type: 'POST', data:{idProd: $('#spanStockUpd').text(), nomPro:$('#lessStockNomProducto').text(),  precio: $('#spanPrecioUpd').text() , categoria: $('#spanCategStock').text() , idUser: $.JsonUsuario.idUsuario, cantidad: diferencia, detalle: $('#txtLessStockDetalle').val() }}).done(function (resp) {
//			console.log(resp)
			if(resp>0){location.reload();}
		});
	}
});
$('#tabAgregarLabo').on('click', '.btnActivarProducto',function () {
	var id=$(this).attr('id');
	$.ajax({url: 'php/activarProducto.php', type: 'POST', data: {idProd: id}}).done(function (resp) {
		location.reload();
	});
});
$('#tabAgregarLabo').on('click', '.btnListarDsctos', function () {
	$('#btn-agregarDscto').attr('data-id', $(this).attr('data-id') );
	$('#divListaDescuentos').children().remove();
	$.ajax({url: 'php/listarPromos.php', type:'POST', data: {idProd:$(this).attr('data-id')}}).done(function (resp) {
		var cant= JSON.parse(resp).length;
		$('#spanCantDsctos').text(cant);
		$.each(JSON.parse(resp), function (i, data) {
			$('#divListaDescuentos').append(`<p><button class="btn btn-danger btn-NoLine btn-sm btn-outline btnRemoverPromo" data-id="${data.idPromocion}"><i class="icofont icofont-close"></i></button> Combo de ${data.promoCantidad} = S/ -${data.promoDescuento}</p>`)
		});
	})
	$('.modal-adminDsctos').modal('show');
});
$('#btn-agregarDscto').click(function () {
	var idProd = $(this).attr('data-id')
	$.ajax({url: 'php/insertarPromocion.php', type: 'POST', data: {
		idProd: idProd,
		cant: $('#txtCantDscto').val(),
		descto: $('#txtMontoDscto').val()
	}}).done(function (resp) {
		location.reload();
//		console.log(resp)
	});
});
$('#divListaDescuentos').on('click', '.btnRemoverPromo', function () {

	$.ajax({url: 'php/eliminarPromo.php', type: 'POST', data: {idProd: $(this).attr('data-id') }}).done(function (resp) {
		location.reload();
	})
});
</script>
</body>
</html>
