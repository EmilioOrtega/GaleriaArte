<?php
require_once 'libs/config.php';
class Ajax {	
	protected $conexion;
	function __construct() {
		$servername = SERVER;
		$username = USER;
		$password = PASS;
		$dbname = "vinateria";
		$this->conexion = new mysqli($servername, $username, $password, $dbname);
		if ($this->conexion->connect_error) {
			die("Connection failed: " . $this->conexion->connect_error);
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


}
$ajax = new Ajax();
$ajax->{$_POST['funcion']}();
?>