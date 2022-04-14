<?php 
  include 'conexion.php';
  session_start();
  $solicitud = $_SESSION['Solicitud'];
  $query = mysqli_query($conexion, "SELECT * FROM cuotas WHERE Solicitud='$solicitud'");
  $query2 = mysqli_query($conexion, "SELECT * FROM mensajes WHERE Nro='1'");
  echo $mensaje = mysqli_fetch_assoc($query2);
  /* $query2 = mysqli_query($conexion, "SELECT * FROM clientes where nombre = $nombre");
  $usuario = mysqli_fetch_assoc($query2); */
  include 'menu-usuario.php';

  if(empty($mensaje)){
    $mensaje['Mensaje'] = 'No hay Mensajes';
  }

?>
<div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"><?php echo $mensaje['Mensaje']; ?></span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
</div>
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Cuotas</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Numero</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Monto</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Estado</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while($cuota = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cuota['Numero']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cuota['Monto']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cuota['Estado']; ?></p>
                      </td>
                      <!-- <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td> -->
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