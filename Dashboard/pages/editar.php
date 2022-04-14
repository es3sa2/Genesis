<?php 
    include 'conexion.php';
    include 'menu.php';
   
    $solicitud = $_GET['id'];
    $sellado = $_GET['sellado'];
?>

<form action="actualizar-cuotas.php" method="POST">
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="precio">Cuota a pagar</label>
                <input class="form-control" type="number" name="cuota" id="">
            </div>
        </div>
          <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="precio">Seguro de desempleo</label>
                <input class="form-control" type="number" name="seguro" id="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="precio">Observaciones</label>
                <input class="form-control" type="text" name="observaciones" id="">
            </div>  
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="precio">Adelanto</label>
                <input class="form-control" type="number" name="adelanto" id="">
            </div>  
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="precio">Abono</label>
                <input class="form-control" type="number" name="abono" id="">
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-dynamic mb-4">
                <label class="form-label" for="precio">Seguro de la moto</label>
                <input class="form-control" type="number" name="seguroM" id="">
            </div>  
        </div>
    </div>

        <input type="submit" value="Enviar">
        <input type="hidden" name="Solicitud" id="" value = "<?php echo $solicitud;?>">
        <input type="hidden" name="sellado" value="<?php echo $sellado; ?>">
    </form>