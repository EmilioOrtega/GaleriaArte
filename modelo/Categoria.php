 <?php

 class Categoria{
	public function __construct(){

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
		include 'conexion.php';
		$sql = "SELECT nombre FROM categoria";
		$result = $conexion->query($sql);
		$conexion->close();
		return $result;
	}
}

?> 