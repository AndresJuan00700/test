<?php

class tipo_empleado{
    private $codigo;	
    private $nombre;


public function __construct( $codigo,$nombre){
$this->codigo=$codigo;
$this->nombre=$nombre;

}

public function getcodigo(){
	return $codigo;
}

public function setcodigo($codigo){
	$this->identificacion = $codigo;
} 

public function getnombre() { 
	return $this->nombre; 
}
public function setnombre($nombre){
	$this->nombre = $nombre;
} 



}