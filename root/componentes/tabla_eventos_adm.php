<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();
	header("Content-Type: text/html;charset=utf-8");

 ?>

<div class="section__content section__content--p30">
	<div class="container-fluid">

		<div class="row">
		<div class="col-sm-12">
				<div class="overview-wrap">
					<h2 class="title-1">Administración eventos</h2>											
				</div>
		</div>
		</div>	

		<div class="row m-t-25">    

			<!-- DATA TABLE-->
			<div class="table-responsive m-b-40">
				<table class="table table-borderless table-data3">
					<thead>
						<tr>
							<th>ID</th>
							<th>Evento</th>
							<th>Tipo</th>
							<th>Sector</th>
							<th>Hora inicio</th>
							<th>Hora fin</th>
							<th>Fecha</th>
							<th>Capacidad</th>
							<th>Creador</th>
							<th>editar</th>
							<th>eliminar</th>
						</tr>
					</thead>
					<tbody>
						 <?php 

							if(isset($_SESSION['consulta'])){
								if($_SESSION['consulta'] > 0){
									$idp=$_SESSION['consulta'];
									$sql="SELECT event_id, event_nom, tipe_descripcion, sec_nom, event_hora_inicio, event_hora_fin, event_fecha,event_cap_actual, event_us_login
								FROM evento, sector, tipo_evento
								WHERE event_sec_id=sec_id and event_tipe_id=tipe_id
								ORDER BY DATE(event_fecha) asc";
								}else{
									$sql="SELECT event_id, event_nom, tipe_descripcion, sec_nom, event_hora_inicio, event_hora_fin, event_fecha,event_cap_actual, event_us_login
								FROM evento, sector, tipo_evento
								WHERE event_sec_id=sec_id and event_tipe_id=tipe_id
								ORDER BY DATE(event_fecha) asc";
								}
							}else{
								$sql="SELECT event_id, event_nom, tipe_descripcion, sec_nom, event_hora_inicio, event_hora_fin, event_fecha,event_cap_actual, event_us_login
								FROM evento, sector, tipo_evento
								WHERE event_sec_id=sec_id and event_tipe_id=tipe_id
								ORDER BY DATE(event_fecha) asc";
							}

							$result=mysqli_query($conexion,$sql);
							while($ver=mysqli_fetch_row($result)){ 

								$hora_ini_formato = date_create($ver[4]); 
								$hora_fin_formato = date_create($ver[5]); 		
								$fecha_formato = date_create($ver[6]);
								$nuevo = $hora_ini_formato->format('H:i');
								$nuevo2 = $hora_fin_formato->format('H:i');
								$datos=$ver[0]."||".
									   $ver[1]."||".
									   $ver[2]."||".
									   $ver[3]."||".
									   $nuevo."||".
									   $nuevo2."||".
									   $ver[6]."||".
									   $ver[7]."||".									   
									   $ver[8];
								
						?> 
						<tr>
							<td><?php echo $ver[0] ?></td>
							<td><?php echo $ver[1] ?></td>
							<td><?php echo $ver[3] ?></td>
							<td><?php echo $ver[2] ?></td>
							<td><?php echo date_format($hora_ini_formato, 'H:i') ?></td>
							<td><?php echo date_format($hora_fin_formato, 'H:i') ?></td>
							<td><?php echo date_format($fecha_formato, 'Y-m-d') ?></td>
							<td><?php echo $ver[7] ?></td>
							<td><?php echo $ver[8] ?></td>
							<td>
								<button class="btn btn-warning btn-md glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformevento('<?php echo $datos ?>')">
								</button>
							</td>
							<td>
								<button class="btn btn-danger btn-md glyphicon glyphicon-remove" onclick="preguntarSiNoEvento('<?php echo $ver[0] ?>')">									
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
				Agregar nuevo evento 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
			</caption>
		</div>
	</div>
</div>