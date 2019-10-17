<?php
class Home extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
		$this->setHeader();
		$this->setFooter();
		$this->setJs("home");
	}

	function index() {
		$this->setVista("Home/index");
		$producto = $this->modelo->getProducto();
		echo '<div class="row">';
		for ($i=0; $i < count($producto); $i++) { 
			echo '
			<div class="col-12 col-sm-6 col-md-4" style="margin-top:10px">
				<div class="card" style="height: 100%">
					<img class="card-img-top" src="'.$this->pagina.'public/imagenes/'.$producto[$i]['imagen'].'" alt="Card image" style="height: 400px">
					<div class="card-body">
						<h4 class="card-title">'.htmlentities($producto[$i]['nombre'], ENT_COMPAT, 'ISO-8859-1', true).'</h4>
						<p class="card-text">$'.$producto[$i]['precio'].'</p>
					</div>
					<div class="card-footer">
						<form method="post" action="'.$this->pagina.'producto" style="margin-bottom: 5px">
							<input type="hidden" name="id" value="'.$producto[$i]['id'].'">
							<button class="btn btn-secondary" type="submit">Ver Producto</button>
						</form>
						<form method="post" action="'.$this->pagina.'carrito/insertarCarrito" style="margin-bottom: 5px">
							<input type="hidden" name="user" value="'.$_SESSION['user'].'">
							<input type="hidden" name="producto" value="'.$producto[$i]['id'].'">
							<input type="hidden" name="precio" value="'.$producto[$i]['precio'].'">
							<button id="carrito" type="button" class="btn btn-primary"><img src="'.$this->pagina.'vista/carshop.png" alt="Logo" style="width:20px;">Añadir al Carrito</button>
						</form>
					</div>
				</div>
			</div>';
		}
		echo '</div>';
	}

	function buscar() {
		$producto = $this->modelo->searchProducto($_POST['buscar']);
		echo '
		<br>
		<br>
		<br>
		<div class="row">';
		if (!empty($producto)) {
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
							<form method="post" action="'.$this->pagina.'carrito/insertarCarrito" style="margin-bottom: 5px">
								<input type="hidden" name="user" value="'.$_SESSION['user'].'">
								<input type="hidden" name="producto" value="'.$producto[$i]['id'].'">
								<input type="hidden" name="precio" value="'.$producto[$i]['precio'].'">
								<button type="submit" class="btn btn-primary"><img src="'.$this->pagina.'vista/carshop.png" alt="Logo" style="width:20px;">Añadir al Carrito</button>
							</form>
						</div>
					</div>
				</div>';
			}
		}else {
			echo '<h4>No hay resultados para "'.$_POST['buscar'].'"</h4>';
		}
		echo '</div>';
	}
}
?>