<?php
    include 'conexion.php';
    include 'menu.php';
    $sql = mysqli_query($conexion, "SELECT * FROM motos");

?>
<center>
    <h1>Agregar nuevo cliente</h1>
</center>
        <!-- Formulario para cargar los clientes -->
    <div class="p-4">
    <form action="carga.php" method="POST">

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <u><h3>Informacion de Venta</h3></u>
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <u><h3>Informacion del Cliente</h3></u>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label for="fecha">Fecha de la venta</label>    
                <input type="date" class="form-control" name="fecha">
            </div>
        </div>
    
        <div class="col-md-6">
            <div class="input-group input-group-static  mb-4">
                <label for="nacimiento">Fecha deNacimiento</label>
                <input class="form-control" type="date" name="nacimiento" id="">
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="vendedor">Vendedor</label>
                <input class="form-control" type="text" name="vendedor" id="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="equipo">Equipo</label>
                <input class="form-control" type="text" name="equipo" id="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="apellido">Apellido</label>
                <input class="form-control" type="text" name="apellido" id="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="anexo">Anexo</label>
                <input class="form-control" type="text" name="anexo" id="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="dni">DNI</label>
                <input class="form-control" type="number" name="dni" id="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="solicitud">Solicitud</label>
                <input class="form-control" type="text" name="indice" id="">
                <span>-</span>
                <input class="form-control" type="number" name="solicitud" id="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="telefono">Telefono</label>
                <input class="form-control" type="text" name="telefono" id="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
            <select onchange="colocarpago(this.value)" class="form-select" id="select" data-placeholder="Modelos" name="modelo">
            <option value="-" selected>Modelos</option>
                <?php while($motos = mysqli_fetch_assoc($sql)){?>
                    <option value="<?php echo $motos['id']?>" name><?php echo $motos['nombre'] ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="domicilio">Domicilio</label>
                <input class="form-control" type="text" name="domicilio" id="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-static mb-4">
                <label class="form-label" for="precio">Precio</label>
                <input class="form-control" type="number" name="precio" id="precio" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="loc">Loc/Prov</label>
                <input class="form-control" type="text" name="Loc" id="">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="precio">Cuotas</label>
                <input class="form-control" type="number" name="cuotas" id="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="mail">Mail</label>
                <input class="form-control" type="email" name="mail" id="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="actividad">Actividad</label>
                <input class="form-control" type="text" name="actividad" id="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="ingresos">Ingresos</label>
                <input class="form-control" type="text" name="ingresos" id="">
            </div>
        </div>

    </div>

        
        <input class="btn btn-primary"type="submit" value="Enviar">

    </form>
    <p class="broken"></p>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- Select2-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script>
    $( document ).ready(function() {
    console.log( "ready!" );
    document.getElementById("clientes-agregar").className += " active";
    });

    $( '#select' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    } );

    function colocarpago(option){
        alert(option);
        $.ajax({
            method: "POST",
            url: "./buscarmoto.php",
            data: { opciones: option }
        })
        .done(function( response ) {
            alert(response);
            $("#precio").val(response);
        });
    }

  </script>
<?php
    include 'aside.php';
 ?>