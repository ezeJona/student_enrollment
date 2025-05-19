<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "../partials/head.php" ?>

		<title>Matricula</title>
	</head>

	<body>
		<!-- Wrapper -->
		<main id="main-wrapper" class="main-wrapper">
			<?php include "../partials/header.php" ?>
			<!-- navbar vertical -->

			<?php include "../partials/navbar-vertical.php"?>

			<!-- Page Content -->
			<div id="app-content">
				<!-- Container fluid -->
				<div class="app-content-area">
					<div class="container-fluid">
					<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<!-- Encabezado de la página -->
						<div class="mb-6 d-md-flex flex-row justify-content-between">
						<h3 class="mb-2 mb-md-0">Detalles de Matrícula</h3>
						<div class="d-flex gap-2">
							<!-- Botón para editar información de matrícula -->
							<a href="#!" class="btn btn-outline-primary d-flex flex-row align-items-center gap-2">
							<i data-feather="edit" class="icon-xxs"></i>
							Editar Matrícula
							</a>
							<!-- Botón para enviar correo al estudiante -->
							<a href="#!" class="btn btn-outline-success d-flex flex-row gap-2 align-items-center">
							<i data-feather="mail" class="icon-xxs"></i>
							Enviar Correo
							</a>
						</div>
						</div>
					</div>
					</div>
					<div class="row mb-6">
					<div class="col-12">
						<div class="card">
						<div class="card-body d-flex flex-column gap-4">
							<!-- Encabezado de la matrícula -->
							<div class="d-md-flex flex-row justify-content-between align-items-center">
							<div class="d-flex flex-column gap-1 mb-3 mb-md-0">
								<h3 class="mb-0">Matrícula 2025 - José Ramírez</h3>
								<small>Proceso de Inscripción</small>
							</div>
							<!-- Estados de matrícula -->
							<div class="d-flex gap-2">
								<span class="badge badge-warning-soft border border-warning rounded-pill">Pendiente</span>
								<span class="badge badge-success-soft border border-success rounded-pill">Aprobado</span>
								<span class="badge badge-danger-soft border border-danger rounded-pill">Rechazado</span>
							</div>
							</div>

							<!-- Progreso del proceso -->
							<div class="row row-cols-5">
							<div class="col">
								<div class="progress" role="progressbar" aria-label="Enviado" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
								<div class="progress-bar bg-success" style="width: 100%"></div>
								</div>
							</div>
							<div class="col">
								<div class="progress" role="progressbar" aria-label="Documentos validados" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
								<div class="progress-bar bg-success" style="width: 100%"></div>
								</div>
							</div>
							<div class="col">
								<div class="progress" role="progressbar" aria-label="Entrevista realizada" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
								<div class="progress-bar bg-success" style="width: 100%"></div>
								</div>
							</div>
							<div class="col">
								<div class="progress" role="progressbar" aria-label="Aprobación final" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
								<div class="progress-bar bg-gray-300" style="width: 100%"></div>
								</div>
							</div>
							<div class="col">
								<div class="progress" role="progressbar" aria-label="Finalizado" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 8px">
								<div class="progress-bar bg-gray-300" style="width: 100%"></div>
								</div>
							</div>
							</div>

							<!-- Etapa actual -->
							<div class="d-flex flex-row gap-2">
							<small><a href="#!">Etapa actual:</a></small>
							<small><i data-feather="arrow-right" class="icon-xxs text-gray-400"></i></small>
							<small>Validacion de documentos</small>
							</div>
						</div>
						</div>
					</div>
					</div>

											<div class="row gy-5">
					<aside class="col-xxl-3 col-xl-4 col-12">
						<!-- Información general del estudiante -->
						<div class="card mb-6">
						<div class="card-body d-flex flex-column gap-5">
							<h4 class="mb-0">Estudiante</h4>
							<div class="d-flex flex-row justify-content-between align-items-center">
							<div class="d-flex flex-row gap-4 align-items-center">
								<img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
								<h5 class="mb-0">Luis Rodríguez</h5>
							</div>
							<div>
								<select class="form-select border-0" aria-label="Seleccionar estudiante">
								<option selected>Estudiante</option>
								<option value="Juan Pérez">Juan Pérez</option>
								<option value="Ana Gómez">Ana Gómez</option>
								<option value="Carlos Ruiz">Carlos Ruiz</option>
								</select>
							</div>
							</div>
						</div>
						</div>

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
								<img src="../assets/images/avatar/avatar-8.jpg" alt="avatar" class="avatar avatar-md rounded-circle" />
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
										<a class="nav-link py-2" id="attachments-tab" data-bs-toggle="pill" href="#attachments" role="tab" aria-controls="attachments" aria-selected="true">
											<i data-feather="paperclip" class="icon-xs me-1"></i>
											Documentos
										</a>
									</li>
								</ul>

								<div class="tab-content" id="tabContent">
									<div class="tab-pane fade show" id="attachments" role="tabpanel" aria-labelledby="attachments-tab">
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

									<div class="tab-pane" id="email" role="tabpanel" aria-labelledby="email-tab">
										<div>
											<h3 class="mb-5">Emails</h3>
										</div>
										<div class="d-flex flex-column gap-3 mb-4">
											<div>
												<ul class="nav nav-line-bottom" id="tab" role="tablist">
													<li class="nav-item">
														<a class="nav-link active py-2" id="mail-tab" data-bs-toggle="pill" href="#mail" role="tab" aria-controls="mail" aria-selected="true">Mails (5)</a>
													</li>

													<li class="nav-item">
														<a class="nav-link py-2" id="draft-tab" data-bs-toggle="pill" href="#draft" role="tab" aria-controls="draft" aria-selected="true">Drafts (3)</a>
													</li>
													<li class="nav-item">
														<a class="nav-link py-2" id="schedule-tab" data-bs-toggle="pill" href="#schedule" role="tab" aria-controls="schedule" aria-selected="true">Scheduled (12)</a>
													</li>
												</ul>
											</div>
											<div>
												<form>
													<div class="input-group">
														<input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search" />
														<span class="input-group-append">
															<button class="btn ms-n10 rounded-0 rounded-end" type="button">
																<svg
																	xmlns="http://www.w3.org/2000/svg"
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
										</div>

										<div class="tab-content" id="tabContent">
											<div class="tab-pane fade show active" id="mail" role="tabpanel" aria-labelledby="mail-tab">
												<div class="card">
													<div class="card-body p-0">
														<div class="table-responsive">
															<table class="table text-nowrap mb-0 table-centered">
																<thead class="">
																	<tr>
																		<th class="pe-0 rounded-start-3">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
																			<label class="form-check-label" for="flexCheckDefault1"></label>
																		</th>
																		<th class="ps-0">Subject</th>
																		<th>Sender</th>
																		<th>Date & Time</th>
																		<th>Status</th>
																		<th class="rounded-end-3">Actions</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
																				<label class="form-check-label" for="flexCheckDefault2"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Follow-up on Proposal</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>
																		<td>Jitu Chauhan</td>
																		<td>March 26, 2024 | 6:00 PM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
																				<label class="form-check-label" for="flexCheckDefault3"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Proposal for Partnership</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>

																		<td>Anita parmar</td>
																		<td>March 23, 2024 | 3:00 PM</td>
																		<td>
																			<span class="badge badge-warning-soft border border-warning rounded-pill">Unread</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" />
																				<label class="form-check-label" for="flexCheckDefault4"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Pricing Inquiry</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>
																		<td>Sandip Chauhan</td>
																		<td>March 20, 2024 | 2:00 PM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" />
																				<label class="form-check-label" for="flexCheckDefault5"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Feedback on Demo</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>
																		<td>Manasvi Suthar</td>
																		<td>March 19, 2024 | 01:20 PM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6" />
																				<label class="form-check-label" for="flexCheckDefault6"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Meeting Confirmation</h5>
																				<span class="">jane@example.com</span>
																			</div>
																		</td>
																		<td>Jitu Chauhan</td>
																		<td>March 19, 2024 | 11:35 AM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="card-footer d-md-flex justify-content-between align-items-center">
														<span>Showing 1 to 5 of 12 entries</span>

														<ul class="pagination mb-0 mt-2">
															<li class="page-item">
																<a class="page-link" href="#!">Prev</a>
															</li>
															<li class="page-item active">
																<a class="page-link" href="#!">1</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">2</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">3</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">Next</a>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="tab-pane" id="draft" role="tabpanel" aria-labelledby="draft-tab">
												<div class="card">
													<div class="card-body p-0">
														<div class="table-responsive">
															<table class="table text-nowrap mb-0 table-centered">
																<thead class="">
																	<tr>
																		<th class="pe-0 rounded-start-3">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
																			<label class="form-check-label" for="flexCheckDefault1"></label>
																		</th>
																		<th class="ps-0">Subject</th>
																		<th>Sender</th>
																		<th>Date & Time</th>
																		<th>Status</th>
																		<th class="rounded-end-3">Actions</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
																				<label class="form-check-label" for="flexCheckDefault2"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Follow-up on Proposal</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>
																		<td>Jitu Chauhan</td>
																		<td>March 26, 2024 | 6:00 PM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
																				<label class="form-check-label" for="flexCheckDefault3"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Proposal for Partnership</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>

																		<td>Anita parmar</td>
																		<td>March 23, 2024 | 3:00 PM</td>
																		<td>
																			<span class="badge badge-warning-soft border border-warning rounded-pill">Unread</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" />
																				<label class="form-check-label" for="flexCheckDefault4"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Pricing Inquiry</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>
																		<td>Sandip Chauhan</td>
																		<td>March 20, 2024 | 2:00 PM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" />
																				<label class="form-check-label" for="flexCheckDefault5"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Feedback on Demo</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>
																		<td>Manasvi Suthar</td>
																		<td>March 19, 2024 | 01:20 PM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6" />
																				<label class="form-check-label" for="flexCheckDefault6"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Meeting Confirmation</h5>
																				<span class="">jane@example.com</span>
																			</div>
																		</td>
																		<td>Jitu Chauhan</td>
																		<td>March 19, 2024 | 11:35 AM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="card-footer d-md-flex justify-content-between align-items-center">
														<span>Showing 1 to 5 of 12 entries</span>

														<ul class="pagination mb-0 mt-2">
															<li class="page-item">
																<a class="page-link" href="#!">Prev</a>
															</li>
															<li class="page-item active">
																<a class="page-link" href="#!">1</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">2</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">3</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">Next</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
												<div class="card">
													<div class="card-body p-0">
														<div class="table-responsive">
															<table class="table text-nowrap mb-0 table-centered">
																<thead class="">
																	<tr>
																		<th class="pe-0 rounded-start-3">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" />
																			<label class="form-check-label" for="flexCheckDefault1"></label>
																		</th>
																		<th class="ps-0">Subject</th>
																		<th>Sender</th>
																		<th>Date & Time</th>
																		<th>Status</th>
																		<th class="rounded-end-3">Actions</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
																				<label class="form-check-label" for="flexCheckDefault2"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Follow-up on Proposal</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>
																		<td>Jitu Chauhan</td>
																		<td>March 26, 2024 | 6:00 PM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
																				<label class="form-check-label" for="flexCheckDefault3"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Proposal for Partnership</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>

																		<td>Anita parmar</td>
																		<td>March 23, 2024 | 3:00 PM</td>
																		<td>
																			<span class="badge badge-warning-soft border border-warning rounded-pill">Unread</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" />
																				<label class="form-check-label" for="flexCheckDefault4"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Pricing Inquiry</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>
																		<td>Sandip Chauhan</td>
																		<td>March 20, 2024 | 2:00 PM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" />
																				<label class="form-check-label" for="flexCheckDefault5"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Feedback on Demo</h5>
																				<span class="text-gray-500">jane@example.com</span>
																			</div>
																		</td>
																		<td>Manasvi Suthar</td>
																		<td>March 19, 2024 | 01:20 PM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="pe-0">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6" />
																				<label class="form-check-label" for="flexCheckDefault6"></label>
																			</div>
																		</td>
																		<td class="ps-0">
																			<div class="d-flex flex-column gap-1 ms-2">
																				<h5 class="mb-0">Meeting Confirmation</h5>
																				<span class="">jane@example.com</span>
																			</div>
																		</td>
																		<td>Jitu Chauhan</td>
																		<td>March 19, 2024 | 11:35 AM</td>
																		<td>
																			<span class="badge badge-success-soft border border-success rounded-pill">Read</span>
																		</td>
																		<td>
																			<a href="#!">View</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="card-footer d-md-flex justify-content-between align-items-center">
														<span>Showing 1 to 5 of 12 entries</span>

														<ul class="pagination mb-0 mt-2">
															<li class="page-item">
																<a class="page-link" href="#!">Prev</a>
															</li>
															<li class="page-item active">
																<a class="page-link" href="#!">1</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">2</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">3</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">Next</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade show" id="call" role="tabpanel" aria-labelledby="call-tab">
										<div>
											<h3 class="mb-5">Calls</h3>
										</div>
										<div class="d-flex flex-column gap-4">
											<div class="d-flex flex-row justify-content-between">
												<div>
													<select class="form-select" aria-label="Default select example">
														<option selected>All Call</option>
														<option value="Outbound">Outbound</option>
														<option value="Inbound">Inbound</option>
														<option value="Sales">Sales</option>
														<option value="Follow up">Follow up</option>
														<option value="Feedback">Feedback</option>
													</select>
												</div>
												<div>
													<a href="#!" class="btn btn-primary">
														<i data-feather="plus" class="icon-xxs me-1"></i>
														Add new Call
													</a>
												</div>
											</div>

											<div class="card">
												<div class="card-body p-0">
													<div class="table-responsive">
														<table class="table text-nowrap mb-0 table-centered">
															<thead>
																<tr>
																	<th class="rounded-start-3 pe-0">
																		<input class="form-check-input" type="checkbox" value="" id="checkAll" />
																		<label class="form-check-label" for="checkAll"></label>
																	</th>
																	<th class="ps-0">Caller Name</th>
																	<th>Call Type</th>
																	<th>Date & Time</th>
																	<th>Created by</th>
																	<th class="rounded-end-3">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" />
																			<label class="form-check-label" for="flexCheckDefault20"></label>
																		</div>
																	</td>
																	<td class="ps-0">
																		<div class="d-flex flex-row gap-2 align-items-center ms-2">
																			<img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-sm rounded-circle" />
																			<h5 class="mb-0">
																				<a href="#!" class="text-inherit">John Smith</a>
																			</h5>
																		</div>
																	</td>
																	<td>Outbound</td>
																	<td>March 26, 2024 | 6:00 PM</td>
																	<td>Jitu Chauhan</td>
																	<td>
																		<a href="#!">View</a>
																	</td>
																</tr>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault21" />
																			<label class="form-check-label" for="flexCheckDefault21"></label>
																		</div>
																	</td>
																	<td class="ps-0">
																		<div class="d-flex flex-row gap-2 align-items-center ms-2">
																			<img src="../assets/images/avatar/avatar-2.jpg" alt="avatar" class="avatar avatar-sm rounded-circle" />
																			<h5 class="mb-0">
																				<a href="#!" class="text-inherit">Jane Doe</a>
																			</h5>
																		</div>
																	</td>
																	<td>Inbound</td>
																	<td>March 26, 2024 | 6:00 PM</td>
																	<td>Jitu Chauhan</td>
																	<td>
																		<a href="#!">View</a>
																	</td>
																</tr>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22" />
																			<label class="form-check-label" for="flexCheckDefault22"></label>
																		</div>
																	</td>
																	<td class="ps-0">
																		<div class="d-flex flex-row gap-2 align-items-center ms-2">
																			<img src="../assets/images/avatar/avatar-3.jpg" alt="avatar" class="avatar avatar-sm rounded-circle" />
																			<h5 class="mb-0"><a href="#!" class="text-inherit">Alex Johnson</a></h5>
																		</div>
																	</td>
																	<td>Sales</td>
																	<td>March 26, 2024 | 6:00 PM</td>
																	<td>Anita Parmar</td>
																	<td>
																		<a href="#!">View</a>
																	</td>
																</tr>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault23" />
																			<label class="form-check-label" for="flexCheckDefault23"></label>
																		</div>
																	</td>
																	<td class="ps-0">
																		<div class="d-flex flex-row gap-2 align-items-center ms-2">
																			<img src="../assets/images/avatar/avatar-4.jpg" alt="avatar" class="avatar avatar-sm rounded-circle" />
																			<h5 class="mb-0"><a href="#!" class="text-inherit">Emily Brown</a></h5>
																		</div>
																	</td>
																	<td>Follow-up</td>
																	<td>March 26, 2024 | 6:00 PM</td>
																	<td>Sandip Chauhan</td>
																	<td>
																		<a href="#!">View</a>
																	</td>
																</tr>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24" />
																			<label class="form-check-label" for="flexCheckDefault24"></label>
																		</div>
																	</td>
																	<td class="ps-0">
																		<div class="d-flex flex-row gap-2 align-items-center ms-2">
																			<img src="../assets/images/avatar/avatar-5.jpg" alt="avatar" class="avatar avatar-sm rounded-circle" />
																			<h5 class="mb-0"><a href="#!" class="text-inherit">Mark Thompson</a></h5>
																		</div>
																	</td>
																	<td>Feedback</td>
																	<td>March 26, 2024 | 6:00 PM</td>
																	<td>
																		<span>Manasvi Suthar</span>
																	</td>
																	<td>
																		<a href="#!">View</a>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="card-footer d-flex justify-content-between align-items-center">
													<span>Showing 1 to 5 of 12 entries</span>

													<ul class="pagination mb-0 mt-2">
														<li class="page-item">
															<a class="page-link" href="#!">Prev</a>
														</li>
														<li class="page-item active">
															<a class="page-link" href="#!">1</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#!">2</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#!">3</a>
														</li>
														<li class="page-item">
															<a class="page-link" href="#!">Next</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade show" id="task" role="tabpanel" aria-labelledby="task-tab">
										<div>
											<h3 class="mb-5">Tasks</h3>
										</div>
										<div class="d-flex flex-column gap-6">
											<div class="d-flex flex-md-row flex-column gap-2 justify-content-between">
												<div class="d-flex flex-row gap-3 align-items-center">
													<div>
														<form>
															<div class="input-group">
																<input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search" />
																<span class="input-group-append">
																	<button class="btn ms-n10 rounded-0 rounded-end" type="button">
																		<svg
																			xmlns="http://www.w3.org/2000/svg"
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
													<a href="#!" class="text-inherit">
														<span>
															<i data-feather="sliders" class="icon-xs me-1"></i>
														</span>
														<span class="">Filter</span>
													</a>
												</div>
												<div>
													<a href="#!" class="btn btn-primary">
														<svg
															xmlns="http://www.w3.org/2000/svg"
															width="24"
															height="24"
															viewBox="0 0 24 24"
															fill="none"
															stroke="currentColor"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-plus icon-xxs me-1"
														>
															<line x1="12" y1="5" x2="12" y2="19"></line>
															<line x1="5" y1="12" x2="19" y2="12"></line>
														</svg>
														Create Task
													</a>
												</div>
											</div>
											<div>
												<div class="card">
													<div class="table-responsive">
														<table class="table text-nowrap mb-0 table-centered">
															<thead>
																<tr>
																	<th class="rounded-start-3">Status</th>
																	<th>Task Title</th>
																	<th>Task type</th>
																	<th>Assigned To</th>
																	<th>Due Date</th>
																	<th>Priority</th>
																	<th class="rounded-end-3">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" />
																			<label class="form-check-label" for="flexCheckDefault20"></label>
																		</div>
																	</td>

																	<td><a href="#!">Follow-up Call</a></td>
																	<td class="text-gray-600">Call</td>
																	<td>
																		<a href="#!">Jitu Chauhan</a>
																	</td>
																	<td class="text-gray-600">Mar 16,2024 10:00 AM</td>
																	<td><span class="badge badge-danger-soft border-danger border rounded-pill">High</span></td>
																	<td class="text-center">
																		<div class="dropdown">
																			<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
																				<i data-feather="more-horizontal" class="icon-xs text-gray-400"></i>
																			</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="#">Action</a></li>
																				<li><a class="dropdown-item" href="#">Another action</a></li>
																				<li><a class="dropdown-item" href="#">Something else here</a></li>
																			</ul>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" />
																			<label class="form-check-label" for="flexCheckDefault20"></label>
																		</div>
																	</td>

																	<td><a href="#!">Send Proposal</a></td>
																	<td class="text-gray-600">Email</td>
																	<td>
																		<a href="#!">Anita parmar</a>
																	</td>
																	<td class="text-gray-600">Mar 16,2024 10:00 AM</td>
																	<td><span class="badge badge-warning-soft border-warning border rounded-pill">Medium</span></td>
																	<td class="text-center">
																		<div class="dropdown">
																			<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
																				<i data-feather="more-horizontal" class="icon-xs text-gray-400"></i>
																			</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="#">Action</a></li>
																				<li><a class="dropdown-item" href="#">Another action</a></li>
																				<li><a class="dropdown-item" href="#">Something else here</a></li>
																			</ul>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" />
																			<label class="form-check-label" for="flexCheckDefault20"></label>
																		</div>
																	</td>

																	<td><a href="#!">Schedule Demo</a></td>
																	<td class="text-gray-600">Call</td>
																	<td>
																		<a href="#!">Sandip Chauhan</a>
																	</td>
																	<td class="text-gray-600">Mar 16,2024 10:00 AM</td>
																	<td><span class="badge badge-info-soft border-info border rounded-pill">Low</span></td>
																	<td class="text-center">
																		<div class="dropdown">
																			<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
																				<i data-feather="more-horizontal" class="icon-xs text-gray-400"></i>
																			</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="#">Action</a></li>
																				<li><a class="dropdown-item" href="#">Another action</a></li>
																				<li><a class="dropdown-item" href="#">Something else here</a></li>
																			</ul>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" />
																			<label class="form-check-label" for="flexCheckDefault20"></label>
																		</div>
																	</td>

																	<td><a href="#!">Follow-up Email</a></td>
																	<td class="text-gray-600">Email</td>
																	<td>
																		<a href="#!">Sandip Chauhan</a>
																	</td>
																	<td class="text-gray-600">Mar 16,2024 10:00 AM</td>
																	<td><span class="badge badge-info-soft border-info border rounded-pill">Low</span></td>
																	<td class="text-center">
																		<div class="dropdown">
																			<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
																				<i data-feather="more-horizontal" class="icon-xs text-gray-400"></i>
																			</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="#">Action</a></li>
																				<li><a class="dropdown-item" href="#">Another action</a></li>
																				<li><a class="dropdown-item" href="#">Something else here</a></li>
																			</ul>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="pe-0">
																		<div class="form-check">
																			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault20" />
																			<label class="form-check-label" for="flexCheckDefault20"></label>
																		</div>
																	</td>

																	<td><a href="#!">Review Contract</a></td>
																	<td class="text-gray-600">To Do</td>
																	<td>
																		<a href="#!">Sandip Chauhan</a>
																	</td>
																	<td class="text-gray-600">Mar 16,2024 10:00 AM</td>
																	<td><span class="badge badge-info-soft border-info border rounded-pill">Low</span></td>
																	<td class="text-center">
																		<div class="dropdown">
																			<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
																				<i data-feather="more-horizontal" class="icon-xs text-gray-400"></i>
																			</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="#">Action</a></li>
																				<li><a class="dropdown-item" href="#">Another action</a></li>
																				<li><a class="dropdown-item" href="#">Something else here</a></li>
																			</ul>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>

													<div class="card-footer d-md-flex justify-content-between align-items-center">
														<span>Showing 1 to 5 of 12 entries</span>

														<ul class="pagination mb-0 mt-2">
															<li class="page-item">
																<a class="page-link" href="#!">Prev</a>
															</li>
															<li class="page-item active">
																<a class="page-link" href="#!">1</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">2</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">3</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#!">Next</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade show" id="meetings" role="tabpanel" aria-labelledby="meetings-tab">
										<div>
											<h3 class="mb-5">Meetings</h3>
										</div>
										<div class="d-flex flex-column gap-6">
											<div class="d-flex flex-md-row flex-column gap-2 justify-content-between">
												<div>
													<form>
														<div class="input-group">
															<input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search" />
															<span class="input-group-append">
																<button class="btn ms-n10 rounded-0 rounded-end" type="button">
																	<svg
																		xmlns="http://www.w3.org/2000/svg"
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
												<div>
													<a href="#!" class="btn btn-primary">
														<svg
															xmlns="http://www.w3.org/2000/svg"
															width="24"
															height="24"
															viewBox="0 0 24 24"
															fill="none"
															stroke="currentColor"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-plus icon-xxs me-1"
														>
															<line x1="12" y1="5" x2="12" y2="19"></line>
															<line x1="5" y1="12" x2="19" y2="12"></line>
														</svg>
														Add Meeting
													</a>
												</div>
											</div>
											<div>
												<div class="row g-5">
													<div class="col-md-6">
														<div class="card">
															<div class="card-body d-flex flex-column gap-6">
																<div class="d-flex flex-column gap-2">
																	<div><h4 class="mb-0">Monthly Pipeline Analysis</h4></div>
																	<div class="d-flex flex-column flex-xxl-row gap-1 gap-xxl-4">
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="calendar" class="icon-xs text-gray-400"></i>
																			<span>March 15, 2024</span>
																		</div>
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="clock" class="icon-xs text-gray-400"></i>
																			<span>10:00 AM - 11:30 AM</span>
																		</div>
																	</div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="avatar-group">
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-14.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-15.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-13.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm avatar-primary">
																			<span class="avatar-initials rounded-circle">2+</span>
																		</span>
																	</div>
																	<div><span class="badge badge-info-soft border border-info">Scheduled</span></div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="d-flex flex-row gap-2 align-items-center">
																		<span><img src="../assets/images/svg/zoom.svg" alt="zoom" /></span>
																		<span>Virtual (Zoom Meeting)</span>
																	</div>
																	<div>
																		<a href="#!" class="btn btn-primary-soft btn-sm">Join now</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="card">
															<div class="card-body d-flex flex-column gap-6">
																<div class="d-flex flex-column gap-2">
																	<div><h4 class="mb-0">Strategy Session for Lead Generation</h4></div>
																	<div class="d-flex flex-column flex-xxl-row gap-1 gap-xxl-4">
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="calendar" class="icon-xs text-gray-400"></i>
																			<span>March 15, 2024</span>
																		</div>
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="clock" class="icon-xs text-gray-400"></i>
																			<span>10:00 AM - 11:30 AM</span>
																		</div>
																	</div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="avatar-group">
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-16.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-15.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm avatar-primary">
																			<span class="avatar-initials rounded-circle">2+</span>
																		</span>
																	</div>
																	<div><span class="badge badge-info-soft border border-info">Scheduled</span></div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="d-flex flex-row gap-2 align-items-center">
																		<span><img src="../assets/images/svg/google-meet.svg" alt="google" /></span>
																		<span>Virtual (Google Meet)</span>
																	</div>
																	<div>
																		<a href="#!" class="btn btn-primary-soft btn-sm">Join now</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="card">
															<div class="card-body d-flex flex-column gap-6">
																<div class="d-flex flex-column gap-2">
																	<div><h4 class="mb-0">Marketing Campaign Planning</h4></div>
																	<div class="d-flex flex-column flex-xxl-row gap-1 gap-xxl-4">
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="calendar" class="icon-xs text-gray-400"></i>
																			<span>March 15, 2024</span>
																		</div>
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="clock" class="icon-xs text-gray-400"></i>
																			<span>10:00 AM - 11:30 AM</span>
																		</div>
																	</div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="avatar-group">
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-16.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-15.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm avatar-primary">
																			<span class="avatar-initials rounded-circle">2+</span>
																		</span>
																	</div>
																	<div><span class="badge badge-info-soft border border-info">Scheduled</span></div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="d-flex flex-row gap-2 align-items-center">
																		<span><img src="../assets/images/svg/google-meet.svg" alt="google" /></span>
																		<span>Virtual (Google Meet)</span>
																	</div>
																	<div>
																		<a href="#!" class="btn btn-primary-soft btn-sm">Join now</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="card">
															<div class="card-body d-flex flex-column gap-6">
																<div class="d-flex flex-column gap-2">
																	<div><h4 class="mb-0">Customer Success Review</h4></div>
																	<div class="d-flex flex-column flex-xxl-row gap-1 gap-xxl-4">
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="calendar" class="icon-xs text-gray-400"></i>
																			<span>March 15, 2024</span>
																		</div>
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="clock" class="icon-xs text-gray-400"></i>
																			<span>10:00 AM - 11:30 AM</span>
																		</div>
																	</div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="avatar-group">
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-16.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-15.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm avatar-primary">
																			<span class="avatar-initials rounded-circle">2+</span>
																		</span>
																	</div>
																	<div><span class="badge badge-info-soft border border-info">Scheduled</span></div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="d-flex flex-row gap-2 align-items-center">
																		<span><img src="../assets/images/svg/zoom.svg" alt="zoom" /></span>
																		<span>Virtual (Zoom Meeting)</span>
																	</div>
																	<div>
																		<a href="#!" class="btn btn-primary-soft btn-sm">Join now</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="card">
															<div class="card-body d-flex flex-column gap-6">
																<div class="d-flex flex-column gap-2">
																	<div><h4 class="mb-0">Quarterly Business Review</h4></div>
																	<div class="d-flex flex-column flex-xxl-row gap-1 gap-xxl-4">
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="calendar" class="icon-xs text-gray-400"></i>
																			<span>March 15, 2024</span>
																		</div>
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="clock" class="icon-xs text-gray-400"></i>
																			<span>10:00 AM - 11:30 AM</span>
																		</div>
																	</div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="avatar-group">
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-5.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-6.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-7.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm avatar-primary">
																			<span class="avatar-initials rounded-circle">2+</span>
																		</span>
																	</div>
																	<div><span class="badge badge-success-soft border border-success">Meeting Completed</span></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="card">
															<div class="card-body d-flex flex-column gap-6">
																<div class="d-flex flex-column gap-2">
																	<div><h4 class="mb-0">Product Demo Request</h4></div>
																	<div class="d-flex flex-column flex-xxl-row gap-1 gap-xxl-4">
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="calendar" class="icon-xs text-gray-400"></i>
																			<span>March 15, 2024</span>
																		</div>
																		<div class="d-flex flex-row gap-2 align-items-center">
																			<i data-feather="clock" class="icon-xs text-gray-400"></i>
																			<span>10:00 AM - 11:30 AM</span>
																		</div>
																	</div>
																</div>
																<div class="d-flex flex-row justify-content-between">
																	<div class="avatar-group">
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle" />
																		</span>
																		<span class="avatar avatar-sm">
																			<img alt="avatar" src="../assets/images/avatar/avatar-5.jpg" class="rounded-circle" />
																		</span>

																		<span class="avatar avatar-sm avatar-primary">
																			<span class="avatar-initials rounded-circle">2+</span>
																		</span>
																	</div>
																	<div><span class="badge badge-danger-soft border border-danger">Canceled</span></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade show" id="attachments" role="tabpanel" aria-labelledby="attachments-tab">
										<div>
											<h3 class="mb-5">Attachments</h3>
										</div>
										<div>
											<div class="d-flex flex-md-row flex-column gap-2 justify-content-between mb-6">
												<div>
													<form>
														<div class="input-group">
															<input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search" />
															<span class="input-group-append">
																<button class="btn ms-n10 rounded-0 rounded-end" type="button">
																	<svg
																		xmlns="http://www.w3.org/2000/svg"
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
												<div>
													<a href="#!" class="btn btn-primary">
														<svg
															xmlns="http://www.w3.org/2000/svg"
															width="24"
															height="24"
															viewBox="0 0 24 24"
															fill="none"
															stroke="currentColor"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-plus icon-xxs me-1"
														>
															<line x1="12" y1="5" x2="12" y2="19"></line>
															<line x1="5" y1="12" x2="19" y2="12"></line>
														</svg>
														Upload new
													</a>
												</div>
											</div>
											<div>
												<div class="card">
													<div class="card-body">
														<div class="d-flex flex-lg-row flex-column gap-3 justify-content-between align-items-lg-center border-bottom pb-5">
															<div class="d-flex flex-column gap-lg-2 gap-1">
																<div class="d-flex flex-row gap-2 align-items-center">
																	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf text-gray-500" viewBox="0 0 16 16">
																		<path
																			fill-rule="evenodd"
																			d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z"
																		/>
																	</svg>
																	<h4 class="mb-0">Proposal.pdf</h4>
																</div>
																<div class="fs-5">
																	<span>1.03mb</span>
																	<div class="vr mx-1"></div>
																	<span>March 19, 2025 11:53 AM</span>
																	<div class="vr mx-1"></div>
																	<span>
																		Uploaded by:
																		<a href="#!">Jitu Chauhan</a>
																	</span>
																</div>
															</div>
															<div class="d-flex flex-row">
																<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle"><i data-feather="download" class="icon-xs text-gray-500"></i></a>
																<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle"><i data-feather="trash-2" class="icon-xs text-gray-500"></i></a>
															</div>
														</div>

														<div class="d-flex flex-lg-row flex-column gap-3 justify-content-between align-items-lg-center border-bottom py-5">
															<div class="d-flex flex-column gap-lg-2 gap-1">
																<div class="d-flex flex-row gap-2 align-items-center">
																	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-word-fill text-gray-500" viewBox="0 0 16 16">
																		<path
																			d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M5.485 6.879l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 1 1 .97-.242z"
																		/>
																	</svg>
																	<h4 class="mb-0">MeetingNotes.docx</h4>
																</div>
																<div class="fs-5">
																	<span>836kb</span>
																	<div class="vr mx-1"></div>
																	<span>March 19, 2025 11:53 AM</span>
																	<div class="vr mx-1"></div>
																	<span>
																		Uploaded by:
																		<a href="#!">Sandip Chauhan</a>
																	</span>
																</div>
															</div>
															<div class="d-flex flex-row">
																<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle"><i data-feather="download" class="icon-xs text-gray-500"></i></a>
																<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle"><i data-feather="trash-2" class="icon-xs text-gray-500"></i></a>
															</div>
														</div>

														<div class="d-flex flex-lg-row flex-column gap-3 justify-content-between align-items-lg-center border-bottom py-5">
															<div class="d-flex flex-column gap-lg-2 gap-1">
																<div class="d-flex flex-row gap-2 align-items-center">
																	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-ppt-fill text-gray-500" viewBox="0 0 16 16">
																		<path d="M8.188 10H7V6.5h1.188a1.75 1.75 0 1 1 0 3.5" />
																		<path
																			d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM7 5.5a1 1 0 0 0-1 1V13a.5.5 0 0 0 1 0v-2h1.188a2.75 2.75 0 0 0 0-5.5z"
																		/>
																	</svg>
																	<h4 class="mb-0">Presentation.pptx</h4>
																</div>
																<div class="fs-5">
																	<span>2.21mb</span>
																	<div class="vr mx-1"></div>
																	<span>March 19, 2025 11:53 AM</span>
																	<div class="vr mx-1"></div>
																	<span>
																		Uploaded by:
																		<a href="#!">Anita parmar</a>
																	</span>
																</div>
															</div>
															<div class="d-flex flex-row">
																<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle"><i data-feather="download" class="icon-xs text-gray-500"></i></a>
																<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle"><i data-feather="trash-2" class="icon-xs text-gray-500"></i></a>
															</div>
														</div>

														<div class="d-flex flex-column gap-5 pt-5">
															<div class="d-flex flex-lg-row flex-column gap-3 justify-content-between align-items-lg-center">
																<div class="d-flex flex-column gap-lg-2 gap-1">
																	<div class="d-flex flex-row gap-2 align-items-center">
																		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-ppt-fill text-gray-500" viewBox="0 0 16 16">
																			<path d="M8.188 10H7V6.5h1.188a1.75 1.75 0 1 1 0 3.5" />
																			<path
																				d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2zM7 5.5a1 1 0 0 0-1 1V13a.5.5 0 0 0 1 0v-2h1.188a2.75 2.75 0 0 0 0-5.5z"
																			/>
																		</svg>
																		<h4 class="mb-0">DashUI-Preview.jpg</h4>
																	</div>
																	<div class="fs-5">
																		<span>2.3mb</span>
																		<div class="vr mx-1"></div>
																		<span>March 19, 2025 11:53 AM</span>
																		<div class="vr mx-1"></div>
																		<span>
																			Uploaded by:
																			<a href="#!">Jitu Chauhan</a>
																		</span>
																	</div>
																</div>
																<div class="d-flex flex-row">
																	<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle"><i data-feather="download" class="icon-xs text-gray-500"></i></a>
																	<a href="#!" class="btn btn-icon btn-ghost btn-sm rounded-circle"><i data-feather="trash-2" class="icon-xs text-gray-500"></i></a>
																</div>
															</div>
															<div>
																<img src="../assets/images/png/bootstrap-5-admin-dashboard-template 1.png" alt="bootstrap 5 admin dashboard template" class="img-fluid rounded" />
															</div>
														</div>
													</div>
												</div>
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
		<!-- Modal -->
		<div class="modal fade" id="add-edit-modal" tabindex="-1" aria-labelledby="add-edit-modal-label" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0">
						<h4 class="modal-title" id="add-edit-modal-label">Add New Contact</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close-modal"></button>
					</div>
					<div class="modal-body">
						<div>
							<form>
								<div>
									<div class="d-flex align-items-center mb-4">
										<div>
											<img class="image avatar avatar-lg" src="../assets/images/avatar/avatar-1.jpg" id="company-logo" alt="Image" />
										</div>
										<div class="file-upload btn btn-outline-white ms-4">
											<input type="file" class="file-input opacity-0" />
											Upload Photo
										</div>
									</div>
								</div>
								<div class="mb-3">
									<label class="form-label" for="company-name-field">Company</label>
									<input type="text" class="form-control" placeholder="Enter Company Name" id="company-name-field" required />
								</div>
								<div class="mb-3">
									<label class="form-label" for="company-owner-field">Owner's Name</label>
									<input type="text" class="form-control" placeholder="Enter Owner's Name" id="company-owner-field" required />
								</div>
								<div class="mb-3">
									<label class="form-label" for="category-field">Category</label>
									<input type="text" class="form-control" placeholder="Enter Category" id="category-field" required />
								</div>
								<div class="mb-3">
									<label class="form-label" for="rating-field">Rating</label>
									<input type="number" step=".01" class="form-control" placeholder="Enter Rating" id="rating-field" required />
								</div>
								<div class="mb-3">
									<label class="form-label" for="email-field">Email</label>
									<input type="email" class="form-control" placeholder="Enter Email" id="email-field" required />
								</div>
								<div class="mb-3">
									<label class="form-label" for="location-field">Location</label>
									<input type="text" class="form-control" placeholder="Location" id="location-field" required />
								</div>
								<div class="mb-3">
									<label class="form-label" for="about-company-field">About Company</label>
									<textarea type="text" class="form-control" placeholder="Enter About Company" id="about-company-field" required rows="3"></textarea>
								</div>
								<div class="d-flex justify-content-end">
									<button type="submit" class="btn btn-primary" id="add-btn">+ Add Company</button>
									<button type="submit" class="btn btn-primary" id="update-btn">Update</button>
									<input type="hidden" class="form-control" placeholder="ID" id="id-field" />
									<button class="btn btn-light ms-2" data-bs-dismiss="modal" aria-label="Close">Close</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<!-- flatpickr -->
		<script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
		<?php include "../partials/scripts.php" ?>

		<!-- popper js -->
		<script src="../assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>

		<!-- tippy js -->
		<script src="../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
		<script src="../assets/js/vendors/tooltip.js"></script>

		<!-- Listjs required js scripts -->
	</body>
</html>
