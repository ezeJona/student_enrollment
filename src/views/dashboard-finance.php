<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Finance | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">

    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', { "page": "finance",
    "page_group": "pages" })

    <!-- page content -->
   <div id="app-content">
      <div class="app-content-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="d-flex justify-content-between align-items-center mb-5">
                <h3 class="mb-0 ">Finance</h3>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xxl-6 col-12 mb-5">
              <div class="card h-100">
                <div class="card-body">
                  <small>Saving Account</small>
                  <div class="d-flex justify-content-between mt-3 mb-8">
                    <div>
                      <h3 class="mb-0">First Saving Account</h3>
                      <small>**** **** **** 2345</small>
                    </div>
                    <div class="text-end">
                      <h3 class="mb-0">
                        <span class="text-muted me-1">$</span>68,345.23
                      </h3>
                      <small>Available Funds</small>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="d-flex">
                      <div class="d-flex align-items-center">
                        <div class="icon-md icon-shape bg-primary-soft rounded-3 text-primary">
                          <i data-feather="arrow-up" class="icon-xs"></i>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0">3,456.87</h4>
                          <small>Income</small>
                        </div>
                      </div>
                      <div class="d-flex align-items-center ms-6">
                        <div class="icon-md icon-shape bg-danger-soft text-danger rounded-3">
                          <i data-feather="arrow-down" class="icon-xs"></i>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0">1,538.23</h4>
                          <small>Expenses</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-none d-md-block">
                      <a href="#!" class="btn btn-primary"> + Add Money</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 col-12 mb-5">
              <div class="row">
                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                  <div class="card h-100 ">
                    <div class="card-body ">
                      <div class="mb-9">
                        <div class="icon-shape icon-xxl rounded-circle bg-primary-soft">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-wallet text-primary" viewBox="0 0 16 16">
                            <path
                              d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                          </svg>

                        </div>
                      </div>
                      <span>Total Balance</span>
                      <h3 class="mb-0 fw-bold">$ 6,234.78</h3>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="mb-9">
                        <div class="icon-shape icon-xxl rounded-circle bg-danger-soft">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor "
                            class="bi bi-piggy-bank text-danger" viewBox="0 0 16 16">
                            <path
                              d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z" />
                            <path fill-rule="evenodd"
                              d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z" />
                          </svg>
                        </div>
                      </div>
                      <span>Total Spending</span>
                      <h3>$ 8,123.82</h3>
                    </div>
                  </div>

                </div>
                <div class="col-lg-4 col-12 mb-5 mb-lg-0">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="mb-9">
                        <div class="icon-shape icon-xxl rounded-circle bg-success-soft">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-cash text-success" viewBox="0 0 16 16">
                            <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path
                              d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                          </svg>
                        </div>
                      </div>
                      <span>Total Saved</span>
                      <h3>$ 68,345.23</h3>
                    </div>
                  </div>

                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-xxl-3 col-lg-6 mb-5">
              <div class="position-relative">
                <div class="card-selected card-lift">
                  <div>
                    <input class="form-check-input mt-4 position-absolute start-0 top-0 z-1 ms-4 mt-4" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-end mb-6">
                          <h4 class="text-color-change">CARD</h4>
                        </div>
                        <div class="mb-6">
                          <small>**** **** **** 2345</small>
                        </div>
                        <div class="d-flex justify-content-between">
                          <div>
                            <small>Available Funds</small>
                            <h4 class="text-color-change mb-0">
                              $ 68,345.23
                            </h4>
                          </div>
                          <div class="d-flex">
                            <div>
                              <small>Expires</small>
                              <h4 class="text-color-change mb-0">12/25</h4>
                            </div>
                            <div class="ms-6">
                              <small>CVV</small>
                              <h4 class="text-color-change mb-0">123</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-lg-6 mb-5">
              <div class="position-relative">
                <div class="card-selected card-lift">
                  <div>
                    <input class="form-check-input mt-4 position-absolute start-0 top-0 z-1 ms-4 mt-4" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-end mb-6">
                          <h4 class="text-color-change">CARD</h4>
                        </div>
                        <div class="mb-6">
                          <small>**** **** **** 9472</small>
                        </div>
                        <div class="d-flex justify-content-between">
                          <div>
                            <small>Available Funds</small>
                            <h4 class="text-color-change mb-0">$ 8,567.43</h4>
                          </div>
                          <div class="d-flex">
                            <div>
                              <small>Expires</small>
                              <h4 class="text-color-change mb-0">12/23</h4>
                            </div>
                            <div class="ms-6">
                              <small>CVV</small>
                              <h4 class="text-color-change mb-0">235</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-lg-6 mb-5">
              <div class="position-relative">
                <div class="card-selected card-lift">
                  <div>
                    <input class="form-check-input mt-4 position-absolute start-0 top-0 z-1 ms-4 mt-4" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked />
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-end mb-6">
                          <h4 class="text-color-change">CARD</h4>
                        </div>
                        <div class="mb-6">
                          <small>**** **** **** 1241</small>
                        </div>
                        <div class="d-flex justify-content-between">
                          <div>
                            <small>Available Funds</small>
                            <h4 class="text-color-change mb-0">$ 6,234.78</h4>
                          </div>
                          <div class="d-flex">
                            <div>
                              <small>Expires</small>
                              <h4 class="text-color-change mb-0">12/24</h4>
                            </div>
                            <div class="ms-6">
                              <small>CVV</small>
                              <h4 class="text-color-change mb-0">456</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-lg-6 mb-5">
              <div class="position-relative">
                <div class="card-selected card-lift">
                  <div>
                    <input class="form-check-input mt-4 position-absolute start-0 top-0 z-1 ms-4 mt-4" type="radio" name="flexRadioDefault" id="flexRadioDefault4" />
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-end mb-6">
                          <h4 class="text-color-change">CARD</h4>
                        </div>
                        <div class="mb-6">
                          <small>**** **** **** 8470</small>
                        </div>
                        <div class="d-flex justify-content-between">
                          <div>
                            <small>Available Funds</small>
                            <h4 class="text-color-change mb-0">$ 9,231.22</h4>
                          </div>
                          <div class="d-flex">
                            <div>
                              <small>Expires</small>
                              <h4 class="text-color-change mb-0">12/20</h4>
                            </div>
                            <div class="ms-6">
                              <small>CVV</small>
                              <h4 class="text-color-change mb-0">845</h4>
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
          <div class="row">
            <div class="col-xl-4 col-12 mb-5 mb-xl-0">
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Cashflow</h4>
                  <a href="#!" class="btn btn-primary btn-sm">Check Details
                    <i data-feather="arrow-right" class="icon-xs">
                    </i></a>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <span>Daily</span>
                      <h4 class="mb-0 mt-1">$ 368.49</h4>
                    </div>
                    <div>
                      <span>Weekly</span>
                      <h4 class="mb-0 mt-1">$ 2,598.45</h4>
                    </div>
                    <div>
                      <span>Monthly</span>
                      <h4 class="mb-0 mt-1">$ 9,600.00</h4>
                    </div>
                  </div>
                  <div id="cashFlowChart" class="my-10 justify-content-center d-flex"> </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4 col-6">
                      <div class="rounded-3 d-flex bg-warning-soft text-warning p-4">
                        <div>
                          <i data-feather="arrow-down" class="icon-xs"></i>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0 text-warning">1,538.23</h4>
                          <small>Expenses</small>
                        </div>
                      </div>
                    </div>
                    <div class=" col-md-4 col-6">

                      <div class="rounded-3 d-flex bg-primary-soft  p-4 text-primary ">
                        <div>
                          <i data-feather="arrow-up" class="text-primary icon-xs"></i>
                        </div>
                        <div class="ms-2 lh-1">
                          <h4 class="mb-0 text-primary">3,456.87</h4>
                          <small>Income</small>
                        </div>
                      </div>
                    </div>


                  </div>


                </div>
              </div>
            </div>

            <div class="col-xl-8 col-12 mb-5 mb-xl-0">
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Latest Transactions</h4>
                  <a href="#!" class="btn btn-primary btn-sm">All transactions
                    <i data-feather="arrow-right" class="icon-xs">
                    </i></a>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table text-nowrap table-centered mb-0">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">Date</th>
                          <th scope="col">Type</th>
                          <th scope="col">Payment</th>
                          <th scope="col">Amount</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>25/07/2023</td>
                          <td>Clothes</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $15.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>20/07/2023</td>
                          <td>Food</td>
                          <td>Transfer</td>
                          <td><span class="text-danger">- $15.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>16/07/2023</td>
                          <td>Medical Checkup</td>
                          <td>Salary</td>
                          <td><span class="text-success">$9000.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>12/07/2023</td>
                          <td>Clothes</td>
                          <td>Freelancing</td>
                          <td><span class="text-success">$1300.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>06/07/2023</td>
                          <td>Financial</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $25.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>06/06/2023</td>
                          <td>Subscriptions</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $115.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>06/05/2023</td>
                          <td>Rent</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $46.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>

                          <td>03/05/2023</td>
                          <td>Maintenance</td>
                          <td>Card payment</td>
                          <td><span class="text-danger">- $15.00</span></td>
                          <td>
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-more-vertical">
                                  <circle cx="12" cy="12" r="1"></circle>
                                  <circle cx="12" cy="5" r="1"></circle>
                                  <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                                </li>
                              </ul>
                            </div>
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
  </main>

  <!-- Scripts -->
  <!-- apexchart js -->

  @@include("../partials/scripts.html")
  <script src="@@webRoot/node_modules/apexcharts/dist/apexcharts.min.js"></script>
  <script src="@@webRoot/assets/js/vendors/chart.js"></script>


</body>

</html>