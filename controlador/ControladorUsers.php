<?php
class Users extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Users");
		$this->setHeader();
		$this->setFooter();
	}

	function index() {
		$users = $this->modelo->getUsers();
        echo '
          <script src="libs/funciones.js"></script>
		<br>
		<br>
		<br>
		 <table class="table table-bordered table-dark">
            <tr>
                <td>User</td>
                <td>Nombres</td>
                <td>Apellidos P</td>
                <td>Apellidos M</td>
                <td>Celular</td>
                <td>Domicilio</td>
                <td>Municipio</td>
                <td>Colonia</td>
                <td>Registro</td>
                <td>Carrera</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

                


            




        

       ';
	for ($i=0; $i < count($users); $i++) { 
			echo '<tr>
                    <td>'.$users[$i]["usuario"].'</td>
                      <td>'.$users[$i]["nombre"].'</td>
                    <td>'.$users[$i]["apellidos"].'</td>
                     <td>'.$users[$i]["sexo"].'</td>
                      <td>'.$users[$i]["telefono"].'</td>
                       <td>'.$users[$i]["fecha_nacimiento"].'</td>
                        <td>'.$users[$i]["tipo_usuario"].'</td>
                         <td>'.$users[$i]["tarjeta"].'</td>
         
                    <td><button class="btn btn-warning" data-toggle="modal" data-target="#modelEditarA" >Editar</button></td>
                    <td><button class="btn btn-danger" data-toggle="modal" data-target="#modelEliminarA" >Eliminar</button></td>
                </tr>
        </table>';
	}
}
}
?>

