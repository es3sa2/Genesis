<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

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

  <link rel="stylesheet" href="http://tympanus.net/Tutorials/CSS3Tables/css/style.css" type="text/css" media="screen"/>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <!-- ICONS FONTAWESOME -->
    <script src="https://kit.fontawesome.com/d9def58086.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
    
  <!-- Generador de PDF -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script src="http://mrrio.github.io/jsPDF/dist/jspdf.min.js" type="text/javascript"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.23/jspdf.plugin.autotable.js"></script>
    
    <script src="https://app.simplefileupload.com/buckets/6e84dae10e7629649d54ba04ec3fd599.js"></script>

  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.2.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  </head>


<body class="g-sidenav-show  bg-gray-200">

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-1 fixed-start ms-1   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Genesis motors</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" id="pagos-menu" href="pagos-form.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-cash-register"></i>
            </div>
            <span class="nav-link-text ms-1">Pagos</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" id="clientes-menu" href="tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-users"></i>
            </div>
            <span class="nav-link-text ms-1">Clientes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" id="clientes-agregar" href="../pages/Solicitud.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-person-circle-plus"></i>
            </div>
            <span class="nav-link-text ms-1">Agregar cliente</span>
          </a>
        </li>
        <?php if($_SESSION['rol']==0){?>
        <li class="nav-item">
          <a class="nav-link text-white" id="usuario-agregar" href="../pages/usuario-form.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-user-plus"></i>
            </div>
            <span class="nav-link-text ms-1">Agregar usuario</span>
          </a>
        </li>
        <?php }?>
        <?php if($_SESSION['rol']==0){?>
        <li class="nav-item">
          <a class="nav-link text-white" id="moto-agregar" href="../pages/motos-form.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-cart-plus"></i>
            </div>
            <span class="nav-link-text ms-1">Agregar moto</span>
          </a>
        </li>
        <?php }?>
        <?php if($_SESSION['rol']==0){?>
        <li class="nav-item">
          <a class="nav-link text-white" id="moto-agregar" href="../pages/tabla-motos.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-motorcycle"></i>
            </div>
            <span class="nav-link-text ms-1">Tabla motos</span>
          </a>
        </li>
        <?php }?>
        <li class="nav-item">
          <a class="nav-link text-white" id="mensaje-agregar" href="../pages/mensajes.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-message"></i>
            </div>
            <span class="nav-link-text ms-1">Mensaje</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
  
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span><?php echo $_SESSION['mail']?></span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li style="margin-left: 5px; margin-top:10px">
            <button type="button" id="cerrar" class="btn btn-outline-primary">Cerrar Sesión</button>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script type="text/javascript">
    document.getElementById("cerrar").onclick = function () {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    var ruta = loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
      if (confirm("Seguro desea cerrar sesion?") == true) {
        window.location.href = ruta+"logout.php";
      }
    };
</script>
    <!-- End Navbar -->
