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
		<br>
		<br>
		<br>
		 <table class="table table-bordered table-dark">


            <tr>
                <td>Usuario</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Sexo</td>
                <td>Telefono</td>
                <td>Fecha nacimiento</td>
                <td>Tipo de usuario</td>
                <td>Tarjeta</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

                


            




        

       ';
	for ($i=0; $i < count($users); $i++) { 
			echo '<tr>
                    <td> <?php echo $ver[0]  ?> </td>
                    <td><?php echo $ver[1]  ?></td>
                    <td><?php echo $ver[2]  ?></td>
                    <td><?php echo $ver[3]  ?></td>
                    <td><?php echo $ver[6]  ?></td>
                    <td><?php echo $ver[7]  ?></td>
                    <td><?php echo $ver[8]  ?></td>
                    <td><?php echo $ver[9]  ?></td>
                    <td><button class="btn btn-warning" data-toggle="modal" data-target="#modelEditarA" >Editar</button></td>
                    <td><button class="btn btn-danger" data-toggle="modal" data-target="#modelEliminarA" >Eliminar</button></td>
                </tr>
                
                ';
        }
        echo ' </table>';


        
	}
}
?>

