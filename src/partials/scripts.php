<!-- Libs JS -->
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/main.js"></script>

<!-- jQuery (necesario para DataTables) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- JS de DataTables -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<!-- Idioma DataTables -->
<script src="https://cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"></script>

  <script>
    $(document).ready(function () {
      $('#example').DataTable({
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.13.6/i18n/es_es.json',
            decimal: ',',
            thousands: '.',
            processing: "Procesando...",
            loadingRecords: "Cargando registros...",
            emptyTable: "No hay datos disponibles en la tabla",
            info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            infoEmpty: "Mostrando 0 a 0 de 0 entradas",
            infoFiltered: "(filtrado de _MAX_ entradas totales)",
            lengthMenu: "Mostrar _MENU_ entradas",
            search: "Buscar:",
            zeroRecords: "No se encontraron registros coincidentes",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            },
            aria: {
                sortAscending: ": activar para ordenar ascendentemente",
                sortDescending: ": activar para ordenar descendentemente"
            }
        }
    });
    });
  </script>

