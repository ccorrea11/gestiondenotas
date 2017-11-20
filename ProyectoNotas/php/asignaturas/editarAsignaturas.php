 <?php
	require_once('modelo_asignaturas.php');
	
	$codigo = $_POST['codigo'];
	$asignaturas1 = new asignatura();
	$asignaturas1->consultar($codigo);
?>

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
                        <label class="control-label col-sm-2" for="asignatura_id">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asignatura_id" name="asignatura_id" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($asignaturas1->asignatura_id); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="asignatura_nombre">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asignatura_nombre" name="asignatura_nombre" placeholder="Ingrese Nombre"
                            value = "<?php echo trim($asignaturas1->asignatura_nombre); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="asignatura_desc">Descripcion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="asignatura_desc" name="asignatura_desc" placeholder="Ingrese descripcion"
                            value = "<?php echo trim($asignaturas1->asignatura_desc); ?>">
                        </div>
                    </div>



					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizarasig" data-toggle="tooltip" title="Actualizar Asignaturas" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrarasig2"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar" value="editar" name="accion"/>
			</fieldset>

		</form>
	</div>
