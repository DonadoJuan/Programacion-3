<?php
require "Empleado.php";

$archivo=fopen("ListaEmpleados.txt", "r");
		
while(!feof($archivo))
{
	$archAux = fgets($archivo);
	$empleados = explode("-", $archAux);
	$empleados[0] = trim($empleados[0]);
	if($empleados[0] != "")
	{
	$ListaEmpleados[] = new Empleado($empleados[0],$empleados[1],$empleados[2],
	$empleados[3],$empleados[4],$empleados[5],$empleados[6]);
	//$listaEmpleados[]->SetPathFoto = $empleados[6];
	}
}
fclose($archivo);
?>

<!DOCTYPE html>
<html>
<body>

<table border="2" style="width:40%" >
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>		
    <th>sexo</th>
    <th>DNI</th>
    <th>LU</th>
    <th>Sueldo</th>
    <th>Foto</th>
  </tr>
<?php
foreach($ListaEmpleados as $valor){

	echo"<tr>
    	<td>".$valor->getNombre()."</td>
    	<td>".$valor->getApellido().".</td>		
    	<td>".$valor->getSexo()."</td>
    	<td>".$valor->getDni()."</td>
    	<td>".$valor->getLegajo()."</td>
    	<td>".$valor->getSueldo()."</td>
    	<td><img src=".$valor->getPathFoto()."style='width:50px;height:70px;'></td>
		</tr>";
}
?>

</table>

</body>
</html>