<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$m=$_POST['ida'];
	$n=$_POST['id'];	
	$a=$_POST['tevento'];
	$sql="UPDATE tipo_evento set tipe_id='$n', tipe_descripcion='$a'	where tipe_id='$m'";
	echo $result=mysqli_query($conexion,$sql);
 ?>