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
		<link href="css/estilosElementosv2.css?version=1.0.1" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.1" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.1">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/animate.css">

		<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
		<link rel="stylesheet" href="css/icofont.css"> <!-- iconos extraidos de: http://icofont.com/-->
		<link rel="shortcut icon" href="images/peto.png" />
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css"> <!-- extraido de: http://flatlogic.github.io/awesome-bootstrap-checkbox/demo/-->
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
				<li class="active">
						<a href="principal.php"><i class="icofont icofont-space-shuttle"></i> Inicio</a>
				</li>
				<li>
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
				 <h2 class="purple-text text-lighten-1"><i class="icofont icofont-options"></i> Panel de configuraciones generales</h2>

					<ul class="nav nav-tabs">
					<li class="active"><a href="#tabAgregarLabo" data-toggle="tab">Agregar laboratorio</a></li>
					<li><a href="#tabCambiarPassUser" data-toggle="tab">Cambiar contraseña</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para buscar productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabAgregarLabo">
						<!--Inicio de pestaña 01-->
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, eos vero cum tenetur minus eius enim eaque at saepe in nulla fugit molestiae libero nostrum inventore aperiam unde provident nesciunt.

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

<!-- Menu Toggle Script -->
<script>
$(document).ready(function(){
	
	$('.selectpicker').selectpicker('refresh');

		$('.mitooltip').tooltip();
		$('input').keypress(function (e) {
			if (e.keyCode == 13)
			{
				$(this).parent().next().children().focus();
				//$(this).parent().next().children().removeAttr('disabled'); //agregar atributo desabilitado
			} 
		});



});


</script>

</body>

</html>
