<?php
require_once 'libs/config.php';
class Ajax {	
	private $conexion;
	function __construct() {
		$servername = SERVER;
		$username = USER;
		$password = PASS;
		$dbname = "vinateria";
		$this->conexion = new mysqli($servername, $username, $password, $dbname);
		if ($this->conexion->connect_error) {
			die("Connection failed: " . $this->conexion->connect_error);
		}
		$dbname = "banco";
		$this->conexionBanco = new mysqli($servername, $username, $password, $dbname);
		if ($this->conexionBanco->connect_error) {
			die("Connection failed: " . $this->conexionbanco->connect_error);
		}
	}

	public function agregarCarrito() {
		$usuario = $_POST['user'];
		$producto = $_POST['producto'];
		$sql = "insert into carrito(usuario,producto) values('{$usuario}','{$producto}')";
		if($result=$this->conexion->query($sql)){
			echo 'Se agregó el producto al carrito correctamente';
		}else{
			echo 'error';
		}
		$this->conexion->close();
	}

	public function checarUsuario() {
		$usuario = $_POST['user'];
		$contrasena = $_POST['pass'];
		$sql = "select usuario from usuario where usuario='{$usuario}' and contrasena = '{$contrasena}'";
		$result = $this->conexion->query($sql);
		if ($result->num_rows > 0) {
			echo "ok";
		}else{
			echo "error";
		}
		$this->conexion->close();
	}

	public function checarDisponible() {
		$usuario = $_POST['user'];
		$sql = "select usuario from usuario where usuario='{$usuario}'";
		$result = $this->conexion->query($sql);
		if ($result->num_rows > 0) {
			echo "error";
		}else{
			echo "ok";
		}
		$this->conexion->close();
	}

			if ($obj['saldo']<$total) {
}
$ajax = new Ajax();
$ajax->{$_POST['funcion']}();
?>