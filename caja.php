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
						<a href="#"><i class="icofont icofont-users"></i> Usuarios</a>
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
				<div class="row divMesas ">
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

					<div class="divUnSoloProducto row"><div class="col-xs-7"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto" id="">Suspiro a la limeña</h4> </div><div class="col-xs-3"><button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">1</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">6.10</span>S/. <span class="valorTotalProducto">6.10</span></h5></div></div>
				</div>
			</div>
			<div class="col-xs-3">
				<h3 class="text-center">Mesa: <span>4</span></h3>
				<h3 class="text-center">Total S/. <span>36.50</span></h3>
					<div class="container">
						<p>Entradas <span class="stockPlato">(4)</span></p>
						<p>Especiales <span class="stockPlato">(2)</span></p>
						<p>Gaseosas <span class="stockPlato">(1)</span></p>
						<p>Postres <span class="stockPlato">(3)</span></p>
					</div>
				<button class="btn btn-primary btn-lg btn-outline btn-block"><i class="icofont icofont-users"></i> Asignar cliente</button>
				<button class="btn btn-success btn-lg btn-outline btn-block"><i class="icofont icofont-money-bag"></i> Cobrar</button>
				<button class="btn btn-warning btn-lg btn-outline btn-block" id="btnCajaAgregarProducto"><i class="icofont icofont-bbq"></i> Agregar producto</button>
				<button class="btn btn-danger btn-lg btn-outline btn-block"><i class="icofont icofont-close-circled"></i> Cancelar pedido</button>
			</div>
		</div>
					<!-- Fin de meter contenido principal -->
				</div>
					
				</div>
		</div>
</div>
<!-- /#page-content-wrapper -->
</div><!-- /#wrapper -->

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
			<div class="modal-footer"> <button class="btn btn-primary btn-outline" data-dismiss="modal"></i><i class="icofont icofont-alarm"></i> Aceptar</button></div>
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

	
<!-- jQuery -->
<script src="js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/inicializacion.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>
<script src="js/toastr.js"></script>

<style>
	
</style>

<script>
$(document).ready(function(){
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

});


</script>

</body>

</html>
