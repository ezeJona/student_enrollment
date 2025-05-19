<!DOCTYPE html>
<html lang="en">
	<head>
		@@include("../partials/head.html")

		<title>Deals | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>
	</head>

	<body>
		<!-- Wrapper -->
		<main id="main-wrapper" class="main-wrapper">
			@@include("../partials/header.html")
			<!-- navbar vertical -->

			@@include('../partials/navbar-vertical.html', { "page": "crmDeals", "page_group": "CRM" })

			<!-- Page Content -->
			<div id="app-content">
				<!-- Container fluid -->
				<div class="app-content-area kanban-content-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-12">
								<!-- Page header -->
								<div class="mb-6">
									<h3 class="mb-0">Deals</h3>
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
											<select class="form-select" aria-label="Default select example">
												<option selected>Filter</option>
												<option value="Prospecting">Prospecting</option>
												<option value="Qualification">Qualification</option>
												<option value="Proposal">Proposal</option>
												<option value="Negotiation">Negotiation</option>
												<option value="Closed/Won">Closed/Won</option>
												<option value="Closed/Lost">Closed/Lost</option>
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

						<div class="row">
							<div class="col-12">
								<div class="task-kanban-container pb-8">
									<div class="bg-gray-300 shadow-none border-top rounded-3 p-3 border-opacity-25 task-card border-top border-secondary me-4 pb-0">
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
																<a href="#!">Project Alpha Launch</a>
															</h4>
															<span class="text-gray-400">Alpha Enterprises</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$100,000</span>
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
															<h4 class="mb-0">Deal info</h4>
															<div class="">
																<table class="table table-borderless mb-0 text-nowrap table-sm">
																	<tbody>
																		<tr>
																			<td class="px-0">
																				<i data-feather="dollar-sign" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Value:</span>
																			</td>

																			<td class="px-0">$100,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">Alpha Enterprises</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">June 30, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">John Smith</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">New Business</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="info" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Priority:</span>
																			</td>

																			<td class="px-0"><span class="badge badge-info-soft border border-info rounded-pill">Medium</span></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">Expansion Opportunity with Client Bravo</a>
															</h4>
															<span class="text-gray-400">Bravo Corporation</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$50,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-2.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample2">
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

																			<td class="px-0">$50,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">Bravo Corporation</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">May 31, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Jane Doe</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">Upsell</td>
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
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0">
																<a href="#!">Renewal of Service Contract</a>
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
														<div>
															<img src="../assets/images/avatar/avatar-3.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample3">
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

																			<td class="px-0"><span class="badge badge-danger-soft border border-danger rounded-pill">Low</span></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card pb-0">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">Cross-Sell Package for Client Echo</a>
															</h4>
															<span class="text-gray-400">Echo Solutions LLC</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$120,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-4.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample4">
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

																			<td class="px-0">$120,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">Echo Solutions LLC</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">June 15, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Robert Green</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">New Business</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="info" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Priority:</span>
																			</td>

																			<td class="px-0"><span class="badge badge-info-soft border border-info rounded-pill">Medium</span></td>
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
									<div class="bg-gray-300 shadow-none border-top rounded-3 p-3 border-opacity-25 task-card border-top border-secondary me-4 pb-0">
										<div class="d-flex flex-column gap-2 mb-4">
											<div class="d-flex flex-row justify-content-between">
												<div>
													<h4 class="mb-0 fs-5">Qualification</h4>
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
													<span class="fw-semi-bold">$395,000.00</span>
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
																<a href="#!">Digital Marketing Campaign</a>
															</h4>
															<span class="text-gray-400">Foxtrot Innovations Ltd.</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$90,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-5.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample5">
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

																			<td class="px-0">$90,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">Foxtrot Innovations Ltd.</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">May 20, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Amanda Turner</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">New Business</td>
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
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">Technology Upgrade - Client Golf</a>
															</h4>
															<span class="text-gray-400">Golf Tech Solutions Inc.</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$120,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-6.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample6">
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

																			<td class="px-0">$120,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">Golf Tech Solutions Inc.</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">June 25, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Brian Miller</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">Upsell</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="info" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Priority:</span>
																			</td>

																			<td class="px-0"><span class="badge badge-info-soft border border-info rounded-pill">Medium</span></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0">
																<a href="#!">Event Sponsorship Renewal</a>
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
														<div>
															<img src="../assets/images/avatar/avatar-7.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample7">
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
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">Product Integration - Client India Echo</a>
															</h4>
															<span class="text-gray-400">India Echo Technologies Ltd.</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$110,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-8.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample8">
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

																			<td class="px-0">$110,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0 text-truncate">India Echo Techno Ltd.</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">June 10, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Sarah Brown</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">New Business</td>
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
									<div class="bg-gray-300 shadow-none border-top rounded-3 p-3 border-opacity-25 task-card border-top border-secondary me-4 pb-0">
										<div class="d-flex flex-column gap-2 mb-4">
											<div class="d-flex flex-row justify-content-between">
												<div>
													<h4 class="mb-0 fs-5">Proposal</h4>
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
													<span class="fw-semi-bold">$225,000.00</span>
												</div>
												<div>
													<span class="badge rounded-circle badge-secondary-soft">3</span>
												</div>
											</div>
										</div>
										<div class="task-kanban">
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">Software License Renewal - Client Kilo</a>
															</h4>
															<span class="text-gray-400">Kilo Solutions Inc.</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$95,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-9.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample9">
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

																			<td class="px-0">$95,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">Kilo Solutions Inc.</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">July 15, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Olivia White</td>
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
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">Prospect Meeting - Client Alpha</a>
															</h4>
															<span class="text-gray-400">Alpha Innovations Ltd.</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$50,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-10.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample10" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample10">
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

																			<td class="px-0">$50,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">Alpha Innovations Ltd.</td>
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

																			<td class="px-0">Emily Davis</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">New Business</td>
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
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0">
																<a href="#!">Proposal Sent - Client Bravo</a>
															</h4>
															<span class="text-gray-400">Bravo Corporation</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$80,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-11.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample11" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample11">
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

																			<td class="px-0">Bravo Corporation</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">March 31, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Jessica Miller</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">New Business</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="info" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Priority:</span>
																			</td>

																			<td class="px-0"><span class="badge badge-info-soft border border-info rounded-pill">Medium</span></td>
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
									<div class="bg-gray-300 shadow-none border-top rounded-3 p-3 border-opacity-25 task-card border-top border-secondary me-4 pb-0">
										<div class="d-flex flex-column gap-2 mb-4">
											<div class="d-flex flex-row justify-content-between">
												<div>
													<h4 class="mb-0 fs-5">Negotiation</h4>
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
													<span class="fw-semi-bold">$150,000.00</span>
												</div>
												<div>
													<span class="badge rounded-circle badge-secondary-soft">2</span>
												</div>
											</div>
										</div>
										<div class="task-kanban">
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">Negotiation - Client Charlie</a>
															</h4>
															<span class="text-gray-400">Charlie Services Ltd.</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$120,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-11.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample12" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample12">
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

																			<td class="px-0">$120,000</td>
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

																			<td class="px-0">Feb 28, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Michael Adams</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">Upsell</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="info" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Priority:</span>
																			</td>

																			<td class="px-0"><span class="badge badge-info-soft border border-info rounded-pill">Medium</span></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-body d-flex flex-column">
													<div class="d-flex flex-column gap-3">
														<div class="d-flex flex-column gap-1">
															<h4 class="mb-0 text-truncate">
																<a href="#!">E-Commerce Website Redesign</a>
															</h4>
															<span class="text-gray-400">ShopNStyle Inc.</span>
														</div>

														<div class="d-flex flex-row justify-content-between">
															<span>Amount:</span>
															<span>$30,000</span>
														</div>
													</div>
													<hr class="my-4" />
													<div class="d-flex flex-row justify-content-between align-items-center">
														<div>
															<img src="../assets/images/avatar/avatar-12.jpg" alt="avatar" class="rounded-circle avatar-xs" />
														</div>
														<div>
															<a data-bs-toggle="collapse" class="text-reset" href="#collapseExample13" role="button" aria-expanded="false" aria-controls="collapseExample">
																<i data-feather="chevron-right" class="icon-xs chevron-down"></i>
															</a>
														</div>
													</div>
													<div class="collapse" id="collapseExample13">
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

																			<td class="px-0">$30,000</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="home" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Company:</span>
																			</td>

																			<td class="px-0">ShopNStyle Inc.</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="flag" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Close Date:</span>
																			</td>

																			<td class="px-0">May 15, 2025</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="user" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Owner:</span>
																			</td>

																			<td class="px-0">Sarah Adams</td>
																		</tr>
																		<tr>
																			<td class="px-0">
																				<i data-feather="headphones" class="icon-xxs text-gray-400"></i>
																				<span class="text-gray-500 ms-1">Deal Type:</span>
																			</td>

																			<td class="px-0">New Business</td>
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
									<div class="bg-success-subtle shadow-none border-top rounded-3 p-3 task-card border-top border-success me-4 pb-0">
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
									<div class="bg-danger-subtle shadow-none border-top rounded-3 p-3 task-card border-top border-danger me-4 pb-0">
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
									<div class="bg-gray-300 shadow-none border-top rounded-3 p-3 task-card">
										<div class="d-flex flex-column align-items-center justify-content-center gap-2" style="height: 450px">
											<div>
												<h2 class="mb-0">Add new stage</h2>
											</div>
											<div>
												<a href="#!" class="btn btn-primary">
													<i data-feather="plus" class="icon-xxs"></i>
													New stage
												</a>
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
		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header border-0 pb-0">
						<h3 class="modal-title fs-4" id="staticBackdropLabel">Create new deal</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form class="row g-3">
							<div class="col-12">
								<div>
									<label for="dealFormTitle" class="form-label">Deal Title</label>
									<input type="text" class="form-control" id="dealFormTitle" name="dealFormTitle" placeholder="Enter Project Title" required />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="row gx-2">
									<label for="dealFormValue" class="form-label">Deal Value</label>
									<div class="col-lg-9 col-md-6 col-12">
										<input type="number" class="form-control mb-2 mb-md-0" id="dealFormValue" name="dealFormValue" placeholder="Enter Amount" required />
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<label for="dealFormUsd" class="form-label visually-hidden">USD</label>
										<select class="form-select" aria-label="Default select example" id="dealFormUsd">
											<option>USD</option>
											<option>GBP</option>
											<option>EUR</option>
											<option>JPY</option>
											<option>CAD</option>
											<option>AUD</option>
											<option>CNY</option>
											<option>CHF</option>
											<option>ZAR</option>
											<option>BRL</option>
											<option>RUB</option>
											<option>INR</option>
											<option>MXN</option>
											<option>NZD</option>
											<option>SGD</option>
											<option>HKD</option>
											<option>KRW</option>
											<option>SEK</option>
											<option>NOK</option>
											<option>TRY</option>
										</select>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-12">
								<div>
									<label for="dealFormCode" class="form-label">Deal Code</label>
									<input type="text" class="form-control" id="dealFormCode" name="dealFormCode" placeholder="Enter Code" required />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<label for="dealFormType" class="form-label">Deal Type</label>
								<select class="form-select" aria-label="Default select example" id="dealFormType">
									<option>Select</option>
									<option>Buy One Get One Free</option>
									<option>Clearance sale</option>
									<option>Bundle deals</option>
									<option>Free shipping</option>
									<option>Loyalty programs</option>
									<option>Limited-time offers</option>
									<option>Refer-a-friend discounts</option>
									<option>Seasonal sales</option>
									<option>Membership discounts</option>
								</select>
							</div>
							<div class="col-lg-6 col-12">
								<label for="dealFormCategory" class="form-label">Deal Category</label>
								<select class="form-select" aria-label="Default select example" id="dealFormCategory">
									<option>Select</option>
									<option>Financial</option>
									<option>Marketplace</option>
									<option>Travel</option>
									<option>E-commerce</option>
									<option>Cloud Computing</option>
								</select>
							</div>
							<div class="col-12">
								<label for="dealFormStage" class="form-label">Deal Stage</label>
								<select class="form-select" aria-label="Default select example" id="dealFormStage">
									<option>Select</option>
									<option>New</option>
									<option>In Progress</option>
									<option>Pending</option>
									<option>Canceled</option>
									<option>Completed</option>
								</select>
							</div>
							<div class="col-lg-6 col-12">
								<label for="dealFormOwner" class="form-label">Deal Owner</label>
								<select class="form-select" aria-label="Default select example" id="dealFormOwner">
									<option>Select</option>
									<option>Ally Aagaard</option>
									<option>Aida Moen</option>
									<option>Niko Koss</option>
									<option>Alec Haag</option>
									<option>Lonnie Kub</option>
									<option>Ola Smith</option>
								</select>
							</div>
							<div class="col-lg-6 col-12">
								<label for="dealFormContact" class="form-label">Contact Person</label>
								<select class="form-select" aria-label="Default select example" id="dealFormContact">
									<option selected>Select</option>
									<option>Niko Koss</option>
									<option>Aida Moen</option>
									<option>Ally Aagaard</option>
									<option>Alec Haag</option>
									<option>Lonnie Kub</option>
								</select>
							</div>
							<div class="col-lg-6 col-12">
								<div>
									<label for="dealFormPhone" class="form-label">Phone Number</label>
									<input type="text" class="form-control" id="dealFormPhone" name="dealFormPhone" placeholder="Phone" required />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div>
									<label for="dealFormEmail" class="form-label">Email Address</label>
									<input type="email" class="form-control" id="dealFormEmail" name="dealFormEmail" placeholder="Email Address" required />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div>
									<label for="dealFormCreat" class="form-label">Create Date</label>
									<input class="form-control flatpickr" type="text" placeholder="dd/mm/yyyy" name="dealFormCreat" id="dealFormCreat" required />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<label for="dealFormTime" class="form-label">Start Time</label>
								<input class="form-control timepickr" type="text" placeholder="dd/mm/yyyy" name="dealFormTime" id="dealFormTime" required />
							</div>
							<div class="col-lg-6 col-12">
								<div>
									<label for="dealFormDate" class="form-label">Closing Date</label>
									<input class="form-control flatpickr" type="text" placeholder="dd/mm/yyyy" name="dealFormDate" id="dealFormDate" required />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<label for="dealFormClosetime" class="form-label">Closing Time</label>
								<input class="form-control timepickr" type="text" placeholder="dd/mm/yyyy" name="dealFormClosetime" id="dealFormClosetime" required />
							</div>
							<div class="col-12">
								<label for="dealFormZone" class="form-label">Time Zone</label>
								<select class="form-select" aria-label="Default select example" id="dealFormZone">
									<option>GMT-12:00 Etc/GMT-12</option>
									<option>GMT-11:00 Etc/GMT-11</option>
									<option>GMT-11:00 Pacific/Midway</option>
									<option>GMT-10:00 America/Adak</option>
									<option>GMT-09:00 America/Anchorage</option>
									<option>GMT-09:00 Pacific/Gambier</option>
									<option>GMT-08:00 America/Dawson_Creek</option>
									<option>GMT-08:00 America/Ensenada</option>
									<option>GMT-08:00 America/Los_Angeles</option>
									<option>GMT-07:00 America/Chihuahua</option>
									<option>GMT-07:00 America/Denver</option>
									<option>GMT-06:00 America/Belize</option>
									<option>GMT-06:00 America/Cancun</option>
									<option>GMT-06:00 America/Chicago</option>
									<option>GMT-06:00 Chile/EasterIsland</option>
									<option>GMT-05:00 America/Bogota</option>
									<option>GMT-05:00 America/Havana</option>
									<option>GMT-05:00 America/New_York</option>
									<option>GMT-04:30 America/Caracas</option>
									<option>GMT-04:00 America/Campo_Grande</option>
									<option>GMT-04:00 America/Glace_Bay</option>
									<option>GMT-04:00 America/Goose_Bay</option>
									<option>GMT-04:00 America/Santiago</option>
									<option>GMT-04:00 America/La_Paz</option>
									<option>GMT-03:00 America/Argentina/Buenos_Aires</option>
									<option>GMT-03:00 America/Montevideo</option>
									<option>GMT-03:00 America/Araguaina</option>
									<option>GMT-03:00 America/Godthab</option>
									<option>GMT-03:00 America/Miquelon</option>
									<option>GMT-03:00 America/Sao_Paulo</option>
									<option>GMT-03:30 America/St_Johns</option>
									<option>GMT-02:00 America/Noronha</option>
									<option>GMT-01:00 Atlantic/Cape_Verde</option>
									<option>GMT Europe/Belfast</option>
									<option>GMT Africa/Abidjan</option>
									<option>GMT Europe/Dublin</option>
									<option>GMT Europe/Lisbon</option>
									<option>GMT Europe/London</option>
									<option>UTC UTC</option>
									<option>GMT+01:00 Africa/Algiers</option>
									<option>GMT+01:00 Africa/Windhoek</option>
									<option>GMT+01:00 Atlantic/Azores</option>
									<option>GMT+01:00 Atlantic/Stanley</option>
									<option>GMT+01:00 Europe/Amsterdam</option>
									<option>GMT+01:00 Europe/Belgrade</option>
									<option>GMT+01:00 Europe/Brussels</option>
									<option>GMT+02:00 Africa/Cairo</option>
									<option>GMT+02:00 Africa/Blantyre</option>
									<option>GMT+02:00 Asia/Beirut</option>
									<option>GMT+02:00 Asia/Damascus</option>
									<option>GMT+02:00 Asia/Gaza</option>
									<option>GMT+02:00 Asia/Jerusalem</option>
									<option>GMT+03:00 Africa/Addis_Ababa</option>
									<option>GMT+03:00 Asia/Riyadh89</option>
									<option>GMT+03:00 Europe/Minsk</option>
									<option>GMT+03:30 Asia/Tehran</option>
									<option>GMT+04:00 Asia/Dubai</option>
									<option>GMT+04:00 Asia/Yerevan</option>
									<option>GMT+04:00 Europe/Moscow</option>
									<option>GMT+04:30 Asia/Kabul</option>
									<option>GMT+05:00 Asia/Tashkent</option>
									<option>GMT+05:30 Asia/Kolkata</option>
									<option>GMT+05:45 Asia/Katmandu</option>
									<option>GMT+06:00 Asia/Dhaka</option>
									<option>GMT+06:00 Asia/Yekaterinburg</option>
									<option>GMT+06:30 Asia/Rangoon</option>
									<option>GMT+07:00 Asia/Bangkok</option>
									<option>GMT+07:00 Asia/Novosibirsk</option>
									<option>GMT+08:00 Etc/GMT+8</option>
									<option>GMT+08:00 Asia/Hong_Kong</option>
									<option>GMT+08:00 Asia/Krasnoyarsk</option>
									<option>GMT+08:00 Australia/Perth</option>
									<option>GMT+08:45 Australia/Eucla</option>
									<option>GMT+09:00 Asia/Irkutsk</option>
									<option>GMT+09:00 Asia/Seoul</option>
									<option>GMT+09:00 Asia/Tokyo</option>
									<option>GMT+09:30 Australia/Adelaide</option>
									<option>GMT+09:30 Australia/Darwin</option>
									<option>GMT+09:30 Pacific/Marquesas</option>
									<option>GMT+10:00 Etc/GMT+10</option>
									<option>GMT+10:00 Australia/Brisbane</option>
									<option>GMT+10:00 Australia/Hobart</option>
									<option>GMT+10:00 Asia/Yakutsk</option>
									<option>GMT+10:30 Australia/Lord_Howe</option>
									<option>GMT+11:00 Asia/Vladivostok</option>
									<option>GMT+11:30 Pacific/Norfolk</option>
									<option>GMT+12:00 Etc/GMT+12</option>
									<option>GMT+12:00 Asia/Anadyr</option>
									<option>GMT+12:00 Asia/Magadan</option>
									<option>GMT+12:00 Pacific/Auckland</option>
									<option>GMT+12:45 Pacific/Chatham</option>
									<option>GMT+13:00 Pacific/Tongatapu</option>
									<option>GMT+14:00 Pacific/Kiritimati</option>
								</select>
							</div>
							<div class="col-lg-6 col-12">
								<label for="dealFormSource" class="form-label">Lead Source</label>
								<select class="form-select" aria-label="Default select example" id="dealFormSource">
									<option>Select</option>
									<option>Referrals</option>
									<option>Former Clients</option>
									<option>Competitors</option>
									<option>Business & sales</option>
									<option>Google resources</option>
									<option>Linkedin</option>
									<option>Marketing</option>
								</select>
							</div>
							<div class="col-lg-6 col-12">
								<label for="dealFormCampiaing" class="form-label">Campaign Source</label>
								<select class="form-select" aria-label="Default select example" id="dealFormCampiaing">
									<option>Select</option>
									<option>Online Campaign</option>
									<option>Offline Campaign</option>
								</select>
							</div>

							<div class="col-lg-6 col-12">
								<div>
									<label for="exampleFormProfitability" class="form-label">Profitability %</label>
									<input type="text" class="form-control" id="exampleFormProfitability" placeholder="Enter code" />
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="row gx-2">
									<label for="dealFormRevenue" class="form-label">Expected Revenue</label>
									<div class="col-lg-9 col-md-6 col-12">
										<input type="number" class="form-control" id="dealFormRevenue" name="dealFormRevenue" placeholder="Enter Amount" required />
									</div>
									<div class="col-lg-3 col-md-6 col-12">
										<label for="dealFormExpected" class="form-label visually-hidden">USD</label>
										<select class="form-select" aria-label="Default select example" id="dealFormExpected">
											<option>USD</option>
											<option>GBP</option>
											<option>EUR</option>
											<option>JPY</option>
											<option>CAD</option>
											<option>AUD</option>
											<option>CNY</option>
											<option>CHF</option>
											<option>ZAR</option>
											<option>BRL</option>
											<option>RUB</option>
											<option>INR</option>
											<option>MXN</option>
											<option>NZD</option>
											<option>SGD</option>
											<option>HKD</option>
											<option>KRW</option>
											<option>SEK</option>
											<option>NOK</option>
											<option>TRY</option>
										</select>
									</div>
								</div>
							</div>
							<div class="">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
								<button class="btn btn-primary" type="submit">Create Deal</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- Scripts -->
		<!-- flatpickr -->
		<script src="@@webRoot/node_modules/flatpickr/dist/flatpickr.min.js"></script>
		@@include("../partials/scripts.html")

		<!-- popper js -->
		<script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>

		<!-- tippy js -->
		<script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
		<script src="@@webRoot/assets/js/vendors/tooltip.js"></script>

		<!-- Listjs required js scripts -->
	</body>
</html>
