<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Project Team | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <!-- Wrapper -->
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
      <!-- navbar vertical -->
      @@include('../partials/navbar-vertical.html', {

      "page_group": "project",
      "page_group_second": "projectSingle",
      "page": "team"
      })


    <!-- Page Content -->
    <div id="app-content">
      <div class="app-content-area">
        <div class="container-fluid">
          <!-- Container fluid -->
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
                        <span id="two" class="d-none">
                          <span>Gali Linear</span>
                        </span>
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle
                          imgtooltip" data-template="three">
                        <span id="three" class="d-none">
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
                      <a class="nav-link " href="project-budget.html">Budget</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link " href="project-files.html">Files</a>
                    </li>
                    <li class="nav-item mx-3">
                      <a class="nav-link active" href="project-team.html">Team</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="row">
          <!-- search  -->
          <div class="col-xxl-2 col-lg-3 col-md-12 col-12 mb-5">
            <form>
              <input type="search" class="form-control" placeholder="Search member">
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <!-- card  -->
            <div class="card mb-2">
              <!-- card body  -->
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="avatar avatar-md">
                      <img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="rounded-circle">
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Jitu Chauhan</a></h4>
                      <p class="mb-0 text-muted">Product Manager</p>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">85</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">67</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownOne"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownOne">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <!-- card  -->
            <div class="card mb-2">
              <!-- card body  -->
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <!-- avatar  -->
                    <div class="avatar avatar-md">
                      <img src="../assets/images/avatar/avatar-2.jpg" alt="Image" class="rounded-circle">
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Anita Parmar</a></h4>
                      <p class="mb-0 text-muted">UX Designer</p>
                    </div>
                  </div>

                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">85</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">67</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone1">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone1" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video1">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video1" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <!-- dropdown  -->
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownTwo"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownTwo">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <!-- card  -->
            <div class="card mb-2">
              <!-- card body  -->
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="avatar avatar-md
                      avatar-warning">
                      <span class="avatar-initials
                        rounded-circle fs-4">
                        FC</span>
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Felicia Cordell</a>
                      </h4>
                      <p class="mb-0 text-muted">Front End Developer</p>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">123</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">98</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone2">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone2" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video2">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video2" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <!-- dropdown  -->
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownThree"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownThree">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <!-- card  -->
            <div class="card mb-2">
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="avatar avatar-md">
                      <img src="../assets/images/avatar/avatar-4.jpg" alt="Image" class="rounded-circle">
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Carl Britton</a></h4>
                      <p class="mb-0 text-muted">Full Stack Developer</p>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">47</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">44</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone3">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone3" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video3">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video3" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownFour"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownFour">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-2">
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="avatar avatar-md">
                      <img src="../assets/images/avatar/avatar-5.jpg" alt="Image" class="rounded-circle">
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Katherine Wadley</a></h4>
                      <p class="mb-0 text-muted">HR Manager</p>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">23</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">20</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone4">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone4" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video4">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video4" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownFive"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownFive">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-2">
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="avatar avatar-md">
                      <img src="../assets/images/avatar/avatar-6.jpg" alt="Image" class="rounded-circle">
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Kbrian Dobbins</a></h4>
                      <p class="mb-0 text-muted">UI Designer</p>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">21</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">20</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone5">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone5" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video5">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video5" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownSix"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownSix">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-2">
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="avatar avatar-md">
                      <img src="../assets/images/avatar/avatar-7.jpg" alt="Image" class="rounded-circle">
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Felicia Cordell</a></h4>
                      <p class="mb-0 text-muted">UI Designer</p>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">34</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">30</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone6">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone6" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video6">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video6" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownSeven"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownSeven">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-2">
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="avatar avatar-md">
                      <img src="../assets/images/avatar/avatar-8.jpg" alt="Image" class="rounded-circle">
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Rosalie Hutton</a></h4>
                      <p class="mb-0 text-muted">Full Stack Developer</p>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">56</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">45</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone7">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone7" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video7">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video7" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownEight"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownEight">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-2">
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="avatar avatar-md">
                      <img src="../assets/images/avatar/avatar-9.jpg" alt="Image" class="rounded-circle">
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Rmichael Marshall</a></h4>
                      <p class="mb-0 text-muted">Product Manager</p>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">67</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">8</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone8">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone8" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video8">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video8" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownNine"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownNine">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-2">
              <div class="card-body">
                <div class="row d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center col-lg-5 col-md-5 col-12 mb-4 mb-md-0">
                    <div class="avatar avatar-md
                      avatar-info">
                      <span class="avatar-initials
                        rounded-circle fs-4">

                        CN</span>
                    </div>
                    <div class="ms-3">
                      <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Claire Nonnors</a></h4>
                      <p class="mb-0 text-muted">Digital Marketing
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-3">
                    <h5 class="mb-1">85</h5>
                    <span>task</span>
                  </div>
                  <div class="col-lg-1 col-md-2 col-4">
                    <h5 class="mb-1">67</h5>
                    <span>Complete</span>
                  </div>
                  <div class=" col-lg-5 col-md-3 text-end col-5">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="phone9">
                      <i data-feather="phone-call" class="icon-xs"></i>
                      <!-- text -->
                      <div id="phone9" class="d-none">
                        <span>Voice Call </span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle
                      texttooltip" data-template="video9">
                      <i data-feather="video" class="icon-xs"></i>
                      <!-- text -->
                      <div id="video9" class="d-none">
                        <span>Video Call </span>
                      </div>
                    </a>
                    <span class="dropdown ">
                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#!" role="button" id="DropdownTen"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-horizontal" class="icon-xs"></i>
                      </a>
                      <span class="dropdown-menu" aria-labelledby="DropdownTen">

                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="trash-2"></i>Remove</a>
                        <a class="dropdown-item" href="#!"><i class="
                            dropdown-item-icon" data-feather="edit"></i>Edit</a>
                      </span>
                    </span>
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
   <!-- popper js -->
   <script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
   <!-- tippy js -->
   <script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
 <script src="@@webRoot/assets/js/vendors/tooltip.js"></script>
</body>

</html>