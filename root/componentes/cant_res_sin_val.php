<?php 
    require_once "../php/conexion.php";
    $conexion=conexion();  
    
    $sql= "SELECT * from reserva where res_validacion='0'";                                                      
    $result=mysqli_query($conexion, $sql);
    $num = mysqli_num_rows($result);
    
?>

<h2><?php echo $num ?></h2>