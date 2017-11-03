	
<!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-building" aria-hidden="true">Profesores</i>
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar2" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual"> 
				</div>
		</div>


        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos De Profesor</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fpersona">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="prof_id">ID profesor:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prof_id" name="prof_id" placeholder="Ingrese Codigo"
                            value= "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nomb_prof">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomb_prof" name="nomb_prof" placeholder="Ingrese Nombre"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="apel_prof">Apellido:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apel_prof" name="apel_prof" placeholder="Ingrese Apellido"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="inst_id">ID institucion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inst_id" name="inst_id" placeholder="Ingrese Codigo"
                            >
                        </div>
                        <!-- value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12" -->
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sexo_prof">sexo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sexo_prof" name="sexo_prof" placeholder="Ingrese sexo"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="correo_prof">Correo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="correo_prof" name="correo_prof" placeholder="Ingrese Correo"
                            value = "">
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Profesor">Grabar Profesor</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>
