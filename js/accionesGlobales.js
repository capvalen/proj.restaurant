$('#aGastoExtra').click(function () {
	$('.modal-ingresarGastoExtra').modal('show');
});
$('.modal-ingresarGastoExtra').on('shown.bs.modal', function() {
	$('#txtRazonGasto').focus();
});
$('#aIngresoExtra').click(function () {
	$('.modal-ingresarMontoExtra').modal('show');
});
$('.modal-ingresarMontoExtra').on('shown.bs.modal', function() {
	$('#txtRazonIngreso').focus();
});



/************ JS para Modals ***********/

// $('#txtModCreditoCantidad').change(function () { cambioModalCmbPrecio(); });
// $('#txtModCreditoCantidadLitro').change(function () { cambioModalCmbPrecio(); });

$('.modal-ingresarCredito').on('click','.optProducto',function () {
	cambioModalCmbPrecio();
});
function cambioModalCmbPrecio() {
var idProd=$('#divSelectModCreditoProducto').find('.selected a').attr('data-tokens');  //console.log($.JsonListaPreciosActualizada)
var precio, cant;
if(idProd==2){ $('#txtModCreditoCantidadLitro').parent().removeClass('hidden');}
else{$('#txtModCreditoCantidadLitro').parent().addClass('hidden');}

for (var i = 0; i < $.JsonListaPreciosActualizada.length; i++) {
	console.log($.JsonListaPreciosActualizada[i].idcontenedorProductos===idProd); //console.log('id '+);
	if($.JsonListaPreciosActualizada[i].idcontenedorProductos===idProd){// console.log('entro')
		precio=parseFloat($.JsonListaPreciosActualizada[i].contPrecio);
		cant=parseFloat($('#txtModCreditoCantidad').val());
		$('#spanModCreditoPrecioProd').text(parseFloat(precio).toFixed(2));
		$('#spanModCreditoTotal').text(parseFloat(precio*cant).toFixed(2));
		$('#txtModCreditoCantidadSoles').val(parseFloat(precio*cant).toFixed(2));
		//break;
	}
}
}
$('#txtModCreditoDnioRUC').focusout(function () { //console.log('aca')
	if($('#txtModCreditoDnioRUC').val().length==8){
		$('#txtModCreditoDnioRUC').prev().prev().prev().text('D.N.I:');
		$('#lblNombresORazon').text('Nombres y Apellidos:');}
	if($('#txtModCreditoDnioRUC').val().length>8){
		$('#txtModCreditoDnioRUC').prev().prev().prev().text('R.U.C.:');
		$('#lblNombresORazon').text('Razon Social:');}
	$.ajax({url:'php/listarClientePorRUCoDNI.php', type: 'POST', data:{dniRuc: $('#txtModCreditoDnioRUC').val()}}).done(function (resp) {
		elemento=JSON.parse(resp);
		//console.log(elemento.length)
		if(elemento.length>0){
			$.each(elemento, function (i, dato) {
			$('#spanIdCredClienteExiste').text(dato.idCliente);
			$('#txtModCreditoRazonSocial').val(dato.cliRazonSocial).prop('disabled', true);
			$('#txtModCreditoCelular').val(dato.cliTelefono).prop('disabled', true);
			$('#txtModCreditoDireccion').val(dato.cliDireccion).prop('disabled', true);
			});
		}else{
			$('#spanIdCredClienteExiste').text('');
			$('#txtModCreditoRazonSocial').val('').prop('disabled', false);
			$('#txtModCreditoCelular').val('').prop('disabled', false);
			$('#txtModCreditoDireccion').val('').prop('disabled', false);
		}
	});
});
$('#txtModCreditoCantidad').keyup(function (e) {
	var cantGalones;
	if( $('#txtModCreditoCantidad').val()==''){cantGalones=0;}
	else{cantGalones=parseFloat($(this).val());}
	//transoformar a litros
	var cantLitros=cantGalones*3.785;
	$('#txtModCreditoCantidadLitro').val( cantLitros.toFixed(2));
	cambioModalCmbPrecio();
});
$('#txtModCreditoCantidadLitro').keyup(function (e) {
	var cantLitros;
	if( $('#txtModCreditoCantidadLitro').val()==''){cantLitros=0;}
	else{cantLitros=parseFloat($(this).val());}
	//transoformar a litros
	var cantGalones=cantLitros/3.785;
	$('#txtModCreditoCantidad').val( cantGalones.toFixed(2));
	cambioModalCmbPrecio();
});
$('#txtModCreditoCantidadSoles').keyup(function (e) {
	if( $('#txtModCreditoCantidadSoles').val()==''){cantSoles=0;}
	else{cantSoles=parseFloat($(this).val());}
	var idProd=$('#divSelectModCreditoProducto').find('.selected a').attr('data-tokens');// console.log(idProd)
	for (var i = 0; i < $.JsonListaPreciosActualizada.length; i++) {
		//console.log($.JsonListaPreciosActualizada[i])
		if($.JsonListaPreciosActualizada[i].idcontenedorProductos==idProd){
			var precio=parseFloat($.JsonListaPreciosActualizada[i].contPrecio);
			var cantGalones=cantSoles/precio;
			var cantLitros=cantGalones*3.785;
			$('#txtModCreditoCantidadLitro').val( cantLitros.toFixed(2));
			$('#txtModCreditoCantidad').val( cantGalones.toFixed(2));
			$('#spanModCreditoTotal').text(parseFloat(precio*cantGalones).toFixed(2));
			break;
		}
	}
});
$('.modal-ingresarCredito').on('shown.bs.modal', function() {
	$('#divSelectModCreditoProducto .selectpicker').selectpicker('val',''); //Para borrar el select
	$('#txtModCreditoDnioRUC').val('').focus();
	$('#spanIdCredClienteExiste').text('');
	$('#txtModCreditoRazonSocial').val('').prop('disabled', false);
	$('#txtModCreditoCelular').val('').prop('disabled', false);
	$('#txtModCreditoDireccion').val('').prop('disabled', false);
	$('#txtModCreditoComprobante').val('');
	$('#txtModCreditoCantidad').val(0);
	$('#txtModCreditoCantidadLitro').val(0);
	$('#spanModCreditoPrecioProd').text('0.00');
	$('#spanModCreditoTotal').text('0.00');
});
$('#btnIngresarCreditoModal').click(function () {
	//, txtModCreditoRazonSocial, txtModCreditoComprobante, txtModCreditoCantidad
	if(! $('#btnIngresarCreditoModal').hasClass('disabled')){
		var spanError=$('.modal-ingresarCredito .spanError');
		var idContenedor=$('#divSelectModCreditoProducto').find('li.selected a').attr('data-tokens');

		if($('#txtModCreditoDnioRUC').val()==''){spanError.text('No puedes dejar el campo de DNI o RUC en blanco.'); spanError.parent().removeClass('sr-only');}
		else if($('#txtModCreditoDnioRUC').val().length<8){spanError.text('Es un DNI inválido, revísalo por favor.'); spanError.parent().removeClass('sr-only');}
		else if($('#txtModCreditoRazonSocial').val()==''){spanError.text('No puedes dejar el campo de Razón social o Apellidos en blanco.'); spanError.parent().removeClass('sr-only');}
		else if($('#txtModCreditoCantidad').val()<=0){spanError.text('No puedes guardar cantidades en cero o menores'); spanError.parent().removeClass('sr-only');}
		else if( isNaN(idContenedor) || idContenedor==null ){ spanError.text('Falta seleccionar un producto para el crédito'); spanError.parent().removeClass('sr-only'); }
		else{
			$('#btnIngresarCreditoModal').addClass('disabled');
			spanError.parent().addClass('sr-only');
			var idClie=0;
			if($('#spanIdCredClienteExiste').text()!=''){idClie=$('#spanIdCredClienteExiste').text()}


			$.ajax({url: 'php/insertarCreditoNuevo.php', type: 'POST', data: {idCli: idClie, dni:$('#txtModCreditoDnioRUC').val() , social: $('#txtModCreditoRazonSocial').val() ,
				direccion: $('#txtModCreditoDireccion').val() , celular: $('#txtModCreditoCelular').val(),
				idProductoCont: idContenedor , cantidad: $('#txtModCreditoCantidad').val() , comprobante: $('#txtModCreditoComprobante').val(), idUser: $.JsonUsuario.idUsuario,
				cantLitr: $('#txtModCreditoCantidadLitro').val(), prodNom: $('#divSelectModCreditoProducto').find('.filter-option').text()
			 } }).done(function (resp) {
				console.log(resp)
				$('.modal-ingresarCredito').modal('hide');
				if(parseInt(resp)>0){
					$('.modal-GuardadoExito').modal('show');
				}else{
					$('.modal-GuardadoError').modal('show');
				}
				$('#btnIngresarCreditoModal').removeClass('disabled');
			});
		}
	}
});

$('.modal-ingresarTanque').on('shown.bs.modal', function() {
	$('#divSelectModTanqueProducto .selectpicker').selectpicker('val',''); //Para borrar el select
	$('#txtModTanqueCantidad').val(0); });
$('#aIngresoTanque').click(function () {
	$('.modal-ingresarTanque').modal('show');
});

$('#btnIngresarTanqueModal').click(function () { 
	var spanError=$('.modal-ingresarTanque .spanError');
	var valor=$('#divSelectModTanqueProducto').find('li.selected a').attr('data-tokens'); //console.log(valor)
	var cantidad=$('#txtModTanqueCantidad').val();

	if(!$('#btnIngresarTanqueModal').hasClass('disabled')){
		if( isNaN(valor) || valor==null ){ spanError.text('Falta seleccionar un producto'); spanError.parent().removeClass('sr-only'); }
		else if( cantidad<=0 ){ spanError.text('No puede guardar un valor cero o negativo'); spanError.parent().removeClass('sr-only'); }
		else{
			spanError.parent().addClass('sr-only');
			$('#btnIngresarTanqueModal').addClass('disabled'); //desabilitamos el boton
			//guardar
			$.ajax({url:'php/insertarTanqueo.php', type: 'POST', data: {idConten: valor, masStock: cantidad, idUser: $.JsonUsuario.idUsuario }}).done(function (resp) {
				$('.modal-ingresarTanque').modal('hide');
				if(parseInt(resp)>0){
					$('#spanExito').text('Agregado '+cantidad+' galones a: '+$('#divSelectModTanqueProducto button').attr('title'));
					$('.modal-GuardadoExito').modal('show');
				}else{
					$('.modal-GuardadoError').modal('show');
				}
				$('#btnIngresarTanqueModal').removeClass('disabled')
			});
		}
	}//else{console.log('tiene has class')}
});
$('.modal-ingresarGastoExtra').on('shown.bs.modal', function() {$('#txtModalGastoMonto').val('0.00');
	$('#txtRazonGasto').val(''); });
$('#btnIngresarGasto').click(function () {
	if(! $('#btnIngresarGasto').hasClass('disabled') ){
		var spanError=$('.modal-ingresarGastoExtra .spanError');
		if($('#txtRazonGasto').val()==''){spanError.text('Debes ingresar una razón del gasto para registrarlo.'); spanError.parent().removeClass('sr-only'); }
		else if($('#txtModalGastoMonto').val()<=0){spanError.text('No se puede ingresar montos negativos o cero.'); spanError.parent().removeClass('sr-only'); }
		else{
			$('#btnIngresarGasto').addClass('disabled');
			$.ajax({url:'php/insertarGasto.php', type: 'POST', data: {idUser: $.JsonUsuario.idUsuario, monto:$('#txtModalGastoMonto').val(), descripcion:$('#txtRazonGasto').val() }}).done(function (resp) { //console.log(resp)
				if(parseInt(resp)>0 && $.isNumeric(resp)){
					$('#spanExito').text('Gasto de S/. '+$('#txtModalGastoMonto').val()+' por el motivo «'+$('#txtRazonGasto').val()+'»');
					$('.modal-GuardadoExito').modal('show');
				}else{ $('.modal-GuardadoError').modal('show');}
				$('.modal-ingresarGastoExtra').modal('hide');
				$('#btnIngresarGasto').removeClass('disabled');
			});
		}
	}
});

$('.modal-ingresarMontoExtra').on('shown.bs.modal', function() {$('#txtModalIngresoMonto').val('0.00');
	$('#txtRazonIngreso').val(''); });
$('#btnIngresarIngresoExtra').click(function () {
	if(! $('#btnIngresarGasto').hasClass('disabled') ){
		var spanError=$('.modal-ingresarMontoExtra .spanError');
		if($('#txtRazonIngreso').val()==''){spanError.text('Debes ingresar una razón del ingreso para registrarlo.'); spanError.parent().removeClass('sr-only'); }
		else if($('#txtModalIngresoMonto').val()<=0){spanError.text('No se puede ingresar montos negativos o cero.'); spanError.parent().removeClass('sr-only'); }
		else{
			$('#btnIngresarIngresoExtra').addClass('disabled');
			$.ajax({url:'php/insertarIngresoExtra.php', type: 'POST', data: {idUser: $.JsonUsuario.idUsuario, monto:$('#txtModalIngresoMonto').val(), descripcion:$('#txtRazonIngreso').val() }}).done(function (resp) {//console.log(resp)
				if(parseInt(resp)>0 && $.isNumeric(resp)){
					$('#spanExito').text('Gasto de S/. '+$('#txtModalIngresoMonto').val()+' por el motivo «'+$('#txtRazonIngreso').val()+'»');
					$('.modal-GuardadoExito').modal('show');
				}else{ $('.modal-GuardadoError').modal('show');}
				$('.modal-ingresarMontoExtra').modal('hide');
				$('#btnIngresarGasto').removeClass('disabled');
			});
		}
	}
});