<!DOCTYPE html>
<html lang="en">
	<head>
		@@include("../partials/head.html")
		<title>Blog Author Single | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
	</head>

	<body>
		<main id="main-wrapper" class="main-wrapper">
			@@include("../partials/header.html")
			<!-- navbar vertical -->

			@@include('../partials/navbar-vertical.html', { "page": "blogAuthorSingle", "page_group": "blog" })

			<!-- page content -->

			<div id="app-content">
				<div class="app-content-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-12">
								<!-- Page header -->
								<div class="d-flex justify-content-between align-items-center mb-5">
									<h3 class="mb-0">Author Single</h3>
									<a href="#!" class="btn btn-primary">Button</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xxl-3 col-lg-6 mb-5">
								<div class="card bg-gray-200 shadow-none card-lift">
									<div class="card-body">
										<div class="mb-4">
											<h4 class="mb-0">
												Earnings
												<span class="texttooltip" data-template="alertOne">
													<i class="text-muted icon-xxs" data-feather="alert-circle"></i>
													<span id="alertOne" class="d-none">
														<span class="mb-0 text-white fs-6">Text</span>
													</span>
												</span>
											</h4>
										</div>
										<div class="mb-6 lh-1">
											<h1 class="text-dark fw-bold mb-0">$4500.34</h1>
											<span>
												<span class="text-success">
													<i data-feather="arrow-up" class="icon-xxs"></i>
													20.00%
												</span>
												<span class="text-muted">vs</span>
												<span>Last Month</span>
											</span>
										</div>
										<div>
											<a href="#!" class="btn-link fw-semi-bold">View Statement</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-lg-6 mb-5">
								<div class="card bg-gray-200 shadow-none card-lift">
									<div class="card-body">
										<div class="mb-4">
											<h4 class="mb-0">Monthly Visitors</h4>
										</div>
										<div class="mb-6 lh-1">
											<h1 class="text-dark fw-bold mb-0">2,348</h1>
											<span>
												<span class="text-danger">
													<i data-feather="arrow-down" class="icon-xxs"></i>
													7.00%
												</span>
												<span class="text-muted">vs</span>
												<span>Last Month</span>
											</span>
										</div>
										<div>
											<a href="#!" class="btn-link fw-semi-bold">View Analytics</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-lg-6 mb-5">
								<div class="card bg-gray-200 shadow-none card-lift">
									<div class="card-body">
										<div class="mb-4">
											<h4 class="mb-0">Total Posts</h4>
										</div>
										<div class="mb-6 lh-1">
											<h1 class="text-dark fw-bold mb-0">1,543</h1>
											<span>
												<span class="text-dark">3</span>
												<span class="ms-1">Post in Draft</span>
											</span>
										</div>
										<div>
											<a href="#!" class="btn-link fw-semi-bold">View All Posts</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-lg-6 mb-5">
								<div class="card bg-gray-200 shadow-none card-lift">
									<div class="card-body">
										<div class="mb-4">
											<h4 class="mb-0">Followers</h4>
										</div>
										<div class="mb-6 lh-1">
											<h1 class="text-dark fw-bold mb-0">7,500</h1>
											<span>
												<span class="text-success">
													<i data-feather="arrow-up" class="icon-xxs"></i>
													28+
												</span>
												<span class="text-muted">vs</span>
												<span>Last Month</span>
											</span>
										</div>
										<div>
											<a href="#!" class="btn-link fw-semi-bold">Manage Followers</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xxl-9 mb-5">
								<div class="card h-100">
									<div class="card-header d-flex justify-content-between align-items-center">
										<h4 class="mb-0">Visitors</h4>
										<div>
											<div>
												<select class="form-select form-select-sm">
													<option selected="">Today</option>
													<option value="Yesterday">Yesterday</option>
													<option value="Last 7 Days">Last 7 Days</option>
													<option value="Last 30 Days">Last 30 Days</option>
													<option value="This Month">This Month</option>
													<option value="Last Month">Last Month</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div id="visitorBlog"></div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 mb-5">
								<div class="card h-100">
									<div class="card-header">
										<h4 class="mb-0">Popular Posts</h4>
									</div>
									<div class="card-body">
										<div class="mb-5 d-block">
											<div class="d-flex align-items-center">
												<a href="#!"><img src="../assets/images/blog/blog-img-1.jpg" alt="Image" class="img-4by3-sm rounded-3" /></a>
												<div class="ms-4">
													<h4 class="mb-1"><a href="#!" class="text-inherit">Aliquam malesuada, nisl sit amet efficitur laoreet</a></h4>
													<small class="text-muted">
														Auhtor:
														<a href="#!" class="text-inherit">Bert Schultz</a>
													</small>
												</div>
											</div>
										</div>
										<div class="mb-5 d-block">
											<div class="d-flex align-items-center">
												<a href="#!"><img src="../assets/images/blog/blog-img-2.jpg" alt="Image" class="img-4by3-sm rounded-3" /></a>
												<div class="ms-4">
													<h4 class="mb-1"><a href="#!" class="text-inherit">Fusce sit amet ex mollis ligula aliquet vestibulum tempus</a></h4>
													<small class="text-muted">
														Auhtor:
														<a href="#!" class="text-inherit">Christian Hart</a>
													</small>
												</div>
											</div>
										</div>
										<div class="mb-5 d-block">
											<div class="d-flex align-items-center">
												<a href="#!"><img src="../assets/images/blog/blog-img-3.jpg" alt="Image" class="img-4by3-sm rounded-3" /></a>
												<div class="ms-4">
													<h4 class="mb-1"><a href="#!" class="text-inherit">Maecenas non eros nec urna lobortis aliquam.</a></h4>
													<small class="text-muted">
														Auhtor:
														<a href="#!" class="text-inherit">Charles Pope</a>
													</small>
												</div>
											</div>
										</div>
										<div class="mb-5 d-block">
											<div class="d-flex align-items-center">
												<a href="#!"><img src="../assets/images/blog/blog-img-1.jpg" alt="Image" class="img-4by3-sm rounded-3" /></a>
												<div class="ms-4">
													<h4 class="mb-1"><a href="#!" class="text-inherit">Aliquam malesuada, nisl sit amet efficitur laoreet</a></h4>
													<small class="text-muted">
														Auhtor:
														<a href="#!" class="text-inherit">Charles Pope</a>
													</small>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex align-items-center">
												<a href="#!"><img src="../assets/images/blog/blog-img-4.jpg" alt="Image" class="img-4by3-sm rounded-3" /></a>
												<div class="ms-4">
													<h4 class="mb-1"><a href="#!" class="text-inherit">Proin maximus augue dolor, sit amet mattis diam accumsan</a></h4>
													<small class="text-muted">
														Auhtor:
														<a href="#!" class="text-inherit">Rose daniels</a>
													</small>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-center">
										<a href="#!" class="btn btn-primary">
											View All Post
											<i class="ms-1 icon-xxs" data-feather="arrow-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xxl-9 mb-5">
								<div class="card h-100">
									<div class="card-header d-flex justify-content-between align-items-center">
										<h4 class="mb-0">About Author</h4>
									</div>
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center mb-8">
											<div class="d-flex align-items-center">
												<img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar-lg avatar rounded-circle" />
												<div class="ms-3">
													<h4 class="mb-0">Jitu Chauhan</h4>
													<small>Blogger at DashUI</small>
												</div>
											</div>
											<div>
												<a href="#!" class="btn btn-primary">Edit Profile</a>
											</div>
										</div>
										<div class="mb-8">
											<h5>Bio</h5>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspen disse var ius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla,
												ut commodo diam libero vitae erat.
											</p>
										</div>
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="mb-6">
													<span>Full Name</span>
													<h5 class="mb-0 mt-2">Jitu Chauhan</h5>
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="mb-6">
													<span>Email ID</span>
													<h5 class="mb-0 mt-2">dashui@jituchauhan.com</h5>
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="mb-6">
													<span>User Name</span>
													<h5 class="mb-0 mt-2">jituchauhan</h5>
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="mb-6">
													<span>Mobile Number</span>
													<h5 class="mb-0 mt-2">+ 123 456 7890</h5>
												</div>
											</div>
											<div class="col-6 col-12">
												<div>
													<span>Date of Join</span>
													<h5 class="mb-0 mt-2">27 July 2023</h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xxl-3 mb-5">
								<div class="card h-100">
									<div class="card-header">
										<h4 class="mb-0">
											<i class="bi bi-star text-warning fs-5 me-2"></i>
											Recent Comments
										</h4>
									</div>
									<div class="card-body">
										<div class="mb-5 d-block">
											<div class="d-flex">
												<img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-md rounded-circle" />
												<div class="ms-3">
													<h5 class="mb-2">
														<a href="#!" class="text-inherit">Tim</a>
														<span class="text-muted">on</span>
														<a href="#!">Aliquam malesuada, nisl sit amet efficitur laoreet</a>
													</h5>
													<p class="text-muted mb-0">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
												</div>
											</div>
										</div>
										<div class="mb-5 d-block">
											<div class="d-flex">
												<img src="../assets/images/avatar/avatar-2.jpg" alt="Image" class="avatar avatar-md rounded-circle" />
												<div class="ms-3">
													<h5 class="mb-2">
														<a href="#!" class="text-inherit">Sara</a>
														<span class="text-muted">on</span>
														<a href="#!">Fusce sit amet ex mollis ligula aliquet vestibulum tempus</a>
													</h5>
													<p class="text-muted mb-0">Aliquam eu nunc lacinia nibh ullamcorper auris pulvinar nibh non tempor egestas.</p>
												</div>
											</div>
										</div>
										<div class="mb-5 d-block">
											<div class="d-flex">
												<img src="../assets/images/avatar/avatar-3.jpg" alt="Image" class="avatar avatar-md rounded-circle" />
												<div class="ms-3">
													<h5 class="mb-2">
														<a href="#!" class="text-inherit">Peter griffin</a>
														<span class="text-muted">on</span>
														<a href="#!">Enean sagittis, dolor in gravida efficitur</a>
													</h5>
													<p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing pellentesque viverra nulla.</p>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex">
												<img src="../assets/images/avatar/avatar-4.jpg" alt="Image" class="avatar avatar-md rounded-circle" />
												<div class="ms-3">
													<h5 class="mb-2">
														<a href="#!" class="text-dark">Sara</a>
														<span class="text-muted">on</span>
														<a href="#!">Fusce sit amet ex mollis ligula aliquet vestibulum tempus</a>
													</h5>
													<p class="text-muted mb-0">Aliquam eu nunc lacinia nibh ullamcorper auris pulvinar nibh non tempor egestas.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-center">
										<a href="#!" class="btn btn-primary">
											Check Details
											<i class="ms-1 icon-xxs" data-feather="arrow-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 mb-5">
								<div class="card h-100">
									<div class="card-header d-flex justify-content-between align-items-center">
										<h4 class="mb-0">Post List</h4>
										<a href="#!" class="btn btn-primary btn-sm">Add Post</a>
									</div>
									<div class="card-body">
										<div class="table-responsive table-card">
											<table class="table mb-0 text-nowrap table-centered">
												<thead class="table-light">
													<tr>
														<th scope="col">Blog Title</th>
														<th scope="col">Author Name</th>
														<th scope="col">Published Date</th>
														<th scope="col">Category</th>
														<th scope="col">Status</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<h5 class="mb-0"><a href="#!" class="text-inherit">Ideas for online marketing - Meta for Business</a></h5>
														</td>
														<td><a href="#!">Bert Schultz</a></td>
														<td>03 Oct 2023</td>
														<td>Fashion</td>
														<td><span class="badge badge-success-soft">Live</span></td>
														<td>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashFour">
																<i data-feather="trash-2" class="icon-xs"></i>
																<div id="trashFour" class="d-none">
																	<span>Delete</span>
																</div>
															</a>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editOne">
																<i data-feather="edit" class="icon-xs"></i>
																<div id="editOne" class="d-none">
																	<span>Edit</span>
																</div>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<h5 class="mb-0"><a href="#!" class="text-inherit">Learn how to reach your customers and boost your business.</a></h5>
														</td>
														<td><a href="#!">Christian Hart</a></td>
														<td>19 Sept 2023</td>
														<td>Marketing</td>
														<td><span class="badge badge-success-soft">Live</span></td>
														<td>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashTwo">
																<i data-feather="trash-2" class="icon-xs"></i>
																<div id="trashTwo" class="d-none">
																	<span>Delete</span>
																</div>
															</a>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editTwo">
																<i data-feather="edit" class="icon-xs"></i>
																<div id="editTwo" class="d-none">
																	<span>Edit</span>
																</div>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<h5 class="mb-0"><a href="#!" class="text-inherit">Build a Relationship with Your Audience and Customers</a></h5>
														</td>
														<td><a href="#!">Kimberly Barnes</a></td>
														<td>04 Sept 2023</td>
														<td>Technology</td>
														<td><span class="badge badge-danger-soft">Removed</span></td>
														<td>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashThree">
																<i data-feather="trash-2" class="icon-xs"></i>
																<div id="trashThree" class="d-none">
																	<span>Delete</span>
																</div>
															</a>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editThree">
																<i data-feather="edit" class="icon-xs"></i>
																<div id="editThree" class="d-none">
																	<span>Edit</span>
																</div>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<h5 class="mb-0"><a href="#!" class="text-inherit">Get started with a step-by-step guide on creating effective ads</a></h5>
														</td>
														<td><a href="#!">Alejandro Burdette</a></td>
														<td>23 Aug 2023</td>
														<td>eCommerce</td>
														<td><span class="badge badge-success-soft">Live</span></td>
														<td>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashFive">
																<i data-feather="trash-2" class="icon-xs"></i>
																<div id="trashFive" class="d-none">
																	<span>Delete</span>
																</div>
															</a>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editFour">
																<i data-feather="edit" class="icon-xs"></i>
																<div id="editFour" class="d-none">
																	<span>Edit</span>
																</div>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<h5 class="mb-0"><a href="#!" class="text-inherit">advertising solutions for every level of expertise.</a></h5>
														</td>
														<td><a href="#!">Charles Pope</a></td>
														<td>16 Aug 2023</td>
														<td>Sports</td>
														<td><span class="badge badge-success-soft">Live</span></td>
														<td>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashNine">
																<i data-feather="trash-2" class="icon-xs"></i>
																<div id="trashNine" class="d-none">
																	<span>Delete</span>
																</div>
															</a>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editFive">
																<i data-feather="edit" class="icon-xs"></i>
																<div id="editFive" class="d-none">
																	<span>Edit</span>
																</div>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<h5 class="mb-0"><a href="#!" class="text-inherit">Here's how to create a Facebook ad.</a></h5>
														</td>
														<td><a href="#!">Tabitha Ewing</a></td>
														<td>12 Aug 2023</td>
														<td>Travel</td>
														<td><span class="badge badge-warning-soft">Draft</span></td>
														<td>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashSix">
																<i data-feather="trash-2" class="icon-xs"></i>
																<div id="trashSix" class="d-none">
																	<span>Delete</span>
																</div>
															</a>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editSix">
																<i data-feather="edit" class="icon-xs"></i>
																<div id="editSix" class="d-none">
																	<span>Edit</span>
																</div>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<h5 class="mb-0"><a href="#!" class="text-inherit">Get out of your comfort zone – and experiment</a></h5>
														</td>
														<td><a href="#!">Rose Daniels</a></td>
														<td>26 July 2023</td>
														<td>Fashion</td>
														<td><span class="badge badge-success-soft">Live</span></td>
														<td>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashSeven">
																<i data-feather="trash-2" class="icon-xs"></i>
																<div id="trashSeven" class="d-none">
																	<span>Delete</span>
																</div>
															</a>
															<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editSeven">
																<i data-feather="edit" class="icon-xs"></i>
																<div id="editSeven" class="d-none">
																	<span>Edit</span>
																</div>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer d-md-flex justify-content-between align-items-center">
										<span class="mb-3 mb-lg-0 d-block">
											Showing
											<span class="text-dark">5</span>
											of
											<span class="text-dark">25</span>
											Results
										</span>
										<nav>
											<ul class="pagination mb-0">
												<li class="page-item disabled">
													<a class="page-link" href="#!"><i class="mdi mdi-chevron-left"></i></a>
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
													<a class="page-link" href="#!"><i class="mdi mdi-chevron-right"></i></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!-- Scripts -->

		@@include("../partials/scripts.html")
		<!-- apexchart js -->
		<script src="@@webRoot/node_modules/apexcharts/dist/apexcharts.min.js"></script>
		<script src="@@webRoot/assets/js/vendors/chart.js"></script>
		<!-- popper js -->
		<script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
		<!-- tippy js -->
		<script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
		<script src="@@webRoot/assets/js/vendors/tooltip.js"></script>
	</body>
</html>
