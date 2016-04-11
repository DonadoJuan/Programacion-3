<?php

abstract class persona
{
	private $_apellido;
	private $_dni;
	private $_nombre;
	private $_sexo;

	public function __construct($nombre,$apellido,$sexo,$dni)
	{
		$this->_apellido = $apellido;
		$this->_dni = $dni;
		$this->_nombre = $nombre;
		$this->_sexo = $sexo;
	}

	function getApellido()
	{
		return $this->_apellido;
	}

	function getDni()
	{
		return $this->_dni;
	}

	function getNombre()
	{
		return $this->_nombre;
	}

	function getSexo()
	{
		return $this->_sexo;
	}

	abstract function hablar($idioma);

	function toString()
	{
		$string = $this->_apellido."-".$this->_nombre."-". $this->_sexo."-".$this->_dni;
		return $string;
	}



}

?>