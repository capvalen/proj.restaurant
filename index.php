<?php
session_start();
if (isset($_SESSION['usuario'])){
	header("Location:principal.php");
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
	<link href="css/animate.css" rel="stylesheet">
	<title>Bienvenido: Infocat Snack</title>
	<link rel="shortcut icon" href="images/peto.png" />
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


</head>

<body >
<style type="text/css">
	body{background: linear-gradient(90deg, #100b19 10%, #291c40 90%);}
	.container{ margin-top:80px; padding:0 50px}
	.wello{padding:40px 50px; border-radius: 6px;}
	.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
  -webkit-user-select: none;   /* Chrome/Safari/Opera */
  -khtml-user-select: none;    /* Konqueror */
  -moz-user-select: none;      /* Firefox */
  -ms-user-select: none;       /* Internet Explorer/Edge */
  user-select: none;           /* Non-prefixed version, currently
                                  not supported by any browser */
}
</style>
<div class="container noselect">
	<div class="row">
		<div class="col-md-12">
			<div class="wello login-box" style="color:#493267" >
				<h2 class="text-center" style="font-family: 'Pacifico', cursive;">Info-Cat</h2>
				<legend  style="color:#493267"><small style=" font-size: 80%;">Sistema para Casa de Barro</small></legend>
				
			<div class="form-group">
				<label for="username"><i class="icofont icofont-user"></i> Usuario</label>
				<input class="form-control" value='' id="txtUser_grifo" placeholder="Ingrese su nombre de usuario" type="text"  />
			</div>
			<div class="form-group">
				<label for="password"><i class="icofont icofont-key"></i> Contraseña</label>
				<input class="form-control" id="txtPassw" value='' placeholder="Contraseña" type="password" />
			</div>
			
			<div class="form-group text-center">
				<button class="btn btn-danger btn-outline" id="btnCancelar"><i class="icofont icofont-logout"></i> Cancelar</button>
				<button class="btn btn-morado btn-outline" id="btnAcceder"><div class="fa-spin sr-only"><i class="icofont icofont-spinner"></i> </div><i class="icofont icofont-key"></i> Iniciar</button>
			</div>
			<div class="form-group text-center text-danger hidden" id="divError">Error en alguno de los datos, complételos todos cuidadosamente.</div>
			
			<div class="pull-right" ><small><?php include 'php/version.php' ?> | <?php echo date("Y"); ?> <a href="https://info-cat.com">®  Info-cat</a></small></div>
			</div>
		</div>
	</div>
</div>
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
			$('.wello').addClass('animated bounceIn');
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