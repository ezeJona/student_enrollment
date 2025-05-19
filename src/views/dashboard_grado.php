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
						<div class="row justify-content-md-between mb-4 mb-xl-0 ">
						<!-- col -->
						<div class="col-xl-2 col-lg-4 col-md-6 col-12">
						<!-- search -->
						<div class="mb-lg-4 mb-2">
							<input type="search" class="form-control" placeholder="Search by project name" >
						</div>
						</div>
						<div class="col-xxl-1 col-lg-2 col-md-6 col-12 ">
							<!-- Custom select -->
							<select class="form-select" >
								<option value="">Filter</option>
								<option value="In Progress">In Progress</option>
								<option value="Pending">Pending</option>
								<option value="Modified">Modified</option>
								<option value="Finished">Finished</option>
								<option value="Cancel">Cancel</option>

							</select>

						</div>
					</div>
						<!-- row  -->
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

		<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
		<script src="../assets/js/vendors/chart.js"></script>

	</body>
</html>
