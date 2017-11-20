<?php
	require_once('institucion_modelo.php');
	$institucion1 = new institucion();
	$listado = $institucion1->lista();

	
?>


<div class="box-header">
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
    	<button class="btn btn-info btn-sm " id="nuevoins"  data-toggle="tooltip" title="Nueva institucion"><i class="fa fa-plus" aria-hidden="true"></i></button> 
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->
                  
</div><!-- /.box-header -->
<div class="box-body">
             
<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Ciudad</th>
			
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['institucion_id'] ?> </td>
				<td><?php echo utf8_encode($fila['institucion_nom']) ?> </td>
				<td><?php echo utf8_encode($fila['institucion_dir']) ?> </td> 
				<td><?php echo utf8_encode($fila['ciudad_nom']) ?> </td> 
				
				<td align='center'> 
				<a class="btn btn-danger borrarins" data-toggle="tooltip" codigo="<?php echo  $fila['institucion_id'] ?>">
  					<i class="fa fa-trash-o"  aria-hidden="true"></i>
  					<span class="sr-only">Delete</span>
				</a> </td> 
				<td align='center'>
				<a class="btn btn-primary editarins" data-toggle="tooltip" codigo="<?php echo $fila['institucion_id'] ?>">
  					<i class="fa fa-pencil"  aria-hidden="false"></i>
  					<span class="sr-only">Edit</span>
				</a> </td> 
			</tr>
	<?php } ?>
	</tbody>
</table>

</div><!-- /.box-body -->  

    
    <!-- Funciones de Lógica de negocio -->
   
<!-- Funciones de Lógica de neogcio -->
<script>
    $(document).ready(function(){
    	$("#tabla").DataTable();
    });
</script>