<?php

class ModeloHome extends Modelo


	public function _construct(){

	}

	public function mostrarHome()
	{
		$result = this->getProducto();
		if($result ->num_rows >0)
		{
			echo "Productos: "."<br>";
			//salida del dato por cada renglon

			while($row =$result ->fetch_assoc()){
				echo$row["nombre"]."<br>";
				echo$row["contenido"]."<br>";
				echo$row["categoria"]."<br>";
				echo$row["precio"]."<br>";
				echo$row["descripcion"]."<br>";
				echo$row["cantidad"]."<br>";
				echo$row["descuento"]."<br>";
				
			}
		}else{
			echo"No hay productos registrados";
		}
	}

	public  function getProducto() 
	{
		include 'conexion.php';

		$sql = 'SELECT nombre, contenido, categoria, precio, descripcion, cantidad, descuento FROM producto';
		$result = $conexion->query($sql);

		$conexion->close();

		return $result;
	}

?>