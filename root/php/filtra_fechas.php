<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$ini=$_POST['inicio'];
	$fin=$_POST['fin'];

	$sql="SELECT visit_id, visit_nombre, visit_appat, visit_apmat, visit_tel_conducto, tipv_descripcion, list_id, event_nom, event_id, sec_nom, event_fecha, vis_hora_visita, event_hora_fin
	FROM visita, visitante, evento, sector, grupo, tipo_visitante
	WHERE vis_visit_id=visit_id and vis_event_id=event_id and visit_tipv_id=tipv_id and event_sec_id=sec_id and vis_list_id=list_id and event_fecha between '$ini' AND '$fin' 
	ORDER BY DATE(event_fecha) asc";
	echo $result=mysqli_query($conexion,$sql);
 ?>