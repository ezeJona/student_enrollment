<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
    <title>Activity - Admin Dashboard Template</title>
  </head>

  <body>
    <main id="main-wrapper" class="main-wrapper">
      @@include("../partials/header.html")
       <!-- navbar vertical  -->

       @@include('../partials/navbar-vertical.html', {
        "page": "profileActivity",
        "page_group": "profilePages" })



       <!-- page content  -->
      <div id="app-content">

        <!-- Container fluid -->
        <div class="app-content-area">
          <div class="container-fluid">

          <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
              <!-- Bg -->
              <div class="pt-20 rounded-top" style="background:url(../assets/images/background/profile-cover.jpg)no-repeat; background-size: cover;">
              </div>
              <div class="card rounded-bottom smooth-shadow-sm">
                <div class="d-flex align-items-center justify-content-between
                  pt-4 pb-6 px-4">
                  <!-- avatar -->
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
                    <!-- content -->
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
                    <!-- button -->
                    <a href="profile-edit.html" class="btn btn-outline-primary
                      d-none d-md-block">Edit Profile</a>
                  </div>
                </div>
                <!-- nav -->
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
                    <a class="nav-link" href="profile-followers.html"> Followers </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="profile-activity.html">Activity</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- page content -->
          <div class="py-6">
            <div class="row">
              <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                <!-- row -->
                <div class="row align-items-center mb-6">
                  <div class="col-lg-6 col-md-12 col-12">
                    <!-- form -->
                    <form>
                      <input type="search" class="form-control"
                        placeholder="Search Your Activity">
                    </form>
                  </div>
                  <div class="col-lg-6 col-md-12 col-12 d-flex justify-content-end">
                    <!-- form -->
                  <div >
                    <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip" data-template="filterOne">
                      <i  data-feather="filter" class="icon-xs" ></i>
                      <div class="d-none" id="filterOne">
                        <span>Filter</span>
                      </div>
                    </a>
                    <a href="#!" class="btn btn-outline-secondary ms-3">
                      Delete
                    </a>
                  </div>

                  </div>
                </div>
                <!-- hr -->

                <div class="mb-8">
                  <!-- card -->
                  <div class="card bg-gray-300 shadow-none mb-4">
                    <!-- card body -->
                    <div class="card-body">
                      <div class="d-flex justify-content-between
                        align-items-center">
                        <div>
                          <h5 class="mb-0">Today</h5>
                        </div>
                        <div>
                          <a href="#!" class="text-muted"><i
                              data-feather="trash-2" class="icon-xs"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- card -->
                  <div class="card">
                    <!-- list group -->
                    <ul class="list-group list-group-flush">
                      <!-- list group item -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                                  <!-- img -->
                            <div>
                              <img src="../assets/images/avatar/avatar-11.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                                  <!-- content -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium"><a href="#!">You </a>created
                                a task for Development in <a href="#!">Front End
                                  Developer Team</a></p>
                            </div>
                          </div>
                          <div>
                                  <!-- dropdown -->
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                id="dropdownactivityOne" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i  class="icon-xs" data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityOne">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                            <!-- list group item -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                                  <!-- avatar -->
                            <div>
                              <img src="../assets/images/avatar/avatar-2.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                                  <!-- content -->
                            <div class="ms-3">
                              <p class="mb-0 font-weight-medium
                                text-dark">Watched a youtube video on Next Js
                                Development.</p>
                            </div>
                          </div>
                          <div>
                                  <!-- dropdown -->
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                id="dropdownactivityTwo" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i  class="icon-xs" data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityTwo">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                            <!-- list group item -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                                  <!-- avatar -->
                            <div>
                              <img src="../assets/images/avatar/avatar-3.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                                  <!-- content -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium">Commented on Front End
                                Development project of <a href="#!">DashUI</a>.
                              </p>
                            </div>
                          </div>
                          <div>
                                  <!-- dropdown -->
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                id="dropdownactivityThree"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i  class="icon-xs" data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityThree">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                            <!-- list group item -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                                  <!-- avatar -->
                            <div>
                              <img src="../assets/images/avatar/avatar-4.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                                  <!-- content -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium">Added new team member <a
                                  href="#!">Jhon Doe</a> UI/UX Design Team.
                              </p>
                            </div>
                          </div>
                          <div>
                                  <!-- dropdown -->
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                id="dropdownactivityFour" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i  class="icon-xs" data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityFour">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                            <!-- list group item -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                                  <!-- avatar -->
                            <div>
                              <img src="../assets/images/avatar/avatar-5.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                                  <!-- content -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium">Moved all upcoming changes
                                in Review Coulmn for testing.
                              </p>
                            </div>
                          </div>
                          <div>
                                  <!-- dropdown -->
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                id="dropdownactivityFive" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i  class="icon-xs" data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityFive">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                            <!-- list group item -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                                  <!-- avatar -->
                            <div>
                              <img src="../assets/images/avatar/avatar-6.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                                  <!-- content -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium">Created a Task for UI/UX
                                designer and share a Figma Setup project.
                              </p>
                            </div>
                          </div>
                          <div>
                                  <!-- dropdown -->
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                id="dropdownactivitySix" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i  class="icon-xs" data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivitySix">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="mb-8">
                        <!-- card -->
                  <div class="card bg-gray-300 shadow-none mb-4">
                          <!-- card body -->
                    <div class="card-body">
                      <div class="d-flex justify-content-between
                        align-items-center">
                        <div>
                          <h5 class="mb-0">Yesterday</h5>
                        </div>
                        <div>
                          <a href="#!" class="text-muted"><i
                              data-feather="trash-2" class="icon-xs"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                        <!-- card -->
                  <div class="card">
                          <!-- list group -->
                    <ul class="list-group list-group-flush">
                          <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                             <!-- avatar  -->
                            <div>
                              <img src="../assets/images/avatar/avatar-7.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                             <!-- content  -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium"><a href="#!">You </a>created
                                a task for Development in <a href="#!">Front End
                                  Developer Team</a></p>
                            </div>
                          </div>
                          <div>
                             <!-- dropdown  -->
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                id="dropdownactivitySeven"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i  class="icon-xs" data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivitySeven">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                       <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                             <!-- avatar  -->
                            <div>
                              <img src="../assets/images/avatar/avatar-8.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                             <!-- content  -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium text-dark">Watched a youtube video on
                                Next Js Development.</p>
                            </div>
                          </div>
                          <div>
                             <!-- dropdown  -->
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                id="dropdownactivityEight"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i  class="icon-xs" data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityEight">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                       <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                             <!-- avatar  -->
                            <div>
                              <img src="../assets/images/avatar/avatar-9.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                             <!-- content  -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium">Commented on Front End
                                Development project of <a href="#!">DashUI</a>.
                              </p>
                            </div>
                          </div>
                          <div>
                             <!-- dropdown  -->
                            <div class="dropdown dropstart">
                              <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                id="dropdownactivityNine" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i  class="icon-xs" data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityNine">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="mb-8">
                   <!-- card  -->
                  <div class="card bg-gray-300 shadow-none mb-4">
                     <!-- card body  -->
                    <div class="card-body">
                      <div class="d-flex justify-content-between
                        align-items-center">
                        <div>
                          <h5 class="mb-0">20 April 2023</h5>
                        </div>
                        <div>
                          <a href="#!" class="text-muted"><i
                              data-feather="trash-2" class="icon-xs"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- card  -->
                  <div class="card">
                     <!-- list group  -->
                    <ul class="list-group list-group-flush">
                       <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex align-items-center">
                          <div>
                             <!-- avatar  -->
                            <div class="icon-shape icon-xl border rounded-3
                              bg-primary border-primary">
                              <img src="../assets/images/svg/brand-logo-5.svg"
                                alt="Image">
                            </div>
                          </div>
                           <!-- content  -->
                          <div class="ms-3 lh-1">
                            <h5 class="mb-1">DashUI Design Project</h5>
                            <p class="mb-0  ">2:58 PM</p>
                          </div>
                        </div>
                      </li>
                       <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                             <!-- avatar  -->
                            <div>
                              <img src="../assets/images/avatar/avatar-11.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                             <!-- content -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium"><a href="#!">You</a> created
                                a task for Development in <a href="#!">Front End
                                  Developer Team</a></p>
                            </div>
                          </div>
                          <div>
                             <!-- dropdown  -->
                            <div class="dropdown dropstart">
                              <a href="#!" id="dropdownactivityTen"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="btn btn-ghost btn-sm btn-icon rounded-circle">
                                <i  class="icon-xs"
                                  data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityTen">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                       <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                             <!-- avatar  -->
                            <div>
                              <img src="../assets/images/avatar/avatar-10.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                             <!-- content  -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium">Commented on Front End
                                Development project of <a href="#!">DashUI</a>.
                              </p>
                            </div>
                          </div>
                          <div>
                             <!-- dropdown  -->
                            <div class="dropdown dropstart">
                              <a href="#!" id="dropdownactivityEleven"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="btn btn-ghost btn-sm btn-icon rounded-circle">
                                <i  class="icon-xs"
                                  data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityEleven">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                       <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                             <!-- avatar  -->
                            <div>
                              <img src="../assets/images/avatar/avatar-12.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                             <!-- content  -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium">Commented on Front End
                                Development project of <a href="#!">DashUI</a>.
                              </p>
                            </div>
                          </div>
                          <div>
                             <!-- dropdown  -->
                            <div class="dropdown dropstart">
                              <a href="#!" id="dropdownactivityTwelve"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="btn btn-ghost btn-sm btn-icon rounded-circle">
                                <i  class="icon-xs"
                                  data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityTwelve">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                             <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="py-2 text-center">
                             <!-- btn link  -->
                          <a href="#!" class="btn btn-primary">View more items
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="mb-8">
            <!-- card  -->
                  <div class="card">
                             <!-- list group -->
                    <ul class="list-group list-group-flush">
                             <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                            <div>
                             <!-- avatar  -->
                              <img src="../assets/images/avatar/avatar-11.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                             <!-- list group item  -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium"><a href="#!">You </a>created
                                a task for Development in <a href="#!">Front End
                                  Developer Team</a></p>
                            </div>
                          </div>
                          <div>
                             <!-- dropdown  -->
                            <div class="dropdown dropstart">
                              <a href="#!" id="dropdownactivityThirteen"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="btn btn-ghost btn-sm btn-icon rounded-circle">
                                <i  class="icon-xs"
                                  data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityThirteen">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                       <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                             <!-- avatar  -->
                            <div>
                              <img src="../assets/images/avatar/avatar-2.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                             <!-- content  -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium text-dark">Watched a youtube video on
                                Next Js Development.</p>
                            </div>
                          </div>
                          <div>
                             <!-- dropdown  -->
                            <div class="dropdown dropstart">
                              <a href="#!" id="dropdownactivityFourteen"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="btn btn-ghost btn-sm btn-icon rounded-circle">
                                <i  class="icon-xs"
                                  data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityFourteen">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                       <!-- list group item  -->
                      <li class="list-group-item p-3">
                        <div class="d-flex justify-content-between
                          align-items-center">
                          <div class="d-flex align-items-center">
                             <!-- avatar  -->
                            <div>
                              <img src="../assets/images/avatar/avatar-3.jpg"
                                alt="Image" class="avatar-sm rounded-circle">
                            </div>
                             <!-- content  -->
                            <div class="ms-3">
                              <p class="mb-0
                                font-weight-medium">Commented on Front End
                                Development project of <a href="#!">DashUI</a>.
                              </p>
                            </div>
                          </div>
                          <div>
                             <!-- dropdown  -->
                            <div class="dropdown dropstart">
                              <a href="#!" id="dropdownactivityFifteen"
                                data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="btn btn-ghost btn-sm btn-icon rounded-circle">
                                <i  class="icon-xs"
                                  data-feather="more-vertical"></i>
                              </a>
                              <div class="dropdown-menu"
                                aria-labelledby="dropdownactivityFifteen">
                                <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                                <a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                  here</a>
                              </div>
                            </div>
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
    </div>
  </main>
    <!-- Scripts -->

    @@include("../partials/scripts.html")
     <!-- popper js -->
  <script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
  <!-- tippy js -->
  <script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="@@webRoot/assets/js/vendors/tooltip.js"></script>
  </body>

</html>