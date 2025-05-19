<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")

    <title>Invoice Generator | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>
  </head>

  <body>
    <!-- Wrapper -->
    <main id="main-wrapper" class="main-wrapper">
      @@include("../partials/header.html")
      <!-- navbar vertical -->

      @@include('../partials/navbar-vertical.html', { "page": "invoiceGenerator",
      "page_group": "invoice" })


      <!-- Page Content -->
      <div id="app-content">
        <!-- Container fluid -->
        <div class="app-content-area">
          <div class="container-fluid">
            <div class="row">
              <div class="offset-xxl-2 col-xxl-8 col-md-12 col-12">
                <div class="card">
<!-- Page header -->
<div class="card-body">
 <div class="row justify-content-between mb-md-10">
    <div class="col-xxl-3 col-lg-4 col-md-6 col-12">
<a href="#" >
    <img src="../assets/images/brand/logo/logo-2.svg" alt="">
</a>
<div class="mt-6">
    <span class="fw-semi-bold">Address</span>
    <p class="mt-2 mb-0">4333 Edwards Rd undefined Erie,<br> Oklahoma, United States<br>
        Legal Registration No:123345
    </p>
</div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 mt-4 mt-md-0">
        <div class="row align-items-center mb-2">
            <div class="col-md-5">
                <span>Invoice No:</span>
            </div>
            <div class="col-md-7">
              <input class="form-control " placeholder="" value="#DU120620">
            </div>
        </div>
        <div class="row align-items-center mb-2">
            <div class="col-md-5">
                <span>Invoice Date:</span>
            </div>
            <div class="col-md-7">
              <input class="form-control  flatpickr" placeholder="" value="27 April 2023">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-5">
                <span>Due Date:</span>
            </div>
            <div class="col-md-7">
              <input class="form-control  flatpickr" placeholder="" value="29 April 2023">
            </div>
        </div>



            </div>
 </div>
 <div class="row justify-content-between mb-8">
    <div class="col-xxl-3 col-lg-4 col-md-6 col-12">

<div class="mt-6">
    <span class="fw-semi-bold">Invoice To</span>
    <textarea rows="3" class="form-control mt-2" placeholder="Who is this invoice from?"></textarea>
</div>
    </div>
    <div class="col-xxl-3 col-lg-4 col-md-6 col-12 d-flex justify-content-md-end mt-4 mt-md-0">
        <div class="mt-6">
            <span class="fw-semi-bold">Invoice From</span>
            <textarea rows="3" class="form-control mt-2" placeholder="Who is this invoice from?"></textarea>
        </div>


            </div>
 </div>
 <div class="row">
    <div class="col-12">
        <div class="table-responsive ">
            <table class="table text-nowrap">
                <thead class="table-light ">
                  <tr>

                    <th scope="col">Product Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Amount (USD)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td class="w-40">
                        <input type="text" class="form-control mb-2" placeholder="Product Name">
                        <textarea rows="2" class="form-control" placeholder="Product Description"></textarea>
                    </td>
                    <td><div class="input-group input-spinner  ">
                        <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                        <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                        <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                      </div></td>
                    <td>   <input type="text" class="form-control mb-2" placeholder="$39"></td>
                    <td> <input type="text" class="form-control mb-2" placeholder="$39"></td>
                  </tr>


                  <tr>
                    <td colspan="2" class="border-bottom-0">

                    </td>
                    <td><span class="text-dark">Sub Total</span></td>
                    <td><span class="text-dark">$0.00</span></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="border-bottom-0">

                    </td>
                    <td><span class="text-dark">Net Amount</span></td>
                    <td><span class="text-dark">$0.00</span></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="border-bottom-0">

                    </td>
                    <td><span class="text-dark">Tax*</span></td>
                    <td>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control" placeholder="0.00" >
                            <select class="form-select">
                                <option selected>Flat($)</option>
                                <option value="1">Percent(%)</option>

                              </select>
                        </div>
</td>
                  </tr>
                  <tr>
                    <td colspan="2" class="border-bottom-0">

                    </td>
                    <td><span class="text-dark fw-bold">Total paid</span></td>
                    <td><span class="text-dark fw-bold">$0.00</span></td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="border-top pt-8">
            <div >
                <h5 class="mb-1">Notes:</h5>
              <textarea class="form-control" rows="4" placeholder="Terms and Condition"></textarea>
            </div>

        </div>
    </div>
 </div>



  </div>
                </div>


              </div>
            </div>
            <div>
              <!-- row -->

            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Scripts -->
       <!-- flatpickr -->
    <script src="@@webRoot/node_modules/flatpickr/dist/flatpickr.min.js"></script>
    @@include("../partials/scripts.html")
    <script src="@@webRoot/assets/js/vendors/increment-value.js"></script>





  </body>
</html>
