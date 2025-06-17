<!DOCTYPE html>
<html lang="en">

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
<link rel="shortcut icon" type="image/x-icon" href="./assets/images/" />

<!-- Color modes -->
<script src="./assets/js/vendors/color-modes.js"></script>

<!-- Libs CSS -->
<link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="./assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="./assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="./assets/css/theme.css">

<title>nombre del colegio</title>
  	<?php 
	include "partials/zona.priv.php";
    include "models/ultimas_matriculas.model.php";

    
    $ObjetoUltimasMatriculas = new UltimasMatriculasModel();
    $NewMatricula = $ObjetoUltimasMatriculas->read();
    
  	?>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
    <div class="header">
	<!-- navbar -->
	<div class="navbar-custom navbar navbar-expand-lg">


			<a id="nav-toggle" href="#!" class="ms-auto ms-md-0 me-0 me-lg-3">
				<svg xmlns="http:/www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-text-indent-left text-muted" viewBox="0 0 16 16">
					<path
						d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
					/>
				</svg>
			</a>

			<div class="d-none d-md-none d-lg-block">
				<!-- Form -->
				<form action="#">
					<div class="input-group">
						<input class="form-control rounded-3 bg-transparent ps-9" type="search" value="" id="searchInput" placeholder="Search" />
						<span class="">
							<button class="btn position-absolute start-0" type="button">
								<svg
									xmlns="http:/www.w3.org/2000/svg"
									width="15"
									height="15"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-search text-dark"
								>
									<circle cx="11" cy="11" r="8"></circle>
									<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
								</svg>
							</button>
						</span>
					</div>
				</form>
			</div>
			<!--Navbar nav -->
			<ul class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
				<li>
					<div class="dropdown">
						<button class="btn btn-ghost btn-icon rounded-circle" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
							<i class="bi theme-icon-active"></i>
							<span class="visually-hidden bs-theme-text">Temas</span>
						</button>
						<ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
							<li>
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
									<i class="bi theme-icon bi-sun-fill"></i>
									<span class="ms-2">Normal</span>
								</button>
							</li>
							<li>
								<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
									<i class="bi theme-icon bi-moon-stars-fill"></i>
									<span class="ms-2">Oscuro</span>
								</button>
							</li>
							<li>
								<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
									<i class="bi theme-icon bi-circle-half"></i>
									<span class="ms-2">Auto</span>
								</button>
							</li>
						</ul>
					</div>
				</li>

				<li class="dropdown stopevent ms-2">
					<a class="btn btn-ghost btn-icon rounded-circle" href="#!" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-xs" data-feather="bell"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="dropdownNotification">
						<div>
							<div class="border-bottom px-3 pt-2 pb-3 d-flex justify-content-between align-items-center">
								<p class="mb-0 text-dark fw-medium fs-4">Notificaciones</p>
								<a href="#!" class="text-muted">
									<span>
										<i class="me-1 icon-xs" data-feather="settings"></i>
									</span>
								</a>
							</div>
							<div data-simplebar style="height: 250px">
								<!-- List group -->
								<ul class="list-group list-group-flush notification-list-scroll">
									<!-- List group item -->
									<li class="list-group-item bg-light">
										<a href="#!" class="text-muted">
											<h5 class="mb-1">Rishi Chopra</h5>
											<p class="mb-0">Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.</p>
										</a>
									</li>
									<!-- List group item -->
									<li class="list-group-item">
										<a href="#!" class="text-muted">
											<h5 class="mb-1">Neha Kannned</h5>
											<p class="mb-0">Proin at elit vel est condimentum elementum id in ante. Maecenas et sapien metus.</p>
										</a>
									</li>
									<!-- List group item -->
									<li class="list-group-item">
										<a href="#!" class="text-muted">
											<h5 class="mb-1">Nirmala Chauhan</h5>
											<p class="mb-0">Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit vel pretium.</p>
										</a>
									</li>
									<!-- List group item -->
									<li class="list-group-item">
										<a href="#!" class="text-muted">
											<h5 class="mb-1">Sina Ray</h5>
											<p class="mb-0">Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu diam.</p>
										</a>
									</li>
								</ul>
							</div>
							<div class="border-top px-3 py-2 text-center">
								<a href="#!" class="text-inherit">Ver notificaciones</a>
							</div>
						</div>
					</div>
				</li>
				<!-- Lista -->
				<li class="dropdown ms-2">
					
					<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
						<div class="px-4 pb-0 pt-2">
							<div class="lh-1">
								<h5 class="mb-1">Bienvenido</h5>
								<a href="#!" class="text-inherit fs-6">Ver mi perfil</a>
							</div>
							<div class="dropdown-divider mt-3 mb-2"></div>
						</div>

						<ul class="list-unstyled">
							<li>
								<a class="dropdown-item d-flex align-items-center" href="#!">
									<i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>
									Editar Perfil
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#!">
									<i class="me-2 icon-xxs dropdown-item-icon" data-feather="activity"></i>
									Actividad
								</a>
							</li>

							<li>
								<a class="dropdown-item d-flex align-items-center" href="#!">
									<i class="me-2 icon-xxs dropdown-item-icon" data-feather="settings"></i>
									Configuración
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="./index.php">
									<i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>
									Salir
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>

    <!-- navbar vertical -->

    <!-- Sidebar -->
<div class="navbar-vertical navbar nav-dashboard">
        <div class="h-100" data-simplebar>
            <div class="text-center py-4">
			<img src="./assets/images/png/banner_logo.png" alt="Logo Colegio" class="img-fluid" style="max-width: 250px;">
		</div>
            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item">
                    <a class="nav-link has-arrow" href="#!" data-bs-toggle="collapse" data-bs-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                        <i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
                        Panel de Control
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link has-arrow" href="./index.php">
                        <i data-feather="monitor" class="nav-icon me-2 icon-xxs"></i>
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link has-arrow" href="./views/dashboard_student.php">
                        <i data-feather="users" class="nav-icon me-2 icon-xxs"></i>
                        Estudiante
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link has-arrow" href="./views/dashboard_matricula.php">
                        <i data-feather="user-check" class="nav-icon me-2 icon-xxs"></i>
                        Matrícula
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link has-arrow" href="./views/dashboard_grado.php">
                        <i data-feather="award" class="nav-icon me-2 icon-xxs"></i>
                        Grados - Secciones
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link has-arrow" href="./views/dashboard_docente.php">
                        <i data-feather="user-plus" class="nav-icon me-2 icon-xxs"></i>
                        Docentes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link has-arrow" href="./views/dashboard_reportes.php">
                        <i data-feather="bar-chart-2" class="nav-icon me-2 icon-xxs"></i>
                        Reportes
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link has-arrow" href="">
                        <i data-feather="settings" class="nav-icon me-2 icon-xxs"></i>
                        Usuarios
                    </a>
                </li>
            </ul>

        </div>
    </div>




<!-- page content -->
<div id="app-content">
  <div class="app-content-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
          <!-- Page header -->
          <!-- <div class="d-flex justify-content-between align-items-center mb-5">
            <h3 class="mb-0">Panel de Matrícula</h3>
            <a href="#!" class="btn btn-primary">Ver Reportes</a> 
          </div>-->
        </div>
      </div>

      <!-- Saludo -->
      <div class="bg-primary rounded-3 mb-5">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="p-6 d-lg-flex justify-content-between align-items-center">
              <div class="d-md-flex align-items-center">
                
                <div class="ms-md-4 mt-3 mt-md-0 lh-1">
                  <h3 class="text-white mb-0">Bienvenido al Panel de Administración</h3>
                  <small class="text-white">Aquí tienes un resumen de la matrícula escolar:</small>
                </div>
              </div>
              <div class="d-none d-lg-block">
                <a href="#!" class="btn btn-white">Novedades del Sistema</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tarjetas estadísticas -->
      <div class="row">
        <div class="col-xl-6 col-md-12 col-12 mb-5">
          <div class="row row-cols-lg-2 row-cols-1 g-5">
            <div class="col">
              <div class="card h-100 card-lift">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semi-bold">Estudiantes Matriculados</span>
                    <span><i data-feather="users" class="text-gray-400"></i></span>
                  </div>
                  <div class="mt-4 mb-2">
                    <h3 class="fw-bold mb-0">1,274</h3>
                  </div>
                  <span class="text-success"><i class="me-1 icon-xs" data-feather="arrow-up"></i>+3.5%</span>
                  <small>Comparado al mes anterior</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 card-lift">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semi-bold">Usuarios Registrados</span>
                    <span><i data-feather="user-check" class="text-gray-400"></i></span>
                  </div>
                  <div class="mt-4 mb-2">
                    <h3 class="fw-bold mb-0">378</h3>
                  </div>
                  <span class="text-success"><i class="me-1 icon-xs" data-feather="arrow-up"></i>+2.1%</span>
                  <small>Últimos 30 días</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 card-lift">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semi-bold">Nuevas Matrículas</span>
                    <span><i data-feather="file-plus" class="text-gray-400"></i></span>
                  </div>
                  <div class="mt-4 mb-2">
                    <h3 class="fw-bold mb-0">156</h3>
                  </div>
                  <span class="text-success"><i class="me-1 icon-xs" data-feather="arrow-up"></i>+5.8%</span>
                  <small>Este mes</small>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 card-lift">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-semi-bold">Cupos Disponibles</span>
                    <span><i data-feather="database" class="text-gray-400"></i></span>
                  </div>
                  <div class="mt-4 mb-2">
                    <h3 class="fw-bold mb-0">142</h3>
                  </div>
                  <span class="text-warning"><i class="me-1 icon-xs" data-feather="alert-triangle"></i>-1.2%</span>
                  <small>Comparado a la capacidad total</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Distribución de matrículas por nivel -->
        <div class="col-xl-6 col-md-12 col-12 mb-5">
          <div class="card h-100">
            <div class="card-body">
              <h4 class="mb-0">Distribución por Nivel Académico</h4>
			  
              <div class="row row-cols-lg-3 my-8">
                <div class="col">
                  <div>
                    <h4 class="mb-3">Primaria</h4>
                    <div class="lh-1">
                      <h4 class="fs-2 fw-bold text-info mb-0">52%</h4>
                      <span class="text-info">662 alumnos</span>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div>
                    <h4 class="mb-3">Secundaria</h4>
                    <div class="lh-1">
                      <h4 class="fs-2 fw-bold text-success mb-0">35%</h4>
                      <span class="text-success">445 alumnos</span>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div>
                    <h4 class="mb-3">Media</h4>
                    <div class="lh-1">
                      <h4 class="fs-2 fw-bold text-warning mb-0">13%</h4>
                      <span class="text-warning">167 alumnos</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-6 mb-3">
                <div class="progress" style="height: 40px;">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 52%"></div>
                  <div class="progress-bar bg-success" role="progressbar" style="width: 35%"></div>
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 13%"></div>
                </div>
              </div>
              <div>
                <small><span class="mdi mdi-lightbulb-outline me-1"></span>Datos actualizados al cierre del mes.</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mapa 
              <div class="row  mb-5">
                <div class="col-12">
                  <div class="card h-100">
    
                    <div class="card-header">
                      <h4 class="mb-0">Users by Country</h4>
                    </div>
                    <div class="card-body">
    
                      <div class="row">
                        <div class="col-xl-7 col-lg-6">
    
                          <div id="locationmap" style="width:100%; height:400px"></div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Top Regions</th>
                                <th>Sessions</th>
    
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
    
                                <td>United States</td>
                                <td><span>22,120</span><span class="ms-4 text-dark">34.54%</span></td>
    
                              </tr>
                              <tr>
    
                                <td>India</td>
                                <td><span>12,756</span><span class="ms-4 text-dark">22.43%</span></td>
    
                              </tr>
                              <tr>
    
                                <td>United Kingdom</td>
                                <td><span>8,864</span><span class="ms-4 text-dark">34.54%</span></td>
    
                              </tr>
                              <tr>
    
                                <td>Sweden</td>
                                <td><span>6,749</span><span class="ms-4 text-dark">5.29%</span></td>
    
                              </tr>
                              <tr>
    
                                <td>Russia</td>
                                <td><span>5,523</span><span class="ms-4 text-dark">4.54%</span></td>
    
                              </tr>
                              <tr>
    
                                <td>Mexico</td>
                                <td><span>3,214 </span><span class="ms-4 text-dark">3.12%</span></td>
    
                              </tr>
    
    
    
                            </tbody>
                          </table>
                        </div>
                      </div>
    
                    </div>
                  </div>
                </div>
              </div>

            -->
            <!-- row  -->
						<div class="row">
							<div class="col-xl-8 col-12 mb-5">
								<!-- card  -->
								<div class="card">
									<!-- card header  -->
									<div class="card-header">
										<h4 class="mb-0">Ultimas Solicitudes de Matriculas</h4>
									</div>
									<!-- table  -->
									<div class="card-body">
										<div class="table-responsive table-card">
											<table class="table text-nowrap mb-0 table-centered table-hover">
												<thead class="table-light">
													<tr>
														<th class=" pe-0 ">ID</th>
														<th>Estudiante</th>
														<th>Codigo Estudiantil</th>
														<th>Grado</th>
														<th>Turno</th>
														<th>Estado</th>
													</tr>
												</thead>
												<tbody>
													<?php
                                        				while($matricula = mysqli_fetch_assoc($NewMatricula)){
                                        			?>
													<tr>
														<td> <a href="#!"><?=$matricula['matricula_id']?></a></td>
														                                            <td class="ps-1">
														<div class="d-flex align-items-center">
															<!-- <a href="#!"><img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-sm rounded-circle"></a> -->
															<div class="ms-2">
															<h5 class="mb-0"><a href="#!" class="text-inherit"></a><?= $matricula['nombre_completo']?></h5>
															</div>
														</div>
														</td>
														<td><?= $matricula['codigo_estudiantil']?></td>
														<td><?= $matricula['grado']?></td>
														<td><?= $matricula['turno']?></td>
														<td><span class="badge badge-danger-soft"><?= $matricula['estado_matricula']?></span></td>
													</tr>
													<?php
                                                		}                    
                                            		?>
												</tbody>
											</table>
										</div>
									</div>
									<!-- card footer  -->
									<div class="card-footer text-center">
										<a href="views/dashboard_matricula.php" class="btn btn-primary">Ver Todas Las Matriculas</a>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-5">
								<!-- card  -->
								<div class="card h-100">
									<!-- card body  -->
									<div class="card-header d-flex align-items-center justify-content-between">
										<div>
											<h4 class="mb-0">Grados</h4>
										</div>

										<!-- dropdown  -->
										<div class="dropdown dropstart">
											<a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" id="dropdownTask" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="icon-xs" data-feather="more-vertical"></i>
											</a>
											<div class="dropdown-menu" aria-labelledby="dropdownTask">
												<a class="dropdown-item d-flex align-items-center" href="#!">Reportes</a>
												<a class="dropdown-item d-flex align-items-center" href="#!">Exportar</a>
												<a class="dropdown-item d-flex align-items-center" href="#!">Grados / Secciones</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<!-- chart  -->
										<div class="mb-6">
											<div id="perfomanceChart"></div>
										</div>
										<!-- icon with content  -->
										<div class="d-flex align-items-center justify-content-around">
											<div class="text-center">
												<i class="icon-sm text-success" data-feather="check-circle"></i>
												<h1 class="fs-2 mb-0">76%</h1>
												<p>Completed</p>
											</div>
											<div class="text-center">
												<i class="icon-sm text-warning" data-feather="trending-up"></i>
												<h1 class="fs-2 mb-0">32%</h1>
												<p>In-Progress</p>
											</div>
											<div class="text-center">
												<i class="icon-sm text-danger" data-feather="trending-down"></i>
												<h1 class="fs-2 mb-0">13%</h1>
												<p>Behind</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

            	</div>
    		</div>
        </div>

  	</main>



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

</body>

</html>