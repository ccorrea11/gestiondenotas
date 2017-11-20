<?php
	require_once('modelo_asignaturas.php');
	$asignatura = new asignatura();
	$listado = $asignatura->lista();

	
?>


<div class="box-header">
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
    	<button class="btn btn-info btn-sm " id="nuevoasig"  data-toggle="tooltip" title="Nueva Asignatura"><i class="fa fa-plus" aria-hidden="true"></i></button> 
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->
                  
</div><!-- /.box-header -->
<div class="box-body">
             
<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombres</th>
			<th>Descripcion</th>
			
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['asignatura_id'] ?> </td>
				<td><?php echo utf8_encode($fila['asignatura_nombre']) ?> </td>
				<td><?php echo utf8_encode($fila['asignatura_desc']) ?> </td> 
				
				
				<td align='center'> 
				<a class="btn btn-danger borrarasig" data-toggle="tooltip" codigo="<?php echo  $fila['asignatura_id'] ?>">
  					<i class="fa fa-trash-o"  aria-hidden="true"></i>
  					<span class="sr-only">Delete</span>
				</a> </td> 
				<td align='center'>
				<a class="btn btn-primary editarasig" data-toggle="tooltip" codigo="<?php echo $fila['asignatura_id'] ?>">
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