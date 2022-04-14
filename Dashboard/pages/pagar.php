<?php
    include 'conexion.php';
    $solicitud = $_GET['id'];
    $query = mysqli_query($conexion, "SELECT * FROM pagos WHERE Solicitud = $solicitud");
    
    $pagos = mysqli_fetch_assoc($query);

    $cuota = $pagos['Cuota'];
    $cuotaA = $cuota + 1;
    $query2 = mysqli_query($conexion, "UPDATE pagos SET Cuota='$cuotaA' WHERE Solicitud= $solicitud");
    $update = mysqli_query($conexion, $query2);

    $query3= mysqli_query($conexion, "SELECT * FROM cuotas WHERE Solicitud = $solicitud AND Numero=$cuotaA");
    $cuotas = mysqli_fetch_assoc($query3);
    $vencimiento = $cuotas['Fecha'];

    $sql = "UPDATE pagos SET Vencimiento='$vencimiento' WHERE Solicitud=$solicitud";
    $update = mysqli_query($conexion, $sql);


    $sql1 = "UPDATE cuotas SET Estado='PAGADO' WHERE Solicitud = $solicitud AND Numero=$cuota";
    $update1 = mysqli_query($conexion, $sql1);
    header("Location: http://localhost/Dashboard/pages/pagos.php");
?>