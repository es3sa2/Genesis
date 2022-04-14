<?php

    /*asignar los includes*/
    include 'conexion.php';
    $solicitud = $_POST['solicitud'];
?>
<?php
    if ($_POST['solicitud'] == '0'){
        include 'error.php';
    }
    else{
        $fecha = $_POST['fecha'];
        $fechastr =strtotime($fecha);
        $mes = date("m", $fechastr);
        $dia = "10";
        $año = date("Y", $fechastr);
        $vencimiento = $dia.'-'.$mes.'-'.$año;
        $vencimientoc = date("d-m-Y",strtotime($vencimiento."+ 1 month"));

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
            $sellado = $alicuota /100 * 3;
            $cargoadm = 12000;
            $abono = 0;
            
            $cuotaS = 1;
            $monto = $alicuota + ($cargoadm/12) + $sellado + $derechoadm;
            /*$vencimiento = "DATE_ADD($fecha, INTERVAL 1 MONTH)";*/
            $total = $alicuota + $derechoadm + $sellado + $cargoadm;
            $debe = $total;
            $sql2 = "INSERT INTO pagos VALUES('$solicitud', '$precio', '$alicuota', '$derechoadm', '$cargoadm', '$sellado', '$total', '$abono','$debe', '$cuotaS', '$monto', '$vencimientoc', 'No hay observaciones', '1', '0', '0', 'D', '$cuotas', '0', '0')";
            $insert2 = mysqli_query($conexion, $sql2);
            if ($insert2){
                echo "DATOS INSERTADOS CORRECTAMENTE";
            }
            else{
                echo "ERROR".mysqli_error($conexion);
            }
            
            $i2 = 1;
            if ($cuotas < 68){
                for ($i=1; $i<=$cuotas; $i++){

                    if($i == 13){
                        $monto = $monto - 1000;
                    }
                    $vencimienton = date("d-m-Y",strtotime($vencimiento."+ ".$i." month"));
                    $sql2 = "INSERT INTO cuotas VALUES('$solicitud', '$i', '$monto', 'ESPERA', '$vencimienton')";
                    $insert2 = mysqli_query($conexion, $sql2);
                }
            }else{
                for ($i=1; $i<=$cuotas; $i++){
                    if ($i == 13){
                        $monto = $monto - 1000;
                    }
                    if($i2 == 12){
                        $alicuota = $alicuota * 15 / 100;
                        $monto = $alicuota + ($cargoadm/12) + $sellado + $derechoadm;
                        $i2 = 0;
                    }
                    echo $i2 = $i2 + 1;
                    $vencimienton = date("d-m-Y",strtotime($vencimiento."+ ".$i." month"));
                    $sql2 = "INSERT INTO cuotas VALUES('$solicitud', '$i', '$monto', 'ESPERA', $vencimienton)";
                    $insert2 = mysqli_query($conexion, $sql2);
                    }
            }
            $sql3 = "INSERT INTO usuarios VALUES('$dni', '$mail', '$solicitud', '1')";
            $insert3 = mysqli_query($conexion, $sql3);


            if ($insert2){}

        }


        else {
            include 'error.php';
            echo "ERROR".mysqli_error($conexion);
        }   


    }
    

?>
