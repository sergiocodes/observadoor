<?php 
require_once "conexion.php";
$conexion=conexion();
if(isset($POST['from_date'], $POST['to_date']))
{
    $output='';
    $sql="SELECT visit_id, visit_nombre, visit_appat, visit_apmat, visit_tel_conducto, tipv_descripcion, list_id, event_nom, event_id, sec_nom, event_fecha, vis_hora_visita, event_hora_fin
        FROM visita, visitante, evento, sector, grupo, tipo_visitante
        WHERE vis_visit_id=visit_id and vis_event_id=event_id and visit_tipv_id=tipv_id and event_sec_id=sec_id and vis_list_id=list_id and event_fecha between '".$_POST["from_date"]."' AND '".$_POST["to_date"]."' 
        ORDER BY DATE(event_fecha) asc";

    $result=mysqli_query($conexion,$sql);
    $output .='
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>rut</th>
                    <th>nombre</th>
                    <th>apellido paterno</th>
                    <th>apellido materno</th>
                    <th>telefono</th>
                    <th>tipo visita</th>
                    <th>id lista</th>
                    <th>evento</th>
                    <th>id</th>
                    <th>sector</th>
                    <th>fecha</th>
                    <th>entrada</th>
                    <th>salida</th>
                    <th>L</th>
                </tr>
            </thead>
    ';
    if(mysqli_num_rows($result) > 0)
    {
        while($ver=mysqli_fetch_row($result))
        {
            $hora_formato = date_format(date_create($ver[10]), 'H:i'); 
			$hora2_formato = date_format(date_create($ver[11]),'H:i'); 	
			$fecha_formato = date_format(date_create($ver[12]),'d/m/Y'); 
            $output.='
            <tbody>
            <tr>
                <td>'. $ver[0] .'</td>
                <td>'. $ver[1] .'</td>
                <td>'. $ver[2] .'</td>
                <td>'. $ver[3] .'</td>
                <td>'. $ver[4] .'</td>
                <td>'. $ver[5] .'</td>
                <td>'. $ver[6] .'</td>
                <td>'. $ver[7] .'</td>
                <td>'. $ver[8] .'</td>
                <td>'. $ver[9] .'</td>
                <td>'. $hora_formato .'</td>
                <td>'. $hora2_formato .'</td>
                <td>'. $fecha_formato .'</td>
                <td><button class="btn btn-info btn-md glyphicon glyphicon-search" data-toggle="modal">
                    </button>
                </td>
            </tr>
            ';
        }
    }else
    {
        $output .='
            <tr>
                <td colspan="5">No existen resultados para estos parametros</td>
            </tr>
        ';
    }
    $output.='
    </tbody>
    </table>';
    echo $output;
}
?>