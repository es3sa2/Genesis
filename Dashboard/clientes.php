<?php

    /*asignar los includes*/
    include 'conexion.php';
    session_start();
    $solicitud = $_POST['solicitud'];
?>
<?php
    if ($_POST['solicitud'] == '0'){
        include 'error.php';
    }
    else{
        $fecha = $_POST['fecha'];
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
        $cuotas = $_POST['cuotas'];
        /*$query = mysqli_query($conexion, "SELECT * FROM clientes");*/
       

        $sql = "INSERT INTO clientes VALUES('$fecha', '$vendedor', '$equipo', '$indice', '$solicitud', '$anexo', '$nombre', '$apellido',
         '$domicilio', '$loc', '$dni', '$nacimiento', '$telefono', '$mail', '$actividad', '$ingresos', '$modelo', '$precio')";

        $insert = mysqli_query($conexion, $sql);
        if($insert){
            include 'correcto.php';
            $query2 = mysqli_query($conexion, "SELECT * FROM clientes");
            $alicuota = $precio / $cuotas;
            $derechoadm = $alicuota /100 * 5;
            $sellado = $alicuota / 100 * 3;
            $cargoadm = 12000;
            $abono = 0;
            
            $cuotaS = 1;
            $monto = $alicuota + ($cargoadm/12) + $sellado + $derechoadm;
            /*$vencimiento = "DATE_ADD($fecha, INTERVAL 1 MONTH)";*/
            $total = $alicuota + $derechoadm + $sellado + $cargoadm;
            $debe = $total;
            echo $sql2 = "INSERT INTO pagos VALUES('$solicitud', '$precio', '$alicuota', '$derechoadm', '$cargoadm', '$sellado', '$total', '$abono','$debe', '$cuotaS', '$monto', '9', 'No hay observacines', '2', '0', 'LICITO', 'D', '$cuotas')";
            $insert2 = mysqli_query($conexion, $sql2);
            if ($insert2){
                echo "DATOS INSERTADOS CORRECTAMENTE";
            }
            else{
                echo "ERROR".mysqli_error($conexion);
            }
            var_dump($fecha);

            $sql3 = "INSERT INTO usuarios VALUES('$dni', '$mail', '$solicitud')";
            $insert3 = mysqli_query($conexion, $sql3);
            if ($insert2){}
        }
        else {
            include 'error.php';
            echo "ERROR".mysqli_error($conexion);
        }   


    }
    

?>
