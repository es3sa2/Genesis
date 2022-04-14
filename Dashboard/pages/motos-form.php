<?php 
    include 'conexion.php';
    include 'menu.php';
?>

    <form action="cargar-motos.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Tipo</label>
                <input type="text" class="form-control" name="tipo">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Cilindraje</label>
                <input type="number" class="form-control" name="cilindraje">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Potencia</label>
                <input type="number" class="form-control" name="potencia">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Velocidad</label>
                <input type="number" class="form-control" name="velocidad">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Alimentacion</label>
                <input type="text" class="form-control" name="alimentacion">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Encendido</label>
                <input type="text" class="form-control" name="encendido">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Arranque</label>
                <input type="text" class="form-control" name="arranque">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Transmisión</label>
                <input type="number" class="form-control" name="transmicion">
                
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Precio</label>
                <input type="number" class="form-control" name="precio">
                
            </div>
        </div>
        
    </div>
        
    <div class="col-sm-4">
            <div class="input-group input-group-static mb-">
                <label for="imagenes">Imagenes</label>
                <input type="file" name="imagenes" id="imagenes" multiple>

            </div>
        </div>
    <input class="btn btn-primary"type="submit" value="Enviar">
    </form>
    <script>
    $( document ).ready(function() {
    console.log( "ready!" );
    document.getElementById("moto-agregar").className += " active";
    });
  </script>
    <?php
    include 'aside.php';
    ?>