<?php

class tipo_comunicacion{
    private $identificacion;	
    private $identificacion_asignaciones;
    private $codigo_ruta;
    private $fecha;
public function __construct( $identificacion,$identificacion_asignaciones,$codigo_ruta,$fecha){
$this->identificacion=$identificacion;
$this->identificacion_asignaciones=$identificacion_asignaciones;
$this->codigo_ruta=$codigo_ruta;
$this->fecha=$fecha;
}

public function getidentificacion(){
	return $identificacion;
}

public function setidentificacion($identificacion){
	$this->identificacion = $identificacion;
} 

public function getidentificacion_asignaciones() { 
	return $this->identificacion_asignaciones; 
}
public function setemail($identificacion_asignaciones){
	$this->email = $identificacion_asignaciones;
} 

public function getcodigo_ruta() { 
	return $this->codigo_ruta; 
}
public function setcodigo_ruta($codigo_ruta){
	$this->contraseña = $codigo_ruta;
} 
public function getfecha() { 
	return $this->fecha; 
}
public function setcodigo_ruta($fecha){
	$this->contraseña = $fecha;
} 


}