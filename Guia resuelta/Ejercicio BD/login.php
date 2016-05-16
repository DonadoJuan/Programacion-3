<html>
<head>
	<title>LOGIN - PDO</title>
	  
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
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php     
//	require_once("clases\AccesoDatos.php");
//	require_once("clases\Usuario.php");

?>
	<div class="container">
		<div class="page-header">
			<h1>LOGIN</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>LOGIN - PDO </h1>

			<form id="FormIngreso" method="post">
				<input type="text" name="numero" placeholder="E-mail" value="" />
				<input type="password" name="nombre" placeholder="Password" value="" />

				<input type="button" class="btn btn-danger" value="LOGIN" onclick="alert('implementar login!!!')" />
				

			</form>
		</div>
	</div>
</body>
</html>