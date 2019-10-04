<?php
class Users extends Controlador{
	function __construct() {
		parent::__construct();
		$this->setModelo("Users");
		$this->setHeader();
		$this->setFooter();
	}

	function index() {
		$producto = $this->modelo->getProducto($_POST['id']);
		echo '
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

                <tr>
                    <td> <?php echo $ver[0]  ?> </td>
                    <td><?php echo $ver[1]  ?></td>
                    <td><?php echo $ver[2]  ?></td>
                    <td><?php echo $ver[3]  ?></td>
                    <td><?php echo $ver[4]  ?></td>
                    <td><?php echo $ver[5]  ?></td>
                    <td><?php echo $ver[6]  ?></td>
                    <td><?php echo $ver[7]  ?></td>
                    <td><?php echo $ver[8]  ?></td>
                    <td><?php echo $ver[9]  ?></td>




                    <td><button class="btn btn-warning" data-toggle="modal" data-target="#modelEditarA" >Editar</button></td>
                    <td><button class="btn btn-danger" data-toggle="modal" data-target="#modelEliminarA" >Eliminar</button></td>
                </tr>

           

            




        

        </table>';
	}
}
?>

