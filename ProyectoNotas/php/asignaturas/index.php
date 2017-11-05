<?php
	require_once('asignaturas_modelo.php');
	$asignatura = new Asignatura();
	$listado = $asignatura->lista();
?>
<div class="box-header">
	<div class="pull-right box-tools">
		<button class="btn btn-info btn-sm" id="nuevaAsignatura" data-toggle="tooltip" title="Nueva asignatura"><i class="fa fa-plus" aria-hidden="true"></i></button>
		<button class="btn btn-info btn-sm btncerrar" data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>
	</div>
</div>
<br><br>
<div class="box-body">
	<div class="table-responsive" style="overflow-x: hidden;">
		<table id="tabla" class="table table-striped table-bordered table-hover" cellpadding="0">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Borrar</th>
					<th>Editar</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach($listado as $fila){
					?>
					<tr>
						<td><?php echo $fila['nomb_asig']?></td>
						<td><?php echo $fila['desc_asig']?></td>
						<td align='center'> 
							<a class="btn btn-danger borrarAsignatura" href="#" data-toggle="tooltip" codigo="<?php echo  $fila['asig_id'] ?>">
			  					<i class="fa fa-trash-o"  aria-hidden="true"></i>
			  					<span class="sr-only">Borrar</span>
							</a> 
						</td> 
						<td align='center'>
							<a class="btn btn-primary editarAsignatura" href="#" data-toggle="tooltip" codigo="<?php echo $fila['asig_id'] ?>">
			  					<i class="fa fa-pencil"  aria-hidden="false"></i>
			  					<span class="sr-only">Editar</span>
							</a> 
						</td> 
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<script>
    $(document).ready(function(){
    	$("#tabla").DataTable();
    });
</script>