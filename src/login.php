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
	<link rel="shortcut icon" type="image/x-icon" href="./assets/images/png/colegio_bello_horizonte.png" />

	<!-- Color modes -->
	<script src="./assets/js/vendors/color-modes.js"></script>

	<!-- Libs CSS -->
	<link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
	<link href="./assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
	<link href="./assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

	<!-- Sweetalert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Theme CSS -->
	<link rel="stylesheet" href="./assets/css/theme.css">

	<title>Login - Colegio Bello Horizonte</title>
	</head>
	<body>
		<!-- container -->
		<main class="container d-flex flex-column">
			<div class="row align-items-center justify-content-center g-0 min-vh-100">
				<div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
					<div class="position-absolute end-0 top-0 p-8">
						<div class="dropdown">
							<button class="btn btn-ghost btn-icon rounded-circle" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
								<i class="bi theme-icon-active"></i>
								<span class="visually-hidden bs-theme-text">Tema</span>
							</button>
							<ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
								<li>
									<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
										<i class="bi theme-icon bi-sun-fill"></i>
										<span class="ms-2">Luz</span>
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
										<span class="ms-2">Automatico</span>
									</button>
								</li>
							</ul>
						</div>
					</div>
					<!-- Card -->
					<div class="card smooth-shadow-md">
						<!-- Card body -->
						<div class="card-body p-6">
							<div class="mb-4">
								<img src="./assets/images/png/banner_logo.png" alt="Logo Colegio" class="img-fluid" style="max-width: 350px;">
								<p class="mb-1">Por Favor, ingrese su información</p>
							</div>
							<!-- Form -->
							<form id="loginForm" method="post">
								<!-- Username -->
								<div class="mb-3">
									<label for="username" class="form-label">Usuario</label>
									<input type="text" id="username" class="form-control" name="username" placeholder="Ingresa tu usuario" required="" />
								</div>
								<!-- Password -->
								<div class="mb-3">
									<label for="password" class="form-label">Contraseña</label>
									<input type="text" id="password" class="form-control" name="contrasena" placeholder="Ingresa tu contraseña" required="" />
								</div>
								<!-- Checkbox -->
								<div class="d-lg-flex justify-content-between align-items-center mb-4">
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="form-check-input" id="rememberme" />
										<label class="form-check-label" for="rememberme">Recordar</label>
									</div>
								</div>
								<div>
									<!-- Button -->
									<div class="d-grid">
										<button type="submit" class="btn btn-primary">Iniciar Sección</button>
									</div>

									<div class="d-md-flex justify-content-between mt-4">
										<div class="mb-2 mb-md-0">
											<a href="./views/nuevo_ingreso_matricula.php" class="fs-5">Matriculate Ya!!</a>
										</div>
										<div>
											<a href="forget-password.html" class="text-inherit fs-5">¿olvidaste tu contraseña?</a>
										</div>
									</div>
								</div>
							</form>
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

		<script>
		document.getElementById('loginForm').addEventListener('submit', function (e) {
	e.preventDefault();

	const form = e.target;
	const formData = new FormData(form);

	fetch('controllers/auth.controller.php', {
		method: 'POST',
		body: formData
	})
	.then(res => res.json())
	.then(data => {
		if (data.status === 'ok') {
			let destino;

			switch (data.rol) {
				case 1:
					destino = 'index.php';
					break;
				case 2:
					destino = 'index.student.php';
					break;
				case 5:
					destino = 'index.php';
					break;
				default:
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: data,
						showConfirmButton: false,
						timer: 2500,
						timerProgressBar: true
					});
					destino = 'login.php'; // rol desconocido
			}

			window.location.href = destino;
		} else {
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: data,
				showConfirmButton: false,
				timer: 2500,
				timerProgressBar: true
			});
		}
	})
	.catch(() => {
		Swal.fire({
			icon: 'error',
			title: 'Error de red',
			text: 'No se pudo conectar con el servidor.',
			showConfirmButton: false,
			timer: 2500,
			timerProgressBar: true
		});
	});
});

		</script>
	</body>
</html>
