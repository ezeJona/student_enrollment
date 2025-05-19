<!DOCTYPE html>
<html lang="en">

<head>
	  <?php include "../partials/head.php" ?>

    <title>Matricula</title>
  </head>

  <body>
    <!-- Wrapper -->
    <main id="main-wrapper" class="main-wrapper">
 		  <?php include "../partials/header.php" ?>
      <!-- navbar vertical -->
		  <?php include "../partials/navbar-vertical.php"?>


      <!-- Page Content -->
      <div id="app-content">
        <!-- Container fluid -->
        <div class="app-content-area">
          <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
					<div class="container-fluid mt-n22"></div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-12">
								<!-- Page header -->
								<div class="d-flex justify-content-between align-items-center mb-5">
									<div class="mb-2 mb-lg-0">
										<h3 class="mb-0 text-white">Matriculas</h3>
									</div>
									<div>
										<a href="#!" class="btn btn-white">+ Nueva Matricu</a>
									</div>
								</div>
							</div>
						</div>
            <div>
              <!-- row -->
              <div class="row">
  <!-- Total de Matrículas Recibidas -->
  <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
    <div class="card h-100 card-lift">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <h4 class="mb-0">Reingreso</h4>
          </div>
          <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
            <i data-feather="file-text" height="20" width="20"></i>
          </div>
        </div>
        <div class="lh-1">
          <h1 class="mb-1 fw-bold">125</h1>
          <p class="mb-0">
            <span class="text-dark me-2">85</span>
            Matriculas Reservadas
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Documentos Pendientes -->
  <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
    <div class="card h-100 card-lift">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <h4 class="mb-0">Nuevo Ingreso</h4>
          </div>
          <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
            <i data-feather="alert-circle" height="20" width="20"></i>
          </div>
        </div>
        <div class="lh-1">
          <h1 class="mb-1 fw-bold">38</h1>
          <p class="mb-0">
            <span class="text-dark me-2">10</span>
            Matriculas pendientes
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Estudiantes Registrados -->
  <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
    <div class="card h-100 card-lift">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <h4 class="mb-0">Matutino</h4>
          </div>
          <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
            <i data-feather="users" height="20" width="20"></i>
          </div>
        </div>
        <div class="lh-1">
          <h1 class="mb-1 fw-bold">312</h1>
          <p class="mb-0">
            <span class="text-dark me-2">156</span>
            Nuevos ingresos
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Cupos Disponibles -->
  <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
    <div class="card h-100 card-lift">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <h4 class="mb-0">Vespertino</h4>
          </div>
          <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
            <i data-feather="layers" height="20" width="20"></i>
          </div>
        </div>
        <div class="lh-1">
          <h1 class="mb-1 fw-bold">47</h1>
          <p class="mb-0">
            <span class="text-success me-2">Grado 1°:</span>
            12 cupos
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

              <div class="row">
                <div class="col-12">
                  <!-- card -->
                  <div class="card mb-4">
                    <div class="card-header">
                      <div class="row g-2">
                        <!-- <div class="col-lg-6 col-md-5 d-grid d-lg-block">
                          <a
                            href="invoice-generator.html"
                            class="btn btn-primary"

                            >+ Create New Invoice</a
                          >
                        </div> -->
                        <div class="col-md-7 col-lg-4">
                          <input
                            type="search"
                            class="form-control w-100"
                            placeholder="busca por Id, codigo estduantil o nombre"
                         >
                        </div>
                        <div class="col-lg-2 d-flex">
                          <select class="form-select">
                            <option selected>Turno</option>
                            <option value="1">Matutino</option>
                            <option value="2">Vespertino</option>
                          </select>
                          <a
                          href="#!"
                          class="btn btn-danger-soft  btn-icon ms-2 texttooltip"
                          data-template="trashOne"
                        >
                          <i
                            data-feather="trash-2"
                            class="icon-xs"
                          ></i>
                          <div id="trashOne" class="d-none">
                            <span>Delete</span>
                          </div>
                        </a>

                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive table-card">
                        <table class="table text-nowrap mb-0 table-centered">
                          <thead class="table-light">
                            <tr>
                              <th class="pe-0">
                                <div class="form-check" >
                                  <input
                                    class="form-check-input" id="checkAll"
                                    type="checkbox"
                                    value=""
                                 >
                                  <label
                                    class="form-check-label"
                                    for="checkAll"
                                  >
                                  </label>
                                </div>
                              </th>
                              <th class="ps-0">ID</th>
                              <th>Estado</th>
                              <th>Nombre</th>
                              <th>Grado</th>
                              <th>Email</th>
                              <th>Codigo Estudiantil</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="pe-0">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="contactCheckbox2"
                                 >
                                  <label
                                    class="form-check-label"
                                    for="contactCheckbox2"
                                  >
                                  </label>
                                </div>
                              </td>
                              <td class="ps-0">
                                <a href="#!">#086</a>
                              </td>
                              <td>
                                <span class="badge badge-warning-soft text-warning"
                                  >Pendiente</span
                                >
                              </td>
                              <td class="ps-1">
                                <div class="d-flex align-items-center">
                                  <div class="ms-2">
                                    <h5 class="mb-0"> <a href="#!" class="text-inherit">Adolfo Justo Urbina tipitapa</a></h5>
                                  </div>
                                </div>
                              </td>
                              <td>11°</td>

                              <td>adolfe@gmail.com</td>
                              <td>002 - 568941 - 000J</td>
                              <td>
                                <div>
                                  <div class="dropdown">
                                    <a
                                      class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                      href="#!"
                                      role="button"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                    >
                                      <i
                                        data-feather="more-vertical"
                                        class="icon-xs"
                                      ></i>
                                    </a>

                                    <div class="dropdown-menu">

                                        <!--<a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="eye"

                                          ></i
                                          >Ver
                                        </a>-->



                                        <a class="dropdown-item d-flex align-items-center" href="validation.php">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="edit"

                                          ></i
                                          >Validación
                                        </a>



                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="download"

                                          ></i
                                          >Descargar
                                        </a>


                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="trash-2"

                                          ></i
                                          >Eliminar
                                        </a>

                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="pe-0">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="contactCheckbox12"
                                 >
                                  <label
                                    class="form-check-label"
                                    for="contactCheckbox12"
                                  >
                                  </label>
                                </div>
                              </td>
                              <td class="ps-0">
                                <a href="#!">#88118</a>
                              </td>
                              <td>
                                <span class="badge badge-success-soft text-success"
                                  >Paid</span
                                >
                              </td>
                              <td class="ps-1">
                                <div class="d-flex align-items-center">
                                  <a href="#!"><img
                                    src="../assets/images/avatar/avatar-3.jpg"
                                    alt="Image"
                                    class="avatar avatar-sm rounded-circle"
                                 ></a>
                                  <div class="ms-2">
                                    <h5 class="mb-0"> <a href="#!" class="text-inherit">Agnes Addison</a></h5>
                                  </div>
                                </div>
                              </td>
                              <td>16 Apr 2023</td>

                              <td>agnesaddison@gmail.com</td>
                              <td>$235.99</td>
                              <td>
                                <div>
                                  <div class="dropdown">
                                    <a
                                      class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                      href="#!"
                                      role="button"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                    >
                                      <i
                                        data-feather="more-vertical"
                                        class="icon-xs"
                                      ></i>
                                    </a>

                                    <div class="dropdown-menu">

                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="eye"

                                          ></i
                                          >View
                                        </a>



                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="edit"

                                          ></i
                                          >Edit
                                        </a>



                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="download"

                                          ></i
                                          >Download
                                        </a>


                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="trash-2"

                                          ></i
                                          >Delete
                                        </a>

                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="pe-0">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="contactCheckbox4"
                                 >
                                  <label
                                    class="form-check-label"
                                    for="contactCheckbox4"
                                  >
                                  </label>
                                </div>
                              </td>
                              <td class="ps-0">
                                <a href="#!">#88117</a>
                              </td>
                              <td>
                                <span class="badge badge-success-soft text-success"
                                  >Paid</span
                                >
                              </td>
                              <td class="ps-1">
                                <div class="d-flex align-items-center">
                                  <a href="#!"><img
                                    src="../assets/images/avatar/avatar-4.jpg"
                                    alt="Image"
                                    class="avatar avatar-sm rounded-circle"
                                 ></a>
                                  <div class="ms-2">
                                    <h5 class="mb-0"> <a href="#!" class="text-inherit">Justin Holtz</a></h5>
                                  </div>
                                </div>
                              </td>
                              <td>16 Apr 2023</td>

                              <td>justinholtz@gmail.com</td>
                              <td>$235.23</td>
                              <td>
                                <div>
                                  <div class="dropdown">
                                    <a
                                      class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                      href="#!"
                                      role="button"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                    >
                                      <i
                                        data-feather="more-vertical"
                                        class="icon-xs"
                                      ></i>
                                    </a>

                                    <div class="dropdown-menu">

                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="eye"

                                          ></i
                                          >View
                                        </a>



                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="edit"

                                          ></i
                                          >Edit
                                        </a>



                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="download"

                                          ></i
                                          >Download
                                        </a>


                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="trash-2"

                                          ></i
                                          >Delete
                                        </a>

                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td class="pe-0">
                                <div class="form-check">
                                  <input
                                    class="form-check-input"
                                    type="checkbox"
                                    value=""
                                    id="contactCheckbox5"
                                 >
                                  <label
                                    class="form-check-label"
                                    for="contactCheckbox5"
                                  >
                                  </label>
                                </div>
                              </td>
                              <td class="ps-0">
                                <a href="#!">#88116</a>
                              </td>
                              <td>
                                <span class="badge badge-success-soft text-success"
                                  >Paid</span
                                >
                              </td>
                              <td class="ps-1">
                                <div class="d-flex align-items-center">
                                  <a href="#!"><img
                                    src="../assets/images/avatar/avatar-5.jpg"
                                    alt="Image"
                                    class="avatar avatar-sm rounded-circle"
                                 ></a>
                                  <div class="ms-2">
                                    <h5 class="mb-0"> <a href="#!" class="text-inherit">Lamont Laurel</a></h5>
                                  </div>
                                </div>
                              </td>
                              <td>15 Apr 2023</td>

                              <td>lamontlaurel@gmail.com</td>
                              <td>$789.18</td>
                              <td>
                                <div>
                                  <div class="dropdown">
                                    <a
                                      class="btn btn-ghost btn-icon btn-sm rounded-circle"
                                      href="#!"
                                      role="button"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="false"
                                    >
                                      <i
                                        data-feather="more-vertical"
                                        class="icon-xs"
                                      ></i>
                                    </a>

                                    <div class="dropdown-menu">

                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="eye"

                                          ></i
                                          >View
                                        </a>



                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="edit"

                                          ></i
                                          >Edit
                                        </a>



                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="download"

                                          ></i
                                          >Download
                                        </a>


                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                          <i
                                            class="me-2 icon-xs"
                                            data-feather="trash-2"

                                          ></i
                                          >Delete
                                        </a>

                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div
                      class="card-footer d-md-flex justify-content-between align-items-center "
                    >
                      <span>Showing 1 to 8 of 12 entries</span>
                      <nav class="mt-2 mt-md-0">
                        <ul class="pagination mb-0 ">
                          <li class="page-item">
                            <a class="page-link" href="#!">Previous</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link active" href="#!">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#!">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#!">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#!">Next</a>
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
      </div>
    </div>


    <!-- Scripts -->

    <?php include "../partials/scripts.php" ?>

    <script src="../assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
  <!-- tippy js -->
  <script src="../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
  <script src="../assets/js/vendors/tooltip.js"></script>
  <script src="../assets/js/vendors/counter.js"></script>


  </body>
</html>
