<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include "../partials/head.php";
    include "../partials/zona.priv.php";
    
  ?>
  <title>Portal del Estudiante</title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">

      <?php 
		include "../partials/header.php";
		include "../partials/navbar_estudiante.php";
    
    
  	?>
    <!-- page content -->


      <div id="app-content">
      <!-- Container fluid -->
      <div class="app-content-area">
        <div class="container-fluid">
          <div class="row align-items-center">
              <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div
                  class="pt-20 rounded-top"
                  style="
                    background: url(../assets/images/svg/banner_colegio.svg)
                      no-repeat;
                    background-size: cover;
                  "
                ></div>
                <div class="card rounded-bottom rounded-0 smooth-shadow-sm mb-5">
                  <div
                    class="d-flex align-items-center justify-content-between pt-4 pb-6 px-4"
                  >
                    <div class="d-flex align-items-center">
                      <!-- text -->
                      <div class="lh-1">
                        <h2 class="mb-0">
                          Bienvenido al Portal del Estudiante
                          <a
                            href="#!"
                            class="text-decoration-none"

                          >
                          </a>
                        </h2>
                      </div>
                    </div>
                    <div>
                      <a
                        href="#!"
                        class="btn btn-outline-primary d-none d-md-block"
                        >Editar Perfil</a
                      >
                    </div>
                  </div>
                  <!-- nav -->
                  <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link " href="../index.student.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../views/Estado_matricula.php">Estado de Matricula</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="../views/seccion.estudiante.php">Expediente del estudiante</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link active" href="../views/matricula_linea.php">Matricula en Linea</a>
                  </li>
                  
                </ul>
                </div>
              </div>
            </div>

          <div class="row mt-5">
          </div>
          <div>
            <!-- row -->

            <div class="row">
              <div class="col-xxl-8 col-12">
                <div>
                  <!-- stepper -->
                  <div id="stepperForm" class="bs-stepper">
                    <!-- Stepper Button -->
                    <div class="bs-stepper-header p-0 bg-transparent mb-4" role="tablist">
                      <div class="step" data-target="#test-l-1">
                        <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger1"
                          aria-controls="test-l-1">
                          <span class="bs-stepper-circle me-2"><i data-feather="user" class="icon-xs"></i></span>
                          <span class="bs-stepper-label">Datos del Estudiante</span>
                        </button>
                      </div>
                      <div class="bs-stepper-line"></div>
                      <!-- Stepper Button -->
                      <div class="step" data-target="#test-l-2">
                        <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger2"
                          aria-controls="test-l-2">
                          <span class="bs-stepper-circle me-2"><i data-feather="users" class="icon-xs"></i></span>
                          <span class="bs-stepper-label">Datos del tutor</span>
                        </button>
                      </div>
                      <div class="bs-stepper-line"></div>
                      <!-- Stepper Button -->
                      <div class="step" data-target="#test-l-3">
                        <button type="button" class="step-trigger" role="tab" id="stepperFormtrigger3"
                          aria-controls="test-l-3">
                          <span class="bs-stepper-circle me-2"><i data-feather="book" class="icon-xs"></i></span>
                          <span class="bs-stepper-label">Datos Académicos</span>
                        </button>
                      </div>

                    </div>
                    <!-- card -->
                    <div class="card">

                      <div class="card-body">
                        <!-- Stepper content -->
                        <div class="bs-stepper-content">
                          <form onSubmit="return false">
                            <!-- Content one -->
                            <div id="test-l-1" role="tabpanel" class="bs-stepper-pane fade"
                              aria-labelledby="stepperFormtrigger1">
                              <!-- heading -->
                              <div class="mb-5">
                                <h3 class="mb-1">Datos Personales</h3>
                                <p class="mb-0">Ingresa Informacion del estudiante
                                </p>
                              </div>
                              <!-- row -->
                              <div class="row">
                                <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Primer Nombre</label>
              <input name="primer_nombre" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Segundo Nombre</label>
              <input name="segundo_nombre" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Primer Apellido</label>
              <input name="primer_apellido" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Segundo Apellido</label>
              <input name="segundo_apellido" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label">Código Estudiantil</label>
              <input name="codigo_estudiantil" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Fecha de Nacimiento</label>
              <input type="date" name="fecha_nacimiento" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Sexo</label>
              <select name="sexo" class="form-select" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label">Dirección</label>
              <input name="direccion" class="form-control" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Teléfono</label>
              <input name="telefono" class="form-control" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Correo</label>
              <input name="correo" type="email" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Municipio</label>
              <input name="municipio" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Departamento</label>
              <input name="departamento" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Usuario</label>
              <input name="username" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Contraseña</label>
              <input name="password" type="password" class="form-control" required>
            </div>
          </div>


                              </div>

                              <!-- Button -->
                              <div class="d-flex justify-content-end">
                                <button class="btn btn-primary" onclick="stepperForm.next()">
                                  Siguiente<i class="fe fe-shopping-bag ms-1"></i>
                                </button>
                              </div>
                            </div>
                            <!-- Content two -->
                            <div id="test-l-2" role="tabpanel" class="bs-stepper-pane fade"
                              aria-labelledby="stepperFormtrigger2">
                              <!-- text -->
                              <div class="mb-5">
                                <h3 class="mb-1">Datos del Tutor</h3>
                                <p class="mb-0">Ingresa Datos de padre, madre o tutor.
                                </p>
                              </div>
                              <!-- text -->
                              
                              <!-- row -->
                              <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Primer Nombre</label>
              <input name="responsable_primer_nombre" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Segundo Nombre</label>
              <input name="responsable_segundo_nombre" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Primer Apellido</label>
              <input name="responsable_primer_apellido" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Segundo Apellido</label>
              <input name="responsable_segundo_apellido" class="form-control">
            </div>
            <div class="col-md-6">
              <label class="form-label">Dirección</label>
              <input name="responsable_direccion" class="form-control" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Cédula</label>
              <input name="responsable_cedula" class="form-control" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Teléfono</label>
              <input name="responsable_telefono" class="form-control" required>
            </div>
          </div>

                              <!-- Button -->
                              <div class="d-md-flex justify-content-between  mt-4">
                                <button class="btn btn-outline-primary mb-2 mb-md-0" onclick="stepperForm.previous()">
                                    Regresar 
                                </button>
                                <!-- Button -->
                                <button class="btn btn-primary" onclick="stepperForm.next()">
                                siguiente Paso<i class="fe fe-credit-card ms-2"></i>
                                </button>
                              </div>
                            </div>
                            <!-- Content three -->
                            <div id="test-l-3" role="tabpanel" class="bs-stepper-pane fade"
                              aria-labelledby="stepperFormtrigger3">
                              <!-- Card -->
                              <div class="mb-5">
                                <h3 class="mb-1">Datos Academicos</h3>
                                <p class="mb-0">Detalles De la Matricula
                                </p>
                              </div>
                              <!-- Card -->
                                          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label">ID del Grado</label>
              <input type="number" name="grado_id" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Año Escolar</label>
              <input name="año_escolar" class="form-control" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Turno</label>
              <select name="turno" class="form-select" required>
                <option value="MAÑANA">Mañana</option>
                <option value="TARDE">Tarde</option>
              </select>
            </div>
          </div>
                              <!-- Button -->
                              <div class="d-flex justify-content-between">
                                <!-- Button -->
                                <button class="btn btn-outline-primary mt-3" onclick="stepperForm.previous()">
                                  Regresar
                                </button>
                                <!-- Button -->
                                <button type="submit" class="btn btn-primary mt-3"
                                  onclick=" location.href='order-summary.html' ">
                                
                                Matricularse
                                </button>
                              </div>
                            </div>

                          </form>
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

  <!-- flatpickr -->
    <script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>

  	  <?php include "../partials/scripts.php" ?>
      
  <script src="../assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
  <script src="../assets/js/vendors/inputmask.js"></script>
      <!-- popper js -->
    <script src="../assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>

		<!-- tippy js -->
		<script src="../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
		<script src="../assets/js/vendors/tooltip.js"></script>
   <!-- Scripts -->
   <script src="../assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
   <script src="../assets/js/vendors/beStepper.js"></script>



</body>

</html>