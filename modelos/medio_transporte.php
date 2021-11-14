<?php

class medio_transporte{
private $codigo;
private $nombre;

 	public function __construct($codigo,$nombre){

$this->codigo=$codigo;
$this->nombre=$nombre;


 }

 public function getcodigo(){
	return $codigo;
}

public function setcodigo($codigo){
	$this->codigo = $codigo;
} 
public function getnombre(){
	return $nombre;
}

public function setnombre($nombre){
	$this->nombre = $nombre;
} 



}