
function validar(){

	var mail = $("#mail").val();
	var password = $("#password").val();


	if( mail != "" && password !=""){

		var datos = { 'mail' : mail, 'password' : password }

		$.ajax({

			url : 'administracion.php',
			data: datos,
			dataType: 'text',
			type: 'POST'
		})
		.done(function(resultado){
			alert(resultado);
		})
		.fail(function(error){
			alert("El error es " + error);
		});

	}else{

		alert("Error en los datos ingresados!");
	}

}