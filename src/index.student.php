<!DOCTYPE php>
<php lang="en">

<head>
  <!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="author" content="Jonathan Ezequiel Martinez Lopez" />

<!-- Google tag (gtag.js) -->
<script async src="https:/www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag() {
		dataLayer.push(arguments)
	}
	gtag('js', new Date());F

	gtag('config', 'G-M8S4MT3EYG');
</script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="./assets/images/png/colegio_bello_horizonte.png" />

<!-- Color modes -->
<script src="./assets/js/vendors/color-modes.js"></script>

<!-- Libs CSS -->
<link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="./assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="./assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="./assets/css/theme.css">

<title>Estudiante</title>
  	<?php 
	include "partials/zona.priv.php";

    
  	?>
</head>

  <body>
    <main id="main-wrapper" class="main-wrapper">
      <?php 
		include "partials/header.php";

		include "partials/navbar_estudiante.php";
    
  	?>


      <!-- page content -->
      <div id="app-content">

        <!-- Container fluid -->
        <div class="app-content-area">
          <div class="container-fluid">


            <div class="row align-items-center">
              <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div
                  class="pt-20 rounded-top"
                  style="
                    background: url(./assets/images/svg/banner_colegio.svg)
                      no-repeat;
                    background-size: cover;
                  "
                ></div>
                <div class="card rounded-bottom rounded-0 smooth-shadow-sm mb-5">
                  <div
                    class="d-flex align-items-center justify-content-between pt-4 pb-6 px-4"
                  >
                    <div class="d-flex align-items-center">
                      <!-- text -->
                      <div class="lh-1">
                        <h2 class="mb-0">
                          Jitu Chauhan
                          <a
                            href="#!"
                            class="text-decoration-none"

                          >
                          </a>
                        </h2>
                        <p class="mb-0 d-block">@imjituchauhan</p>
                      </div>
                    </div>
                    <div>
                      <a
                        href="#!"
                        class="btn btn-outline-primary d-none d-md-block"
                        >Edit Profile</a
                      >
                    </div>
                  </div>
                  <!-- nav -->
                  <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="./index.student.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="./views/Estado_matricula.php">Estado de Matricula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="./views/seccion.estudiante.php">Expediente del estudiante</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="./views/matricula_linea.php">Matricula en Linea</a>
                  </li>
                  
                </ul>
                </div>
              </div>
            </div>
            <!-- content -->
            <div >
              <!-- row -->
              <div class="row">
<div class="col-xl-6 col-md-12 col-12 mb-5">
  <!-- card -->
  <div class="card shadow-sm border-0">
    <!-- card body -->
    <div class="card-body">
      <div class="d-flex justify-content-between mb-4 align-items-center">
        <!-- Autor: Director -->
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <h5 class="mb-0 fw-semibold">Rafaela López</h5>
            <p class="mb-0 text-muted small">Directora General</p>
          </div>
        </div>
      </div>

      <!-- Contenido principal -->
      <div class="mb-4">
        <h6 class="text-uppercase text-success fw-bold">Mensaje de Bienvenida</h6>
        <p class="mb-3">
          Queridos estudiantes, les damos la más cordial bienvenida a un nuevo año escolar en el <strong>Colegio Bello Horizonte</strong>. Este es un espacio donde crecerán, aprenderán y construirán amistades para toda la vida. ¡Vamos por un año lleno de logros!
        </p>
        <img
          src="./assets/images/png/banner_logo.svg"
          class="rounded-3 w-100"
          alt="Bienvenida al colegio"
        >
      </div>
    </div>
  </div>
</div>

<div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-5">
  <!-- card -->
  <div class="card shadow-sm border-0">
    <div class="card-header  text-white">
      <h4 class="mb-0">Matrícula 2025</h4>
    </div>
    <div
      class="pt-20 rounded-top"
      style="
        background: url(./assets/images/png/matricula2024.jpg) no-repeat;
        background-size: cover;
        height: 150px;
      "
    ></div>
    <!-- card body -->
    <div class="card-body">
      <!-- card title -->
      <h5 class="card-title">Proceso de matrícula</h5>
      <p class="card-text">
        El período de matrícula para el año lectivo 2025 está abierto. Asegúrate de tener todos los documentos requeridos:
      </p>
      <ul class="list-unstyled mb-3">
        <li><i class="bi bi-check-circle-fill text-success"></i> Partida de nacimiento</li>
        <li><i class="bi bi-check-circle-fill text-success"></i> Cédula del estudiante y del responsable</li>
        <li><i class="bi bi-check-circle-fill text-success"></i> Certificados de notas</li>
        <li><i class="bi bi-check-circle-fill text-success"></i> Comprobante de dirección</li>
      </ul>
      <a href="#" class="btn btn-outline-primary btn-sm">Matricula en Linea</a>
    </div>
  </div>
</div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Scripts -->
	 <!-- Libs JS -->
	<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="assets/libs/feather-icons/dist/feather.min.js"></script>
	<script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

	<!-- Theme JS -->
	<script src="assets/js/main.js"></script>
	<!-- jsvectormap -->
	<script src="assets/libs/jsvectormap/dist/jsvectormap.min.js"></script>
	<script src="assets/libs/jsvectormap/dist/maps/world.js"></script>
	<script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
	<script src="assets/js/vendors/chart.js"></script>


      <!-- popper js -->
    <script src="../assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
  <!-- tippy js -->
        <!-- tippy js -->
    <script src="../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="../assets/js/vendors/tooltip.js"></script>
  </body>

</php>