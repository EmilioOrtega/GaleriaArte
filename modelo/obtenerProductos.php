 <?php
	include 'ModeloProducto.php';
	$producto = new ModeloProducto();
	$productos=$producto->getProductos();

	//Mostrar los productos
	if ($productos->num_rows > 0) 
	{
		echo "Productos:"."<br>";

	    // output data of each row
	    while($row = $productos->fetch_assoc()) 
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
?> 