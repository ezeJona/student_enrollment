<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
    <title>Followers - Admin Dashboard Template</title>
  </head>

  <body>
    <main id="main-wrapper" class="main-wrapper">
      @@include("../partials/header.html")

      @@include('../partials/navbar-vertical.html', {
        "page": "profileFollowers",
        "page_group": "profilePages" })



      <div id="app-content">

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
                        <a href="#!" class="text-decoration-none"
                          >

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
                    <a class="nav-link" href="profile-project.html">Project</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="profile-files.html">Files</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profile-team.html">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="profile-followers.html"> Followers </a>
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
              <div class="col-lg-4 col-12">
                <!-- card -->
                <div class="card mb-5 rounded-3">
                  <div>
                    <img src="../assets/images/background/profile-cover-1.jpg"
                      alt="Image" class="img-fluid rounded-top">
                  </div>
                  <!-- avatar -->
                  <div class="avatar avatar-xl mt-n7 ms-4">
                    <img src="../assets/images/avatar/avatar-11.jpg" alt="Image"
                      class="rounded-circle border-4
                      border-white-color-40">
                  </div>
                  <!-- card body -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="mb-1">Karina Clark</h4>
                    <p >UX Desginer</p>
                    <div>
                      <!-- Dropdown -->
                      <div class="d-flex justify-content-between
                        align-items-center">
                        <a href="#!" class="btn btn-outline-primary">Follow</a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            id="dropdownMenuOne" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownMenuOne">
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="file-text"></i>Report</a>
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="slash"></i>Block</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <!-- card -->
                <div class="card mb-5 rounded-3">
                  <div>
                    <img src="../assets/images/background/profile-cover-2.jpg"
                      alt="Image" class="img-fluid rounded-top">
                  </div>
                  <!-- avatar -->
                  <div class="avatar avatar-xl mt-n7 ms-4">
                    <img src="../assets/images/avatar/avatar-2.jpg" alt="Image"
                      class="rounded-circle border-4
                      border-white-color-40">
                  </div>
                  <!-- card body -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="mb-1">Dianna Smiley</h4>
                    <p >Full Stack Developer</p>
                    <div>
                      <!-- Dropdown -->
                      <div class="d-flex justify-content-between
                        align-items-center">
                        <a href="#!" class="btn btn-outline-secondary">Following</a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            id="dropdownMenuTwo" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownMenuTwo">
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="file-text"></i>Report</a>
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="slash"></i>Block</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <!-- card -->
                <div class="card mb-5 rounded-3">
                  <div>
                    <img src="../assets/images/background/profile-cover-3.jpg"
                      alt="Image" class="img-fluid rounded-top">
                  </div>
                  <!-- avatar -->
                  <div class="avatar avatar-xl mt-n7 ms-4">
                    <img src="../assets/images/avatar/avatar-4.jpg" alt="Image"
                      class="rounded-circle border-4
                      border-white-color-40">
                  </div>
                  <!-- card body -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="mb-1">Anne Brewer</h4>
                    <p >Content Marketing Managers</p>
                    <div>
                      <!-- Dropdown -->
                      <div class="d-flex justify-content-between
                        align-items-center">
                        <a href="#!" class="btn btn-outline-primary">Follow</a>
                        <div class="dropdown dropstart">
                          <a href="#!" id="dropdownMenuThree" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownMenuThree">
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="file-text"></i>Report</a>
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="slash"></i>Block</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <!-- card -->
                <div class="card mb-5 rounded-3">
                  <div>
                    <img src="../assets/images/background/profile-cover-1.jpg"
                      alt="Image" class="img-fluid rounded-top">
                  </div>
                  <!-- avatar -->
                  <div class="avatar avatar-xl mt-n7 ms-4">
                    <img src="../assets/images/avatar/avatar-9.jpg" alt="Image"
                      class="rounded-circle border-4
                      border-white-color-40">
                  </div>
                  <!-- card body -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="mb-1">Diane Baughman</h4>
                    <p >Senior UX Designer</p>
                    <div>
                      <!-- Dropdown -->
                      <div class="d-flex justify-content-between
                        align-items-center">
                        <a href="#!" class="btn btn-outline-primary">Follow</a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            id="dropdownMenuFour" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownMenuFour">
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="file-text"></i>Report</a>
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="slash"></i>Block</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <!-- card -->
                <div class="card mb-5 rounded-3">
                  <div>
                    <img src="../assets/images/background/profile-cover-3.jpg"
                      alt="Image" class="img-fluid rounded-top">
                  </div>
                  <!-- avatar -->
                  <div class="avatar avatar-xl mt-n7 ms-4">
                    <img src="../assets/images/avatar/avatar-3.jpg" alt="Image"
                      class="rounded-circle border-4
                      border-white-color-40">
                  </div>
                  <!-- card body -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="mb-1">Roland Thomas</h4>
                    <p >Front-End Enginee</p>
                    <div>
                      <!-- Dropdown -->
                      <div class="d-flex justify-content-between
                        align-items-center">
                        <a href="#!" class="btn btn-outline-secondary">Following</a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            id="dropdownMenuFive" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownMenuFive">
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="file-text"></i>Report</a>
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="slash"></i>Block</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <!-- card -->
                <div class="card mb-5 rounded-3">
                  <div>
                    <img src="../assets/images/background/profile-cover-1.jpg"
                      alt="Image" class="img-fluid rounded-top">
                  </div>
                  <!-- avatar -->
                  <div class="avatar avatar-xl mt-n7 ms-4">
                    <img src="../assets/images/avatar/avatar-5.jpg" alt="Image"
                      class="rounded-circle border-4
                      border-white-color-40">
                  </div>
                  <!-- card body -->
                  <div class="card-body">
                    <!-- Title -->
                    <h4 class="mb-1">Joshua George</h4>
                    <p >UX Desginer</p>
                    <div>
                      <!-- Dropdown -->
                      <div class="d-flex justify-content-between
                        align-items-center">
                        <a href="#!" class="btn btn-outline-primary">Follow</a>
                        <div class="dropdown dropstart">
                          <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            id="dropdownMenuSix" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="icon-xs" data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownMenuSix">
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="file-text"></i>Report</a>
                            <a class="dropdown-item d-flex align-items-center"
                              href="#!"><i class="me-2 icon-xxs
                                dropdown-item-icon" data-feather="slash"></i>Block</a>
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
        </div>
      </div>
    </main>






    <!-- Scripts -->
    @@include("../partials/scripts.html")
  </body>

</html>