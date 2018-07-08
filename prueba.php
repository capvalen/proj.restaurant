
<?php 
session_start();
require 'php/licence.php';
 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	if ($_SESSION['licencia']=='Ok'){ ?>
		<!-- Contenido para licenciar -->
		<div class="row container-fluid">
				 	<h2 class="purple-text text-lighten-1" style=" display: inline-block;"><i class="icofont icofont-lens"></i> Cobro en caja - Casa de Barro <small class="deep-purple-text text-darken-4"><i class="icofont icofont-cube"></i> Libre</small> <small class="red-text text-darken-2"><i class="icofont icofont-cube"></i> Ocupado</small></h2> <button class="btn btn-success btn-lg btn-outline pull-right" id="btnObtenerEstadoMesas"><i class="icofont icofont-spoon-and-fork"></i> Actualizar mesas</button> <button class="btn btn-success btn-lg btn-outline pull-right hidden" id="btnRegresarAMesas"><i class="icofont icofont-spoon-and-fork"></i> Regresar a mesas</button>
				 	<button class="btn btn-warning btn-lg btn-outline pull-right" id="btnVerTickets" style="margin-right: 10px"><i class="icofont icofont-ui-copy"></i> Ver últimos tickets</button>
				 </div>
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

		<div class="row DetalleMesa hidden">
			<div class="col-xs-12 col-sm-9">
				
				<div class="row obsMesa">
					<div class="col-xs-6"><label for="">Observaciones para Cocina:</label>
					<p class="mayuscula" id="pDetCocina"></p></div>
					<div class="col-xs-6"><label for="">Observaciones para Bar:</label>
					<p class="mayuscula" id="pDetBar"></p></div>
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
			<div class="col-xs-12 col-sm-3">
				<h3 class="text-center">Mesa: <span id="idMesaSpan"></span></h3> <span class="hidden" id="idPedidoMesa"></span>
				<p><strong>N° Items por categoría:</strong></p>
				<div class="clContenedorCateg">
						<?php include 'php/listarCategoriasGrupal.php'; ?>
					</div>
				<h3 class="text-center">Total S/. <span id="idTotalSpan">0.00</span></h3>
					
				<button class="btn btn-primary btn-lg btn-outline btn-block hidden"><i class="icofont icofont-users"></i> Asignar cliente</button>
				<button class="btn btn-morado btn-lg btn-outline btn-block" id="btnImprCta"><i class="icofont icofont-print"></i> Imprimir cuenta</button>
				<button class="btn btn-success btn-lg btn-outline btn-block" id="btnCobrarCliente"><i class="icofont icofont-money-bag"></i> Cobrar</button>
				<button class="btn btn-warning btn-lg btn-outline btn-block" id="btnCajaAgregarProducto"><i class="icofont icofont-bbq"></i> Agregar producto</button>
				<button class="btn btn-danger btn-lg btn-outline btn-block" id="btnCancelarPedido"><i class="icofont icofont-close-circled"></i> Cancelar pedido</button>
				<button class="btn btn-primary btn-lg btn-outline btn-block" id="btnMoverPedido"><i class="icofont icofont-paper"></i> Mover mesa</button>
			</div>
		</div>
	<?php 
	}else{ include 'php/licenciaDemo.php'; } ?>
</body>
</html> 