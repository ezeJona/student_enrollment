<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
    include "../partials/head.php";
    
  ?>
    <title>Files - Admin Dashboard Template</title>
  </head>

  <body>
    <main id="main-wrapper" class="main-wrapper">
    <?php include "../partials/header.php" ?>
       <!-- navbar vertical -->
    
		<?php include "../partials/navbar-vertical.php"?>


     <!-- Page content -->
      <div id="app-content">

        <!-- Container fluid -->
        <div class="app-content-area">
          <div class="container-fluid">

          <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
              <!-- Bg -->
              <div class="pt-20 rounded-top" style="background:
                url(../assets/images/background/profile-cover.jpg)
                no-repeat;
                background-size: cover;">
              </div>
               <!-- text -->
              <div class="card rounded-bottom smooth-shadow-sm ">
                <div class="d-flex align-items-center
                  justify-content-between pt-4 pb-6 px-4">
                  <div class="d-flex align-items-center">
                    <div class="avatar-xxl avatar-indicators
                      avatar-online me-2 position-relative
                      d-flex justify-content-end
                      align-items-end mt-n10">
                       <!-- avatar -->
                       <img src="../assets/images/avatar/avatar-11.jpg"
                       class="avatar-xxl
                       rounded-circle border border-2 "
                       alt="Image">
                     <a href="#!" class="position-absolute top-0 right-0 me-2"
                     >
                       <img src="../assets/images/svg/checked-mark.svg" alt="Image"
                         class="icon-sm">
                     </a>
                    </div>
                     <!-- text -->
                    <div class="lh-1">
                      <h2 class="mb-0">Jitu Chauhan
                        <a href="#!"
                          class="text-decoration-none"
                          >
                        </a>
                      </h2>
                      <p class="mb-0 d-block">@imjituchauhan</p>
                    </div>
                  </div>
                  <div>
                    <a href="profile-edit.html" class="btn
                      btn-outline-primary d-none
                      d-md-block">Edit Profile</a>
                  </div>
                </div>
                 <!-- nav -->
                <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link " href="../index.student.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="../views/Estado_matricula.php">Estado de Matricula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../views/seccion.estudiante.php">Expediente del estudiante</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="../views/matricula_linea.php">Matricula en Linea</a>
                  </li>
                  
                </ul>
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