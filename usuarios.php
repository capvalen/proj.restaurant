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

		<title>Usuarios: Infocat Snack</title>

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link rel="shortcut icon" href="images/peto.png?version=1.0" />	
		<link href="css/estilosElementosv2.css?version=1.0.8" rel="stylesheet">
		<link href="css/sidebarDeslizable.css?version=1.0.5" rel="stylesheet">
		<link rel="stylesheet" href="css/cssBarraTop.css?version=1.0.5">
		<link rel="stylesheet" href="css/icofont.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/snack.css?version=1.0.4">

		<link href="css/bootstrap-select.min.css" rel="stylesheet"> <!-- extraido de: https://silviomoreto.github.io/bootstrap-select/-->
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
				
				<div class="logoEmpresa ocultar-mostrar-menu">
					<img class="img-responsive" src="images/empresa.png?version=1.0.png" alt="">
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
				<li>
						<a href="caja.php"><i class="icofont icofont-cart-alt"></i> Cobrar</a>
				</li>
				<li>
						<a href="ventas.php"><i class="icofont icofont-calculator-alt-1"></i> Cuadrar caja</a>
				</li>
				<li>
						<a href="#!" id="aCreditoNuevo"><i class="icofont icofont-truck-alt"></i> Crédito nuevo</a>
				</li>
				<li>
						<a href="#!" id="aGastoExtra"><i class="icofont icofont-ui-rate-remove"></i> Gasto extra</a>
				</li>
				<li >
						<a href="#!" id="aIngresoExtra"><i class="icofont icofont-ui-rate-add"></i> Ingreso extra</a>
				</li>
				<li class="active">
						<a href="#"><i class="icofont icofont-users"></i> Usuarios</a>
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
				 <h2 class="purple-text text-lighten-1"><i class="icofont icofont-options"></i> Panel de configuraciones generales</h2>

					<ul class="nav nav-tabs">
					<li class="active"><a href="#tabAgregarLabo" data-toggle="tab">Listado de usuarios</a></li>
					
					</ul>
					
					<div class="tab-content">
					<!--Panel para buscar productos-->
						<!--Clase para las tablas-->
						<div class="tab-pane fade in active container-fluid" id="tabAgregarLabo">
						<!--Inicio de pestaña 01-->
							<div class="row" style="padding-bottom: 15px">
								<div class="col-xs-4">
									<button class="btn btn-success btn-outline btn-lg" id="btnAddNewUser"><i class="icofont icofont-chef"></i> Agregar nuevo usuario</button>
								</div>
								<div class="col-xs-4"></div>
								<div class="col-xs-4"></div>
							</div>
							<div class="row"><strong>
								<div class="col-xs-2">Nivel</div>
								<div class="col-xs-3">Usuario</div>
								<div class="col-xs-2">Nick</div>
								<div class="col-xs-1">@</div></strong>
							</div>
							<div id="divUsuariosListado">
								
							</div>

						<!--Fin de pestaña 01-->
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
<div class="modal fade modal-updUserBD" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Actualizar usuario</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row"> <span class="hidden" id="idUserModf"></span>
				<label for="">Apellidos:</label> <input type="text" class="form-control text-center mayuscula" id="txtModalApellidUserUP">
				<label for="">Nombres:</label>
				<input type="text" class="form-control text-center mayuscula" id="txtModalUpdNombUser">
				<!-- <label for="">D.N.I.:</label>
				<input type="text" class="form-control text-center mayuscula" id="txtModalUpdDniUser"> -->
				<label for="">Nick:</label>
				<input type="text" class="form-control text-center" id="txtModalUpdNickUser">
				<label for="">Contraseña.:</label>
				<input type="text" class="form-control text-center" id="txtModalUpdPassUser">
				<label for="">Nivel:</label>
				<div  id="divSelectNivelListUpdv2">
					<select class="selectpicker mayuscula" title="Nivel de usuario..."  data-width="100%" data-live-search="true"">
						<?php require 'php/listarNivelesOption.php'; ?>
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
			<button class="btn btn-success btn-outline" id="btnGuardarUpdUser"><i class="icofont icofont-save"></i> Actualizar</button>
		</div>
	</div>
	</div>
</div>

<!-- Modal para agregar producto nuevo a la BD -->
<div class="modal fade modal-addUserBD" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Agregar nuevo usuario</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">Apellidos:</label> <input type="text" class="form-control text-center mayuscula" id="txtModalApellidUser">
				<label for="">Nombres:</label>
				<input type="text" class="form-control text-center mayuscula" id="txtModalNombUser">
				<!-- <label for="">D.N.I.:</label>
				<input type="text" class="form-control text-center mayuscula" id="txtModalDniUser"> -->
				<label for="">Nick:</label>
				<input type="text" class="form-control text-center" id="txtModalNickUser">
				<label for="">Contraseña.:</label>
				<input type="text" class="form-control text-center" id="txtModalPassUser">
				<label for="">Nivel:</label>
				<div  id="divSelectNivelListNew">
					<select class="selectpicker mayuscula" title="Nivel de usuario..."  data-width="100%" data-live-search="true"">
						<?php require 'php/listarNivelesOption.php'; ?>
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
			<button class="btn btn-success btn-outline" id="btnGuardarAddUser"><i class="icofont icofont-save"></i> Guardar</button>
		</div>
	</div>
	</div>
</div>

<!-- Modal para indicar que falta completar campos o datos con error -->
	<div class="modal fade modal-borrarUsuario" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header-danger">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Eliminar usuario</h4>
			</div>
			<div class="modal-body">
				<p><span class="hidden" id="spanIdUser"></span>Deseas desactivar a «<span class="mayuscula" id="spanUser"></span>» de la funcion de «<span class="mayuscula" id="spanFuncion"></span>»</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default btn-outline" data-dismiss="modal"><i class="icofont icofont-close"></i> Cerrar</button>
				<button class="btn btn-danger btn-outline" id="btnEliminarUser"><i class="icofont icofont-bin"></i> Sí, eliminar</button>
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
<script src="js/inicializacion.js"></script>
<script src="js/accionesGlobales.js?version=1.1"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-datepicker.es.min.js"></script>
<script src="js/toastr.js"></script>

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


$.ajax({url:'php/listarUsuarios.php', data: 'POST'}).done(function (resp) { console.log(resp)
	var cancelRojo='';
	$.each(JSON.parse(resp), function (i, dato) {

		if(dato.usuActivo==0){cancelRojo='text-danger';}else{cancelRojo='text-primary';}
		$('#divUsuariosListado').append(`<div class="row ${cancelRojo}">
				<div class="col-xs-2 mayuscula"><button class="btn btn-danger btn-circle btn-NoLine btn-outline btnRemoverUsuario" id="${dato.idUsuario}"><i class="icofont icofont-close"></i></button>${i+1}. <span class="userFuncion">${dato.Descripcion}</span></div>
				<div class="col-xs-3"><span class="apellidos mayuscula">${dato.usuApellidos}</span> <span class="nombres mayuscula">${dato.usuNombres}</span></div>
				<div class="col-xs-2 nick">${dato.usuNick}</div>
				<span class="hidden mayuscula nivel">${dato.Descripcion}</span>
				<span class="hidden activo">${dato.usuActivo}</span>
				<span class="hidden usuDni">${dato.usuDni}</span>
				<div class="col-xs-1"><button class="btn btn-success btn-outline btn-NoLine btnConfigUser" id="${dato.idUsuario}"><i class="icofont icofont-options"></i></button></div></div>`);
	});
});
});//Fin de document ready
$('#btnAddNewUser').click(function () {
	$('.modal-addUserBD').modal('show');
});
$('#txtModalNombUser').focusout(function () {
	var nombres=$('#txtModalNombUser').val();
	var apellidos=$('#txtModalApellidUser').val();
	var primEspac=apellidos.indexOf(" "); //console.log(primEspac)
	if(primEspac==-1){primEspac=primEspac.length}
	
	$('#txtModalNickUser').val(nombres.substring(0,1) +apellidos.substring(0,primEspac))
});
$('#btnGuardarAddUser').click(function () {
	var idNivel=$('#divSelectNivelListNew').find('li.selected a').attr('data-tokens');// console.log(idNivel)
	if($('#txtModalApellidUser').val()==''){$('.modal-addUserBD .labelError').removeClass('hidden').find('.mensaje').text('Debe ingresar los apellidos.');}
	else if($('#txtModalNombUser').val()==''){$('.modal-addUserBD .labelError').removeClass('hidden').find('.mensaje').text('Debe ingresar los nombres.');}
	/*else if($('#txtModalDniUser').val()==''){$('.modal-addUserBD .labelError').removeClass('hidden').find('.mensaje').text('Debe ingresar un Dni.');}*/
	else if($('#txtModalNickUser').val()==''){$('.modal-addUserBD .labelError').removeClass('hidden').find('.mensaje').text('Debe ingresar un nick para iniciar sesión.');}
	else if($('#txtModalPassUser').val()==''){$('.modal-addUserBD .labelError').removeClass('hidden').find('.mensaje').text('Debe ingresar una contraseña.');}
	else if(idNivel === null || idNivel === undefined  ){ $('.modal-addUserBD .labelError').removeClass('hidden').find('.mensaje').text('Debe selecionar un nivel.');}
	else{
		$('.modal-addUserBD .labelError').addClass('hidden');
		$.ajax({url:'php/insertarUsuario.php', type:'POST', data:{nombres:$('#txtModalNombUser').val(), apellidos:$('#txtModalApellidUser').val(), nick: $('#txtModalNickUser').val(), pass: $('#txtModalPassUser').val(), poder: idNivel }}).done(function (resp) { console.log(resp)
			if(resp>0){window.location.href = 'usuarios.php';}
		});
	}
});
$('#divUsuariosListado').on('click', '.btnRemoverUsuario', function () {
	var idUser=$(this).attr('id');
	var contenedor=$(this).parent().parent();
	$('#spanIdUser').text(idUser);
	$('#spanUser').text(contenedor.find('.apellidos').text() + ' ' +contenedor.find('.nombres').text() );
	$('#spanFuncion').text(contenedor.find('.userFuncion').text() );
	$('.modal-borrarUsuario').modal('show');
});
$('#btnEliminarUser').click(function () {
	$.ajax({url: 'php/eliminarUsuario.php', type:'POST', data:{idUser:$('#spanIdUser').text()}}).done(function (resp) {
		if(resp>0){window.location.href = 'usuarios.php';}
	});
});
$('body').on('click', '.btnConfigUser',function () {
	var contenedor = $(this).parent().parent();
	console.log(contenedor.find('.activo').text())
	if(contenedor.find('.activo').text()==0){
		$('#divSelectNivelListUpdv2').find('.selectpicker').selectpicker('val','Desabilitado');
	}else{
		$('#divSelectNivelListUpdv2').find('.selectpicker').selectpicker('val',contenedor.find('.nivel').text());
	}
	$('#idUserModf').text(contenedor.find('.btnConfigUser').attr('id'));
	$('#txtModalApellidUserUP').val(contenedor.find('.apellidos').text());
	$('#txtModalUpdNombUser').val(contenedor.find('.nombres').text());
	$('#txtModalUpdDniUser').val(contenedor.find('.usuDni').text());
	$('#txtModalUpdNickUser').val(contenedor.find('.nick').text());
	$('#txtModalUpdPassUser').val('');

	$('.modal-updUserBD').modal('show');
});
$('#btnGuardarUpdUser').click(function () {
	if($('#txtModalUpdPassUser').val()!=''){
		$.ajax({url: 'php/actualizarContrasenaUser.php', type: 'POST', data: {idUser:$('#idUserModf').text(), pass: $('#txtModalUpdPassUser').val()}}).done(function (resp) { console.log(resp)
	});
	}

	var idProcedencia=$('#divSelectNivelListUpdv2').find('li.selected a').attr('data-tokens');
	var activo=0;
	if(idProcedencia==4){activo=0}
	else{activo=1}

	$.ajax({url: 'php/actualizarDatosUser.php', type: 'POST', data: {
		nombres: $('#txtModalUpdNombUser').val(),
		apellidos: $('#txtModalApellidUserUP').val(),
		nick: $('#txtModalUpdNickUser').val(),
		dni: $('#txtModalUpdDniUser').val(),
		poder: idProcedencia,
		activo: activo,
		idUser: $('#idUserModf').text()
	}}).done(function (resp) {
		location.reload();
	});
});
</script>

</body>

</html>
