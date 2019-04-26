//////////////////// FUNCIONES MANTENEDOR tipo_evento /////////////

function agregardatos(id, tipoevento){ // agrega registro a tipo_evento

	cadena="id=" + id + "&tevento=" + tipoevento;

	$.ajax({
		type:"POST",
		url:"php/agregarDatostevento.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla_tipo_evento').load('componentes/tabla_tipo_evento.php');
				alertify.success("Agregado con exito");
			}else{
				alertify.error("Ha ocurrido un problema");
			}
		}
	});

}

function agregaform(datos){ // agrega a formulario flotante de tipo_evento (actualizar)

	d=datos.split('||');

	$('#idnueva').val(d[0]);
	$('#idviejo').val(d[0]);
	$('#descevento').val(d[1]);
	
}

function actualizaDatos(){ // actualizar de tipo_evento

	idant=$('#idviejo').val();
	id=$('#idnueva').val();
    evento=$('#descevento').val();

	cadena="ida=" + idant + "&id=" + id +"&tevento=" + evento;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatostevento.php",
		data:cadena,
		success:function(r){			
			if(r==1){
				$('#tabla_tipo_evento').load('componentes/tabla_tipo_evento.php');
				alertify.success("Datos actualizados exitosamente");
			}else{
				alertify.error("Ha ocurrido un problema");
			}
		}
	});

}

function preguntarSiNo(id){ // confirmacion eliminar
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}



function eliminarDatos(id){ // borrar de tipo_evento

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla_tipo_evento').load('componentes/tabla_tipo_evento.php');
					alertify.success("Registro eliminado exitosamente");
				}else{
					alertify.error("Ha ocurrido un problema");
				}
			}
		});
}



//////////////////// FIN FUNCIONES MANTENEDOR tipo_evento /////////////
//////////////////// FUNCIONES ADMINISTRACION eventos     /////////////

function agregardatosevento(nom_evento,tip_evento,sec_evento,hora_ini,hora_fin,fecha, creador){ // agrega registro a evento (nom_evento,tip_evento,sec_evento,hora_ini,hora_fin,fecha,capacidad,creador);

	cadena = "nom=" + nom_evento + "&tevento=" + tip_evento + "&sec=" + sec_evento + "&hi=" + hora_ini + "&hf=" + hora_fin + "&fecha=" + fecha  + "&crea=" + creador;

	$.ajax({
		type:"POST",
		url:"php/agregarDatosEvento.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla_eventos_adm').load('componentes/tabla_eventos_adm.php');
				alertify.success("Agregado con exito");
			}else{
				alertify.error("Ha ocurrido un problema");
			}
		}
	});

}

function agregaformevento(datos){ // agrega a formulario flotante de tipo_evento (actualizar)
// agregaformevento('1||2||3845182||Reparacion water||23:00:00.000000||23:30:00.000000||2018-08-28||50||1')
// id, sector, creador, nombre, hi, hf, fecja, capac, tipe
	d=datos.split('||');

	$('#i2_idevento').val(d[0]);
	$('#i2_nomevento').val(d[3]);
	$('#i2_tipevento').val(d[8]);
	$('#i2_sector').val(d[1]);
	$('#i2_horainicio').val(d[4]);
	$('#i2_horafin').val(d[5]);
	$('#i2_fecha').val(d[6]);
	$('#i2_capacidad').val(d[7]);
	
}

function actualizaDatosEvento(){ // actualizar de evento

	id=$('#i2_idevento').val();
	nom_evento=$('#i2_nomevento').val();
	tip_evento=$('#i2_tipevento').val();
	sec_evento=$('#i2_sector').val();
	hora_ini=$('#i2_horainicio').val();
	hora_fin=$('#i2_horafin').val();
	capacidad=$('#i2_capacidad').val();
	fecha=$('#i2_fecha').val();
	cadena="id=" + id +"&nom=" + nom_evento + "&tevento=" + tip_evento + "&sec=" + sec_evento + "&hi=" + hora_ini + "&hf=" + hora_fin + "&fecha=" + fecha + "&capac=" + capacidad;
	$.ajax({
		type:"POST",
		url:"php/actualizaDatosEvento.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla_eventos_adm').load('componentes/tabla_eventos_adm.php');
				alertify.success("Datos actualizados exitosamente");
			}else{
				alertify.error("Ha ocurrido un problema");
			}
		}
	});

}

function preguntarSiNoEvento(id){ // confirmacion eliminar
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosEvento(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosEvento(id){ // borrar de tipo_evento

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatosEvento.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla_eventos_adm').load('componentes/tabla_eventos_adm.php');
					alertify.success("Registro eliminado exitosamente");
				}else{
					alertify.error("Ha ocurrido un problema");
				}
			}
		});
}



//////////////////// FIN FUNCIONES ADMINISTRACION eventos     /////////
//////////////////// FUNCIONES reporte visitas     ////////////////////////////
function filtra_fechas(fi, ff){ //

	cadena="inicio=" + fi + "&fin=" + ff;
	console.log(cadena)

		$.ajax({
			type:"POST",
			url:"componentes/tabla_rep_visitas.php",
			data:cadena,			
			success:function(r){
				if(r==1){
					$('#tabla_reporte').load('componentes/tabla_rep_visitas.php');
					alertify.success("Filtrado exitoso");
				}else{
					alertify.error("Ha ocurrido un problema");
				}
			}
		});
}


			
//////////////////// FIN reporte visitas     ////////////////////////////

//////////////////// FUNCIONES COMUNES     ////////////////////////////



//////////////////// FIN FUNCIONES COMUNES     ////////////////////////////


