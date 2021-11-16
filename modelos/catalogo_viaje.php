<?php

class catalogo_viaje{
    
private $identificacion;
private $annorealizado;
private Array $rutas;

 	public function __construct($identificacion,$annorealizado){
		//Seinicializa el array
		$this->rutas = Array();

		$this->identificacion=$identificacion;
		$this->annorealizado=$annorealizado;

	}

	public function getidentificacion(){
		return $this->identificacion;
	}

	public function setIdentificacion($identificacion){
		$this->identficacion = $identificacion;
	} 
	public function getannorealizado(){
		return $this->annorealizado;
	}

	public function setannorealizado($annorealizado){
		$this->annorealizado = $annorealizado;
	} 
	public function getrutas(){
		return $this->rutas;
	}

	public function setRutas(ruta $rutas){
		array_push($this->rutas, $rutas);
	} 

}