 <?php
	require_once('profesor_modelo.php');
	
	$codigo = $_POST['codigo'];
	$profesores1 = new profesores();
	$profesores1->consultar($codigo);

    require_once('../asignaturas/modelo_asignaturas.php');
    require_once('../instituciones/institucion_modelo.php');
    $asignatura1 = new asignatura();
    $lista=$asignatura1->lista();

    
    $institucion1 = new institucion();
    $lista1=$institucion1->lista();



?>

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
            <div class="panel-heading">Datos de Profesores</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fpersona">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_id">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_id" name="profesor_id" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($profesores1->profesor_id); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_nom">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_nom" name="profesor_nom" placeholder="Ingrese Nombre"
                            value = "<?php echo trim($profesores1->profesor_nom); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_ape">Apellido:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_ape" name="profesor_ape" placeholder="Ingrese Apellidos"
                            value = "<?php echo trim($profesores1->profesor_ape); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="asignatura_id">País:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="asignatura_id" name="asignatura_id">
                            <?php foreach($lista as $fila){ 
                            if(trim($profesores1->asignatura_id) == $fila['asignatura_id']){
                            ?>
                            <option selected value="<?php echo trim($fila['asignatura_id']); ?>" >
                            <?php echo utf8_encode(trim($fila['asignatura_nombre'])); ?> </option>
                            <?php }
                            else{ ?>
                            <option value="<?php echo trim($fila['asignatura_id']); ?>" >
                            <?php echo utf8_encode(trim($fila['asignatura_nombre'])); ?> </option>
        
                            <?php }
                            } ?>
                            </select> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_cor">Correo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_cor" name="profesor_cor" placeholder="Ingrese correo"
                            value = "<?php echo trim($profesores1->profesor_cor); ?>">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_sexo">Sexo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_sexo" name="profesor_sexo" placeholder="Ingrese correo"
                            value = "<?php echo trim($profesores1->profesor_sexo); ?>">
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-sm-2" for="institucion_id">País:</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="institucion_id" name="institucion_id">
                            <?php foreach($lista1 as $fila){ 
                            if(trim($profesores1->institucion_id) == $fila['institucion_id']){
                            ?>
                            <option selected value="<?php echo trim($fila['institucion_id']); ?>" >
                            <?php echo utf8_encode(trim($fila['institucion_nom'])); ?> </option>
                            <?php }
                            else{ ?>
                            <option value="<?php echo trim($fila['institucion_id']); ?>" >
                            <?php echo utf8_encode(trim($fila['institucion_nom'])); ?> </option>
        
                            <?php }
                            } ?>
                            </select> 
                        </div>
                    </div>
                    
            <!--  -->

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar" data-toggle="tooltip" title="Actualizar Persona" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar2"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar" value="editar" name="accion"/>
			</fieldset>

		</form>
	</div>
