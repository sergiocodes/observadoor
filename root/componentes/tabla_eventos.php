<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();
 ?>

<div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Eventos disponibles a partir del  
									<?php 
									date_default_timezone_set("America/Santiago");
									echo date("d/m/Y") ?>
									</h2>
											
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">                            
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                        <table class="table table-borderless table-data3">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
													<th>nombre</th>
													<th>sector</th>
													<th>tipo</th>
													<th>hora inicio</th>
													<th>hora termino</th>
                                                    <th>fecha</th>
													<th style="width:10px">cupos</th>
													<th style="width:10px">capacidad</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php 

												$sql="SELECT event_id, event_nom, sec_nom, tipe_descripcion, event_hora_inicio, event_hora_fin, event_fecha,event_cap_actual, sec_cap_max 
													FROM evento, sector, tipo_evento
													WHERE event_tipe_id !=7 and event_sec_id=sec_id and event_tipe_id=tipe_id and event_fecha >= DATE(NOW())
													ORDER BY DATE(event_fecha) asc";

												$result=mysqli_query($conexion,$sql);
												while($ver=mysqli_fetch_row($result)){ 

													$datos=$ver[0]."||".
														   $ver[1]."||".
														   $ver[2]."||".														   														   
														   $ver[3]."||".
														   $ver[4]."||".
														   $ver[5]."||".
														   $ver[6]."||".
														   $ver[7]."||".
														   $ver[8];	
												$hora_formato = date_create($ver[4]); 
												$hora2_formato = date_create($ver[5]); 	
												$fecha_formato = date_create($ver[6]); 		
											 ?>
                                            <tr>
												<td><?php echo $ver[0] ?></td>
												<td><?php echo $ver[1] ?></td>
												<td><?php echo $ver[2] ?></td>
												<td><?php echo $ver[3] ?></td>
												<td><?php echo date_format($hora_formato, 'H:i') ?></td>
												<td><?php echo date_format($hora2_formato, 'H:i') ?></td>
												<td><?php echo date_format($fecha_formato, 'd/m/Y') ?></td>
												<td><?php echo $ver[7] ?></td>
												<td><?php echo $ver[8] ?></td>
											</tr>
                                            </tbody>
											<?php 
										}
											 ?>
                                        </table>
                                    </div>
                    </div>
                </div>