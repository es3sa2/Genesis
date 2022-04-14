<?php 
    session_start();
    include 'conexion.php';
    $dni = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $sql = "SELECT * FROM usuarios WHERE dni='$dni' AND contraseña='$contraseña'";
    $login = mysqli_query($conexion, $sql);
    $usuarios = mysqli_fetch_assoc($login);

    echo $usuarios;

    if($login && mysqli_num_rows($login) == 1){
        $_SESSION['Solicitud'] = $contraseña;
        $_SESSION['dni'] = $usuarios['dni'];
        $_SESSION['mail'] = $usuarios['mail'];
        $_SESSION['rol'] = $usuarios['rol'];
        if($usuarios['rol'] == 1){
            header("Location: https://localhost/Dashboard/pages/usuarios.php");
        }else{
             header("Location: http://localhost/Dashboard/pages/pagos-form.php");
             exit;
        }
        
        echo "datos correctos";
    }else{

        header("Location: https://app-genesis.herokuapp.com/Dashboard/pages/sign-in.php");
        echo "ERROR".mysqli_error($conexion);
        exit;
    }
?>