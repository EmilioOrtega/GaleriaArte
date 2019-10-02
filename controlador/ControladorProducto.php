<?php
class Producto extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
		$this->setHeader();
		$this->setFooter();
		

		$producto = $this->modelo->getProducto();
//		for ($i=0; $i < count($producto); $i++) { 
  		for ($i=0; $i < 1; $i++) { 
    echo '	
    
    <div class="card" ">
  <div class="card-body">
    
<div class="media">
  <img src="public/imagenes/1.png"  width="225" height="300">
  <div class="media-body">
  <h1 class="display-2">Whiskey Jack Daniels Honey</h1>
 <p class="card-text">Jack Daniel´s Honey en busca de romper esquemas y de agregar a la tradición un toque de originalidad, tiene para ti a través de Walmart tienda en línea la botella de 750 ml, una edición que incluye miel natural. Mézclalo con un poco de ginger o bien solo en las rocas. Encuentra las diferentes marcas de whisky que tenemos disponibles para ti, como esté whisky Jack Daniels en presentación de 700 ml. No dejes de tener diferentes tipos de vinos y disfruta cuando lo desees.</p>
    <a href="#" class="btn btn-outline-success">$357.99</a>    
  </div>

</div>
			
			';
		}
	}
}
?>

<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">



            

<body>

<!-- .center Sirve para centrar las imagenes de cada Card
     .caja sirve para darle formato a cada una de las Cards
-->

 
</body>
</html>


