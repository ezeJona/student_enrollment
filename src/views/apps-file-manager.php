<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>File Manager | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', {
    "page": "appFileManager"

    })

    <!-- page content -->
    <div id="app-content">

      <!-- Container fluid -->
      <div class="app-content-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class=" mb-5">
                <h3 class="mb-0 ">File Manager</h3>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
              <!-- Card -->
              <div>
                <!-- Card body -->
                <div class="row ">
                  <div class="col-xxl-2 col-lg-4 ">
                    <div class="position-relative ">
                      <div class="card">
                        <div class="card-body">
                          <nav class="navbar-mail vh-100">
                            <ul class="navbar-nav flex-column w-100">

                              <li class="d-grid mb-4 dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  Create New
                                </button>
                                <ul class="dropdown-menu w-100">
                                  <li><a class="dropdown-item d-flex align-items-center" href="#!"><i
                                        class="me-2 icon-xs" data-feather="folder-plus"></i>Folder</a></li>
                                  <li><a class="dropdown-item d-flex align-items-center" href="#!"><i
                                        class=" me-2 icon-xs " data-feather="file-plus"></i>Files</a></li>
                                  <li><a class="dropdown-item d-flex align-items-center" href="#!"><i
                                        class=" me-2 icon-xs " data-feather="file"></i>Document</a></li>
                                  <li><a class="dropdown-item d-flex align-items-center" href="#!"><i
                                        class=" me-2 icon-xs " data-feather="upload"></i>Choose File</a></li>
                                </ul>

                              </li>


                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#!">
                                  <i class=" me-2 mdi mdi-folder-outline text-muted"></i>My Files

                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#!">
                                  <i class=" me-2 mdi mdi-google-drive text-muted"></i>Google Drive

                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#!">
                                  <i class=" me-2 mdi mdi-dropbox text-muted"></i>Dropbox

                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#!">
                                  <i class=" me-2 mdi mdi-share-variant-outline text-muted"></i>Shared with me

                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#!">
                                  <i class=" me-2 mdi mdi-clock-outline text-muted"></i>Recent

                                </a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#!">
                                  <i class=" me-2 mdi mdi-star-outline text-muted"></i> Starred

                                </a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#!">
                                  <i class=" me-2 mdi mdi-trash-can-outline text-muted"></i> Deleted Files

                                </a>
                              </li>


                            </ul>






                          </nav>
                        </div>
                      </div>
                      <div class="position-absolute bottom-0 p-4 w-100">
                        <span class="badge badge-secondary-soft">Free</span>
                        <div class="mt-3 mb-3">
                          <span>Storage</span>
                          <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-label="Example 1px high"
                              style="width: 54%;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                        <span>8.45 GB (56%) of 15 GB used</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-10 col-lg-8 col-12 ">
                    <div class="mt-6 mt-lg-0">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-xl-3 col-lg-5 col-9">

                          <form action="#">


                            <div class="input-group ">
                              <input class="form-control rounded-3" type="search" value="" id="searchInput"
                                placeholder="Search">
                              <span class="input-group-append">
                                <button class="btn  ms-n10 rounded-0 rounded-end" type="button">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search text-dark">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                  </svg>
                                </button>
                              </span>
                            </div>
                          </form>
                        </div>
                        <div class="col-xl-9 d-flex justify-content-end col-3">
                          <div>
                            <a href="#!" class="btn btn-ghost btn-icon btn-md rounded-circle texttooltip "
                              data-template="listTooltip">
                              <i data-feather="list" class="icon-xs"></i>
                              <div class="d-none" id="listTooltip">
                                <span>List</span>
                              </div>
                            </a>
                            <a href="#!" class="btn btn-ghost btn-icon btn-md rounded-circle  texttooltip "
                              data-template="gridTooltip">
                              <i data-feather="grid" class="icon-xs"></i>
                              <div class="d-none" id="gridTooltip">
                                <span>Grid</span>
                              </div>
                            </a>
                          </div>

                        </div>

                      </div>
                      <div class="mt-5 mb-6">
                        <h5 class="mb-5">Quick Access</h5>
                        <div class="row ">
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex">
                                  <img src="../assets/images/svg/file-1.svg" alt="Image">
                                  <div class="ms-3">
                                    <h5 class=" mb-0">DashUI Eearning Report</h5>
                                    <span class="fs-6 "><span class="me-2 text-dark">213Kb</span><span>17 Dec, 2023
                                        06:39 am</span></span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex">
                                  <img src="../assets/images/svg/file-3.svg" alt="Image">
                                  <div class="ms-3">
                                    <h5 class=" mb-0">Dash UI - Report</h5>
                                    <span class="fs-6 "><span class="me-2 text-dark">208Kb</span><span>18 Dec, 2023
                                        06:39 am</span></span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex">
                                  <img src="../assets/images/svg/file-4.svg" alt="Image">
                                  <div class="ms-3">
                                    <h5 class=" mb-0">Dash UI Illustrator Design</h5>
                                    <span class="fs-6 "><span class="me-2 text-dark">118Kb</span><span>19 Dec, 2023
                                        06:39 am</span></span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex">
                                  <img src="../assets/images/svg/file-2.svg" alt="Image">
                                  <div class="ms-3">
                                    <h5 class=" mb-0">DashUI Client Presentation</h5>
                                    <span class="fs-6 "><span class="me-2 text-dark">314Kb</span><span>19 Dec, 2023
                                        06:39 am</span></span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex">
                                  <img src="../assets/images/svg/file-5.svg" alt="Image">
                                  <div class="ms-3">
                                    <h5 class=" mb-0">DashUI Expenses Record</h5>
                                    <span class="fs-6 "><span class="me-2 text-dark">134Kb</span><span>21 Dec, 2023
                                        06:39 am</span></span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex">
                                  <img src="../assets/images/svg/file-6.svg" alt="Image">
                                  <div class="ms-3">
                                    <h5 class=" mb-0">Dash UI Figma Files</h5>
                                    <span class="fs-6 "><span class="me-2 text-dark">94Kb</span><span>21 Dec, 2023 06:39
                                        am</span></span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="mb-6">
                        <h5 class="mb-5">Folder</h5>
                        <div class="row ">
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex align-items-center">
                                  <i data-feather="folder"></i>
                                  <div class="ms-2">
                                    <h3 class="fs-5 mb-0">Figma Design</h3>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex align-items-center">
                                  <i data-feather="folder"></i>
                                  <div class="ms-2">
                                    <h3 class="fs-5 mb-0">JavaScript Fundamental</h3>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex align-items-center">
                                  <i data-feather="folder"></i>
                                  <div class="ms-2">
                                    <h3 class="fs-5 mb-0">Next Js Tutorial</h3>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="col-lg-6 col-xl-4">
                            <div class="card mb-4">
                              <div class="card-body">
                                <div class="d-flex align-items-center">
                                  <i data-feather="folder"></i>
                                  <div class="ms-2">
                                    <h3 class="fs-5 mb-0">Bootstrap Development</h3>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="card mb-4">
                        <div class="card-header">
                          <h4 class="mb-0">Recent Files</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive table-card">
                            <table class="table mb-0 text-nowrap table-centered">
                              <thead class="table-light">
                                <tr>
                                  <th>Name</th>
                                  <th>Last Modified</th>
                                  <th>Size</th>
                                  <th>Owner</th>
                                  <th>Members</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>

                                  <td>Webapp Design & Development</td>
                                  <td>Jan 03, 2023, 7:14 PM</td>
                                  <td>128 MB</td>
                                  <td>Anna Hunter</td>
                                  <td><img src="../assets/images/avatar/avatar-11.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                    <img src="../assets/images/avatar/avatar-2.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                    <img src="../assets/images/avatar/avatar-3.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                  </td>
                                  <td>
                                    <div class="dropdown">
                                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xs"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                            action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                            here</a></li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>
                                <tr>

                                  <td>Dashui-figma-design.zip</td>
                                  <td>Feb 13, 2023, 7:14 PM</td>
                                  <td>521 MB</td>
                                  <td>Michael Singh</td>
                                  <td><img src="../assets/images/avatar/avatar-4.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                    <img src="../assets/images/avatar/avatar-5.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                    <img src="../assets/images/avatar/avatar-6.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                  </td>
                                  <td>
                                    <div class="dropdown">
                                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xs"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                            action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                            here</a></li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>
                                <tr>

                                  <td>Dahsui-Annual-Report.pdf</td>
                                  <td>Dec 18, 2023, 7:14 PM</td>
                                  <td>7.2 MB</td>
                                  <td>Aaron Leverett</td>
                                  <td><img src="../assets/images/avatar/avatar-7.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">

                                    <img src="../assets/images/avatar/avatar-8.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                  </td>
                                  <td>
                                    <div class="dropdown">
                                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xs"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                            action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                            here</a></li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>
                                <tr>

                                  <td>Framer template</td>
                                  <td>Nov 25, 2023, 7:14 PM</td>
                                  <td>54.2 MB</td>
                                  <td>Martin Hurtado</td>
                                  <td><img src="../assets/images/avatar/avatar-9.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">

                                  </td>
                                  <td>
                                    <div class="dropdown">
                                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xs"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                            action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                            here</a></li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>
                                <tr>

                                  <td>Documentation.docs</td>
                                  <td>Feb 9, 2023, 7:14 PM</td>
                                  <td>8.3 MB</td>
                                  <td>Frank Conroy</td>
                                  <td><img src="../assets/images/avatar/avatar-10.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                    <img src="../assets/images/avatar/avatar-9.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                    <img src="../assets/images/avatar/avatar-5.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                  </td>
                                  <td>
                                    <div class="dropdown">
                                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xs"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                            action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                            here</a></li>
                                      </ul>
                                    </div>
                                  </td>
                                </tr>
                                <tr>

                                  <td class="border-bottom-0">Dashui Sale Report.exl</td>
                                  <td class="border-bottom-0">Feb 9, 2023, 7:14 PM</td>
                                  <td class="border-bottom-0">31 MB</td>
                                  <td class="border-bottom-0">Edna Knipp</td>
                                  <td class="border-bottom-0"><img src="../assets/images/avatar/avatar-6.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">

                                    <img src="../assets/images/avatar/avatar-7.jpg"
                                      class="avatar avatar-xs rounded-circle" alt="">
                                  </td>
                                  <td class="border-bottom-0">
                                    <div class="dropdown">
                                      <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-vertical" class="icon-xs"></i>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                            action</a></li>
                                        <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                            here</a></li>
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
          </div>

        </div>
      </div>

    </div>


  </main>

  <!-- Script -->

  @@include("../partials/scripts.html")
  <!-- popper js -->
  <script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
  <!-- tippy js -->
  <script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
  <script src="@@webRoot/assets/js/vendors/tooltip.js"></script>
</body>

</html>