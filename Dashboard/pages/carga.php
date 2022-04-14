
<?php 
  include 'conexion.php';
  $solicitud = $_POST['solicitud'];
  $query = mysqli_query($conexion, "SELECT * FROM clientes");
  include 'menu.php';

  if($_POST['solicitud'] == '0'){
    include 'error.php';
  }else{
    include 'clientes.php';
  }
?>
