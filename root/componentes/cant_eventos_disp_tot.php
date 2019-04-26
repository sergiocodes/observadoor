<?php 
    require_once "../php/conexion.php";
    $conexion=conexion();  
    
    $sql= "SELECT * from evento where event_fecha >= DATE(NOW())";                                                      
    $result=mysqli_query($conexion, $sql);
    $num = mysqli_num_rows($result);
    
?>

<h2><?php echo $num ?></h2>