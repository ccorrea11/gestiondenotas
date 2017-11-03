 <?php
	require_once('profesor_modelo.php');
	
	$codigo = $_POST['codigo'];
	$profesores1 = new profesores();
	$profesores1->consultar($codigo);
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
                        <label class="control-label col-sm-2" for="prof_id">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="prof_id" name="prof_id" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($profesores1->prof_id); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nomb_prof">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomb_prof" name="nomb_prof" placeholder="Ingrese Nombre"
                            value = "<?php echo trim($profesores1->nomb_prof); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="apel_prof">Apellido:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apel_prof" name="apel_prof" placeholder="Ingrese Apellidos"
                            value = "<?php echo trim($profesores1->apel_prof); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="correo_prof">Correo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="correo_prof" name="correo_prof" placeholder="Ingrese correo"
                            value = "<?php echo trim($profesores1->correo_prof); ?>">
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
