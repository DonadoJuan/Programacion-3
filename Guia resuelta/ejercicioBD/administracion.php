<?php

require_once 'clases/AccesoDatos.php';

$mailIngresado = $_POST['mail'] != NULL ? $_POST['mail'] : NULL;
$passwordIngresado = $_POST['password'] != NULL ? $_POST['password'] : NULL;  

$pdo = AccesoDatos::DameUnObjetoAcceso("test_pdo");

$sentencia = $pdo->RetornarConsulta('SELECT id,mail,password,estado FROM login');

$sentencia->execute();

$sentencia->bindColumn('id',$id,PDO::PARAM_INT);
$sentencia->bindColumn('mail',$mail,PDO::PARAM_STR);
$sentencia->bindColumn('password',$password,PDO::PARAM_STR);

while($fila = $sentencia->fetch(PDO::FETCH_BOUND)){

	if($mail == $mailIngresado && $password == $passwordIngresado){
		echo "Login CORRECTO!";
		die();
	}

}

echo "Login incorrecto!";



?>