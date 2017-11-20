 <?php
    require_once('institucion_modelo.php');
    
    $codigo = $_POST['codigo'];
    $institucion1 = new institucion();
    $institucion1->consultar($codigo);
?>

 <!-- quick email widget -->

    <div class="box-header">
        <i class="fa fa-building" aria-hidden="true">Institucion</i>
        
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
                        <label class="control-label col-sm-2" for="institucion_id">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="institucion_id" name="institucion_id" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($institucion1->institucion_id); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="institucion_nom">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="institucion_nom" name="institucion_nom" placeholder="Ingrese Nombre"
                            value = "<?php echo trim($institucion1->institucion_nom); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="institucion_dir">Descripcion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="institucion_dir" name="institucion_dir" placeholder="Ingrese descripcion"
                            value = "<?php echo trim($institucion1->institucion_dir); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ciudad_id">Ciudad:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ciudad_id" name="ciudad_id" placeholder="Ingrese descripcion"
                            value = "<?php echo trim($institucion1->ciudad_id); ?>">
                        </div>
                    </div>


                     <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizarins" data-toggle="tooltip" title="Actualizar Asignaturas" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrarins2"> Cancelar </button>
                        </div>

                    </div>                    

                    <input type="hidden" id="editar" value="editar" name="accion"/>
            </fieldset>

        </form>
    </div>
