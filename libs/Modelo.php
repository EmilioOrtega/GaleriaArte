<?php
class Modelo {
	protected $conexion;
	protected $conexionBanco;
	public function __construct() {
		$servername = "192.168.84.70";
		//$servername = "localhost";
		$username = "rafa";
		$password = "password";
		$dbname = "vinateria";
		// Create connection
		$this->conexion = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($this->conexion->connect_error) {
			die("Connection failed: " . $this->conexion->connect_error);
		}
        
        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "banco";
        $this->conexionBanco = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($this->conexionBanco->connect_error) {
			die("Connection failed: " . $this->conexionBanco->connect_error);
		}
	}
}
?>