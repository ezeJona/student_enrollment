<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Seller | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', {
    "page": "seller",
    "page_group": "ecommerce"
    })

    <!-- page content -->

     <div id="app-content">
      <!-- Container fluid -->
      <div class="app-content-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="mb-5">
                <h3 class="mb-0 ">Seller</h3>

              </div>
            </div>
          </div>
          <div>
            <!-- row -->

            <div class="row justify-content-between mb-4">
              <div class=" col-xxl-4 col-md-12">
                <input type="search" class="form-control " placeholder="Search for seller and ownwer name...">

              </div>
              <div class="col-xxl-8 col-md-12 d-flex justify-content-xxl-end text-xxl-end mt-4 mt-xxl-0">
                <div class="me-2 col-5 col-xxl-2">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Status</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <a href="#!" class="btn btn-secondary me-2">Filter</a>
                <a href="#!" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">Add
                  Seller</a>
              </div>





            </div>
            <div class="row">
              <div class="col-xxl-3 col-lg-6 mb-4">
                <div class="card">
                  <div class="card-body text-center  ">
                    <div class="my-4">
                      <div class="mb-5">
                        <img src="../assets/images/svg/sellerlogo-1.svg" alt="Image">

                      </div>
                      <h4 class="mb-0">True Line Store</h4>
                      <span>Adam Pyles</span>
                    </div>

                    <div id="storeOne" class="px-8"></div>
                    <div class="mt-6 row ">
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">345</h3>
                          <span>Products</span>
                        </div>

                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">$45,129</h3>
                          <span>Wallet Balance</span>
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="card-footer text-end">
                    <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                        data-feather="arrow-right"></i></a>
                  </div>

                </div>

              </div>
              <div class="col-xxl-3 col-lg-6 mb-4">
                <div class="card">
                  <div class="card-body text-center  ">
                    <div class="my-4 ">
                      <div class="mb-5">
                        <img src="../assets/images/svg/sellerlogo-2.svg" alt="Image">
                      </div>
                      <h4 class="mb-0">Nykaa Fashion</h4>
                      <span>Brian Raines</span>
                    </div>

                    <div id="storeTwo" class="px-8"></div>
                    <div class="mt-6 row ">
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">1234</h3>
                          <span>Products</span>
                        </div>

                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">$1,45,129</h3>
                          <span>Wallet Balance</span>
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="card-footer text-end">
                    <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                        data-feather="arrow-right"></i></a>
                  </div>

                </div>

              </div>
              <div class="col-xxl-3 col-lg-6 mb-4">
                <div class="card">
                  <div class="card-body text-center  ">
                    <div class="my-4 ">
                      <div class="mb-5">
                        <img src="../assets/images/svg/sellerlogo-3.svg" alt="Image">
                      </div>
                      <h4 class="mb-0">Beverly Maclean</h4>
                      <span>Brian Raines</span>
                    </div>

                    <div id="storeThree" class="px-8"></div>
                    <div class="mt-6 row ">
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">456</h3>
                          <span>Products</span>
                        </div>

                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">$53,269</h3>
                          <span>Wallet Balance</span>
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="card-footer text-end">
                    <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                        data-feather="arrow-right"></i></a>
                  </div>

                </div>

              </div>
              <div class="col-xxl-3 col-lg-6 mb-4">
                <div class="card">
                  <div class="card-body text-center  ">
                    <div class="my-4 ">
                      <div class="mb-5">
                        <img src="../assets/images/svg/sellerlogo-4.svg" alt="Image">
                      </div>
                      <h4 class="mb-0">Nine Digital Store</h4>
                      <span>Adam Pyles</span>
                    </div>

                    <div id="storeFour" class="px-8"></div>
                    <div class="mt-6 row ">
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">242</h3>
                          <span>Products</span>
                        </div>

                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">$63,789</h3>
                          <span>Wallet Balance</span>
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="card-footer text-end">
                    <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                        data-feather="arrow-right"></i></a>
                  </div>

                </div>

              </div>
              <div class="col-xxl-3 col-lg-6 mb-4">
                <div class="card">
                  <div class="card-body text-center  ">
                    <div class="my-4 ">
                      <div class="mb-5">
                        <img src="../assets/images/svg/sellerlogo-5.svg" alt="Image">
                      </div>
                      <h4 class="mb-0">Titan Jewellery</h4>
                      <span>Brian Raines</span>
                    </div>

                    <div id="storeFive" class="px-8"></div>
                    <div class="mt-6 row ">
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">636</h3>
                          <span>Products</span>
                        </div>

                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">$13,976</h3>
                          <span>Wallet Balance</span>
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="card-footer text-end">
                    <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                        data-feather="arrow-right"></i></a>
                  </div>

                </div>

              </div>
              <div class="col-xxl-3 col-lg-6 mb-4">
                <div class="card">
                  <div class="card-body text-center  ">
                    <div class="my-4 ">
                      <div class="mb-5">
                        <img src="../assets/images/svg/sellerlogo-6.svg" alt="Image">
                      </div>
                      <h4 class="mb-0">HalfRound Store</h4>
                      <span>Beverly Maclean</span>
                    </div>

                    <div id="storeSix" class="px-8"></div>
                    <div class="mt-6 row ">
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">456</h3>
                          <span>Products</span>
                        </div>

                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">$13,976</h3>
                          <span>Wallet Balance</span>
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="card-footer text-end">
                    <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                        data-feather="arrow-right"></i></a>
                  </div>

                </div>

              </div>
              <div class="col-xxl-3 col-lg-6 mb-4">
                <div class="card">
                  <div class="card-body text-center  ">
                    <div class="my-4 ">
                      <div class="mb-5">
                        <img src="../assets/images/svg/sellerlogo-2.svg" alt="Image">
                      </div>
                      <h4 class="mb-0">True Line Store</h4>
                      <span>Beverly Maclean</span>
                    </div>

                    <div id="storeSeven" class="px-8"></div>
                    <div class="mt-6 row ">
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">283</h3>
                          <span>Products</span>
                        </div>

                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">$10,976</h3>
                          <span>Wallet Balance</span>
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="card-footer text-end">
                    <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                        data-feather="arrow-right"></i></a>
                  </div>

                </div>

              </div>
              <div class="col-xxl-3 col-lg-6 mb-4">
                <div class="card">
                  <div class="card-body text-center  ">
                    <div class="my-4 ">
                      <div class="mb-5">
                        <img src="../assets/images/svg/sellerlogo-1.svg" alt="Image">
                      </div>
                      <h4 class="mb-0">Nykaa Fashion</h4>
                      <span>Brian Raines</span>
                    </div>

                    <div id="storeEight" class="px-8"></div>
                    <div class="mt-6 row ">
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">560</h3>
                          <span>Products</span>
                        </div>

                      </div>
                      <div class="vr g-0"></div>
                      <div class="col">
                        <div>
                          <h3 class="mb-0 ">$12,300</h3>
                          <span>Wallet Balance</span>
                        </div>

                      </div>

                    </div>

                  </div>
                  <div class="card-footer text-end">
                    <a href="#!" class="btn btn-primary-soft">View Details<i class="ms-1 icon-xs"
                        data-feather="arrow-right"></i></a>
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

  @@include("../partials/scripts.html")



</body>

</html>