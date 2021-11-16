<?php

class empleado{
    private $cedula;
    private $codigo_tipo_empleado;
    private $nombres;
    private $apellidos;
	private Array $comunicacion;

	public function __construct($cedula, $codigo_tipo_empleado,$nombres, $apellidos){
		//Se inicializa el array
		$this->comunicacion = Array();

		$this->cedula=$cedula;
		$this->codigo_tipo_empleado=$codigo_tipo_empleado;
		$this->nombres=$nombres;
		$this->apellidos=$apellidos;
		
	}

	public function getcedula(){
		return $this->cedula;
	}

	public function setcedula($cedula){
		$this->cedula = $cedula;
	} 

	public function getcodigo_tipo_empleado() { 
		return $this->codigo_tipo_empleado; 
	}
	public function setcodigo_tipo_empleado($codigo_tipo_empleado){
		$this->codigo_tipo_empleado = $codigo_tipo_empleado;
	} 

	public function getnombres() { 
		return $this->nombres; 
	}
	public function setnombres($nombres){
		$this->nombres = $nombres;
	} 

	public function getapellidos() { 
		return $this->apellidos; 
	}
	public function setapellidos($apellidos){
		$this->apellidos = $apellidos;
	} 

	public function getComunicacion(){
		return $this->comunicacion;
	}

	public function setComunicacion(comunicacion $comunicacion){
		array_push($this->comunicacion, $comunicacion);
	}


}