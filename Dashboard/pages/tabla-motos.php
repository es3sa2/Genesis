<?php
    include 'conexion.php';
    $query = mysqli_query($conexion, "SELECT * FROM motos");
    include 'menu.php';
    
?>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Motos</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Tipo</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Cilindraje</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Potencia</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Velocidad</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Alimentacion</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Encendido</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Arranque</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Transmisión</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Precio</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    while($moto = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['nombre']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['cilindraje']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['tipo']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['potencia']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['velocidad']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['alimentacion']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['encendido']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['arranque']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['transmition']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $moto['precio']; ?></p>
                      </td>

                      <?php if($_SESSION['rol']==0){?>
                      <td class="align-middle text-center">
                        <a href='precio-form.php?id=<?php echo $moto['id']?>'><i class="fa fa-pen"></i></a>
                      </td>
                      <?php } ?>
                    </tr>
                    <?php
                  }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script>
    $( document ).ready(function() {
    console.log( "ready!" );
    document.getElementById("clientes-menu").className += " active";
    });
  </script>
<?php include 'aside.php'; ?>