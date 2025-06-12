<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include "../partials/head.php";
    include "../partials/zona.priv.php";
    
  ?>
  <title>Portal del Estudiante</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">

      <?php 
		include "../partials/header.php";
		include "../partials/navbar_estudiante.php";
    
    
  	?>


     <!-- Page content -->
      <div id="app-content">

        <!-- Container fluid -->
        <div class="app-content-area">
          <div class="container-fluid">

              <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div
                  class="pt-20 rounded-top"
                  style="
                    background: url(../assets/images/svg/banner_colegio.svg)
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
                          Bienvenido al Portal del Estudiante
                          <a
                            href="#!"
                            class="text-decoration-none"

                          >
                          </a>
                        </h2>
                      </div>
                    </div>
                    <div>
                      <a
                        href="#!"
                        class="btn btn-outline-primary d-none d-md-block"
                        >Editar Perfil</a
                      >
                    </div>
                  </div>
                  <!-- nav -->
                  <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link " href="../index.student.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active " href="../views/Estado_matricula.php">Estado de Matricula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../views/seccion.estudiante.php">Expediente del estudiante</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link " href="../views/matricula_linea.php">Matricula en Linea</a>
                  </li>
                  
                </ul>
                </div>
              </div>
            </div>
          </div>
           <!-- content -->

        <!-- Contenido dinámico -->
        <div class="text-center my-5 mt-12">
          <img src="https://cdn-icons-png.flaticon.com/512/5958/5958824.png" width="120" class="mb-4" alt="Sin matrícula">
          <h5 class="text-muted">Aún no has realizado ninguna matrícula</h5>
          <p class="text-muted">Cuando completes tu proceso de matrícula, la información aparecerá aquí.</p>
        </div>

        </div>
      </div>
    </div>
  </main>

    <!-- Scripts -->
	<?php include "../partials/scripts.php" ?>  
  </body>

</html>