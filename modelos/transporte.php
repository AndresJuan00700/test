<?php

class transporte{
    private $placa;	
    private $codigo_medio_transporte;


	public function __construct( $placa,$codigo_medio_transporte){
	$this->placa=$placa;
	$this->codigo_medio_transporte=$codigo_medio_transporte;

	}

	public function getplaca(){
		return $this->placa;
	}

	public function setplaca($placa){
		$this->identificacion = $placa;
	} 

	public function getCodigoMT() { 
		return $this->codigo_medio_transporte; 
	}
	public function setCodigoMT($codigo_medios_transporte){
		$this->codigo_medio_transporte = $codigo_medios_transporte;
	} 



}