	
<!-- quick email widget -->



	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Asignaturas</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrarasig" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual"> 
				</div>
		</div>


        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos De Asignaturas</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fasignatura">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="asignatura_id">ID Asignatura:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asignatura_id" name="asignatura_id" placeholder="ID Asignatura"
                            value= "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="asignatura_nombre">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asignatura_nombre" name="asignatura_nombre" placeholder="Ingrese Nombre"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="asignatura_desc">Descripcion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asignatura_desc" name="asignatura_desc" placeholder="Ingrese La Descripcion"
                            value = "">
                        </div>
                    </div>

                  
					

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabarasig" class="btn btn-primary" data-toggle="tooltip" title="Grabar Asignatura">Grabar Asignatura</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrarasig2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>

