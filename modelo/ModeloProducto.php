<?php
include '../libs/Modelo.php';

 class ModeloProducto extends Modelo
 {
	public function __construct()
	{
		parent::__construct();
	}

	public function mostrarProductos()
	{
		$result=$this->getProductos();

		if ($result->num_rows > 0) 
		{
			echo "Productos:"."<br>";

		    // output data of each row
		    while($row = $result->fetch_assoc()) 
		    {
		        echo $row["id"]. "<br>";
		        echo $row["producto"]. "<br>";
		        echo $row["contenido"]. "<br>";
		        echo $row["categoria"]. "<br>";
		        echo $row["precio"]. "<br>";
		        echo $row["descripcion"]. "<br>";
		        echo $row["cantidad"]. "<br>";
		        echo $row["imagen"]. "<br>";
		        echo $row["descuento"]. "<br>";
		        echo $row["marca"]. "<br>";
		        echo $row["origen"]. "<br>";
		    }
		} 
		else 
		{
		    echo "No hay productos registrados";
		}
	}

	public function getProductos()
	{
		$sql = "SELECT * FROM productos";
		$result = $this->conexion->query($sql);
		$this->conexion->close();
		return $result;
	}
}
?>