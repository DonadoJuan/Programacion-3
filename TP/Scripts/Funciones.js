

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

	for (var i = 0; i < arrayIdsErrores.length; i++) {
		$("#"+String(arrayIdsErrores[i])).show();
	}
}

function enviarDatos(){

	var cartelErrores ="";
	var hayError = false; 
	var arrayIdsErrores = [];

	$.each($('input'), function(id,value) {
		alert(this.value);
		if(!ValidarCadena($(this).val()){
			hayError = true;
			arrayIdsErrores.push(this.id);
			cartelErrores += "el" +this.id.toUpperCase()+ " es requerido!\n";

		}
	});

	alert(cartelErrores);
	
	

}
