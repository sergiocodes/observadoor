<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];

	if(isset($desde)==false){
		$desde = $hasta;
	}

	if(isset($hasta)==false){
		$hasta = $desde;
	}

	$sql="SELECT visit_id, visit_nombre, visit_appat, visit_apmat, visit_tel_conducto, tipv_descripcion, list_id, event_nom, event_id, sec_nom, event_fecha, vis_hora_visita, event_hora_fin
		FROM visita, visitante, evento, sector, grupo, tipo_visitante
		WHERE vis_visit_id=visit_id and vis_event_id=event_id and visit_tipv_id=tipv_id and event_sec_id=sec_id and vis_list_id=list_id and event_fecha between '2018-08-31' AND '2018-12-31' 
		ORDER BY DATE(event_fecha) asc";
	$result=mysqli_query($conexion,$sql);

	echo '<div class="section__content section__content--p30">
	<div class="container-fluid">
		<div class="row m-t-25">                            
				<!-- DATA TABLE-->
				<div class="table-responsive m-b-40">
					<table class="table table-borderless table-data3">
						<thead>
							<tr>
								<th>rut</th>
								<th>nombre</th>
								<th>apellido paterno</th>
								<th>apellido materno</th>
								<th>telefono</th>
								<th>tipo visita</th>
								<th>id lista</th>
								<th>evento</th>
								<th>id</th>
								<th>sector</th>
								<th>fecha</th>
								<th>entrada</th>
								<th>salida</th>
								<th>L</th>
							</tr>
						</thead>
						<tbody>
	
	';
	if(mysqli_num_rows($result)>0){
		while($ver=mysqli_fetch_row($result)){
			$fecha_formato = date_create($ver[10]); 
			$hora_formato = date_create($ver[11]); 
			$hora2_formato = date_create($ver[12]);
			echo '
			<tr>
				<td>$ver[0] ?></td>
				<td>'.$ver[1].'</td>
				<td>'.$ver[2].'</td>
				<td>'.$ver[3].'</td>
				<td>'.$ver[4].'</td>
				<td>'.$ver[5].'</td>
				<td>'.$ver[6].'</td>
				<td>'.$ver[7].'</td>
				<td>'.$ver[8].'</td>
				<td>'.$ver[9].'</td>
				<td>'.date_format($hora_formato, 'H:i').'</td>
				<td>'.date_format($hora2_formato, 'H:i').'</td>
				<td>'.date_format($fecha_formato, 'd/m/Y').'</td>
				<td><button class="btn btn-info btn-md glyphicon glyphicon-search" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
					</button>
				</td>
			</tr>
			';
	}else{
		echo '
		<tr>
			<td colspan="6">No se encontraron resultados</td>
		</tr>';
	}
	echo '</tbody>
	</table>';

?>

