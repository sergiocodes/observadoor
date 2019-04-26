<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "../php/conexion.php";
$conexion=conexion();
 
// Escape user inputs for security
$rut = mysqli_real_escape_string($link, $_REQUEST['rut-input']);
$nombre= mysqli_real_escape_string($link, $_REQUEST['nom-input']);
$appat = mysqli_real_escape_string($link, $_REQUEST['app-input']);
$apmat = mysqli_real_escape_string($link, $_REQUEST['apm-input']);
$tel = mysqli_real_escape_string($link, $_REQUEST['tel-input']);
$tipo_v = mysqli_real_escape_string($link, $_REQUEST['select_tr']);
$event = mysqli_real_escape_string($link, $_REQUEST['event-input']);
 
// Attempt insert query execution
$sql = "INSERT INTO visitante VALUES ('$rut', '$nombre', '$appat', '$apmat', '$tel', '$tipo_v')";
if(mysqli_query($conexion, $sql)){
    echo "Agregado exitosamente!";
} else{
    echo "ERROR! no se puede ejecutar $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conexion);
?>