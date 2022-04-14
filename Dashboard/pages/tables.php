
<?php
    include 'conexion.php';
    $query = mysqli_query($conexion, "SELECT * FROM clientes");
    include 'menu.php';
    
?>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tabla de clientes</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Fecha</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Vendedor</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Equipo</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Solicitud</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Anexo</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Apellido</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Domicilio</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">LOC/PROV</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">DNI</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Nacimiento</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Telefono</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Mail</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Actividad</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Ingresos</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Modelo</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Precio</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    while($cliente = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['fecha']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['vendedor']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['equipo']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['Indice']."-".$cliente['solicitud']; ?> </p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['anexo']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['nombre']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['apellido']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['domicilio']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['loc']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['dni']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['nacimiento']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['telefono']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['mail']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['actividad']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['ing']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['modelo']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['precio']; ?></p>
                      </td>

                      <?php if($_SESSION['rol']==0){?>
                      <td class="align-middle text-center">
                        <a href='editar-tabla.php?id=<?php echo $cliente['solicitud']?>'><i class="fa fa-pen"></i></a>
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