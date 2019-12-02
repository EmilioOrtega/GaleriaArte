<?php
class Usuario extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Usuario");
	}
	
	function index() {
		$this->setHeader();
		$this->setFooter();
		$this->setVista('LoginPrin');	
	}

	function registrar() {
		$this->modelo->addUsuario($_POST['nombre'], $_POST['password']);
		header('Location: '.URL.'home');

	}

	function reg() {
		$this->usuario = $this->modelo->addUsuario($_POST['Nombre'], $_POST['Passr']);
	}

	function login() {
		$this->setHeader();
		$this->setFooter();
		$this->setVista('LoginPrin');	
	}

	function log() {
		$this->user = $this->modelo->login($_POST['user'], $_POST['password']);
		header('Location: '.URL.'home');
		//var_dump($this->user);
		if (!empty($this->user)) {
			echo "Hola".$this->user[0]['id'];
		}
	}
		

}
?>