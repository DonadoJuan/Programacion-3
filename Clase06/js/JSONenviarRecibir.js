function enviarJSON(){

	//CREO UN OBJETO JSON
	var persona = { "nombre" : "Juan", "edad" : 35 };
	var pagina = "JSON/json_test_enviar.php";
	
    $.ajax({
        type: 'POST',//GET o POST. GET DEFAULT.
        url: pagina,//PAGINA DESTINO DE LA PETICION
        dataType: "text",//INDICA EL TIPO QUE SE ESPERA RECIBIR DESDE EL SERVIDOR (XML, HTML, TEXT, JSON, SCRIPT) 
        data: {miPersona : persona},//DATO A SER ENVIADO AL SERVIDOR. TIPO: OBJETO, STRING, ARRAY.
        async: true//ESTABLECE EL MODO DE PETICION. DEFECTO ASINCRONICO.
    })
	.done(function (resultado) {//RECUPERO LA RESPUESTA DEL SERVIDOR EN 'RESULTADO', DE ACUERDO AL DATATYPE.
		$("#divResultado").html(resultado);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    }); 	

}

function recibirJSON(){

	var pagina = "JSON/json_test_recibir.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        async: true
    })
	.done(function (resultado) {//RECUPERO LA RESPUESTA DEL SERVIDOR EN 'RESULTADO', DE ACUERDO AL DATATYPE.
		alert(resultado);
		alert(resultado.nombre);
		var objJson = JSON.parse(resultado);
		alert(objJson.nombre);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    }); 	

}