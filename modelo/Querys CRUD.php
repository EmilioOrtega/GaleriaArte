 <?php

 //CREATE (tarjeta)
 $sql = "insert into tarjeta (`tarjeta`, `saldo`, `vencimiento`, `CVC`, `titular`) values ($Tj, $Sl, '$Vn', '$CV', '$Tt')";

 //READ (tarjeta)
 $sql = "select * from tarjeta where tarjeta = $Tt";


//UPDATE (tarjeta)
 $sql = "update tarjeta set tarjeta = $Tj, saldo = $Sl, vencimiento = '$Vn', CVC = $CV, titular = '$Tt' where tarjeta = $ID";

 //DELETE (tarjeta)

 $sql = "delete from tarjeta where tarjeta = $Tt";

 


 ?>