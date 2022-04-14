<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Genesis Motors
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />

</head>

<body class="bg-gray-200">
  <div>
    
    <main class="main-content  mt-0">
      <div class="page-header align-items-start min-vh-100" style="background-image: url('http:https://mipanel.ferozo.com/hosting/filemanager/item/download?mode=download&preview=true&path=%2Fpublic_html%2Fassets%2Fimg%2FC02.jpg);">
        <span class="mask bg-primary opacity-6"></span>
        <div class="container my-auto">
          <center>
          <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto" id="back">
              <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-primary shadow-primary border-radius-lg py-3 pe-1">
                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar sesión</h4>
                  </div>
                </div>

                <!-- <?php 
                  // if($_POST['error'] == "si"){
                  //   include 'error.php'; 
                  // }
                ?> -->

                <div class="card-body">
                  <form method="POST" action="login.php">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Dni</label>
                      <input type="number" class="form-control" name="usuario">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Contraseña</label>
                      <input type="password" class="form-control" name="contraseña">
                    </div>
                    <div class="text-center">
                      <input class="btn btn-primary"type="submit" value="Iniciar sesión">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          </center>
        </div>
      </div>
    </main>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>