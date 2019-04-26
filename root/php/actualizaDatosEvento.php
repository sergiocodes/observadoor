<?php 
	//"id=" + id +"&nom=" + nom_evento + "&tevento=" + tip_evento + "&sec=" + sec_evento + "&hi=" + hora_ini + "&hf=" + hora_fin + "&fecha=" + fecha + "&capac=" + capacidad;
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$nom=$_POST['nom'];
	$te=$_POST['tevento'];
	$sec=$_POST['sec'];
	$hi=$_POST['hi'];
	$hf=$_POST['hf'];
	$fecha=$_POST['fecha'];
	$capac=$_POST['capac'];
	$sql="UPDATE evento SET event_nom='$nom', event_sec_id='$sec', event_hora_inicio='$hi', event_hora_fin='$hf', event_fecha='$fecha', event_cap_actual=$capac, event_tipe_id='$te' WHERE event_id=$id";
	echo $result=mysqli_query($conexion,$sql);	
 ?>