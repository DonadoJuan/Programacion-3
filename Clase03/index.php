<?php

require "Fabrica.php";

$empleado1 = new Empleado("Donado",38613611,"Juan",'M',1043245,24000);
$empleado2 = new Empleado("sdfsdf",23423433,"sdfs",'F',5345345,68343);
$fabrica1 = new Fabrica(11111);

$fabrica1->agregarEmpleado($empleado1);

$fabrica1->agregarEmpleado($empleado2);

//$fabrica1->agregarEmpleado($empleado1);

echo $fabrica1->toString();

?>
