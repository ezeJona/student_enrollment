<!DOCTYPE html>
<html lang="en">
	<head>
		@@include("../partials/head.html")
		<link href="@@webRoot/node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
		<title>Product List | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>
	</head>

	<body>
		<!-- Wrapper -->
		<main id="main-wrapper" class="main-wrapper">
			@@include("../partials/header.html")
			<!-- navbar vertical -->
			@@include('../partials/navbar-vertical.html', { "page": "e-productList", "page_group": "ecommerce" })

			<!-- Page Content -->

			<div id="app-content">
				<!-- Container fluid -->
				<div class="app-content-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-12">
								<!-- Page header -->
								<div class="mb-5">
									<h3 class="mb-0">Products</h3>
								</div>
							</div>
						</div>
						<div>
							<!-- row -->
							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-header d-md-flex border-bottom-0">
											<div class="flex-grow-1">
												<a href="#!" class="btn btn-primary">+ Add Product</a>
											</div>
											<div class="mt-3 mt-md-0">
												<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="settingOne">
													<i data-feather="settings" class="icon-xs"></i>
													<div id="settingOne" class="d-none">
														<span>Setting</span>
													</div>
												</a>

												<a href="#!" class="btn btn-outline-white ms-2">Import</a>
												<a href="#!" class="btn btn-outline-white ms-2">Export</a>
											</div>
										</div>
										<div class="card-body">
											<div class="table-responsive table-card">
												<table id="example" class="table text-nowrap table-centered mt-0" style="width: 100%">
													<thead class="table-light">
														<tr>
															<th class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="checkAll" />
																	<label class="form-check-label" for="checkAll"></label>
																</div>
															</th>
															<th class="ps-1">Product</th>
															<th>Category</th>
															<th>Added Date</th>
															<th>Price</th>
															<th>Quantity</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox2" />
																	<label class="form-check-label" for="contactCheckbox2"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-1.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Women Shoes</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Accessories</td>
															<td>19 July, 2023</td>
															<td>$65.29</td>
															<td>235</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeOne">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeOne" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editOne">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editOne" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashOne">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashOne" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox3" />
																	<label class="form-check-label" for="contactCheckbox3"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-2.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Black Round Sunglasses</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Bags</td>
															<td>19 July, 2023</td>
															<td>$15.99</td>
															<td>56</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeTwo">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeTwo" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="edit">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="edit" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashTwo">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashTwo" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox4" />
																	<label class="form-check-label" for="contactCheckbox4"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-8.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Black Round Sunglasses</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Men's Fashion</td>
															<td>19 July, 2023</td>
															<td>$12.39</td>
															<td>67</td>
															<td>
																<span class="badge badge-danger-soft">Deactive</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeThree">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeThree" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editTwo">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editTwo" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashThree">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashThree" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox5" />
																	<label class="form-check-label" for="contactCheckbox5"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-9.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Dimond Earning</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Women's Fashion</td>
															<td>18 July, 2023</td>
															<td>$35.99</td>
															<td>24</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeFour">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeFour" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editThree">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editThree" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashFour">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashFour" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox6" />
																	<label class="form-check-label" for="contactCheckbox6"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-3.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Shoulder Bag</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Accessories</td>
															<td>17 July, 2023</td>
															<td>$65.29</td>
															<td>32</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeFive">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeFive" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editFour">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editFour" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashFive">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashFive" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox16" />
																	<label class="form-check-label" for="contactCheckbox16"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-4.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Vinage Perfume</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Bags</td>
															<td>20 July, 2023</td>
															<td>$45.29</td>
															<td>45</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeSix">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeSix" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editFive">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editFive" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashSix">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashSix" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox7" />
																	<label class="form-check-label" for="contactCheckbox7"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-5.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Apple airpods</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Men's Fashion</td>
															<td>20 July, 2023</td>
															<td>$65.29</td>
															<td>45</td>
															<td>
																<span class="badge badge-danger-soft">Deactive</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeSeven">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeSeven" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editSix">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editSix" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashSeven">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashSeven" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox8" />
																	<label class="form-check-label" for="contactCheckbox8"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-6.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Sandy Perfume</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Women's Fashion</td>
															<td>18 July, 2023</td>
															<td>$35.29</td>
															<td>34</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeNine">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeNine" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editSeven">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editSeven" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashEight">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashEight" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox9" />
																	<label class="form-check-label" for="contactCheckbox9"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-7.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Man Wallet</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Bags</td>
															<td>19 July, 2023</td>
															<td>$15.99</td>
															<td>56</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeEleven">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeEleven" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editEight">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editEight" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashNine">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashNine" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox10" />
																	<label class="form-check-label" for="contactCheckbox10"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-8.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Black Rectangle Sunglasses</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Men's Fashion</td>
															<td>19 July, 2023</td>
															<td>$12.39</td>
															<td>67</td>
															<td>
																<span class="badge badge-danger-soft">Deactive</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeTweleve">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeTweleve" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editNine">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editNine" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashTen">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashTen" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox11" />
																	<label class="form-check-label" for="contactCheckbox11"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-9.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Dimond Earning</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Women's Fashion</td>
															<td>18 July, 2023</td>
															<td>$35.99</td>
															<td>24</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeThirteen">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeThirteen" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editTen">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editTen" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashEleven">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashEleven" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox12" />
																	<label class="form-check-label" for="contactCheckbox12"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-2.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Black Round Sunglasses</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Accessories</td>
															<td>17 July, 2023</td>
															<td>$65.29</td>
															<td>32</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeFourteen">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeFourteen" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editEleven">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editEleven" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashTwelve">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashTwelve" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox13" />
																	<label class="form-check-label" for="contactCheckbox13"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-3.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Shoulder Bag</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Bags</td>
															<td>20 July, 2023</td>
															<td>$45.29</td>
															<td>45</td>
															<td>
																<span class="badge badge-success-soft">Active</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeFifteen">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeFifteen" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editThirteen">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editThirteen" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashThirteen">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashThirteen" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
														</tr>
														<tr>
															<td class="pe-0">
																<div class="form-check">
																	<input class="form-check-input" type="checkbox" value="" id="contactCheckbox14" />
																	<label class="form-check-label" for="contactCheckbox14"></label>
																</div>
															</td>
															<td class="ps-0">
																<div class="d-flex align-items-center">
																	<img src="../assets/images/ecommerce/product-4.jpg" alt="" class="img-4by3-sm rounded-3" />
																	<div class="ms-3">
																		<h5 class="mb-0">
																			<a href="#!" class="text-inherit">Vintage Perfume</a>
																		</h5>
																		<span class="text-warning">
																			<i class="mdi mdi-star"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																			<i class="mdi mdi-star ms-n1"></i>
																		</span>
																	</div>
																</div>
															</td>
															<td>Men's Fashion</td>
															<td>20 July, 2023</td>
															<td>$65.29</td>
															<td>45</td>
															<td>
																<span class="badge badge-danger-soft">Deactive</span>
															</td>
															<td>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="eyeSixteen">
																	<i data-feather="eye" class="icon-xs"></i>
																	<div id="eyeSixteen" class="d-none">
																		<span>View</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="editFourteen">
																	<i data-feather="edit" class="icon-xs"></i>
																	<div id="editFourteen" class="d-none">
																		<span>Edit</span>
																	</div>
																</a>
																<a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="trashFourteen">
																	<i data-feather="trash-2" class="icon-xs"></i>
																	<div id="trashFourteen" class="d-none">
																		<span>Delete</span>
																	</div>
																</a>
															</td>
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
		</main>

		<!-- Modal -->
		<div class="modal fade" id="addNewContactModal" tabindex="-1" aria-labelledby="addNewContactModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="addNewContactModalLabel">Add New Contact</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div>
							<div class="d-flex align-items-center">
								<img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-lg rounded-circle" />
								<div class="ms-3">
									<a href="javascript:void(0);" class="btn btn-outline-white">Upload Photo</a>
								</div>
							</div>
							<div class="mt-5">
								<form>
									<div class="mb-3">
										<label class="form-label" for="fname">Name</label>
										<input type="text" class="form-control" placeholder="Enter Name" id="fname" />
									</div>
									<div class="mb-3">
										<label class="form-label" for="email">Email</label>
										<input type="email" class="form-control" placeholder="Enter Email" id="email" />
									</div>
									<div class="mb-3">
										<label class="form-label" for="phone">Phone Number</label>
										<input type="text" class="form-control" placeholder="Enter Phone" id="phone" />
									</div>
									<div class="mb-3">
										<label class="form-label" for="companyName">Company</label>
										<input type="text" class="form-control" placeholder="Enter Company Name" id="companyName" />
									</div>
									<div class="mb-3">
										<label class="form-label" for="designation">Designation</label>
										<input type="text" class="form-control" placeholder="Enter Designation" id="designation" />
									</div>
									<div class="mb-3">
										<label class="form-label" for="status">Lead Status</label>
										<input type="text" class="form-control" placeholder="Status" id="status" />
									</div>
									<div class="d-flex justify-content-end">
										<a href="#!" class="btn btn-primary">+ Add Customer</a>
										<a href="#!" class="btn btn-light ms-2">Close</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Scripts -->

		@@include("../partials/scripts.html")
		<!-- popper js -->
		<script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
		<!-- tippy js -->
		<script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
		<script src="@@webRoot/assets/js/vendors/tooltip.js"></script>
		<script src="@@webRoot/node_modules/jquery/dist/jquery.min.js"></script>
		<script src="@@webRoot/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="@@webRoot/node_modules/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
		<script src="@@webRoot/node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
		<script src="@@webRoot/assets/js/vendors/datatable.js"></script>
	</body>
</html>
