<?php
require_once 'libs/Controlador.php';

$url = $_GET['url'];
$url = rtrim($url, '/');
$url = explode('/', $url);

//var_dump($url);
$archivo = 'controlador/Controlador'.$url[0].'.php';

if (file_exists($archivo)) {
	require_once $archivo;
	$controlador = new $url[0];

	if (isset($url[1])) {
		$controlador->{$url[1]}();
	}
}else {
	echo "La pagina no existe";
}

?>