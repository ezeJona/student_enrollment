<!DOCTYPE html>
<html lang="en">

<head>

  @@include("../partials/head.html")
  <title>Project Overview | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <!-- Wrapper -->
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")

      <!-- navbar vertical -->
      @@include('../partials/navbar-vertical.html', {

      "page_group": "project",
      "page_group_second": "projectSingle",
      "page": "overview"
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
                          <small class="mb-0 ">Paul Haney</small>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle
                        imgtooltip" data-template="two">
                        <span id="two" class="d-none">
                          <small class="mb-0 ">Gali Linear</small>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle
                        imgtooltip" data-template="three">
                        <span id="three" class="d-none">
                          <small class="mb-0 ">Mary Holler</small>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle
                        imgtooltip" data-template="four">
                        <span id="four" class="d-none">
                          <small class="mb-0 ">Lio Nordal</small>
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
                      <a class="nav-link active " href="project-overview.html">Overview</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link " href="project-task.html">Task</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link " href="project-budget.html">Budget</a>
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
            <div class="col-md-12 col-xl-8 col-12">
              <div class="row">
                <div class="col-12 mb-5">
                  <div class="card">
                    <div class="card-header ">
                      <div class="d-flex justify-content-between
                    align-items-center">
                        <div>
                          <h4 class="mb-0">Summary</h4>
                        </div>
                        <!-- dropdown  -->
                        <div>
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <i data-feather="more-vertical" class="icon-xs"></i>
                            </a>
                            <span class="dropdown-menu">

                              <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Another
                                action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Something
                                else
                                here</a>
                            </span>
                          </span>
                        </div>
                      </div>


                    </div>
                    <div class="card-body">
                      <p>Give a high-level overview of the product / project you re working on, its goals,
                        etc..Elaborate on the target
                        audience of your project/product, link out to additional resources. <br> <br>Vivamus pretium
                        laoreet massa eu euismod. Nunc accumsan id odio sed luctus. Suspendisse a lacus sed ex
                        consequat interdum quis non eros. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Debitis labore nam fuga sapiente vel iste animiicta ab at placeat sint. </p>

                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">
                          <div class="d-flex justify-content-between
                            align-items-center">
                            <div class="d-flex align-items-center">

                              <div>
                                <h5 class="mb-0 ">Start Date</h5>
                              </div>
                            </div>
                            <div>
                              <div>
                                <p class="text-dark mb-0
                                    ">3 Oct, 2023</p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="d-flex justify-content-between
                            align-items-center">
                            <div class="d-flex align-items-center">

                              <div>
                                <h5 class="mb-0 ">Due Date</h5>
                              </div>
                            </div>
                            <div>
                              <div>
                                <p class="text-dark mb-0
                                    ">15 Jan, 2023</p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item  px-0">
                          <div class="d-flex justify-content-between
                        align-items-center">
                            <div class="d-flex align-items-center">

                              <div>
                                <h5 class="mb-0 ">Estimate
                                  Time</h5>
                              </div>
                            </div>
                            <div>
                              <div>
                                <p class="text-dark mb-0
                                  ">12</p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0 pb-0">
                          <div class="d-flex
                          justify-content-between
                          align-items-center">
                            <div class="d-flex
                            align-items-center">

                              <div>
                                <h5 class="mb-0 ">Cost</h5>
                              </div>
                            </div>
                            <div>
                              <div>
                                <p class="text-dark mb-0
                                  ">$18,000</p>
                              </div>
                            </div>
                          </div>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-5">
                  <!-- card -->
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h4 class="mb-0">Budget </h4>
                      <a href="#!" class="btn btn-primary btn-sm">View Details</a>

                    </div>
                    <!-- card body -->

                    <!-- row -->
                    <div class="row">

                      <!-- col -->
                      <div class="col-lg-4 col-md-12 col-12">
                        <div class="d-flex align-items-center justify-content-between p-4">
                          <div>
                            <h2 class="h1  mb-0">$52,000</h2>
                            <p class="mb-0">Total </p>

                          </div>
                          <div class="ms-3">
                            <div class="icon-shape icon-lg bg-primary-soft text-primary rounded-circle text-primary">
                              <i data-feather="dollar-sign" class="icon-sm"></i>
                            </div>

                          </div>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="col-lg-4 col-md-12 col-12 border-start-md">
                        <div class="d-flex align-items-center justify-content-between p-4">
                          <div>
                            <h2 class="h1  mb-0">$43,230</h2>
                            <p class="mb-0">Remaining</p>

                          </div>
                          <div class="ms-3">
                            <div class="icon-shape icon-lg bg-danger-soft text-danger rounded-circle">
                              <i data-feather="shopping-cart" class="icon-sm"></i>
                            </div>

                          </div>
                        </div>

                      </div>
                      <!-- col -->
                      <div class="col-lg-4 col-md-12 col-12 border-start-md">
                        <div class="d-flex align-items-center justify-content-between p-4">
                          <div>
                            <h2 class="h1  mb-0">$8,770
                            </h2>
                            <p class="mb-0">Over Target</p>

                          </div>
                          <div class="ms-3">
                            <div class="icon-shape icon-lg bg-success-soft text-success rounded-circle">
                              <i data-feather="pie-chart" class="icon-sm"></i>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
                <div class="col-md-12 mb-5">
                  <!-- card -->
                  <div class="card">
                    <!-- card body -->

                    <div class="card-header">
                      <h4 class="mb-0">Upcoming Deadlines
                      </h4>

                    </div>
                    <!-- table -->
                    <div class="card-body">
                      <div class="table-responsive overflow-y-hidden table-card">
                        <table class="table mb-0 text-nowrap table-centered">
                          <thead class="table-light">
                            <tr>
                              <th>Member</th>
                              <th>Task</th>
                              <th>Deadline </th>
                              <th>Workload</th>

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="avatar avatar-sm">
                                    <a href="#!"> <img src="../assets/images/avatar/avatar-2.jpg" alt="Image"
                                        class="rounded-circle"> </a></div>
                                  <div class="ms-2">
                                    <h5 class="mb-0"><a href="#!" class="text-inherit">Eleanor Pena</a> </h5>
                                  </div>
                                </div>
                              </td>
                              <td>
                                Design a Dash UI Figma
                              </td>
                              <td>
                                30 Aug, 2023
                              </td>
                              <td>
                                <div class="d-flex align-items-center">

                                  <div class="progress flex-auto" style="height: 6px;">
                                    <div class="progress-bar bg-success " role="progressbar" style="width: 62%;"
                                      aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                  </div>
                                  <div class="ms-2"> <span>62%</span></div>
                                </div>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="avatar avatar-sm">
                                    <a href="#!"><img src="../assets/images/avatar/avatar-3.jpg" alt="Image"
                                        class="rounded-circle"></a> </div>
                                  <div class="ms-2">
                                    <h5 class="mb-0"><a href="#!" class="text-inherit">Marvin McKinney</a></h5>
                                  </div>
                                </div>
                              </td>
                              <td>
                                Dash UI Webpack Workflow
                              </td>
                              <td>
                                24 Sept, 2023
                              </td>
                              <td>
                                <div class="d-flex align-items-center">

                                  <div class="progress flex-auto" style="height: 6px;">
                                    <div class="progress-bar bg-success " role="progressbar" style="width: 45%;"
                                      aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                  </div>
                                  <div class="ms-2"> <span>45%</span></div>
                                </div>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="avatar avatar-sm">
                                    <a href="#!"> <img src="../assets/images/avatar/avatar-4.jpg" alt="Image"
                                        class="rounded-circle"> </a></div>
                                  <div class="ms-2">
                                    <h5 class="mb-0"> <a href="#!" class="text-inherit">Wade Warren</a></h5>
                                  </div>
                                </div>
                              </td>
                              <td>
                                Dash UI React version
                              </td>
                              <td>
                                30 Sept, 2023
                              </td>
                              <td>
                                <div class="d-flex align-items-center">

                                  <div class="progress flex-auto" style="height: 6px;">
                                    <div class="progress-bar bg-success " role="progressbar" style="width: 80%;"
                                      aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                  </div>
                                  <div class="ms-2"> <span>80%</span></div>
                                </div>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="avatar avatar-sm">
                                    <a href="#!"> <img src="../assets/images/avatar/avatar-5.jpg" alt="Image"
                                        class="rounded-circle"> </a></div>
                                  <div class="ms-2">
                                    <h5 class="mb-0"><a href="#!" class="text-inherit"> Courtney Henry</a></h5>
                                  </div>
                                </div>
                              </td>
                              <td>
                                Dash UI Documents Improve
                              </td>
                              <td>
                                20 Dec, 2023
                              </td>
                              <td>
                                <div class="d-flex align-items-center">

                                  <div class="progress flex-auto" style="height: 6px;">
                                    <div class="progress-bar bg-success " role="progressbar" style="width: 10%;"
                                      aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                  </div>
                                  <div class="ms-2"> <span>10%</span></div>
                                </div>
                              </td>

                            </tr>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="avatar avatar-sm">
                                    <a href="#!"><img src="../assets/images/avatar/avatar-6.jpg" alt="Image"
                                        class="rounded-circle"></a> </div>
                                  <div class="ms-2">
                                    <h5 class="mb-0"><a href="#!" class="text-inherit">Brooklyn Simmons</a></h5>
                                  </div>
                                </div>
                              </td>
                              <td>
                                Ecommerce Design Dash UI
                              </td>
                              <td>
                                25 Jan, 2023
                              </td>
                              <td>
                                <div class="d-flex align-items-center">

                                  <div class="progress flex-auto" style="height: 6px;">
                                    <div class="progress-bar bg-success " role="progressbar" style="width: 8%;"
                                      aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                  </div>
                                  <div class="ms-2"> <span>8%</span></div>
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
            <div class="col-md-12 col-xl-4 col-12">
              <!-- card  -->
              <div class="card mb-5 bg-primary ">
                <!-- card body  -->
                <div class="card-body">

                  <h4 class="mb-0 text-white">Launch Date </h4>

                  <!-- dropdown  -->
                  <div class="d-flex justify-content-between align-items-center mt-8">
                    <div>
                      <h3 class="display-5 fw-bold text-white mb-1">121 Days</h3>
                      <p class="mb-0 text-white">15 December, Friday</p>
                    </div>
                    <div>
                      <i class="text-white icon-lg" data-feather="flag"></i>
                    </div>
                  </div>

                </div>

              </div>
              <!-- card  -->
              <div class="card mb-5 ">
                <!-- card body  -->
                <div class="card-header">
                  <h4 class=" mb-0 ">Overall Progress </h4>
                </div>
                <div class="card-body">



                  <div id="progressChart"></div>

                </div>
              </div>
              <div class="card">
                <!-- Card header -->
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div>
                    <h4 class="mb-0">Recent Activity
                    </h4>
                  </div>
                  <div><a href="#!" class="btn btn-primary btn-sm">View All</a></div>
                </div>
                <!-- Card body -->
                <div class="card-body">
                  <!-- List group -->
                  <ul class="list-group list-group-flush ">
                    <li class="list-group-item px-0 pt-0 border-0 pb-6">
                      <div class="row position-relative">
                        <div class="col-auto">
                          <div class="icon-shape icon-md bg-primary-soft text-primary rounded-circle">
                            <i data-feather="check" class="icon-xs"></i>
                          </div>
                        </div>
                        <div class="col ms-n2">
                          <h4 class="mb-0 h5">Task Finished</h4>
                          <p class="mb-0 ">Paula finished figma task</p>

                        </div>
                        <div class="col-auto">
                          <span class="text-muted fs-6">2 mins ago</span>

                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0 pt-0 border-0 pb-6">
                      <div class="row position-relative">
                        <div class="col-auto">
                          <div class="icon-shape icon-md bg-primary-soft text-primary rounded-circle line-icon">
                            <i data-feather="message-square" class="icon-xs"></i>
                          </div>
                        </div>
                        <div class="col ms-n2">
                          <h4 class="mb-0 h5">New Comment</h4>
                          <p class="mb-0 ">Georg commented on task.</p>

                        </div>
                        <div class="col-auto">
                          <span class="text-muted fs-6">1 hour ago</span>

                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0 pt-0 border-0 pb-6">
                      <div class="row position-relative">
                        <div class="col-auto">
                          <div class="icon-shape icon-md bg-primary-soft text-primary rounded-circle line-icon">
                            <i data-feather="alert-triangle" class="icon-xs"></i>
                          </div>
                        </div>
                        <div class="col ms-n2">
                          <h4 class="mb-0 h5">Task Overdue</h4>
                          <p class="mb-0 ">Task <a href="#!"><u>status updatd for board</u></a>
                            is overdue.</p>

                        </div>
                        <div class="col-auto">
                          <span class="text-muted fs-6">1 day</span>

                        </div>
                      </div>
                    </li>
                    <li class="list-group-item px-0 pt-0 border-0">
                      <div class="row position-relative">
                        <div class="col-auto">
                          <div class="icon-shape icon-md bg-primary-soft text-primary rounded-circle line-icon">
                            <i data-feather="mail" class="icon-xs"></i>
                          </div>
                        </div>
                        <div class="col ms-n2">
                          <h4 class="mb-0 h5">Update Send to Client</h4>
                          <p class="mb-0 ">Jitu send email to update design
                            for client Dash UI.</p>

                        </div>
                        <div class="col-auto">
                          <span class="text-muted fs-6">1 day</span>

                        </div>
                      </div>
                    </li>
                  </ul>
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
                          imgtooltip" data-template="one1">
                  <span id="one1" class="d-none">
                    <span>Paul Haney</span>
                  </span>
                </span>
                <!-- avatar  -->
                <span class="avatar avatar-sm">
                  <img alt="avatar" src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle
                          imgtooltip" data-template="two2">
                  <span id="two2" class="d-none">
                    <span>Gali Linear</span>
                  </span>
                </span>
                <!-- avatar  -->
                <span class="avatar avatar-sm">
                  <img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle
                          imgtooltip" data-template="three3">
                  <span id="three3" class="d-none">
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