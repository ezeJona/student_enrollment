<!DOCTYPE html>
<html lang="es">
	<head>
		<?php include "../partials/head.php" ?>
		<title>Colegio Bello Horizonte</title>
	</head>

	<body>
		<main id="main-wrapper" class="main-wrapper">
			<?php include "../partials/header.php" ?>
			<!-- navbar vertical -->
			<div class="app-menu">
				<?php include "../partials/navbar-vertical.php"?>
			</div>

			<!-- Page content -->
			<div id="app-content">
				<!-- Container fluid -->

				<div class="app-content-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-12">
								<!-- Page header -->
								<div class="mb-5">
									<h3 class="mb-0 ">Grados</h3>

								</div>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col-12">
								<div class="d-lg-flex flex-row align-items-center justify-content-between">
									<div class="mb-3 mb-lg-0">
										<label for="dealSearchForm" class="form-label visually-hidden">Searchs</label>
										<input type="search" class="form-control" id="dealSearchForm" name="dealSearchForm" placeholder="Search Deals, client name" />
									</div>

									<div class="d-flex flex-column flex-md-row gap-3">
										<div>
											<select class="form-select" aria-label="Default select example" id="gradoSelect">
												<option selected>Grados</option>
                        <option value="grado1">1° Grado</option>
                        <option value="grado2">2° Grado</option>
											</select>
										</div>
										<div class="d-flex gap-3">
											<div>
												<a href="#!" class="btn btn-outline-white">
													Export

													<i data-feather="upload" class="icon-xxs ms-2"></i>
												</a>
											</div>

											<div>
												<a href="#!" class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
													<i data-feather="plus" class="icon-xxs"></i>
													Create Deal
												</a>
												<!-- Modal -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					<div class="row grado-card" data-grado="grado2" style="display: none;">
							<div class="col-12">
								<div class="task-kanban-container pb-8">
									<!-- Aca !!-->
									

                  					<div class="bg-gray-300 shadow-none border-top rounded-3 p-3 border-opacity-25 task-card border-top border-secondary me-4 pb-0" >
										<div class="d-flex flex-column gap-2 mb-4">
											<div class="d-flex flex-row justify-content-between">
												<div>
													<h4 class="mb-0 fs-5">Prospecting</h4>
												</div>
												<div class="d-flex flex-row gap-2">
													<div>
														<a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
															<i data-feather="plus" class="icon-xxs"></i>
														</a>
														<!-- Modal -->
													</div>

													<div>
														<div class="dropdown dropstart">
															<a href="#!" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i data-feather="more-horizontal" class="icon-xxs"></i>
															</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="#">Action</a></li>
																<li><a class="dropdown-item" href="#">Another action</a></li>
																<li><a class="dropdown-item" href="#">Something else here</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="d-flex flex-row justify-content-between">
												<div class="text-dark">
													<span>Total:</span>
													<span class="fw-semi-bold">$380,000.00</span>
												</div>
												<div>
													<span class="badge rounded-circle badge-secondary-soft">4</span>
												</div>
											</div>
										</div>
										<div class="task-kanban">
											<div class="card">
											<div class="card-body d-flex flex-column">
												<div class="d-flex flex-column gap-3">
												<div class="d-flex flex-column gap-1">
													<h4 class="mb-0">
													<a href="#!">Sección A - 1° Grado</a>
													</h4>
													<span class="text-gray-400">Turno Matutino</span>
												</div>
												<div class="d-flex flex-row justify-content-between">
													<span>Estudiantes:</span>
													<span>25</span>
												</div>
												</div>

												<hr class="my-4" />

												<div class="d-flex flex-row justify-content-between align-items-center">
												<div>
													<img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="rounded-circle avatar-xs" />
												</div>
												<div>
													<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
													<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
													</a>
												</div>
												</div>

												<div class="collapse" id="collapseExample1">
												<div class="mt-4 d-flex flex-column gap-2">
													<h4 class="mb-0">Información de la sección</h4>
													<table class="table table-borderless mb-0 text-nowrap table-sm">
													<tbody>
														<tr>
														<td class="px-0"><i data-feather="users" class="icon-xxs text-gray-400"></i> <span class="text-gray-500 ms-1">Estudiantes:</span></td>
														<td class="px-0">25</td>
														</tr>
														<tr>
														<td class="px-0"><i data-feather="clock" class="icon-xxs text-gray-400"></i> <span class="text-gray-500 ms-1">Turno:</span></td>
														<td class="px-0">Matutino</td>
														</tr>
														<tr>
														<td class="px-0"><i data-feather="user" class="icon-xxs text-gray-400"></i> <span class="text-gray-500 ms-1">Docente Encargado:</span></td>
														<td class="px-0">María López</td>
														</tr>
														<tr>
														<td class="px-0"><i data-feather="calendar" class="icon-xxs text-gray-400"></i> <span class="text-gray-500 ms-1">Cupo Máximo:</span></td>
														<td class="px-0">30</td>
														</tr>
														<tr>
														<td class="px-0"><i data-feather="alert-circle" class="icon-xxs text-gray-400"></i> <span class="text-gray-500 ms-1">Disponibles:</span></td>
														<td class="px-0"><span class="badge badge-info-soft border border-info rounded-pill">5 cupos</span></td>
														</tr>
													</tbody>
													</table>
												</div>
												</div>

											</div>
											</div>

										</div>
									</div>

									
									<div class="bg-success-subtle shadow-none border-top rounded-3 p-3 task-card border-top border-success me-4 pb-0" >
										<div class="d-flex flex-column gap-2 mb-4">
											<div class="d-flex flex-row justify-content-between">
												<div>
													<h4 class="mb-0 fs-5">Closed/Won</h4>
												</div>
												<div class="d-flex flex-row gap-2">
													<div>
														<a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
															<i data-feather="plus" class="icon-xxs"></i>
														</a>
														<!-- Modal -->
													</div>

													<div>
														<div class="dropdown dropstart">
															<a href="#!" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i data-feather="more-horizontal" class="icon-xxs"></i>
															</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="#">Action</a></li>
																<li><a class="dropdown-item" href="#">Another action</a></li>
																<li><a class="dropdown-item" href="#">Something else here</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="d-flex flex-row justify-content-between">
												<div class="text-dark">
													<span>Total:</span>
													<span class="fw-semi-bold">$80,000.00</span>
												</div>
												<div>
													<span class="badge rounded-circle badge-secondary-soft">1</span>
												</div>
											</div>
										</div>
										<div class="task-kanban">
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">Renewal of Service Contract - Client Charlie</a>
															</h4>
															<span class="text-gray-400">Charlie Services Ltd.</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$80,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div class="d-flex align-items-center gap-2">
															<img src="../assets/images/avatar/avatar-13.jpg" alt="avatar" class="rounded-circle avatar-xs" />
															<span class="badge badge-success-soft border border-success rounded-pill">won</span>
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample14" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample14">
														<div class="mt-4 d-flex flex-column gap-2">
															<h4 class="mb-0">Deal info</h4>
															<div class="">
																<table class="table table-borderless mb-0 text-nowrap table-sm">
																	<tbody>
																		<tr>
																			<td class="px-0">
																				<i data-feather="dollar-sign" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Value:</span>
																			</td>

																			<td class="px-0">$80,000</td>
																		</tr>
															<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">Charlie Services Ltd.</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">April 15, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Alex Johnson</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">Renewal</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="info" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Priority:</span>
																			</td>

																			<td class="px-0"><span class="badge badge-success-soft border border-success rounded-pill">High</span></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="bg-danger-subtle shadow-none border-top rounded-3 p-3 task-card border-top border-danger me-4 pb-0"  >
										<div class="d-flex flex-column gap-2 mb-4">
											<div class="d-flex flex-row justify-content-between">
												<div>
													<h4 class="mb-0 fs-5">Closed/Lost</h4>
												</div>
												<div class="d-flex flex-row gap-2">
													<div>
														<a href="#!" class="text-reset" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
															<i data-feather="plus" class="icon-xxs"></i>
														</a>
														<!-- Modal -->
													</div>

													<div>
														<div class="dropdown dropstart">
															<a href="#!" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
																<i data-feather="more-horizontal" class="icon-xxs"></i>
															</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="#">Action</a></li>
																<li><a class="dropdown-item" href="#">Another action</a></li>
																<li><a class="dropdown-item" href="#">Something else here</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="d-flex flex-row justify-content-between">
												<div class="text-dark">
													<span>Total:</span>
													<span class="fw-semi-bold">$75,000</span>
												</div>
												<div>
													<span class="badge rounded-circle badge-secondary-soft">1</span>
												</div>
											</div>
										</div>
										<div class="task-kanban">
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">Event Sponsorship Renewal - Client Hotel Zulu</a>
															</h4>
															<span class="text-gray-400">Hotel Zulu Events LLC</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$75,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div class="d-flex align-items-center gap-2">
															<img src="../assets/images/avatar/avatar-14.jpg" alt="avatar" class="rounded-circle avatar-xs" />
															<span class="badge badge-danger-soft border border-danger rounded-pill">Loss</span>
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample15" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample15">
														<div class="mt-4 d-flex flex-column gap-2">
															<h4 class="mb-0">Deal info</h4>
															<div class="">
																<table class="table table-borderless mb-0 text-nowrap table-sm">
																	<tbody>
																		<tr>
																			<td class="px-0">
																				<i data-feather="dollar-sign" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Value:</span>
																			</td>

																			<td class="px-0">$75,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">Hotel Zulu Events LLC</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">April 30, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Michael Turner</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">Renewal</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="info" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Priority:</span>
																			</td>

																			<td class="px-0"><span class="badge badge-danger-soft border border-danger rounded-pill">Low</span></td>
																		</tr>
																	</tbody>
																</table>
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


						<div class="row">
							<!-- card  -->
							<div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-5 mb-xl-0">
								<div class="card h-100">
									<!-- card header  -->
									<div class="card-header d-flex justify-content-between align-items-center">
										<h4 class="mb-0">Asignaturas</h4>
										<div class="dropdown">
											<a class="btn btn-outline-white btn-sm dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Task</a>

											<ul class="dropdown-menu dropdown-menu-end">
												<li><a class="dropdown-item" href="#">Action</a></li>
												<li><a class="dropdown-item" href="#">Another action</a></li>
												<li><a class="dropdown-item" href="#">Something else here</a></li>
											</ul>
										</div>
									</div>
									<!-- table  -->
									<div class="card-body">
										<div class="table-responsive table-card">
											<table class="table text-nowrap mb-0 table-centered table-hover">
												<tbody>
													<tr>
														<td>
															<div">
																<label>Lemgua y Literatura</label>
															</div>
														</td>
													</tr>
																										<tr>
														<td>
															<div">
																<label>Lemgua y Literatura</label>
															</div>
														</td>
													</tr>
																										<tr>
														<td>
															<div">
																<label>Lemgua y Literatura</label>
															</div>
														</td>
													</tr>
																										<tr>
														<td>
															<div">
																<label>Lemgua y Literatura</label>
															</div>
														</td>
													</tr>
																										<tr>
														<td>
															<div">
																<label>Lemgua y Literatura</label>
															</div>
														</td>
													</tr>
																										<tr>
														<td>
															<div">
																<label>Lemgua y Literatura</label>
															</div>
														</td>
													</tr>
																										<tr>
														<td>
															<div">
																<label>Lemgua y Literatura</label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<!-- card  -->
							<div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-5 mb-xl-0">
								<div class="card h-100">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!-- Scripts -->
		<?php include "../partials/scripts.php" ?>

		<!-- Script para mostrar secciones por grado -->
		<script>
		document.getElementById("gradoSelect").addEventListener("change", function () {
			const selected = this.value;
			document.querySelectorAll(".grado-card").forEach(card => {
			card.style.display = (card.getAttribute("data-grado") === selected) ? "block" : "none";
			});
		});

		// Inicializa feather icons si usas feather
		feather.replace();
		</script>

		<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
		<script src="../assets/js/vendors/chart.js"></script>

	</body>
</html>
