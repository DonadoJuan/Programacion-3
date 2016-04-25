<?php
header("charset: ISO-8859-1");
/*
echo '[{"nombre": "Susana","Edad":36,"Peso": null },
	  {"nombre": "Andrea","Edad":25,"Peso": 72 }] ';
*/

$persona = array();
$persona["nombre"] = "Juan";
$persona["edad"] = 66;

$objJson = json_encode($persona);

var_dump($objJson);

?>
		<a href="../index.html"  class="btn btn-info">Men&uacute;</a>
