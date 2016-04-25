$(document).ready(function(){
	
	MostrarGrilla();
	
});

function MostrarGrilla(){

	alert("Implementar MostrarGrilla()...");
	
}

function SubirFoto(){
	
    var pagina = "./administracion.php";
	var foto = $("#archivo").val();
	
	if(foto === "")
	{
		return;
	}
	
	alert("Implementar Archivo::Subir()");
	
	var archivo = $("#archivo")[0];
	var formData = new FormData();
	formData.append("archivo",archivo.files[0]);
	formData.append("queHago", "subirFoto");

	$.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
		cache: false,
		contentType: false,
		processData: false,
        data: formData,
        async: true
    })
	.done(function (objJson) {

		if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}
		$("#divFoto").html(objJson.Html);
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });   
}

function BorrarFoto(){

	var pagina = "./administracion.php";
	var foto = $("#hdnArchivoTemp").val();
	
	if(foto === "")
	{
		alert("No hay foto que borrar!!!");
		return;
	}
	
	alert("Implementar BorrarFoto...");
	
	return;
}

function AgregarProducto(){
	
    var pagina = "./administracion.php";
	var codBarra = $("#codBarra").val();
	var nombre = $("#nombre").val();
	var archivo = $("#hdnArchivoTemp").val();
	var queHago = $("#hdnQueHago").val();
	
	var producto = {};
	producto.nombre = nombre;
	producto.codBarra = codBarra;
	producto.archivo = archivo;

	if(!Validar(producto)){
		alert("Debe completar TODOS los campos!!!");
		return;
	}

	alert("Implementar case \"agregar\"");
	
    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
        data: {
			queHago : queHago,
			producto : producto
		},
        async: true
    })
	.done(function (objJson) {
		
		if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}
		
		alert(objJson.Mensaje);
		
		BorrarFoto();
		
		$("#codBarra").val("");
		$("#nombre").val("");
		
		MostrarGrilla();

		if(queHago !== "agregar"){
			$("#hdnQueHago").val("agregar");
			$("#codBarra").removeAttr("readonly");
		}
		
	})
	.fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });    
		
}

function EliminarProducto(producto){
	
	if(!confirm("Desea ELIMINAR el PRODUCTO "+producto.nombre+"??")){
		return;
	}
	
	alert("Implementar EliminarProducto....");
}
function ModificarProducto(objJson){

	$("#codBarra").val(objJson.codBarra);
	$("#nombre").val(objJson.nombre);

	$("#hdnQueHago").val("modificar");	
	$("#codBarra").attr("readonly", "readonly");
	
	alert("Implementar case \"modificar\"");
}

function Validar(objJson){

	alert("Implementar validaciones...");

	return true;
}