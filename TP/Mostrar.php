<?php
include_once('Fabrica.php');

$fabrica = new Fabrica("1");

?>

<!DOCTYPE html>
<html>
<head>
<script src="Scripts/Funciones.js"></script>
<script src="Scripts/Jquery.js"></script>
</head>
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
    <th>Accion</th>
  </tr>
<?php
if(!empty($fabrica->toArray()))
    foreach($fabrica->toArray() as $valor){
    echo"<tr>
        <td>".$valor->getNombre()."</td>
        <td>".$valor->getApellido()."</td>     
        <td>".$valor->getSexo()."</td>
        <td>".$valor->getDni()."</td>
        <td>".$valor->getLegajo()."</td>
        <td>".$valor->getSueldo()."</td>
        <td><img src=".$valor->getPathFoto()."style='width:50px;height:70px;'></td>
        <td>
        <input type='button' id='btnModificar' onclick='eliminarEmpleado(".$valor->getLegajo().")' value='Modificar'></input></td>
        <td><input type='button' id='btnEliminar' onclick='eliminarEmpleado(".$valor->getLegajo().")' value='Eliminar'></input></td>
        </tr>";
}
else{
    echo "<h2> No hay empleados en la lista </h2>";
}

?>

</table>

</body>
</html>