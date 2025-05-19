<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>CRM | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', {
    "page": "crm",
    "page_group": "pages"
    })


    <!-- page content -->

       <div id="app-content">
      <div class="app-content-area">

        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="d-flex justify-content-between align-items-center mb-5">
                <h3 class="mb-0 fw-bold">CRM</h3>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
          <div class="card  mb-5">

            <div class="row row-cols-xl-4 row-cols-1 row-cols-md-2 g-0">
              <div class="col ">
                <div class="card-body">
                  <span class="fw-semi-bold">Campaign Sent</span>
                  <div class="mt-4">
                    <div class="row align-items-center ">
                      <div class="col">
                        <h3 class="mb-0 fw-bold">3,156</h3>
                        <span class="text-success fs-6">
                          <span data-feather="arrow-up" class="icon-xs"></span><span class="ms-1">4.23%</span>
                        </span>
                      </div>
                      <div class="col px-0">
                        <div id="chartCampaign"></div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="col border-start-md">
                <div class="card-body border-top border-top-md-0 ">
                  <span class="fw-semi-bold">New Leads</span>
                  <div class="mt-4">


                    <div class="row align-items-center g-0">
                      <div class="col">
                        <h3 class="mb-0 fw-bold">2,473</h3>
                        <span class="text-danger fs-6">
                          <span data-feather="arrow-down" class="icon-xs"></span><span class="ms-1">6.78%</span>
                        </span>
                      </div>
                      <div class="col px-0">
                        <div id="chartLead"></div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="col border-start-xl px-xl-0">
                <div class="card-body border-top border-top-xl-0 ">
                  <span class="fw-semi-bold">Deals</span>
                  <div class="mt-4">


                    <div class="row align-items-center g-0">
                      <div class="col">
                        <h3 class="mb-0 fw-bold">543</h3>
                        <span class="text-success fs-6">
                          <span data-feather="arrow-up" class="icon-xs"></span><span class="ms-1">4.23%</span>
                        </span>
                      </div>
                      <div class="col px-0">
                        <div id="chartDeals"></div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
              <div class="col border-start-md">
                <div class="card-body border-top border-top-xl-0 ">
                  <span class="fw-semi-bold">Booked Revenue</span>
                  <div class="mt-4">


                    <div class="row align-items-center g-0">
                      <div class="col">
                        <h3 class="mb-0 fw-bold">$315k</h3>
                        <span class="text-success fs-6">
                          <span data-feather="arrow-up" class="icon-xs"></span><span class="ms-1">14.23%</span>
                        </span>
                      </div>
                      <div class="col px-0">
                        <div id="chartBooked"></div>
                      </div>
                    </div>

                  </div>
                </div>

              </div>


            </div>

          </div>
          <div class="row ">
            <div class="col-xl-5 mb-5">
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Campaign Email Sent</h4>
                  <div class="dropdown dropstart">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i data-feather="more-vertical" class="icon-xs"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">

                  <div id="chartCampaignEmail" class="d-flex justify-content-center mt-8"></div>

                  <div class="mt-8">
                    <div class="row row-cols-lg-3 text-center">
                      <div class="col">
                        <div>

                          <i class="text-muted mb-3 icon-sm" data-feather="send"></i>
                          <h4 class="mb-1">4,567</h4>
                          <span><i class="mdi mdi-circle small text-warning me-1"></i>Total Sent</span>
                        </div>
                      </div>
                      <div class="col">
                        <div>

                          <i class="text-muted mb-3 icon-sm" data-feather="flag"></i>
                          <h4 class="mb-1">2,346</h4>
                          <span><i class="mdi mdi-circle small text-success me-1"></i>Reached</span>
                        </div>
                      </div>
                      <div class="col">
                        <div>

                          <i class="text-muted mb-3 icon-sm" data-feather="mail"></i>
                          <h4 class="mb-1">1,784</h4>
                          <span><i class="mdi mdi-circle small text-primary me-1"></i>Opened</span>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-xl-7 mb-5">
              <div class="card h-100">

                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Revenue</h4>
                  <div class="dropdown dropstart">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i data-feather="more-vertical" class="icon-xs"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a></li>
                    </ul>
                  </div>
                </div>



                <div class=" border-bottom">
                  <div class="row row-cols-lg-2 justify-content-center ">
                    <div class="col">
                      <div class="text-center py-5">

                        <span>Current Month</span>
                        <h3 class="mb-0 fw-bold mt-2">$31,784</h3>
                      </div>
                    </div>
                    <div class="col border-start">
                      <div class="text-center py-5">

                        <span>Previous Month</span>
                        <h3 class="mb-0 fw-bold mt-2">$81,784</h3>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="card-body">
                  <div id="chartRevenue"></div>
                </div>
              </div>

            </div>
          </div>
          <div class="row ">
            <div class="col-xl-6 mb-5">
              <div class=" card h-100">
                <div class=" card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Top Performing</h4>
                  <div class="dropdown dropstart">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i data-feather="more-vertical" class="icon-xs"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table text-nowrap mb-0 table-centered">
                      <thead class="table-light">
                        <tr>
                          <th>User</th>
                          <th>Leads</th>
                          <th>Deals</th>
                          <th>Tasks</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>

                          <td>
                            <div class="lh-1">
                              <h5 class="mb-0">
                                <a href="#!" class="text-inherit">John M. Caswell</a></h5>
                              <small>Senior Sales Executive</small>
                            </div>
                          </td>
                          <td>187</td>
                          <td>123</td>
                          <td>45</td>
                          <td><a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="eyeOne">
                              <i data-feather="eye" class="icon-xs"></i>
                              <div id="eyeOne" class="d-none">
                               <span>View</span>
                              </div>
                            </a></td>
                        </tr>
                        <tr>

                          <td>

                            <div class="lh-1">
                              <h5 class="mb-0">
                                <a href="#!" class="text-inherit">Thomas Johnson</a></h5>


                              <small>Senior Sales Executive</small>
                            </div>
                          </td>
                          <td>225</td>
                          <td>147</td>
                          <td>55</td>
                          <td><a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="eyeTwo">
                              <i data-feather="eye" class="icon-xs"></i>
                              <div id="eyeTwo" class="d-none">
                               <span>View</span>
                              </div>
                            </a></td>
                        </tr>
                        <tr>

                          <td>
                            <div class="lh-1">
                              <h5 class="mb-0">
                                <a href="#!" class="text-inherit">Tammy Wilson</a></h5>

                              <small>Senior Sales Executive</small>
                            </div>
                          </td>
                          <td>315</td>
                          <td>223</td>
                          <td>87</td>
                          <td><a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="eyeThree">
                              <i data-feather="eye" class="icon-xs"></i>
                              <div id="eyeThree" class="d-none">
                               <span>View</span>
                              </div>
                            </a></td>
                        </tr>
                        <tr>

                          <td>
                            <div class="lh-1">
                              <h5 class="mb-0">
                                <a href="#!" class="text-inherit">Pearline Robinson</a></h5>

                              <small>Senior Sales Executive</small>
                            </div>
                          </td>
                          <td>145</td>
                          <td>89</td>
                          <td>25</td>
                          <td>
                            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="eyeFour">
                              <i data-feather="eye" class="icon-xs"></i>
                              <div id="eyeFour" class="d-none">
                               <span>View</span>
                              </div>
                            </a>
                          </td>
                        </tr>
                        <tr>

                          <td>
                            <div class="lh-1">
                              <h5 class="mb-0">
                                <a href="#!" class="text-inherit">Javier Sanchez</a></h5>

                              <small>Senior Sales Executive</small>
                            </div>
                          </td>
                          <td>177</td>
                          <td>103</td>
                          <td>55</td>
                          <td>
                            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="eyeFive">
                              <i data-feather="eye" class="icon-xs"></i>
                              <div id="eyeFive" class="d-none">
                               <span>View</span>
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
            <div class="col-xl-6 mb-5">
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Recent lead</h4>
                  <div class="dropdown dropstart">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i data-feather="more-vertical" class="icon-xs"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                      <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body px-0 pt-0">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                          <a href="#!"><img src="../assets/images/avatar/avatar-11.jpg" alt="Image"
                              class="avatar avatar-md rounded-circle"></a>
                          <div class="ms-3 lh-1">
                            <h5 class="mb-0"> <a href="#!" class="text-inherit">Frances McCall</a></h5>
                            <small>francescall@rhyta.com</small>
                          </div>
                        </div>
                        <div>
                          <span class="badge badge-warning-soft rounded-0 text-warning">Cold Lead</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                          <a href="#!"><img src="../assets/images/avatar/avatar-2.jpg" alt="Image"
                              class="avatar avatar-md rounded-circle"></a>
                          <div class="ms-3 lh-1">
                            <h5 class="mb-0"> <a href="#!" class="text-inherit">Veda Rocha</a></h5>
                            <small>vedarocha@armyspy.com</small>
                          </div>
                        </div>
                        <div>
                          <span class="badge badge-danger-soft rounded-0 text-danger">Lost Lead</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                          <a href="#!"><img src="../assets/images/avatar/avatar-3.jpg" alt="Image"
                              class="avatar avatar-md rounded-circle"></a>
                          <div class="ms-3 lh-1">
                            <h5 class="mb-0"> <a href="#!" class="text-inherit">Marcella Soo</a></h5>
                            <small>marcellasoo@jourrapide.com</small>
                          </div>
                        </div>
                        <div>
                          <span class="badge badge-success-soft rounded-0 text-success">Won Lead</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                          <a href="#!"><img src="../assets/images/avatar/avatar-4.jpg" alt="Image"
                              class="avatar avatar-md rounded-circle"></a>
                          <div class="ms-3 lh-1">
                            <h5 class="mb-0"> <a href="#!" class="text-inherit">Heathea Carpenter</a></h5>
                            <small>heathercarpenter@dayrep.com</small>
                          </div>
                        </div>
                        <div>
                          <span class="badge badge-warning-soft rounded-0 text-warning">Cold Lead</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                          <a href="#!"><img src="../assets/images/avatar/avatar-5.jpg" alt="Image"
                              class="avatar avatar-md rounded-circle"></a>
                          <div class="ms-3 lh-1">
                            <h5 class="mb-0"> <a href="#!" class="text-inherit">Steven Adams</a></h5>
                            <small>steveneadams@rhyta.com</small>
                          </div>
                        </div>
                        <div>
                          <span class="badge badge-warning-soft rounded-0 text-warning">Cold Lead</span>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item ">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex">
                          <a href="#!"><img src="../assets/images/avatar/avatar-6.jpg" alt="Image"
                              class="avatar avatar-md rounded-circle"></a>
                          <div class="ms-3 lh-1">
                            <h5 class="mb-0"> <a href="#!" class="text-inherit">Paul Ross</a></h5>
                            <small>paulross@teleworm.us</small>
                          </div>
                        </div>
                        <div>
                          <span class="badge badge-success-soft rounded-0 text-success">Won Lead</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-xl-4 mb-5 mb-xxl-0">
              <div class=" card h-100">
                <div class="card-header ">
                  <h4 class="mb-0">Tasks</h4>

                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush mb-2">
                    <li class="list-group-item px-0">

                      <div class="form-check">
                        <input class="form-check-input form-check-line-through" type="radio" name="flexRadioDefault"
                          id="checkTaskOne">
                        <label class="form-check-label" for="checkTaskOne">
                          Start prototyping in frame for admin dashboard.
                        </label>
                      </div>

                    </li>
                    <li class="list-group-item px-0">
                      <div class="form-check">
                        <input class="form-check-input form-check-line-through" type="radio" name="flexRadioDefault"
                          id="checkTaskTwo">
                        <label class="form-check-label" for="checkTaskTwo">
                          Invite your teammates and start collaborating
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="form-check">
                        <input class="form-check-input form-check-line-through" type="radio" name="flexRadioDefault"
                          id="checkTaskSeven">
                        <label class="form-check-label" for="checkTaskSeven">
                          Website launch planning
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="form-check">
                        <input class="form-check-input form-check-line-through" type="radio" name="flexRadioDefault"
                          id="checkTaskThree">
                        <label class="form-check-label" for="checkTaskThree">
                          Intial wireframe of website design
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="form-check">
                        <input class="form-check-input form-check-line-through" type="radio" name="flexRadioDefault"
                          id="checkTaskFour">
                        <label class="form-check-label" for="checkTaskFour">
                          Start prototyping in framer for admin dashboard.
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="form-check">
                        <input class="form-check-input form-check-line-through" type="radio" name="flexRadioDefault"
                          id="checkTaskFive">
                        <label class="form-check-label" for="checkTaskFive">
                          Intial wireframe of website design
                        </label>
                      </div>
                    </li>
                    <li class="list-group-item px-0">
                      <div class="form-check">
                        <input class="form-check-input form-check-line-through" type="radio" name="flexRadioDefault"
                          id="checkTaskSix">
                        <label class="form-check-label " for="checkTaskSix">
                          Website launch planning
                        </label>
                      </div>
                    </li>


                  </ul>
                  <div class="row g-2 mt-8">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Add Task Name">
                    </div>
                    <div class="col-auto">
                      <a href="#!" class="btn btn-primary">+ Add Task</a>
                    </div>
                  </div>
                </div>
              </div>




            </div>
            <div class="col-xl-4 mb-5 mb-lg-0">

              <div class=" card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Deal Report</h4>
                  <div class="d-flex">
                    <div>
                      <h5 class="mb-0">Sort by:</h5>
                    </div>
                    <div class="dropdown">
                      <a class="dropdown-toggle text-decoration-none text-inherit" href="#!" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Monthly
                      </a>

                      <ul class="dropdown-menu dropdown-menu-end ">
                        <li><a class="dropdown-item" href="#!">Monthly</a></li>
                        <li><a class="dropdown-item" href="#!">Yearly</a></li>
                        <li><a class="dropdown-item" href="#!">Weekly</a></li>
                      </ul>
                    </div>
                  </div>



                </div>
                <div class="card-body pb-0">

                  <div id="dealRoportChart"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 mb-5 mb-lg-0">

              <div class=" card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4 class="mb-0">Sales Forecast</h4>
                  <div class="d-flex">
                    <div>
                      <h5 class="mb-0">Sort by:</h5>
                    </div>
                    <div class="dropdown">
                      <a class="dropdown-toggle text-decoration-none text-inherit" href="#!" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Nov 2023
                      </a>

                      <ul class="dropdown-menu dropdown-menu-end ">
                        <li><a class="dropdown-item" href="#!">Oct 2023</a></li>
                        <li><a class="dropdown-item" href="#!">Sep 2023</a></li>
                        <li><a class="dropdown-item" href="#!">Aug 2023</a></li>
                      </ul>
                    </div>
                  </div>



                </div>
                <div class="card-body pb-0">

                  <div id="salesForecastChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Scripts -->


  <!-- popper js -->
  <script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
  <!-- tippy js -->
  <script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
  @@include("../partials/scripts.html")
  <script src="@@webRoot/node_modules/apexcharts/dist/apexcharts.min.js"></script>
  <script src="@@webRoot/assets/js/vendors/chart.js"></script>





</body>

</html>