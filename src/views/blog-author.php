<!DOCTYPE html>
<html lang="en">

<head>
  @@include("../partials/head.html")
  <title>Blog Author | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
    @@include("../partials/header.html")
    <!-- navbar vertical -->

    @@include('../partials/navbar-vertical.html', {
    "page": "blogAuthor",
    "page_group": "blog"
    })


    <!-- page content -->
    <div id="app-content">

      <div class="app-content-area">

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div class="d-flex justify-content-between align-items-center mb-5">
              <h3 class="mb-0 ">Author</h3>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 ">
            <div class="card h-100">
                 <div class="card-header d-md-flex justify-content-between align-items-center">

                    <form>
                        <div class="mb-3 mb-md-0">
                            <input type="search" class="form-control" placeholder="Search Author">
                          </div>
                    </form>
                     <a href="#!" class="btn btn-primary">Add New Author</a>


                 </div>
                 <div class="card-body">
                <div class="table-responsive table-card">
                  <table class="table mb-0 text-nowrap table-centered">
                    <thead class="table-light">
                      <tr>
                        <th scope="col">Author Name</th>
                        <th scope="col">Date Join</th>
                        <th scope="col">Total Post </th>
                        <th scope="col">Total Followers</th>
                        <th scope="col">Payment </th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-sm rounded-circle">
                                <div class="ms-2">
                                  <h5 class="mb-0"><a href="#!" class="text-inherit">Bert Schultz</a></h5>
                                </div>
                              </div>

                            </td>
                            <td>03 Oct 2023</td>
                            <td>345</td>

                            <td>3,465</td>
                            <td><span class="badge badge-success-soft rounded-pill">Paid</span></td>
                            <td>
                              <a
                              href="#!"
                              class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="mailOne"
                            >
                            <i data-feather="mail" class="icon-xs"></i>
                              <div id="mailOne" class="d-none">
                                <span>Mail</span>
                              </div>
                            </a>
                              <a
                                  href="#!"
                                  class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                  data-template="lockOne"
                                >
                                <i data-feather="lock" class="icon-xs"></i>
                                  <div id="lockOne" class="d-none">
                                    <span>Block</span>
                                  </div>
                                </a>
                            </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="../assets/images/avatar/avatar-2.jpg" alt="Image" class="avatar avatar-sm rounded-circle">
                              <div class="ms-2">
                                <h5 class="mb-0"><a href="#!" class="text-inherit">Christian Hart</a></h5>
                              </div>
                            </div>

                          </td>
                          <td>19 Sept 2023</td>
                          <td>34</td>

                          <td>15,467</td>
                          <td><span class="badge badge-success-soft rounded-pill">Paid</span></td>
                          <td>
                            <a
                              href="#!"
                              class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="mailTwo"
                            >
                            <i data-feather="mail" class="icon-xs"></i>
                              <div id="mailTwo" class="d-none">
                                <span>Mail</span>
                              </div>
                            </a>
                            <a
                            href="#!"
                            class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                            data-template="lockTwo"
                          >
                          <i data-feather="lock" class="icon-xs"></i>
                            <div id="lockTwo" class="d-none">
                              <span>Block</span>
                            </div>
                          </a>
                          </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="../assets/images/avatar/avatar-3.jpg" alt="Image" class="avatar avatar-sm rounded-circle">
                            <div class="ms-2">
                              <h5 class="mb-0"><a href="#!" class="text-inherit">Kimberly Barnes</a></h5>
                            </div>
                          </div>

                        </td>
                        <td>04 Sept 2023</td>
                        <td>65</td>

                        <td>7,567</td>
                        <td><span class="badge badge-success-soft rounded-pill">Paid</span></td>
                        <td>
                          <a
                              href="#!"
                              class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="mailThree"
                            >
                            <i data-feather="mail" class="icon-xs"></i>
                              <div id="mailThree" class="d-none">
                                <span>Mail</span>
                              </div>
                            </a>
                          <a
                          href="#!"
                          class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                          data-template="lockThree"
                        >
                        <i data-feather="lock" class="icon-xs"></i>
                          <div id="lockThree" class="d-none">
                            <span>Block</span>
                          </div>
                        </a>
                        </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="../assets/images/avatar/avatar-4.jpg" alt="Image" class="avatar avatar-sm rounded-circle">
                          <div class="ms-2">
                            <h5 class="mb-0"><a href="#!" class="text-inherit">Alejandro Burdette</a></h5>
                          </div>
                        </div>

                      </td>
                      <td>23 Aug 2023</td>
                      <td>76</td>

                      <td>8,478</td>
                      <td><span class="badge badge-success-soft rounded-pill">Paid</span></td>
                      <td>
                        <a
                              href="#!"
                              class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="mailFour"
                            >
                            <i data-feather="mail" class="icon-xs"></i>
                              <div id="mailFour" class="d-none">
                                <span>Mail</span>
                              </div>
                            </a>
                        <a
                        href="#!"
                        class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                        data-template="lockFour"
                      >
                      <i data-feather="lock" class="icon-xs"></i>
                        <div id="lockFour" class="d-none">
                          <span>Block</span>
                        </div>
                      </a>
                      </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <img src="../assets/images/avatar/avatar-5.jpg" alt="Image" class="avatar avatar-sm rounded-circle">
                        <div class="ms-2">
                          <h5 class="mb-0"><a href="#!" class="text-inherit">Charles Pope</a></h5>
                        </div>
                      </div>

                    </td>
                    <td>16 Aug 2023</td>
                    <td>126</td>

                    <td>4,345
                    </td>
                    <td><span class="badge badge-success-soft rounded-pill">Paid</span></td>
                    <td>
                      <a
                      href="#!"
                      class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                      data-template="mailFive"
                    >
                    <i data-feather="mail" class="icon-xs"></i>
                      <div id="mailFive" class="d-none">
                        <span>Mail</span>
                      </div>
                    </a>
                      <a
                      href="#!"
                      class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                      data-template="lockFive"
                    >
                    <i data-feather="lock" class="icon-xs"></i>
                      <div id="lockFive" class="d-none">
                        <span>Block</span>
                      </div>
                    </a>
                    </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../assets/images/avatar/avatar-6.jpg" alt="Image" class="avatar avatar-sm rounded-circle">
                      <div class="ms-2">
                        <h5 class="mb-0"><a href="#!" class="text-inherit">Tabitha Ewing</a></h5>
                      </div>
                    </div>

                  </td>
                  <td>26 Aug 2023</td>
                  <td>4673</td>

                  <td>8,828
                  </td>
                  <td><span class="badge badge-warning-soft rounded-pill">Pending</span></td>
                  <td>
                    <a
                    href="#!"
                    class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                    data-template="mailSix"
                  >
                  <i data-feather="mail" class="icon-xs"></i>
                    <div id="mailSix" class="d-none">
                      <span>Mail</span>
                    </div>
                  </a>
                    <a
                    href="#!"
                    class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                    data-template="lockSix"
                  >
                  <i data-feather="lock" class="icon-xs"></i>
                    <div id="lockSix" class="d-none">
                      <span>Block</span>
                    </div>
                  </a>
                  </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="../assets/images/avatar/avatar-7.jpg" alt="Image" class="avatar avatar-sm rounded-circle">
                    <div class="ms-2">
                      <h5 class="mb-0"><a href="#!" class="text-inherit">Rose Daniels</a></h5>
                    </div>
                  </div>

                </td>
                <td>19 Sept 2023</td>
                <td>435</td>

                <td>2,355
                </td>
                <td><span class="badge badge-success-soft rounded-pill">Paid</span></td>
                <td>
                  <a
                              href="#!"
                              class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                              data-template="mailSeven"
                            >
                            <i data-feather="mail" class="icon-xs"></i>
                              <div id="mailSeven" class="d-none">
                                <span>Mail</span>
                              </div>
                            </a>
                  <a
                  href="#!"
                  class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                  data-template="lockSeven"
                >
                <i data-feather="lock" class="icon-xs"></i>
                  <div id="lockSeven" class="d-none">
                    <span>Block</span>
                  </div>
                </a>
                </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="../assets/images/avatar/avatar-8.jpg" alt="Image" class="avatar avatar-sm rounded-circle">
                  <div class="ms-2">
                    <h5 class="mb-0"><a href="#!" class="text-inherit">Christian Hart</a></h5>
                  </div>
                </div>

              </td>
              <td>19 Sept 2023</td>
              <td>67</td>

              <td>6,736
              </td>
              <td><span class="badge badge-success-soft rounded-pill">Paid</span></td>
              <td>
                <a
                href="#!"
                class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                data-template="mailEight"
              >
              <i data-feather="mail" class="icon-xs"></i>
                <div id="mailEight" class="d-none">
                  <span>Mail</span>
                </div>
              </a>
                <a
                href="#!"
                class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                data-template="lockEight"
              >
              <i data-feather="lock" class="icon-xs"></i>
                <div id="lockEight" class="d-none">
                  <span>Block</span>
                </div>
              </a>
              </td>
          </tr>




                    </tbody>
                  </table>
                </div>
                 </div>
                 <div class="card-footer d-md-flex justify-content-between align-items-center  ">
                  <span>Showing <span class="text-dark">5</span> of <span class="text-dark">25</span> Results</span>
                  <nav>
                    <ul class="pagination  mb-0">
                      <li class="page-item disabled">
                        <a class="page-link " href="#!"><i class="mdi mdi-chevron-left"></i></a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link " href="#!">1</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link " href="#!">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link " href="#!">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link " href="#!"><i class="mdi mdi-chevron-right"></i></a>
                      </li>
                    </ul>
                  </nav>
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