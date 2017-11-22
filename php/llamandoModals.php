
<!-- Modal para ingresar egreso de dinero  -->
<div class="modal fade modal-ingresarGastoExtra" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ingresar gasto inesperado</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">Razón del gasto</label>
				<input type="text" class="form-control mayuscula" id="txtRazonGasto" autocomplete="off" >
			</div>
			<div class="row">
				<label for="">Monto que se gastó (S/.)</label>
				<input type="number" class="form-control txtNumeroDecimal text-center" id="txtModalGastoMonto" step="1" min="0" value="0.00">
				<h4 class="red-text text-darken-2 sr-only"><i class="icofont icofont-animal-cat-alt-4"></i><span class="spanError">Hubo un error interno</span></h4>
			</div>
		
			</div>			
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-warning btn-outline" id="btnIngresarGasto"><i class="icofont icofont-social-meetme"></i> Ingresar gasto</button></div>
	</div>
	</div>
</div>

<!-- Modal para ingresar ingreso de dinero  -->
<div class="modal fade modal-ingresarMontoExtra" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Ingresar un monto extra</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
				<label for="">Razón del monto ingresado</label>
				<input type="text" class="form-control mayuscula" id="txtRazonIngreso" autocomplete="off" >
			</div>
			<div class="row">
				<label for="">Monto que entra a caja (S/.)</label>
				<input type="number" class="form-control txtNumeroDecimal text-center" id="txtModalIngresoMonto" step="1" min="0" value="0.00">
				<h4 class="red-text text-darken-2 sr-only"><i class="icofont icofont-animal-cat-alt-4"></i><span class="spanError">Hubo un error interno</span></h4>
			</div>
		
			</div>			
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-close"></i> Cancelar</button>
			<button class="btn btn-success btn-outline" id="btnIngresarIngresoExtra"><i class="icofont icofont-social-meetme"></i> Ingresar ingreso</button></div>
	</div>
	</div>
</div>




<!-- Modal para decir que todo fue guardado correctamente  -->
<div class="modal fade modal-GuardadoExito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-success">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> Dato guardado con éxito</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
			<p><strong>Guardado!</strong> tu información fue guardada con éxito: <span class="mayuscula" id="spanExito"></span></p>
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-success btn-outline" data-dismiss="modal" ><i class="icofont icofont-social-meetme"></i> Aceptar</button>
		</div>
	</div>
	</div>
</div>
</div>

<!-- Modal para decir que hubo un error  -->
<div class="modal fade modal-GuardadoError" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm" role="document">
	<div class="modal-content">
		<div class="modal-header-danger">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class="icofont icofont-help-robot"></i> No se guardó</h4>
		</div>
		<div class="modal-body">
			<div class="container-fluid">
			<div class="row">
			<p><strong>Error!</strong> Lo sentimos, hubo un error en la conexión o con el servidor tiene problemas. Comuníquelo por favor o inténtelo más tarde. <span id="spanMalo"></span></p>
			</div>
		</div>
			
		<div class="modal-footer">
			<button class="btn btn-danger btn-outline" data-dismiss="modal" ><i class="icofont icofont-warning-alt"></i> Ok</button>
		</div>
	</div>
	</div>
</div>
</div>