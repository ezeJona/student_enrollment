<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- dragula -->
		<link href="@@webRoot/node_modules/dragula/dist/dragula.min.css" rel="stylesheet" />
		@@include("../partials/head.html")

		<title>Kanban | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
	</head>

	<body>
		<main id="main-wrapper" class="main-wrapper">
			@@include("../partials/header.html")
			<!-- navbar vertical -->
			@@include('../partials/navbar-vertical.html', { "page": "kanban-list", "page_group": "kanban" })

			<!-- page content -->
			<div id="app-content">
				<div class="app-content-area">
					<div class="container-fluid">
						<div class="row mb-8 align-items-center">
							<div class="col-xxl-10 col-xl-8 col-lg-6 col-md-12 col-12 mb-3 mb-lg-0">
								<!-- heading -->
								<h3 class="mb-0">DashUI Design & Development</h3>
							</div>
							<div class="col-xxl-1 col-xl-2 col-lg-3 col-md-12 pe-lg-2">
								<!-- select -->
								<select class="form-select mb-2 mb-lg-0">
									<option selected>Sort</option>
									<option value="None">None</option>
									<option value="Due Date">Due Date</option>
									<option value="Assignee">Assignee</option>
									<option value="Likes">Likes</option>
									<option value="Alphabetical">Alphabetical</option>
									<option value="Priority">Priority</option>
								</select>
							</div>
							<div class="col-xxl-1 col-xl-2 col-lg-3 col-md-12 ps-lg-2">
								<!-- select -->
								<select class="form-select">
									<option selected>Filter</option>
									<option value="Just my task">Just my task</option>
									<option value="Due this week">Due this week</option>
									<option value="Due next week">Due next week</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-xxl-8 col-12">
								<div class="card mb-6">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<a class="text-dark fs-4" data-bs-toggle="collapse" href="#taskCardOne" aria-expanded="false" aria-controls="taskCardOne">
												<i data-feather="chevron-down" class="icon-xs"></i>
												To Do
												<span class="text-muted">(12)</span>
											</a>
											<!-- dropdown -->
											<div class="dropdown dropstart">
												<a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" id="dropdownTask11" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i data-feather="more-vertical" class="icon-xs"></i>
												</a>
												<div class="dropdown-menu" aria-labelledby="dropdownTask11">
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="edit-2"></i>
														Edit this task
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="check-square"></i>
														Mark Complete
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="eye"></i>
														View Details
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="maximize-2"></i>
														Open in New Tab
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="copy"></i>
														Duplicate task
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="link"></i>
														Copy task link
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="trash-2"></i>
														Delete task
													</a>
												</div>
											</div>
										</div>

										<div class="collapse show" id="taskCardOne">
											<div id="do" class="p-2 mt-4">
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck1" />
																<label class="form-check-label" for="customCheck1">
																	<span class="h5">Initial setup your design</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">30 Oct 2023</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																3/12
															</span>
															<span class="ms-6"><span class="badge badge-danger-soft">High</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck2" />
																<label class="form-check-label" for="customCheck2">
																	<span class="h5">Invite your teammates and start collaborating</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-2.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">15 Oct 2023</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																8/16
															</span>
															<span class="ms-6"><span class="badge badge-warning-soft">Medium</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck3" />
																<label class="form-check-label" for="customCheck3">
																	<span class="h5">Start manage projects on the go</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-3.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">25 Nov 2023</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																9/24
															</span>
															<span class="ms-6"><span class="badge badge-info-soft">Low</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-6">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<a class="text-dark fs-4" data-bs-toggle="collapse" href="#taskCardTwo" aria-expanded="false" aria-controls="taskCardTwo">
												<i data-feather="chevron-down" class="icon-xs"></i>
												Doing
											</a>
											<!-- dropdown -->
											<div class="dropdown dropstart">
												<a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" id="dropdownTask2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i data-feather="more-vertical" class="icon-xs"></i>
												</a>
												<div class="dropdown-menu" aria-labelledby="dropdownTask2">
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="edit-2"></i>
														Edit this task
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="check-square"></i>
														Mark Complete
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="eye"></i>
														View Details
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="maximize-2"></i>
														Open in New Tab
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="copy"></i>
														Duplicate task
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="link"></i>
														Copy task link
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="trash-2"></i>
														Delete task
													</a>
												</div>
											</div>
										</div>

										<div class="collapse show" id="taskCardTwo">
											<div id="progress" class="p-2 mt-4">
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck4" />
																<label class="form-check-label" for="customCheck4">
																	<span class="h5">Website launch planning</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-4.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">15 Sept 2020</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																7/24
															</span>
															<span class="ms-6"><span class="badge badge-warning-soft">Meidum</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck5" />
																<label class="form-check-label" for="customCheck5">
																	<span class="h5">Start prototyping in framer</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-5.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">17 Oct 2023</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																8/16
															</span>
															<span class="ms-6"><span class="badge badge-info-soft">Low</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck7" />
																<label class="form-check-label" for="customCheck7">
																	<span class="h5">Create a UI / UX designer team</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-6.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">30 Sept 2020</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																23/24
															</span>
															<span class="ms-6"><span class="badge badge-danger-soft">High</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck8" />
																<label class="form-check-label" for="customCheck8">
																	<span class="h5">Initial setup your design</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-8.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">30 Oct 2023</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																3/12
															</span>
															<span class="ms-6"><span class="badge badge-danger-soft">High</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck9" />
																<label class="form-check-label" for="customCheck9">
																	<span class="h5">Invite your teammates and start collaborating</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-2.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">15 Oct 2023</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																8/16
															</span>
															<span class="ms-6"><span class="badge badge-warning-soft">Medium</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-6">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<a class="text-dark fs-4 chevron-arrow" data-bs-toggle="collapse" href="#taskCardThree" aria-expanded="false" aria-controls="taskCardThree">
												<i data-feather="chevron-down" class="icon-xs"></i>
												Done
											</a>
											<!-- dropdown -->
											<div class="dropdown dropstart">
												<a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" id="dropdownTask3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i data-feather="more-vertical" class="icon-xs"></i>
												</a>
												<div class="dropdown-menu" aria-labelledby="dropdownTask3">
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="edit-2"></i>
														Edit this task
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="check-square"></i>
														Mark Complete
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="eye"></i>
														View Details
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="maximize-2"></i>
														Open in New Tab
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="copy"></i>
														Duplicate task
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="link"></i>
														Copy task link
													</a>
													<a class="dropdown-item d-flex align-items-center" href="#!">
														<i class="dropdown-item-icon" data-feather="trash-2"></i>
														Delete task
													</a>
												</div>
											</div>
										</div>

										<div class="collapse show" id="taskCardThree">
											<div id="done" class="p-2 mt-4">
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck12" />
																<label class="form-check-label" for="customCheck12">
																	<span class="h5">Create a UI / UX designer team</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-6.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">30 Sept 2020</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																23/24
															</span>
															<span class="ms-6"><span class="badge badge-danger-soft">High</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck13" />
																<label class="form-check-label" for="customCheck13">
																	<span class="h5">Initial setup your design</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-8.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">30 Oct 2023</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																3/12
															</span>
															<span class="ms-6"><span class="badge badge-danger-soft">High</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck10" />
																<label class="form-check-label" for="customCheck10">
																	<span class="h5">Website launch planning</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-4.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">15 Sept 2020</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																7/24
															</span>
															<span class="ms-6"><span class="badge badge-warning-soft">Meidum</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck11" />
																<label class="form-check-label" for="customCheck11">
																	<span class="h5">Start prototyping in framer</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-5.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">17 Oct 2023</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																8/16
															</span>
															<span class="ms-6"><span class="badge badge-info-soft">Low</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
												<div class="row mb-2 border-bottom pb-2 g-0">
													<div class="col-lg-6">
														<div class="d-flex">
															<div class="me-2"><i class="mdi mdi-drag"></i></div>
															<div class="form-check custom-checkbox">
																<input type="checkbox" class="form-check-input" id="customCheck14" />
																<label class="form-check-label" for="customCheck14">
																	<span class="h5">Invite your teammates and start collaborating</span>
																</label>
															</div>
														</div>
													</div>
													<div class="col-lg-6 ms-5 ms-lg-0 mt-2 mt-lg-0">
														<div class="d-flex justify-content-between">
															<img src="../assets/images/avatar/avatar-2.jpg" alt="Image" class="avatar avatar-xs rounded-2" />
															<span class="ms-4">15 Oct 2023</span>
															<span class="ms-6">
																<i class="me-1 icon-xs" data-feather="check-square"></i>
																8/16
															</span>
															<span class="ms-6"><span class="badge badge-warning-soft">Medium</span></span>
															<span class="me-6"><i data-feather="chevron-right" class="icon-xs"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-xxl-4 col-12">
								<div class="card">
									<div class="card-body d-flex flex-column gap-6">
										<div class="border-bottom pb-2 d-flex justify-content-between align-items-center">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
												<label class="form-check-label" for="flexCheckDefault">Mark as completed</label>
											</div>
											<div>
												<div class="dropdown dropstart">
													<a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" id="dropdownTask11" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
															class="feather feather-more-vertical icon-xs"
														>
															<circle cx="12" cy="12" r="1"></circle>
															<circle cx="12" cy="5" r="1"></circle>
															<circle cx="12" cy="19" r="1"></circle>
														</svg>
													</a>
													<div class="dropdown-menu" aria-labelledby="dropdownTask11" style="">
														<a class="dropdown-item d-flex align-items-center" href="#!">
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
																class="feather feather-edit-2 dropdown-item-icon"
															>
																<path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
															</svg>
															Edit
														</a>
														<a class="dropdown-item d-flex align-items-center" href="#!">
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
																class="feather feather-file-plus dropdown-item-icon"
															>
																<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
																<polyline points="14 2 14 8 20 8"></polyline>
																<line x1="12" y1="18" x2="12" y2="12"></line>
																<line x1="9" y1="15" x2="15" y2="15"></line>
															</svg>
															Attachment
														</a>
														<a class="dropdown-item d-flex align-items-center" href="#!">
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
																class="feather feather-copy dropdown-item-icon"
															>
																<rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
																<path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
															</svg>
															Mark as Duplicate
														</a>
														<a class="dropdown-item d-flex align-items-center" href="#!">
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
																class="feather feather-trash-2 dropdown-item-icon"
															>
																<polyline points="3 6 5 6 21 6"></polyline>
																<path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
																<line x1="10" y1="11" x2="10" y2="17"></line>
																<line x1="14" y1="11" x2="14" y2="17"></line>
															</svg>
															Delete
														</a>
													</div>
												</div>
											</div>
										</div>
										<div>
											<h4 class="mb-4">Draft the new contract document for sales team</h4>
											<div class="d-flex justify-content-between">
												<div class="d-flex gap-2 flex-column">
													<span>Assigned To</span>
													<div class="d-flex gap-2 align-items-center">
														<img src="../assets/images/avatar/avatar-1.jpg" alt="" class="avatar avatar-xs rounded-circle" />
														<span>John Deo</span>
													</div>
												</div>
												<div class="d-flex gap-2 flex-column">
													<span>Due Date</span>
													<div class="d-flex gap-2 align-items-center">
														<svg
															xmlns="http://www.w3.org/2000/svg"
															width="14"
															height="14"
															viewBox="0 0 24 24"
															fill="none"
															stroke="currentColor"
															stroke-width="2"
															stroke-linecap="round"
															stroke-linejoin="round"
															class="feather feather-calendar"
														>
															<rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
															<line x1="16" y1="2" x2="16" y2="6"></line>
															<line x1="8" y1="2" x2="8" y2="6"></line>
															<line x1="3" y1="10" x2="21" y2="10"></line>
														</svg>
														<span>Today 10am</span>
													</div>
												</div>
											</div>
										</div>
										<div class="border p-4 rounded-lg">
											<h3>This is an simple editable area.</h3>
											<ul class="mb-0">
												<li>Select a text to reveal the toolbar.</li>
												<li>Edit rich document on-the-fly, so elastic!</li>
											</ul>
										</div>
										<div>
											<h4 class="mb-4">Checklists/Sub-tasks</h4>
											<div class="d-flex flex-column gap-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexChecksubTask1" />
													<label class="form-check-label" for="flexChecksubTask1">Find out the old contract documents</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexChecksubTask2" />
													<label class="form-check-label" for="flexChecksubTask2">Organize meeting sales associates to understand need in detail</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexChecksubTask3" />
													<label class="form-check-label" for="flexChecksubTask3">Make sure to cover every small details</label>
												</div>
											</div>
										</div>
										<div>
											<h4 class="mb-4">Attachments</h4>
											<div class="d-flex flex-column gap-2">
												<div class="d-flex flex-row border p-3 rounded-3 justify-content-between align-items-center">
													<div class="d-flex align-items-center gap-3">
														<div class="bg-danger icon-shape icon-md rounded-2 text-white">.ZIP</div>
														<div class="d-flex flex-column">
															<span>assets.zip</span>
															<span>10 mb</span>
														</div>
													</div>
													<div class="d-flex flex-row gap-2">
														<a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download">
															<svg
																xmlns="http://www.w3.org/2000/svg"
																width="18"
																height="18"
																viewBox="0 0 24 24"
																fill="none"
																stroke="currentColor"
																stroke-width="2"
																stroke-linecap="round"
																stroke-linejoin="round"
																class="feather feather-download-cloud"
															>
																<polyline points="8 17 12 21 16 17"></polyline>
																<line x1="12" y1="12" x2="12" y2="21"></line>
																<path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
															</svg>
														</a>
														<a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
															<svg
																xmlns="http://www.w3.org/2000/svg"
																width="18"
																height="18"
																viewBox="0 0 24 24"
																fill="none"
																stroke="currentColor"
																stroke-width="2"
																stroke-linecap="round"
																stroke-linejoin="round"
																class="feather feather-x"
															>
																<line x1="18" y1="6" x2="6" y2="18"></line>
																<line x1="6" y1="6" x2="18" y2="18"></line>
															</svg>
														</a>
													</div>
												</div>
												<div class="d-flex flex-row border p-3 rounded-3 justify-content-between align-items-center">
													<div class="d-flex align-items-center gap-3">
														<div class="bg-light icon-shape icon-md rounded-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-word" viewBox="0 0 16 16">
																<path
																	d="M5.485 6.879a.5.5 0 1 0-.97.242l1.5 6a.5.5 0 0 0 .967.01L8 9.402l1.018 3.73a.5.5 0 0 0 .967-.01l1.5-6a.5.5 0 0 0-.97-.242l-1.036 4.144-.997-3.655a.5.5 0 0 0-.964 0l-.997 3.655L5.485 6.88z"
																/>
																<path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
															</svg>
														</div>
														<div class="d-flex flex-column">
															<span>Demo.Docx</span>
															<span>10 mb</span>
														</div>
													</div>
													<div class="d-flex flex-row gap-2">
														<a href="#" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download">
															<svg
																xmlns="http://www.w3.org/2000/svg"
																width="18"
																height="18"
																viewBox="0 0 24 24"
																fill="none"
																stroke="currentColor"
																stroke-width="2"
																stroke-linecap="round"
																stroke-linejoin="round"
																class="feather feather-download-cloud"
															>
																<polyline points="8 17 12 21 16 17"></polyline>
																<line x1="12" y1="12" x2="12" y2="21"></line>
																<path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
															</svg>
														</a>
														<a href="#" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
															<svg
																xmlns="http://www.w3.org/2000/svg"
																width="18"
																height="18"
																viewBox="0 0 24 24"
																fill="none"
																stroke="currentColor"
																stroke-width="2"
																stroke-linecap="round"
																stroke-linejoin="round"
																class="feather feather-x"
															>
																<line x1="18" y1="6" x2="6" y2="18"></line>
																<line x1="6" y1="6" x2="18" y2="18"></line>
															</svg>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div>
											<h4 class="mb-4">Comments</h4>
											<div class="d-flex justify-content-between border-bottom pb-3 mb-3">
												<div class="d-flex gap-2 flex-row">
													<img src="../assets/images/avatar/avatar-2.jpg" class="avatar avatar-md rounded-circle" />
													<div class="">
														<h5 class="mb-0">Neni lopam</h5>
														<small>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, reprehenderit.</small>
													</div>
												</div>
												<div class="small">3.50PM</div>
											</div>
											<div class="d-flex justify-content-between border-bottom pb-3 mb-3">
												<div class="d-flex gap-2 flex-row">
													<img src="../assets/images/avatar/avatar-4.jpg" class="avatar avatar-md rounded-circle" />
													<div class="">
														<h5 class="mb-0">John Mulka</h5>
														<small>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, reprehenderit.</small>
													</div>
												</div>
												<div class="small">1.50PM</div>
											</div>
											<div>
												<form class="d-flex flex-column gap-3">
													<div>
														<label class="visually-hidden" for="comments">Comments</label>
														<textarea class="form-control" rows="4" placeholder="Your comment..." id="comments"></textarea>
													</div>
													<div>
														<button class="btn btn-primary" type="submit">Submit</button>
													</div>
												</form>
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
		<!-- Scripts -->
		<!-- dragula -->
		<script src="@@webRoot/node_modules/dragula/dist/dragula.min.js"></script>

		@@include("../partials/scripts.html")
	</body>
</html>
