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
                                          $nombre_completo = $estudiante['primer_nombre'] . ' ' . 
                                                $estudiante['segundo_nombre'] . ' ' . 
                                                $estudiante['primer_apellido'] . ' ' . 
                                                $estudiante['segundo_apellido'];
                                          $maestro_guia = $estudiante['docente_primer_nombre'] . ' ' . $estudiante['docente_primer_apellido'];

                                                $seccion_guiada = $estudiante['grado'] . ' ' . $estudiante['seccion'];
                                      ?>
                                        <tr>
                                            <td> <a href="#!"><?=$estudiante['estudiante_id']?></a></td>
                                            <td class="ps-1">
                                              <div class="d-flex align-items-center">
                                                <!-- <a href="#!"><img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-sm rounded-circle"></a> -->
                                                <div class="ms-2">
                                                <h5 class="mb-0"><a href="#!" class="text-inherit"></a><?php echo $nombre_completo?></h5>
                                                </div>
                                            </div>
                                            </td>
                                            <td><?php echo $maestro_guia ?></td>
                                            <td> <?= $estudiante['codigo_estudiantil'] ?> </td>
                                            <td><?= $estudiante['telefono'] ?></td>
                                            <td><?php echo $seccion_guiada?></td>
                                            <td><span class="badge badge-success-soft text-success"><?= $estudiante['estado_matricula'] ?></span></td>
                                              <td>
                                                    <!-- Ver
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
                                                    </a> -->
                                                    <a href="javascript:void(0);" onclick='abrirModalEditarEstudiante(<?= json_encode($estudiante) ?>)' class="btn btn-ghost btn-icon btn-sm rounded-circle"><i data-feather="edit" class="icon-xs"></i>
                                                    </a>

                                                    <a
                                                    href="#!"
                                                    class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                    data-template="trashOne"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#deleteEstudentModal"
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

<!-- Modal Nuevo Registro -->
<div class="modal fade" id="addEstudentModal" tabindex="-1" aria-labelledby="addEstudentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="addCustomerModalLabel">Nuevo registro de estudiante</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="registroForm" method="POST">
          
          <h5 class="mb-3 mt-2">Datos del Estudiante</h5>
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

          <h5 class="mb-3 mt-4">Datos del Responsable</h5>
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

          <h5 class="mb-3 mt-4">Datos de Matrícula</h5>
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
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" form="registroForm" class="btn btn-primary">Guardar Estudiante</button>
      </div>
    </div>
  </div>
</div>

<!-- Editar Estudiante -->
<div class="modal fade" id="modalEditarEstudiante" tabindex="-1" aria-labelledby="modalEditarEstudianteLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <form id="formEditarEstudiante" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarEstudianteLabel">Editar Estudiante</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="estudiante_id" id="editarEstudianteId">

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editarPrimerNombreE" class="form-label">Primer Nombre</label>
              <input type="text" class="form-control" name="primer_nombre" id="editarPrimerNombreE" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editarSegundoNombreE" class="form-label">Segundo Nombre</label>
              <input type="text" class="form-control" name="segundo_nombre" id="editarSegundoNombreE">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editarPrimerApellidoE" class="form-label">Primer Apellido</label>
              <input type="text" class="form-control" name="primer_apellido" id="editarPrimerApellidoE" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editarSegundoApellidoE" class="form-label">Segundo Apellido</label>
              <input type="text" class="form-control" name="segundo_apellido" id="editarSegundoApellidoE">
            </div>
          </div>

          <div class="mb-3">
            <label for="editarCodigoEstudiantilE" class="form-label">Código Estudiantil</label>
            <input type="text" class="form-control" name="codigo_estudiantil" id="editarCodigoEstudiantilE" required>
          </div>

          <div class="mb-3">
            <label for="editarTelefonoE" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="editarTelefonoE" required>
          </div>

          <div class="mb-3">
            <label for="editarEstadoMatriculaE" class="form-label">Estado Matrícula</label>
            <select class="form-select" name="estado_matricula" id="editarEstadoMatriculaE" required>
              <option value="">Seleccione estado</option>
              <option value="Matriculado">Matriculado</option>
              <option value="Preinscrito">Preinscrito</option>
              <option value="Retirado">Retirado</option>
              <option value="Egresado">Egresado</option>
            </select>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </div>
    </form>
  </div>
</div>





 <!-- Modal Eliminar Estudiante -->
      <div class="modal fade" id="deleteEstudentModal" tabindex="-1" aria-labelledby="deleteEstudentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">¿Eliminar estudiante?</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar al estudiante <strong>Juan Pérez</strong>? Esta acción no se puede deshacer.
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        function abrirModalEditarEstudiante(estudiante) {
        document.getElementById('editarEstudianteId').value = estudiante.estudiante_id;
        document.getElementById('editarPrimerNombreE').value = estudiante.primer_nombre;
        document.getElementById('editarSegundoNombreE').value = estudiante.segundo_nombre;
        document.getElementById('editarPrimerApellidoE').value = estudiante.primer_apellido;
        document.getElementById('editarSegundoApellidoE').value = estudiante.segundo_apellido;
        document.getElementById('editarCodigoEstudiantilE').value = estudiante.codigo_estudiantil;
        document.getElementById('editarTelefonoE').value = estudiante.telefono;
        document.getElementById('editarEstadoMatriculaE').value = estudiante.estado_matricula;

        new bootstrap.Modal(document.getElementById('modalEditarEstudiante')).show();
      }
        </script>

     		<script>
			document.getElementById('registroForm').addEventListener('submit', function (e) {
			e.preventDefault();

			const form = e.target;
			const formData = new FormData(form);

			fetch('../controllers/matricula.controller.php', {
				method: 'POST',
				body: formData
			})
			.then(res => res.text())
			.then(data => {
				if (data.trim() === 'ok') {
          // Mostra mensaje correcto con SweetAlert2
					Swal.fire({
						icon: 'success',
						title: 'Estudiante Registrado',
            text: 'Estudiante Registrado Sastifactoriamente',
						showConfirmButton: false,
						timer: 2500,
						timerProgressBar: true
					});
				} else {
					// Mostrar error con SweetAlert2
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: 'Algunos parametros no son validos',
						showConfirmButton: false,
						timer: 2500,
						timerProgressBar: true
					});
				}
			})
			.catch(() => {
				Swal.fire({
					icon: 'error',
					title: 'Error de red',
					text: 'No se pudo conectar con el servidor.',
					showConfirmButton: false,
					timer: 2500,
					timerProgressBar: true
				});
			});
		});
		</script>


<script>
			document.getElementById('formEditarEstudiante').addEventListener('submit', function (e) {
			e.preventDefault();

			const form = e.target;
			const formData = new FormData(form);

			fetch('../controllers/edit.estudiante.controller.php', {
				method: 'POST',
				body: formData
			})
			.then(res => res.text())
			.then(data => {
				if (data.trim() === 'ok') {
          // Mostra mensaje correcto con SweetAlert2
					Swal.fire({
						icon: 'success',
						title: 'Estudiante actualizado',
            text: 'Los datos del estudiante fueron actualizados correctamente.',
						showConfirmButton: false,
						timer: 2500,
						timerProgressBar: true
					});
				} else {
					// Mostrar error con SweetAlert2
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: 'Algunos parametros no son validos',
						showConfirmButton: false,
						timer: 2500,
						timerProgressBar: true
					});
				}
			})
			.catch(() => {
				Swal.fire({
					icon: 'error',
					title: 'Error de red',
					text: 'No se pudo conectar con el servidor.',
					showConfirmButton: false,
					timer: 2500,
					timerProgressBar: true
				});
			});
		});
		</script>

    


            <!-- Scripts -->
    <script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>

      <!-- popper js -->
    <script src="../assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>

        <!-- tippy js -->
    <script src="../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="../assets/js/vendors/tooltip.js"></script>

	  <?php include "../partials/scripts.php" ?>



</body>

</html>