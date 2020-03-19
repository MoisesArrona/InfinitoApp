<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfinitoApp</title>
    <!-- *** ESTILOS DE PLANTILLA *** -->
    <!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/azzara.min.css">
</head>
<body>
    <!-- Plantilla -->
    <div id="wrapper">

        <!-- Header -->
        @include('layouts.header')

        <!-- Menu (Slider) -->
        @include('layouts.menu')

        <!-- Contenido de layouts -->
        <div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">@yield('title')</h4>
						<div class="btn-group btn-group-page-header ml-auto">
							<button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-h"></i>
							</button>
							<div class="dropdown-menu">
								<div class="arrow"></div>
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Separated link</a>
							</div>
						</div>
					</div>
				
					@yield('contenido')
				</div>
			</div>
			
        </div>
        
        @include('layouts.footer')

    </div>

    <!-- *** SCRIP DE PLANTILLA *** -->
	<!--   Core JS Files   -->
	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="/assets/js/core/popper.min.js"></script>
	<script src="/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<!-- jQuery Scrollbar -->
	<script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Moment JS -->
	<script src="/assets/js/plugin/moment/moment.min.js"></script>
	<!-- Chart JS -->
	<script src="/assets/js/plugin/chart.js/chart.min.js"></script>
	<!-- jQuery Sparkline -->
	<script src="/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
	<!-- Chart Circle -->
	<script src="/assets/js/plugin/chart-circle/circles.min.js"></script>
	<!-- Datatables -->
	<script src="/assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Bootstrap Notify -->
	<script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
	<!-- Bootstrap Toggle -->
	<script src="/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
	<!-- jQuery Vector Maps -->
	<script src="/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
	<!-- Google Maps Plugin -->
	<script src="/assets/js/plugin/gmaps/gmaps.js"></script>
	<!-- Sweet Alert -->
	<script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
	<!-- Azzara JS -->
	<script src="/assets/js/ready.min.js"></script>
</body>
</html>