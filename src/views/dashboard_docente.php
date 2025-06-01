<!DOCTYPE html>
<html lang="en">

<head>
	<?php 
    include "../partials/head.php";
    include "../models/docente.model.php";
    
    $objetoDocente = new DocenteModel();
    $allDocentes = $objetoDocente->read();
    
    ?>

    <title>Docente </title>
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
                            <h3 class="mb-0 ">Docente</h3>

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
                                        <!-- Agregar Nuevo Docente -->
                                        <div class="col-md-6 mb-3 ">

                                            <a href="#!" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addDocenteModal">+ Nuevo Estudiante</a>

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
                                                <th> ID
                                                </th>
                                                <th>Nombre</th>
                                                <th>Cedula</th>
                                                <th>Telefono</th>
                                                <th>Seccion Guiada</th>
                                                <th>Turno</th>
                                                <th>Estado</th>
                                                <th>Acción</th>                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            while($docente = mysqli_fetch_assoc($allDocentes)){
                                            $nombre_completo = $docente['primer_nombre'] . ' ' . 
                                                $docente['segundo_nombre'] . ' ' . 
                                                $docente['primer_apellido'] . ' ' . 
                                                $docente['segundo_apellido'];

                                            $seccion_guiada = $docente['grado'] . ' ' . $docente['seccion'];
                                        ?>
                                            <tr>
                                                <td> <a href="#!"><?=$docente['docente_id']?></a></td>
                                                <td class="ps-1">
                                                <div class="d-flex align-items-center">
                                                    <!-- <a href="#!"><img src="../assets/images/avatar/avatar-11.jpg" alt="Image" class="avatar avatar-sm rounded-circle"></a> -->
                                                    <div class="ms-2">
                                                    <h5 class="mb-0"><a href="#!" class="text-inherit"></a><?php echo $nombre_completo?></h5>
                                                    </div>
                                                </div>
                                                </td>
                                                <td><?= $docente['cedula'] ?></td>
                                                <td> <?= $docente['telefono'] ?> </td>
                                                <td><?php echo $seccion_guiada ?></td>
                                                <td><?= $docente['turno'] ?></td>
                                                <td><span class="badge badge-success-soft text-success"><?= $docente['estado'] ?></span></td>
                                                <td>
                                                    <a href="javascript:void(0);" onclick='abrirModalEditar(<?= json_encode($docente) ?>)' class="btn btn-ghost btn-icon btn-sm rounded-circle">
                                                    <i data-feather="edit" class="icon-xs"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" onclick='abrirModalEliminar(<?= json_encode($docente) ?>)' class="btn btn-ghost btn-icon btn-sm rounded-circle text-danger">
                                                    <i data-feather="trash-2" class="icon-xs"></i>
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
    <div class="modal fade" id="addDocenteModal" tabindex="-1" aria-labelledby="addDocenteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="addCustomerModalLabel">Nuevo registro de estudiante</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="registroForm" method="POST">
            <input type="hidden" name="agregar_docente" value="1">

            <div class="row mb-3">
                <div class="col-md-6">
                <label class="form-label">Primer Nombre:</label>
                <input type="text" name="primer_nombre" class="form-control" required>
                </div>
                <div class="col-md-6">
                <label class="form-label">Segundo Nombre:</label>
                <input type="text" name="segundo_nombre" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                <label class="form-label">Primer Apellido:</label>
                <input type="text" name="primer_apellido" class="form-control" required>
                </div>
                <div class="col-md-6">
                <label class="form-label">Segundo Apellido:</label>
                <input type="text" name="segundo_apellido" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                <label class="form-label">Cédula:</label>
                <input type="text" name="cedula" class="form-control" required>
                </div>
                <div class="col-md-6">
                <label class="form-label">Teléfono:</label>
                <input type="text" name="telefono" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Turno:</label>
                <select name="turno" class="form-select" required>
                <option value="MAÑANA">MAÑANA</option>
                <option value="TARDE">TARDE</option>
                </select>
            </div>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" form="registroForm" class="btn btn-primary">Agregar Docente</button>
        </div>
        </div>
    </div>
    </div>

        <!-- Modal Editar Docente -->
    <!-- Modal Editar Docente -->
<div class="modal fade" id="modalEditarDocente" tabindex="-1" aria-labelledby="modalEditarDocenteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="formEditarDocente" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarDocenteLabel">Editar Docente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="docente_id" id="editarDocenteId">
          
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editarPrimerNombre" class="form-label">Primer Nombre</label>
              <input type="text" class="form-control" name="primer_nombre" id="editarPrimerNombre" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editarSegundoNombre" class="form-label">Segundo Nombre</label>
              <input type="text" class="form-control" name="segundo_nombre" id="editarSegundoNombre">
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="editarPrimerApellido" class="form-label">Primer Apellido</label>
              <input type="text" class="form-control" name="primer_apellido" id="editarPrimerApellido" required>
            </div>
            <div class="col-md-6 mb-3">
              <label for="editarSegundoApellido" class="form-label">Segundo Apellido</label>
              <input type="text" class="form-control" name="segundo_apellido" id="editarSegundoApellido">
            </div>
          </div>

          <div class="mb-3">
            <label for="editarCedula" class="form-label">Cédula</label>
            <input type="text" class="form-control" name="cedula" id="editarCedula" required>
          </div>

          <div class="mb-3">
            <label for="editarTelefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="editarTelefono" required>
          </div>

          <div class="mb-3">
            <label for="editarTurno" class="form-label">Turno</label>
            <select class="form-select" name="turno" id="editarTurno" required>
              <option value="">Seleccione un turno</option>
              <option value="Mañana">Mañana</option>
              <option value="Tarde">Tarde</option>
              <option value="Noche">Noche</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="editarEstado" class="form-label">Estado</label>
            <select class="form-select" name="estado" id="editarEstado" required>
              <option value="">Seleccione estado</option>
              <option value="Activo">Activo</option>
              <option value="Inactivo">Inactivo</option>
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



    <!-- Modal Eliminar Docente -->
    <div class="modal fade" id="modalEliminarDocente" tabindex="-1" aria-labelledby="modalEliminarDocenteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="formEliminarDocente" method="POST">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalEliminarDocenteLabel">Eliminar Docente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
            <input type="hidden" name="docente_id" id="eliminarDocenteId">
            <p>¿Estás seguro que deseas eliminar a este docente?</p>
            <p class="fw-bold text-danger" id="eliminarDocenteNombre"></p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
        </form>
    </div>
    </div>

<script>
    // Editar
function abrirModalEditar(docente) {
  document.getElementById('editarDocenteId').value = docente.docente_id;
  document.getElementById('editarPrimerNombre').value = docente.primer_nombre;
  document.getElementById('editarSegundoNombre').value = docente.segundo_nombre;
  document.getElementById('editarPrimerApellido').value = docente.primer_apellido;
  document.getElementById('editarSegundoApellido').value = docente.segundo_apellido;
  document.getElementById('editarCedula').value = docente.cedula;
  document.getElementById('editarTelefono').value = docente.telefono;
  document.getElementById('editarTurno').value = docente.turno;
  document.getElementById('editarEstado').value = docente.estado;
  
  new bootstrap.Modal(document.getElementById('modalEditarDocente')).show();
}


  // Eliminar
  function abrirModalEliminar(docente) {
    document.getElementById('eliminarDocenteId').value = docente.docente_id;
    document.getElementById('eliminarDocenteNombre').textContent = docente.nombre_completo;
    new bootstrap.Modal(document.getElementById('modalEliminarDocente')).show();
  }
</script>


     		<script>
			document.getElementById('registroForm').addEventListener('submit', function (e) {
			e.preventDefault();

			const form = e.target;
			const formData = new FormData(form);

			fetch('../controllers/docente.controller.php', {
				method: 'POST',
				body: formData
			})
			.then(res => res.text())
			.then(data => {
				if (data.trim() === 'ok') {
          // Mostra mensaje correcto con SweetAlert2
					Swal.fire({
						icon: 'success',
						title: 'Docente Registrado',
                        text: 'Docente Registrado Sastifactoriamente',
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
			document.getElementById('formEliminarDocente').addEventListener('submit', function (e) {
			e.preventDefault();

			const form = e.target;
			const formData = new FormData(form);

			fetch('../controllers/edit.docente.controller.php', {
				method: 'POST',
				body: formData
			})
			.then(res => res.text())
			.then(data => {
				if (data.trim() === 'ok') {
          // Mostra mensaje correcto con SweetAlert2
					Swal.fire({
						icon: 'success',
						title: 'Docente Eliminado',
                        text: 'El docente fue eliminado correctamente.',
						showConfirmButton: false,
						timer: 2500,
						timerProgressBar: true
					});
				} else {
					// Mostrar error con SweetAlert2
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: data,
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
			document.getElementById('formEditarDocente').addEventListener('submit', function (e) {
			e.preventDefault();

			const form = e.target;
			const formData = new FormData(form);

			fetch('../controllers/edit.docente.controller.php', {
				method: 'POST',
				body: formData
			})
			.then(res => res.text())
			.then(data => {
				if (data.trim() === 'ok') {
          // Mostra mensaje correcto con SweetAlert2
					Swal.fire({
						icon: 'success',
						title: 'El docente fue modificado',
                        text: 'El docente fue modificado correctamente.',
						showConfirmButton: false,
						timer: 2500,
						timerProgressBar: true
					});
				} else {
					// Mostrar error con SweetAlert2
					Swal.fire({
						icon: 'error',
						title: 'Error',
						text: data,
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
        <!-- flatpickr -->
<script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>

	<?php include "../partials/scripts.php" ?>



    <!-- popper js -->
    <script src="../assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
    <!-- tippy js -->
    <script src="../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="../assets/js/vendors/tooltip.js"></script>



</body>

</html>