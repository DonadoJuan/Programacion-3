/*1.	Para el departamento de facturación:
A.	Ingresar tres precios de productos y mostrar la suma de los mismos.
B.	Ingresar tres precios de productos y mostrar el promedio de los mismos.
C.	ingresar tres precios de productos  y mostrar precio final (más IVA 21%).
*/
function validarElemento(ele)
{
	if(ele != "" && !isNaN(ele) )
		return true;
	else
		return false;

}

function Sumar () 
{
	var precio1 = document.getElementById("PrecioUno");
	var precio2 = document.getElementById("PrecioDos");
	var precio3 = document.getElementById("PrecioTres");

	if(validarElemento(precio1.value)&&validarElemento(precio2.value)&&validarElemento(precio3.value)){
		var suma = parseInt(precio1.value)+parseInt(precio2.value)+parseInt(precio3.value)
		alert('La suma es '+suma);
	}
	else
		alert("Error en los datos");
}

function Promedio () 
{
	var prom =(parseInt(PrecioUno.value)+parseInt(PrecioDos.value)+parseInt(PrecioTres.value))/3;
	alert('El promedio es '+prom);	
}


function PrecioFinal () 
{
	var suma = parseInt(PrecioUno.value)+parseInt(PrecioDos.value)+parseInt(PrecioTres.value);
	var iva = (21*suma)/100;
	preciofinal = suma + iva;
	alert('El precio final es '+preciofinal);
}