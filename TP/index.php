<!DOCTYPE html>
<html>
<head>
<title>Programacion III TP pt2</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="Scripts/Funciones.js"></script>
</head>

	<body>

		<form enctype="multipart/form-data" method="post" id="formulario" name="formulario ">
			Nombre:<br>
			<input id="nombre" type="text" name="nombre">
			<span id="errornombre" style="display: none; color: red; font-size: 25px" > * </span>
			<br>

			Apellido:<br>
			<input id="apellido" type="text" name="apellido">
			<span id="errorapellido" style="display: none; color: red; font-size: 25px" > * </span>
			<br>

			Sexo:<br>
			<input id="sexo" type="radio" name="sexo" value="M" checked> Hombre</input> <br>
			<input type="radio" name="sexo" value="F"> Mujer </input> <br>

			DNI:<br>
			<input id="dni" type="text" name="dni">
			<span id="errordni" style="display: none; color: red; font-size: 25px" > * </span>
			<br>

			Legajo:<br>
			<input id="legajo" type="text" name="legajo">
			<span id="errorlegajo" style="display: none; color: red; font-size: 25px" > * </span>
			<br>

			Sueldo:<br>
			<input id="sueldo" type="text" name="sueldo">
			<span id="errorsueldo" style="display: none; color: red; font-size: 25px" > * </span>
			<br>

			Foto carnet:<br>
			<input id="foto" type="file" name="archivo" >
			<span id="errorfoto" style="display: none; color: red; font-size: 25px" > * </span>
			<br>

			<input id="queHago" type="hidden" value="agregar" name="queHago">

		</form>

		<input type="button" value="Enviar" onclick="enviarDatos()"></input>
		<div id="resultado"> respuesta del servidor: </div>
		<div id="divListado" style="margin:auto ; position:absolute; top: 8px; right: 16px"></div>
		
	</body>
</html>



