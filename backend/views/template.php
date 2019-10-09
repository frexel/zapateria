<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Zapateria</title>

    <!-- Bootstrap core CSS -->
    <link href="views/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="views/css/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="views/css/datatables.min.css">
    <link rel="stylesheet" href="views/css/back.css">
</head>

<body>


    <!--=============================================-->
    <!--======              NAV                ======-->
    <?php include "views/modules/nav.php"; ?>
    <!--=============================================-->

    <div class="container-fluid">
        <div class="row">

            <!--=============================================-->
            <!--======              ASIDE              ======-->
            <?php include "views/modules/aside.php"; ?>
            <!--=============================================-->


            <!--=============================================-->
            <!--======         MAIN SECTION            ======-->
            <?php 
            $modulos = new Enlaces();
            //Esto llama a la funcion dentro de controllers
            $modulos->enlacesController(); 
            ?>
            <!--=============================================-->
            
        </div>
    </div>
    <script src="views/js/jquery-3.4.1.min.js"></script>
    <script src="views/js/bootstrap.bundle.min.js"></script>
    <script src="views/js/datatables.min.js"></script>
    <script src="views/js/holder.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf'
                ],
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay información disponible para esta tabla",
                    "info": "Mostrando _START_ de _END_ de _TOTAL_ entradas",
                    "infoEmpty": "Mostrando 0 de 0 de 0 entradas",
                    "infoFiltered": "(filtered from _MAX_ total entries)",
                    "infoPostFix": "",
                    "thousands": ".",
                    "lengthMenu": "Mostrar _MENU_ entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "No se encontraron registros",
                    "paginate": {
                        "first": "Primera",
                        "last": "Última",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "aria": {
                        "sortAscending": ": activar para  ordenar de forma ascendente",
                        "sortDescending": ": activar para ordenar de forma descendiente"
                    }
                }
            });
        });
    </script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>