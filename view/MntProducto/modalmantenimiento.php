<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form id="producto_form" method="post">
				<div class="modal-header">
					<h5 class="modal-title" id="mdltitulo"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<input type="hidden" id="prod_id" name="prod_id">

					<!-- Categoría del Producto -->
					<div class="form-group">
						<label class="form-label" for="cat_id">Categoría</label>
						<select class="form-control select2" id="cat_id" name="cat_id" data-placeholder="Seleccione" style="width: 100%;"></select>
					</div>

					<!-- Nombre del Producto -->
					<div class="form-group">
						<label class="form-label" for="prod_nom">Nombre</label>
						<input type="text" class="form-control" id="prod_nom" name="prod_nom" placeholder="Ingrese Nombre" required>
					</div>

					<!-- Descripción del Producto -->
					<div class="form-group">
						<label class="form-label" for="prod_desc">Descripción</label>
						<textarea class="form-control" id="prod_desc" name="prod_desc" rows="3" placeholder="Ingrese Descripción" required></textarea>
					</div>

					<!-- Cantidad del Producto -->
					<div class="form-group">
						<label class="form-label" for="prod_cant">Cantidad</label>
						<input type="number" class="form-control" id="prod_cant" name="prod_cant" placeholder="Ingrese Cantidad">
					</div>

				</div><!-- /.modal-body -->
				
				<div class="modal-footer">
					<button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-info">Guardar</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->