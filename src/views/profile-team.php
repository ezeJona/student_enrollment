<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
    <title>Teams - Admin Dashboard Template</title>
  </head>

  <body>
    <main id="main-wrapper" class="main-wrapper">
      @@include("../partials/header.html")
      <!-- navabr vertical -->
      @@include('../partials/navbar-vertical.html', {
        "page": "profileTeam",
        "page_group": "profilePages" })


      <!-- page content -->
      <div id="app-content">

        <!-- Container fluid -->

          <div class="app-content-area">
            <div class="container-fluid">

          <div class="row align-items-center">
            <!-- col -->
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
                    <!-- avatar -->
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
                    <!-- text -->
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
                <!-- navs -->
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
                    <a class="nav-link active" href="profile-team.html">Team</a>
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
              <!-- Section Heading -->
              <div class="col-md-12 col-12 mb-4">
                <div class="d-flex justify-content-between
                  align-items-center">
                  <!-- Heading -->
                  <div class="mb-3 mb-lg-0">
                    <h3 class="mb-0">Team</h3>
                  </div>
                  <!-- icons -->
                  <div class="d-flex align-items-center">
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle">
                      <i  data-feather="settings" class="icon-xs"></i>
                    </a>
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle">
                      <i  data-feather="filter" class="icon-xs"></i>
                    </a>
                    <a href="#!" class="btn btn-primary ms-3">Create new Team</a>
                  </div>
                </div>

              </div>
              <div class="col-xl-3 col-lg-6 col-12 mb-5">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body text-center py-10">
                    <!-- icon -->
                    <div class="icon-shape icon-xxl bg-primary-soft
                      rounded-circle
                      text-center mb-4">
                      <i class="text-primary  " data-feather="codepen" ></i>
                    </div>
                    <!-- Title -->
                    <h4 class="mb-1">Front End Developer</h4>
                    <span >12 Team members</span>

                  </div>
                  <!-- Dropdown -->
                  <div class="text-end px-5 pt-0 pb-5">
                    <div class="dropdown dropstart">
                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                        id="dropdownMenuOne" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i  class="icon-xs" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu"
                        aria-labelledby="dropdownMenuOne">
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="eye-off"></i>Hide</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="settings"></i>Manage
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="layers"></i>Add
                          channel</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="user-plus"></i>Add
                          member</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="log-out"></i>Leave
                          the team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="edit-2"></i>Edit
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="link"></i>Get
                          link to team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="trash-2"></i>Delete
                          team</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-12 mb-5">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body text-center py-10">
                    <!-- icon -->
                    <div class="icon-shape icon-xxl bg-success-soft
                      rounded-circle
                      text-center mb-4">
                      <i class="text-success " data-feather="edit" ></i>
                    </div>
                    <!-- Title -->
                    <h4 class="mb-1">UX / UI Designer</h4>
                    <span >8 Team members</span>

                  </div>
                  <!-- Dropdown -->
                  <div class="text-end px-5 pt-0 pb-5">
                    <div class="dropdown dropstart">
                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                        id="dropdownMenuTwo" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i  class="icon-xs" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu"
                        aria-labelledby="dropdownMenuTwo">
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="eye-off"></i>Hide</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="settings"></i>Manage
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="layers"></i>Add
                          channel</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="user-plus"></i>Add
                          member</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="log-out"></i>Leave
                          the team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="edit-2"></i>Edit
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="link"></i>Get
                          link to team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="trash-2"></i>Delete
                          team</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-12 mb-5">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body text-center py-10">
                    <!-- icon -->
                    <div class="icon-shape icon-xxl bg-info-soft rounded-circle
                      text-center mb-4">
                      <i class="text-info " data-feather="box" ></i>
                    </div>
                    <!-- Title -->
                    <h4 class="mb-1">Full Stack Developer</h4>
                    <span >6 Team members</span>

                  </div>
                  <!-- Dropdown -->
                  <div class="text-end px-5 pt-0 pb-5">
                    <div class="dropdown dropstart">
                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                        id="dropdownMenuThree" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i  class="icon-xs" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu"
                        aria-labelledby="dropdownMenuThree">
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="eye-off"></i>Hide</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="settings"></i>Manage
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="layers"></i>Add
                          channel</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="user-plus"></i>Add
                          member</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="log-out"></i>Leave
                          the team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="edit-2"></i>Edit
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="link"></i>Get
                          link to team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="trash-2"></i>Delete
                          team</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-12 mb-5">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body text-center py-10">
                    <!-- icon -->
                    <div class="icon-shape icon-xxl bg-danger-soft
                      rounded-circle
                      text-center mb-4">
                      <i class="text-danger" data-feather="codesandbox" ></i>
                    </div>
                    <!-- Title -->
                    <h4 class="mb-1">Software Engineer</h4>
                    <span >4 Team members</span>
                  </div>
                  <!-- Dropdown -->
                  <div class="text-end px-5 pt-0 pb-5">
                    <div class="dropdown dropstart">
                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                        id="dropdownMenuFour" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i  class="icon-xs" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu"
                        aria-labelledby="dropdownMenuFour">
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="eye-off"></i>Hide</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="settings"></i>Manage
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="layers"></i>Add
                          channel</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="user-plus"></i>Add
                          member</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="log-out"></i>Leave
                          the team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="edit-2"></i>Edit
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="link"></i>Get
                          link to team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="trash-2"></i>Delete
                          team</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-12 mb-5">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body text-center py-10">
                    <!-- icon -->
                    <div class="icon-shape icon-xxl bg-warning-soft
                      rounded-circle
                      text-center mb-4">
                      <i class="text-warning " data-feather="users" ></i>
                    </div>
                    <!-- Title -->
                    <h4 class="mb-1">HR Management</h4>
                    <span >2 Team members</span>
                  </div>
                  <!-- Dropdown -->
                  <div class="text-end px-5 pt-0 pb-5">
                    <div class="dropdown dropstart">
                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                        id="dropdownMenuFive" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i  class="icon-xs" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu"
                        aria-labelledby="dropdownMenuFive">
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="eye-off"></i>Hide</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="settings"></i>Manage
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="layers"></i>Add
                          channel</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="user-plus"></i>Add
                          member</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="log-out"></i>Leave
                          the team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="edit-2"></i>Edit
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="link"></i>Get
                          link to team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="trash-2"></i>Delete
                          team</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-12 mb-5">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body text-center py-10">
                    <!-- icon -->
                    <div class="icon-shape icon-xxl bg-secondary-soft
                      rounded-circle
                      text-center mb-4">
                      <i class="text-secondary " data-feather="code" ></i>
                    </div>
                    <!-- Title -->
                    <h4 class="mb-1">Accounting Member</h4>
                    <span >5 Team members</span>
                  </div>
                  <!-- Dropdown -->
                  <div class="text-end px-5 pt-0 pb-5">
                    <div class="dropdown dropstart">
                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                        id="dropdownMenuSix" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i  class="icon-xs" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu"
                        aria-labelledby="dropdownMenuSix">
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="eye-off"></i>Hide</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="settings"></i>Manage
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="layers"></i>Add
                          channel</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="user-plus"></i>Add
                          member</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="log-out"></i>Leave
                          the team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="edit-2"></i>Edit
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="link"></i>Get
                          link to team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="trash-2"></i>Delete
                          team</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-12 mb-5">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body text-center py-10">
                    <!-- icon -->
                    <div class="icon-shape icon-xxl bg-success-soft
                      rounded-circle
                      text-center mb-4">
                      <i class="text-success " data-feather="compass" ></i>
                    </div>
                    <!-- Title -->
                    <h4 class="mb-1">UX / UI Designer</h4>
                    <span >6 Team members</span>

                  </div>
                  <!-- Dropdown -->
                  <div class="text-end px-5 pt-0 pb-5">
                    <div class="dropdown dropstart">
                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                        id="dropdownMenuSeven" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i  class="icon-xs" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu"
                        aria-labelledby="dropdownMenuSeven">
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="eye-off"></i>Hide</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="settings"></i>Manage
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="layers"></i>Add
                          channel</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="user-plus"></i>Add
                          member</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="log-out"></i>Leave
                          the team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="edit-2"></i>Edit
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="link"></i>Get
                          link to team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="trash-2"></i>Delete
                          team</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-12 mb-5">
                <!-- card -->
                <div class="card">
                  <!-- card body -->
                  <div class="card-body text-center py-10">
                    <!-- icon -->
                    <div class="icon-shape icon-xxl bg-primary-soft
                      rounded-circle
                      text-center mb-4">
                      <i class="text-primary " data-feather="crosshair" ></i>
                    </div>
                    <!-- Title -->
                    <h4 class="mb-1">Front End Developer</h4>
                    <span >4 Team members</span>
                  </div>
                  <!-- Dropdown -->
                  <div class="text-end px-5 pt-0 pb-5">
                    <div class="dropdown dropstart">
                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                        id="dropdownMenuEight" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i  class="icon-xs" data-feather="more-horizontal"></i>
                      </a>
                      <div class="dropdown-menu"
                        aria-labelledby="dropdownMenuEight">
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="eye-off"></i>Hide</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="settings"></i>Manage
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="layers"></i>Add
                          channel</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "
                            data-feather="user-plus"></i>Add
                          member</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="log-out"></i>Leave
                          the team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="edit-2"></i>Edit
                          team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="link"></i>Get
                          link to team</a>
                        <a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2
                            dropdown-item-icon "  data-feather="trash-2"></i>Delete
                          team</a>
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