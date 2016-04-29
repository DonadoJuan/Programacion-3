$(document).ready(function(){
	
	mostrar();
	
});

function ValidarCadena(cadenaAValidar){

	if(cadenaAValidar != null && cadenaAValidar!="")
		return true;
	else
		return false;
}

function ValidarNumero(valor){

	if(isNaN(valor))
		return false;
	else
		return true;
}

function MostrarErrores(arrayIdsErrores){

	$.each($('span'), function(id,value){
		$(this).hide();
	});
	for (var i = 0; i < arrayIdsErrores.length; i++) {
		$("#"+"error"+String(arrayIdsErrores[i])).show();
	}
}

function enviarDatos(){

	var cartelErrores ="";
	var hayError = false; 
	var arrayIdsErrores = [];

	$.each($('input'), function(id,value) {
		if(this.id != 'sexo')
			if(!ValidarCadena(this.value)){
				hayError = true;
				arrayIdsErrores.push(this.id);
				cartelErrores += "el " +this.id.toUpperCase()+ " es requerido!\n";
			}
			else
				if(this.id == 'dni' || this.id == 'legajo' || this.id == 'sueldo')
					if(!ValidarNumero(this.value)){
						hayError = true;
						arrayIdsErrores.push(this.id);
						cartelErrores += "el " +this.id.toUpperCase()+ " debe ser NUMERICO!\n";
					}

	});
	if(hayError){
		MostrarErrores(arrayIdsErrores);
		alert(cartelErrores);
	}
	else{

		var pagina = './Administracion.php';
		//var formData = new FormData();
		//formData.append("archivo", $('#foto')[0].files[0]);
    	var formData = new FormData($("#formulario")[0]);

    	$.ajax({
        	url: pagina,
        	type: 'POST',
        	data: formData,
        	async: true,
        	cache: false,
        	contentType: false,
        	processData: false
    	})
    	.done(function (respuesta){
    		$("#resultado").html(respuesta);
    		mostrar();
    	})
    	.fail(function (respuesta){
    		$("#resultado").html(respuesta);
    	});
	}

}

function eliminarEmpleado(legajo){

	if(!confirm("Esta seguro de querer eliminar el empleado?"))
		return;
	
	var data = {queHago: 'eliminar', legajo: legajo };
	$.ajax({
  		type: "POST",
  		url: "./Administracion.php",
  		data: data,
  		dataType: 'text'
	})
	.done(function (respuesta){
		mostrar();
	})
	.fail(function (respuesta){
    		alert(respuesta);
    });

}

function modificarEmpleado(legajo){

}

function mostrar(){

	var data = {queHago: 'mostrar'};
	$.ajax({
  		type: "POST",
  		url: "./Administracion.php",
  		data: data,
  		dataType: 'text'
	})
	.done(function (respuesta){
		$("#divListado").html(respuesta);
	})
	.fail(function (respuesta){
    	$("#divListado").html(respuesta);
    });
	
	
} 
	
	


