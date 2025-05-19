<!DOCTYPE php>
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
<link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />

<!-- Color modes -->
<script src="./assets/js/vendors/color-modes.js"></script>

<!-- Libs CSS -->
<link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="./assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="./assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="./assets/css/theme.css">

  <title>Home</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
    <div class="header">
	<!-- navbar -->
	<div class="navbar-custom navbar navbar-expand-lg">
		<div class="container-fluid px-0">
			<a class="navbar-brand d-block d-md-none" href="./index.php">
				<img src="assets/images/brand/logo/logo-2.svg" alt="Image" />
			</a>

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
				</li>

				<li class="dropdown stopevent ms-2">
					<a class="btn btn-ghost btn-icon rounded-circle" href="#!" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="icon-xs" data-feather="bell"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="dropdownNotification">
						<div>
							<div class="border-bottom px-3 pt-2 pb-3 d-flex justify-content-between align-items-center">
								<p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
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
								<a href="#!" class="text-inherit">View all Notifications</a>
							</div>
						</div>
					</div>
				</li>
				<!-- List -->
				<li class="dropdown ms-2">
					<a class="rounded-circle" href="#!" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<div class="avatar avatar-md avatar-indicators avatar-online">
							<img alt="avatar" src="./assets/images/avatar/avatar-11.jpg" class="rounded-circle" />
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
						<div class="px-4 pb-0 pt-2">
							<div class="lh-1">
								<h5 class="mb-1">John E. Grainger</h5>
								<a href="#!" class="text-inherit fs-6">View my profile</a>
							</div>
							<div class="dropdown-divider mt-3 mb-2"></div>
						</div>

						<ul class="list-unstyled">
							<li>
								<a class="dropdown-item d-flex align-items-center" href="#!">
									<i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>
									Edit Profile
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="#!">
									<i class="me-2 icon-xxs dropdown-item-icon" data-feather="activity"></i>
									Activity Log
								</a>
							</li>

							<li>
								<a class="dropdown-item d-flex align-items-center" href="#!">
									<i class="me-2 icon-xxs dropdown-item-icon" data-feather="settings"></i>
									Settings
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="./index.php">
									<i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>
									Sign Out
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
		<!-- Brand logo -->
		<a class="navbar-brand" href="./views/dashboard-home.php">
			<img src="./assets/images/brand/logo/logo-2.svg" alt="dash ui - bootstrap 5 admin dashboard template" />
		</a>
		<!-- Navbar nav -->
		<ul class="navbar-nav flex-column" id="sideNavbar">
			<!-- Nav item -->
			<li class="nav-item">
				<a
					class="nav-link has-arrow "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navDashboard"
					aria-expanded="false"
					aria-controls="navDashboard"
				>
					<i data-feather="home" class="nav-icon me-2 icon-xxs"></i>
					Panel de Control
				</a>

				<div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link  active " href="./index.php">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/dashboard_student.php">Estudiante</a>
						</li>

						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/dashboard-ecommerce.php">Ecommerce</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/dashboard-crm.php">CRM</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/dashboard-finance.php">Finance</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/dashboard-blog.php">Blog</a>
						</li>
					</ul>
				</div>
			</li>

			<!-- Nav item -->
			<li class="nav-item">
				<div class="navbar-heading">Apps</div>
			</li>
			<!-- Nav item -->
			<li class="nav-item">
				<a class="nav-link has-arrow " href="./views/calendar.php">Calendar</a>
			</li>
			<!-- Nav item -->
			<li class="nav-item">
				<a class="nav-link has-arrow " href="./views/chat-app.php">
					<i data-feather="message-square" class="nav-icon me-2 icon-xxs"></i>
					Chat
				</a>
			</li>
			<!-- Nav item -->
			<li class="nav-item">
				<a
					class="nav-link has-arrow  collapsed "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navecommerce"
					aria-expanded="false"
					aria-controls="navecommerce"
				>
					<i data-feather="shopping-cart" class="nav-icon me-2 icon-xxs"></i>
					Ecommerce
				</a>

				<div id="navecommerce" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/ecommerce-products.php">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/ecommerce-products-details.php">Product Detail</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/ecommerce-product-edit.php">Add Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/ecommerce-order-list.php">Orders</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/ecommerce-order-detail.php">Orders Detail</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/ecommerce-cart.php">Shopping cart</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/ecommerce-checkout.php">Checkout</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/ecommerce-customer.php">Customer</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/ecommerce-seller.php">Seller</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Nav item -->
			<li class="nav-item">
				<a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navEmail" aria-expanded="false" aria-controls="navEmail">
					<i data-feather="mail" class="nav-icon me-2 icon-xxs"></i>
					Email
				</a>

				<div id="navEmail" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/mail.php">Inbox</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/mail-details.php">Details</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/mail-draft.php">Draft</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Nav item -->
			<li class="nav-item">
				<a
					class="nav-link has-arrow  collapsed "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navKanban"
					aria-expanded="false"
					aria-controls="navKanban"
				>
					<i data-feather="layout" class="nav-icon me-2 icon-xxs"></i>
					Kanban
				</a>

				<div id="navKanban" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/task-kanban-grid.php">Grid</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/task-kanban-list.php">List</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Nav item -->
			<!-- Nav item -->
			<li class="nav-item">
				<a class="nav-link  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navProject" aria-expanded="false" aria-controls="navProject">
					<i class="nav-icon me-2 icon-xxs" data-feather="file"></i>
					Project
				</a>
				<div id="navProject" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link " href="./views/project-grid.php">Grid</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/project-list.php">List</a>
						</li>
						<li class="nav-item">
							<a
								class="nav-link  collapsed "
								href="#!"
								data-bs-toggle="collapse"
								data-bs-target="#navprojectSingle"
								aria-expanded="false"
								aria-controls="navprojectSingle"
							>
								Single
							</a>
							<div id="navprojectSingle" class="collapse " data-bs-parent="#navProject">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link " href="./views/project-overview.php">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="./views/project-task.php">Task</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="./views/project-budget.php">Budget</a>
									</li>

									<li class="nav-item">
										<a class="nav-link " href="./views/project-files.php">Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="./views/project-team.php">Team</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/add-project.php">Create Project</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="./views/apps-file-manager.php">
					<i data-feather="folder-plus" class="nav-icon me-2 icon-xxs"></i>
					File Manager
				</a>
			</li>
			<!-- Nav item -->
			<li class="nav-item">
				<a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navCRM" aria-expanded="false" aria-controls="navCRM">
					<i data-feather="pie-chart" class="nav-icon me-2 icon-xxs"></i>

					CRM
				</a>

				<div id="navCRM" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/crm-contacts.php">Contacts</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/crm-company.php">Company</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/deals.php">
								Deals
								<span class="badge text-bg-primary ms-2">New</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/deals-single.php">
								Deals Single
								<span class="badge text-bg-primary ms-2">New</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Nav item -->
			<li class="nav-item">
				<a
					class="nav-link has-arrow  collapsed "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navinvoice"
					aria-expanded="false"
					aria-controls="navinvoice"
				>
					<i data-feather="clipboard" class="nav-icon me-2 icon-xxs"></i>
					Invoice
				</a>

				<div id="navinvoice" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/invoice-list.php">List</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/invoice-detail.php">Detail</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/invoice-generator.php">Invoice Generator</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a
					class="nav-link  collapsed "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navprofileviews"
					aria-expanded="false"
					aria-controls="navprofileviews"
				>
					<i data-feather="user" class="nav-icon me-2 icon-xxs"></i>
					Profile
				</a>
				<div id="navprofileviews" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link " href="./views/profile-overview.php">Overview</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/profile-project.php">Project</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/profile-files.php">Files</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="./views/profile-team.php">Team</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/profile-followers.php">Followers</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/profile-activity.php">Activity</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/profile-settings.php">Settings</a>
						</li>
					</ul>
				</div>
			</li>
			<!-- Nav item -->
			<li class="nav-item">
				<a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navblog" aria-expanded="false" aria-controls="navblog">
					<i data-feather="edit" class="nav-icon me-2 icon-xxs"></i>
					Blog
				</a>

				<div id="navblog" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/blog-author.php">Author</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/blog-author-detail.php">Detail</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="./views/create-blog-post.php">Create Post</a>
						</li>
					</ul>
				</div>
			</li>

			<!-- Nav item -->
			<li class="nav-item">
				<div class="navbar-heading">Layouts & views</div>
			</li>

			<li class="nav-item">
				<a
					class="nav-link  collapsed "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navlayoutPage"
					aria-expanded="false"
					aria-controls="navlayoutPage"
				>
					<i class="nav-icon me-2 icon-xxs" data-feather="file"></i>
					views
				</a>
				<div id="navlayoutPage" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link " href="./views/starter.php">Starter</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="./views/pricing.php">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/maintenance.php">Maintenance</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/404-error.php">404 Error</a>
						</li>
					</ul>
				</div>
			</li>

			<!-- Nav item -->
			<li class="nav-item">
				<a
					class="nav-link has-arrow  collapsed "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navAuthentication"
					aria-expanded="false"
					aria-controls="navAuthentication"
				>
					<i data-feather="lock" class="nav-icon me-2 icon-xxs"></i>
					Authentication
				</a>
				<div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link " href="./views/sign-in.php">Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/sign-up.php">Sign Up</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/forget-password.php">Forget Password</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a
					class="nav-link has-arrow  collapsed "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navLayouts"
					aria-expanded="false"
					aria-controls="navLayouts"
				>
					<i data-feather="sidebar" class="nav-icon me-2 icon-xxs"></i>
					Layouts
				</a>
				<div id="navLayouts" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link " href="./index.php">Default</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="./horizontal/index.php">Horizontal</a>
						</li>
					</ul>
				</div>
			</li>

			<!-- Nav item -->
			<li class="nav-item">
				<div class="navbar-heading">UI Components</div>
			</li>
			<li class="nav-item">
				<a
					class="nav-link has-arrow  collapsed "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navComponents"
					aria-expanded="false"
					aria-controls="navComponents"
				>
					<i data-feather="package" class="nav-icon me-2 icon-xxs"></i>
					Components
				</a>
				<div id="navComponents" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="./views/components/accordions.php" class="nav-link ">Accordions</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="./views/components/alerts.php">Alert</a>
						</li>

						<li class="nav-item">
							<a href="./views/components/badge.php" class="nav-link ">Badge</a>
						</li>

						<li class="nav-item">
							<a href="./views/components/breadcrumb.php" class="nav-link ">Breadcrumb</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/buttons.php" class="nav-link ">Buttons</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/button-group.php" class="nav-link ">Button group</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/card.php" class="nav-link ">Card</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/carousel.php" class="nav-link ">Carousel</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/close-button.php" class="nav-link ">Close Button</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/collapse.php" class="nav-link ">Collapse</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/dropdowns.php" class="nav-link ">Dropdowns</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/forms.php" class="nav-link ">Forms</a>
						</li>

						<li class="nav-item">
							<a href="./views/components/list-group.php" class="nav-link ">List group</a>
						</li>

						<li class="nav-item">
							<a href="./views/components/modal.php" class="nav-link ">Modal</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/navs-tabs.php" class="nav-link ">Navs and tabs</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/navbar.php" class="nav-link ">Navbar</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/offcanvas.php" class="nav-link ">Offcanvas</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/pagination.php" class="nav-link ">Pagination</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/placeholders.php" class="nav-link ">Placeholders</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/popovers.php" class="nav-link ">Popovers</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/progress.php" class="nav-link ">Progress</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/scrollspy.php" class="nav-link ">Scrollspy</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/spinners.php" class="nav-link ">Spinners</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/tables.php" class="nav-link ">Tables</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/toasts.php" class="nav-link ">Toasts</a>
						</li>
						<li class="nav-item">
							<a href="./views/components/tooltips.php" class="nav-link ">Tooltips</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="nav-item">
				<a
					class="nav-link has-arrow  collapsed "
					href="#!"
					data-bs-toggle="collapse"
					data-bs-target="#navMenuLevel"
					aria-expanded="false"
					aria-controls="navMenuLevel"
				>
					<i data-feather="corner-left-down" class="nav-icon me-2 icon-xxs"></i>
					Menu Level
				</a>
				<div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a
								class="nav-link has-arrow "
								href="#!"
								data-bs-toggle="collapse"
								data-bs-target="#navMenuLevelSecond"
								aria-expanded="false"
								aria-controls="navMenuLevelSecond"
							>
								Two Level
							</a>
							<div id="navMenuLevelSecond" class="collapse" data-bs-parent="#navMenuLevel">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link " href="#!">NavItem 1</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="#!">NavItem 2</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a
								class="nav-link has-arrow  collapsed "
								href="#!"
								data-bs-toggle="collapse"
								data-bs-target="#navMenuLevelThree"
								aria-expanded="false"
								aria-controls="navMenuLevelThree"
							>
								Three Level
							</a>
							<div id="navMenuLevelThree" class="collapse " data-bs-parent="#navMenuLevel">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a
											class="nav-link  collapsed "
											href="#!"
											data-bs-toggle="collapse"
											data-bs-target="#navMenuLevelThreeOne"
											aria-expanded="false"
											aria-controls="navMenuLevelThreeOne"
										>
											NavItem 1
										</a>
										<div id="navMenuLevelThreeOne" class="collapse collapse " data-bs-parent="#navMenuLevelThree">
											<ul class="nav flex-column">
												<li class="nav-item">
													<a class="nav-link " href="#!">NavChild Item 1</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="#!">Nav Item 2</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</li>

			<!-- Nav item -->
			<li class="nav-item">
				<div class="navbar-heading">Documentation</div>
			</li>
			<li class="nav-item">
				<a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse" data-bs-target="#navDocs" aria-expanded="false" aria-controls="navDocs">
					<i data-feather="package" class="nav-icon me-2 icon-xxs"></i>
					Docs
				</a>
				<div id="navDocs" class="collapse " data-bs-parent="#sideNavbar">
					<ul class="nav flex-column">
						<li class="nav-item"><a href="./docs/index.php" class="nav-link ">Introduction</a></li>
						<li class="nav-item"><a href="./docs/environment-setup.php" class="nav-link ">Environment setup</a></li>
						<li class="nav-item"><a href="./docs/working-with-gulp.php" class="nav-link ">Working with Gulp</a></li>
						<li class="nav-item"><a href="./docs/compiled-files.php" class="nav-link ">Compiled Files</a></li>
						<li class="nav-item"><a href="./docs/file-structure.php" class="nav-link ">File Structure</a></li>
						<li class="nav-item"><a href="./docs/resources-assets.php" class="nav-link ">Resources & assets</a></li>
						<li class="nav-item"><a href="./docs/changelog.php" class="nav-link ">Changelog</a></li>
					</ul>
				</div>
			</li>
		</ul>
		<div class="card bg-light shadow-none text-center mx-4 my-8">
			<div class="card-body py-6">
				<img src="./assets/images/background/giftbox.png" alt="dash ui - admin dashboard template" />
				<div class="mt-4">
					<h5>Unlimited Access</h5>
					<p class="fs-6 mb-4">Upgrade your plan from a Free trial, to select Business Plan. Start Now</p>
					<a href="#" class="btn btn-secondary btn-sm">Upgrade Now</a>
				</div>
			</div>
		</div>
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
                <img src="./assets/images/avatar/Caleb.webp" alt="Administrador" class="rounded-circle avatar avatar-xl">
                <div class="ms-md-4 mt-3 mt-md-0 lh-1">
                  <h3 class="text-white mb-0">Bienvenido Caleb</h3>
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
														<th>Estudiante</th>
														<th>Codigo Estudiantil</th>
														<th>Grado</th>
														<th>Turno</th>
														<th>Estado</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div>
																	<div>
																		<span class="avatar avatar-sm">
																	    <img alt="avatar bootstrap 5" src="./assets/images/avatar/Jonathan.jpg" class="rounded-circle" />
																    </span>
																	</div>
																</div>
																<div class="ms-3 lh-1">
																	<h5 class="mb-1"><a href="#!" class="text-inherit">Jonathan Martinez Lopez</a></h5>
																</div>
															</div>
														</td>
														<td>937-330-1634</td>
														<td>8vo</td>
														<td>Matutino</td>
														<td><span class="badge badge-danger-soft">Pendiente</span></td>
													</tr>
																										<tr>
														<td>
															<div class="d-flex align-items-center">
																<div>
																	<div>
																		<span class="avatar avatar-sm">
																	    <img alt="avatar bootstrap 5" src="./assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
																    </span>
																	</div>
																</div>
																<div class="ms-3 lh-1">
																	<h5 class="mb-1"><a href="#!" class="text-inherit">Jonathan Martinez Lopez</a></h5>
																</div>
															</div>
														</td>
														<td>937-330-1634</td>
														<td>8vo</td>
														<td>Matutino</td>
														<td><span class="badge badge-danger-soft">Pendiente</span></td>
													</tr>
                          <tr>
														<td>
															<div class="d-flex align-items-center">
																<div>
																	<div>
																		<span class="avatar avatar-sm">
																	    <img alt="avatar bootstrap 5" src="./assets/images/avatar/avatar-10.jpg" class="rounded-circle" />
																    </span>
																	</div>
																</div>
																<div class="ms-3 lh-1">
																	<h5 class="mb-1"><a href="#!" class="text-inherit">Jonathan Martinez Lopez</a></h5>
																</div>
															</div>
														</td>
														<td>937-330-1634</td>
														<td>8vo</td>
														<td>Matutino</td>
														<td><span class="badge badge-danger-soft">Pendiente</span></td>
													</tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div>
																	<div>
																		<span class="avatar avatar-sm">
																	    <img alt="avatar bootstrap 5" src="./assets/images/avatar/avatar-9.jpg" class="rounded-circle" />
																    </span>
																	</div>
																</div>
																<div class="ms-3 lh-1">
																	<h5 class="mb-1"><a href="#!" class="text-inherit">Jonathan Martinez Lopez</a></h5>
																</div>
															</div>
														</td>
														<td>937-330-1634</td>
														<td>8vo</td>
														<td>Matutino</td>
														<td><span class="badge badge-info-soft">Activo</span></td>
													</tr>
                          </tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div>
																	<div>
																		<span class="avatar avatar-sm">
																	    <img alt="avatar bootstrap 5" src="./assets/images/avatar/avatar-13.jpg" class="rounded-circle" />
																    </span>
																	</div>
																</div>
																<div class="ms-3 lh-1">
																	<h5 class="mb-1"><a href="#!" class="text-inherit">Jonathan Martinez Lopez</a></h5>
																</div>
															</div>
														</td>
														<td>937-330-1634</td>
														<td>8vo</td>
														<td>Matutino</td>
														<td><span class="badge badge-warning-soft">En revision</span></td>
													</tr>
                          																										<tr>
														<td>
															<div class="d-flex align-items-center">
																<div>
																	<div>
																		<span class="avatar avatar-sm">
																	    <img alt="avatar bootstrap 5" src="./assets/images/avatar/avatar-9.jpg" class="rounded-circle" />
																    </span>
																	</div>
																</div>
																<div class="ms-3 lh-1">
																	<h5 class="mb-1"><a href="#!" class="text-inherit">Jonathan Martinez Lopez</a></h5>
																</div>
															</div>
														</td>
														<td>937-330-1634</td>
														<td>8vo</td>
														<td>Matutino</td>
														<td><span class="badge badge-info-soft">Activo</span></td>
													</tr>
                          </tr>
													<tr>
														<td>
															<div class="d-flex align-items-center">
																<div>
																	<div>
																		<span class="avatar avatar-sm">
																	    <img alt="avatar bootstrap 5" src="./assets/images/avatar/avatar-13.jpg" class="rounded-circle" />
																    </span>
																	</div>
																</div>
																<div class="ms-3 lh-1">
																	<h5 class="mb-1"><a href="#!" class="text-inherit">Jonathan Martinez Lopez</a></h5>
																</div>
															</div>
														</td>
														<td>937-330-1634</td>
														<td>8vo</td>
														<td>Matutino</td>
														<td><span class="badge badge-warning-soft">En revision</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- card footer  -->
									<div class="card-footer text-center">
										<a href="#!" class="btn btn-primary">Ver Todas Las Matriculas</a>
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