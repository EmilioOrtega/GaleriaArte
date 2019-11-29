<?php
class Modelo {
	protected $conexion;
	public function __construct() {
		$servername = SERVER;
		$username = USER;
		$password = PASS;
		$dbname = "galeriaarte";
		$this->conexion = new mysqli($servername, $username, $password, $dbname);
		if ($this->conexion->connect_error) {
			die("Connection failed: " . $this->conexion->connect_error);
		}
	}
}
?>