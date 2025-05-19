<!-- Sidebar -->

<!-- navbar vertical -->
			<div class="app-menu"><!-- Sidebar -->

<div class="navbar-vertical navbar nav-dashboard">
	<div class="h-100" data-simplebar>
		<!-- Brand logo -->
		<a class="navbar-brand" href="../index.php">
			<img src="../assets/images/brand/logo/logo-2.svg" alt="dash ui - bootstrap 5 admin dashboard template" />
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
							<a class="nav-link  active " href="../index.php">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/dashboard_student.php">Estudiante</a>
						</li>

						<li class="nav-item">
							<a class="nav-link has-arrow " href=".../views/dashboard-ecommerce.php">Ecommerce</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/dashboard-crm.php">CRM</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/dashboard-finance.php">Finance</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/dashboard-blog.php">Blog</a>
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
				<a class="nav-link has-arrow " href="../views/calendar.php">Calendar</a>
			</li>
			<!-- Nav item -->
			<li class="nav-item">
				<a class="nav-link has-arrow " href="../views/chat-app.php">
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
							<a class="nav-link has-arrow " href="../views/ecommerce-products.php">Products</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/ecommerce-products-details.php">Product Detail</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/ecommerce-product-edit.php">Add Product</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/ecommerce-order-list.php">Orders</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/ecommerce-order-detail.php">Orders Detail</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/ecommerce-cart.php">Shopping cart</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/ecommerce-checkout.php">Checkout</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/ecommerce-customer.php">Customer</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/ecommerce-seller.php">Seller</a>
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
							<a class="nav-link has-arrow " href="../views/mail.php">Inbox</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/mail-details.php">Details</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/mail-draft.php">Draft</a>
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
							<a class="nav-link has-arrow " href="../views/task-kanban-grid.php">Grid</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/task-kanban-list.php">List</a>
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
							<a class="nav-link " href="../views/project-grid.php">Grid</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/project-list.php">List</a>
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
										<a class="nav-link " href="../views/project-overview.php">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="../views/project-task.php">Task</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="../views/project-budget.php">Budget</a>
									</li>

									<li class="nav-item">
										<a class="nav-link " href="../views/project-files.php">Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="../views/project-team.php">Team</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/add-project.php">Create Project</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="../views/apps-file-manager.php">
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
							<a class="nav-link has-arrow " href="../views/crm-contacts.php">Contacts</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/crm-company.php">Company</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/deals.php">
								Deals
								<span class="badge text-bg-primary ms-2">New</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/deals-single.php">
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
							<a class="nav-link has-arrow " href="../views/invoice-list.php">List</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/invoice-detail.php">Detail</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/invoice-generator.php">Invoice Generator</a>
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
							<a class="nav-link " href="../views/profile-overview.php">Overview</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/profile-project.php">Project</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/profile-files.php">Files</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="../views/profile-team.php">Team</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/profile-followers.php">Followers</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/profile-activity.php">Activity</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/profile-settings.php">Settings</a>
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
							<a class="nav-link has-arrow " href="../views/blog-author.php">Author</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/blog-author-detail.php">Detail</a>
						</li>
						<li class="nav-item">
							<a class="nav-link has-arrow " href="../views/create-blog-post.php">Create Post</a>
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
							<a class="nav-link " href="../views/starter.php">Starter</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="../views/pricing.php">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/maintenance.php">Maintenance</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/404-error.php">404 Error</a>
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
							<a class="nav-link " href="../views/sign-in.php">Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/sign-up.php">Sign Up</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/forget-password.php">Forget Password</a>
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
							<a class="nav-link " href="../index.php">Default</a>
						</li>

						<li class="nav-item">
							<a class="nav-link " href="../horizontal/index.php">Horizontal</a>
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
							<a href="../views/components/accordions.php" class="nav-link ">Accordions</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="../views/components/alerts.php">Alert</a>
						</li>

						<li class="nav-item">
							<a href="../views/components/badge.php" class="nav-link ">Badge</a>
						</li>

						<li class="nav-item">
							<a href="../views/components/breadcrumb.php" class="nav-link ">Breadcrumb</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/buttons.php" class="nav-link ">Buttons</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/button-group.php" class="nav-link ">Button group</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/card.php" class="nav-link ">Card</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/carousel.php" class="nav-link ">Carousel</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/close-button.php" class="nav-link ">Close Button</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/collapse.php" class="nav-link ">Collapse</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/dropdowns.php" class="nav-link ">Dropdowns</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/forms.php" class="nav-link ">Forms</a>
						</li>

						<li class="nav-item">
							<a href="../views/components/list-group.php" class="nav-link ">List group</a>
						</li>

						<li class="nav-item">
							<a href="../views/components/modal.php" class="nav-link ">Modal</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/navs-tabs.php" class="nav-link ">Navs and tabs</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/navbar.php" class="nav-link ">Navbar</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/offcanvas.php" class="nav-link ">Offcanvas</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/pagination.php" class="nav-link ">Pagination</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/placeholders.php" class="nav-link ">Placeholders</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/popovers.php" class="nav-link ">Popovers</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/progress.php" class="nav-link ">Progress</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/scrollspy.php" class="nav-link ">Scrollspy</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/spinners.php" class="nav-link ">Spinners</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/tables.php" class="nav-link ">Tables</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/toasts.php" class="nav-link ">Toasts</a>
						</li>
						<li class="nav-item">
							<a href="../views/components/tooltips.php" class="nav-link ">Tooltips</a>
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
						<li class="nav-item"><a href="../docs/index.php" class="nav-link ">Introduction</a></li>
						<li class="nav-item"><a href="../docs/environment-setup.php" class="nav-link ">Environment setup</a></li>
						<li class="nav-item"><a href="../docs/working-with-gulp.php" class="nav-link ">Working with Gulp</a></li>
						<li class="nav-item"><a href="../docs/compiled-files.php" class="nav-link ">Compiled Files</a></li>
						<li class="nav-item"><a href="../docs/file-structure.php" class="nav-link ">File Structure</a></li>
						<li class="nav-item"><a href="../docs/resources-assets.php" class="nav-link ">Resources & assets</a></li>
						<li class="nav-item"><a href="../docs/changelog.php" class="nav-link ">Changelog</a></li>
					</ul>
				</div>
			</li>
		</ul>
		<div class="card bg-light shadow-none text-center mx-4 my-8">
			<div class="card-body py-6">
				<img src="../assets/images/background/giftbox.png" alt="dash ui - admin dashboard template" />
				<div class="mt-4">
					<h5>Unlimited Access</h5>
					<p class="fs-6 mb-4">Upgrade your plan from a Free trial, to select Business Plan. Start Now</p>
					<a href="#" class="btn btn-secondary btn-sm">Upgrade Now</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>