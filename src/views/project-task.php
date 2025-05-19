<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Project Task | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <!-- Wrapper -->
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
      <!-- navbar vertical -->
      @@include('../partials/navbar-vertical.html', {

      "page_group": "project",
      "page_group_second": "projectSingle",
      "page": "task"
      })


    <!-- Page Content -->
    <div id="app-content">
      <div class="app-content-area">
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
                          imgtooltip" data-template="one1">
                        <span id="one1" class="d-none">
                          <span>Paul Haney</span>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle
                          imgtooltip" data-template="two2">
                        <span id="two2" class="d-none">
                          <span>Gali Linear</span>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle
                          imgtooltip" data-template="three3">
                        <span id="three3" class="d-none">
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
                      <a class="nav-link active" href="project-task.html">Task</a>
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
            <div class="col-md-6 col-xl-3 col-12 mb-5">
              <!-- card  -->
              <div class="card h-100 card-lift">
                <!-- card body  -->
                <div class="card-body">
                  <div class="d-flex justify-content-between
                    align-items-center">
                    <div>
                      <h4 class="mb-0">Task Summary</h4>
                    </div>
                    <!-- dropdown  -->
                    <div>
                      <span class="dropdown dropstart">
                        <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" id="DropdownSeven"
                          data-bs-toggle="dropdown" aria-expanded="false">
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
                  <!-- text center  -->
                  <div class=" mt-4">
                    <h3 class="display-4 fw-bold text-primary mb-0
                      ">50</h3>
                    <p class="mb-0">Total Task
                      Count</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 col-12 mb-5">
              <!-- card  -->
              <div class="card h-100 card-lift">
                <!-- card body  -->
                <div class="card-body">
                  <div class="d-flex justify-content-between
                    align-items-center">
                    <div>
                      <h4 class="mb-0">In Progress</h4>
                    </div>
                    <div>
                      <!-- dropdown  -->
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
                  <!-- text center  -->
                  <div class="mt-4">
                    <h3 class="display-4 fw-bold text-info mb-0
                      ">12</h3>
                    <p class="mb-0 "><span class="text-dark ">6</span> In Progress</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 col-12 mb-5">
              <!-- card  -->
              <div class="card h-100 card-lift">
                <!-- card body  -->
                <div class="card-body">
                  <div class="d-flex justify-content-between
                    align-items-center">
                    <div>
                      <h4 class="mb-0">Completed</h4>
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
                  <!-- text center  -->
                  <div class="mt-4">
                    <h3 class="display-4 fw-bold text-success mb-0
                      ">30</h3>
                    <p class="mb-0"><span class="text-dark ">8</span> Today Completed</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 col-12 mb-5">
              <!-- card  -->
              <div class="card h-100 card-lift">
                <!-- card body  -->
                <div class="card-body">
                  <div class="d-flex justify-content-between
                    align-items-center">
                    <div>
                      <h4 class="mb-0">Overdue </h4>
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
                  <!-- text center  -->
                  <div class="mt-4">
                    <h3 class="display-4 fw-bold text-danger mb-0
                      ">8</h3>
                    <p class="mb-0 "><span class="text-dark ">4</span> Yesterday</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- row  -->
          <div class="row">
            <div class="col-xl-8 col-md-12 col-12 mb-5">
              <!-- card  -->
              <div class="card">
                <!-- card body  -->
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div>
                    <h4 class="mb-0">Task Summary</h4>

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
                <div class="card-body">

                  <p class="mb-0">New vs. Closed</p>
                  <!-- chart  -->
                  <div id="taskSummary"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-12 col-12 mb-5">
              <!-- card  -->
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div>
                    <h4 class="mb-0 ">Task Completion Status</h4>
                  </div>
                  <div>
                    <!-- dropdown  -->
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
                <!-- card body  -->
                <div class="card-body">

                  <!-- chart  -->
                  <div id="taskStatus" class="d-flex
                    justify-content-center"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-12 mb-5 mb-xl-0">
              <!-- card  -->
              <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <div>
                    <h4 class="mb-0">Task by Sections</h4>
                  </div>
                  <div>
                    <!-- dropdown  -->
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
                <!-- card body  -->
                <div class="card-body">

                  <!-- chart  -->
                  <div id="taskSectionchart"></div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-12 mb-5 mb-xl-0">
              <!-- card  -->
              <div class="card h-100">
                <!-- card header  -->
                <div class="card-header">
                  <h4 class="mb-0">Upcoming task by Assignee</h4>
                </div>
                <!-- table  -->
                <div class="card-body">
                  <div class="table-responsive table-card">
                    <table class="table text-nowrap mb-0 table-centered">
                      <thead class="table-light">
                        <tr>
                          <th>Tasks</th>
                          <th>End
                            Date</th>
                          <th>Status</th>
                          <th>Progress</th>
                          <th>Assignee</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Design Wireframes</td>
                          <td>Set end date</td>
                          <td><span class="badge
                      badge-primary-soft">In
                              Review</span></td>
                          <td>
                            <div class="taskWireframeChart"></div>
                          </td>
                          <td><img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-xs
                      rounded-circle"></td>
                          <td> <span class="dropdown dropstart">
                              <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                            </span></td>
                        </tr>
                        <tr>
                          <td>Prototype design</td>
                          <td>Aug 15, 2023</td>
                          <td><span class="badge
                      badge-info-soft">In
                              Progress</span></td>
                          <td>
                            <div class="taskPrototypeChart"></div>
                          </td>
                          <td><img src="../assets/images/avatar/avatar-2.jpg" alt="Image" class="avatar avatar-xs
                      rounded-circle"></td>
                          <td> <span class="dropdown dropstart">
                              <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!"
                                data-bs-toggle="dropdown" aria-expanded="false">
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
                            </span></td>
                        </tr>
                        <tr>
                          <td>Content Writing</td>
                          <td>Aug 16, 2023</td>
                          <td><span class="badge
                      badge-danger-soft ">Cancel</span></td>
                          <td>
                            <div class="taskContentChart"></div>
                          <td><img src="../assets/images/avatar/avatar-3.jpg" alt="Image" class="avatar avatar-xs
                        rounded-circle"></td>
                          <td> <span class="dropdown dropstart">
                              <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i data-feather="more-vertical" class="icon-xs"></i>
                              </a>
                              <span class="dropdown-menu">

                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <a class="dropdown-item" href="#!">Something else
                                  here</a>
                              </span>
                            </span></td>
                        </tr>
                        <tr>
                          <td>Figma to
                            Bootstrap Conversion </td>
                          <td>Aug 18, 2023</td>
                          <td><span class="badge badge-primary-soft
                        ">In Review</span></td>
                          <td>
                            <div class="taskFigmaChart"></div>
                          </td>
                          <td><img src="../assets/images/avatar/avatar-5.jpg" alt="Image" class="avatar avatar-xs
                        rounded-circle"></td>
                          <td> <span class="dropdown dropstart">
                              <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i data-feather="more-vertical" class="icon-xs"></i>
                              </a>
                              <span class="dropdown-menu">

                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <a class="dropdown-item" href="#!">Something else
                                  here</a>
                              </span>
                            </span></td>
                        </tr>
                        <tr>
                          <td>User Interface
                            Design </td>
                          <td>Aug 18, 2023</td>
                          <td><span class="badge badge-primary-soft
                        text-primary">In Review</span></td>
                          <td>
                            <div class="taskInterfaceChart"></div>
                          </td>
                          <td><img src="../assets/images/avatar/avatar-6.jpg" alt="Image" class="avatar avatar-xs
                        rounded-circle"></td>
                          <td> <span class="dropdown dropstart">
                              <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i data-feather="more-vertical" class="icon-xs"></i>
                              </a>
                              <span class="dropdown-menu">

                                <a class="dropdown-item" href="#!">Action</a>
                                <a class="dropdown-item" href="#!">Another action</a>
                                <a class="dropdown-item" href="#!">Something else
                                  here</a>
                              </span>
                            </span></td>
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
                  <span id="one" class="d-none">
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