<?php

class destino{
    
private $identificacion;
private $nombre;

 	public function __construct($identificacion,$nombre){
		$this->identificacion=$identificacion;
		$this->nombre=$nombre;
	}

	public function getidentificacion(){
		return $this->identificacion;
	}

	public function setidentificacion($identificacion){
		$this->identificacion = $identificacion;
	} 
	public function getnombre(){
		return $this->nombre;
	}

	public function setnombre($nombre){
		$this->nombre = $nombre;
	} 



}