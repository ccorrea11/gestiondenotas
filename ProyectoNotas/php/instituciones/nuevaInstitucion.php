	
<!-- quick email widget -->



	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Instituciones</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrarins" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual"> 
				</div>
		</div>


        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos De Instituciones</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="finstitucion">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="institucion_id">ID Institucion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="institucion_id" name="institucion_id" placeholder="ID Institucion"
                            value= "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="institucion_nom">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="institucion_nom" name="institucion_nom" placeholder="Ingrese Nombre"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="institucion_dir">Direccion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="institucion_dir" name="institucion_dir" placeholder="Ingrese La Direccion"
                            value = "">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ciudad_id">Ciudad:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ciudad_id" name="ciudad_id" placeholder="Ingrese La Direccion"
                            value = "">
                        </div>
                    </div>

                  
					

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabarins" class="btn btn-primary" data-toggle="tooltip" title="Grabar Institucion">Grabar Institucion</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrarins2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>

