
<?php
        include 'conexion.php';
        include 'menu.php';
        $solicitud = $_POST['Solicitud'];
        $vendedor = $_POST['vendedor'];
        $equipo = $_POST['equipo'];
        $indice = $_POST['indice'];
        
        $anexo = $_POST['anexo'];
        $nombre = strtolower($_POST['nombre']);
        $apellido = strtolower($_POST['apellido']);
        $domicilio = $_POST['domicilio'];
        $loc = $_POST['Loc'];
        $dni = $_POST['dni'];
        $nacimiento = $_POST['nacimiento'];
        $telefono = $_POST['telefono'];
        $mail = $_POST['mail'];
        $actividad = $_POST['actividad'];
        $ingresos = $_POST['ingresos'];
        $modelo = $_POST['modelo'];
        $precio = $_POST['precio'];
        $sql = "UPDATE clientes SET vendedor='$vendedor', equipo='$equipo', Indice='$indice', anexo='$anexo', nombre='$nombre', apellido='$apellido', dni='$dni', nacimiento='$nacimiento', telefono='$telefono', mail='$mail', actividad='$actividad', ing='$ingresos', modelo='$modelo', precio='$precio' WHERE solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql);
        if($update){
                include 'correcto.php';
        }
        else{
                echo "ERROR".mysqli_error($conexion);
        }
?>