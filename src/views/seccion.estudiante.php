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

		<!-- page content -->



		<div id="app-content">
		<!-- Container fluid -->
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
						<a class="nav-link " href="../views/Estado_matricula.php">Estado de Matricula</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active " href="../views/seccion.estudiante.php">Expediente del estudiante</a>
					</li>

					<li class="nav-item">
						<a class="nav-link " href="../views/matricula_linea.php">Matricula en Linea</a>
					</li>
					
					</ul>
					</div>
				</div>
				</div>

        		<div class="row gy-5 mt-1">
					<aside class="col-xxl-3 col-xl-4 col-12 ">
						

						<!-- Información académica -->
						<div class="card mb-6">
						<div class="card-body d-flex flex-column gap-4">
							<h4 class="mb-0">Información Académica</h4>
							<table class="table table-borderless mb-0 text-nowrap table-sm">
							<tbody>
								<tr>
								<td class="px-0 d-flex align-items-center gap-2">
									<i data-feather="book" class="icon-xs text-gray-400"></i>
									<span class="text-gray-600">Grado:</span>
								</td>
								<td class="px-0 fw-semi-bold text-end text-gray-900">8° Básico</td>
								</tr>
								<tr>
								<td class="px-0 d-flex align-items-center gap-2">
									<i data-feather="clock" class="icon-xs text-gray-400"></i>
									<span class="text-gray-600">Turno:</span>
								</td>
								<td class="px-0 text-end">Matutino</td>
								</tr>
								<tr>
								<td class="px-0 d-flex align-items-center gap-2">
									<i data-feather="hash" class="icon-xs text-gray-400"></i>
									<span class="text-gray-600">Código:</span>
								</td>
								<td class="px-0 text-end">EST-10245</td>
								</tr>
								<tr>
								<td class="px-0 d-flex align-items-center gap-2">
									<i data-feather="calendar" class="icon-xs text-gray-400"></i>
									<span class="text-gray-600">Fecha Ingreso:</span>
								</td>
								<td class="px-0 text-end">10 Ene, 2024</td>
								</tr>
								<tr>
								<td class="px-0 d-flex align-items-center gap-2">
									<i data-feather="calendar" class="icon-xs text-gray-400"></i>
									<span class="text-gray-600">Última Actualización:</span>
								</td>
								<td class="px-0 text-end">08 May, 2025</td>
								</tr>
							</tbody>
							</table>
						</div>
						</div>

						<!-- Estado de matrícula -->
						<div class="card mb-6">
						<div class="card-body d-flex flex-column gap-4">
							<h4 class="mb-0">Estado de Matrícula</h4>
							<table class="table table-borderless mb-0 text-nowrap table-sm">
							<tbody>
								<tr>
								<td class="px-0 d-flex align-items-center gap-2">
									<i data-feather="check-circle" class="icon-xs text-success"></i>
									<span class="text-gray-600">Estado:</span>
								</td>
								<td class="px-0 fw-semi-bold text-end text-gray-900">Completada</td>
								</tr>
								<tr>
								<td class="px-0 d-flex align-items-center gap-2">
									<i data-feather="file-text" class="icon-xs text-warning"></i>
									<span class="text-gray-600">Documentos:</span>
								</td>
								<td class="px-0 fw-semi-bold text-end text-gray-900">3/3 Subidos</td>
								</tr>
							</tbody>
							</table>
						</div>
						</div>

						<!-- Contacto del Tutor -->
						<div class="card">
						<div class="card-body d-flex flex-column gap-4">
							<div class="d-flex flex-row justify-content-between">
							<h4 class="mb-0">Datos del Tutor</h4>
							<a href="#!">Ver perfil</a>
							</div>
							<div class="d-flex flex-column gap-4">
							<div class="d-flex flex-row gap-4 align-items-center">
								<div>
								<h5 class="mb-0">María López</h5>
								<small>
									Madre -
									<a href="#!">Responsable Legal</a>
								</small>
								</div>
							</div>

							<table class="table table-borderless mb-0 text-nowrap table-sm">
								<tbody>
								<tr>
									<td class="px-0 d-flex align-items-center gap-2">
									<i data-feather="phone" class="icon-xs text-gray-400"></i>
									<span class="text-gray-600">Teléfono</span>
									</td>
									<td class="px-0 text-end">+503 7896 1234</td>
								</tr>
								<tr>
									<td class="px-0 d-flex align-items-center gap-2">
									<i data-feather="mail" class="icon-xs text-gray-400"></i>
									<span class="text-gray-600">Email</span>
									</td>
									<td class="px-0 text-end">
									<a href="#!" class="text-inherit">maria.lopez@email.com</a>
									</td>
								</tr>
								</tbody>
							</table>
							</div>
						</div>
						</div>
					</aside>

							<div class="col-xxl-9 col-xl-8 col-12">
								<ul class="nav nav-line-bottom mb-6 text-nowrap" id="tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active py-2" id="attachments-tab" data-bs-toggle="pill" href="#attachments" role="tab" aria-controls="attachments" aria-selected="true">
											<i data-feather="paperclip" class="icon-xs me-1"></i>
											Documentos
										</a>
									</li>
								</ul>

								<div class="tab-content" id="tabContent">
									<div class="tab-pane fade show active" id="attachments" role="tabpanel" aria-labelledby="attachments-tab">
	<div>
		<h3 class="mb-5">Documentos del Estudiante</h3>
	</div>
	<div>
		<div class="d-flex flex-md-row flex-column gap-2 justify-content-between mb-6">
			<div>
				<form>
					<div class="input-group">
						<input class="form-control rounded-3" type="search" id="searchInput" placeholder="Buscar documento" />
						<span class="input-group-append">
							<button class="btn ms-n10 rounded-0 rounded-end" type="button">
								<i data-feather="search" class="text-dark"></i>
							</button>
						</span>
					</div>
				</form>
			</div>
			<div>
				<a href="#!" class="btn btn-primary">
					<i data-feather="upload" class="icon-xxs me-1"></i>
					Subir nuevo
				</a>
			</div>
		</div>

		<div class="card">
			<div class="card-body">

				<!-- Documento 1: Partida de nacimiento -->
				<div class="d-flex flex-lg-row flex-column gap-3 justify-content-between align-items-lg-center border-bottom pb-5">
					<div class="d-flex flex-column gap-lg-2 gap-1">
						<div class="d-flex flex-row gap-2 align-items-center">
							<i class="bi bi-filetype-pdf text-danger"></i>
							<h4 class="mb-0">PartidaNacimiento.pdf</h4>
						</div>
						<div class="fs-5">
							<span>1.2MB</span>
							<div class="vr mx-1"></div>
							<span>20 abril 2025, 10:15 AM</span>
							<div class="vr mx-1"></div>
							<span>
								Subido por:
								<a href="#!">Representante Legal</a>
							</span>
						</div>
					</div>
					<div class="d-flex flex-row">
						<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" title="Descargar">
							<i data-feather="download" class="icon-xs text-gray-500"></i>
						</a>
						<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" title="Eliminar">
							<i data-feather="trash-2" class="icon-xs text-gray-500"></i>
						</a>
					</div>
				</div>

				<!-- Documento 2: Certificado de notas -->
				<div class="d-flex flex-lg-row flex-column gap-3 justify-content-between align-items-lg-center border-bottom py-5">
					<div class="d-flex flex-column gap-lg-2 gap-1">
						<div class="d-flex flex-row gap-2 align-items-center">
							<i class="bi bi-file-earmark-word-fill text-primary"></i>
							<h4 class="mb-0">CertificadoNotas.docx</h4>
						</div>
						<div class="fs-5">
							<span>865KB</span>
							<div class="vr mx-1"></div>
							<span>20 abril 2025, 10:16 AM</span>
							<div class="vr mx-1"></div>
							<span>
								Subido por:
								<a href="#!">Representante Legal</a>
							</span>
						</div>
					</div>
					<div class="d-flex flex-row">
						<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" title="Descargar">
							<i data-feather="download" class="icon-xs text-gray-500"></i>
						</a>
						<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" title="Eliminar">
							<i data-feather="trash-2" class="icon-xs text-gray-500"></i>
						</a>
					</div>
				</div>

				<!-- Documento 3: Fotografía -->
				<div class="d-flex flex-lg-row flex-column gap-3 justify-content-between align-items-lg-center border-bottom py-5">
					<div class="d-flex flex-column gap-lg-2 gap-1">
						<div class="d-flex flex-row gap-2 align-items-center">
							<i class="bi bi-file-earmark-image-fill text-warning"></i>
							<h4 class="mb-0">FotografiaEstudiante.jpg</h4>
						</div>
						<div class="fs-5">
							<span>547KB</span>
							<div class="vr mx-1"></div>
							<span>20 abril 2025, 10:17 AM</span>
							<div class="vr mx-1"></div>
							<span>
								Subido por:
								<a href="#!">Representante Legal</a>
							</span>
						</div>
					</div>
					<div class="d-flex flex-row">
						<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" title="Descargar">
							<i data-feather="download" class="icon-xs text-gray-500"></i>
						</a>
						<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" title="Eliminar">
							<i data-feather="trash-2" class="icon-xs text-gray-500"></i>
						</a>
					</div>
				</div>

				<!-- Puedes seguir agregando más documentos como Acta de residencia, Carnet de vacunas, etc. -->
			</div>
		</div>
	</div>
</div>
        </div>
      </div>
    </div>
  </main>






  <!-- Scripts -->

	<?php include "../partials/scripts.php" ?>  
</body>

</html>