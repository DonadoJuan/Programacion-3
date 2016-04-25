<?php

require_once("clases\producto.php");
$tituloVentana = "MODELO PRIMER PARCIAL - con archivos, AJAX, JQUERY y JSON -";
?>
<html>
<head>
	<title> <?php echo $tituloVentana; ?> </title>
	  
		<!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="./JavaScript/funciones.js"></script>
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="container">
		<div class="page-header">
			<h1>PRODUCTOS</h1>      
		</div>
		<div class="CajaInicio" style="width:1100px">
			<h1>MODELO PRIMER PARCIAL - con archivos, AJAX, JQUERY y JSON - </h1>
			<table>
				<tbody>
					<tr>
						<td width="50%">
							<div id="divFrm" style="height:250px;overflow:auto;margin-top:20px">
								<input type="text" placeholder="Ingrese c&oacute;digo de barras" />
								<input type="text" placeholder="Ingrese nombre" />
								<input type="file" id="archivo" onchange="SubirFoto()" /> 
								
								<input type="button" class="MiBotonUTN" onclick="AgregarProducto()" value="Guardar"  />
								<input type="hidden" id="hdnQueHago" value="agregar" />
							</div>
						</td>
						<td rowspan="2">
							<div id="divGrilla" style="height:610px;overflow:auto;border-style:solid">
								<br/><br/><h2>Mostrar grilla aqu&iacute;</h2>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div id="divFoto" style="height:350px;overflow:auto">
								<br/><br/><h2>Mostrar foto aqu&iacute;</h2>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>