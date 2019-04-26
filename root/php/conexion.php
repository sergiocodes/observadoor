<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="bate466poe203";
			$bd="db_observa";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);			
			return $conexion;
		}
 ?>