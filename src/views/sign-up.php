<!DOCTYPE html>
<html lang="en">
	<head>
		@@include("../partials/head.html")
		<title>Sign Up | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
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
					<!-- Card -->
					<div class="card smooth-shadow-md">
						<!-- Card body -->
						<div class="card-body p-6">
							<div class="mb-4">
								<a href="../index.html"><img src="../assets/images/brand/logo/logo-2.svg" class="mb-2 text-inverse" alt="Image" /></a>
								<p class="mb-6">Please enter your user information.</p>
							</div>
							<!-- Form -->
							<form>
								<!-- Username -->
								<div class="mb-3">
									<label for="username" class="form-label">User Name</label>
									<input type="text" id="username" class="form-control" name="username" placeholder="User Name" required="" />
								</div>
								<!-- Email -->
								<div class="mb-3">
									<label for="email" class="form-label">Email</label>
									<input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required="" />
								</div>
								<!-- Password -->
								<div class="mb-3">
									<label for="password" class="form-label">Password</label>
									<input type="password" id="password" class="form-control" name="password" placeholder="**************" required="" />
								</div>
								<!-- Password -->
								<div class="mb-3">
									<label for="confirm-password" class="form-label">Confirm Password</label>
									<input type="password" id="confirm-password" class="form-control" name="password" placeholder="**************" required="" />
								</div>
								<!-- Checkbox -->
								<div class="mb-3">
									<div class="form-check custom-checkbox">
										<input type="checkbox" class="form-check-input" id="agreeCheck" />
										<label class="form-check-label" for="agreeCheck">
											<span class="fs-5">
												I agree to the
												<a href="terms-condition-page.html">Terms of Service</a>
												and
												<a href="terms-condition-page.html">Privacy Policy.</a>
											</span>
										</label>
									</div>
								</div>
								<div>
									<!-- Button -->
									<div class="d-grid">
										<button type="submit" class="btn btn-primary">Create Free Account</button>
									</div>

									<div class="d-md-flex justify-content-between mt-4">
										<div class="mb-2 mb-md-0">
											<a href="sign-up.html" class="fs-5">Already member? Login</a>
										</div>
										<div>
											<a href="forget-password.html" class="text-inherit fs-5">Forgot your password?</a>
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
		@@include("../partials/scripts.html")
	</body>
</html>
