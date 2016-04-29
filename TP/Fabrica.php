<?php

include_once('Empleado.php');

class Fabrica
{
	private $_empleados = array();
	private $_razonSocial;

	public function __construct($razonSocial)
	{
		$this->_razonSocial = $razonSocial;
		$this->obtenerEmpleadosTxt();
	}

	public function agregarEmpleado($empleado)
	{
		array_push($this->_empleados,$empleado);	
		if($this->eliminarEmpleadosRepetidos())
			return false;
		else
			return true;

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
			if($value == $empleado){
				unset($this->_empleados[$clave]);
				return true;
			}
		}
		return false;
	}

	private function eliminarEmpleadosRepetidos()
	{
		if($this->_empleados != array_unique($this->_empleados))
			return true;
		else
			return false;
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

	private function obtenerEmpleadosTxt(){

		$ar = fopen("ListaEmpleados.txt", "r");
		while(!feof($ar)){

			$archAux = fgets($ar);
			$empleadoaux = explode("-", $archAux);
			$empleadoaux[0] = trim($empleadoaux[0]);

			if($empleadoaux[0] != ""){

				$empleado = new Empleado($empleadoaux[0],$empleadoaux[1],$empleadoaux[2],
				$empleadoaux[3],$empleadoaux[4],$empleadoaux[5],$empleadoaux[6]);
				$this->agregarEmpleado($empleado);
			}
		}
		fclose($ar);
	}

	public static function guardar($fabrica){

		$ar = fopen("ListaEmpleados.txt","w");
		foreach($fabrica->_empleados as $empleado){
			fwrite($ar,$empleado->toString()."\r\n");
		}
		fclose($ar);		
	}

	public function toArray(){

		return $this->_empleados;
	}

}

?>