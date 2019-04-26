<?php 
   //cadena="nom=" + nom_evento + "&tevento=" + tip_evento + "&sec=" + sec_evento + "&hi=" + hora_ini + "&hf=" + hora_fin + "&fecha=" + fecha + "&capac=" + capacidad;
    require_once "conexion.php";
	$conexion=conexion();
	
	$nom=$_POST['nom'];
	$te=$_POST['tevento'];
	$sec=$_POST['sec'];
	$hi=$_POST['hi'];
	$hf=$_POST['hf'];
	$fecha=$_POST['fecha'];
	$crea=$_POST['crea'];

	$getcap="SELECT sec_cap_max FROM sector WHERE sec_id='$sec'";

	$result=mysqli_query($conexion,$getcap);
	$capacidad=mysqli_fetch_row($result);

	$sql="INSERT into evento (event_nom, Event_TipE_id, Event_sec_id, Event_Hora_Inicio, Event_Hora_fin, Event_Fecha, Event_cap_actual, Event_Us_Login)
								values ('$nom','$te','$sec','$hi','$hf','$fecha','$capacidad[0]','$crea')";
	echo $result=mysqli_query($conexion,$sql);
 ?>