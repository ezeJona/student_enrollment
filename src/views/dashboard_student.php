<!DOCTYPE html>
<html lang="es">

<head>
	<?php 
    include "../partials/head.php";
    include "../models/student.model.php";
    
    $objetoEstudent = new EstudentModel();
    $allEstudent = $objetoEstudent->read();
    
  ?>
    
  <title>Estudiante </title>
</head>

<body>
  <main id="main-wrapper" class="main-wrapper">
		<?php include "../partials/header.php" ?>
    <!-- navbar vertical -->

		<?php include "../partials/navbar-vertical.php"?>


      <!-- Page Content -->
      <div id="app-content">

        <!-- Container fluid -->
        <div class="app-content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div class="mb-5">
                        <h3 class="mb-0 ">Estudiantes</h3>

                    </div>
                </div>
            </div>
            <div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card mb-4">
                          <div class="card-header  ">
                            <div class="row justify-content-between" >
                                <!-- Agregar Nuevo Estudiante -->
                                <div class="col-md-6 mb-3 ">
                                    <a href="#!" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addEstudentModal">+ Nuevo Estudiante</a>
                                </div>
                                <!-- Botones de Exportar-->
                                <div class="col-md-6 text-lg-end mb-3">
                                    <!-- <a href="#!" class="btn btn-light me-1" ><i  data-feather="trash-2" class="icon-xs"></i></a> -->
                                    <a href="#!" class="btn btn-light me-1" >Exportar Excel</a>
                                    <a href="#!" class="btn btn-light " >Exportar PDF</a>
                                </div>
                            </div>
                        </div>
                          <div class="card-body">
                            <div class="table-responsive table-card">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Maestro Guía</th>
                                        <th>Código de estudiante</th>
                                        <th>Teléfono</th>
                                        <th>Grado</th>
                                        <th>Matrícula</th>
                                        <th>Acción</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        while($estudiante = mysqli_fetch_assoc($allEstudent)){
                                      ?>
                                        <tr>
                                            <td> <a href="#!"><?=$estudiante['estudiante_id']?></a></td>
                                            <td class="ps-1">
                                              <div class="d-flex align-items-center">
                                                <!-- <a href="#!"><img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-sm rounded-circle"></a> -->
                                                <div class="ms-2">
                                                <h5 class="mb-0"><a href="#!" class="text-inherit"></a><?= $estudiante['nombre_completo']?></h5>
                                                </div>
                                            </div>
                                            </td>
                                            <td><?= $estudiante['maestro_guia'] ?></td>
                                            <td> <?= $estudiante['codigo_estudiantil'] ?> </td>
                                            <td><?= $estudiante['telefono'] ?></td>
                                            <td><?= $estudiante['grado_seccion'] ?></td>
                                            <td><span class="badge badge-success-soft text-success"><?= $estudiante['estado_matricula'] ?></span></td>
                                            <td>
                                              <a
                                                  href="#!"
                                                  class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                  data-template="editOne"
                                                >
                                                  <i
                                                    data-feather="eye"
                                                    class="icon-xs"
                                                  ></i>
                                                  <div id="editOne" class="d-none">
                                                    <span>Ver</span>
                                                  </div>
                                                </a>
                                                <a
                                                  href="#!"
                                                  class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                  data-template="editOne"
                                                >
                                                  <i
                                                    data-feather="edit"
                                                    class="icon-xs"
                                                  ></i>
                                                  <div id="editOne" class="d-none">
                                                    <span>Editar</span>
                                                  </div>
                                                </a>
                                                <a
                                                  href="#!"
                                                  class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                  data-template="trashOne"
                                                >
                                                  <i
                                                    data-feather="trash-2"
                                                    class="icon-xs"
                                                  ></i>
                                                  <div id="trashOne" class="d-none">
                                                    <span>Eliminar</span>
                                                  </div>
                                                </a>

                                            </td>
                                              <?php
                                                }                    
                                              ?>
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
  </main>




  <!-- Modal -->
<div class="modal fade" id="addEstudentModal" tabindex="-1" aria-labelledby="addEstudentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="addCustomerModalLabel">Nuevo registro de estudiante</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      <div class="modal-body">
        <form id="formAgregarEstudiante" action="../controllers/student.controller.php" method="POST">

          <!-- Datos personales del estudiante -->
          <h5 class="mb-3">Datos Personales</h5>
          <div class="row g-3">
            <div class="col-md-4">
              <label for="codigoEstudiante" class="form-label">Código Estudiantil</label>
              <input type="text" class="form-control" id="codigoEstudiante" name="codigoEstudiante" required>
            </div>
            <div class="col-md-4">
              <label for="primerNombre" class="form-label">Primer Nombre</label>
              <input type="text" class="form-control" id="primerNombre" name="primerNombre" required>
            </div>
            <div class="col-md-4">
              <label for="segundoNombre" class="form-label">Segundo Nombre</label>
              <input type="text" class="form-control" id="segundoNombre" name="segundoNombre">
            </div>
            <div class="col-md-4">
              <label for="primerApellido" class="form-label">Primer Apellido</label>
              <input type="text" class="form-control" id="primerApellido" name="primerApellido" required>
            </div>
            <div class="col-md-4">
              <label for="segundoApellido" class="form-label">Segundo Apellido</label>
              <input type="text" class="form-control" id="segundoApellido" name="segundoApellido">
            </div>
            <div class="col-md-4">
              <label for="telefono" class="form-label">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-3">
              <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
              <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
            </div>
            <div class="col-md-3">
              <label for="sexo" class="form-label">Sexo</label>
              <select class="form-select" id="sexo" name="sexo" required>
                <option value="" selected disabled>Seleccione</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="departamento" class="form-label">Departamento</label>
              <input type="text" class="form-control" id="departamento" name="departamento" required>
            </div>
            <div class="col-md-6">
              <label for="municipio" class="form-label">Municipio</label>
              <input type="text" class="form-control" id="municipio" name="municipio" required>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" form="formAgregarEstudiante" class="btn btn-primary">Guardar Estudiante</button>
      </div>
    </div>
  </div>
</div>

    <!-- Script para mostrar vista previa de la imagen del estudiante -->
      <script>

    function mostrarVistaPrevia(event) {
      const input = event.target;
      const vistaPrevia = document.getElementById('vistaPreviaFoto');

      if (input.files && input.files[0]) {
        const lector = new FileReader();
        lector.onload = function(e) {
          vistaPrevia.src = e.target.result;
          vistaPrevia.style.display = 'block';
        };
        lector.readAsDataURL(input.files[0]);
      } else {
        vistaPrevia.src = '#';
        vistaPrevia.style.display = 'none';
      }
    }
  </script>


            <!-- Scripts -->

	<?php include "../partials/scripts.php" ?>

</body>

</html>