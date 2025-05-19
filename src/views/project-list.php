<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
     <!-- dropzone -->
  <link href="@@webRoot/node_modules/dropzone/dist/dropzone.css" rel="stylesheet" >
    <title>Project List | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
  </head>

  <body>
    <!-- Wrapper -->
    <main id="main-wrapper" class="main-wrapper">
      @@include("../partials/header.html")

      <!-- navbar vertical -->
      @@include('../partials/navbar-vertical.html', {
      "page": "list",
      "page_group": "project"
      })


      <!-- Page Content -->
      <div id="app-content">

        <!-- Container fluid -->
        <div class="app-content-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="mb-5">
                <h3 class="mb-0 ">Project List</h3>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row justify-content-md-between mb-4 mb-xl-0 ">
            <!-- col -->
            <div class="col-xl-2 col-lg-4 col-md-6 col-12">
              <!-- search -->
              <div class="mb-lg-4 mb-2">
                <input type="search" class="form-control" placeholder="Search by project name" >
              </div>
            </div>
            <div class="col-xxl-1 col-lg-2 col-md-6 col-12 ">
                  <!-- Custom select -->
                  <select class="form-select" >
                    <option value="">Filter</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Pending">Pending</option>
                    <option value="Modified">Modified</option>
                    <option value="Finished">Finished</option>
                    <option value="Cancel">Cancel</option>

                  </select>

            </div>
          </div>
          <!-- row -->
          <div class="row">
            <!-- col -->
            <div class="col-12">
              <!-- card -->
              <div class="card">
                <!-- table -->
                <div class="table-responsive">
                  <table class="table mb-0 text-nowrap table-centered">
                    <thead class="table-light">
                      <tr>
                        <th>Project Name</th>
                        <th>Dates</th>
                        <th>Budget</th>
                        <th>Task Progress</th>
                        <th>Status</th>
                        <th>Team</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="icon-shape icon-lg rounded-3 border ">
                             <i class="icon-sm text-muted" data-feather="layout"  ></i>
                            </div>
                            <div class="ms-3">
                              <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Web Application Design</a></h4>
                            </div>
                          </div>
                        </td>
                        <td>
                          01 Jan, 2023
                        </td>
                        <td>
                          $22,000
                        </td>

                        <td>
                          <div class="d-flex align-items-center">
                            <div class="me-2"> <span>80%</span></div>
                            <div class="progress flex-auto" style="height: 6px;">
                              <div class="progress-bar bg-primary " role="progressbar" style="width: 80%;"
                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">

                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge badge-info-soft text-dark-info">In Progress</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-11.jpg"
                                class="rounded-circle imgtooltip" data-template="one">
                              <span id="one" class="d-none">
                                <span>Paul Haney</span>
                              </span>
                            </span>
                            <span class="avatar avatar-sm avatar-primary imgtooltip"  data-template="textThree">
                              <span class="avatar-initials rounded-circle " >

                                DU</span>

                                <span id="textThree" class="d-none">
                                  <span>Dash UI Only</span>

                                </span>
                          </span>

                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-3.jpg"
                                class="rounded-circle imgtooltip" data-template="two">
                              <span id="two" class="d-none">
                                <span>Mary Holler</span>
                              </span>
                            </span>
                            <span class="avatar avatar-sm ">
                              <span class="avatar-initials rounded-circle bg-light text-dark">5+</span>
                            </span>
                          </div>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i data-feather="more-vertical" class="icon-xs"></i>
                            </a>
                            <div class="dropdown-menu" >

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                              </a>

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="link"></i>Copy project link

                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="save"></i>Save as Default
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy"></i>Duplicate
                              </a>


                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="upload"></i>Import
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="users"></i>Move to another team
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="archive"></i>Archive
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash"></i>Delete Project
                              </a>


                            </div>
                          </div>
                          </td>
                        </tr>

                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="icon-shape icon-lg rounded-3 border ">
                            <i class="icon-sm text-muted" data-feather="clipboard"  ></i>
                            </div>
                            <div class="ms-3">
                              <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Task Application Development..</a></h4>
                            </div>
                          </div>
                        </td>
                        <td>
                          20 Nov, 2023
                        </td>
                        <td>
                          $20,000
                        </td>

                        <td>
                          <div class="d-flex align-items-center">
                            <div class="me-2"> <span>100%</span></div>
                            <div class="progress flex-auto" style="height: 6px;">
                              <div class="progress-bar bg-success " role="progressbar" style="width: 100%;"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">

                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge badge-success-soft text-dark-success">Completed</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm avatar-primary imgtooltip"  data-template="textFour">
                              <span class="avatar-initials rounded-circle " >

                                DU</span>

                                <span id="textFour" class="d-none">
                                  <span>Dash UI Only</span>

                                </span>
                          </span>

                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-5.jpg"
                                class="rounded-circle imgtooltip" data-template="three">
                              <span id="three" class="d-none">
                                <span>Gali Linear</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-6.jpg"
                                class="rounded-circle imgtooltip" data-template="four">
                              <span id="four" class="d-none">
                                <span>Mary Holler</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm ">
                              <span class="avatar-initials rounded-circle bg-light text-dark">8+</span>
                            </span>
                          </div>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i data-feather="more-vertical" class="icon-xs"></i>
                            </a>
                            <div class="dropdown-menu" >

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                              </a>

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="link"></i>Copy project link

                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="save"></i>Save as Default
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy"></i>Duplicate
                              </a>


                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="upload"></i>Import
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="users"></i>Move to another team
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="archive"></i>Archive
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash"></i>Delete Project
                              </a>


                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="icon-shape icon-lg rounded-3 border ">
                            <i class="icon-sm text-muted" data-feather="users"  ></i>
                            </div>
                            <div class="ms-3">
                              <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">CRM Dashboard </a></h4>
                            </div>
                          </div>
                        </td>
                        <td>
                          23 Dec, 2023
                        </td>
                        <td>
                          $0
                        </td>

                        <td>
                          <div class="d-flex align-items-center">
                            <div class="me-2"> <span>30%</span></div>
                            <div class="progress flex-auto" style="height: 6px;">
                              <div class="progress-bar bg-danger " role="progressbar" style="width: 30%;"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="30">

                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge badge-danger-soft text-dark-danger">Cancel</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-7.jpg"
                                class="rounded-circle imgtooltip" data-template="five">
                              <span id="five" class="d-none">
                                <span>Paul Haney</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-8.jpg"
                                class="rounded-circle imgtooltip" data-template="six">
                              <span id="six" class="d-none">
                                <span>Gali Linear</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm avatar-primary imgtooltip"  data-template="textSix">
                              <span class="avatar-initials rounded-circle " >

                                DU</span>

                                <span id="textSix" class="d-none">
                                  <span>Dash UI Only</span>

                                </span>
                          </span>

                            <span class="avatar avatar-sm ">
                              <span class="avatar-initials rounded-circle bg-light text-dark">4+</span>
                            </span>
                          </div>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i data-feather="more-vertical" class="icon-xs"></i>
                            </a>
                            <div class="dropdown-menu" >

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                              </a>

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="link"></i>Copy project link

                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="save"></i>Save as Default
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy"></i>Duplicate
                              </a>


                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="upload"></i>Import
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="users"></i>Move to another team
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="archive"></i>Archive
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash"></i>Delete Project
                              </a>


                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="icon-shape icon-lg rounded-3 border ">
                            <i class="icon-sm text-muted" data-feather="cpu"  ></i>
                            </div>
                            <div class="ms-3">
                              <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Marketing Sites  </a></h4>
                            </div>
                          </div>
                        </td>
                        <td>
                          10 Oct, 2023
                        </td>
                        <td>
                          $0
                        </td>

                        <td>
                          <div class="d-flex align-items-center">
                            <div class="me-2"> <span>10%</span></div>
                            <div class="progress flex-auto" style="height: 6px;">
                              <div class="progress-bar bg-danger " role="progressbar" style="width: 10%;"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="10">

                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge badge-danger-soft text-dark-danger">Cancel</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-7.jpg"
                                class="rounded-circle imgtooltip" data-template="seven">
                              <span id="seven" class="d-none">
                                <span>Paul Haney</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm avatar-primary imgtooltip"  data-template="textSeven">
                              <span class="avatar-initials rounded-circle " >

                                DU</span>

                                <span id="textSeven" class="d-none">
                                  <span>Dash UI Only</span>

                                </span>
                          </span>

                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-9.jpg"
                                class="rounded-circle imgtooltip" data-template="eight">
                              <span id="eight" class="d-none">
                                <span>Mary Holler</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm ">
                              <span class="avatar-initials rounded-circle bg-light text-dark">7+</span>
                            </span>
                          </div>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i data-feather="more-vertical" class="icon-xs"></i>
                            </a>
                            <div class="dropdown-menu" >

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                              </a>

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="link"></i>Copy project link

                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="save"></i>Save as Default
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy"></i>Duplicate
                              </a>


                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="upload"></i>Import
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="users"></i>Move to another team
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="archive"></i>Archive
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash"></i>Delete Project
                              </a>


                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="icon-shape icon-lg rounded-3 border ">
                            <i class="icon-sm text-muted" data-feather="message-square"  ></i>
                            </div>
                            <div class="ms-3">
                              <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Chat Application Design  </a></h4>
                            </div>
                          </div>
                        </td>
                        <td>
                          19 Oct, 2023
                        </td>
                        <td>
                          $20,000
                        </td>

                        <td>
                          <div class="d-flex align-items-center">
                            <div class="me-2"> <span>65%</span></div>
                            <div class="progress flex-auto" style="height: 6px;">
                              <div class="progress-bar bg-warning " role="progressbar" style="width: 65%;"
                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="65">

                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge badge-warning-soft text-dark-warning">Pending</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm avatar-primary imgtooltip"  data-template="textEight">
                              <span class="avatar-initials rounded-circle " >

                                DU</span>

                                <span id="textEight" class="d-none">
                                  <span>Dash UI Only</span>

                                </span>
                          </span>

                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-8.jpg"
                                class="rounded-circle imgtooltip" data-template="nine">
                              <span id="nine" class="d-none">
                                <span>Gali Linear</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-9.jpg"
                                class="rounded-circle imgtooltip" data-template="ten">
                              <span id="ten" class="d-none">
                                <span>Mary Holler</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm ">
                              <span class="avatar-initials rounded-circle bg-light text-dark">6+</span>
                            </span>
                          </div>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i data-feather="more-vertical" class="icon-xs"></i>
                            </a>
                            <div class="dropdown-menu" >

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                              </a>

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="link"></i>Copy project link

                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="save"></i>Save as Default
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy"></i>Duplicate
                              </a>


                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="upload"></i>Import
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="users"></i>Move to another team
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="archive"></i>Archive
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash"></i>Delete Project
                              </a>


                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="icon-shape icon-lg rounded-3 border ">
                            <i class="icon-sm text-muted" data-feather="shopping-cart"  ></i>
                            </div>
                            <div class="ms-3">
                              <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">E-Commerce Project  </a></h4>
                            </div>
                          </div>
                        </td>
                        <td>
                          5 Nov, 2023
                        </td>
                        <td>
                          $25,000
                        </td>

                        <td>
                          <div class="d-flex align-items-center">
                            <div class="me-2"> <span>100%</span></div>
                            <div class="progress flex-auto" style="height: 6px;">
                              <div class="progress-bar bg-success " role="progressbar" style="width: 100%;"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">

                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge badge-success-soft text-dark-success">Completed</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-7.jpg"
                                class="rounded-circle imgtooltip" data-template="eleven">
                              <span id="eleven" class="d-none">
                                <span>Paul Haney</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-8.jpg"
                                class="rounded-circle imgtooltip" data-template="twelve">
                              <span id="twelve" class="d-none">
                                <span>Gali Linear</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-9.jpg"
                                class="rounded-circle imgtooltip" data-template="thirteen">
                              <span id="thirteen" class="d-none">
                                <span>Mary Holler</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm ">
                              <span class="avatar-initials rounded-circle bg-light text-dark">8+</span>
                            </span>
                          </div>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i data-feather="more-vertical" class="icon-xs"></i>
                            </a>
                            <div class="dropdown-menu" >

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                              </a>

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="link"></i>Copy project link

                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="save"></i>Save as Default
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy"></i>Duplicate
                              </a>


                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="upload"></i>Import
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="users"></i>Move to another team
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="archive"></i>Archive
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash"></i>Delete Project
                              </a>


                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="icon-shape icon-lg rounded-3 border ">
                            <i class="icon-sm text-muted" data-feather="users"  ></i>
                            </div>
                            <div class="ms-3">
                              <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">CRM Dashboard </a></h4>
                            </div>
                          </div>
                        </td>
                        <td>
                          23 Dec, 2023
                        </td>
                        <td>
                          $0
                        </td>

                        <td>
                          <div class="d-flex align-items-center">
                            <div class="me-2"> <span>30%</span></div>
                            <div class="progress flex-auto" style="height: 6px;">
                              <div class="progress-bar bg-danger " role="progressbar" style="width: 30%;"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="30">

                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge badge-danger-soft text-dark-danger">Cancel</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-7.jpg"
                                class="rounded-circle imgtooltip" data-template="twentyOne">
                              <span id="twentyOne" class="d-none">
                                <span>Paul Haney</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-8.jpg"
                                class="rounded-circle imgtooltip" data-template="twentyTwo">
                              <span id="twentyTwo" class="d-none">
                                <span>Gali Linear</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm avatar-primary imgtooltip"  data-template="textOne">
                              <span class="avatar-initials rounded-circle " >

                                DU</span>

                                <span id="textOne" class="d-none">
                                  <span>Dash UI Only</span>

                                </span>
                          </span>

                            <span class="avatar avatar-sm ">
                              <span class="avatar-initials rounded-circle bg-light text-dark">4+</span>
                            </span>
                          </div>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i data-feather="more-vertical" class="icon-xs"></i>
                            </a>
                            <div class="dropdown-menu" >

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                              </a>

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="link"></i>Copy project link

                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="save"></i>Save as Default
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy"></i>Duplicate
                              </a>


                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="upload"></i>Import
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="users"></i>Move to another team
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="archive"></i>Archive
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash"></i>Delete Project
                              </a>


                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="icon-shape icon-lg rounded-3 border ">
                            <i class="icon-sm text-muted" data-feather="cpu"  ></i>
                            </div>
                            <div class="ms-3">
                              <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">Marketing Sites  </a></h4>
                            </div>
                          </div>
                        </td>
                        <td>
                          10 Oct, 2023
                        </td>
                        <td>
                          $0
                        </td>

                        <td>
                          <div class="d-flex align-items-center">
                            <div class="me-2"> <span>10%</span></div>
                            <div class="progress flex-auto" style="height: 6px;">
                              <div class="progress-bar bg-danger " role="progressbar" style="width: 10%;"
                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="10">

                              </div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge badge-danger-soft text-dark-danger">Cancel</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-7.jpg"
                                class="rounded-circle imgtooltip" data-template="fourteen">
                              <span id="fourteen" class="d-none">
                                <span>Paul Haney</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm avatar-primary imgtooltip"  data-template="textTwo">
                              <span class="avatar-initials rounded-circle " >

                                DU</span>

                                <span id="textTwo" class="d-none">
                                  <span>Dash UI Only</span>

                                </span>
                          </span>

                            <span class="avatar avatar-sm">
                              <img alt="avatar" src="../assets/images/avatar/avatar-9.jpg"
                                class="rounded-circle imgtooltip" data-template="fifteen">
                              <span id="fifteen" class="d-none">
                                <span>Mary Holler</span>

                              </span>
                            </span>
                            <span class="avatar avatar-sm ">
                              <span class="avatar-initials rounded-circle bg-light text-dark">7+</span>
                            </span>
                          </div>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropstart">
                            <a href="#!" class="btn-icon btn btn-ghost btn-sm rounded-circle"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i data-feather="more-vertical" class="icon-xs"></i>
                            </a>
                            <div class="dropdown-menu" >

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="edit"></i>Edit Details
                              </a>

                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="link"></i>Copy project link

                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="save"></i>Save as Default
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="copy"></i>Duplicate
                              </a>


                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="upload"></i>Import
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class=" dropdown-item-icon" data-feather="printer"></i>Export / Print
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="users"></i>Move to another team
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="archive"></i>Archive
                              </a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">
                                <i class="dropdown-item-icon" data-feather="trash"></i>Delete Project
                              </a>


                            </div>
                          </div>
                        </td>
                      </tr>


                      <tr>
                        <td  colspan="7">
                          <div class="d-flex align-items-center">
                            <a href="#!" class="text-muted border border-2 rounded-3 card-dashed-hover"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                            <div class="icon-shape icon-lg fs-3 ">
                              +
                            </div>
                          </a>
                            <div class="ms-3">
                              <h4 class="mb-0 fs-5"><a href="#!" class="text-inherit">New Project</a></h4>
                            </div>
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
    </main>
 <!-- Offcanvas -->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" style="width: 600px;">

  <div class="offcanvas-body" data-simplebar >
    <div class="offcanvas-header px-2 pt-0">
      <h3 class="offcanvas-title" id="offcanvasExampleLabel">Create Project</h3>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

          <!-- card body -->
          <div class="container">
            <!-- form -->
            <div class="row" >
              <!-- form group -->
              <div class="mb-3 col-12">
                <label class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Enter project title" required>
              </div>
              <!-- form group -->
              <div class="mb-3 col-12">
                <label class="form-label">Description</label>
                <div id="editor" >

                  <p> Type something here
                      </p>
                      <br >
                      <br >
                      <br >


                </div>
              </div>
              <!-- form group -->
              <div class="mb-3 col-md-6 col-12">
                <label class="form-label">Start Date <span class="text-danger">*</span></label>
                <div class="input-group me-3 flatpickr rounded">
                  <input class="form-control " type="text" placeholder="Select Date"
                    aria-describedby="basic-addon2">

                    <span class="input-group-text text-muted" id="basic-addon2"><i
                         data-feather="calendar" class="icon-xs" ></i></span>

                </div>
              </div>
              <!-- form group -->
              <div class="mb-3 col-md-6 col-12">
                <label class="form-label">End Date <span class="text-danger">*</span></label>
                <div class="input-group me-3 flatpickr rounded">
                  <input class="form-control " type="text" placeholder="Select Date"
                    aria-describedby="basic-addon3">

                    <span class="input-group-text text-muted" id="basic-addon3"><i
                         data-feather="calendar" class="icon-xs" ></i></span>

                </div>
              </div>
               <!-- form group -->
               <div class="mb-4 col-md-6 col-12">
                <label class="form-label">Priority
                </label>
                <select class="form-select">
                  <option value="">Set Priority</option>
                  <option value="High">High</option>
                  <option value="Medium">Medium</option>
                  <option value="Low">Low</option>
                </select>
              </div>
              <!-- form group -->
              <div class="mb-4 col-md-6 col-12">
                <label class="form-label">Status</label>
                <select class="form-select">
                  <option value="">In Progress</option>
                  <option value="Based on Project Amount">Based on Project Amount</option>
                  <option value="Based on Project Hours">Based on Project Hours</option>
                </select>
              </div>






              <div class="col-12 mb-4">
                <h5 class="mb-2">Cover Image </h5>

                <form action="#" class="d-block dropzone border-dashed min-h-0 rounded-2">
                  <div class="fallback">
                    <input name="file" type="file" multiple >
                  </div>
                </form>


              </div>
              <div class="col-md-8"></div>
              <!-- button -->
              <div class="col-12">
                <button class="btn btn-primary" type="button">Submit</button>
                <button type="button" class="btn btn-outline-primary ms-2" data-bs-dismiss="offcanvas" aria-label="Close">Close</button>
              </div>
            </div>

          </div>
          </div>
  </div>
     <!-- vendor -->
       <!-- dropzone -->
  <script src="@@webRoot/node_modules/dropzone/dist/min/dropzone.min.js"></script>
     <!-- flatpickr -->
  <script src="@@webRoot/node_modules/flatpickr/dist/flatpickr.min.js"></script>
     <!-- quill js -->
  <script src="@@webRoot/node_modules/quill/dist/quill.min.js"></script>

    @@include("../partials/scripts.html")
     <!-- popper js -->
  <script src="@@webRoot/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
  <!-- tippy js -->
  <script src="@@webRoot/node_modules/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="@@webRoot/assets/js/vendors/tooltip.js"></script>
  </body>
</html>