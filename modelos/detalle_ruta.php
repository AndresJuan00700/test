<?php

class detalle_ruta{
    
private $identificacion_ruta;
private $codigo_destino;

 	public function __construct($identificacion_ruta,$codigo_destino){

		$this->identificacion_ruta=$identificacion_ruta;
		$this->codigo_destino=$codigo_destino;

	}

	public function getidentificacion_ruta(){
		return $this->identificacion_ruta;
	}

	public function setidentificacion_ruta($identificacion_ruta){
		$this->identificacion_ruta = $identificacion_ruta;
	} 
	public function getcodigo_destino(){
		return $this->codigo_destino;
	}

	public function setcodigo_destino($codigo_destino){
		$this->codigo_destino = $codigo_destino;
	} 

}
