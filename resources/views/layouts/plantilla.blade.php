<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfinitoApp</title>

    <!-- *** ESTILOS DE PLANTILLA *** -->
    <!-- Custom fonts for this template-->
    <link href="/plantilla/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="/plantilla/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
  <link href="/plantilla/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

    <!-- Plantilla -->
    <div id="wrapper">

        <!-- Menu lateral -->
        @include('layouts.menu')

        <!-- Contenido de layouts -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Contenido principal -->
            <div id="content">

                <!-- Header -->
                @include('layouts.header')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Contenido del sistema -->
                    @yield('contenido')

                </div>

            </div>

            <!-- Footer -->
            @include('layouts.footer')

        </div>

    </div>

    <!-- *** SCRIP DE PLANTILLA *** -->
    <!-- Bootstrap core JavaScript-->
    <script src="/plantilla/vendor/jquery/jquery.min.js"></script>
    <script src="/plantilla/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/plantilla/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/plantilla/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="/plantilla/vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="/plantilla/js/demo/chart-area-demo.js"></script>
    <script src="/plantilla/js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="/plantilla/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/plantilla/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="/plantilla/js/demo/datatables-demo.js"></script>
</body>
</html>