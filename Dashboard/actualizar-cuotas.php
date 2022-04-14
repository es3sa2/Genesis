<?php
        include 'conexion.php';
        include 'menu.php';
        echo $cuota =  $_POST['cuota'];
        $solicitud = $_POST['Solicitud'];
        $sellado = $_POST['sellado'];
        $seguro = $_POST['seguro'];
        $observaciones = $_POST['observaciones'];
        
        $query2 = mysqli_query($conexion, "SELECT * FROM pagos WHERE solicitud = $solicitud");  
        $pagos = mysqli_fetch_assoc($query2);
        $total = $pagos['Total'];
        $adelanto = $_POST['adelanto'] + $pagos['Adelanto'];

        mysqli_query($conexion, "SET NAMES 'utf8'"); 
        
        $SeguroD = $sellado + $seguro;
        $total = $total + $seguro;
        $abono = $pagos['Abono'] + $_POST['abono'];
        $debe = $total - $abono;

        $sql = "UPDATE pagos SET Sellado='$SeguroD', Total='$total', Observaciones='$observaciones', Cuota='$cuota', Adelanto='$adelanto', Abono='$abono', Debe='$debe'  WHERE Solicitud=$solicitud";
        $update = mysqli_query($conexion, $sql); 

        if($cuota > 12){
           echo $monto = $pagos['Cuotasig'] - 1000;
           echo $sql = "UPDATE pagos SET Cuotasig='$monto' WHERE Solicitud=$solicitud";
            $update = mysqli_query($conexion, $sql); 

        }
                echo $monton = $monto + $SeguroM;
       while($cuotas = mysqli_fetch_assoc($query3)){
           $numero = $cuotas['Numero'];
           if ($numero >= $cuota){
                
                $sql = "UPDATE cuotas SET Monto='$monton' WHERE Solicitud=$solicitud AND Numero='$numero'";
                $update = mysqli_query($conexion, $sql);
           }
       }
        echo $sql2 = "INSERT INTO cuotads VALUES('', '$solicitud', '$monto', 'PAGADO')";
            $insert2 = mysqli_query($conexion, $sql2);
        if($insert2){

        }else{
            echo mysqli_error($conexion);
        }
        if($update){
            echo "Los datos se han actualizado correctamente";
            include 'correcto.php';
        }else {
            echo "Error en actualizar los datos echo .mysqli_error($conexion)";
            include 'error.php';
        }

 

?>
