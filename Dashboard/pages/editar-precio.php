<?php
        include 'conexion.php';
        include 'menu.php';
        $precio = $_POST['precio'];
        $id = $_POST['id'];
        $sql = "UPDATE motos SET precio='$precio' WHERE id=$id";
        $update = mysqli_query($conexion, $sql);
        if($update){
            header("Location: http://localhost/Dashboard/pages/tables.php");;
        }
        else{
                echo "ERROR".mysqli_error($conexion);
        }
?>