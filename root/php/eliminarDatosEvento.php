
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from evento where event_id='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>