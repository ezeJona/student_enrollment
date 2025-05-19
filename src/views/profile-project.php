<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Projects - Admin Dashboard Template</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
    <!-- navbar vertical -->
    @@include('../partials/navbar-vertical.html', {
    "page": "profileProject",
    "page_group": "profilePages" })

    <!-- page content -->



      <div id="app-content">
      <!-- Container fluid -->
      <!-- Container fluid -->
      <div class="app-content-area">
        <div class="container-fluid">


          <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
              <!-- Bg -->
              <div class="pt-20 rounded-top" style="background:
                url(../assets/images/background/profile-cover.jpg) no-repeat;
                background-size: cover;">
              </div>
              <div class="card rounded-bottom smooth-shadow-sm">

                <div class="d-flex align-items-center justify-content-between
                  pt-4 pb-6 px-4">
                  <div class="d-flex align-items-center">
                    <div class="avatar-xxl avatar-indicators avatar-online me-2
                      position-relative d-flex justify-content-end
                      align-items-end mt-n10">
                      <img src="../assets/images/avatar/avatar-11.jpg"
                        class="avatar-xxl
                        rounded-circle border border-2 "
                        alt="Image">
                      <a href="#!" class="position-absolute top-0 right-0 me-2"
                      >
                        <img src="../assets/images/svg/checked-mark.svg" alt="Image"
                          class="icon-sm">
                      </a>
                    </div>
                    <div class="lh-1">
                      <h2 class="mb-0">Jitu Chauhan
                        <a href="#!" class="text-decoration-none">

                        </a>
                      </h2>
                      <p class="mb-0 d-block">@imjituchauhan</p>
                    </div>
                  </div>
                  <div>
                    <a href="profile-edit.html" class="btn btn-outline-primary
                      d-none d-md-block">Edit Profile</a>
                  </div>

                </div>
                <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link " href="profile-overview.html">Overview</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="profile-project.html">Project</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="profile-files.html">Files</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profile-team.html">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profile-followers.html"> Followers </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profile-activity.html">Activity</a>
                  </li>
                </ul>

              </div>

            </div>
          </div>

          <div class="py-6">
            <div class="row">
              <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading-->
                    <div class="d-flex align-items-center
                      justify-content-between">
                      <div class="d-flex align-items-center
                        justify-content-between">
                        <!-- icon-->
                        <div>
                          <img src="../assets/images/svg/brand-logo-1.svg" alt="Image">
                        </div>
                        <!-- text-->
                        <div class="ms-3">

                          <h4 class="mb-0"><a href="#!" class="text-inherit">File
                              Management App</a></h4>

                        </div>
                      </div>
                      <!-- dropdown-->
                      <div class="d-flex align-items-center">
                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"><i data-feather="star"
                            class="icon-xs"></i></a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownProjectOne"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                              here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- para-->
                    <div class="my-4">
                      <p class="mb-0">Web application design is an important
                        stage when building a web application...</p>
                    </div>
                    <!-- date and budget-->
                    <div class="row g-2 mb-4">
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12 mb-1 mb-lg-1
                        mb-xl-0">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span class="lh-1"><span class="me-1 text-muted">Due
                              Date:</span><span class="text-dark
                              font-weight-medium">10 Oct 2023</span></span>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span class="lh-1"><span class="me-1 text-muted">Budget:</span><span
                              class="text-dark font-weight-medium">$284,900.00</span></span>
                        </div>
                      </div>

                    </div>
                    <!-- progress -->
                    <div class="d-flex justify-content-between
                      align-items-center mb-6">
                      <div class="d-flex align-items-center">
                        <!-- avatar group -->
                        <div class="avatar-group">
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-11.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle">
                          </span>

                        </div>
                        <!-- text -->
                        <div class="ms-2">
                          <span class="text-muted ">+5 more</span>
                        </div>
                      </div>
                      <!-- text -->
                      <div>
                        <span class="badge badge-info-soft">In Progress</span>
                      </div>

                    </div>
                    <div>
                      <!-- progress bar -->
                      <div class="d-flex justify-content-between
                        align-items-center mb-1">
                        <!-- text -->
                        <div>
                          <h5>Progress</h5>
                        </div>


                        <!-- number text -->
                        <div>
                          <span class="text-dark">45%</span>
                        </div>

                      </div>
                      <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                  </div>
                  <!-- card footer -->
                  <div class="card-footer">
                    <span class="me-3 "><i class="align-middle icon-xs text-muted me-2
                        " data-feather="list"></i>10 Task</span>

                    <span class="me-3 "><i class="align-middle icon-xs text-muted me-2
                        " data-feather="message-square"></i>2k Comments</span>
                    <span><i class="align-middle icon-xs text-muted me-2
                        "  data-feather="folder"></i>30+ Files</span>
                  </div>

                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading-->
                    <div class="d-flex align-items-center
                      justify-content-between">
                      <div class="d-flex align-items-center
                        justify-content-between">
                        <!-- icon-->
                        <div>
                          <img src="../assets/images/svg/brand-logo-2.svg" alt="Image">
                        </div>
                        <!-- text-->
                        <div class="ms-3">
                          <h4 class="mb-0"><a href="#!" class="text-inherit">3D
                              Character Modeling</a></h4>

                        </div>
                      </div>
                      <!-- dropdown-->
                      <div class="d-flex align-items-center">
                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"><i data-feather="star"
                            class="icon-xs"></i></a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownProjectTwo"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownProjectTwo">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                              here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- para-->
                    <div class="my-4">
                      <p class="mb-0">Aliquam maximus aliquam ven ices nec leo.
                        Etiam tristique maximus rblandit.</p>
                    </div>
                    <!-- date and budget-->
                    <div class="row g-2 mb-4">
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12 mb-1 mb-lg-1
                        mb-xl-0">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Due Date:</span><span
                              class="text-dark font-weight-medium">19 Nov 2023</span></span>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Budget:</span><span
                              class="text-dark font-weight-medium">$284,900.00</span></span>
                        </div>
                      </div>

                    </div>
                    <!-- progress -->
                    <div class="d-flex justify-content-between
                      align-items-center mb-6">
                      <div class="d-flex align-items-center">
                        <!-- avatar group -->
                        <div class="avatar-group">
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-5.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-6.jpg" class="rounded-circle">
                          </span>

                        </div>
                        <!-- text -->
                        <div class="ms-2">
                          <span class="text-muted ">+5 more</span>
                        </div>
                      </div>
                      <!-- text -->
                      <div>
                        <span class="badge badge-warning-soft">Hold</span>
                      </div>

                    </div>
                    <div>
                      <!-- progress bar -->
                      <div class="d-flex justify-content-between
                        align-items-center mb-1">
                        <!-- text -->
                        <div>
                          <h5>Progress</h5>
                        </div>


                        <!-- number text -->
                        <div>
                          <span class="text-dark">75%</span>
                        </div>

                      </div>
                      <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                  </div>
                  <!-- card footer -->
                  <div class="card-footer">
                    <span class="me-3 "><i class="text-muted me-2 icon-xs
                        " data-feather="list"></i>12 Task</span>

                    <span class="me-3 "><i class="text-muted me-2 icon-xs
                        " data-feather="message-square"></i>3k Comments</span>
                    <span><i class="text-muted me-2 icon-xs
                        " data-feather="folder"></i>15+ Files</span>
                  </div>

                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading-->
                    <div class="d-flex align-items-center
                      justify-content-between">
                      <div class="d-flex align-items-center
                        justify-content-between">
                        <!-- icon-->
                        <div>
                          <img src="../assets/images/svg/brand-logo-3.svg" alt="Image">
                        </div>
                        <!-- text-->
                        <div class="ms-3">
                          <h4 class="mb-0"><a href="#!" class="text-inherit">Slack
                              Team UI Design</a></h4>
                        </div>
                      </div>
                      <!-- dropdown-->
                      <div class="d-flex align-items-center">
                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"><i data-feather="star"
                            class="icon-xs"></i></a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownProjectThree"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownProjectThree">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                              here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- para-->
                    <div class="my-4">
                      <p class="mb-0">Pellentesque vitae elit vel elit efficitur
                        ultrices. ipsum primis in faucibus.</p>
                    </div>
                    <!-- date and budget-->
                    <div class="row g-2 mb-4">
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12 mb-1 mb-lg-1
                        mb-xl-0">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Due Date:</span><span
                              class="text-dark font-weight-medium">21 Jan 2023</span></span>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Budget:</span><span
                              class="text-dark font-weight-medium">$12,100</span></span>
                        </div>
                      </div>
                    </div>
                    <!-- progress -->
                    <div class="d-flex justify-content-between
                      align-items-center mb-6">
                      <div class="d-flex align-items-center">
                        <!-- avatar group -->
                        <div class="avatar-group">
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-7.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-8.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-9.jpg" class="rounded-circle">
                          </span>
                        </div>
                        <!-- text -->
                        <div class="ms-2">
                          <span class="text-muted ">+5 more</span>
                        </div>
                      </div>
                      <!-- text -->
                      <div>
                        <span class="badge badge-primary-soft">In Progress</span>
                      </div>

                    </div>
                    <div>
                      <!-- progress bar -->
                      <div class="d-flex justify-content-between
                        align-items-center mb-1">
                        <!-- text -->
                        <div>
                          <h5>Progress</h5>
                        </div>
                        <!-- number text -->
                        <div>
                          <span class="text-dark">15%</span>
                        </div>
                      </div>
                      <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 15%;" aria-valuenow="15"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <!-- card footer -->
                  <div class="card-footer">
                    <span class="me-3 "><i class="text-muted me-2 icon-xs
                        " data-feather="list"></i>18 Task</span>

                    <span class="me-3 "><i class="text-muted me-2 icon-xs
                        " data-feather="message-square"></i>1k Comments</span>
                    <span><i class="text-muted me-2 icon-xs
                        " data-feather="folder"></i>20+ Files</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5 mb-xxl-0">
                <!-- card -->
                <div class="card h-100">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading-->
                    <div class="d-flex align-items-center
                      justify-content-between">
                      <div class="d-flex align-items-center
                        justify-content-between">
                        <!-- icon-->
                        <div>
                          <img src="../assets/images/svg/brand-logo-4.svg" alt="Image">
                        </div>
                        <!-- text-->
                        <div class="ms-3">
                          <h4 class="mb-0"><a href="#!" class="text-inherit">Github
                              Event Design</a></h4>

                        </div>
                      </div>
                      <!-- dropdown-->
                      <div class="d-flex align-items-center">
                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"><i data-feather="star"
                            class="icon-xs"></i></a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownProjectFour"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownProjectFour">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                              here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- para-->
                    <div class="my-4">
                      <p class="mb-0">Maecenas urna sapien, porta in magna
                        itudin, venenaue, quis convallis lorem</p>
                    </div>
                    <!-- date and budget-->
                    <div class="row g-2 mb-4">
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12 mb-1 mb-lg-1
                        mb-xl-0">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Due Date:</span><span
                              class="text-dark font-weight-medium">10 Oct 2023</span></span>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Budget:</span><span
                              class="text-dark font-weight-medium">$9,000</span></span>
                        </div>
                      </div>
                    </div>
                    <!-- progress -->
                    <div class="d-flex justify-content-between
                      align-items-center mb-6">
                      <div class="d-flex align-items-center">
                        <!-- avatar group -->
                        <div class="avatar-group">
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-10.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-11.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-12.jpg" class="rounded-circle">
                          </span>

                        </div>
                        <!-- text -->
                        <div class="ms-2">
                          <span class="text-muted ">+5 more</span>
                        </div>
                      </div>
                      <!-- text -->
                      <div>
                        <span class="badge badge-primary-soft">In Progress</span>
                      </div>

                    </div>
                    <div>
                      <!-- progress bar -->
                      <div class="d-flex justify-content-between
                        align-items-center mb-1">
                        <!-- text -->
                        <div>
                          <h5>Progress</h5>
                        </div>


                        <!-- number text -->
                        <div>
                          <span class="text-dark">65%</span>
                        </div>
                      </div>
                      <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <!-- card footer -->
                  <div class="card-footer">
                    <span class="me-3 "><i class="text-muted me-2 icon-xs
                        " data-feather="list"></i>30 Task</span>

                    <span class="me-3 "><i class="text-muted me-2 icon-xs
                        " data-feather="message-square"></i>4k Comments</span>
                    <span><i class="text-muted me-2 icon-xs
                        " data-feather="folder"></i>10+ Files</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5 mb-xxl-0">
                <!-- card -->
                <div class="card h-100">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading-->
                    <div class="d-flex align-items-center
                      justify-content-between">
                      <div class="d-flex align-items-center
                        justify-content-between">
                        <!-- icon-->
                        <div>
                          <img src="../assets/images/svg/brand-logo-5.svg" alt="Image">
                        </div>
                        <!-- text-->
                        <div class="ms-3">
                          <h4 class="mb-0"><a href="#!" class="text-inherit">Webapp
                              Design System</a></h4>
                        </div>
                      </div>
                      <!-- dropdown-->
                      <div class="d-flex align-items-center">
                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"><i data-feather="star"
                            class="icon-xs"></i></a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownProjectFive"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownProjectFive">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                              here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- para-->
                    <div class="my-4">
                      <p class="mb-0">Mauris mattis elit efficitur mauris condi
                        mentum, sitfacilisis nibh pharetra.</p>
                    </div>
                    <!-- date and budget-->
                    <div class="row g-2 mb-4">
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12 mb-1 mb-lg-1
                        mb-xl-0">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Due Date:</span><span
                              class="text-dark font-weight-medium"> 19 Nov 2023</span></span>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Budget:</span><span
                              class="text-dark font-weight-medium">$4,900</span></span>
                        </div>
                      </div>

                    </div>
                    <!-- progress -->
                    <div class="d-flex justify-content-between
                      align-items-center mb-6">
                      <div class="d-flex align-items-center">
                        <!-- avatar group -->
                        <div class="avatar-group">
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-10.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-11.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-12.jpg" class="rounded-circle">
                          </span>
                        </div>
                        <!-- text -->
                        <div class="ms-2">
                          <span class="text-muted ">+5 more</span>
                        </div>
                      </div>
                      <!-- text -->
                      <div>
                        <span class="badge badge-danger-soft">In Risk</span>
                      </div>

                    </div>
                    <div>
                      <!-- progress bar -->
                      <div class="d-flex justify-content-between
                        align-items-center mb-1">
                        <!-- text -->
                        <div>
                          <h5>Progress</h5>
                        </div>

                        <!-- number text -->
                        <div>
                          <span class="text-dark">85%</span>
                        </div>
                      </div>
                      <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 85%;" aria-valuenow="85"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <!-- card footer -->
                  <div class="card-footer">
                    <span class="me-3 "><i class="text-muted me-2 icon-xs
                        " data-feather="list"></i>50 Task</span>

                    <span class="me-3 "><i class="text-muted me-2 icon-xs
                        " data-feather="message-square"></i>1k Comments</span>
                    <span><i class="text-muted me-2 icon-xs
                        " data-feather="folder"></i>30+ Files</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5 mb-xxl-0">
                <!-- card -->
                <div class="card h-100">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- heading-->
                    <div class="d-flex align-items-center
                      justify-content-between">
                      <div class="d-flex align-items-center
                        justify-content-between">
                        <!-- icon-->
                        <div>
                          <img src="../assets/images/svg/brand-logo-1.svg" alt="Image">
                        </div>
                        <!-- text-->
                        <div class="ms-3">
                          <h4 class="mb-0"><a href="#!" class="text-inherit">Chat
                              Application Design...
                            </a></h4>

                        </div>
                      </div>
                      <!-- dropdown-->
                      <div class="d-flex align-items-center">
                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"><i data-feather="star"
                            class="icon-xs"></i></a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownProjectSix"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownProjectSix">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                              here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- para-->
                    <div class="my-4">
                      <p class="mb-0">Aliquam erat volutpat. Sed eget ipsum
                        enim. Donec consequat commodo.</p>
                    </div>
                    <!-- date and budget-->
                    <div class="row g-2 mb-4">
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12 mb-1 mb-lg-1
                        mb-xl-0">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Due Date:</span><span
                              class="text-dark font-weight-medium"> 21 Apr 2020</span></span>
                        </div>
                      </div>
                      <!-- col -->
                      <div class="col-xl-6 col-lg-12 col-12">
                        <div class="border border-dashed rounded-3 p-2
                          text-center ">
                          <span><span class="me-1 text-muted">Budget:</span><span
                              class="text-dark font-weight-medium">$41,000</span></span>
                        </div>
                      </div>
                    </div>
                    <!-- progress -->
                    <div class="d-flex justify-content-between
                      align-items-center mb-6">
                      <div class="d-flex align-items-center">
                        <!-- avatar group -->
                        <div class="avatar-group">
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-13.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-14.jpg" class="rounded-circle">
                          </span>
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-15.jpg" class="rounded-circle">
                          </span>
                        </div>
                        <!-- text -->
                        <div class="ms-2">
                          <span class="text-muted ">+5 more</span>
                        </div>
                      </div>
                      <!-- text -->
                      <div>
                        <span class="badge badge-success-soft">Completed</span>
                      </div>
                    </div>
                    <div>
                      <!-- progress bar -->
                      <div class="d-flex justify-content-between
                        align-items-center mb-1">
                        <!-- text -->
                        <div>
                          <h5>Progress</h5>
                        </div>
                        <!-- number text -->
                        <div>
                          <span class="text-dark">100%</span>
                        </div>
                      </div>
                      <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <!-- card footer -->
                  <div class="card-footer">
                    <span class="me-3 "><i class="text-muted me-1 icon-xs
                        " data-feather="list"></i>50 Task</span>

                    <span class="me-3 "><i class="text-muted me-1 icon-xs
                        " data-feather="message-square"></i>1k Comments</span>
                    <span><i class="text-muted me-1 icon-xs
                        " data-feather="folder"></i>30+ Files</span>
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