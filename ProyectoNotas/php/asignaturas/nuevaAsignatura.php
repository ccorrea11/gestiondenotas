<!-- quick email widget -->
    <div class="box-body">
        <div class="panel-group"><div class="panel panel-default">
            <div class="panel-heading">Nueva Asignatura</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="fasignatura">

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nomb_asig">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nomb_asig" name="nomb_asig" placeholder="Ingrese nombre de la asignatura"
                            value = "">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="desc_asig">Descripción:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="desc_asig" name="desc_asig" placeholder="Ingrese una descripción de la asignatura"
                            value = "" maxlength="30"></textarea>
                        </div>
                    </div>
                     <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="registrarAsignatura" class="btn btn-success" data-toggle="tooltip" title="Registrar Asignatura">Registrar Asignatura</button>
                            <button type="button" id="cerrar" class="btn btn-danger btncerrarAsignatura" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

                    <input type="hidden" id="nuevo" value="nuevo" name="accion"/>
            </fieldset>

        </form>
    </div>
