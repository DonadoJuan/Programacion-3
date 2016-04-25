<!DOCTYPE html>
<html>
<head>
<title>Programacion III TP pt2</title>
<script src="Scripts/Funciones.js"></script>
<script src="Scripts/Jquery.js"></script>
</head>
<body>

<form  action="/">
Nombre:<br>
<input id="nombre" type="text" name="nombre">
<span id="errorNombre" style="display: none; color: red; font-size: 25px" > * </span>
<br>

Apellido:<br>
<input id="apellido" type="text" name="apellido">
<span id="errorApellido" style="display: none; color: red; font-size: 25px" > * </span>
<br>

Sexo:<br>
<input id="sexo" type="radio" name="sexo" value="M" checked> Hombre</input> <br>
<input type="radio" name="sexo" value="F"> Mujer </input> <br>

DNI:<br>
<input id="dni" type="text" name="dni">
<span id="errorDni" style="display: none; color: red; font-size: 25px" > * </span>
<br>

Legajo:<br>
<input id="legajo" type="text" name="legajo">
<span id="errorLegajo" style="display: none; color: red; font-size: 25px" > * </span>
<br>

Sueldo:<br>
<input id="sueldo" type="text" name="sueldo">
<span id="errorSueldo" style="display: none; color: red; font-size: 25px" > * </span>
<br>

Foto carnet:<br>
<input id="foto" type="file" name="archivo" >
<span id="errorFoto" style="display: none; color: red; font-size: 25px" > * </span>
<br>
</form>

<input type="button" value="Enviar" onclick="enviarDatos()"></input>


</body>
</html>


