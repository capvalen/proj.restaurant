<?php
session_start();
if (isset($_SESSION['idUsuario'])){
	if($_SESSION['Power']==3){header("Location:pedidos.php");}
	if($_SESSION['Power']==2){header("Location:caja.php");}
	if($_SESSION['Power']==1){header("Location:principal.php");}
}
?>

<!DOCTYPE html>
<html lang="es">
<head >
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/icofont.css"> <!--Iconos en: https://design.google.com/icons/-->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/inicio.css?version=1.0" rel="stylesheet">
	<!-- <link href="css/animate.css" rel="stylesheet"> -->
	<title>Bienvenido: Infocat Snack</title>
	<link rel="shortcut icon" href="images/peto.png" />
	<!-- <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> -->


</head>

<body >
<style type="text/css">
.form-control:focus{    border-color: #FFEB3B;box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 6px rgba(255, 193, 7, 0.55);}
body{background: linear-gradient(90deg, #100b19 10%, #291c40 90%);}
.noselect{ margin-top:80px;}
.wello{padding:40px 50px; border-radius: 6px;}
.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
  -webkit-user-select: none;   /* Chrome/Safari/Opera */
  -khtml-user-select: none;    /* Konqueror */
  -moz-user-select: none;      /* Firefox */
  -ms-user-select: none;       /* Internet Explorer/Edge */
  user-select: none;           /* Non-prefixed version, currently not supported by any browser */
}
a{    color: #947cc1;
    font-weight: 700;}
a:hover{color:#694D9F;}
input{height: 45px!important;
display: inline-block!important;
    /* width: 95%!important; */}
.icoTransparent{display: inline-block; color: #555; font-size: 16px;
margin-left: -25px; opacity: 0.5}
</style>
<main class="noselect">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="wello login-box" style="margin-top:10rem;color:#7956C1" >
				<div class="row">
					<div class="col-xs-12"><img src="images/empresa.png" class="img-responsive" alt=""></div>
					<div class="col-xs-4" style=""><img src="images/VirtualCorto.png" class="img-responsive" alt=""></div>
					<div class="col-xs-8">
						
						<div class="text-center" style="margin:1rem 0;"><span >Desarrollado por: <br/>«Infocat Soluciones»</span></div>
						<legend  style="color:#7956C1"><small style=" font-size: 70%;"></small></legend>
					</div>
				</div>
				
			<div class="form-group">
				<label class="hidden" for="username"><i class="icofont icofont-user"></i> Usuario</label>
				<input class="form-control" value='' id="txtUser_grifo" placeholder="Usuario" type="text"  /><div class="icoTransparent"><i class="icofont icofont-user"></i> </div>
			</div>
			<div class="form-group">
				<label class="hidden" for="password"><i class="icofont icofont-key"></i> Contraseña</label>
				<input class="form-control" id="txtPassw" value='' placeholder="Contraseña" type="password" /><div class="icoTransparent"><i class="icofont icofont-ui-text-loading"></i>
			</div>
			
			<div class="form-group text-center"><br>
				<button class="btn btn-danger btn-outline hidden" id="btnCancelar"><i class="icofont icofont-logout"></i> Cancelar</button>
				<button class="btn btn-morado btn-outline btn-block btn-lg" id="btnAcceder"><div class="fa-spin sr-only"><i class="icofont icofont-spinner "></i> </div><i class="icofont icofont-key"></i> Iniciar sesión</button>
			</div>
			<div class="form-group text-center text-danger hidden" id="divError">Error en alguno de los datos, complételos todos cuidadosamente.</div>
			
			<div class="pull-right" ><small><?php include 'php/version.php' ?> | <?php echo date("Y"); ?> <a href="https://infocatsoluciones.com/portafolio">®  Infocat Soluciones</a></small></div>
			</div>
		</div>
	</div>
    </div>
</main>
</body>

	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<!-- <script src="./node_modules/socket.io/node_modules/socket.io-client/socket.io.js"></script> 
	<script src="js/socketCliente.js"></script>-->
	<script>
		$(document).ready(function () {
			$('#txtUser_grifo').val('');
			$('#txtPassw').val('');
			$('#txtUser_grifo').focus();
			// $('.wello').addClass('animated bounceIn');
			$('.fa-spin').addClass('sr-only');
			//$('body').css("background-image", "url(images/fondo.jpg)");		
		});
		$('#txtPassw').keypress(function(event){
			if (event.keyCode === 10 || event.keyCode === 13) 
				{event.preventDefault();
				$('#btnAcceder').click();
			 }
		});
		$('#btnAcceder').click(function() {
			$('.fa-spin').removeClass('sr-only');$('.icofont-key').addClass('sr-only');
			$.ajax({
				type:'POST',
				url: 'php/validarSesion.php',
				data: {user: $('#txtUser_grifo').val(), pws: $('#txtPassw').val()},
				success: function(idpoder) {console.log('el id es '+idpoder)
					if (parseInt(idpoder)>0){
						//console.log(idpoder)
						if(idpoder==1){window.location="principal.php";}
						if(idpoder==2){window.location="caja.php";}
						if(idpoder==3){window.location="pedidos.php";}

						
					}
					else {
						$('#divError').removeClass('hidden');
						var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
						$('#btnAcceder').addClass('animated wobble' ).one(animationEnd, function() {
								$(this).removeClass('animated wobble');
						});
						$('#txtUser_grifo').select();
						$('.fa-spin').addClass('sr-only');$('.icofont-key').removeClass('sr-only');
						//console.log(idpoder);
						console.log('error en los datos')}
				}
			});
		});
		
	</script>

</html>