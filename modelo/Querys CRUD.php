 <?php

 //CREATE (tarjeta)
 $sql = "insert into tarjeta (`tarjeta`, `saldo`, `vencimiento`, `CVC`, `titular`) values ($Tj, $Sl, '$Vn', $CV, '$Tl')";

 //READ (tarjeta)
 $sql = "select * from tarjeta where tarjeta = $Tt";


//UPDATE (tarjeta)
 $sql = "update tarjeta set tarjeta = $Tj, saldo = $Sl, vencimiento = '$Vn', CVC = $CV, titular = '$Tl' where tarjeta = $ID";

 //DELETE (tarjeta)
 $sql = "delete from tarjeta where tarjeta = $Tj";

//-----------------------------------------------

  //CREATE (categoria)
 $sql = "insert into categoria (`id`, `nombre`) values ($Id, '$Nm')";

 //READ (categoria)
  $sql = "select * from categoria where id = $Id";


//UPDATE (categoria)
 $sql = "update categoria set id = $Id, nombre = '$Nm' where id = $IDe";

 //DELETE (categoria)
 $sql = "delete from categoria where id = $Id";

 //----------------------------------------------
 
  //CREATE (compra)
 $sql = "insert into compra (`id`, `usuario`, `producto`, `fecha`,`cantidad`, `total`,`subtotal` ) values ($Id, '$Us', $Pd, '$Fc', $Ct, $Tt, $St)";

 //READ (compra)
  $sql = "select * from compra where id = $Id";


//UPDATE (compra)
 $sql = "update compra set id = $Id, usuario = '$Us', producto = $Pd, fecha = '$Fc', cantidad = $Ct, total = $Tt, subtotal = $St where id = $IDe";

 //DELETE (compra)
 $sql = "delete from compra where id = $Id";

 //----------------------------------------------
 
  //CREATE (marca)
 $sql = "insert into marca (`id`, `nombre`, `origen`) values ($Id, '$Nm', '$Og')";

 //READ (marca)
  $sql = "select * from marca where id = $Id";


//UPDATE (marca)
 $sql = "update marca set id = $Id, nombre = '$Nm', origen = '$Og' where id = $IDe";

 //DELETE (marca)
 $sql = "delete from marca where id = $Id";

 //----------------------------------------------
 
  //CREATE (producto)
 $sql = "insert into producto (`id`, `nombre`, `contenido`, `categoria`,`precio`, `descripcion`, `cantidad`, `imagen`, `descuento`, `marca`) values ($Id, '$Nm', $Cd, $Cg, $Pc, '$Dp', $Ct, '$Ig', $Dc, $Mc)";

 //READ (producto)
  $sql = "select * from producto where id = $Id";


//UPDATE (producto)
 $sql = "update producto set id = $Id, nombre = '$Nm', contenido = $Cd, categoria = $Cg, precio = $Pc, descripcion = '$Dp', cantidad = $Ct, imagen = '$Ig', descuento = $Dc, marca = $Mc where id = $IDe";

 //DELETE (producto)
 $sql = "delete from producto where id = $Id";

  //---------------------------------------------
 
  //CREATE (usuario)
 $sql = "insert into usuario (`usuario`, `contrasena`, `nombre`, `apellidos`,`sexo`, `telefono`, `fecha_nacimiento`, `tipo_usuario`, `tarjeta`) values ('$Us', '$Cn', '$Nm', '$Ap', '$Sx', '$Tf', '$Fn', '$Tu', $Tj)";

 //READ (usuario)
  $sql = "select * from usuario where usuario = '$Us'";


//UPDATE (usuario)
 $sql = "update usuario set usuario = '$Us', contrasena = '$Cn', nombre = '$Nm', apellidos = '$Ap', sexo = '$Sx', telefono = '$Tf', fecha_nacimiento = '$Fn', tipo_usuario = '$Tu', tarjeta = $Tj where usuario = $ID";

 //DELETE (usuario)
 $sql = "delete from usuario where usuario = '$Us'";


 ?>