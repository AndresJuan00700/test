<?php

class catalogo_viaje{
    
private $identificacion;
private $annorealizado;
private Array $rutas;
 	public function __construct($identificacion,$annorealizado, Array $rutas){

$this->identificacion=$identificacion;
$this->annorealizado=$annorealizado;
$this->rutas=$rutas;

 }

 public function getidentificacion(){
	return $identificacion;
}

public function setidentificacion($identificacion){
	$this->identficacion = $identificacion;
} 
public function getannorealizado(){
	return $annorealizado;
}

public function setannorealizado($annorealizado){
	$this->annorealizado = $annorealizado;
} 
public function getrutas(){
	return $rutas;
}

public function setIdentificacion( Array $rutas){
	$this->rutas = $rutas;
} 

}