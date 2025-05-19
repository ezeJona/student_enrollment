<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Order List | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', {
    "page": "e-cart",
    "page_group": "ecommerce"
    })

    <!-- page content -->
    <!-- Page Content -->

       <div id="app-content">
      <!-- Container fluid -->
      <div class="app-content-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="mb-5">
                <h3 class="mb-0 ">Shopping Cart</h3>

              </div>
            </div>
          </div>
          <div>
            <!-- row -->

            <div class="row">
              <div class="col-xxl-9 col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="mb-0">My Cart</h4>

                  </div>
                  <div class="card-body">
                    <div class="table-responsive table-card">
                      <table class="table table-centered text-nowrap mb-0">
                        <thead class="table-light">
                          <tr>

                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Amounts</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>

                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/ecommerce/product-1.jpg" alt="Image"
                                    class="img-4by3-md rounded-3"></a>
                                <div class="ms-3">
                                  <h5 class="mb-0"> <a href="#!" class="text-inherit">Women Shoes</a></h5>
                                  <span class="text-warning">
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                  </span>
                                </div>
                              </div>
                            </td>

                            <td>$65.29</td>
                            <td>
                              <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                  class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                              </div>
                            </td>
                            <td>$65.29</td>
                            <td>
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                data-template="trashOne">
                                <i data-feather="trash-2" class="icon-xs"></i>
                                <div id="trashOne" class="d-none">
                                  <span>Delete</span>
                                </div>
                              </a>

                            </td>
                          </tr>
                          <tr>

                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/ecommerce/product-2.jpg" alt="Image"
                                    class="img-4by3-md rounded-3"></a>
                                <div class="ms-3">
                                  <h5 class="mb-0"> <a href="#!" class="text-inherit">Black Round Sunglasses</a></h5>
                                  <span class="text-warning">
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                  </span>
                                </div>
                              </div>
                            </td>

                            <td>$15.99</td>
                            <td>
                              <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                  class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                              </div>
                            </td>
                            <td>$15.99</td>
                            <td>
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                data-template="trashTwo">
                                <i data-feather="trash-2" class="icon-xs"></i>
                                <div id="trashTwo" class="d-none">
                                  <span>Delete</span>
                                </div>
                              </a>

                            </td>
                          </tr>

                          <tr>

                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/ecommerce/product-3.jpg" alt="Image"
                                    class="img-4by3-md rounded-3"></a>
                                <div class="ms-3">
                                  <h5 class="mb-0"> <a href="#!" class="text-inherit">Shoulder Bag</a></h5>
                                  <span class="text-warning">
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                  </span>
                                </div>
                              </div>
                            </td>

                            <td>$65.29</td>
                            <td>
                              <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                  class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                              </div>
                            </td>
                            <td>$65.29</td>
                            <td>
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                data-template="trashFive">
                                <i data-feather="trash-2" class="icon-xs"></i>
                                <div id="trashFive" class="d-none">
                                  <span>Delete</span>
                                </div>
                              </a>

                            </td>
                          </tr>

                          <tr>

                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/ecommerce/product-4.jpg" alt="Image"
                                    class="img-4by3-md rounded-3"></a>
                                <div class="ms-3">
                                  <h5 class="mb-0"> <a href="#!" class="text-inherit">Vinage Perfume</a></h5>
                                  <span class="text-warning">
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                  </span>
                                </div>
                              </div>
                            </td>

                            <td>$45.29</td>
                            <td>
                              <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                  class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                              </div>
                            </td>
                            <td>$45.29</td>
                            <td>
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                data-template="trashThree">
                                <i data-feather="trash-2" class="icon-xs"></i>
                                <div id="trashThree" class="d-none">
                                  <span>Delete</span>
                                </div>
                              </a>

                            </td>
                          </tr>

                          <tr>

                            <td>
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/ecommerce/product-5.jpg" alt="Image"
                                    class="img-4by3-md rounded-3"></a>
                                <div class="ms-3">
                                  <h5 class="mb-0"> <a href="#!" class="text-inherit">Apple airpods</a></h5>
                                  <span class="text-warning">
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                    <i class="mdi mdi-star ms-n1"> </i>
                                  </span>
                                </div>
                              </div>
                            </td>

                            <td>$65.29</td>
                            <td>
                              <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                  class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                              </div>
                            </td>
                            <td>$65.29</td>
                            <td>
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                data-template="trashFour">
                                <i data-feather="trash-2" class="icon-xs"></i>
                                <div id="trashFour" class="d-none">
                                  <span>Delete</span>
                                </div>
                              </a>

                            </td>
                          </tr>


                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer  justify-content-between d-flex">
                    <a href="#!" class="btn btn-outline-primary">Continue Shopping</a>
                    <a href="#!" class="btn btn-primary">Checkout</a>
                  </div>
                </div>
              </div>
              <div class="col-xxl-3 col-12">
                <div class="card mb-4 mt-4 mt-xxl-0">
                  <div class="card-header">
                    <h4 class="mb-3">Order Summary</h4>
                    <form class="row g-2">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Coupon Code">
                      </div>
                      <div class="col-auto">
                        <button type="submit" class="btn btn-dark">Apply</button>
                      </div>

                    </form>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex justify-content-between mb-3">
                        <span>Sub Total :</span>
                        <span>$340.00</span>

                      </li>
                      <li class="d-flex justify-content-between mb-3">
                        <span>Discount (DIS15%) : </span>
                        <span class="text-success">-$51.00</span>

                      </li>
                      <li class="d-flex justify-content-between mb-3">
                        <span>Shipping Charge : </span>
                        <span class="text-success">Free</span>

                      </li>
                      <li class="d-flex justify-content-between">
                        <span>Tax Vat 19% (included) : </span>
                        <span class="text-success">$64.00</span>

                      </li>
                    </ul>
                  </div>
                  <div class="card-footer">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex justify-content-between">
                        <span class="text-dark">Order Total</span>
                        <span class="text-primary ">$368.00</span>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

    @@include("../partials/scripts.html")
     <!-- popper js -->
  <script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
  <!-- tippy js -->
  <script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="@@webRoot/assets/js/vendors/tooltip.js"></script>
<script src="@@webRoot/assets/js/vendors/increment-value.js"></script>



</body>

</html>