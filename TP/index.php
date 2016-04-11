<!DOCTYPE html>
<html>
<head>
<title>Programacion III TP pt2</title>
<!--<link rel="stylesheet" type="text/css" href="mystyle.css">-->
</head>
<body>

<form action="Administracion.php" enctype="multipart/form-data" method="post">
Nombre:<br>
<input type="text" name="nombre"><br>

Apellido:<br>
<input type="text" name="apellido"><br>

Sexo:<br>
<input type="radio" name="sexo" value="M" checked> Hombre</input> <br>
<input type="radio" name="sexo" value="F"> Mujer </input> <br>

DNI:<br>
<input type="text" name="dni"><br>

Legajo:<br>
<input type="text" name="legajo"><br>

Sueldo:<br>
<input type="text" name="sueldo"><br>

Foto carnet:<br>
<input type="file" name="archivo" ><br>
<input type="submit" value="Enviar">
</form>


</body>
</html>


