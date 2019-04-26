
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];

	$sql="DELETE from tipo_evento where tipe_id='$id'";
	echo $result=mysqli_query($conexion,$sql);
 ?>