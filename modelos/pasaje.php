<?php

class pasaje{
     private $tiquete;
    private $identificacion_viaje;
    private $cedula_funcionario;
    private $fecha_venta;

	public function __construct($tiquete, $identificacion_viaje,$cedula_funcionario, $fecha_venta){
	$this->tiquete=$tiquete;
	$this->identificacion_viaje=$identificacion_viaje;
	$this->cedula_funcionario=$cedula_funcionario;
	$this->fecha_venta=$fecha_venta;

	}

	public function gettiquete(){
		return $this->tiquete;
	}

	public function settiquete($tiquete){
		$this->tiquete = $tiquete;
	} 

	public function getidentificacion_viaje() { 
		return $this->identificacion_viaje; 
	}
	public function setidentificacion_viaje($identificacion_viaje){
		$this->identificacion_viaje = $identificacion_viaje;
	} 

	public function getcedula_funcionario() { 
		return $this->cedula_funcionario; 
	}
	public function setcedula_funcionario($cedula_funcionario){
		$this->cedula_funcionario = $cedula_funcionario;
	} 

	public function getfecha_venta() { 
		return $this->fecha_venta; 
	}
	public function setfecha_venta($fecha_venta){
		$this->fecha_venta = $fecha_venta;
	} 



}