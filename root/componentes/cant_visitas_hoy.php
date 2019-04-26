<?php 
    require_once "../php/conexion.php";
    $conexion=conexion();  
    
    $sql= "SELECT count(*) FROM visita, evento where DATE(event_fecha)=DATE(NOW())";                                                      
    $result=mysqli_query($conexion, $sql);
    $num = mysqli_fetch_row($result);
    
?>

<h2><?php echo $num[0] ?></h2>