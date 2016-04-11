<?php

require "Persona.php";

class Empleado extends Persona
{
	private $_legajo;
	private $_sueldo;
	private $_pathFoto;

	public function __construct($nombre,$apellido,$sexo,$dni,$legajo,$sueldo,$pathfoto)
	{
		parent::__construct($nombre,$apellido,$sexo,$dni);
		$this->_legajo = $legajo;
		$this->_sueldo = $sueldo;
		$this->_pathFoto = $pathfoto;
	}

	public function getLegajo()
	{
		return $this->_legajo;
	}

	public function getSueldo()
	{
		return $this->_sueldo;
	}

	public function toString()
	{
		return parent::toString()."-".$this->_legajo."-".$this->_sueldo."-".$this->_pathFoto;
	}

	public function hablar($idioma)
	{
		if($idioma == "Español")
			return "El empleado habla español";
	}

	public function __toString()
	{
		return (string)$this->_legajo;
	}

	public function GetPathFoto()
	{
		return $this->_pathFoto;
	}

	public function SetPathFoto($pathfoto)
	{
		$this->_pathFoto = $pathfoto;
	}


}

?>
