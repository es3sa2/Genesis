<?php
        include 'conexion.php';
        include 'menu.php';
        $cuota =  $_POST['cuota']; //formulario
        $solicitud = $_POST['Solicitud']; // lo trae de la bd
        $sellado = $_POST['sellado']; // lo trae de la bd
        $seguro = $_POST['seguro']; // formulario
        $observaciones = $_POST['observaciones']; //formulario
        $SeguroM = $_POST['seguroM']; //formulario
        $abonos = $_POST['abono']; // formulario
        $adelanto =$_POST['adelanto']; // formulario

        if ($seguro == null){
            $seguro = 0;
        }

        if ($abonos == null){
            $abonos = 0;
        }



        if($adelanto == null){
            $adelanto = 0;
        }



        $query2 = mysqli_query($conexion, "SELECT * FROM pagos WHERE solicitud = $solicitud");  
        $pagos = mysqli_fetch_assoc($query2);
        
        if ($observaciones == null){
            $observaciones = $pagos['Observaciones'];
        }

        $query3 = mysqli_query($conexion, "SELECT * FROM clientes WHERE solicitud = $solicitud");  
        $cliente = mysqli_fetch_assoc($query3);
        if ($cuota != null){
            $query5 = mysqli_query($conexion, "SELECT * FROM cuotas WHERE solicitud = '$solicitud' AND Numero='$cuota'" );
            $nro =  mysqli_fetch_assoc($query5);

            $fecha = $cliente['fecha'];
            $fechastr =strtotime($fecha);
            $mes = date("m", $fechastr);
            $dia = "10";
            $año = date("Y", $fechastr);
            $vencimiento = $dia.'-'.$mes.'-'.$año;
            $vencimientoc = date("d-m-Y",strtotime($vencimiento."+ ".$cuota." month"));
        }else{
            $nro['Monto'] = 0;
            $vencimientoc = $pagos['Vencimiento'];
            $cuota = $pagos['Cuotas'];
        }
        
        $query4 = mysqli_query($conexion, "SELECT * FROM cuotas WHERE solicitud = $solicitud"); 
        /*$query5 = mysqli_query($conexion, "SELECT * FROM cuotas WHERE Solicitud=$solicitud AND Numero='$cuota'" );  */

        $total = $pagos['Total'];
        $adelanto = $adelanto + $pagos['Adelanto'];

        mysqli_query($conexion, "SET NAMES 'utf8'");
        
        $SeguroD = $sellado + $seguro;
        $total = $total + $seguro;
        $abono = $pagos['Abono'] + $abonos;
        $monto = $nro['Monto'];
        $debe = $total - $abono;      

        $sql = "UPDATE pagos SET Sellado='$SeguroD', Total='$total', Observaciones='$observaciones', Cuota='$cuota', Adelanto='$adelanto', Abono='$abono', Debe='$debe', Vencimiento='$vencimientoc' WHERE Solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql);
         date('d-m-Y');

        $alicuota = $pagos['Alicuota'];

    if ($SeguroM != null){
         $monton = $monto + $SeguroM;
        while($monto = mysqli_fetch_assoc($query4)){
            $numero = $monto['Numero'];
            
           if ($numero >= $cuota){
            $sql = "UPDATE cuotas SET Monto='$monton' WHERE Solicitud=$solicitud AND Numero='$numero'";
            $update = mysqli_query($conexion, $sql);
           }
        }
    }

        if($update){
            echo "Los datos se han actualizado correctamente";
            include 'correcto.php';
        }else {
            print_r("Error en actualizar los datos echo .mysqli_error($update)");
            include 'error.php';
        }

 

?>
