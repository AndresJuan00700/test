<?php

use PhpParser\Node\Expr\Cast\Array_;

class ruta{
    private $codigo;	
    private $identificacion_catalogos;
    private $identificacion_origen;
    private $identificacion_destino;
    private $forma_ruta;
    private $precio;
	private Array $detalle_ruta;

	public function __construct($codigo, $identificacion_catalogos,$identificacion_origen, $identificacion_destino,$forma_ruta,$precio){	
	//Se inicializa el array
	$this->detalle_ruta=Array();

	$this->codigo=$codigo;
	$this->identificacion_catalogos=$identificacion_catalogos;
	$this->identificacion_origen=$identificacion_origen;
	$this->identificacion_destino=$identificacion_destino;
	$this->forma_ruta=$forma_ruta;
	$this->precio=$precio;	

	}

	public function getcodigo(){
		return $this->codigo;
	}

	public function setcodigo($codigo){
		$this->codigo = $codigo;
	} 

	public function getidentificacion_catalogos() { 
		return $this->identificacion_catalogos; 
	}
	public function setcedula_empleado($identificacion_catalogos){
		$this->identificacion_catalogos = $identificacion_catalogos;
	} 

	public function getidentificacion_origen() { 
		return $this->identificacion_origen; 
	}
	public function setidentificacion_origen($identificacion_origen){
		$this->identificacion_origen = $identificacion_origen;
	} 

	public function getidentificacion_destino() { 
		return $this->identificacion_destino; 
	}
	public function setidentificacion_destino($identificacion_destino){
		$this->identificacion_destino = $identificacion_destino;
	}     
	public function getforma_ruta() { 
		return $this->forma_ruta; 
	}
	public function setforma_ruta($forma_ruta){
		$this->forma_ruta = $forma_ruta;
	} 
	public function getprecio() { 
		return $this->precio; 
	}
	public function setprecio($precio){
		$this->precio= $precio;
	} 

	public function getDetalleRuta(){
		return $this->detalle_ruta;
	}

	public function setDetalleRuta(detalle_ruta $detalle){		
		array_push($this->detalle_ruta, $detalle);
	} 

}