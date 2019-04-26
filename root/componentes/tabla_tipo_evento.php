<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();
 ?>

<div class="section__content section__content--p30">
	<div class="container-fluid">

		<div class="row">
			<div class="col-sm-12">
				<div class="overview-wrap">
					<h2 class="title-1">Mantenedor tabla básica: Tipo Evento</h2>											
				</div>
			</div>
		</div>	

		<div class="row m-t-25">                            
			<!-- DATA TABLE-->
			<div class="table-responsive m-b-40">
				<!-- <table class="table table-borderless table-data3"> -->
				<table class="table table-borderless table-data3">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tipo de evento</th>
							<th width="20">editar</th>
							<th width="20">eliminar</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						
							$sql="SELECT * from tipo_evento";

							$result=mysqli_query($conexion,$sql);
							while($ver=mysqli_fetch_row($result)){ 

								$datos=$ver[0]."||".
									   $ver[1];
						?>
						<tr>
							<td><?php echo $ver[0] ?></td>
							<td><?php echo $ver[1] ?></td>
							<td>
								<button class="btn btn-warning btn-md glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
								</button>
							</td>
							<td>
								<button class="btn btn-danger btn-md glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0] ?>')">									
								</button>
							</td>
						</tr>
					</tbody>
					<?php 
					}
						?>
				</table>
			</div>
			<!-- END DATA TABLE-->
			<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
			</caption>
		</div>
	</div>
</div>