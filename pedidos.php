<?php
session_start();
if (@!$_SESSION['Atiende']){//sino existe enviar a index
	header("Location:index.php");
}
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pedidos - Infocat Snack</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilosElementosv2.css?version=1.0.3">
	<link rel="stylesheet" href="css/snack.css?version=1.0.4">
	<link rel="stylesheet" href="css/icofont.css">
	<link rel="stylesheet" href="css/toastr.css?version=1.0.2"> <!-- extraído de: http://codeseven.github.io/toastr/demo.html-->

</head>
<body>
<style>
	.divUnSoloProductoDisponible{padding-top: 5px; padding-bottom: 5px;}
	.divUnSoloProducto:hover{background-color: transparent!important;}
	.divPrincipal{margin-top:0px!important;}
</style>

<div class="container-fluid divPrincipal" >
	

	<div class="row" id="divMesas">
		<div class="text-center" ><h1 style="color: #442e9e; display: inline-block;"><i class="icofont icofont-fast-food"></i> Pedidos en Casa de Barro <small class="mayuscula">- <?php echo $_SESSION['Atiende']; ?></small></h1> <button style="margin-top: 20px; margin-right: 10px;" class="btn btn-success btn-outline pull-right" id="btnCerrarSesion"><i class="icofont icofont-external-link"></i> Cerrar sesión</button></div>
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
	<div class="row sr-only" id="divPedido">
		<h1 class="text-center" style="color: #442e9e"><i class="icofont icofont-bbq"></i> Pedido de mesa <small class="mayuscula"># <span id="spanNumMesa"></span> - <?php echo $_SESSION['Atiende']; ?></small></h1> <span class="hidden" id="spanIdPedidoAct"></span>
		<div class="col-xs-12 col-sm-6">
			<h3 class="text-center"><i class="icofont icofont-users"></i> Pedido del cliente</h3>
			<div class="panel-body">
				<div class="panel-group" id="listMesaCliente" role="tablist" aria-multiselectable="true">
					<div class="panel bs-callout bs-callout-jelly panel-sombreado" style="margin-bottom: 10px;">
						<div class="panel-heading " role="button" data-toggle="collapse" data-parent="#accordion" href="#regMesaCliente" aria-expanded="true" aria-controls="regMesaCliente"><h4 class="panel-title"><strong class="mayuscula"><i class="icofont icofont-prescription"></i> Pedido actual</strong> <small>S/. </small><small id="smallPreciototal">0.00</small></h4>
						</div>
						<div id="regMesaCliente" class="panel-collapse collapsed " role="tabpanel" aria-expanded="true" style="height: 0px;">
							<div class="panel-body">
								<!-- <div class="divUnSoloProducto"><div class="col-xs-7"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto" id="">Suspiro a la limeña</h4> </div><div class="col-xs-3"><button class="btn btn-warning btn-outline btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">1</span><button class="btn btn-warning btn-outline btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">6.10</span>S/. <span class="valorTotalProducto">6.10</span></h5></div></div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="botonesGenerales ">
				<button class="btn btn-lg btn-danger btn-outline" id="btnCancelarPedido"><i class="icofont icofont-close-circled"></i> Cancelar pedido</button>
				<button class="btn btn-lg btn-success btn-outline pull-right disabled" id="btnGuardarPedido"><i class="icofont icofont-diskette"></i> Guardar pedido</button>
			</div>
		</div>

		<div class="col-xs-12 col-sm-6">
			<div><h3 class="text-center" style="display: inline-block;"><i class="icofont icofont-food-cart"></i> Productos disponibles</h3> <button class="btn btn-default btn-outline btn-NoLine btn-lg pull-right" id="btnRefreshProducts"><i class="icofont icofont-refresh"></i></button></div>
			<div class="panel-body">
				<div class="panel-group panelProductosColecc" id="accordion" role="tablist" aria-multiselectable="true">
					<?php include 'php/rellenoCategoriasCabeceras.php'; ?>
					<!-- <div class="panel bs-callout bs-callout-primary panel-sombreado" style="margin-bottom: 10px;">
						<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#RegTodosPlatosEntradas" aria-expanded="false" aria-controls="RegTodosPlatosEntradas"><h4 class="panel-title"><strong class="mayuscula"><i class="icofont icofont-chicken-fry"></i> Entradas</strong></h4>
						</div>
						<div id="RegTodosPlatosEntradas" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEntrada" id="1">Causa rellena</h4> <span class="stockPlato">(6)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">7.90</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEntrada" id="2">Leche de tigre</h4> <span class="stockPlato">(16)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">5.60</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEntrada" id="3">Papa a la huancaína</h4> <span class="stockPlato">(13)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">6.40</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEntrada" id="4">Papa rellena</h4> <span class="stockPlato">(21)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">6.90</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
							</div>
						</div>
					</div>
					<div class="panel bs-callout bs-callout-success panel-sombreado" style="margin-bottom: 10px;">
						<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#RegTodosPlatosEspeciales" aria-expanded="false" aria-controls="RegTodosPlatosEspeciales"><h4 class="panel-title"><strong class="mayuscula"><i class="icofont icofont-chicken"></i> Platos especiales</strong></h4>
						</div>
						<div id="RegTodosPlatosEspeciales" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEspecial" id="5">Ají de gallina</h4> <span class="stockPlato">(6)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">15.60</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEspecial" id="6">Anticuchos</h4> <span class="stockPlato">(16)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">16.50</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEspecial" id="7">Arroz chaufa</h4> <span class="stockPlato">(13)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">17.50</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEspecial" id="8">Ceviche de pescado</h4> <span class="stockPlato">(21)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">16.90</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEspecial" id="9">Cuy asado</h4> <span class="stockPlato">(16)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">20.50</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdEspecial" id="10">Lomo saltado</h4> <span class="stockPlato">(9)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">18.70</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
							
							</div>
						</div>
					</div>
					<div class="panel bs-callout bs-callout-warning panel-sombreado" style="margin-bottom: 10px;">
						<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#RegTodosBebidas" aria-expanded="false" aria-controls="RegTodosBebidas"><h4 class="panel-title"><strong class="mayuscula"><i class="icofont icofont-beer"></i> Bebidas</strong></h4>
						</div>
						<div id="RegTodosBebidas" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdBebida" id="11">Cerveza Cuzqueña 620ml</h4> <span class="stockPlato">(6)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">10.00</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdBebida" id="12">Cerveza Pilsen 650ml</h4> <span class="stockPlato">(16)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">9.50</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdBebida" id="13">Gaseosa Coca Cola 500ml</h4> <span class="stockPlato">(13)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">4.00</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdBebida" id="14">Gaseosa Inka Kola 500ml</h4> <span class="stockPlato">(21)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">4.50</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdBebida" id="15">Jarra de chica morada 1L</h4> <span class="stockPlato">(16)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">8.00</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdBebida" id="16">Jarra de chica morada 500ml</h4> <span class="stockPlato">(9)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">4.50</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
							
							</div>
						</div>
					</div>
					<div class="panel bs-callout bs-callout-info panel-sombreado" style="margin-bottom: 10px;">
						<div class="panel-heading collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#RegTodosPostres" aria-expanded="false" aria-controls="RegTodosPostres"><h4 class="panel-title"><strong class="mayuscula"><i class="icofont icofont-cup-cake"></i> Postres</strong></h4>
						</div>
						<div id="RegTodosPostres" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdPostre" id="17">Suspiro a la limeña</h4> <span class="stockPlato">(6)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">10.00</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
								<div class="divUnSoloProducto"><div class="col-xs-7"><h4 class="h4NombreProducto divProdPostre" id="18">Mazamorra de calabaza</h4> <span class="stockPlato">(16)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">10.00</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
							</div>
						</div>
					</div> -->
				</div>
			</div>		

		</div>
	</div>
	<hr>
		<p>Version: 1.0 Compilado: 2017.09.21. Desarrollado por: <a href="https://www.facebook.com/capvalen">Carlos Pariona Valencia</a>. Empresa: <a href="https://www.facebook.com/infocat.soluciones/"> Infocat Soluciones SAC</a></p>


</div>


<!-- Modal para indicar que se guardó con éxito -->
<div class="modal fade modal-pedidoGuardado" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-primary">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Datos guardados</h4>
		</div>
		<div class="modal-body">
			<strong><i class="icofont icofont-social-smugmug"></i> Enhorabuena,</strong> sus datos fueron guardados correctamente.
		</div>
		<div class="modal-footer"> 
		<button class="btn btn-primary btn-outline" data-dismiss="modal" ><i class="icofont icofont-check"></i> Ok, aceptar</button>
		</div>
	</div>
	</div>
</div>

<!-- Modal para decir que hubo un error  -->
<div class="modal fade modal-fueraStock" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-danger">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Productos fuera de stock</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
			<p>Éstos productos están fuera de stock:. <span id="spanOutStock"></span></p>
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-warning-alt"></i> Ok</button>
		</div>
	</div>
	</div>
</div>
</div>

	
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script src="js/inicializacion.js?version=1.1"></script>
<script src="js/toastr.js"></script>
<script>
$(document).ready(function () {
	datosUsuario();
});
$.ajax({url:'php/retornarMesaEstado.php', type: 'POST'}).done(function (resp) {// console.log(resp)
	$.each(JSON.parse(resp), function (i, dato) {
		//$('#divMesas #'+dato.idMesa).addClass(dato.estadoMesa);
		if(dato.estadoMesa=='mesaOcupado'){
				$(`#${dato.idMesa}`).removeClass('mesaLibre').removeClass('btn-morado').addClass(`${dato.estadoMesa}`).addClass('btn-rojoFresa');
			}else{
				$(`#${dato.idMesa}`).removeClass('mesaOcupado').removeClass('btn-rojoFresa').addClass(`${dato.estadoMesa}`).addClass('btn-morado');
			}
	})
});
	$('#regMesaCliente').collapse();
	$('.btnMesa').click(function () {
		var idMesa=$(this).attr('id');
		$('#spanNumMesa').text(idMesa);
		$('#btnCancelarPedido').html('<i class="icofont icofont-close-circled"></i> Cancelar pedido');
		listarProductos();

		$('#smallPreciototal').text('0.00')
		$('#regMesaCliente .panel-body').children().remove();
		$('#regMesaCliente .panel-body').append(`<p id="noProducto">Aún no hay productos en cola</p>`);
		$('#divMesas').addClass('sr-only');
		$('#divPedido').removeClass('sr-only');
		$('#btnGuardarPedido').addClass('disabled');
		$('.panelProductosColecc .panel-heading').addClass('collapsed').attr('aria-expanded', 'false');
		$('.panelProductosColecc .panel-collapse').removeClass('in').attr('aria-expanded', 'false');
		if($('#'+idMesa).hasClass('mesaOcupado') ){ //console.log('ocupado');
			var sumaTotales=0, cantRes=0;
			$('#regMesaCliente .panel-body').children().remove();
			$.ajax({url:'php/listarPedidoMesaOcupada.php', type: 'POST', data: {mesa: idMesa}}).done(function (resp) {
			//console.log(resp);
			$.each(JSON.parse(resp), function (i, dato) {
				$('#regMesaCliente .panel-body').append(`<div class="row divUnSoloProducto" id="${dato.idProducto}"><div class="col-xs-7"><button class="btn btn-success btn-circle btn-NoLine btn-outline" id="${dato.idProducto}"><i class="icofont icofont-check"></i></button> <h4 class="h4NombreProducto" id="${dato.idProducto}">${dato.prodDescripcion}</h4> </div><div class="col-xs-3"> <span class="cantidadProducto">${dato.pedCantidad}</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button></div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">${dato.prodPrecio}</span>S/. <span class="valorTotalProducto">${parseFloat(dato.subTotal).toFixed(2)}</span></h5></div></div>`);
				cantRes=parseInt($(`.${dato.tpNombreWeb}`).find('.platoResValor').text())+1;
				$(`.${dato.tpNombreWeb}`).find('.platoResValor').text(cantRes);

				sumaTotales+=parseFloat(dato.subTotal);
				$('#idTotalSpan').text(parseFloat(sumaTotales).toFixed(2));
			});
			});
		}
	});
	function listarProductos() {
		$('.panelProductosColecc .panel-body').children().remove();
		$.ajax({url:'php/listarProductos.php', type:'POST'}).done(function (resp) {
			$.each(JSON.parse(resp), function (i, dato) {
				$(`#${dato.tpNombreWeb} .panel-body`).append(`
						<div class="row divUnSoloProductoDisponible"><div class="col-xs-7"><h4 class="h4NombreProducto mayuscula ${dato.tpDivBebidaCocina}" id="${dato.idProducto}">${dato.prodDescripcion}</h4> <span class="stockPlato">(<span class="stockFict">${dato.stockCantidad}</span>)</span></div><div class="col-xs-3"><h5 class="h4precioProducto">S/. <span class="valorProducto">${parseFloat(dato.prodPrecio).toFixed(2)}</span></h5></div><div class="col-xs-2"><button class="btn btn-warning btn-outline btn-block btnAgregarProducto"><i class="icofont icofont-check"></i></button></div></div>
					`);
			});
			//console.log(resp);
		});
	}
	$('#btnCancelarPedido').click(function () {// console.log('cli')
		$('#divPedido').addClass('sr-only');
		$('#divMesas').removeClass('sr-only');
	});
	$('body').on('click', '.h4NombreProducto', function () { $(this).parent().parent().find('.btnAgregarProducto').click(); });
	$('body').on('click', '.h4precioProducto', function () { $(this).parent().parent().find('.btnAgregarProducto').click(); });
	$('body').on('click', '.btnAgregarProducto',function () {		
		var contenedor=$(this).parent().parent();
		var elementoProducto='';
		$('#btnGuardarPedido').removeClass('disabled');
		if($(`#regMesaCliente #${contenedor.find('.h4NombreProducto').attr('id')}`).length >0){//console.log('existe productos');
			$(`#regMesaCliente #${contenedor.find('.h4NombreProducto').attr('id')}`).find('.btnSumarProducto').click();
			var cant=$(`#regMesaCliente #${contenedor.find('.h4NombreProducto').attr('id')}`).find('.cantidadProducto').text();

			toastr.options={'positionClass': "toast-bottom-left"}
			toastr.info('LLevas: '+cant+' ' +contenedor.find('.h4NombreProducto').text());
		}else{
			if(contenedor.find('.stockFict').text()!=="0"){
				$('#noProducto').remove();
				if(contenedor.find('.h4NombreProducto').hasClass('divProdBebida')){elementoProducto='divProdBebida'}else{elementoProducto='divCocina'}
				$('#regMesaCliente .panel-body').append(`<div class="row divUnSoloProducto"  id="${contenedor.find('.h4NombreProducto').attr('id')}"><div class="col-xs-7"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverProducto"><i class="icofont icofont-close"></i></button> <h4 class="h4NombreProducto ${elementoProducto} mayuscula" >${contenedor.find('.h4NombreProducto').text()}</h4> </div><div class="col-xs-3"><button class="btn btn-warning btn-circle btn-NoLine btnRestarProducto"><i class="icofont icofont-minus-circle"></i></button> <span class="cantidadProducto">1</span> <button class="btn btn-warning btn-circle btn-NoLine btnSumarProducto"><i class="icofont icofont-plus-circle"></i></button> <span class="cantAnteriorProd"></span> </div><div class="col-xs-2"><h5 class="h4precioProducto"><span class="valorUndProducto sr-only">${contenedor.find('.valorProducto').text()}</span>S/. <span class="valorTotalProducto">${contenedor.find('.valorProducto').text()}</span></h5></div></div>`);
				var precio=parseFloat($('#smallPreciototal').text())+parseFloat(contenedor.find('.valorProducto').text());
				$('#smallPreciototal').text(parseFloat(precio).toFixed(2));

				toastr.options={'positionClass': "toast-bottom-left"}
				toastr.success('Nuevo: 1 ' +contenedor.find('.h4NombreProducto').text());
				//console.log($('#smallPreciototal').text())
			}else{
				toastr.options={'positionClass': "toast-bottom-left"}
				toastr.error('Agotado: '+contenedor.find('.h4NombreProducto').text() );
			}
		}
		
	});
	$('body').on('click','.btnRemoverProducto',function () {
		var contenedor=$(this).parent().parent();
		var precio=parseFloat($('#smallPreciototal').text())-parseFloat(contenedor.find('.valorTotalProducto').text());
		$('#smallPreciototal').text(parseFloat(precio).toFixed(2));
		$(this).parent().parent().remove();
		if( $('#regMesaCliente .divUnSoloProducto').length==0 ){ $('#regMesaCliente .panel-body').append(`<p id="noProducto">No hay productos en cola</p>`);
			$('#btnGuardarPedido').addClass('disabled');}
	});
	$('body').on('click', '.btnSumarProducto', function () {
		var contenedorSuma=$(this).parent().parent();
		if(contenedorSuma.hasClass('guardado')){
			contenedorSuma.find('.cantAnteriorProd').text(contenedorSuma.find('.cantidadProducto').text());
			contenedorSuma.removeClass('guardado').addClass('actualizar');
		}
		
		var cantidadAdd=parseFloat(contenedorSuma.find('.cantidadProducto').text())+1;
		var precioAdd=parseFloat(contenedorSuma.find('.valorUndProducto').text());
		var totalAdd=parseFloat(precioAdd*cantidadAdd).toFixed(2);
		var idProd=contenedorSuma.attr('id');
		var maximoStock=parseInt($('.divUnSoloProductoDisponible').find(`#${idProd}`).next().find('.stockFict').text());
		//console.log(idProd)
		//console.log('max stock: '+ $('.divUnSoloProductoDisponible').find(`#${idProd}`).next().find('.stockFict').text());
		if(parseInt(contenedorSuma.find('.cantidadProducto').text())<maximoStock){
			contenedorSuma.find('.cantidadProducto').text(cantidadAdd);
			contenedorSuma.find('.valorTotalProducto').text(totalAdd);
			var sumaPedido=0;
			$.each($('.valorTotalProducto'), function (i, dato) {
				sumaPedido+=parseFloat($(dato).text());
				$('#smallPreciototal').text(sumaPedido.toFixed(2));	
			});
		}
		
	});
	$('body').on('click', '.btnRestarProducto', function () {
		var contenedorResta=$(this).parent().parent();
		var cantidadAdd=parseFloat(contenedorResta.find('.cantidadProducto').text())-1;
		if(cantidadAdd>=1){
			var precioLess=parseFloat(contenedorResta.find('.valorUndProducto').text());
			var totalAdd=parseFloat(precioLess*cantidadAdd).toFixed(2);
			contenedorResta.find('.cantidadProducto').text(cantidadAdd);
			contenedorResta.find('.valorTotalProducto').text(totalAdd);
			var restaPedido=0;
			$.each($('.valorTotalProducto'), function (i, dato) {
				restaPedido+=parseFloat($(dato).text());
				$('#smallPreciototal').text(restaPedido.toFixed(2));
			});
		}
	});
	$('#btnGuardarPedido').click(function () { moment.locale('es');
		var prodFueraStock=''; var iteraciones=0;
		var cantDivsPedidosNuevos=$('#regMesaCliente .divUnSoloProducto').length;
		var cantDivPedidosGuardados=$('#regMesaCliente .guardado').length;
		var cantDivPedidosActualizados=$('#regMesaCliente .actualizar').length;
		console.log('total '+cantDivsPedidosNuevos)
		console.log('guardados '+cantDivPedidosGuardados)
		console.log('actualizado '+cantDivPedidosActualizados)
		//var datosPedido=[];
		if(!$('#btnGuardarPedido').hasClass('disabled')){
			$('#btnGuardarPedido').addClass('disabled');
			$.ajax({url:'php/insertarPedidoCabecera.php', type:'POST', data:{mesa: $('#spanNumMesa').text(), idUser: $.JsonUsuario.idUsuario}}).done(function (resp) {
				//console.log(resp)
			if(parseInt(resp)>0){
				$('#spanIdPedidoAct').text(resp);
				$('#btnCancelarPedido').html('<i class="icofont icofont-check"></i> Salir');$('#btnGuardarPedido').removeClass('disabled');
				var textoProductosBar=''; var textoProductosCocina=''; var cantPedido='', prodRowNombre='';

				if( $('#regMesaCliente .divUnSoloProducto').length>0 ){
					var contenedoresProdPorGuardar=$('#regMesaCliente .divUnSoloProducto');

					$.each(contenedoresProdPorGuardar, function (i, dato) {// console.log(!$(dato).hasClass('actualizar') ); console.log(!$(dato).hasClass('guardado'))
						$('#spanOutStock').children().remove();
						if(!$(dato).hasClass('actualizar') && !$(dato).hasClass('guardado')  ){
							idProducto=$(dato).attr('id');
							cantPedido=$(dato).find('.cantidadProducto').text();
							precPro=$(dato).find('.valorUndProducto').text();
							prodRowNombre=$(dato).find('.h4NombreProducto').text();
							
							//datosPedido.push({idProd: idProducto,cantidad: cantPedido, producto: prodRowNombre} );
							$.ajax({url:'php/insertarPedidoDetalle.php', type: 'POST', data:{idProd: idProducto, precio:precPro ,cantidad: cantPedido, producto: prodRowNombre, idPedido: resp }}).done(function (resp) {
								console.log(resp);
								$.each(JSON.parse(resp), function (ii, dato2) {
									if(dato2.respuesta=='Y'){
										$(`#regMesaCliente #${dato2.idProducto}`).addClass('guardado').find('.btnRemoverProducto').html('<i class="icofont icofont-check"></i>').removeClass('btn-danger').addClass('btn-success').removeClass('btnRemoverProducto');
										$(`#regMesaCliente #${dato2.idProducto}`).find('.btnRestarProducto').remove();
										if($(dato).find('.h4NombreProducto').hasClass('divProdBebida')){
											textoProductosBar+=' '+$(dato).find('.cantidadProducto').text()+'   '+$(dato).find('.h4NombreProducto').text()+'\n';
										}else{
											textoProductosCocina+=' '+$(dato).find('.cantidadProducto').text()+'   '+$(dato).find('.h4NombreProducto').text()+'\n';
										}
										if(cantDivsPedidosNuevos-cantDivPedidosGuardados-cantDivPedidosActualizados-1==iteraciones){console.log(textoProductosBar)}else{iteraciones++;}
									}else{
										$('#spanOutStock').append('<p> <strong> '+dato2.stockActual+'</strong> de '+$(`#regMesaCliente #${dato2.idProducto}`).find('.h4NombreProducto').text()+'</p>');
										$('.modal-fueraStock').modal('show');
									}
								});
								listarProductos();
							});
					} // Fin de IF no guardado, No actualizado osea pedido nuevo

					}).promise().done(function (resp) { //Promise sólo corre cuando acaba el each
						
						//console.log(prodFueraStock)
						
						// if(textoProductosBar.length>0){console.log('A Bar:\n'+textoProductosBar)
						// 	$.ajax({url:'printTicketBar.php', type:'POST', data: {hora:moment().format('DD [de] MMMM [de] YYYY h:mm a'),numMesa:$('#spanNumMesa').text(), texto:textoProductosBar}}).done(function (resp) {
						// 	console.log(resp)
						// 	});
						// }
						// if(textoProductosCocina.length>0){console.log('A cocina:\n'+textoProductosCocina)
						// 	$.ajax({url:'printTicketCocina.php', type:'POST', data: {hora:moment().format('DD [de] MMMM [de] YYYY h:mm a'),numMesa:$('#spanNumMesa').text(), texto:textoProductosCocina}}).done(function (resp) {
						// 	console.log(resp)
						// 	});
						// }
						
						// $('.modal-pedidoGuardado').modal('show');
						// $('#divPedido').addClass('sr-only');
						// $('#divMesas').removeClass('sr-only');
					});
				}
			}
			}); // fin de ajax insertarPedidoCabecera
		
	} //fin de if de hasclass disabled
		
	});
$('#btnRefreshProducts').click(function () {
	listarProductos();
});
$('#btnCerrarSesion').click(function () { console.log('ho')
	window.location.href ='php/desconectar.php';
});
</script>
	
	
</body>
</html>