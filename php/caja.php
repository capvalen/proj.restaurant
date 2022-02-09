<?php $_F=__FILE__;$_X='Pz48P3BocA0KczVzczQybl9zdDFydCgpOw0KcjVxMzRyNSAncGhwL2w0YzVuYzUucGhwJzsNCjRmIChAISRfU0VTU0lPTlsnQXQ0NW5kNSddKXsvL3M0bjIgNXg0c3Q1IDVudjQxciAxIDRuZDV4DQoJaDUxZDVyKCJMMmMxdDQybjo0bmQ1eC5waHAiKTsNCn01bHM1ew0KCTRmKCRfU0VTU0lPTlsnUDJ3NXInXT09byl7aDUxZDVyKCJMMmMxdDQybjpwNWQ0ZDJzLnBocCIpO30NCg0KfQ0KPz4=';eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>
<!DOCTYPE html>
<html lang="es">

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Caja: Infocat Snack</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link rel="shortcut icon" href="images/peto.png?version=1.0" />
		<link href="css/estilosElementosv2.css?version=1.0.7" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.2" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.4">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/snack.css?version=1.0.5">

		<link rel="stylesheet" href="css/bootstrap-select.min.css"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
		<link rel="stylesheet" href="css/icofont.css"> <!-- iconos extraidos de: http://icofont.com/-->
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css"> <!-- extraido de: http://flatlogic.github.io/awesome-bootstrap-checkbox/demo/-->
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"> <!-- extraído de: https://uxsolutions.github.io/bootstrap-datepicker/-->
		<link rel="stylesheet" href="css/toastr.min.css?version=1.0.1"> <!-- extraído de: http://codeseven.github.io/toastr/demo.html-->

</head>

<body>

<style>
.divUnSoloProducto{color: #949494!important;}
.divUnSoloDescuento{color: #f54242!important;}
.text-danger {color: #d9534f;}
.btn-azul{color: #0078D7;}
#smallLibre, #smallOcupado{cursor:pointer;}
</style>
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
<!-- Page Content -->
<div id="page-content-wrapper">
	<div class="container-fluid noselect">				 
			<div class="row">
				<div class="col-lg-12 contenedorDeslizable">
				<!-- Empieza a meter contenido principal dentro de estas etiquetas -->
				 <?php $_F=__FILE__;$_X='Pz48P3BocCANCgkJCTRmICgkX1NFU1NJT05bJ2w0YzVuYzQxJ109PSdPaycpeyA/Pg0KCQkJCTwhLS0gQzJudDVuNGQyIHAxcjEgbDRjNW5jNDFyIC0tPg0KCQkJCTxkNHYgY2wxc3M9InIydyBjMm50MTRuNXItZmwzNGQiPg0KCQkJCSAJPGhhIGNsMXNzPSJwM3JwbDUtdDV4dCB0NXh0LWw0Z2h0NW4tNiIgc3R5bDU9IiBkNHNwbDF5OiA0bmw0bjUtYmwyY2s7Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWw1bnMiPjwvND4gQzJicjIgNW4gYzFqMSAtIEMxczEgZDUgQjFycjIgPHNtMWxsIGNsMXNzPSJwM3JwbDUtdDV4dCB0NXh0LWw0Z2h0NW4tNiIgNGQ9InNtMWxsTDRicjUiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtYzNiNSI+PC80PiBMNGJyNXM8L3NtMWxsPiA8c20xbGwgY2wxc3M9InI1ZC10NXh0IHQ1eHQtZDFyazVuLWEiIDRkPSJzbTFsbE9jM3AxZDIiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtYzNiNSI+PC80PiBPYzNwMWQxczwvc20xbGw+PC9oYT4gPGIzdHQybiBjbDFzcz0iYnRuIGJ0bi1zM2NjNXNzIGJ0bi1sZyBidG4tMjN0bDRuNSBwM2xsLXI0Z2h0IiA0ZD0iYnRuT2J0NW41ckVzdDFkMk01czFzIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXNwMjJuLTFuZC1mMnJrIj48LzQ+IEFjdDMxbDR6MXIgbTVzMXM8L2IzdHQybj4gPGIzdHQybiBjbDFzcz0iYnRuIGJ0bi1zM2NjNXNzIGJ0bi1sZyBidG4tMjN0bDRuNSBwM2xsLXI0Z2h0IGg0ZGQ1biIgNGQ9ImJ0blI1Z3I1czFyQU01czFzIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXNwMjJuLTFuZC1mMnJrIj48LzQ+IFI1Z3I1czFyIDEgbTVzMXM8L2IzdHQybj4NCgkJCQkgCTxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tdzFybjRuZyBidG4tbGcgYnRuLTIzdGw0bjUgcDNsbC1yNGdodCIgNGQ9ImJ0blY1clQ0Y2s1dHMiIHN0eWw1PSJtMXJnNG4tcjRnaHQ6IDYwcHgiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtMzQtYzJweSI+PC80PiBWNXIgJiNhaTA7bHQ0bTJzIHQ0Y2s1dHM8L2IzdHQybj4NCgkJCQkgPC9kNHY+DQoJCQkJPGQ0diBjbDFzcz0icjJ3IGQ0dk01czFzICI+IDxzcDFuIGNsMXNzPSJoNGRkNW4iIDRkPSJzcDFuVDRwMkNsNDVudDUiPjwvc3Axbj4NCgkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9IjYiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtZjIyZC1jMXJ0Ij48LzQ+IE01czEgNjwvYjN0dDJuPjwvZDR2Pg0KCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iYSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBhPC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0ibyI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBvPC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0idSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSB1PC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iaSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBpPC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iZSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBlPC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iNyI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSA3PC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iOCI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSA4PC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iOSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSA5PC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iNjAiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgNjA8L2IzdHQybj48L2Q0dj4NCgkJCQkJDQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iNjYiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgNjY8L2IzdHQybj48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI2YSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSA2YTwvYjN0dDJuPjwvZDR2Pg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9IjZvIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIDZvPC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iNnUiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgNnU8L2IzdHQybj48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI2aSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSA2aTwvYjN0dDJuPjwvZDR2Pg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9IjZlIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIDZlPC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iNjciPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgNjc8L2IzdHQybj48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSI2OCI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSA2ODwvYjN0dDJuPjwvZDR2Pg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9IjY5Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIDY5PC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iYTAiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgYTA8L2IzdHQybj48L2Q0dj4NCg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9ImE2Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIGE2PC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iYWEiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgYWE8L2IzdHQybj48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJhbyI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBhbzwvYjN0dDJuPjwvZDR2Pg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9ImF1Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIGF1PC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iYWkiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgYWk8L2IzdHQybj48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJhZSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBhZTwvYjN0dDJuPjwvZDR2Pg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9ImE3Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIGE3PC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0iYTgiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgYTg8L2IzdHQybj48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJhOSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBhOTwvYjN0dDJuPjwvZDR2Pg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9Im8wIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIG8wPC9iM3R0Mm4+PC9kNHY+DQoNCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJvNiI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBvNjwvYjN0dDJuPjwvZDR2Pg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9Im9hIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIG9hPC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0ib28iPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgb288L2IzdHQybj48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJvdSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBvdTwvYjN0dDJuPjwvZDR2Pg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9Im9pIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIG9pPC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0ib2UiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgb2U8L2IzdHQybj48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJvNyI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSBvNzwvYjN0dDJuPjwvZDR2Pg0KCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtZSBjMmwtc20tbyI+PGIzdHQybiBjbDFzcz0iYnRuIGJ0bi0xejNsIGJ0bi1sZyBidG4tYmwyY2sgYnRuLTIzdGw0bjUgYnRuTTVzMSIgNGQ9Im84Ij48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXI1c3QxM3IxbnQtbTVuMyI+PC80PiBNNXMxIG84PC9iM3R0Mm4+PC9kNHY+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIGMybC1zbS1vIj48YjN0dDJuIGNsMXNzPSJidG4gYnRuLTF6M2wgYnRuLWxnIGJ0bi1ibDJjayBidG4tMjN0bDRuNSBidG5NNXMxIiA0ZD0ibzkiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcjVzdDEzcjFudC1tNW4zIj48LzQ+IE01czEgbzk8L2IzdHQybj48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUgYzJsLXNtLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tMXozbCBidG4tbGcgYnRuLWJsMmNrIGJ0bi0yM3RsNG41IGJ0bk01czEiIDRkPSJ1MCI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1yNXN0MTNyMW50LW01bjMiPjwvND4gTTVzMSB1MDwvYjN0dDJuPjwvZDR2Pg0KCQkJCTwvZDR2Pg0KDQoJCTxkNHYgY2wxc3M9InIydyBENXQxbGw1TTVzMSBoNGRkNW4iPg0KCQkJPGQ0diBjbDFzcz0iYzJsLXhzLTZhIGMybC1zbS05Ij4NCgkJCQkNCgkJCQk8ZDR2IGNsMXNzPSJyMncgMmJzTTVzMSI+DQoJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1lIj48bDFiNWwgZjJyPSIiPk9iczVydjFjNDJuNXMgcDFyMSBDMmM0bjE6PC9sMWI1bD4NCgkJCQkJPHAgY2wxc3M9Im0xeTNzYzNsMSIgNGQ9InBENXRDMmM0bjEiPjwvcD48L2Q0dj4NCgkJCQkJPGQ0diBjbDFzcz0iYzJsLXhzLWUiPjxsMWI1bCBmMnI9IiI+T2JzNXJ2MWM0Mm41cyBwMXIxIEIxcjo8L2wxYjVsPg0KCQkJCQk8cCBjbDFzcz0ibTF5M3NjM2wxIiA0ZD0icEQ1dEIxciI+PC9wPjwvZDR2Pg0KCQkJCTwvZDR2Pg0KCQkJCTxkNHYgY2wxc3M9InIydyI+DQoJCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtNyB0NXh0IiBzdHlsNT0icDFkZDRuZy1sNWZ0OiB1aXB4OyI+PGh1PlByMmQzY3QyPC9odT48L2Q0dj4NCgkJCQkJCTxkNHYgY2wxc3M9ImMybC14cy1vIHQ1eHQiPjxodT5DMW50NGQxZDwvaHU+PC9kNHY+DQoJCQkJCQk8ZDR2IGNsMXNzPSJjMmwteHMtYSB0NXh0Ij48aHU+UzNiVDJ0MWw8L2h1PjwvZDR2Pg0KCQkJCQkNCgkJCQk8L2Q0dj4NCgkJCQk8ZDR2IGNsMXNzPSJjMm50MW41ZDJyRDR2c1ByMmQzY3QycyI+DQoNCgkJCQkJPCEtLSA8ZDR2IGNsMXNzPSJkNHZVblMybDJQcjJkM2N0MiByMnciPjxkNHYgY2wxc3M9ImMybC14cy03Ij48YjN0dDJuIGNsMXNzPSJidG4gYnRuLWQxbmc1ciBidG4tYzRyY2w1IGJ0bi1OMkw0bjUgYnRuLTIzdGw0bjUgYnRuUjVtMnY1clByMmQzY3QyIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LWNsMnM1Ij48LzQ+PC9iM3R0Mm4+IDxodSBjbDFzcz0iaHVOMm1icjVQcjJkM2N0MiIgNGQ9IiI+UzNzcDRyMiAxIGwxIGw0bTUmI2F1NjsxPC9odT4gPC9kNHY+PGQ0diBjbDFzcz0iYzJsLXhzLW8iPjxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tdzFybjRuZyBidG4tYzRyY2w1IGJ0bi1OMkw0bjUgYnRuUjVzdDFyUHIyZDNjdDIiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtbTRuM3MtYzRyY2w1Ij48LzQ+PC9iM3R0Mm4+IDxzcDFuIGNsMXNzPSJjMW50NGQxZFByMmQzY3QyIj42PC9zcDFuPiA8YjN0dDJuIGNsMXNzPSJidG4gYnRuLXcxcm40bmcgYnRuLWM0cmNsNSBidG4tTjJMNG41IGJ0blMzbTFyUHIyZDNjdDIiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcGwzcy1jNHJjbDUiPjwvND48L2IzdHQybj48L2Q0dj48ZDR2IGNsMXNzPSJjMmwteHMtYSI+PGhpIGNsMXNzPSJodXByNWM0MlByMmQzY3QyIj48c3AxbiBjbDFzcz0idjFsMnJVbmRQcjJkM2N0MiBzci0ybmx5Ij5lLjYwPC9zcDFuPlMvLiA8c3AxbiBjbDFzcz0idjFsMnJUMnQxbFByMmQzY3QyIj5lLjYwPC9zcDFuPjwvaGk+PC9kNHY+PC9kNHY+IC0tPg0KCQkJCTwvZDR2Pg0KCQkJPC9kNHY+DQoJCQk8ZDR2IGNsMXNzPSJjMmwteHMtNmEgYzJsLXNtLW8iPg0KCQkJCTxobyBjbDFzcz0idDV4dC1jNW50NXIiPk01czE6IDxzcDFuIDRkPSI0ZE01czFTcDFuIj48L3NwMW4+PC9obz4gPHNwMW4gY2wxc3M9Img0ZGQ1biIgNGQ9IjRkUDVkNGQyTTVzMSI+PC9zcDFuPg0KCQkJCTxwPjxzdHIybmc+TrAgSXQ1bXMgcDJyIGMxdDVnMnImI2FvNzsxOjwvc3RyMm5nPjwvcD4NCgkJCQk8ZDR2IGNsMXNzPSJjbEMybnQ1bjVkMnJDMXQ1ZyI+DQoJCQkJCQk8P3BocCA0bmNsM2Q1ICdwaHAvbDRzdDFyQzF0NWcycjQxc0dyM3AxbC5waHAnOyA/Pg0KCQkJCQk8L2Q0dj4NCgkJCQk8aG8gY2wxc3M9InQ1eHQtYzVudDVyIj5UMnQxbCBTLy4gPHNwMW4gNGQ9IjRkVDJ0MWxTcDFuIj4wLjAwPC9zcDFuPjwvaG8+DQoJCQkJCQ0KCQkJCTxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tcHI0bTFyeSBidG4tbGcgYnRuLTIzdGw0bjUgYnRuLWJsMmNrIGg0ZGQ1biI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC0zczVycyI+PC80PiBBczRnbjFyIGNsNDVudDU8L2IzdHQybj4NCgkJCQk8YjN0dDJuIGNsMXNzPSJidG4gYnRuLW0ycjFkMiBidG4tbGcgYnRuLTIzdGw0bjUgYnRuLWJsMmNrIiA0ZD0iYnRuSW1wckN0MSI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1wcjRudCI+PC80PiBJbXByNG00ciBjMzVudDE8L2IzdHQybj4NCgkJCQk8YjN0dDJuIGNsMXNzPSJidG4gYnRuLXMzY2M1c3MgYnRuLWxnIGJ0bi0yM3RsNG41IGJ0bi1ibDJjayIgNGQ9ImJ0bkMyYnIxckNsNDVudDUiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtbTJuNXktYjFnIj48LzQ+IEMyYnIxcjwvYjN0dDJuPg0KCQkJCTxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tdzFybjRuZyBidG4tbGcgYnRuLTIzdGw0bjUgYnRuLWJsMmNrIiA0ZD0iYnRuQzFqMUFncjVnMXJQcjJkM2N0MiI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1iYnEiPjwvND4gQWdyNWcxciBwcjJkM2N0MjwvYjN0dDJuPg0KCQkJCTxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tZDFuZzVyIGJ0bi1sZyBidG4tMjN0bDRuNSBidG4tYmwyY2siIDRkPSJidG5DMW5jNWwxclA1ZDRkMiI+PDQgY2wxc3M9IjRjMmYybnQgNGMyZjJudC1jbDJzNS1jNHJjbDVkIj48LzQ+IEMxbmM1bDFyIHA1ZDRkMjwvYjN0dDJuPg0KCQkJCTxiM3R0Mm4gY2wxc3M9ImJ0biBidG4tcHI0bTFyeSBidG4tbGcgYnRuLTIzdGw0bjUgYnRuLWJsMmNrIiA0ZD0iYnRuTTJ2NXJQNWQ0ZDIiPjw0IGNsMXNzPSI0YzJmMm50IDRjMmYybnQtcDFwNXIiPjwvND4gTTJ2NXIgbTVzMTwvYjN0dDJuPg0KCQkJCTwhLS0gPGIzdHQybiBjbDFzcz0iYnRuIGJ0bi1kMW5nNXIgYnRuLWxnIGJ0bi0yM3RsNG41IGJ0bi1ibDJjayIgNGQ9ImJ0bkRzY3QyT2MxczQybjFsIj48NCBjbDFzcz0iNGMyZjJudCA0YzJmMm50LXAxcDVyIj48LzQ+IEFncjVnMXIgZDVzYzM1bnQyPC9iM3R0Mm4+IC0tPg0KCQkJPC9kNHY+DQoJCTwvZDR2Pg0KCQkJPD9waHAgDQoJCQl9NWxzNXsgNG5jbDNkNSAncGhwL2w0YzVuYzQxRDVtMi5waHAnOyB9ID8+';eval(base64_decode('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCcxMjM0NTZhb3VpZScsJ2FvdWllMTIzNDU2Jyk7JF9SPWVyZWdfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>
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
		$.ajax({url:'php/listarPedidoMesaOcupada.php', type: 'POST', data: {mesa: iddeMesa}}).done(function (resp) { //console.log(resp)
			$.each(JSON.parse(resp), function (i, dato) { //console.log(dato)
				if(dato.observacCocina==''){$('#pDetCocina').parent().addClass('hidden');}else{$('#pDetCocina').text(dato.observacCocina).parent().removeClass('hidden');}
				if(dato.observacBar==''){$('#pDetBar').parent().addClass('hidden');}else{$('#pDetBar').text(dato.observacBar).parent().removeClass('hidden');}
				$('#idPedidoMesa').text(dato.idPedido);
				if(dato.prodPrecio>0){
					$('.contanedorDivsProductos').append(`<div class="divUnSoloProducto row"><div class="col-xs-6"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto" id="${dato.idProducto}"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto mayuscula" id="${dato.idProducto}">${dato.prodDescripcion}</h4> <span class="notaPed">${dato.pedNota}</span></div><div class="col-xs-3"><button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">${dato.pedCantidad}</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">${dato.prodPrecio}</span>S/. <span class="valorTotalProducto">${parseFloat(dato.subTotal).toFixed(2)}</span></h5></div> <div><button class="btn btn-success btn-outline btn-sm btnSinBorde btnPrintHot" data-quees="${dato.tpDivBebidaCocina}" ><i class="icofont icofont-print"></i></button><button class="btn btn-danger btn-outline btn-sm btnSinBorde btnDsctoHot" ><i class="icofont icofont-swoosh-down"></i></button></div></div>`);
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
$('#btnRegresarAMesas').click(function () {
	$('.divMesas').removeClass('hidden');
	$('.DetalleMesa').addClass('hidden');
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
	$('#queMesaEsSpan').text($('#idMesaSpan').text());
	$('#queMesaEsSpan2').text($('#idMesaSpan').text());
	$('#h3CuentaFinal').text($('#idTotalSpan').text());
	$('.modal-preguntarCliente').modal('show');
	$('#txtCuantoPagaCliente').val('0.00');
	$('#txtCuantPagaClienteTarjet').val('0.00');
	$('#txtCuantPagaClienteTarjet').val('0.00');
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
		$.ajax({url:'php/insertarVentaFinalTarjeta.php', type: 'POST', data: {mesa: $('#idMesaSpan').text(), idUser: $.JsonUsuario.idUsuario, idCli : $('#spanTipoCliente').text(), montoTotal: $('#idTotalSpan').text(), idModo: idMod,  pagaTarj: $('#txtCuantPagaClienteTarjet').val(), pagaEfe: $('#txtCuantPagaClienteEfect').val() }}).done(function (resp) { console.log(resp)
			if(parseInt(resp)>0){
				var vuelto= parseFloat($('#txtCuantPagaClienteTarjet').val()-$('#idTotalSpan').text()).toFixed(2);

				$('.modal-finalizarPedidoAVentaTarjeta').modal('hide');
				$('.modal-VueltoConExito').modal('show');
				$('#h3VueltoFinal').text('0.00');
				$('#spanVueltoEx').text(parseFloat($('#idTotalSpan').text()).toFixed(2));
				$('#btnRegresarAMesas').click();
				$('#btnObtenerEstadoMesas').click();
			}
		});
	}
});
$('.modal-deseasAnular').on('shown.bs.modal', function() { $('#txtRazonAnular').focus(); });

$('#btbSalvarVenta').click(function () {
	if($('#txtCuantoPagaCliente').val()< parseFloat($('#h3CuentaFinal').text()) || $('#txtCuantoPagaCliente').val()==''){
		$('.modal-finalizarPedidoAVenta .labelError').removeClass('hidden').find('.mensaje').text('No se puede guardar un monto menor a la cuenta.');	}
	else{
		
		$.ajax({url:'php/insertarVentaFinal.php', type: 'POST', data: {mesa: $('#idMesaSpan').text(),cuantoCobra: $('#txtCuantoPagaCliente').val(),idUser: $.JsonUsuario.idUsuario, idCli : $('#spanTipoCliente').text(), montoTotal: $('#idTotalSpan').text() }}).done(function (resp) { console.log(resp)
			if(parseInt(resp)==true){
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
			$.ajax({url: 'printTicketCaja.php', type: 'POST', data: {numMesa: $('#idMesaSpan').text(), hora: fecha, texto: retornarCadenaImprimir() , usuario: $.JsonUsuario.usuNombres, cuentaTotal: $('#idTotalSpan').text(), } });
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
		$.ajax({url:'printTicketBar.php', type:'POST', data: {hora:moment().format('DD [de] MMMM [de] YYYY h:mm a'), numMesa: mesa, texto:itemsBar, usuario: $.JsonUsuario.usuNombres, obsBarra: '' }}).done(function (resp) {
			console.log(resp)
		});
	}else{
		$.ajax({url:'printTicketCocina.php', type:'POST', data: {hora:moment().format('DD [de] MMMM [de] YYYY h:mm a'), numMesa: mesa, texto:itemsBar, usuario: $.JsonUsuario.usuNombres, obsBarra: '' }}).done(function (resp) {
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
// SELECT DATE_FORMAT(`cajaFechaRegistro`,'%d/%m/%Y') FROM `caja`
</script>

</body>

</html>
