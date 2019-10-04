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
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo json_encode($users);
        echo '
        

		<br>
		<br>
		<br>
		 <table class="table table-bordered table-dark">
            <tr>
                <td>Usuario</td>
                <td>Nombres</td>
                <td>Apellidos </td>
                <td>Sexo</td>
                <td>Telefono</td>
                <td>Fecha de nacimiento</td>
                <td>Tipo de usuario</td>
                <td>Tarjeta</td>
             <td>Editar</td>
                <td>Eliminar</td>
            </tr>
       ';
	for ($i=0; $i < count($users); $i++) { 
        $id=$users[$i]["usuario"];
			echo "<tr>
                    <td>".$users[$i]["usuario"]."</td>
                      <td>".$users[$i]["nombre"]."</td>
                    <td>".$users[$i]["apellidos"]."</td>
                     <td>".$users[$i]["sexo"]."</td>
                      <td>".$users[$i]["telefono"]."</td>
                       <td>".$users[$i]["fecha_nacimiento"]."</td>
                        <td>".$users[$i]["tipo_usuario"]."</td>
                         <td>".$users[$i]["tarjeta"]."</td>
         
                    <td><button class='btn btn-warning' data-toggle=modal onclick=editar('".$users[$i]['usuario']."') >Editar</button></td>
                    <td><button class='btn btn-danger' data-toggle=modal  >Eliminar</button></td>
                </tr>
        </table>";
	}
}
}
?>

