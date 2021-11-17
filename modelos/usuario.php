<?php

class usuario{
    private $cedula_funcionario;	
    private $email;
    private $contraseña;

	public function __construct( $cedula_funcionario,$email,$contraseña){
	$this->cedula_funcionario=$cedula_funcionario;
	$this->email=$email;
	$this->contraseña=$contraseña;

	}

	public function getcedula_funcionario(){
		return $this->cedula_funcionario;
	}

	public function setcedula_funcionario($cedula_funcionario){
		$this->identificacion = $cedula_funcionario;
	} 

	public function getemail() { 
		return $this->email; 
	}
	public function setemail($email){
		$this->email = $email;
	} 

	public function getcontraseña() { 
		return $this->contraseña; 
	}
	public function setcontraseña($contraseña){
		$this->contraseña = $contraseña;
	} 



}