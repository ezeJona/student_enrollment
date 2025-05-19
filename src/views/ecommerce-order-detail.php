<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Order Details | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">

    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', {
    "page": "e-orderDetail",
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
                <h3 class="mb-0 ">Order Detials</h3>

              </div>
            </div>
          </div>
          <div>
            <!-- row -->
            <div class="row mb-6">
              <div class="col-12">
                <div class="progress-container">
                  <ul class="progress-steps">
                    <li class="active">Order Placed</li>
                    <li>Packed</li>
                    <li>Shipped</li>
                    <li>Delivered</li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-lg-7 col-xxl-9 col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex justify-content-between">
                      <div>
                        <h4 class="mb-1">Order ID: DU00017</h4>
                        <div class="d-flex align-items-center">
                          <small>Order Date: October 03,2023 at 6:31 pm</small> <span
                            class="badge badge-success-soft ms-2">Paid</span>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-primary">Invoice</a>
                      </div>
                    </div>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive table-card">
                      <table class="table text-nowrap mb-0 table-centered">
                        <thead class="table-light">
                          <tr>

                            <th scope="col">Products</th>
                            <th scope="col">Items</th>
                            <th scope="col">Amounts</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>

                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/ecommerce/product-1.jpg" alt="Image"
                                    class="img-4by3-md rounded-3 "></a>
                                <div class="ms-3">
                                  <h5 class="mb-0"> <a href="#!" class="text-inherit">Women Shoes</a></h5>
                                  <small>SKU: 1</small>
                                </div>
                              </div>
                            </td>
                            <td>1</td>
                            <td>$65.29</td>
                          </tr>
                          <tr>

                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/ecommerce/product-2.jpg" alt="Image"
                                    class="img-4by3-md rounded-3 "></a>
                                <div class="ms-3">
                                  <h5 class="mb-0"> <a href="#!" class="text-inherit">Black Round
                                      Sunglasses</a></h5>
                                  <small>SKU: 1</small>
                                </div>
                              </div>
                            </td>
                            <td>1</td>
                            <td>$15.99</td>
                          </tr>
                          <tr>

                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/ecommerce/product-3.jpg" alt="Image"
                                    class="img-4by3-md rounded-3 "></a>
                                <div class="ms-3">
                                  <h5 class="mb-0"> <a href="#!" class="text-inherit">Shoulder Bag</a></h5>
                                  <small>SKU: 1</small>
                                </div>
                              </div>
                            </td>
                            <td>1</td>
                            <td>$65.29</td>
                          </tr>
                          <tr>

                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/ecommerce/product-4.jpg" alt="Image"
                                    class="img-4by3-md rounded-3 "></a>
                                <div class="ms-3">
                                  <h5 class="mb-0"> <a href="#!" class="text-inherit">Vintage Perfume</a>
                                  </h5>
                                  <small>SKU: 1</small>
                                </div>
                              </div>
                            </td>
                            <td>1</td>
                            <td>$45.29</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-xxl-3 col-12">
                <div class="card mb-4 mt-4 mt-lg-0">
                  <div class="card-header">
                    <h4 class="mb-0">Order Summary</h4>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-centered mb-0">
                      <thead class="table-light">
                        <tr>

                          <th scope="col">Descriptions</th>
                          <th scope="col">Amounts</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>Sub Total :</td>
                          <td>$340.00</td>

                        </tr>
                        <tr>

                          <td>Discount (DIS15%) : </td>
                          <td>-$51.00</td>

                        </tr>
                        <tr>

                          <td>Shipping Charge :</td>
                          <td>$15.00</td>

                        </tr>
                        <tr>

                          <td>Tax Vat 19% (included) :</td>
                          <td>$64.00</td>

                        </tr>
                        <tr>

                          <td>Total Amount</td>
                          <td>$368.00</td>

                        </tr>


                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4 class="mb-0">Payment Details</h4>
                  </div>
                  <div class="card-body">

                    <div>
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex justify-content-between mb-2"><span>Transactions:
                          </span> <span class="text-dark">#DU444TO10000</span></li>
                        <li class="d-flex justify-content-between mb-2"><span>Payment Method:
                          </span> <span class="text-dark">Credit Card</span></li>
                        <li class="d-flex justify-content-between mb-2"><span>Card Holder Name:
                          </span> <span class="text-dark">Harold Gonzalez</span></li>
                        <li class="d-flex justify-content-between mb-2"><span>Card Number:
                          </span> <span class="text-dark">xxxx xxxx xxxx 6779</span></li>
                        <li class="d-flex justify-content-between"><span>Total Amount: </span>
                          <span class="text-dark ">$368.00</span></li>
                      </ul>
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

  @@include("../partials/scripts.html")



</body>

</html>