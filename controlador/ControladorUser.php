<?php
class User extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Usuario");
	}

	function login() {
		$usuario = $this->modelo->login(trim($_POST['user']),trim($_POST['password']));
		if (!empty($usuario)) {
			$_SESSION['user'] = trim($_POST['user']);
			$_SESSION['nombre'] = trim($usuario[0]['nombre']);
			$_SESSION['apellidos'] = trim($usuario[0]['apellidos']);
			$_SESSION['telefono'] = trim($usuario[0]['telefono']);
			$_SESSION['tipo_usuario'] = trim($usuario[0]['tipo_usuario']);
			$_SESSION['tarjeta'] = trim($usuario[0]['tarjeta']);
			header('Location: '.$this->pagina.'home');
		}else {
			header('Location: '.$this->pagina.'home');
		}
	}

	function logout() {
		session_destroy();
		unset($_SESSION);
		header('Location: '.$this->pagina.'home');
	}

	function registrar() {
		$fecha = trim($_POST['año']).'-'.trim($_POST['mes']).'-'.trim($_POST['dia']);
		$this->modelo->registrarUsuario(trim($_POST['user']),trim($_POST['password']),trim($_POST['nombre']),trim($_POST['apellidos']),trim($_POST['sexo']),trim($_POST['telefono']),$fecha,"u");
		header('Location: '.$this->pagina.'user/login');
	}
}
?>