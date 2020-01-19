<?php
session_start();
if (@!$_SESSION['Atiende']){//sino existe enviar a index
	header("Location:index.php");
}else{
	if($_SESSION['Power']==3){header("Location:pedidos.php");}
}
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Caja - Infocat Snack</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/snack.css?version=1.0.4">
	<link rel="stylesheet" href="css/estilosElementosv2.css?version=1.0.8">
	<link rel="stylesheet" href="css/icofont.css">
</head>
<body>
	
	<div class="container divPrincipal" >
		<div class="text-center" > <button style="margin-top: 20px; margin-left: 10px;" class="btn btn-default btn-outline pull-left"><i class="icofont icofont-database"></i> Cuadrar caja</button><h1 style="color: #442e9e; display: inline-block;"><i class="icofont icofont-fast-food"></i> Caja - Casa de Barro</h1> <button style="margin-top: 20px; margin-right: 10px;" class="btn btn-success btn-outline pull-right" id="btnCerrarSesion"><i class="icofont icofont-external-link"></i> Cerrar sesión</button></div>
		<div class="row divMesas hidden">
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
				<button class="btn btn-primary btn-lg btn-outline btn-block"><i class="icofont icofont-close-circled"></i> Cuadrar caja</button>
			</div>
		</div>
	</div>

<!-- Modal para agregar producto extra a caja -->
<div class="modal fade modal-agregarProducto" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog " role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ingresar un producto extra</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">Búsqueda del producto</label>
				<input type="text" class="form-control mayuscula" id="txtBuscarProductoExtra" >
			</div>
			<div class="" id="divCajaProductosExtrResultado" style="padding-top: 15px;">
				
			</div>
		
			</div>			
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cerrar</button>
		</div>
	</div>
	</div>
</div>

<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script>
$('#btnCajaAgregarProducto').click(function () {
	$('.modal-agregarProducto').modal('show');
});

$('#txtBuscarProductoExtra').keypress(function (e) {
	if (e.keyCode == 13)
	{
		$('#divCajaProductosExtrResultado').children().remove();
		$.ajax({url: 'php/buscarProductoPorNombre.php', type: 'POST', data:{texto:$('#txtBuscarProductoExtra').val()}}).done(function (resp) { console.log(resp)
			$.each(JSON.parse(resp), function (i, elem) {
				$('#divCajaProductosExtrResultado').append(`<div class="row"><div class="col-xs-6">${i+1}. ${elem.prodDescripcion} <span class="">(${elem.stockCantidad})</span></div>
					<div class="col-xs-2">S/. ${parseFloat(elem.prodPrecio).toFixed(2)}</div> <div class="col-xs-1"><button class="btn btn-morado btn-outline">+</button></div></div>`);
			})
		});
	} 
});
$('#btnCerrarSesion').click(function () { console.log('ho')
	window.location.href ='php/desconectar.php';
});
</script>
</body>
</html>