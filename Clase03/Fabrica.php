<?php

require "Empleado.php";

class Fabrica
{
	private $_empleados = array();
	private $_razonSocial;

	public function __construct($razonSocial)
	{
		$this->_razonSocial = $razonSocial;
	}

	public function agregarEmpleado($empleado)
	{
		array_push($this->_empleados,$empleado);
		$this->eliminarEmpleadosRepetidos();
	}

	public function calcularSueldos()
	{
		$total=0;

		foreach($this->_empleados as $valor)
		{
			$total+=$valor->getSueldo();
		}
		return $total;
	}

	public function eliminarEmpleado($empleado)
	{
		foreach($this->_empleados as $clave => $value)
		{
			if($value == $empleado)
				unset($this->_empleados[$clave]);
		}
	}

	private function eliminarEmpleadosRepetidos()
	{
		$this->_empleados = array_unique($this->_empleados);
	}

	public function toString()
	{
		$stringtotal="";

		foreach($this->_empleados as $valor)
		{
			$stringtotal .= $valor->toString(); 

		}

		$stringtotal.= "-".$this->_razonSocial;

		return $stringtotal;
	}




}

?>