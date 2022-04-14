<?php 
    include 'conexion.php';
    include 'menu.php';
   
    $solicitud = $_GET['id'];
    $query3 = mysqli_query($conexion, "SELECT * FROM clientes WHERE solicitud = $solicitud");  
    $cliente = mysqli_fetch_assoc($query3);
?>

<form action="actualizar-tabla.php" method="POST">

    <div class="row">
    
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="vendedor">Vendedor</label>
                <input class="form-control" type="text" name="vendedor" value="<?php echo $cliente['vendedor'] ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="equipo">Equipo</label>
                <input class="form-control" type="text" name="equipo" value="<?php echo $cliente['equipo'] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="solicitud">Solicitud</label>
                <input class="form-control" type="text" name="indice" value="<?php echo $cliente['Indice'] ?>">
                <input class="form-control" type="number" name="solicitud" value="<?php echo $cliente['solicitud'] ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="anexo">Anexo</label>
                <input class="form-control" type="text" name="anexo" value="<?php echo $cliente['anexo'] ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" value="<?php echo $cliente['nombre'] ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Apellido</label>
                <input class="form-control" type="text" name="apellido" value="<?php echo $cliente['apellido'] ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="domicilio">Domicilio</label>
                <input class="form-control" type="text" name="domicilio" value="<?php echo $cliente['domicilio'] ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="loc">Loc/Prov</label>
                <input class="form-control" type="text" name="Loc" value="<?php echo $cliente['loc'] ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="dni">DNI</label>
                <input class="form-control" type="number" name="dni" value="<?php echo $cliente['dni'] ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static  mb-4">
                <label for="nacimiento">Nacimiento</label>
                <input class="form-control" type="date" name="nacimiento" value="<?php echo $cliente['nacimiento'] ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label  for="telefono">Telefono</label>
                <input class="form-control" type="text" name="telefono" value="<?php echo $cliente['telefono'] ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="mail">Mail</label>
                <input class="form-control" type="email" name="mail" value="<?php echo $cliente['mail'] ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="actividad">Actividad</label>
                <input class="form-control" type="text" name="actividad" value="<?php echo $cliente['actividad'] ?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="ingresos">Ingresos</label>
                <input class="form-control" type="text" name="ingresos" value="<?php echo $cliente['ing'] ?>">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="modelo">Modelo</label>
                <input class="form-control" type="text" name="modelo" value="<?php echo $cliente['modelo'] ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="precio">Precio</label>
                <input class="form-control" type="number" name="precio" value="<?php echo $cliente['precio'] ?>">
            </div>
        </div>

    </div>

        <input type="hidden" name="Solicitud" id="" value = "<?php echo $solicitud;?>"> 
        <input class="btn btn-primary"type="submit" value="Editar">
        

</form>

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
        