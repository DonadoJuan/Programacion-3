<?php

$array1 = array('Lagartija' => 'reptil' , 'Araña' => 'aracnido', 'Perro' => 'mamifero',
	'Gato' => 'mamifero', 'Raton' => 'roedor' );

$array2 = array('12' => 'numero par' , '34' => 'numero par', '45' => 'numero impar',
	'52' => 'numero par', '12' => 'numero par' );

$array3 = array('Sauce' => 'tipo de arbol' , 'Pino' => 'tipo de Arbol', 'Naranjo' => 'tipo de arbol','Quilmes' => 'cerveza', 'Perro' => 'mamifero' );

$resultado = array();
foreach($array1 as $x)
{
	array_push($resultado,$x);
}

print_r($resultado);

?>