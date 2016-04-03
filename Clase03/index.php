<?php
/*
require "Fabrica.php";

$empleado1 = new Empleado("Donado",38613611,"Juan",'M',1043245,24000);
$empleado2 = new Empleado("Gonzalez",38613612,"Cristian",'M',1023267,12000);
$fabrica1 = new Fabrica(99999);

$fabrica1->agregarEmpleado($empleado1);

$fabrica1->agregarEmpleado($empleado2);

$fabrica1->agregarEmpleado($empleado1);

$fabrica1->agregarEmpleado($empleado2);

$fabrica1->eliminarEmpleado($empleado1);

echo $empleado1->toString();
echo $empleado2->toString();
echo $fabrica1->calcularSueldos();
echo $fabrica1->toString();
*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Programacion III TP pt2</title>
<!--<link rel="stylesheet" type="text/css" href="mystyle.css">-->
</head>
<body>

<form action="Administracion.php" method="post">
Nombre:<br>
<input type="text" name="nombre"><br>

Apellido:<br>
<input type="text" name="apellido"><br>

Sexo:<br>
<input type="radio" name="gender" value="male" checked> Hombre</input> <br>
<input type="radio" name="gender" value="female"> Mujer </input> <br>

DNI:<br>
<input type="text" name="dni"><br>

Legajo:<br>
<input type="text" name="legajo"><br>

Sueldo:<br>
<input type="text" name="sueldo"><br>

<input type="submit" value="Enviar">

</form>


</body>
</html>

<?
