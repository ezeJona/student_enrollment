<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <!-- tns slider -->
  <link href="@@webRoot/node_modules/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
  <title>Product Details | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>
</head>

<body>
  <!-- Wrapper -->
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")

    <!-- navbar vertical -->
    @@include('../partials/navbar-vertical.html', { "page": "e-productDetail",
    "page_group": "ecommerce" })

    <!-- Page Content -->

      <div id="app-content">
      <!-- Container fluid -->
      <div class="app-content-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="mb-5">
                <h3 class="mb-0 ">Products Details</h3>
              </div>
            </div>
          </div>
          <div>
            <!-- row -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <!-- card body -->
                  <div class="card-body p-5">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="product" id="product">
                          <div>
                            <div>
                              <!-- img -->
                              <img src="../assets/images/ecommerce/product-1.jpg" alt="" class="img-fluid">
                            </div>

                          </div>
                          <div>
                            <div>
                              <!-- img -->
                              <img src="../assets/images/ecommerce/product-2.jpg" alt="" class="img-fluid">
                            </div>

                          </div>
                          <div>
                            <div>
                              <!-- img -->
                              <img src="../assets/images/ecommerce/product-3.jpg" alt="Image" class="img-fluid">
                            </div>

                          </div>
                          <div>
                            <div>
                              <!-- img -->
                              <img src="../assets/images/ecommerce/product-4.jpg" alt="Image" class="img-fluid">
                            </div>

                          </div>

                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                          <div class="thumbnails row g-3" id="product-thumbnails">
                            <div class="col-3">
                              <div class="thumbnails-img">
                                <!-- img -->
                                <img src="../assets/images/ecommerce/product-1.jpg" alt="Image">
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="thumbnails-img">
                                <!-- img -->
                                <img src="../assets/images/ecommerce/product-2.jpg" alt="Image">
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="thumbnails-img">
                                <!-- img -->
                                <img src="../assets/images/ecommerce/product-3.jpg" alt="Image">
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="thumbnails-img">
                                <!-- img -->
                                <img src="../assets/images/ecommerce/product-4.jpg" alt="Image">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6 col-12">
                        <div class="my-5 mx-xl-10">
                          <div>
                            <!-- heading -->
                            <h1>Product Title Name</h1>
                            <div>
                              <!-- review -->
                              <span><span class="me-2 text-dark ">4.4<i class="mdi mdi-star text-success "></i>
                                </span>592 Customer Reviews</span>
                            </div>
                          </div>
                          <hr class="my-3">
                          <div class="mb-5">
                            <!-- heading -->
                            <h4 class="mb-1">$49.00 <span class="text-muted text-decoration-line-through">$ 69.00</span>
                              <span class="text-warning">(45% OFF)</span></h4>
                            <span>inclusive of all taxes</span>
                          </div>
                          <div class="mb-4 d-md-flex justify-content-between align-items-center">
                            <h4 class="mb-2 mb-md-0">Color</h4>
                            <div>
                              <!-- btn group -->
                              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradioPrimary" checked>
                                <!-- form check radio -->
                                <label
                                  class="btn btn-primary rounded-circle me-2 btn-icon btn-sm border border-2 border-white shadow"
                                  for="btnradioPrimary"><i class=" icon-checked icon-xs"
                                    data-feather="check"></i></label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradioSuccess">
                                <label
                                  class="btn btn-success rounded-circle me-2 btn-icon btn-sm border border-2 border-white shadow"
                                  for="btnradioSuccess"><i class=" icon-checked icon-xs"
                                    data-feather="check"></i></label>
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradioDanger">
                                <label
                                  class="btn btn-danger rounded-circle me-2 btn-icon btn-sm border border-2 border-white shadow"
                                  for="btnradioDanger"><i class=" icon-checked icon-xs"
                                    data-feather="check"></i></label>
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradioInfo">
                                <label
                                  class="btn btn-info rounded-circle me-2 btn-icon btn-sm border border-2 border-white shadow"
                                  for="btnradioInfo"><i class=" icon-checked icon-xs" data-feather="check"></i></label>
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradioWarning">
                                <label
                                  class="btn btn-warning rounded-circle me-2 btn-icon btn-sm border border-2 border-white shadow"
                                  for="btnradioWarning"><i class=" icon-checked icon-xs"
                                    data-feather="check"></i></label>
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradioDark">
                                <label
                                  class="btn btn-dark rounded-circle me-2 btn-icon btn-sm border border-2 border-white shadow"
                                  for="btnradioDark"><i class=" icon-checked icon-xs" data-feather="check"></i></label>

                              </div>

                            </div>
                          </div>
                          <div class="mb-6 d-md-flex justify-content-between align-items-center">
                            <!-- heading -->
                            <h4 class="mb-2 mb-md-0">Select Size</h4>
                            <div>
                              <!-- button group -->
                              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" checked>
                                <label
                                  class="btn btn-outline-light border rounded-circle me-2 text-muted btn-icon btn-md"
                                  for="btnradio6">6</label>
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio7">
                                <label
                                  class="btn btn-outline-light border rounded-circle me-2 text-muted btn-icon btn-md"
                                  for="btnradio7">7</label>
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio8">
                                <label
                                  class="btn btn-outline-light border rounded-circle me-2 text-muted btn-icon btn-md"
                                  for="btnradio8">8</label>
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio9">
                                <label
                                  class="btn btn-outline-light border rounded-circle me-2 text-muted btn-icon btn-md"
                                  for="btnradio9">9</label>
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio10">
                                <label
                                  class="btn btn-outline-light border rounded-circle me-2 text-muted btn-icon btn-md"
                                  for="btnradio10">10</label>
                                <!-- form check radio -->
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio11">
                                <label
                                  class="btn btn-outline-light border rounded-circle me-2 text-muted btn-icon btn-md"
                                  for="btnradio11">11</label>
                              </div>
                            </div>
                          </div>
                          <!-- row -->
                          <div class="row">
                            <!-- col -->
                            <div class="col-md-6">
                              <div class="d-grid mb-2 mb-md-0">
                                <!-- btn -->
                                <a href="#!" class="btn btn-danger"><i class="fe fe-shopping-cart me-2"></i>Add To
                                  Cart</a>
                              </div>
                            </div>
                            <!-- col -->
                            <div class="col-md-6">
                              <div class="d-grid">
                                <!-- btn -->
                                <a href="#!" class="btn btn-outline-secondary"><i
                                    class="fe fe-heart me-2"></i>Wishlist</a>
                              </div>
                            </div>
                          </div>
                          <hr class="mt-4 mb-2">
                          <div class=" mb-4" id="ecommerceAccordion">
                            <!-- List group -->

                            <ul class="list-group list-group-flush">

                              <!-- List group item -->
                              <li class="list-group-item px-0">
                                <!-- Toggle -->
                                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0"
                                  data-bs-toggle="collapse" href="#productDetails" role="button" aria-expanded="false"
                                  aria-controls="productDetails">
                                  <div class="me-auto">
                                    Product Details
                                  </div>
                                  <!-- Chevron -->
                                  <span class="chevron-arrow  ms-4">
                                    <i data-feather="chevron-down" class="icon-xs"></i>
                                  </span>
                                </a>
                                <!-- Row -->
                                <!-- Collapse -->
                                <div class="collapse show" id="productDetails" data-bs-parent="#ecommerceAccordion">
                                  <div class="py-3 ">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi magna,
                                      rhoncus in diam vel, aliquet volutpat nisl. Proin nisl dolor, sagittis vitae
                                      pulvinar eu, pharetra ultrices felis. </p>

                                    <!-- heading -->
                                    <h4>Features:</h4>
                                    <!-- list -->
                                    <ul>
                                      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                      </li>
                                      <li> Integer ut justo quis diam finibus lobortis vel at dui.
                                      </li>
                                      <li> Morbi ultricies leo sit amet nisl suscipit, et vulputate orci fringilla.
                                      </li>
                                      <li> Nullam sit amet lacus ut nibh pharetra rutrum venenatis ac purus.
                                      </li>
                                      <li> Sed ut arcu dapibus, viverra ex vitae, fermentum libero.
                                      </li>
                                      <li> Fusce eget mauris in elit ultricies vehicula.
                                      </li>
                                      <li> Vivamus tincidunt ligula id sollicitudin finibus.
                                      </li>
                                      <li>Nullam facilisis enim viverra nulla malesuada consequat.
                                      </li>
                                      <li>
                                        Nullam feugiat turpis ullamcorper augue fringilla, at facilisis magna dignissim.
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </li>
                              <!-- List group item -->
                              <li class="list-group-item px-0">
                                <!-- Toggle -->
                                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0"
                                  data-bs-toggle="collapse" href="#specifications" role="button" aria-expanded="false"
                                  aria-controls="specifications">
                                  <div class="me-auto">
                                    Specifications
                                  </div>
                                  <!-- Chevron -->
                                  <span class="chevron-arrow  ms-4">
                                    <i data-feather="chevron-down" class="icon-xs"></i>
                                  </span>
                                </a>
                                <!-- Row -->
                                <!-- Collapse -->
                                <div class="collapse " id="specifications" data-bs-parent="#ecommerceAccordion">
                                  <div class="py-3 ">
                                    <table class="table table-striped">
                                      <tbody>
                                        <tr>

                                          <th class="w-20">Sport</th>
                                          <td>Running</td>

                                        </tr>
                                        <tr>

                                          <th class="w-20">Material</th>
                                          <td>Mesh</td>

                                        </tr>
                                        <tr>

                                          <th class="w-20">Fastening</th>
                                          <td>Lace-Ups </td>

                                        </tr>
                                        <tr>

                                          <th class="w-20">Outsole Type</th>
                                          <td>Marking </td>

                                        </tr>
                                        <tr>

                                          <th class="w-20">Warranty</th>
                                          <td>3 months </td>

                                        </tr>

                                      </tbody>
                                    </table>


                                  </div>
                                </div>
                              </li>
                              <li class="list-group-item px-0">
                                <!-- Toggle -->
                                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0"
                                  data-bs-toggle="collapse" href="#freeShippingPolicy" role="button"
                                  aria-expanded="false" aria-controls="freeShippingPolicy">
                                  <div class="me-auto">
                                    Free Shipping Policy
                                  </div>
                                  <!-- Chevron -->
                                  <span class="chevron-arrow  ms-4">
                                    <i data-feather="chevron-down" class="icon-xs"></i>
                                  </span>
                                </a>
                                <!-- Row -->
                                <!-- Collapse -->
                                <div class="collapse " id="freeShippingPolicy" data-bs-parent="#ecommerceAccordion">
                                  <div class="py-3 ">
                                    <p class="mb-0">The single most important criteria for a lot of first time
                                      customers. Lorem
                                      ipsum dolor sit amet consectetur adipiscing elit enean nisi magna rhoncus in
                                      diam vel, aliquet volutpat nisl.</p>

                                  </div>
                                </div>
                              </li>
                              <li class="list-group-item px-0 border-bottom">
                                <!-- Toggle -->
                                <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0"
                                  data-bs-toggle="collapse" href="#refundPolicy" role="button" aria-expanded="false"
                                  aria-controls="refundPolicy">
                                  <div class="me-auto">
                                    Refund Policy
                                  </div>
                                  <!-- Chevron -->
                                  <span class="chevron-arrow  ms-4">
                                    <i data-feather="chevron-down" class="icon-xs"></i>
                                  </span>
                                </a>
                                <!-- Row -->
                                <!-- Collapse -->
                                <div class="collapse " id="refundPolicy" data-bs-parent="#ecommerceAccordion">
                                  <div class="py-3 ">
                                    <p class="mb-0">A Return & Refund Policy is a policy that dictates under what
                                      conditions
                                      customers can return products they've purchased from your eCommerce
                                      store and whether you'll reimburse them or not.</p>

                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div class="mb-4">
                            <h3 class="mb-4">Ratings & Reviews</h3>
                            <div class="row align-items-center mb-4">
                              <div class="col-md-4 mb-4 mb-md-0">
                                <!-- rating -->
                                <h3 class="display-2 ">4.5</h3>
                                <i class="bi bi-star-fill text-success"></i>
                                <i class="bi bi-star-fill text-success"></i>
                                <i class="bi bi-star-fill text-success"></i>
                                <i class="bi bi-star-fill text-success"></i>
                                <i class="bi bi-star-fill text-success"></i>
                                <p class="mb-0">595 Verified Buyers</p>
                              </div>
                              <div class="offset-lg-1 col-lg-7 col-md-8">
                                <!-- progress -->
                                <div class="d-flex align-items-center mb-2">
                                  <div class="text-nowrap me-3 text-muted"><span
                                      class="d-inline-block align-middle text-muted">5</span><i
                                      class="bi bi-star-fill ms-1 fs-6"></i></div>
                                  <div class="w-100">
                                    <div class="progress" style="height: 6px;">
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 60%;"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div><span class="text-muted ms-3">420</span>
                                </div>
                                <!-- progress -->
                                <div class="d-flex align-items-center mb-2">
                                  <div class="text-nowrap me-3 text-muted"><span
                                      class="d-inline-block align-middle text-muted">4</span><i
                                      class="bi bi-star-fill ms-1 fs-6"></i></div>
                                  <div class="w-100">
                                    <div class="progress" style="height: 6px;">
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                                    </div>
                                  </div><span class="text-muted ms-3">90</span>
                                </div>
                                <!-- progress -->
                                <div class="d-flex align-items-center mb-2">
                                  <div class="text-nowrap me-3 text-muted"><span
                                      class="d-inline-block align-middle text-muted">3</span><i
                                      class="bi bi-star-fill ms-1 fs-6"></i></div>
                                  <div class="w-100">
                                    <div class="progress" style="height: 6px;">
                                      <div class="progress-bar bg-success" role="progressbar" style="width: 35%;"
                                        aria-valuenow="35" aria-valuemin="0" aria-valuemax="35"></div>
                                    </div>
                                  </div><span class="text-muted ms-3">33</span>
                                </div>
                                <!-- progress -->
                                <div class="d-flex align-items-center mb-2">
                                  <div class="text-nowrap me-3 text-muted"><span
                                      class="d-inline-block align-middle text-muted">2</span><i
                                      class="bi bi-star-fill ms-1 fs-6"></i></div>
                                  <div class="w-100">
                                    <div class="progress" style="height: 6px;">
                                      <div class="progress-bar bg-warning" role="progressbar" style="width: 22%;"
                                        aria-valuenow="22" aria-valuemin="0" aria-valuemax="22"></div>
                                    </div>
                                  </div><span class="text-muted ms-3">12</span>
                                </div>
                                <!-- progress -->
                                <div class="d-flex align-items-center mb-2">
                                  <div class="text-nowrap me-3 text-muted"><span
                                      class="d-inline-block align-middle text-muted">1</span><i
                                      class="bi bi-star-fill ms-1 fs-6"></i></div>
                                  <div class="w-100">
                                    <div class="progress" style="height: 6px;">
                                      <div class="progress-bar bg-danger" role="progressbar" style="width: 14%;"
                                        aria-valuenow="14" aria-valuemin="0" aria-valuemax="14"></div>
                                    </div>
                                  </div><span class="text-muted ms-3">40</span>
                                </div>

                              </div>
                            </div>
                            <div>
                              <!-- review -->
                              <div class="border-top py-4 mt-4">
                                <div class="border d-inline-block px-2 py-1 rounded-pill mb-3">
                                  <!-- rating -->
                                  <span class="text-dark  ">4.4 <i class="bi bi-star-fill text-success fs-6"></i></span>
                                </div>
                                <!-- text -->
                                <p>It's awesome , I never thought about Dash UI that awesome shoes.very pretty.</p>
                                <div>
                                  <span>James Ennis</span>
                                  <span class="ms-4">28 Nov 2023</span>
                                </div>
                              </div>
                              <div class="border-top py-4">
                                <div class="border d-inline-block px-2 py-1 rounded-pill mb-3">
                                  <!-- rating -->
                                  <span class="text-dark  ">5.0 <i class="bi bi-star-fill text-success fs-6"></i></span>
                                </div>
                                <!-- text -->
                                <p>Quality is more than good that I was expected for buying. I first time
                                  purchase Dash UI shoes & this brand is good. Thanks to Dash UI delivery
                                  was faster than fast ...Love Dash UI</p>
                                <div>
                                  <span>Bradley Mouton</span>
                                  <span class="ms-4">21 Apr 2023
                                  </span>
                                </div>
                              </div>
                              <div class="border-top py-4 border-bottom">

                                <div class="border d-inline-block px-2 py-1 rounded-pill mb-3">
                                  <!-- rating -->
                                  <span class="text-dark  ">4.4 <i class="bi bi-star-fill text-success fs-6"></i></span>
                                </div>
                                <!-- text -->
                                <p>Excellent shoes with original logo , Thanks Dash UI , Buy these shoes
                                  without any tension</p>
                                <div class="mb-5">
                                  <!-- img -->
                                  <img src="../assets/images/ecommerce/product-1.jpg" alt="Image"
                                    class="avatar-md rounded-2">
                                  <img src="../assets/images/ecommerce/product-2.jpg" alt="Image"
                                    class="avatar-md rounded-2">
                                  <img src="../assets/images/ecommerce/product-3.jpg" alt="Image"
                                    class="avatar-md rounded-2">
                                </div>
                                <div>
                                  <!-- text -->
                                  <span>Kieth J. Watson </span>
                                  <span class="ms-4">21 May 2023</span>
                                </div>
                              </div>
                              <div class="my-3">
                                <!-- btn-link -->
                                <a href="#!" class="btn-link fw-semi-bold ">View all 89 reviews</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
  <div class="modal fade" id="addNewContactModal" tabindex="-1" aria-labelledby="addNewContactModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addNewContactModalLabel">
            Add New Contact
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>
            <div class="d-flex align-items-center">
              <img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-lg rounded-circle">
              <div class="ms-3">
                <a href="javascript:void(0);" class="btn btn-outline-white">Upload Photo</a>
              </div>
            </div>
            <div class="mt-5">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="fname">Name</label>
                  <input type="text" class="form-control" placeholder="Enter Name" id="fname">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" class="form-control" placeholder="Enter Email" id="email">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="phone">Phone Number</label>
                  <input type="text" class="form-control" placeholder="Enter Phone" id="phone">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="companyName">Company</label>
                  <input type="text" class="form-control" placeholder="Enter Company Name" id="companyName">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="designation">Designation</label>
                  <input type="text" class="form-control" placeholder="Enter Designation" id="designation">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="status">Lead Status</label>
                  <input type="text" class="form-control" placeholder="Status" id="status">
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
  <!-- tns slider -->
  <script src="@@webRoot/node_modules/tiny-slider/dist/min/tiny-slider.js"></script>
  @@include("../partials/scripts.html")



</body>

</html>