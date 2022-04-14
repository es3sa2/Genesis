<?php 

include 'conexion.php';

$nombre = $_POST['nombre'];
$cilindraje = $_POST['cilindraje'];
$tipo = $_POST['tipo'];
$potencia = $_POST['potencia'];
$velocidad = $_POST['velocidad'];
$alimentacion = $_POST['alimentacion'];
$encendido = $_POST['encendido'];
$arranque = $_POST['arranque'];
$transmicion = $_POST['transmicion'];
$precio = $_POST['precio'];
$sql = "INSERT INTO motos(nombre, cilindraje, precio, tipo, potencia, velocidad, alimentacion, encendido, arranque, transmition) VALUES('$nombre', '$cilindraje', '$precio', '$tipo', '$potencia', '$velocidad', '$alimentacion', '$encendido', '$arranque', '$transmicion')";
$insert = mysqli_query($conexion, $sql);
$ultimo_id = mysqli_insert_id($conexion);
    
if (isset($_FILES['imagenes'])){
	
	$cantidad= count($_FILES["imagenes"]["tmp_name"]);
    $ruta_indexphp = dirname(realpath(__FILE__));
	
	for ($i=0; $i<$cantidad; $i++){
        $ruta_fichero_origen = $_FILES['imagenes']['tmp_name'][$i];
        $ruta_nuevo_destino = $ruta_indexphp . '/assets/img/' . $_FILES['imagenes']['name'][$i];
        $nombreimg= $_FILES['imagenes']['name'][$i];
        move_uploaded_file($ruta_fichero_origen, $ruta_nuevo_destino);
        $imagen = "INSERT INTO img_motos(id_motos, imagen) VALUES('$ultimo_id', '$nombreimg')";
        $insertmoto = mysqli_query($conexion, $imagen);
        if($insertmoto){
            echo $ruta_indexphp;
            header("Location: http://genesismotors.byethost33.com/Dashboard/pages/motos-form.php");
        }else{
            echo "ERROR".mysqli_error($conexion);
        }
    }
}else{
    echo 'no envio nada';
} 
    
?>