<?php

class asignacion{
    private $identificacion;
    private $cedula_empleado;
    private $fecha;
    private $placa_transporte;

public function __construct($identificacion, $cedula_empleado,$fecha, $placa_transporte){
$this->identificacion=$identificacion;
$this->cedula_empleado=$cedula_empleado;
$this->fecha=$fecha;
$this->placa_transporte=$placa_transporte;

}

public function getIdentificacion(){
	return $identificacion;
}

public function setIdentificacion($identificacion){
	$this->identficacion = $identificacion;
} 

public function getcedula_empleado() { 
	return $this->cedula_empleado; 
}
public function setcedula_empleado($cedula_empleado){
	$this->cedula_empleado = $cedula_empleado;
} 

public function getfecha() { 
	return $this->fecha; 
}
public function setfecha($fecha){
	$this->fecha = $fecha;
} 

public function getplaca_transporte() { 
	return $this->placa_transporte; 
}
public function setplaca_transporte($placa_transporte){
	$this->placa_transporte = $placa_transporte;
} 

}


