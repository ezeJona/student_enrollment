<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <!-- dropzone -->
  <link href="@@webRoot/node_modules/dropzone/dist/dropzone.css" rel="stylesheet">

  <title>Create Project | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>


</head>

<body>
  <!-- Wrapper -->
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', {

    "page_group": "project",

    "page": "create-project" })



    <!-- Page Content -->
    <div id="app-content">



      <!-- Container fluid -->
      <div class="app-content-area">
        <div class="container-fluid ">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="mb-5">
                <h3 class="mb-0 ">Create new project</h3>

              </div>
            </div>
          </div>
          <div>
            <!-- row -->
            <div class="row">
              <div class="col-xl-9 col-md-12 col-12">
                <!-- card -->
                <div class="card mb-5">
                  <!-- card body -->
                  <div class="card-body">
                    <!-- form -->
                    <div class="row">
                      <!-- form group -->
                      <div class="mb-4 col-12">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter project title" required>
                      </div>
                      <!-- form group -->
                      <div class="mb-4 col-12">
                        <label class="form-label">Description</label>
                        <div id="editor">

                          <p> Type something here
                          </p>
                          <br>
                          <br>
                          <br>


                        </div>
                      </div>
                      <!-- form group -->
                      <div class="mb-4 col-md-6 col-12">
                        <label class="form-label">Start Date <span class="text-danger">*</span></label>
                        <div class="input-group me-3 flatpickr rounded">
                          <input class="form-control " type="text" placeholder="Select Date"
                            aria-describedby="basic-addon2">

                          <span class="input-group-text text-muted" id="basic-addon2"><i data-feather="calendar"
                              class="icon-xxs"></i></span>

                        </div>
                      </div>
                      <!-- form group -->
                      <div class="mb-4 col-md-6 col-12">
                        <label class="form-label">End Date <span class="text-danger">*</span></label>
                        <div class="input-group me-3 flatpickr rounded">
                          <input class="form-control " type="text" placeholder="Select Date"
                            aria-describedby="basic-addon3">

                          <span class="input-group-text text-muted" id="basic-addon3"><i data-feather="calendar"
                              class="icon-xxs"></i></span>

                        </div>
                      </div>
                      <!-- form group -->
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



                      <div class="col-md-3 col-12 mb-4">
                        <div>
                          <!-- logo -->
                          <h5 class="mb-2">Project Logo </h5>
                          <div class="icon-shape icon-xxl border rounded position-relative">
                            <span class="position-absolute"> <i class="bi bi-image fs-3  text-muted"></i></span>
                            <input class="form-control border-0 opacity-0" type="file">

                          </div>

                        </div>
                      </div>
                      <div class="col-12 mb-4">
                        <h5 class="mb-2">Cover Image </h5>
                        <form action="#" class="d-block dropzone border-dashed min-h-0 rounded-2">
                          <div class="fallback">
                            <input name="file" type="file" multiple>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card mb-5 ">
                  <div class="card-header">
                    <h4 class="mb-0">Attached files</h4>
                  </div>
                  <div class="card-body">
                    <div>
                      <h5>Add Attached files here.</h5>
                      <div class=" p-10  border-dashed mb-4 text-center">
                        <span>Drop files here to upload</span>
                      </div>
                      <div class="card card-bordered  mb-4 ">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                              <img src="../assets/images/background/profile-bg.jpg" alt=""
                                class="icon-shape icon-xxl rounded-3">
                              <div class="ms-3">
                                <h6 class="mb-0">Uploaded Image Title 02-08-2023 at 4:35:56 PM.png</h6>
                                <small>0.8 MB</small>
                              </div>
                            </div>
                            <div>
                              <a href="#!" class="link-danger"><i data-feather="trash-2" class="icon-xs"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card card-bordered  mb-4 ">
                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                              <img src="../assets/images/background/profile-bg.jpg" alt=""
                                class="icon-shape icon-xxl rounded-3">
                              <div class="ms-3">
                                <h6 class="mb-0">Uploaded Image Title 02-08-2023 at 4:35:56 PM.png</h6>
                                <small>0.8 MB</small>
                              </div>
                            </div>
                            <div>
                              <a href="#!" class="link-danger"><i data-feather="trash-2" class="icon-xs"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-4 d-flex justify-content-end">
                  <a href="#!" class="btn btn-primary me-2">Create</a>
                  <a href="#!" class="btn btn-dark">Save as Draft</a>
                </div>
              </div>
              <div class="col-xl-3">
                <div class="card mb-5">
                  <div class="card-header">
                    <h4 class="mb-0">Members</h4>
                  </div>
                  <div class="card-body">
                    <h5>Team Lead</h5>
                    <select class="form-select">
                      <option selected>Select Team Lead</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <div class="mt-6">
                      <h5 class="mb-4">Team Members</h5>
                      <div class="d-flex align-items-center">
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
                          <!-- avatar  -->
                          <span class="avatar avatar-sm">
                            <img alt="avatar" src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle
                imgtooltip" data-template="four">
                            <span id="four" class="d-none">
                              <span>Lio Nordal</span>
                            </span>
                          </span>
                          <!-- avatar  -->
                          <span class="avatar avatar-sm">
                            <span class="avatar-initials
                rounded-circle bg-light
                text-dark">5+</span>
                          </span>
                        </div>
                        <!-- icon  -->
                        <a href="#!"
                          class="btn btn-icon btn-white btn-sm border border-2 rounded-circle btn-dashed ms-2">

                          +

                        </a>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="card ">
                  <div class="card-header">
                    <h4 class="mb-0">Meta</h4>
                  </div>
                  <div class="card-body">
                    <label class="form-label">Categories</label>
                    <select class="form-select">
                      <option selected>Select Categories</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <div class="mt-4">
                      <label class="form-label">Tags</label>
                      <input class="form-control" id="choices-text-input" data-choices
                        data-choices-limit="Required Limit" placeholder="Enter Skills" type="text"
                        value="Creative, Dash ui">
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
  <!-- choices -->
  <script src="@@webRoot/node_modules/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="@@webRoot/assets/js/vendors/choice.js"></script>



</body>

</html>