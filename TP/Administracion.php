<?php
include_once('Empleado.php');
include_once('Fabrica.php');

$fabrica = new Fabrica("1");
$queHago = $_POST['queHago'];

switch($queHago){
	case "modificar": foreach($fabrica->toArray() as $item->$clave){
						if($item->getLegajo() == $_POST['legajo']){
							$_POST['nombre'] = $item->getNombre();
							
					 		
						}
					 }	
	break; 

	case "agregar":	if(!isset($_FILES['archivo'])){
						echo "el indice de archivo esta vacio vieja!";
							die();
						}

						$destino = "fotos/" .$_FILES['archivo']['name'];
						$tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);

						if(getimagesize($_FILES["archivo"]["tmp_name"])=== false){
							echo "El archivo no es una imagen!";
							die();	
						}

						if ($_FILES["archivo"]["size"] > 100000) {
							echo "El archivo es demasiado grande. Verifique!!!";
							die();
						}

						if($tipoArchivo != "jpg" && $tipoArchivo != "bmp" && $tipoArchivo != "gif"
							&& $tipoArchivo != "png" && $tipoArchivo != "jpeg") {
							echo "Extension de imagen no soportada";
							die();
						}
						$destino = "fotos/" .$_POST['dni'].$_POST['apellido'].".".$tipoArchivo;

						if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $destino)) {
							echo "<br/>El archivo ". basename( $_FILES["archivo"]["name"]). " ha sido subido exitosamente.";
						}
						else {
							echo "<br/>No se pudo subir el archivo";
							die();
						}

						$nuevoempleado = new Empleado($_POST['nombre'],$_POST['apellido'],$_POST['sexo'],
						$_POST['dni'],$_POST['legajo'],$_POST['sueldo'],$destino);	

							if($fabrica->agregarEmpleado($nuevoempleado)){
								Fabrica::guardar($fabrica);
							}
							else
								echo "<h3>Error en la carga!</h3>";
	break;

	case "eliminar": foreach($fabrica->toArray() as $item){
						if($item->getLegajo() == $_POST['legajo']){
							$fabrica->eliminarEmpleado($item);
					 		Fabrica::guardar($fabrica);
					 		echo "Empleado eliminado!";
						}
					 }
	break;
	case "mostrar": 
					  $mostrar ="";
					  $mostrar .= "<table border='2' style='width:40%'>
					  <tr>
					    <th>Nombre</th>
					    <th>Apellido</th>       
					    <th>sexo</th>
					    <th>DNI</th>
					    <th>LU</th>
					    <th>Sueldo</th>
					    <th>Foto</th>
					    <th>Accion</th>
					  </tr>";
					  	
						if(!empty($fabrica->toArray()))
						    foreach($fabrica->toArray() as $valor){
						    $mostrar.="<tr>
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
						    $mostrar.= "<h2> No hay empleados en la lista </h2>";
						}
						$mostrar.= "</table>";
						echo $mostrar;
						break;

	default: echo "queHago no esta seteado";						
}
?>

