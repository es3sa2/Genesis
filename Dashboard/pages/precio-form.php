<?php
        include 'conexion.php';
        include 'menu.php';
?>
<form action="editar-precio.php" method="POST" style="margin-left: 10%;">
    <div class="row" style="margin-top: 5%;" >
        <div class="col-sm-4">
            <div class="input-group input-group-static mb-4">
                <label for="nombre">Precio</label>
                <input type="number" class="form-control" name="precio">
            </div>
        </div>
    </div>

    <input class="btn btn-primary btn-lg" type="submit" style="margin-left:28%; size: 30px;" value="Editar precio">
    <input type="hidden" name="id" id="" value = "<?php echo $_GET['id'];?>">
    </form>