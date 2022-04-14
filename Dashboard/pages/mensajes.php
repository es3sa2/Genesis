<?php 
    include 'menu.php';
?>
<form action="enviar.php" method="POST">
    <div class="row">
        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Mensaje</label>
                <input type="text" class="form-control" name="mensaje">
            </div>
        </div>
    </div>
    <input class="btn btn-primary"type="submit" value="Enviar">
    </form>
    <script>
    $( document ).ready(function() {
    console.log( "ready!" );
    document.getElementById("mensaje-agregar").className += " active";
    });
  </script>