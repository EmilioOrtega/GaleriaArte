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
		<br>';
		for ($i=0; $i < count($carrito); $i++) { 
			echo "
			<div class='card mb-2'>
				<div class='card-body'>
					<div class='row'>
						<div class='col-2'>
							<img src='{$this->pagina}public/imagenes/{$carrito[$i]['imagen']}' class='rounded' alt='Img' height='100px'>
						</div>
						<div class='col-8'>
							<div class='row'>
								<div class='col-4'>
									<label for='name' class='card-title'>Nombre: {$carrito[$i][8]}</label>
								</div>
								<div class='col-4'></div>
								<div class='col-4'>
									<label for='precio' class='card-text'>Precio: $ {$carrito[$i]['precio']}</label>
								</div>
							</div>
							<div class='row'>
								<div class='col-4'>Cantidad: 1</div>
								<div class='col-4'></div>
								<div class='col-4'>Total:   $ {$carrito[$i]['precio']}</div>
							</div>
						</div>
						<div class='col-2'>
							<form method='post' action='{$this->pagina}carrito/eliminarCarrito'>
								<button class='btn btn-danger' type='submit'>Eliminar</button>
								<input type='hidden' name='producto' value='{$carrito[$i]['producto']}'>
								<input type='hidden' name='usuario' value='{$carrito[$i]['usuario']}'>
							</form>
						</div>
					</div>
				</div>
			</div>";
		}
		echo "
		<form method='post' action='{$this->pagina}compra/comprar'>
			<button class='btn btn-secondary' type='submit'>Comprar Carrito</button>
		</form>";
	}

	function insertarCarrito(){
		$this->modelo->addCarrito($_SESSION['user'],$_POST['producto'],$_POST['precio']);
		header("Location: {$this->pagina}home");
	}

	function eliminarCarrito(){
		$this->modelo->deleteCarrito($_SESSION['user'],$_POST['producto']);
		header("Location: {$this->pagina}carrito");
	}
}
?>