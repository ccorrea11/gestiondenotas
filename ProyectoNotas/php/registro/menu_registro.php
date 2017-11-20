

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
	
</head>

<body>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<div class="box-header">
    	
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
                            <input type="text" class="form-control" id="profesor_id" name="profesor_id" placeholder="Ingrese Codigo"
                            value= "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="profesor_nom">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="profesor_nom" name="profesor_nom" placeholder="Ingrese Nombre"
                            value = "">
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
                        <label class="control-label col-sm-2" for="institucion_id">Institucion:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="institucion_id" name="institucion_id" placeholder="Ingrese Codigo"
                            >
                        </div>
                        <!-- value = "" readonly="true"  data-validation="length alphanumeric" data-validation-length="3-12" -->
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
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="grabar" class="btn btn-primary" data-toggle="tooltip" title="Grabar Profesor">Grabar Profesor</button>
                            <button type="button" id="cerrar" class="btn btn-success btncerrar2" data-toggle="tooltip" title="Cancelar">Cancelar</button>
                        </div>
                    </div>

					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>

		</form>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <!-- Funciones de Lógica de negocio -->
    <script src="../../js/funcionesJquery.js"></script>


</body>
</html>