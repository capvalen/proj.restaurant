<?php
session_start();
if (@!$_SESSION['Atiende']){//sino existe enviar a index
	header("Location:index.php");
}else{
	if($_SESSION['Power']==3){header("Location:pedidos.php");}

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
		<link href="css/estilosElementosv2.css?version=1.0.2" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.1" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.1">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/snack.css?version=1.0.4">

		<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
		<link rel="stylesheet" href="css/icofont.css"> <!-- iconos extraidos de: http://icofont.com/-->
		<link rel="shortcut icon" href="images/peto.png" />
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css"> <!-- extraido de: http://flatlogic.github.io/awesome-bootstrap-checkbox/demo/-->
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"> <!-- extraído de: https://uxsolutions.github.io/bootstrap-datepicker/-->
		<link rel="stylesheet" href="css/toastr.min.css?version=1.0.1"> <!-- extraído de: http://codeseven.github.io/toastr/demo.html-->

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
				<li>
						<a href="productos.php"><i class="icofont icofont-washing-machine"></i> Productos</a>
				</li>
				<li>
						<a href="pedidos.php"><i class="icofont icofont-fork-and-knife"></i> Pedidos</a>
				</li>
				<li class="active">
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
						<a href="#"><i class="icofont icofont-ui-copy"></i> Reportes</a>
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
				 <h2 class="purple-text text-lighten-1" style=" display: inline-block;"><i class="icofont icofont-lens"></i> Cobro en caja - Casa de Barro <small class="deep-purple-text text-darken-4"><i class="icofont icofont-cube"></i> Libre</small> <small class="red-text text-darken-2"><i class="icofont icofont-cube"></i> Ocupado</small></h2> <button class="btn btn-success btn-lg btn-outline pull-right" id="btnObtenerEstadoMesas"><i class="icofont icofont-spoon-and-fork"></i> Actualizar estado de mesas</button> <button class="btn btn-success btn-lg btn-outline pull-right hidden" id="btnRegresarAMesas"><i class="icofont icofont-spoon-and-fork"></i> Regresar a mesas</button>
				<div class="row divMesas "> <span class="hidden" id="spanTipoCliente"></span>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="1"><i class="icofont icofont-food-cart"></i> Mesa 1</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="2"><i class="icofont icofont-food-cart"></i> Mesa 2</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="3"><i class="icofont icofont-food-cart"></i> Mesa 3</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="4"><i class="icofont icofont-food-cart"></i> Mesa 4</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="5"><i class="icofont icofont-food-cart"></i> Mesa 5</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="6"><i class="icofont icofont-food-cart"></i> Mesa 6</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="7"><i class="icofont icofont-food-cart"></i> Mesa 7</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="8"><i class="icofont icofont-food-cart"></i> Mesa 8</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="9"><i class="icofont icofont-food-cart"></i> Mesa 9</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="10"><i class="icofont icofont-food-cart"></i> Mesa 10</button></div>
					
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="11"><i class="icofont icofont-food-cart"></i> Mesa 11</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="12"><i class="icofont icofont-food-cart"></i> Mesa 12</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="13"><i class="icofont icofont-food-cart"></i> Mesa 13</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="14"><i class="icofont icofont-food-cart"></i> Mesa 14</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="15"><i class="icofont icofont-food-cart"></i> Mesa 15</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="16"><i class="icofont icofont-food-cart"></i> Mesa 16</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="17"><i class="icofont icofont-food-cart"></i> Mesa 17</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="18"><i class="icofont icofont-food-cart"></i> Mesa 18</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="19"><i class="icofont icofont-food-cart"></i> Mesa 19</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="20"><i class="icofont icofont-food-cart"></i> Mesa 20</button></div>

					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="21"><i class="icofont icofont-food-cart"></i> Mesa 21</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="22"><i class="icofont icofont-food-cart"></i> Mesa 22</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="23"><i class="icofont icofont-food-cart"></i> Mesa 23</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="24"><i class="icofont icofont-food-cart"></i> Mesa 24</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="25"><i class="icofont icofont-food-cart"></i> Mesa 25</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="26"><i class="icofont icofont-food-cart"></i> Mesa 26</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="27"><i class="icofont icofont-food-cart"></i> Mesa 27</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="28"><i class="icofont icofont-food-cart"></i> Mesa 28</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="29"><i class="icofont icofont-food-cart"></i> Mesa 29</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="30"><i class="icofont icofont-food-cart"></i> Mesa 30</button></div>

					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="31"><i class="icofont icofont-food-cart"></i> Mesa 31</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="32"><i class="icofont icofont-food-cart"></i> Mesa 32</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="33"><i class="icofont icofont-food-cart"></i> Mesa 33</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="34"><i class="icofont icofont-food-cart"></i> Mesa 34</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="35"><i class="icofont icofont-food-cart"></i> Mesa 35</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="36"><i class="icofont icofont-food-cart"></i> Mesa 36</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="37"><i class="icofont icofont-food-cart"></i> Mesa 37</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="38"><i class="icofont icofont-food-cart"></i> Mesa 38</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="39"><i class="icofont icofont-food-cart"></i> Mesa 39</button></div>
					<div class="col-xs-6 col-sm-3"><button class="btn btn-morado btn-lg btn-block btn-outline btnMesa" id="40"><i class="icofont icofont-food-cart"></i> Mesa 40</button></div>
				</div>

		<div class="row DetalleMesa">
			<div class="col-xs-9">
				
				<div class="row stockNombrePlato">
					
				</div>
				<div class="row">
					
						<div class="col-xs-7 text" style="padding-left: 45px;"><h4>Producto</h4></div>
						<div class="col-xs-3 text"><h4>Cantidad</h4></div>
						<div class="col-xs-2 text"><h4>SubTotal</h4></div>
					
				</div>
				<div class="contanedorDivsProductos">

					<!-- <div class="divUnSoloProducto row"><div class="col-xs-7"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto" id="">Suspiro a la limeña</h4> </div><div class="col-xs-3"><button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">1</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">6.10</span>S/. <span class="valorTotalProducto">6.10</span></h5></div></div> -->
				</div>
			</div>
			<div class="col-xs-3">
				<h3 class="text-center">Mesa: <span id="idMesaSpan"></span></h3>
				<h3 class="text-center">Total S/. <span id="idTotalSpan">36.50</span></h3>
					<div class="container clContenedorCateg">
						<?php include 'php/listarProductosCategoriaResumen.php'; ?>
					</div>
				<button class="btn btn-primary btn-lg btn-outline btn-block hidden"><i class="icofont icofont-users"></i> Asignar cliente</button>
				<button class="btn btn-success btn-lg btn-outline btn-block" id="btnCobrarCliente"><i class="icofont icofont-money-bag"></i> Cobrar</button>
				<button class="btn btn-warning btn-lg btn-outline btn-block" id="btnCajaAgregarProducto"><i class="icofont icofont-bbq"></i> Agregar producto</button>
				<button class="btn btn-danger btn-lg btn-outline btn-block" id="btnCancelarPedido"><i class="icofont icofont-close-circled"></i> Cancelar pedido</button>
			</div>
		</div>
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
		<div class="modal-header-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Tipo de cliente: <span id="spanIdInventario"></span></h4>
		</div>
		<div class="modal-body">

				<div class="container-fluid">
					<div class="col-xs-6"><button class="btn  btn-primary btn-lg btn-block btn-outline" id="btnClienteSimple"><i class="icofont icofont-user-alt-2"></i> Cliente Simple</button></div>
				<div class="col-xs-6"><button class="btn  btn-success btn-lg btn-block btn-outline" id="btnClienteEspecial"><i class="icofont icofont-business-man"></i> Cliente registrado</button></div>
				</div>

			<div class="row container" id="detProductoInv">
				
			</div>
		</div>
		<div class="modal-footer"> <button class="btn btn-danger btn-outline" data-dismiss="modal"><i class="icofont icofont-close"></i> Cancelar</button></div>
	</div>
</div>
</div>

<!-- Modal para finalizar el pedido como venta -->
<div class="modal fade modal-finalizarPedidoAVenta" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog " role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Tipo de cliente: <span id="spanIdInventario"></span></h4>
		</div>
		<div class="modal-body">
			<p class="text-center">La cuenta de la <strong>«Mesa <span id="queMesaEsSpan"></span>»</strong> es de </p>
			<div class="text-center"><h3 style="display: inline-block; margin-top: 0px; margin-bottom: 0px;">S/. </h3> <h3 id="h3CuentaFinal" style="display: inline-block;margin-top: 0px; margin-bottom: 0px;">88.00</h3></div>
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

<!-- Modal para buscar un producto -->
<div class="modal fade modal-buscarProducto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog  role="document">
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
<script src="js/toastr.js"></script>

<style>
	
</style>

<script>
$(document).ready(function(){
datosUsuario();
$.ticket = [];
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
				$(`#${dato.idMesa}`).removeClass('mesaLibre').removeClass('btn-morado').addClass(`${dato.estadoMesa}`).addClass('btn-rojoFresa');
			}else{
				$(`#${dato.idMesa}`).removeClass('mesaOcupado').removeClass('btn-rojoFresa').addClass(`${dato.estadoMesa}`).addClass('btn-morado');
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
		var sumaTotales=0, cantRes=0;
		$('.contanedorDivsProductos').children().remove();
		$.ajax({url:'php/listarPedidoMesaOcupada.php', type: 'POST', data: {mesa: iddeMesa}}).done(function (resp) {
			//console.log(resp);
			$.each(JSON.parse(resp), function (i, dato) {
				$('.contanedorDivsProductos').append(`<div class="divUnSoloProducto row"><div class="col-xs-7"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto" id="${dato.idProducto}"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto" id="${dato.idProducto}">${dato.prodDescripcion}</h4> </div><div class="col-xs-3"><button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">${dato.pedCantidad}</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">${dato.prodPrecio}</span>S/. <span class="valorTotalProducto">${parseFloat(dato.subTotal).toFixed(2)}</span></h5></div></div>`);
				cantRes=parseInt($(`.${dato.tpNombreWeb}`).find('.platoResValor').text())+1;
				$(`.${dato.tpNombreWeb}`).find('.platoResValor').text(cantRes);

				sumaTotales+=parseFloat(dato.subTotal);
				$('#idTotalSpan').text(parseFloat(sumaTotales).toFixed(2));
			});
		});
	}else{
		toastr.options={'positionClass': "toast-bottom-center"}
		toastr.warning('Ésta mesa aún no tiene pedidos.');
	}
});
$('#btnRegresarAMesas').click(function () {
	$('.divMesas').removeClass('hidden');
	$('.DetalleMesa').addClass('hidden');
	$('#btnRegresarAMesas').addClass('hidden');
	$('#btnObtenerEstadoMesas').removeClass('hidden');
	$('.platoResValor').text(0);

});
$('#txtCuantoPagaCliente').keypress(function (e) {
	if (e.keyCode == 13) { 	$('#btbSalvarVenta').click(); }
})
$('#btnCancelarPedido').click(function () {
	$.ajax({url:'php/cancelarPedido.php', type:'POST', data:{mesa:$('#idMesaSpan').text() , idUser: $.JsonUsuario.idUsuario}}).done(function (resp) {
		//console.log(resp)
		if(parseInt(resp)>0){
			$('#btnRegresarAMesas').click();
			$('#btnObtenerEstadoMesas').click();
		}
	})
});
$('body').on('click', '.btnRemoverProducto',function () {
	var idEliminar=$(this).attr('id');
	//var contenedor=$(this).parent().parent();
	var cantDivs=$('.contanedorDivsProductos .divUnSoloProducto ').length;
	if (cantDivs==1){
		$('#btnCancelarPedido').click();
	}
	else{
		$.ajax({url:'php/eliminarProductoPedido.php', type:"POST", data:{idProd:idEliminar , mesa:$('#idMesaSpan').text(), idUser:$.JsonUsuario.idUsuario }}).done(function (resp) { //console.log(resp)
			if(parseInt(resp)>0){
				$(`.contanedorDivsProductos`).find(`#${idEliminar}`).parent().parent().remove();
			}
			
		});
	}
});
$('#btnCobrarCliente').click(function () {
	$('#queMesaEsSpan').text($('#idMesaSpan').text())
	$('#h3CuentaFinal').text($('#idTotalSpan').text())
	$('.modal-preguntarCliente').modal('show');
});
$('.modal-finalizarPedidoAVenta').on('shown.bs.modal', function() {
	$('#txtCuantoPagaCliente').focus();
});
$('#btnClienteSimple').click(function(){
	$('#spanTipoCliente').text(1);
	$('.modal-preguntarCliente').modal('hide');
	$('.modal-finalizarPedidoAVenta').modal('show');

});
$('#btbSalvarVenta').click(function () {
	if($('#txtCuantoPagaCliente').val()< parseFloat($('#h3CuentaFinal').text()) || $('#txtCuantoPagaCliente').val()==''){
		$('.modal-finalizarPedidoAVenta .labelError').removeClass('hidden').find('.mensaje').text('No se puede guardar un monto menor a la cuenta.');	}
	else{
		
		$.ajax({url:'php/insertarVentaFinal.php', type: 'POST', data: {mesa: $('#idMesaSpan').text(),cuantoCobra: $('#txtCuantoPagaCliente').val(),idUser: $.JsonUsuario.idUsuario, idCli : $('#spanTipoCliente').text(), montoTotal: $('#idTotalSpan').text() }}).done(function (resp) { //console.log(resp)
			if(parseInt(resp)>0){
				var vuelto= parseFloat($('#txtCuantoPagaCliente').val()-$('#idTotalSpan').text()).toFixed(2);

				$.each($('.divUnSoloProducto'), function (i, dato) {
				$.ticket.push({'id': $(dato).find('.h4NombreProducto').attr('id'), 'nomProducto': $(dato).find('.cantidadProducto').text() +' Und. '+ $(dato).find('.h4NombreProducto').text() , 'cant': $(dato).find('.cantidadProducto').text(), 'sub': $(dato).find('.valorTotalProducto').text() });
				});
				var fecha=moment().format('DD/MM/YYYY H:mm a');
				
				$.ajax({url: 'printTicketCaja.php', type: 'POST', data: {hora: fecha, text: retornarCadenaImprimir() , usuario: $.JsonUsuario.usuNombres, cuentaTotal: $('#idTotalSpan').text(), paga: $('#txtCuantoPagaCliente').val(), cambio: vuelto} });

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

function retornarCadenaImprimir(){
var totalImprimir=40;
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
		cantlibres=40-lineaEntera.length%40;
		// console.log('espacios libres para ultima linea '+ cantlibres)

	for (var i = cantlibres - 1; i >= 0; i--) {
		espacioslibres+=' ';
	};
	lineaImpr+=funProducto+ espacioslibres+funPrecio+'\n';
	// console.log(lineaImpr)
	// console.log(lineaImpr.length)
	}
	else{//console.log('una linea');
		cantlibres=parseInt(totalImprimir-lineaEntera.length);
		//console.log('espacios libres en ultima linea '+ parseInt(totalImprimir-lineaEntera.length))

		for (var i = cantlibres - 1; i >= 0; i--) {
			espacioslibres+=' ';
		};
		lineaImpr+=funProducto+ espacioslibres+funPrecio+'\n';
		//console.log(lineaImpr)
		//console.log(lineaImpr.length)

	}
	});

return lineaImpr;
}
$('.modal-buscarProducto').on('shown.bs.modal', function() { /*$('#txtParaFiltrarProducto').focus();*/

});
$('#btnCajaAgregarProducto').click(function () { 
	listarProductos();
	$('.modal-buscarProducto').modal('show'); });
function listarProductos() {
	$('.modal-buscarProducto .panel-body').children().remove();
	$.ajax({url:'php/listarProductos.php', type:'POST'}).done(function (resp) {
		$.each(JSON.parse(resp), function (i, dato) {
			$(`#${dato.tpNombreWeb} .panel-body`).append(`
					<div class="row divUnSoloProductodivUnSoloProducto" id="${dato.idProducto}"><div class="col-xs-7"><h4 class="h4NombreProducto mayuscula ${dato.tpDivBebidaCocina}" id="${dato.idProducto}">${dato.prodDescripcion}</h4> <span class="stockPlato">(<span class="stockFict">${dato.stockCantidad}</span>)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">${parseFloat(dato.prodPrecio).toFixed(2)}</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
				`);
		});
		//console.log(resp);
	});
}
$('.DetalleMesa').on('click', '.btnSumarProducto', function () { 
	var contenedor=$(this).parent().parent();
	var idProd= contenedor.find('.h4NombreProducto').attr('id');
	var preciov=parseFloat(contenedor.find('.valorUndProducto').text());
	var idmesa=$('#idMesaSpan').text();

	$.ajax({url:'php/agregarUnProductoAMesa.php', type: 'POST', data:{prod: idProd, mesa:idmesa, idUser: $.JsonUsuario.idUsuario, precio:preciov }}).done(function(resp){ //console.log(resp)
		if(parseInt(resp)>0){
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

// SELECT DATE_FORMAT(`cajaFechaRegistro`,'%d/%m/%Y') FROM `caja`
</script>

</body>

</html>
