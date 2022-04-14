<?php
    include 'conexion.php';
    if(isset($_POST['nombre'])){
      $nombre = $_POST['nombre'];
      $query = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre  LIKE '%$nombre%'");
    }else{
      $query = mysqli_query($conexion, "SELECT * FROM clientes");
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
              </div>
            </div>

            <div class="card-body px-0 pb-2">
            <button style="margin-left: 20px;" class="btn btn-danger" onclick="exportTableToExcel('tablePagos')"><i class="fa-solid fa-file-excel"></i>  Exportar</button>
            <button class="btn btn-danger" id="correo" onclick="sendEmail()">Enviar Email</button>

              <div class="table-responsive p-0">
                <table id="tablePagos" class="table align-items-center mb-0">
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
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Vencimiento</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Atraso</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Interes</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Monto</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Observaciones</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Cuotas</th>
                      <th class="text-center text-uppercase  text-xxs font-weight-bolder opacity-7">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  
                    while($cliente = mysqli_fetch_assoc($query)){
                    $solicitud = $cliente['solicitud'];
                    $query2 = mysqli_query($conexion, "SELECT * FROM pagos WHERE solicitud = $solicitud");
                    $pagos = mysqli_fetch_assoc($query2);
                    $sellado = $pagos['Sellado'];
                    $nro = $pagos['Cuota'];
                    $query4 = mysqli_query($conexion, "SELECT * FROM cuotas WHERE solicitud ='$solicitud' AND Numero='$nro'");
                    $cuota = mysqli_fetch_assoc($query4);


                    $hoy = date('d-m-Y');
                    $hoy2 = strtotime(date('d-m-Y'));
                    $today2 = strtotime($pagos['Vencimiento']);

                    if($hoy2 > $today2){

                    $hoy1 = new DateTime($hoy);
                    $today1 = new DateTime($pagos['Vencimiento']);
                    $diff = $today1->diff($hoy1);
                    $diames= $diff->m *30;
                    $diaaño= $diff->y *365;
                    $dias=$diff->days.' dias.';
                    $dia=$diff->days;
                    $monto= $cuota['Monto'];

                    $interes = $dia * 0.5;

                      $intereses = $cuota['Monto'] * $interes / 100;
                      $montoTotal=$intereses + $cuota['Monto'];

                      $estado='Atraso';

                      $color = 'red';
                    }else{
                      $estado='Al dia';
                      $intereses='----';
                      $dias = '----';
                      $color='black';
                      $montoTotal=$cuota['Monto'];
                    }
                  ?>
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
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Adelanto']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Cuota']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center" style="color:<?php echo $color; ?>"><?php echo $pagos['Vencimiento']; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $dias; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $intereses; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $montoTotal; ?></p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Observaciones']; ?></p>
                      </td>

                      <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0 text-center"><?php echo $pagos['Cuotas']; ?></p>
                      </td>

                      <?php if($_SESSION['rol']==0){?>
                      <td class="align-middle text-center">
                       <a href='editar.php?id=<?php echo $solicitud?>&sellado=<?php echo $sellado?>'><i class="fa fa-pen"></i></a>
                      </td>
                      <?php }?>
                      <td class="align-middle text-center">
                       <a href='pagar.php?id=<?php echo $solicitud?>'><i class="fa-solid fa-money-check-dollar"></i></a>
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
   
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <script>
  $( document ).ready(function() {
    document.getElementById("pagos-menu").className += " active";
    console.log( "ready!" );

   });

   

  function exportTableToExcel(tablePagos, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tablePagos);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    var f = new Date();
    fecha=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
    // Specify file name
    filename = filename?filename+'.xls':'pagos'+fecha+'.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }
}

function sendEmail(){
  Swal.fire({
  title: 'deseas enviar correos de recordatorios?',
  showCancelButton: true,
  confirmButtonText: 'Enviar!',
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({url:"sendMails.php", success:function(result){
      Swal.fire('correo enviado con exito!', '', 'success')
        } })
  }
})

    }

  </script>
</body>
</html>
