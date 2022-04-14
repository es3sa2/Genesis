<?php
    session_start();
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $query = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre  LIKE '%$nombre%'");
    /*$cliente = mysqli_fetch_assoc($query);*/

 
    while($cliente = mysqli_fetch_assoc($query)){
    $solicitud = $cliente['solicitud'];
    $query2 = mysqli_query($conexion, "SELECT * FROM pagos WHERE solicitud = $solicitud");  
    $pagos = mysqli_fetch_assoc($query2);
    $sellado = $pagos['Sellado'];
    }


    include 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-primary shadow-primary border-radius-lg pt-4 pb-3">
                <?php echo '<h6 class="text-white text-capitalize ps-3">'.$cliente['nombre'].'</h6>'; ?>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Apellido</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Solicitud</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Alicuota</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Derecho de adm</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Cargo por adm</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Sellado</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Total</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Abono/Debe</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Adelanto</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Cuota</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Monto</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Vencimiento</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Observaciones</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Cuotas</th>
                    </tr>
                  </thead>
                  <tbody>

                  
                    <tr>
                      <td>
                          <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['nombre']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['apellido']; ?></p>
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $cliente['Indice']."-".$cliente['solicitud']; ?> </p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Alicuota']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Derecho de adm']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Cargo por adm']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Sellado']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Total']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Abono']."/".$pagos['Debe']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Cuota']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Cuotasig']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Vencimiento']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Observaciones']; ?></p>
                      </td>

                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Cuotas']; ?></p>
                      </td>

                      <td class="align-middle text-center">
                        <?php echo "<a href='editar.php?id=".$solicitud."&sellado=".$sellado."'>enlace</a>";?>
                      </td>
                      
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
</body>
</html>