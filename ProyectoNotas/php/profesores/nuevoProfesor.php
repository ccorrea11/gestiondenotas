<?php
    require_once('../asignaturas/modelo_asignaturas.php');
    require_once('../instituciones/institucion_modelo.php');
    $asignatura1 = new asignatura();
    $lista=$asignatura1->lista();

    
    $institucion1 = new institucion();
    $lista1=$institucion1->lista();
?>  




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
                        <label class="control-label col-sm-2" for="profesor_id">ID profesor:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_id" name="profesor_id" placeholder="ID Profesor"
                            value= "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_nom">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_nom" name="profesor_nom" placeholder="Ingrese Nombre"
                            value = "" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_ape">Apellido:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_ape" name="profesor_ape" placeholder="Ingrese Apellido"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="asignatura_id">Asignatura:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="asignatura_id" name="asignatura_id">
                            <option value="" selected>Seleccione ...</option>
                                <?php foreach($lista as $fila){ ?>

                                <option value="<?php echo trim($fila['asignatura_id']); ?>" >

                                <?php echo utf8_encode(trim($fila['asignatura_nombre'])); ?> </option>

                                <?php } ?>
                            </select>   
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_sexo">sexo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_sexo" name="profesor_sexo" placeholder="Ingrese sexo"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_cor">Correo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_cor" name="profesor_cor" placeholder="Ingrese Correo"
                            value = "">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="institucion_id">Institucion:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="institucion_id" name="institucion_id">
                            <option value="" selected>Seleccione ...</option>
                                <?php foreach($lista1 as $fila){ ?>

                                <option value="<?php echo trim($fila['institucion_id']); ?>" >

                                <?php echo utf8_encode(trim($fila['institucion_nom'])); ?> </option>

                                <?php } ?>
                            </select>   
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

