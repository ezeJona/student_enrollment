<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
    <title>Files - Admin Dashboard Template</title>
  </head>

  <body>
    <main id="main-wrapper" class="main-wrapper">
      @@include("../partials/header.html")
       <!-- navbar vertical -->

       @@include('../partials/navbar-vertical.html', {
        "page": "profileFiles",
        "page_group": "profilePages" })


     <!-- Page content -->
      <div id="app-content">

        <!-- Container fluid -->
        <div class="app-content-area">
          <div class="container-fluid">

          <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
              <!-- Bg -->
              <div class="pt-20 rounded-top" style="background:
                url(../assets/images/background/profile-cover.jpg)
                no-repeat;
                background-size: cover;">
              </div>
               <!-- text -->
              <div class="card rounded-bottom smooth-shadow-sm ">
                <div class="d-flex align-items-center
                  justify-content-between pt-4 pb-6 px-4">
                  <div class="d-flex align-items-center">
                    <div class="avatar-xxl avatar-indicators
                      avatar-online me-2 position-relative
                      d-flex justify-content-end
                      align-items-end mt-n10">
                       <!-- avatar -->
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
                        <a href="#!"
                          class="text-decoration-none"
                          >
                        </a>
                      </h2>
                      <p class="mb-0 d-block">@imjituchauhan</p>
                    </div>
                  </div>
                  <div>
                    <a href="profile-edit.html" class="btn
                      btn-outline-primary d-none
                      d-md-block">Edit Profile</a>
                  </div>
                </div>
                 <!-- nav -->
                <ul class="nav nav-lt-tab px-4" id="pills-tab"
                  role="tablist">
                  <li class="nav-item">
                    <a class="nav-link " href="profile-overview.html">Overview</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="profile-project.html">Project</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" href="profile-files.html">Files</a>
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
           <!-- content -->
          <div class="py-6">
            <div class="row">
              <div class="col-md-12 col-12">
                <!-- card -->
                <div class="card mb-5">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="row justify-content-between
                      align-items-center">
                      <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0">
                        <!-- icon -->
                        <div>
                          <i class="bi
                            bi-file-earmark-spreadsheet
                            h2 text-muted"></i>
                        </div>
                        <div class="ms-3">
                          <!-- heading -->
                          <a href="#!">
                            <h5 class="mb-1">Admin-Dashboard-Design.excl</h5>
                          </a>
                          <!-- text -->
                          <p class="mb-0
                            ">Uploaded
                            by <a href="#!">Jitu
                              Chauhan </a></p>
                        </div>
                      </div>
                      <div class="col">
                        <!-- text -->
                        <span >213Kb</span>
                      </div>
                      <div class="col">
                        <!-- date and time -->
                        <span > 12
                          June, 2023 04:15 pm</span>
                      </div>
                      <div class="col-auto">
                        <!-- dropdown -->
                        <div class="dropdown dropstart">
                          <a href="#!"
                            id="dropdownProjectOne"
                            data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-xs"
                              data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownProjectOne">
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="external-link"></i>Move</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="clipboard"></i>Copy</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="download"></i>Download</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="trash-2"></i>Delete</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="edit"></i>Rename</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="link"></i>Get
                              link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card -->
                <div class="card mb-5">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="row justify-content-between
                      align-items-center">
                      <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0">
                        <!-- icon -->
                        <div>
                          <i class="bi
                            bi-file-earmark-image h2
                            text-muted"></i>
                        </div>
                        <div class="ms-3">
                          <!-- heading -->
                          <a href="#!">
                            <h5 class="mb-1">Admin-Dashboard-Design.jpeg</h5>
                          </a>
                          <!-- text -->
                          <p class="mb-0
                            ">Uploaded
                            by <a href="#!">Jitu
                              Chauhan </a> on 17
                            Dec, 2023 06:39 am</p>
                        </div>
                      </div>
                      <div class="col">
                        <!-- text -->
                        <span >213Kb</span>
                      </div>
                      <div class="col">
                        <!-- date and time -->
                        <span >30
                          May, 2023 01:15 pm</span>
                      </div>
                      <div class="col-auto">
                        <!-- dropdown -->
                        <div class="dropdown dropstart">
                          <a href="#!"

                            id="dropdownProjectTwo"
                            data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-xs"
                              data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownProjectTwo">
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="external-link"></i>Move</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="clipboard"></i>Copy</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="download"></i>Download</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="trash-2"></i>Delete</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="edit"></i>Rename</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="link"></i>Get
                              link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <img
                    src="../assets/images/blog/blog-img-4.jpg"
                    alt="Image" class="img-fluid rounded-bottom">
                </div>
                <!-- card -->
                <div class="card mb-5">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="row justify-content-between
                      align-items-center">
                      <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0">
                        <!-- icon -->
                        <div>
                          <i class="bi
                            bi-file-earmark-word h2
                            text-muted"></i>
                        </div>
                        <div class="ms-3">
                          <!-- heading -->
                          <a href="#!">
                            <h5 class="mb-1">DashUI
                              Description.doc
                            </h5>
                          </a>
                          <!-- text -->
                          <p class="mb-0
                            ">Uploaded
                            by <a href="#!">Jitu
                              Chauhan </a> on 17
                            Dec, 2023 06:39 am</p>
                        </div>
                      </div>
                      <div class="col">
                        <!-- text -->
                        <span >213Kb</span>
                      </div>
                      <div class="col">
                        <!-- date and time -->
                        <span > 12
                          May, 2023 01:15 pm</span>
                      </div>
                      <div class="col-auto">
                        <!-- dropdown -->
                        <div class="dropdown dropstart">
                          <a href="#!"

                            id="dropdownProjectThree"
                            data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-xs"
                              data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownProjectThree">
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="external-link"></i>Move</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="clipboard"></i>Copy</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="download"></i>Download</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="trash-2"></i>Delete</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="edit"></i>Rename</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="link"></i>Get
                              link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card -->
                <div class="card mb-5">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="row justify-content-between
                      align-items-center">
                      <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0">
                        <!-- icon -->
                        <div>
                          <i class="bi bi-file-excel
                            h2 text-muted"></i>
                        </div>
                        <div class="ms-3">
                          <!-- heading -->
                          <a href="#!">
                            <h5 class="mb-1">Earning-from-DashUI.xlsx
                            </h5>
                          </a>
                          <!-- text -->
                          <p class="mb-0
                            ">Uploaded
                            by <a href="#!">anne
                              brewers </a> on 17
                            Dec, 2023 06:39 am</p>
                        </div>
                      </div>
                      <div class="col">
                        <!-- text -->
                        <span >213Kb</span>
                      </div>
                      <div class="col">
                        <!-- date and time -->
                        <span > 12
                          May, 2023 08:15 pm</span>
                      </div>
                      <div class="col-auto">
                        <!-- dropdown -->
                        <div class="dropdown dropstart">
                          <a href="#!"

                            id="dropdownProjectFour"
                            data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-xs"
                              data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownProjectFour">
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="external-link"></i>Move</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="clipboard"></i>Copy</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="download"></i>Download</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="trash-2"></i>Delete</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="edit"></i>Rename</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="link"></i>Get
                              link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card -->
                <div class="card mb-5">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="row justify-content-between
                      align-items-center">
                      <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0">
                        <!-- icon -->
                        <div>
                          <i class="bi bi-file-ppt h2
                            text-muted"></i>
                        </div>
                        <div class="ms-3">
                          <!-- heading -->
                          <a href="#!">
                            <h5 class="mb-1">DashUI-Marketing-Process.ppt
                            </h5>
                          </a>
                          <!-- text -->
                          <p class="mb-0
                            ">Uploaded
                            by <a href="#!">Richard
                              Christmas</a> on 17
                            Dec, 2023 06:39 am</p>
                        </div>
                      </div>
                      <div class="col">
                        <!-- text -->
                        <span >213mb</span>
                      </div>
                      <div class="col">
                        <!-- date and time -->
                        <span >12
                          May, 2023 02:15 pm</span>
                      </div>
                      <div class="col-auto">
                        <!-- dropdown -->
                        <div class="dropdown dropstart">
                          <a href="#!"

                            id="dropdownProjectFive"
                            data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-xs"
                              data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownProjectFive">
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="external-link"></i>Move</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="clipboard"></i>Copy</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="download"></i>Download</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="trash-2"></i>Delete</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="edit"></i>Rename</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="link"></i>Get
                              link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card -->
                <div class="card mb-5">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="row justify-content-between
                      align-items-center">
                      <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0">
                        <!-- icon -->
                        <div>
                          <i class="bi bi-file-text h2
                            text-muted"></i>
                        </div>
                        <div class="ms-3">
                          <!-- heading -->
                          <a href="#!">
                            <h5 class="mb-1">DashUI-Marketing-Process.txt
                            </h5>
                          </a>
                          <!-- text -->
                          <p class="mb-0
                            ">Uploaded
                            by <a href="#!">Jitu
                              Chauhan </a> on 17
                            Dec, 2023 06:39 am</p>
                        </div>
                      </div>
                      <div class="col">
                        <!-- text -->
                        <span >213mb</span>
                      </div>
                      <div class="col">
                        <!-- date and time -->
                        <span > 12
                          May, 2023 01:15 pm</span>
                      </div>
                      <div class="col-auto">
                        <!-- dropdown -->
                        <div class="dropdown dropstart">
                          <a href="#!"

                            id="dropdownProjectSix"
                            data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-xs"
                              data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownProjectSix">
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="external-link"></i>Move</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="clipboard"></i>Copy</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="download"></i>Download</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="trash-2"></i>Delete</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="edit"></i>Rename</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="link"></i>Get
                              link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- card -->
                <div class="card mb-5">
                  <!-- card body -->
                  <div class="card-body">
                    <div class="row justify-content-between
                      align-items-center">
                      <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0">
                        <!-- icon -->
                        <div>
                          <i class="bi
                            bi-file-earmark-slides-fill
                            h2 text-muted"></i>
                        </div>
                        <div class="ms-3">
                          <!-- heading -->
                          <a href="#!">
                            <h5 class="mb-1">DashUI-promo-trailer-template.mov
                            </h5>
                          </a>
                          <!-- text -->
                          <p class="mb-0
                            ">Uploaded
                            by <a href="#!">Nicholas
                              binder</a> on 17
                            Dec, 2023 06:39 am</p>
                        </div>
                      </div>
                      <div class="col">
                        <!-- text -->
                        <span >213mb</span>
                      </div>
                      <div class="col">
                        <!-- date and time -->
                        <span > 22
                          April, 2023 03:15 pm</span>
                      </div>
                      <div class="col-auto">
                        <!-- dropdown -->
                        <div class="dropdown dropstart">
                          <a href="#!"

                            id="dropdownProjectSeven"
                            data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="icon-xs"
                              data-feather="more-vertical"></i>
                          </a>
                          <div class="dropdown-menu"
                            aria-labelledby="dropdownProjectSeven">
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="external-link"></i>Move</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="clipboard"></i>Copy</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="download"></i>Download</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="trash-2"></i>Delete</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="edit"></i>Rename</a>
                            <a class="dropdown-item
                              d-flex
                              align-items-center"
                              href="#!"><i
                                class="me-2 dropdown-item-icon icon-xs"
                                data-feather="link"></i>Get
                              link</a>
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