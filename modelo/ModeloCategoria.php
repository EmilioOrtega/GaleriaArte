 <?php
 include '../libs/Modelo.php';
 class Categoria extends Modelo{
	public function __construct(){
		parent::__construct();
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
		$sql = "SELECT nombre FROM categoria";
		$result = $this->conexion->query($sql);
		$this->conexion->close();
		return $result;
	}
}

?> 