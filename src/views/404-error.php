<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
    include "../partials/head.php";
    
    ?>
		<title>404 error</title>
	</head>

	<body>
		<!-- Error page -->
		<main class="container min-vh-100 d-flex justify-content-center align-items-center">
			<div class="position-absolute end-0 top-0 p-8">
				<div class="dropdown">
					<button class="btn btn-ghost btn-icon rounded-circle" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
						<i class="bi theme-icon-active"></i>
						<span class="visually-hidden bs-theme-text">Toggle theme</span>
					</button>
					<ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
						<li>
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
								<i class="bi theme-icon bi-sun-fill"></i>
								<span class="ms-2">Light</span>
							</button>
						</li>
						<li>
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
								<i class="bi theme-icon bi-moon-stars-fill"></i>
								<span class="ms-2">Dark</span>
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
			</div>
			<!-- row -->
			<div class="row">
				<!-- col -->
				<div class="col-12">
					<!-- content -->
					<div class="text-center">
						<div class="mb-3">
							<!-- img -->
							<img src="../assets/images/error/404-error-img.png" alt="Image" class="img-fluid" />
						</div>
						<!-- text -->
						<h1 class="display-4">Oops! the page not found.</h1>
						<p class="mb-4">Or simply leverage the expertise of our consultation team.</p>
						<!-- button -->
						<a href="../index.html" class="btn btn-primary">Go Home</a>
					</div>
				</div>
			</div>
		</main>
		<!-- Scripts -->
			<?php include "../partials/scripts.php" ?>
	</body>
</html>
