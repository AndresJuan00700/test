<?php

class comunicacion{
    
private $cedula_empleado;
private $id_tipo;
private $numero;
 	public function __construct($cedula_empleado,$id_tipo,$numero){

$this->cedula_empleado=$cedula_empleado;
$this->id_tipo=$id_tipo;
$this->numero=$numero;

 }

 public function getcedula_empleado(){
	return $cedula_empleado;
}

public function setcedula_empleado($cedula_empleado){
	$this->cedula_empleado = $cedula_empleado;
} 
public function getid_tipo(){
	return $id_tipo;
}

public function setid_tipo($id_tipo){
	$this->id_tipo = $id_tipo;
} 
public function getnumero(){
	return $numero;
}

public function setnumero($numero){
	$this->numero = $numero;
} 


}