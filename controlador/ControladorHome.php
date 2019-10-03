<?php
class Home extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
		$this->setHeader();
		$this->setFooter();
		$this->setVista("Home/index");
		$producto = $this->modelo->getProducto();
		echo '<div class="row">';
		for ($i=0; $i < count($producto); $i++) { 
			
			echo '
			<div class="col-4" style="margin-top:10px">
				<div class="card" style="height: 100%">
					<img class="card-img-top" src="public/imagenes/'.$producto[$i]['imagen'].'" alt="Card image" style="height: 400px">
					<div class="card-body">
						<h4 class="card-title">'.$producto[$i]['nombre'].'</h4>
						<p class="card-text">$'.$producto[$i]['precio'].'</p>
					</div>
					<div class="card-footer">
						<form method="post" action="'.$this->pagina.'producto" style="margin-bottom: 5px">
							<input type="hidden" name="id" value="'.$producto[$i]['id'].'">
							<button class="btn btn-secondary" type="submit">Ver Producto</button>
						</form>
						<a href="" class="btn btn-primary"><img src="vista/carshop.png" alt="Logo" style="width:20px;"> Añair al Carrito</a>
					</div>
				</div>
			</div>';
		}
		echo '</div>';
	}
}

?>
<!DOCTYPE html>
<html>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

<!-- .center Sirve para centrar las imagenes de cada Card
     .caja sirve para darle formato a cada una de las Cards
-->
<style type="text/css">

    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%; }

  .caja
{
  border: 1px solid #999;
  box-sizing: border-box;
  color: #444;
  display: inline-block;
  margin:0.5%;
  padding:  1mm;
  vertical-align: top;
  width:  31.9%;

}
  </style>
 
</body>
</html>
