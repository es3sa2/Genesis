<?php 
    include 'conexion.php';
    include 'menu.php';
?>

    <form action="cargar-usuario.php" class="col-md-10" style="margin-left:30px;" method="POST">
    <br><br><br>
    <p>Agregar vendedor</p>
    <div class="row">
        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Dni</label>
                <input type="number" class="form-control" name="dni">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Mail</label>
                <input type="mail" class="form-control" name="mail">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Contraseña</label>
                <input type="text" class="form-control" name="contraseña">
            </div>
        </div>
        
        
    </div>
    <p>Agregar usuario editor</p>
    <div class="row">
        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Dni</label>
                <input type="number" class="form-control" name="dnie">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Mail</label>
                <input type="mail" class="form-control" name="maile">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="apellido">Contraseña</label>
                <input type="text" class="form-control" name="contraseñae">
            </div>
        </div>
        
        
    </div>
    <center>
    <input  class="btn btn-primary"type="submit" value="Enviar">
    </center>
    </form>
    <script>
    $( document ).ready(function() {
    console.log( "ready!" );
    document.getElementById("usuario-agregar").className += " active";
    });
  </script>
    <?php
    include 'aside.php';
    ?>