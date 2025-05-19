<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")


  <title>CRM Contacts | Dash UI - Responsive Bootstrap 5 Admin Dashboard</title>


</head>

<body>
  <!-- Wrapper -->
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', {
    "page": "crmContacts",
    "page_group": "CRM"
    })


    <!-- Page Content -->
    <div id="app-content">

      <!-- Container fluid -->
      <div class="app-content-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
              <!-- Page header -->
              <div class="mb-4">
                <h3 class="mb-0 ">Contacts</h3>
              </div>
            </div>
          </div>
          <div>
            <!-- row -->
            <div class="row">
              <div class="col-xxl-9 col-lg-8 col-12">
                <!-- card -->
                <div class="card mb-4" id="contact-list">
                  <div class="card-header d-lg-flex justify-content-between ">
                    <div class="d-grid d-lg-block">
                      <a href="#!" class="btn btn-primary" id="contact-modal-button" data-bs-toggle="modal"
                        data-bs-target="#contact-modal">+
                        Create New Contact</a>
                    </div>
                    <div class="d-flex mt-3 mt-lg-0">
                      <form action="#">
                        <div class="input-group ">
                          <input class="form-control rounded-3 search" type="search" value="" id="searchInput"
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
                      <a href="#!" class="btn btn-outline-white ms-2">Import</a>
                      <a href="#!" class="btn btn-danger-soft btn-icon ms-2 texttooltip" data-template="trashTwo">
                        <i data-feather="trash-2" class="icon-xs"></i>
                        <div id="trashTwo" class="d-none">
                          <span>Delete</span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive table-card">
                      <table class="table text-nowrap mb-0 table-centered">
                        <thead class="table-light">
                          <tr>
                            <th class=" pe-0  ">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                <label class="form-check-label" for="checkAll">

                                </label>
                              </div>
                            </th>
                            <th class="ps-1 sort" default-sort-order="asc" data-sort='name'>Name</th>
                            <th class="sort" data-sort='email_id'>Email</th>
                            <th class="sort" data-sort='phone'>Phone Number</th>
                            <th class="sort" data-sort='company_name'>Company</th>
                            <th class="sort" data-sort='last_contact'>Last Contact</th>
                            <th>Action
                            </th>
                          </tr>
                        </thead>
                        <tbody class="list contact-list-container">
                          <tr>
                            <td class=" pe-0">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="contactCheckbox2">
                                <label class="form-check-label" for="contactCheckbox2">
                                </label>
                              </div>
                            </td>
                            <td class="id" style="display:none;">#001</td>
                            <td class=" ps-1">
                              <div class="d-flex align-items-center">
                                <a href="#!"><img src="../assets/images/avatar/avatar-3.jpg" alt="Image"
                                    class="avatar avatar-sm rounded-circle avatar_img"></a>
                                <div class="ms-2">
                                  <h5 class="mb-0"><a href="#!" class="text-inherit name view-item-btn">
                                    Herbert Stokes</a>
                                  </h5>
                                </div>
                              </div>
                            </td>
                            <td class="email_id">herbert@dashuipro.com</td>
                            <td class="phone">740-320-9874</td>
                            <td class="company_name">Dash UI</td>
                            <td class="last_contact">July 23, 2022 12:24PM</td>
                            <td>
                              <div class="d-flex align-items-center">

                                <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                  data-template="callOne">
                                  <i data-feather="phone-call" class="icon-xs"></i>
                                  <div id="callOne" class="d-none">
                                    <span>Call</span>
                                  </div>
                                </a>
                                <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                  data-template="messageOne">
                                  <i data-feather="message-square" class="icon-xs"></i>
                                  <div id="messageOne" class="d-none">
                                    <span>Message</span>
                                  </div>
                                </a>

                                <div class="dropdown">
                                  <a class="btn btn-ghost btn-icon btn-sm rounded-circle" href="#!" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="more-vertical" class="icon-xs"></i>
                                  </a>

                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item d-flex align-items-center view-item-btn"
                                        href="#!">View</a></li>
                                    <li><a class="dropdown-item d-flex align-items-center edit-item-btn"
                                        href="#!">Edit</a>
                                    </li>
                                    <li><a class="dropdown-item d-flex align-items-center remove-item-btn"
                                        href="#!">Delete</a></li>
                                  </ul>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="card-footer d-md-flex justify-content-between align-items-center ">
                    <span id="pagination-status">Showing 1 to 8 of 12 entries</span>
                    <nav class="mt-2 mt-md-0">
                      <div class="d-flex justify-content-end mt-3">
                        <div class="pagination-wrap hstack">
                          <a class="page-item pagination-prev" href="#">
                            Previous
                          </a>
                          <ul class="pagination listjs-pagination mb-0"></ul>
                          <a class="page-item pagination-next" href="#">
                            Next
                          </a>
                        </div>
                      </div>
                    </nav>
                  </div>

                </div>
              </div>
              <div class="col-xxl-3 col-lg-4">
                <div class="card" id="contact-view-detail">
                  <div class="card-body border-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <img src="../assets/images/avatar/avatar-3.jpg" alt="Image" id="view-detail-image"
                          class="avatar-lg avatar rounded-circle">

                        <div class="ms-4">
                          <h3 class="mb-0 fs-4" id="view-detail-name">Herbert Stokes</h3>
                          <small id="view-detail-current-job">UX Designer at Olympic Sports</small>
                        </div>
                      </div>
                      <div>

                        <div class="dropdown">
                          <a class="btn btn-ghost btn-icon btn-sm rounded-circle" href="#!" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i data-feather="more-vertical" class="icon-xs"></i>
                          </a>

                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#!">Another action</a></li>
                            <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="mt-5">
                      <a href="#!" class="btn btn-light btn-icon rounded-circle texttooltip"
                        data-template="voicecallOne">
                        <i data-feather="phone-call" class="icon-xs"></i>
                        <div id="voicecallOne" class="d-none">
                          <span>Voice Call</span>
                        </div>
                      </a>
                      <a href="#!" class="btn btn-light btn-icon rounded-circle texttooltip"
                        data-template="messageEleven">
                        <i data-feather="message-square" class="icon-xs"></i>
                        <div id="messageEleven" class="d-none">
                          <span>Message</span>
                        </div>
                      </a>
                      <a href="#!" class="btn btn-light btn-icon rounded-circle texttooltip" data-template="mailOne">
                        <i data-feather="mail" class="icon-xs"></i>
                        <div id="mailOne" class="d-none">
                          <span>Mail</span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="card-body ">
                    <h4>Personal information</h4>
                    <p class="mb-0" id="view-detail-personal-info">The most effective objective is one that is tailored to
                      the job you are applying for. It states what kind of
                      career you are seeking, and what skills and
                      experiences you have that make you ideal for that
                      career. </p>
                    <div class="mt-4">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0"><span>Email
                            ID:</span><span id="view-detail-email-id">herbert@dashuipro.com</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                          <span>Phone No:</span><span id="view-detail-phone">740-320-9874</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                          <span>Last Contact:</span><span id="view-detail-last-contact">July 23, 2022 12:24PM</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0">
                          <span>Lead Status:</span><span id="view-detail-lead-status">In Progress</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center ps-0 pb-0">
                          <span>Designation:</span><span id="view-detail-designation">UX Designer</span>
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
    </div>
  </main>


  <!-- Modal -->
  <div class="modal fade" id="contact-modal" tabindex="-1" aria-labelledby="contact-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="contact-modal-label">Add New Contact</h4>
          <button type="button" class="btn-close" id="btn-close-modal" data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="d-flex align-items-center mb-4">
              <div>
                <img class="image avatar avatar-lg rounded-circle" id="contact-image"
                  src="../assets/images/avatar/avatar-11.jpg" alt="Image">
              </div>

              <div class="file-upload btn btn-outline-white ms-4">
                <input type="file" class="file-input opacity-0">Upload Photo
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="contact-name-field">Name</label>
              <input type="text" class="form-control" placeholder="Enter Name" id="contact-name-field" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="email-field">Email</label>
              <input type="email" class="form-control" placeholder="Enter Email" id="email-field" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="phone-number-field">Phone Number</label>
              <input type="text" class="form-control" placeholder="Enter Phone" id="phone-number-field" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="company-name-field">Company</label>
              <input type="text" class="form-control" placeholder="Enter Company Name" id="company-name-field" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="designation-field">Designation</label>
              <input type="text" class="form-control" placeholder="Enter Designation" id="designation-field" required>
            </div>
            <div class="mb-3">
              <label class="form-label" for="lead-status-field">Lead Status</label>
              <select class="form-select" id="lead-status-field" aria-label="Default select example" required>
                <option value="">Select Lead Status</option>
                <option value="In Progress">In Progress</option>
                <option value="Complete" selected>Complete</option>
                <option value="Rejected">Rejected</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="personal-information-field">Personal information </label>
              <textarea type="text" class="form-control" placeholder="Enter Personal Information" id="personal-information-field" required                rows="3"></textarea>                
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-primary" id="add-btn">+ Add Contact</button>
              <button type="submit" class="btn btn-primary" id="update-btn">Update</button>
              <input type="hidden" class="form-control" placeholder="ID" id="id-field">
              <button class="btn btn-light ms-2" data-bs-dismiss="modal" aria-label="Close">Close</button>
            </div>
          </form>
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

  <!-- Listjs required js scripts -->
  <script src="@@webRoot/node_modules/list.js/dist/list.min.js"></script>
  <script src="@@webRoot/node_modules/list.pagination.js/dist/list.pagination.min.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js'></script>

  <!-- CRM Contact js -->
  <script src="@@webRoot/assets/js/vendors/crm-contact.init.js"></script>
  
</body>

</html>