<?php

class transporte{
    private $placa;	
    private $codigo_medios_transporte;


public function __construct( $placa,$codigo_medios_transporte){
$this->placa=$placa;
$this->codigo_medios_transporte=$codigo_medios_transporte;

}

public function getplaca(){
	return $placa;
}

public function setplaca($placa){
	$this->identificacion = $placa;
} 

public function getnombre() { 
	return $this->nombre; 
}
public function setnombre($codigo_medios_transporte){
	$this->nombre = $codigo_medios_transporte;
} 



}