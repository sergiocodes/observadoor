<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$n=$_POST['id'];
	$a=$_POST['tevento'];

	$sql="INSERT into tipo_evento (tipe_id,tipe_descripcion) values ('$n','$a')";
	echo $result=mysqli_query($conexion,$sql);
 ?>