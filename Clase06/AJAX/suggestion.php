<?php

?>
<html>
<head>
	<title>Ejemplos Pr&aacute;tico con AJAX</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--final de Estilos-->
		   <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../estilo.css"/>
		
		<script type="text/javascript" >
			
			function Suggestion(cadena){
			
				if (cadena.length == 0) { 
					document.getElementById("divNombresSugeridos").innerHTML = "";
					return;
				}
				
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						var sugerencias = xmlhttp.responseText;
						sugerencias = sugerencias == "" ? "Sin Sugerencias..." : sugerencias;
						document.getElementById("divNombresSugeridos").innerHTML = sugerencias;
					}
				}
				
				xmlhttp.open("POST", "obtenerSugerencia.php", true);
				xmlhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
				xmlhttp.send("palabra="+cadena);
				
			}
		</script>
</head>
<body>
		<a href="../index.html"  class="btn btn-info">Men&uacute;</a>
		<div class="container">
		<div class="page-header">
			<div class="CajaInicio animated bounceInRight">
				<h1>Ingrese su nombre</h1>
				<input type="text" id="txtNombre" style="width:100%;font-size:30px" onkeyup="Suggestion(this.value)" />
			</div>
				  
			<div class="CajaInicio animated bounceInRight">
				<h1>NOMBRES SUGERIDOS</h1>
				<div id="divNombresSugeridos" style="font-size:50px"></div>
			</div>
			
		</div>
		
	</div>
</body>
</html>