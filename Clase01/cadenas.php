<?php

$Nombre = "Ricardo";
$Apellido = "Fort";

echo "Cantidad de letras de nombre: ".strlen ($Nombre);
echo "<br>Cantidad de letras de apellido: ".strlen ($Apellido);

echo "<br>Nombre en minuscula: ". strtolower($Nombre); 
echo "<br>Nombre en mayuscula: ". strtoupper($Nombre);
echo "<br>Nombre con primer letra en mayus: ". ucfirst($Nombre);
echo "<br>Nombre y apellido con primer letra en mayus: ". $Nombre." ". ucfirst($Apellido);
echo "<br> Primeras 3 letras de apellido: ". substr($Apellido,0,3);
echo "<br> Ultimas 2 letras de nombre: ". substr($Nombre,5);












?>