 <?php
 class Categoria{
 	private $conn;
	public function __construct(){
		$this->iniciarConexion();
	}
	public function iniciarConexion(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "vinateriadb";

		// Create connection
		$this->conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		}
	}
	public function cerrarConexion(){
		$this->conn->close();
	}
	public function mostrarCategorias(){
		$result=$this->getCategorias();
		if ($result->num_rows > 0) {
			echo "Categorias:"."<br>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo $row["nombre"]. "<br>";
		    }
		} else {
		    echo "No hay categorias registradas";
		}
	}
	public function getCategorias(){
		$this->iniciarConexion();
		$sql = "SELECT nombre FROM categoria";
		$result = $this->conn->query($sql);
		$this->cerrarConexion();
		return $result;
	}
}

?> 