<?php 
    include 'conexion.php';

   echo $mensaje = $_POST['mensaje'];
   echo $sql = "UPDATE mensajes SET mensaje='$mensaje' WHERE Nro='1'";
    $insert = mysqli_query($conexion, $sql);

?>