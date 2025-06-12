<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro de Estudiantes</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="assets/css/formulario.css">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="card border-0 shadow-lg rounded-4 overflow-hidden" id="registroCard">
        <div class="row g-0">
          <!-- Izquierda -->
          <div class="col-md-6 bg-primary text-white d-flex flex-column justify-content-center align-items-center p-5">
            <img src="../assets/images/png/banner_logo.png" alt="Logo Colegio" class="img-fluid" style="max-width: 350px;">
            <h2 class="fw-bold mb-3 text-center">Registro de Estudiante</h2>
            <p class="mb-4 text-center">¿Ya estas registrado? Inicia Seción</p>
            <button class="btn btn-outline-light px-4 py-2" onclick="window.location.href='Login.php'">¿Inicar sección?</button>
          </div>

          <!-- Derecha: Formulario dividido -->
          <div class="col-md-6 p-5">
            <!-- Paso 1: Datos Personales -->
            <div id="paso-personales">
              <h4 class="fw-bold mb-4 text-center">Datos Personales</h4>
              <form onsubmit="event.preventDefault(); mostrarPaso('academicos')">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label>Primer Nombre</label>
                    <input type="text" class="form-control" >
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Segundo Nombre</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Primer Apellido</label>
                    <input type="text" class="form-control" >
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Segundo Apellido</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-md-12 mb-3">
                    <label>Fecha de Nacimiento</label>
                    <div class="d-flex gap-2">
                      <select class="form-select" >
                        <option>Día</option>
                      </select>
                      <select class="form-select" >
                        <option>Mes</option>
                        <option>Enero</option>
                        <option>Febrero</option>
                        <option>Marzo</option>
                        <option>Abril</option>
                        <option>Mayo</option>
                        <option>Junio</option>
                        <option>Julio</option>
                        <option>Agosto</option>
                        <option>Septiembre</option>
                        <option>Octubre</option>
                        <option>Noviembre</option>
                        <option>Diciembre</option>
                      </select>
                      <select class="form-select" >
                        <option>Año</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Departamento</label>
                    <input type="text" class="form-control" >
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Municipio</label>
                    <input type="text" class="form-control" >
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Código de Estudiante</label>
                    <input type="text" class="form-control" >
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Correo Electrónico</label>
                    <input type="email" class="form-control" >
                  </div>
                </div>
                <div class="d-flex gap-3">
                  <button type="submit" class="btn btn-login w-50">Siguiente</button>
                </div>
              </form>
            </div>

            <!-- Paso 2: Datos Académicos -->
            <div id="paso-academicos" style="display: none;">
              <h4 class="fw-bold mb-4 text-center">Datos Académicos</h4>
              <form onsubmit="event.preventDefault(); mostrarPaso('tutor')">
                <div class="mb-3">
                  <label>Grado</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="mb-3">
                  <label>Turno</label>
                  <select class="form-select" >
                    <option>Seleccionar</option>
                    <option>Matutino</option>
                    <option>Vespertino</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label>Fotografía</label>
                  <input type="file" class="form-control" >
                </div>
                <div class="mb-3">
                  <label>Partida de Nacimiento</label>
                  <input type="file" class="form-control" >
                </div>
                <div class="mb-3">
                  <label>Certificado de Notas</label>
                  <input type="file" class="form-control" >
                </div>
                <div class="d-flex gap-3">
                  <button type="button" class="btn btn-secondary w-50" onclick="mostrarPaso('personales')">Atrás</button>
                  <button type="submit" class="btn btn-login w-50">Siguiente</button>
                </div>
              </form>
            </div>

            <!-- Paso 3: Datos del Tutor -->
            <div id="paso-tutor" style="display: none;">
              <h4 class="fw-bold mb-4 text-center">Datos del Tutor</h4>
              <form onsubmit="mostrarConfirmacion(event)">
                <div class="mb-3">
                  <label>Nombre del Tutor</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="mb-3">
                  <label>Teléfono</label>
                  <input type="tel" class="form-control" >
                </div>
                <div class="mb-4">
                  <label>Cédula</label>
                  <input type="text" class="form-control" >
                </div>
                <div class="d-flex gap-3">
                  <button type="button" class="btn btn-secondary w-50" onclick="mostrarPaso('academicos')">Atrás</button>
                  <button type="submit" class="btn btn-login w-50">Finalizar Registro</button>
                </div>
              </form>
            </div>

            <!-- Confirmación -->
            <div id="paso-confirmacion" style="display: none;" class="text-center p-4">
              <i class="fa-solid fa-circle-check fa-3x text-success mb-3"></i>
              <h4 class="fw-bold">¡Registro Exitoso!</h4>
              <p class="mt-3">
                Sus datos se han enviado correctamente. Serán validados y recibirá una notificación por correo electrónico para proceder con la matrícula.
              </p>
              <div class="text-center text-muted mb-2">Ingesa a nuestras redes sociales</div>
                <div class="d-flex justify-content-center social-btns">
                  <i class="fab fa-google"></i>
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-github"></i>
                  <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Animaciones y lógica -->
<script src="assets/js/formulario.js"></script>

</body>
</html>

