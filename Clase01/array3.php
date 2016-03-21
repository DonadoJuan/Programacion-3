<?php

$array1 = array('Lagartija' => 'reptil' , 'Araña' => 'aracnido', 'Perro' => 'mamifero',
	'Gato' => 'mamifero', 'Raton' => 'roedor' );

$array2 = array('12' => 'numero par' , '34' => 'numero par', '45' => 'numero impar',
	'52' => 'numero par', '12' => 'numero par' );

$array3 = array('Sauce' => 'tipo de arbol' , 'Pino' => 'tipo de Arbol', 'Naranjo' => 'tipo de arbol','Quilmes' => 'cerveza', 'Perro' => 'mamifero' );

$resultado = array_merge($array1,$array2,$array3);
print_r($resultado);

?>