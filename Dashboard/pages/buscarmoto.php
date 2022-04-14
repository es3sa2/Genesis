<?php
include ('./conexion.php');

$moto=$_POST['opciones'];
$sql = mysqli_query($conexion, "SELECT * FROM motos WHERE id=$moto");
$data= mysqli_fetch_assoc($sql);
$a=$data['precio'];
echo $a;

?>