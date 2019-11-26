<?php

include 'conexion_Banco.php';

mysqli_query($conexion,"SET NAMES 'utf8'");

$T = $_POST['T'];


if ($T == 'Crear') {

	$Us = $_POST['Us'];
	$Cn = $_POST['Cn'];
	$Nm = $_POST['Nm'];
	$Ap = $_POST['Ap'];
	$Sx = $_POST['Sx'];
	$Tf = $_POST['Tf'];
	$Fn = $_POST['Fn'];
	$Tu = $_POST['Tu'];
	$Tj = $_POST['Tj'];
	
	$sql = "insert into usuario (`usuario`, `contrasena`, `nombre`, `apellidos`,`sexo`, `telefono`, `fecha_nacimiento`, `tipo_usuario`, `tarjeta`) values ('$Us', '$Cn', '$Nm', '$Ap', '$Sx', '$Tf', '$Fn', '$Tu', $Tj)";

	if (mysqli_query($conexion,$sql)) {

        $stat="Usuario creado";

    } else {

        $stat = mysqli_error($conexion);

    }
    echo "<form name=form action=CRUD_Receptor.php method=post>";
	echo "<input type='hidden' name='s' value= '".$stat."'' >";
	echo "<input type='hidden' name='t' value= '".$T."'' >";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

}

elseif ($T == 'Leer') {

	$Us = $_POST['Us'];

    $sql = "select * from usuario where usuario = '$Us'";

	$sql = mysqli_query($conexion,$sql);

	if(!$sql){
			$stat = mysqli_error($conexion);
			$T = 'error';
			echo "<form name=form action=CRUD_Receptor.php method=post>";
			echo "string"; "<input type='hidden' name='s' value= '".$stat."'' >";
			echo "<input type='hidden' name='t' value= '".$T."'' >";
			echo "</form>";
			echo "<script language=javascript>document.form.submit();</script>";
		}
	elseif(mysqli_num_rows($sql)==0){

			$stat = "Sin Registros";
			$T = 'error';
			echo "<form name=form action=CRUD_Receptor.php method=post>";
			echo "<input type='hidden' name='s' value= '".$stat."'' >";
			echo "<input type='hidden' name='t' value= '".$T."'' >";
			echo "</form>";
			echo "<script language=javascript>document.form.submit();</script>";
		}

	else{

 
	$row = mysqli_fetch_array($sql);

 	echo "<form name=form action=CRUD_Receptor.php method=post>";
	echo "<input type='hidden' name='t' value= '".$T."'' >";
	echo "<input type='hidden' name='sql' value= '".serialize($row). "'>";
	echo "</form>";
	echo "<script language=javascript>document.form.submit();</script>";

	}



}

elseif ($T == 'Actualizar') {

	$Us = $_POST['Us'];
	$Cn = $_POST['Cn'];
	$Nm = $_POST['Nm'];
	$Ap = $_POST['Ap'];
	$Sx = $_POST['Sx'];
	$Tf = $_POST['Tf'];
	$Fn = $_POST['Fn'];
	$Tu = $_POST['Tu'];
	$Tj = $_POST['Tj'];

	$ID = $Us;

 	$sql = "update usuario set usuario = '$Us', contrasena = '$Cn', nombre = '$Nm', apellidos = '$Ap', sexo = '$Sx', telefono = '$Tf', fecha_nacimiento = '$Fn', tipo_usuario = '$Tu', tarjeta = $Tj where usuario = $ID";

	if (mysqli_query($conexion,$sql)) {
        $stat="Usuario Actualizado";
       echo "<form name=form action=CRUD_Receptor.php method=post>";
       echo "<input type='hidden' name='s' value= '".$stat."'' >";
       echo "<input type='hidden' name='t' value= '".$T."'' >";
       echo "</form>";
       echo "<script language=javascript>document.form.submit();</script>";
    } else {
        $stat = mysqli_error($conexion);
    }
    echo $stat;
}

elseif ($T == 'Borrar') {

	$Us = $_POST['Us'];

  $sql = "delete from usuario where usuario = '$Us'";
	
	if (mysqli_query($conexion,$sql)) {
        $stat="Usuario Borrado";
        echo "<form name=form action=CRUD_Receptor.php method=post>";
		echo "<input type='hidden' name='s' value= '".$stat."'' >";
		echo "<input type='hidden' name='t' value= '".$T."'' >";
		echo "</form>";
		echo "<script language=javascript>document.form.submit();</script>";
    } else {
        $stat = mysqli_error($conexion);
    }
    echo $stat;
}

else{
	echo "error";
}




?>