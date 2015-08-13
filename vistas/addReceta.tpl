<form action="{$request_uri}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
	<h3 class="page-subheading">{l s='Agregar/Modificar receta'}</h3>
	
	<div class="form-group">
		<label for="txtNombre" class="col-lg-2 control-label">Nombre</label>
		<div class="col-lg-5">
			<input type="text" class="form-control" id="txtNombre" placeholder="Nombre">
		</div>
	</div>
	<div class="form-group">
		<label for="txtNombre" class="col-lg-2 control-label">Descripción corta</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" id="txtDescripcionCorta" placeholder="Descripción corta">
		</div>
	</div>
	<div class="form-group">
		<label for="txtNombre" class="col-lg-2 control-label">¿Para cuantas personas?</label>
		<div class="col-lg-1">
			<select id="selPersonas" name="selPersonas" class="form-control">
				{for $cont=0 to 30}
				<option value="{$cont}">{$cont}
				{/for}
			</select>
		</div>
	</div>
</form>
				
