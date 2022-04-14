<?php 
    include './conexion.php';
?>

<!DOCTYPE html5>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
    Genesis motors
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />

    <style>
        .pagosmenu:active{
            color:red,
        }
    </style>
</head>
<body>
<?php 
    include 'menu.php';   
?>
    <form action="pagos.php" method="POST" style="margin-left: 10%;">
    <div class="row" style="margin-top: 5%;" >
        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
        </div> 
        <p><strong>*Para filtrar todos los pagos solo dar click en " filtrar pagos "</strong></p>       
    </div>

    <input class="btn btn-primary btn-lg" type="submit" style="margin-left:28%; size: 30px;" value="filtrar Pagos">

    </form>
    <?php
    include 'aside.php';
    ?>



    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
        damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
<script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
<script>
    $( document ).ready(function() {
    console.log( "ready!" );
    document.getElementById("pagos-menu").className += " active";
    });


</script>

</body>
</html>