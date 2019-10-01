<?php
class Producto extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Home");
		$this->setHeader();
		$this->setFooter();
		

		$producto = $this->modelo->getProducto();
		for ($i=0; $i < count($producto); $i++) { 
			echo '
			<div class="container">
			<div class="col-md-6 col-sm-12 wow animated fadeInUp">
				<div class="intro-book">
					<img src="public/imgenes/1.png" alt="">
				</div>
			</div>
			<div class="col-md-6 intro-text hidden-sm hidden-xs wow animated fadeInUp">
				<h2 class="heading">Swiss Typography</h2>
				<h4 class="subheading">Review of typefaces with examples.</h4>
				<p>Our all time best selling book is now available in a revised and expanded second edition. Swiss Typography is the definitive guide to using type in visual communication, from the printed page to PC screen.</p>
				<a href="#book" class="scrollto btn btn-white">About The Book</a>
				<a href="#" class="btn btn-green">Purchase eBook <span class="price">$11.99</span></a>
			</div>
	</div>
			';
		}
	}
}
?>