<?php
require_once 'config/config.php';
class Ajax {	
	private $conexion;
	
	public function moverCarrito ($usuario) {
		$carrito = array();
		$sql = "SELECT producto, count(*) as cantidad FROM carrito where usuario = '{$usuario}' group by producto";
		if($result = mysqli_query($this->conexion,$sql)){
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$carrito, $obj);
			}
		}
		foreach ($carrito as $key => $value) {
			$sql = "insert into historial (producto,cantidad,ticket) values({$value['producto']}, {$value['cantidad']},(select max(id) from compra))";
			$this->conexion->query($sql);
		}
	}

	function __construct() {
		$servername = SERVER;
		$username = USER;
		$password = PASS;
		$dbname = "galeriaarte";
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

	public function checarUsuario() {
		$usuario = $_POST['user'];
		$contrasena = $_POST['pass'];
		$sql = "select id from usuario where nombre='{$usuario}' and contra = '{$contrasena}'";
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
		$sql = "select id from usuario where nombre='{$usuario}'";
		$result = $this->conexion->query($sql);
		if ($result->num_rows > 0) {
			echo "error";
		}else{
			echo "ok";
		}
		$this->conexion->close();
	}

}
$ajax = new Ajax();
$ajax->{$_POST['funcion']}();
?>