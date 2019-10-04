<?php
class Carrito extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Carrito");
	}

	function index() {

		$this->setHeader();
		$this->setFooter();
		$carrito = $this->modelo->getCarrito($_SESSION['user']);
		echo '
		<br>
		<br>
		<br>
		<form method="post" action="'.$this->pagina.'compra/comprar" style="margin-bottom: 5px">';
		for ($i=0; $i < count($carrito); $i++) { 
			echo '
			<div class="card">
				<div class="card-body">											
					<div class="row">
						<div class="col">
							<div class="container">
								<img src="'.$this->pagina.'public/imagenes/'.$carrito[$i]['imagen'].'" class="rounded" alt="Img" width="50px"> 
							</div>
						</div>
						<div class="col">
							<label for="name" class="card-title">Nombre: '.$carrito[$i]['producto'].'</label>
						</div>
						<div class="col">
							<label for="cant" class="card-text">Cantidad: 1</label>
						</div>
						<div class="col">
							<label for="precio" class="card-text">Precio: '.$carrito[$i]['precio'].'</label>
							
						</div>
					</div>
					<div class="row">
						<div class="col"></div>
						<div class="col">Descuento: 0%</div>
						<div class="col"></div>
						<div class="col">Total: '.$carrito[$i]['precio'].'</div>
						<div class="col"></div>
					</div>								
				</div>
			</div>
			<input type="hidden" name="id" value="'.$carrito[$i]['producto'].'">
			<input type="hidden" name="id" value="'.$carrito[$i]['usuario'].'">';
		}
		echo '
			<button class="btn btn-secondary" type="submit">Comprar Carrito</button>
		</form>';
	}

	function insertarCarrito(){
		$this->modelo->addCarrito(trim($_SESSION['user']),trim($_POST['producto']),trim($_POST['precio']));
		header('Location: '.$this->pagina.'home');
	}
}
?>