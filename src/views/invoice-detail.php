<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "../partials/head.php" ?>

    <title>Invoice List | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>
  </head>

  <body>
    <!-- Wrapper -->
    <main id="main-wrapper" class="main-wrapper">
		  <?php include "../partials/header.php" ?>

      <!-- navbar vertical -->
		  <?php include "../partials/navbar-vertical.php"?>



      <!-- Page Content -->
      <div id="app-content">

        <!-- Container fluid -->
        <div class="app-content-area">
          <div class="container-fluid">
            <div class="row">
              <div class="offset-xxl-2 col-xxl-8 col-md-12 col-12">
                <div class="card" id="invoice">
<!-- Page header -->
<div class="card-body">
 <div class="row justify-content-between mb-md-10">
    <div class="col-lg-3 col-md-6 col-12">
<a href="#" >
    <img src="../assets/images/brand/logo/logo-2.svg" alt="" class="text-inverse">
</a>
<div class="mt-6">
    <span class="fw-semi-bold">Address</span>
    <p class="mt-2 mb-0">4333 Edwards Rd undefined Erie,<br> Oklahoma, United States<br>
        Legal Registration No:123345
    </p>
</div>
    </div>
    <div class="col-lg-3 col-md-6 col-12 d-flex justify-content-md-end mt-4 mt-md-0">
        <ul class="list-unstyled">
            <li class="mb-1">
                <span>Invoice No. :</span>
                <span class="ms-2 text-dark">#DU120620</span>

            </li>
             <li class="mb-1">
                <span>Invoice date :</span>
                <span class="ms-2 text-dark">27 April 2023</span>

            </li>
             <li class="mb-1">
                <span>Due Date :</span>
                <span class="ms-2 text-dark">6 May 2023</span>

            </li>
        </ul>


            </div>
 </div>
 <div class="row justify-content-between mb-8">
    <div class="col-lg-3 col-md-6 col-12">

<div class="mt-6">
    <span class="fw-semi-bold">Invoice To</span>
    <h4>Robert Hernandez</h4>
    <p class="mt-2 mb-2">4333 Edwards Rdundefined <br>Erie, Oklahoma 14355,<br>
        United States
    </p>
    <span>(123) 456-7890</span><br>
    <span class="fw-semi-bold">roberthernandez@gmail.com</span>
</div>
    </div>
    <div class="col-lg-3 col-md-6 col-12 d-flex justify-content-md-end mt-4 mt-md-0">
        <div class="mt-6">
            <span class="fw-semi-bold">Invoice From</span>
            <h4>Susan Hartness</h4>
            <p class="mt-2 mb-2">4333 Edwards Rdundefined <br> Erie, Oklahoma <br>14355 United States
            </p>
            <span>+1 (123) 456 7891</span><br>
            <span class="fw-semi-bold">dashui@example.com</span>
        </div>


            </div>
 </div>
 <div class="row">
    <div class="col-12">
        <div class="table-responsive ">
            <table class="table table-centered text-nowrap">
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

                    <td><h5 class="mb-0">Web Design</h5>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
                    </td>
                    <td>1</td>
                    <td>$39.00</td>
                    <td>$39.00</td>
                  </tr>
                  <tr>

                    <td><h5 class="mb-0">Web Development</h5>
                    <p class="mb-0">Fusce in sem placerat, dictum tellus nec.</p>
                    </td>
                    <td>1</td>
                    <td>$99.00</td>
                    <td>$99.00</td>
                  </tr>
                  <tr>

                    <td><h5 class="mb-0">Social Media Marketing</h5>
                    <p class="mb-0">Fusce eleifend tortor in lacinia dictum.</p>
                    </td>
                    <td>1</td>
                    <td>$49.00</td>
                    <td>$49.00</td>
                  </tr>
                  <tr>
                    <td colspan="2" class="border-bottom-0">

                    </td>
                    <td><span class="text-dark">Sub Total</span></td>
                    <td><span class="text-dark">$117.00</span></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="border-bottom-0">

                    </td>
                    <td><span class="text-dark">Net Amount</span></td>
                    <td><span class="text-dark">$117.00</span></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="border-bottom-0">

                    </td>
                    <td><span class="text-dark">Tax*</span></td>
                    <td><span class="text-dark">$2.00</span></td>
                  </tr>
                  <tr>
                    <td colspan="2" class="border-bottom-0">

                    </td>
                    <td><span class="text-dark fw-bold">Total paid</span></td>
                    <td><span class="text-dark fw-bold">$115.00</span></td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="border-top pt-8">
            <div >
                <h5 class="mb-1">Notes:</h5>
                <p class="mb-0">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</p>
            </div>
            <div class="mt-6">
              <a href="#" class="btn btn-primary print-link no-print">Print</a>
              <a href="#" class="btn btn-danger ms-2">Download</a>
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

	  <?php include "../partials/scripts.php" ?>
    <?php include "../assets/libs/jQuery.print/jQuery.print.js"?>


  </body>
</html>
