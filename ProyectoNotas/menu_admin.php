<!DOCTYPE html>
<html lang="en">
<head>
  <title>Proyecto De Notas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!--<link rel="stylesheet" type="text/css" href="css/estilo.css">--> 
</head>
<body>
   

    <div class="container-fluid">
            <div class="jumbotron">                 
                <h1>Menu Administrador</h1>   
            </div>
        <div class="panel-group"><div class="panel panel-default">
            <!--<div class="panel-heading">Gestion</div>-->
            <div class="panel-body">
                
                <div class="form-group" id="opciones"><div class="row">

                        <div class="col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Menu
                                </div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a class="list-group-item" href="php/profesores/index.php" id="profesores">Gestion Profesores</a>
                                        <a class="list-group-item" href="php/asignaturas/index.php" id="asignaturas">Gestion Asignaturas</a>
                                        <a class="list-group-item" href="php/instituciones/index.php" id="asignaturas">Gestion Instituciones</a>
                                    </div>
                                </div>
                           <!--  <p><a id="empresas" class="btn btn-danger btn-block" href="php/empresa/index.php" role="button">Empresas</a></p>
                            <p><a id="contrato" class="btn btn-danger btn-block" href="php/contrato/index.php" role="button">Contrato</a></p> -->
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="panel-group hide" id="contenedor">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="titulo"></div>
                                <div class="panel-body">
                                    <div class="form-group" id="contenido">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <!-- Funciones de Lógica de negocio -->
    <script src="js/funcionesJquery.js"></script>
    <script>
        $(document).ready(Inicio);
    </script>
</body>
</html>