<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Project Budget | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <!-- Wrapper -->
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
      <!-- navbar vertical -->
      @@include('../partials/navbar-vertical.html', {

      "page_group": "project",
      "page_group_second": "projectSingle",
      "page": "budget"
      })


    <!-- Page Content -->
    <div id="app-content">
      <div class="app-content-area">
        <!-- Container fluid -->
        <div class="container-fluid">
          <div class="bg-success-soft mx-n6 mt-n6 pt-6 mb-6">

            <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div class="d-lg-flex
                align-items-center justify-content-between mb-6 px-6">
                  <div class="mb-6 mb-lg-0">
                    <div class="d-flex align-items-center">
                      <img src="../assets/images/brand/logo/brand-logo.png" alt="Image" class="icon-shape icon-md">
                      <div class="ms-4">

                        <h1 class="mb-0 h3 ">Dash UI - Design & Development
                        </h1>
                        <span>
                          <span class="fs-6"><span class="me-1"><i
                                class="mdi mdi-domain fs-5 me-1"></i>Codescandy</span> | <span class="mx-1">Create Date:
                              <span class="text-dark">29 Jan 2023</span></span> | <span class="mx-1">Due Date:
                              <span class="text-dark">29 Jan 2023</span></span></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center ">
                    <!-- avatar group -->
                    <div class="avatar-group">
                      <span class="avatar avatar-md">
                        <!-- avatar  -->
                        <img alt="avatar" src="../assets/images/avatar/avatar-11.jpg" class="rounded-circle
                        imgtooltip" data-template="one">
                        <span id="one" class="d-none">
                          <span>Paul Haney</span>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle
                        imgtooltip" data-template="two">
                        <span id="twoTwo" class="d-none">
                          <span>Gali Linear</span>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle
                        imgtooltip" data-template="three">
                        <span id="threeThree" class="d-none">
                          <span>Mary Holler</span>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle
                        imgtooltip" data-template="four">
                        <span id="four" class="d-none">
                          <span>Lio Nordal</span>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <span class="avatar-initials
                        rounded-circle bg-light
                        text-dark">5+</span>
                      </span>
                    </div>
                    <!-- icon  -->
                    <a href="#!" class="btn btn-icon btn-white border border-2 rounded-circle btn-dashed ms-2"
                      data-template="inviteMember" data-bs-toggle="modal" data-bs-target="#inviteMemberModal">

                      +

                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <!-- nav  -->
                  <ul class="nav nav-lb-tab px-6">
                    <li class="nav-item ms-0 me-3">
                      <a class="nav-link " href="project-overview.html">Overview</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link " href="project-task.html">Task</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link active" href="project-budget.html">Budget</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link " href="project-files.html">Files</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link " href="project-team.html">Team</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col-md-12 mb-5">
              <!-- card -->
              <div class="card">
                <!-- card body -->

                <!-- row -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="card-body border-bottom">
                      <h3 class="mb-4">Budget </h3>
                      <div class="d-flex justify-content-between mb-3">
                        <div>
                          <span><span class="text-dark ">$52,000 </span>(Total) </span>
                        </div>
                        <div>
                          <span><span class="text-dark ">$8,770 </span>Remaining </span>
                        </div>
                      </div>
                      <div class="progress" style="height: 8px;">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 18%" aria-valuenow="18"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16"
                          aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                  </div>
                  <!-- col -->
                  <div class="col-lg-4 col-md-12 col-12">
                    <div class="d-flex align-items-center justify-content-between p-4">
                      <div class="mb-4 mb-lg-0">
                        <h2 class="h1  mb-0">$52,000</h2>
                        <p class="mb-0 ">Total Budget</p>

                      </div>
                      <div class="ms-3">
                        <div class="icon-shape icon-lg bg-primary-soft text-primary rounded-circle">
                          <i data-feather="dollar-sign"></i>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- col -->
                  <div class="col-lg-4 col-md-12 col-12 border-start">
                    <div class="d-flex align-items-center justify-content-between p-4">
                      <div class="mb-4 mb-lg-0">
                        <h2 class="h1  mb-0">$43,230</h2>
                        <p class="mb-0 ">Total Spent</p>

                      </div>
                      <div class="ms-3">
                        <div class="icon-shape icon-lg bg-danger-soft text-danger rounded-circle">
                          <i data-feather="shopping-cart"></i>
                        </div>

                      </div>
                    </div>

                  </div>
                  <!-- col -->
                  <div class="col-lg-4 col-md-12 col-12 border-start">
                    <div class="d-flex align-items-center justify-content-between p-4">
                      <div class="mb-4 mb-lg-0">
                        <h2 class="h1  mb-0">$8,770
                        </h2>
                        <p class="mb-0 ">Remaining</p>

                      </div>
                      <div class="ms-3">
                        <div class="icon-shape icon-lg bg-success-soft text-success rounded-circle">
                          <i data-feather="pie-chart"></i>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row ">
            <!-- col -->
            <div class="col-lg-6 mb-5">
              <div class="card h-100">
                <div class="card-header">
                  <h4 class="mb-0">Expenses</h4>
                </div>
                <div class="card-body">

                  <div id="budgetExpenseChart"></div>
                </div>
              </div>


            </div>
            <!-- col -->
            <div class="col-lg-6 mb-5">
              <!-- card -->
              <div class="card h-100">
                <!-- card body -->
                <!-- card header -->
                <div class="card-header ">
                  <h4 class="mb-0">Budget Category</h4>
                </div>
                <!-- row -->

                <!-- table -->
                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table text-nowrap mb-0 table-centered">
                      <thead class="table-light">
                        <tr>
                          <th>Category</th>
                          <th>Total</th>
                          <th>Percentage</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-warning me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Design</td>
                          <td>$9000.00</td>
                          <td>23%</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Saas Services</td>
                          <td>$4500.00</td>
                          <td>10%</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-danger me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Development</td>
                          <td>$9030.00</td>
                          <td>23.5%</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-primary me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>SEO</td>
                          <td>$6800.00</td>
                          <td>18%</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Entertainment</td>
                          <td>$2400.00</td>
                          <td>4%</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-success me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Marketing</td>
                          <td>$8320.00</td>
                          <td>19%</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Extra</td>
                          <td>$2000.00</td>
                          <td>3.5%</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>



              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <!-- col -->
            <div class="col-12">
              <!-- card -->
              <div class="card">
                <!-- card header -->
                <div class="card-header ">
                  <h4 class="mb-0">Budget Details</h4>
                </div>
                <!-- table -->
                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table text-nowrap mb-0 table-centered">
                      <thead class="table-light">
                        <tr>
                          <th>Type</th>
                          <th>Total Budget</th>
                          <th>Expenses (USD)</th>
                          <th>Expenses(%)</th>
                          <th>Remaining(USD)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-success me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Concept</td>
                          <td>$12,000</td>
                          <td>$6,500</td>
                          <td>52% <i class="bi bi-arrow-up text-danger"></i></td>
                          <td> $5500</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-warning me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Design</td>
                          <td>$18,000</td>
                          <td>$8,000</td>
                          <td>45% <i class="bi bi-arrow-down text-success"></i></td>
                          <td> $10,000</td>
                        </tr>
                        <tr>
                          <td><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-danger me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Development
                          </td>
                          <td>$64,000</td>
                          <td>$38,000</td>
                          <td>54% <i class="bi bi-arrow-down text-success"></i></td>
                          <td> $34,000</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-primary me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>SEO
                          </td>
                          <td>$8,000</td>
                          <td>$3,000</td>
                          <td>65% <i class="bi bi-arrow-down text-success"></i></td>
                          <td> $5,000</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-info me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Extra
                          </td>
                          <td>$2,000</td>
                          <td>$1,500</td>
                          <td>85% <i class="bi bi-arrow-up text-danger"></i></td>
                          <td> $500</td>
                        </tr>
                        <tr>
                          <td> <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor"
                              class="bi bi-square-fill text-success me-2" viewBox="0 0 16 16">
                              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" />
                            </svg>Marketing
                          </td>
                          <td>$34,500</td>
                          <td>$24,500</td>
                          <td>88% <i class="bi bi-arrow-up text-danger"></i></td>
                          <td> $10,000</td>
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
    <div class="modal fade" id="inviteMemberModal" tabindex="-1" role="dialog" aria-labelledby="inviteMemberModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
        <div class="modal-content ">
          <div class="modal-header align-items-center">
            <h4 class="mb-0" id="inviteMemberModalLabel">Invite Member</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

            </button>
          </div>
          <div class="modal-body">
            <div class="mb-3 mt-1">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
            <div class="d-flex align-items-center mb-3">
              <div>Members: </div>
              <div class="ms-2">
                <!-- avatar group -->
                <div class="avatar-group">
                  <span class="avatar avatar-sm">
                    <!-- avatar  -->
                    <img alt="avatar" src="../assets/images/avatar/avatar-11.jpg" class="rounded-circle
                      imgtooltip" data-template="one">
                    <span id="oneOne" class="d-none">
                      <span>Paul Haney</span>
                    </span>
                  </span>
                  <!-- avatar  -->
                  <span class="avatar avatar-sm">
                    <img alt="avatar" src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle
                      imgtooltip" data-template="two">
                    <span id="two" class="d-none">
                      <span>Gali Linear</span>
                    </span>
                  </span>
                  <!-- avatar  -->
                  <span class="avatar avatar-sm">
                    <img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle
                      imgtooltip" data-template="three">
                    <span id="three" class="d-none">
                      <span>Mary Holler</span>
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <div>
              <!-- contact list -->
              <ul class="list-unstyled contacts-list mb-0">
                <!-- chat item -->
                <li class="py-2 ">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="#!" class="text-link contacts-link">
                      <!-- media -->
                      <div class="d-flex">
                        <div class="avatar avatar-md ">
                          <img src="../assets/images/avatar/avatar-5.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <!-- media body -->
                        <div class=" ms-2">
                          <h5 class="mb-0">Pete Martin</h5>
                          <p class="mb-0 text-muted fs-6">Designer
                          </p>
                        </div>
                      </div>
                    </a>
                    <div>
                      <a href="#!" class="btn btn-secondary btn-sm">Add</a>
                    </div>
                  </div>
                </li>
                <!-- chat item -->
                <li class="py-2 ">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="#!" class="text-link contacts-link">
                      <!-- media -->
                      <div class="d-flex">
                        <div class="avatar avatar-md ">
                          <img src="../assets/images/avatar/avatar-9.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <!-- media body -->
                        <div class=" ms-2">
                          <h5 class="mb-0">Olivia Cooper</h5>
                          <p class="mb-0 text-muted fs-6">Front End Developer
                          </p>
                        </div>
                      </div>
                    </a>
                    <div>
                      <a href="#!" class="btn btn-secondary btn-sm">Add</a>
                    </div>
                  </div>
                </li>
                <!-- chat item -->
                <li class="py-2 ">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="#!" class="text-link contacts-link">
                      <!-- media -->
                      <div class="d-flex">
                        <div class="avatar avatar-md ">
                          <img src="../assets/images/avatar/avatar-19.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <!-- media body -->
                        <div class=" ms-2">
                          <h5 class="mb-0">Jamarcus Streich</h5>
                          <p class="mb-0 text-muted fs-6">UX Designer
                          </p>
                        </div>
                      </div>
                    </a>
                    <div>
                      <a href="#!" class="btn btn-secondary btn-sm">Add</a>
                    </div>
                  </div>


                </li>
                <!-- chat item -->
                <li class="py-2 ">

                  <div class="d-flex justify-content-between align-items-center">
                    <a href="#!" class="text-link contacts-link">
                      <!-- media -->
                      <div class="d-flex">
                        <div class="avatar avatar-md ">
                          <img src="../assets/images/avatar/avatar-8.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <!-- media body -->
                        <div class=" ms-2">
                          <h5 class="mb-0">User Name</h5>
                          <p class="mb-0 text-muted fs-6">Content Writer
                          </p>
                        </div>
                      </div>
                    </a>
                    <div>
                      <a href="#!" class="btn btn-secondary btn-sm">Add</a>
                    </div>
                  </div>


                </li>
                <!-- chat item -->
                <li class="py-2 ">

                  <div class="d-flex justify-content-between align-items-center">
                    <a href="#!" class="text-link contacts-link">
                      <!-- media -->
                      <div class="d-flex">
                        <div class="avatar avatar-md ">
                          <img src="../assets/images/avatar/avatar-3.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <!-- media body -->
                        <div class=" ms-2">
                          <h5 class="mb-0">Rosalee Roberts</h5>
                          <p class="mb-0 text-muted fs-6">SEO Specialist
                          </p>
                        </div>
                      </div>
                    </a>
                    <div>
                      <a href="#!" class="btn btn-secondary btn-sm">Add</a>
                    </div>
                  </div>


                </li>
                <!-- chat item -->
                <li class="py-2 ">

                  <div class="d-flex justify-content-between align-items-center">
                    <a href="#!" class="text-link contacts-link">
                      <!-- media -->
                      <div class="d-flex">
                        <div class="avatar avatar-md ">
                          <img src="../assets/images/avatar/avatar-12.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <!-- media body -->
                        <div class=" ms-2">
                          <h5 class="mb-0">Lauren Wilson</h5>
                          <p class="mb-0 text-muted fs-6">Front End Developer
                          </p>
                        </div>
                      </div>
                    </a>
                    <div>
                      <a href="#!" class="btn btn-secondary btn-sm">Add</a>
                    </div>
                  </div>


                </li>
                <!-- chat item -->
                <li class="py-2 ">

                  <div class="d-flex justify-content-between align-items-center">
                    <a href="#!" class="text-link contacts-link">
                      <!-- media -->
                      <div class="d-flex">
                        <div class="avatar avatar-md ">
                          <img src="../assets/images/avatar/avatar-14.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <!-- media body -->
                        <div class=" ms-2">
                          <h5 class="mb-0">User Name</h5>
                          <p class="mb-0 text-muted fs-6">Content Writer
                          </p>
                        </div>
                      </div>
                    </a>
                    <div>
                      <a href="#!" class="btn btn-secondary btn-sm">Add</a>
                    </div>
                  </div>


                </li>
                <!-- chat item -->
                <li class="py-2 ">

                  <div class="d-flex justify-content-between align-items-center">
                    <a href="#!" class="text-link contacts-link">
                      <!-- media -->
                      <div class="d-flex">
                        <div class="avatar avatar-md ">
                          <img src="../assets/images/avatar/avatar-15.jpg" alt="Image" class="rounded-circle">
                        </div>
                        <!-- media body -->
                        <div class=" ms-2">
                          <h5 class="mb-0">Rosalee Roberts</h5>
                          <p class="mb-0 text-muted fs-6">SEO Specialist
                          </p>
                        </div>
                      </div>
                    </a>
                    <div>
                      <a href="#!" class="btn btn-secondary btn-sm">Add</a>
                    </div>
                  </div>


                </li>



              </ul>
              <div class="text-end mt-4  mb-2  ">
                <a href="#!" class="btn btn-primary ">+ Invite</a>
                <a href="#!" class="btn btn-light bg-gray-400 ms-2 ">Close</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Scripts -->


    @@include("../partials/scripts.html")
    <script src="@@webRoot/node_modules/apexcharts/dist/apexcharts.min.js"></script>
    <script src="@@webRoot/assets/js/vendors/chart.js"></script>
       <!-- popper js -->
   <script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
   <!-- tippy js -->
   <script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
 <script src="@@webRoot/assets/js/vendors/tooltip.js"></script>
</body>

</html>