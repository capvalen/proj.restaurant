$('.elementoMenu').mouseover(function(){$(this).css('font-weight','bolder'); });
$('.elementoMenu').mouseleave(function(){$(this).css('font-weight','normal'); });
$('.txtNumeroDecimal').change(function(){
	$(this).val(parseFloat($(this).val()).toFixed(2));
});
$('#agregarBarra').click(function(){
	//console.log('Se hizo clic en el boton agregar barra');
	if($('#txtBarras').val()!=''){
	$('#listBarras').show('normal');
	$('#listBarras').append('<li class="collection-item">'+$('#txtBarras').val()+'<a href="#!" class="secondary-content"><i class="material-icons red-text">close</i></a></li>')
	$('#txtBarras').val('');}
});
$(document).ready(function(){
	$('#fechaServer').load("php/getFecha.php");
	setInterval(function(){$('#horaServer').load("php/gethora.php");},'60000');
	$('#listBarras').hide();
	
	//$('.side-nav').hide();
	//$('.top-nav').show();
	

});
$.fn.modal.prototype.constructor.Constructor.DEFAULTS.backdrop = 'static'; //Para que no cierre el modal, cuando hacen clic en cualquier parte

function esNumero(cadena) //true para si es número sólo
{
	if (cadena.match(/^[0-9]+$/))
	{
		return true;}
	else
	{
		return false;	}
}

$(".ocultar-mostrar-menu").click(function() {
	ocultar()
});
function ocultar(){//console.log('oc')
	$("#wrapper").toggleClass("toggled");
	//$('.navbar-fixed-top').css('left','0');
	$('.navbar-fixed-top').toggleClass('encoger');
	$('#btnColapsador').addClass('collapsed');
	$('#btnColapsador').attr('aria-expanded','false');
	$('#navbar').removeClass('in');
}
$('.has-clear').mouseenter(function(){$(this).find('input').focus();})

$('.has-clear input[type="text"]').on('input propertychange', function() {
	var $this = $(this);
	var visible = Boolean($this.val());
	$this.siblings('.form-control-clear').toggleClass('hidden', !visible);
}).trigger('propertychange');

$('.form-control-clear').click(function() {
	$(this).siblings('input[type="text"]').val('')
		.trigger('propertychange').focus();
});
/*function returnNumDecimal(numSinFormato){
return parseFloat(numSinFormato).tof()
}*/
$("input").focus(function(){
  this.select();
});

/*Para que la página cargue en el tab que se requiere*/
// Javascript to enable link to tab
	var url = document.location.toString();
	if (url.match('#')) {
	    $('.nav-tabs a[href="#' + url.split('#')[1]).tab('show').click();
	} //add a suffix
	$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
	});
	//Nunito
	//Josefin+Sans
	//Harmattan
	//Quattrocento+Sans
window.addEventListener('load',function(){
	$('.mitooltip').tooltip();
});


function datosUsuario(){
	$.ajax({ url: 'php/datosBasicosUsuario.php', type: 'POST'}).done(function (resp) {
		$.JsonUsuario=JSON.parse(resp)[0]; //contiene los datos principales del usuario
		console.log($.JsonUsuario);
	});
}
$('.esMoneda').focusout(function(){
	var valor= $(this).val();
	$(this).val( parseFloat(valor).toFixed(2));
});