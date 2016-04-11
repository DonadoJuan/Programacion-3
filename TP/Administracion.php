<?php
require "Empleado.php";

if($_POST['nombre']!="")
	if($_POST['apellido']!="")
		if($_POST['sexo']!="")
			if($_POST['dni']!="")
				if($_POST['legajo']!="")
					if($_POST['sueldo']!="")
					{
						$uploadOk = true;
					    $destino = "fotos/" .$_FILES['archivo']['name'];
					    $tipoArchivo = pathinfo($destino, PATHINFO_EXTENSION);

						if (file_exists($destino)) {
    						echo "El archivo ya existe. Verifique!!!";
    						die();
						}

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
						$ar = fopen("ListaEmpleados.txt","a");
						fwrite($ar,$nuevoempleado->toString()."\r\n");
						fclose($ar);
						echo "<a href='Mostrar.php'> Ir a la lista de empleados</a>";
						die();

					}

echo "<a href='index.php'>Error, volver a la pagina principal</a>";

						
					

?>

