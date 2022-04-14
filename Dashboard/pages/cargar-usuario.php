<?php 
    include 'conexion.php';
?>

<?php 
    echo  $dni1 = $_POST['dnie'];

    $dni = $_POST['dni'];
    $mail = $_POST['mail'];
    $contraseña = $_POST['contraseña'];
    echo $sql = "INSERT INTO usuarios VALUES('$dni', '$mail', '$contraseña', '2')";
    $insert = mysqli_query($conexion, $sql);
    if($insert){
       /* header("Location: https://app-genesis.herokuapp.com/Dashboard/pages/usuario-form.php");*/
    }else{
        echo "ERROR".mysqli_error($conexion);
    }
?>