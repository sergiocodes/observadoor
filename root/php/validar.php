<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
		<?php
			require_once 'conexion.php';
			$conexion=conexion();

			if(isset($_POST['login'])){
				$usuario = $_POST['user'];
				$pw = $_POST['pw'];
				$sql = "SELECT * FROM usuario WHERE us_login='$usuario' AND us_password='$pw'";
				$log = mysqli_query($conexion, $sql) or die(mysql_error());;
				$id = mysqli_fetch_row($log);
				$num = mysqli_num_rows($log);
				
				if ($num>0) {
					$_SESSION["user"] = $id[0];
					$_SESSION["nivel"] = $id[2];
					if($_SESSION["nivel"] == 1)
					{
						echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
						echo '<script> window.location="../administrador.php"; </script>';
					} else
					{
						echo 'Iniciando sesión para '.$_SESSION['user'].' <p>';
						echo '<script> window.location="../operador.php"; </script>';
					}
				  	
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="../login.php"; </script>';
				}
			}
		?>	
</body>
</html>