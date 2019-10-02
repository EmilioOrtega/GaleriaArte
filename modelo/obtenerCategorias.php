 <?php
	include 'ModeloCategoria.php';
	$categoria = new Categoria();
	$categorias=$categoria->getCategorias();
	//Mostrar las categorias
	if ($categorias->num_rows > 0) {
		echo "Categorias:"."<br>";
	    // output data of each row
	    while($row = $categorias->fetch_assoc()) {
	        echo $row["nombre"]. "<br>";
	    }
	} else {
	    echo "No hay categorias registradas";
	}
?> 