<?php

require "Persona.php";

class Empleado extends Persona
{
	private $_legajo;
	private $_sueldo;

	public function __construct($apellido,$dni,$nombre,$sexo,$legajo,$sueldo)
	{
		parent::__construct($apellido,$dni,$nombre,$sexo);
		$this->_legajo = $legajo;
		$this->_sueldo = $sueldo;
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
		return parent::toString()."-".$this->_legajo."-".$this->_sueldo;
	}

	public function hablar($idioma)
	{
		if($idioma == "Español")
			return "El empleado habla español";
	}


}

?>
