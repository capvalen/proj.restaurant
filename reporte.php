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
				 <h2 class="purple-text text-lighten-1"><i class="icofont icofont-options"></i> Reportería</h2>

					<ul class="nav nav-tabs">
					<li class="active"><a href="#tabAgregarLabo" data-toggle="tab">Resumen de caja</a></li>
					<li class="hidden"><a href="#tabCambiarPassUser" data-toggle="tab">Cambiar contraseña</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para buscar productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabAgregarLabo">
						<!--Inicio de pestaña 01-->
								<div class="row">
									<div>
										<p>Seleccione una fecha para filtrar por favor:</p>
										<div class="form-inline">
											<div class="form-group">
												<div class="sandbox-container input-group">
													<input  id="dtpFechaInicio"  type="text" class="form-control text-center" placeholder="Seleccione una fecha">
													<div class="input-group-btn">
														<button class="btn btn-morado btn-outline" id="btnBuscarVentas"><i class="icofont icofont-search-alt-1"></i></button>
													</div>
												
											</div>
											</div>
										</div>
									</div>
								</div>
							<p>Fecha generada: <strong><span id="spanFechaLetra"></span></strong></p>
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
							</div>
							

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
$('.sandbox-container input').datepicker({language: "es", autoclose: true, todayBtn: "linked", todayHighlight: true});
$('#dtpFechaInicio').val(moment().format('DD/MM/YYYY'));


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

</script>

</body>

</html>
