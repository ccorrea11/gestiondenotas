 <?php
    require_once('asignaturas_modelo.php');
    $codigo = $_POST['codigo'];
    $asignatura = new Asignatura();
    $asignatura->consultar($codigo);
?>

 <!-- quick email widget -->
    <div class="box-body">
        <div class="panel-group"><div class="panel panel-default">
            <div class="panel-heading">Editar Asignatura</div>
            <div class="panel-body">    
                <form class="form-horizontal" role="form"  id="fasignatura">

                    <input type="hidden" id="asig_id" name="asig_id" value="<?php echo trim($asignatura->asig_id); ?>">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nomb_asig">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomb_asig" name="nomb_asig" placeholder="Ingrese nombre de la asignatura"
                            value = "<?php echo trim($asignatura->nomb_asig); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="desc_asig">Descripción:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="desc_asig" name="desc_asig" placeholder="Ingrese una descripción de la asignatura"
                            value = "" max="30"><?php echo trim($asignatura->desc_asig); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizarAsignatura" data-toggle="tooltip" title="Actualizar asignatura" class="btn btn-success">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar edición" class="btn btn-danger btncerrarAsignatura"> Cancelar </button>
                        </div>
                    </div>
                    <input type="hidden" id="editar" value="editar" name="accion"/>
                </div>
            </fieldset>

        </form>
    </div>
