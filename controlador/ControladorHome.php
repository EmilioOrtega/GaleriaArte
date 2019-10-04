<?php
class Home extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
		$this->setHeader();
		$this->setFooter();
	}

	function index() {
		$this->setVista("Home/index");
		$producto = $this->modelo->getProducto();
		echo '<div class="row">';
		for ($i=0; $i < count($producto); $i++) { 
			echo '
			<div class="col-4" style="margin-top:10px">
				<div class="card" style="height: 100%">
					<img class="card-img-top" src="'.$this->pagina.'public/imagenes/'.$producto[$i]['imagen'].'" alt="Card image" style="height: 400px">
					<div class="card-body">
						<h4 class="card-title">'.$producto[$i]['nombre'].'</h4>
						<p class="card-text">$'.$producto[$i]['precio'].'</p>
					</div>
					<div class="card-footer">
						<form method="post" action="'.$this->pagina.'producto" style="margin-bottom: 5px">
							<input type="hidden" name="id" value="'.$producto[$i]['id'].'">
							<button class="btn btn-secondary" type="submit">Ver Producto</button>
						</form>
						<a href="" class="btn btn-primary"><img src="'.$this->pagina.'vista/carshop.png" alt="Logo" style="width:20px;"> Añair al Carrito</a>
					</div>
				</div>
			</div>';
		}
		echo '</div>';
	}
}

?>