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

		<title>Inicio: Infocat-Grifo</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/estilosElementosv2.css?version=1.0.3" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.1" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.1">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/snack.css?version=1.0.6">
		<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"> <!-- extraído de: https://uxsolutions.github.io/bootstrap-datepicker/-->

</head>

<body>

<div id="wrapper">

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
				<div class="sidebar-brand ocultar-mostrar-menu" >
						<a href="#">
								Control Panel
						</a>
				</div>
				<div class="logoEmpresa ocultar-mostrar-menu">
					<img class="img-responsive" src="images/empresa.png" alt="">
				</div>
				<li>
						<a href="principal.php"><i class="icofont icofont-space-shuttle"></i> Inicio</a>
				</li>
				<li class="active">
						<a href="productos.php"><i class="icofont icofont-washing-machine"></i> Productos</a>
				</li>
				<li>
						<a href="pedidos.php"><i class="icofont icofont-fork-and-knife"></i> Pedidos</a>
				</li>
				<li>
						<a href="caja.php"><i class="icofont icofont-cart"></i> Cobrar</a>
				</li>
				<li>
						<a href="ventas.php"><i class="icofont icofont-cart"></i> Cuadrar caja</a>
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
								 <li id="liDatosPersonales"><a href="#!"><p><strong>Usuario: </strong> <span class="mayuscula" id="menuNombreUsuario"><?php echo $_SESSION["Atiende"]; ?></span></p><small class="text-muted text-center" id="menuFecha"><span id="fechaServer"></span> <span id="horaServer"><?php require('php/gethora.php') ?></span> </small></a></li>
									
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
							<div class="row" style="padding-bottom: 15px">
								<div class="col-xs-4">
									<button class="btn btn-success btn-outline btn-lg" id="btnAddNewProduct"><i class="icofont icofont-chef"></i> Agregar nuevo producto</button>
								</div>
								<div class="col-xs-4"></div>
								<div class="col-xs-4"></div>
							</div>
							<?php include 'php/listarCategoriasdivProd.php'; ?>
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
					<select class="selectpicker mayuscula" title="Producto..."  data-width="100%" data-live-search="true"">
						<?php require 'php/listarProductosCategoriaOption.php'; ?>
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
				<label for="">Producto:</label> <span class="mayuscula" id="spanModalPrecioConf"></span><span class="hidden" id="spanModalIdProdConf"></span>
			</div>
			<div class="row">
				<label for="">Categoría:</label>
				<div  id="divSelectProductoListado">
					<select class="selectpicker mayuscula" title="Producto..."  data-width="100%" data-live-search="true"">
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
			<button class="btn btn-success btn-outline" id="btnGuardarCambioConfig"><i class="icofont icofont-save"></i> Guardar</button>
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
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Eliminar Producto</h4>
		</div>
		<div class="modal-body">
			<p>Desea eliminar el producto <strong>«<span id="remoProdNombre"></span>»</strong><span class="hidden" id="remoProdId"></span>. </p>
			<p>Confirme con su contraseña por favor.</p>
			<input type="password" id="txtPassRemover" class="form-control text-center" >
			<label class="text-danger labelError hidden" for=""><i class="icofont icofont-animal-squirrel"></i> Lo siento! <span class=mensaje></span></label>
		</div>
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal"><i class="icofont icofont-close"></i> Cerrar</button>
			<button class="btn btn-danger btn-outline" id="btnEliminarProdModal"><i class="icofont icofont-alarm"></i> Ok, eliminar</button>
		</div>
	</div>
</div>
</div>
<?php include 'php/llamandoModals.php'; ?>

	
<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/inicializacion.js?version=1.1"></script>
<script src="js/accionesGlobales.js?version=1.1"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>


<script>
$(document).ready(function(){
var _0x9959=["\x72\x65\x66\x72\x65\x73\x68","\x73\x65\x6C\x65\x63\x74\x70\x69\x63\x6B\x65\x72","\x2E\x73\x65\x6C\x65\x63\x74\x70\x69\x63\x6B\x65\x72","\x74\x6F\x6F\x6C\x74\x69\x70","\x2E\x6D\x69\x74\x6F\x6F\x6C\x74\x69\x70","\x6B\x65\x79\x43\x6F\x64\x65","\x66\x6F\x63\x75\x73","\x63\x68\x69\x6C\x64\x72\x65\x6E","\x6E\x65\x78\x74","\x70\x61\x72\x65\x6E\x74","\x6B\x65\x79\x70\x72\x65\x73\x73","\x69\x6E\x70\x75\x74"];datosUsuario();$(_0x9959[2])[_0x9959[1]](_0x9959[0]);$(_0x9959[4])[_0x9959[3]]();$(_0x9959[11])[_0x9959[10]](function(_0xf88fx1){if(_0xf88fx1[_0x9959[5]]== 13){$(this)[_0x9959[9]]()[_0x9959[8]]()[_0x9959[7]]()[_0x9959[6]]()}})

$.ajax({url:'php/listarProductos.php', data: 'POST'}).done(function (resp) { //console.log(resp)
	$.each(JSON.parse(resp), function (i, dato) { //console.log(dato)
		var cant= $('#'+dato.tpDivBebidaCocina+' .row').length;
		$('#'+dato.tpDivBebidaCocina).append(`<div class="row">  `+
			`<div class="col-xs-2 mayuscula"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto" id="${dato.idProducto}"><i class="icofont icofont-close"></i></button> ${cant}. <span class="spanCategoria">${dato.tipDescripcion}</span></div> `+
			`<div class="col-xs-5 mayuscula divNombrProd">${dato.prodDescripcion}</div> `+
			`<div class="col-xs-2 divPrecPro">${parseFloat(dato.prodPrecio).toFixed(2)}</div> `+
			`<div class="col-xs-2 divStockPro">${dato.stockCantidad}</div> `+
			`<div class="col-xs-1"><button class="btn btn-success btn-outline btn-NoLine btnConfigProducto" id="${dato.idProducto}"><i class="icofont icofont-options"></i></button></div></div>`);
	});
});
}); //Fin de document ready

var _0xb7bf=["\x63\x6C\x69\x63\x6B","\x2E\x62\x74\x6E\x43\x6F\x6E\x66\x69\x67\x50\x72\x6F\x64\x75\x63\x74\x6F","\x70\x61\x72\x65\x6E\x74","\x69\x64","\x61\x74\x74\x72","\x74\x65\x78\x74","\x23\x73\x70\x61\x6E\x4D\x6F\x64\x61\x6C\x49\x64\x50\x72\x6F\x64\x43\x6F\x6E\x66","\x2E\x64\x69\x76\x4E\x6F\x6D\x62\x72\x50\x72\x6F\x64","\x66\x69\x6E\x64","\x23\x73\x70\x61\x6E\x4D\x6F\x64\x61\x6C\x50\x72\x65\x63\x69\x6F\x43\x6F\x6E\x66","\x2E\x64\x69\x76\x50\x72\x65\x63\x50\x72\x6F","\x76\x61\x6C","\x23\x74\x78\x74\x4D\x6F\x64\x61\x6C\x50\x72\x65\x63\x69\x6F\x43\x6F\x6E\x66","\x23\x74\x78\x74\x4D\x6F\x64\x61\x6C\x53\x74\x6F\x63\x6B\x43\x6F\x6E\x66","\x2E\x64\x69\x76\x53\x74\x6F\x63\x6B\x50\x72\x6F","\x23\x73\x70\x61\x6E\x53\x74\x6F\x63\x6B\x41\x63\x74","\x23\x73\x74\x6F\x63\x6B\x41\x6E\x74\x65\x72\x69\x6F\x72","\x72\x65\x66\x72\x65\x73\x68","\x73\x65\x6C\x65\x63\x74\x70\x69\x63\x6B\x65\x72","\x2E\x73\x70\x61\x6E\x43\x61\x74\x65\x67\x6F\x72\x69\x61","\x23\x64\x69\x76\x53\x65\x6C\x65\x63\x74\x50\x72\x6F\x64\x75\x63\x74\x6F\x4C\x69\x73\x74\x61\x64\x6F\x20\x2E\x73\x65\x6C\x65\x63\x74\x70\x69\x63\x6B\x65\x72","\x73\x68\x6F\x77","\x6D\x6F\x64\x61\x6C","\x2E\x6D\x6F\x64\x61\x6C\x2D\x63\x6F\x6E\x66\x69\x67\x75\x72\x61\x72\x50\x72\x6F\x64\x75\x63\x74\x6F","\x6F\x6E","\x62\x6F\x64\x79","\x4E\x6F\x20\x73\x65\x20\x70\x75\x65\x64\x65\x6E\x20\x67\x75\x61\x72\x64\x61\x72\x20\x76\x61\x6C\x6F\x72\x65\x73\x20\x6E\x65\x67\x61\x74\x69\x76\x6F\x73","\x2E\x6D\x65\x6E\x73\x61\x6A\x65","\x68\x69\x64\x64\x65\x6E","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x2E\x6D\x6F\x64\x61\x6C\x2D\x63\x6F\x6E\x66\x69\x67\x75\x72\x61\x72\x50\x72\x6F\x64\x75\x63\x74\x6F\x20\x2E\x6C\x61\x62\x65\x6C\x45\x72\x72\x6F\x72","\x61\x64\x64\x43\x6C\x61\x73\x73","\x64\x61\x74\x61\x2D\x74\x6F\x6B\x65\x6E\x73","\x6C\x69\x2E\x73\x65\x6C\x65\x63\x74\x65\x64\x20\x61","\x23\x64\x69\x76\x53\x65\x6C\x65\x63\x74\x50\x72\x6F\x64\x75\x63\x74\x6F\x4C\x69\x73\x74\x61\x64\x6F","\x6C\x6F\x67","\x72\x65\x6C\x6F\x61\x64","\x64\x6F\x6E\x65","\x70\x68\x70\x2F\x61\x63\x74\x75\x61\x6C\x69\x7A\x61\x72\x53\x74\x6F\x63\x6B\x50\x72\x65\x63\x69\x6F\x50\x72\x6F\x64\x75\x63\x74\x6F\x2E\x70\x68\x70","\x50\x4F\x53\x54","\x69\x64\x55\x73\x75\x61\x72\x69\x6F","\x4A\x73\x6F\x6E\x55\x73\x75\x61\x72\x69\x6F","\x61\x6A\x61\x78","\x23\x62\x74\x6E\x47\x75\x61\x72\x64\x61\x72\x43\x61\x6D\x62\x69\x6F\x43\x6F\x6E\x66\x69\x67","\x2E\x62\x74\x6E\x52\x65\x6D\x6F\x76\x65\x72\x43\x61\x74\x65\x67\x6F\x72\x69\x61","\x23\x72\x65\x6D\x6F\x43\x61\x74\x4E\x6F\x6D\x62\x72\x65","\x23\x72\x65\x6D\x6F\x43\x61\x74\x64\x49\x64","\x2E\x6D\x6F\x64\x61\x6C\x2D\x72\x65\x6D\x6F\x76\x65\x72\x43\x61\x74\x65\x67\x6F\x72\x69\x61","\x2E\x62\x74\x6E\x52\x65\x6D\x6F\x76\x65\x72\x50\x72\x6F\x64\x75\x63\x74\x6F","\x23\x72\x65\x6D\x6F\x50\x72\x6F\x64\x4E\x6F\x6D\x62\x72\x65","\x23\x72\x65\x6D\x6F\x50\x72\x6F\x64\x49\x64","\x2E\x6D\x6F\x64\x61\x6C\x2D\x72\x65\x6D\x6F\x76\x65\x72\x50\x72\x6F\x64\x75\x63\x74\x6F","\x59","\x53\x75\x20\x63\x6F\x6E\x74\x72\x61\x73\x65\xF1\x61\x20\x6E\x6F\x20\x65\x73\x20\x6C\x61\x20\x63\x6F\x72\x72\x65\x63\x74\x61\x2E","\x2E\x6D\x6F\x64\x61\x6C\x2D\x72\x65\x6D\x6F\x76\x65\x72\x50\x72\x6F\x64\x75\x63\x74\x6F\x20\x2E\x6C\x61\x62\x65\x6C\x45\x72\x72\x6F\x72","\x70\x68\x70\x2F\x65\x6C\x69\x6D\x69\x6E\x61\x72\x43\x61\x74\x65\x67\x6F\x72\x69\x61\x42\x44\x2E\x70\x68\x70","\x23\x74\x78\x74\x50\x61\x73\x73\x52\x65\x6D\x6F\x76\x65\x72\x32","\x23\x62\x74\x6E\x45\x6C\x69\x6D\x69\x6E\x61\x72\x43\x61\x74\x4D\x6F\x64\x61\x6C","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x70\x72\x6F\x64\x75\x63\x74\x6F\x73\x2E\x70\x68\x70","\x70\x68\x70\x2F\x65\x6C\x69\x6D\x69\x6E\x61\x72\x50\x72\x6F\x64\x75\x63\x74\x6F\x42\x44\x2E\x70\x68\x70","\x23\x74\x78\x74\x50\x61\x73\x73\x52\x65\x6D\x6F\x76\x65\x72","\x23\x62\x74\x6E\x45\x6C\x69\x6D\x69\x6E\x61\x72\x50\x72\x6F\x64\x4D\x6F\x64\x61\x6C","\x2E\x6D\x6F\x64\x61\x6C\x2D\x61\x64\x64\x50\x72\x6F\x64\x75\x63\x74\x6F\x42\x44","\x23\x62\x74\x6E\x41\x64\x64\x4E\x65\x77\x50\x72\x6F\x64\x75\x63\x74","\x23\x64\x69\x76\x53\x65\x6C\x65\x63\x74\x50\x72\x6F\x64\x75\x63\x74\x6F\x4C\x69\x73\x74\x4E\x65\x77","\x23\x74\x78\x74\x4D\x6F\x64\x61\x6C\x50\x72\x6F\x64\x4E\x6F\x6D\x41\x64\x64","","\x44\x65\x62\x65\x20\x69\x6E\x67\x72\x65\x73\x61\x72\x20\x75\x6E\x20\x6E\x6F\x6D\x62\x72\x65\x2E","\x2E\x6D\x6F\x64\x61\x6C\x2D\x61\x64\x64\x50\x72\x6F\x64\x75\x63\x74\x6F\x42\x44\x20\x2E\x6C\x61\x62\x65\x6C\x45\x72\x72\x6F\x72","\x23\x74\x78\x74\x4D\x6F\x64\x61\x6C\x50\x72\x65\x63\x69\x6F\x61\x64\x64","\x55\x6E\x20\x70\x72\x65\x63\x69\x6F\x20\x6E\x6F\x20\x70\x75\x65\x64\x65\x20\x73\x65\x72\x20\x6E\x65\x67\x61\x74\x69\x76\x6F\x2E","\x44\x65\x62\x65\x20\x73\x65\x6C\x65\x63\x69\x6F\x6E\x61\x72\x20\x75\x6E\x61\x20\x63\x61\x74\x65\x67\x6F\x72\xED\x61\x2E","\x70\x68\x70\x2F\x69\x6E\x73\x65\x72\x74\x61\x72\x50\x72\x6F\x64\x75\x63\x74\x6F\x4E\x75\x65\x76\x6F\x2E\x70\x68\x70","\x23\x62\x74\x6E\x47\x75\x61\x72\x64\x61\x72\x41\x64\x64\x43\x6F\x6E\x66\x69\x67","\x2E\x6D\x6F\x64\x61\x6C\x2D\x6E\x75\x65\x76\x61\x43\x61\x74\x65\x67\x6F\x72\x69\x61","\x23\x62\x74\x6E\x4E\x65\x77\x43\x61\x74\x65\x67\x6F\x72\x69\x61","\x6A\x6F\x69\x6E","\x20","\x73\x70\x6C\x69\x74","\x23\x74\x78\x74\x43\x61\x74\x65\x44\x65\x74\x61\x6C\x6C\x65","\x70\x68\x70\x2F\x69\x6E\x73\x65\x72\x74\x61\x72\x43\x61\x74\x65\x67\x6F\x72\x69\x61\x2E\x70\x68\x70","\x23\x62\x74\x6E\x47\x75\x61\x72\x64\x61\x72\x4E\x75\x65\x76\x43\x61\x74\x65\x67\x6F\x72"];$(_0xb7bf[25])[_0xb7bf[24]](_0xb7bf[0],_0xb7bf[1],function(){var _0xebf6x1=$(this)[_0xb7bf[2]]()[_0xb7bf[2]]();$(_0xb7bf[6])[_0xb7bf[5]]($(this)[_0xb7bf[4]](_0xb7bf[3]));$(_0xb7bf[9])[_0xb7bf[5]](_0xebf6x1[_0xb7bf[8]](_0xb7bf[7])[_0xb7bf[5]]());$(_0xb7bf[12])[_0xb7bf[11]](_0xebf6x1[_0xb7bf[8]](_0xb7bf[10])[_0xb7bf[5]]());$(_0xb7bf[13])[_0xb7bf[11]](0);$(_0xb7bf[15])[_0xb7bf[5]](_0xebf6x1[_0xb7bf[8]](_0xb7bf[14])[_0xb7bf[5]]());$(_0xb7bf[16])[_0xb7bf[11]](_0xebf6x1[_0xb7bf[8]](_0xb7bf[14])[_0xb7bf[5]]());$(_0xb7bf[20])[_0xb7bf[18]](_0xb7bf[11],_0xebf6x1[_0xb7bf[8]](_0xb7bf[19])[_0xb7bf[5]]())[_0xb7bf[18]](_0xb7bf[17]);$(_0xb7bf[23])[_0xb7bf[22]](_0xb7bf[21])});$(_0xb7bf[43])[_0xb7bf[0]](function(){if($(_0xb7bf[12])[_0xb7bf[11]]()< 0|| $(_0xb7bf[13])[_0xb7bf[11]]()< 0){$(_0xb7bf[30])[_0xb7bf[29]](_0xb7bf[28])[_0xb7bf[8]](_0xb7bf[27])[_0xb7bf[5]](_0xb7bf[26])}else {$(_0xb7bf[30])[_0xb7bf[31]](_0xb7bf[28]);var _0xebf6x2=$(_0xb7bf[34])[_0xb7bf[8]](_0xb7bf[33])[_0xb7bf[4]](_0xb7bf[32]);console[_0xb7bf[35]](_0xebf6x2);var _0xebf6x3=$(_0xb7bf[13])[_0xb7bf[11]]();$[_0xb7bf[42]]({url:_0xb7bf[38],type:_0xb7bf[39],data:{idProd:$(_0xb7bf[6])[_0xb7bf[5]](),precio:$(_0xb7bf[12])[_0xb7bf[11]](),categoria:_0xebf6x2,idUser:$[_0xb7bf[41]][_0xb7bf[40]],cantidad:_0xebf6x3}})[_0xb7bf[37]](function(_0xebf6x4){console[_0xb7bf[35]](_0xebf6x4);if(_0xebf6x4> 0){location[_0xb7bf[36]]()}})}});$(_0xb7bf[25])[_0xb7bf[24]](_0xb7bf[0],_0xb7bf[44],function(){var _0xebf6x1=$(this)[_0xb7bf[2]]()[_0xb7bf[2]]();var _0xebf6x5=$(this)[_0xb7bf[4]](_0xb7bf[3]);$(_0xb7bf[45])[_0xb7bf[5]](_0xebf6x1[_0xb7bf[8]](_0xb7bf[19])[_0xb7bf[5]]());$(_0xb7bf[46])[_0xb7bf[5]](_0xebf6x5);$(_0xb7bf[47])[_0xb7bf[22]](_0xb7bf[21])});$(_0xb7bf[25])[_0xb7bf[24]](_0xb7bf[0],_0xb7bf[48],function(){var _0xebf6x1=$(this)[_0xb7bf[2]]()[_0xb7bf[2]]();var _0xebf6x5=$(this)[_0xb7bf[4]](_0xb7bf[3]);$(_0xb7bf[49])[_0xb7bf[5]](_0xebf6x1[_0xb7bf[8]](_0xb7bf[7])[_0xb7bf[5]]());$(_0xb7bf[50])[_0xb7bf[5]](_0xebf6x5);$(_0xb7bf[51])[_0xb7bf[22]](_0xb7bf[21])});$(_0xb7bf[57])[_0xb7bf[0]](function(){$[_0xb7bf[42]]({url:_0xb7bf[55],type:_0xb7bf[39],data:{idCat:$(_0xb7bf[46])[_0xb7bf[5]](),idUser:$[_0xb7bf[41]][_0xb7bf[40]],pass:$(_0xb7bf[56])[_0xb7bf[11]]()}})[_0xb7bf[37]](function(_0xebf6x4){if(_0xebf6x4== _0xb7bf[52]){location[_0xb7bf[36]]()}else {$(_0xb7bf[54])[_0xb7bf[29]](_0xb7bf[28])[_0xb7bf[8]](_0xb7bf[27])[_0xb7bf[5]](_0xb7bf[53])}})});$(_0xb7bf[63])[_0xb7bf[0]](function(){$[_0xb7bf[42]]({url:_0xb7bf[61],type:_0xb7bf[39],data:{idProd:$(_0xb7bf[50])[_0xb7bf[5]](),idUser:$[_0xb7bf[41]][_0xb7bf[40]],pass:$(_0xb7bf[62])[_0xb7bf[11]]()}})[_0xb7bf[37]](function(_0xebf6x4){if(_0xebf6x4== _0xb7bf[52]){window[_0xb7bf[59]][_0xb7bf[58]]= _0xb7bf[60]}else {$(_0xb7bf[54])[_0xb7bf[29]](_0xb7bf[28])[_0xb7bf[8]](_0xb7bf[27])[_0xb7bf[5]](_0xb7bf[53])}})});$(_0xb7bf[65])[_0xb7bf[0]](function(){$(_0xb7bf[64])[_0xb7bf[22]](_0xb7bf[21])});$(_0xb7bf[75])[_0xb7bf[0]](function(){var _0xebf6x2=$(_0xb7bf[66])[_0xb7bf[8]](_0xb7bf[33])[_0xb7bf[4]](_0xb7bf[32]);if($(_0xb7bf[67])[_0xb7bf[11]]()== _0xb7bf[68]){$(_0xb7bf[70])[_0xb7bf[29]](_0xb7bf[28])[_0xb7bf[8]](_0xb7bf[27])[_0xb7bf[5]](_0xb7bf[69])}else {if($(_0xb7bf[71])[_0xb7bf[11]]()< 0){$(_0xb7bf[70])[_0xb7bf[29]](_0xb7bf[28])[_0xb7bf[8]](_0xb7bf[27])[_0xb7bf[5]](_0xb7bf[72])}else {if(_0xebf6x2== null){$(_0xb7bf[70])[_0xb7bf[29]](_0xb7bf[28])[_0xb7bf[8]](_0xb7bf[27])[_0xb7bf[5]](_0xb7bf[73])}else {$(_0xb7bf[70])[_0xb7bf[31]](_0xb7bf[28]);$[_0xb7bf[42]]({url:_0xb7bf[74],type:_0xb7bf[39],data:{descripcion:$(_0xb7bf[67])[_0xb7bf[11]](),precio:$(_0xb7bf[71])[_0xb7bf[11]](),tipoProd:_0xebf6x2}})[_0xb7bf[37]](function(_0xebf6x4){if(_0xebf6x4> 0){location[_0xb7bf[36]]()}})}}}});$(_0xb7bf[77])[_0xb7bf[0]](function(){$(_0xb7bf[76])[_0xb7bf[22]](_0xb7bf[21])});$(_0xb7bf[83])[_0xb7bf[0]](function(){var _0xebf6x6=$(_0xb7bf[81])[_0xb7bf[11]]()[_0xb7bf[80]](_0xb7bf[79])[_0xb7bf[78]](_0xb7bf[68]);$[_0xb7bf[42]]({url:_0xb7bf[82],type:_0xb7bf[39],data:{nombreCateg:$(_0xb7bf[81])[_0xb7bf[11]](),nombreWeb:_0xebf6x6}})[_0xb7bf[37]](function(_0xebf6x4){console[_0xb7bf[35]](_0xebf6x4)})})

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

</script>
</body>
</html>
