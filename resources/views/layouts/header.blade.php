<div class="main-header" data-background-color="blue">
	<!-- Logo Header -->
	<div class="logo-header">
		
		<a href="index.html" class="logo">
			<img src="/assets/img/logoazzara.svg" alt="navbar brand" class="navbar-brand">
		</a>
		<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
				<i class="fa fa-bars"></i>
			</span>
		</button>
		<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
		<div class="navbar-minimize">
			<button class="btn btn-minimize btn-rounded">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</div>
	<!-- End Logo Header -->

	<!-- Navbar Header -->
	<nav class="navbar navbar-header navbar-expand-lg">
		
		<div class="container-fluid">
			<!-- Buscador -->
			<div class="collapse" id="search-nav">
				<form class="navbar-left navbar-form nav-search mr-md-3">
					<div class="input-group">
						<div class="input-group-prepend">
							<button type="submit" class="btn btn-search pr-1">
								<i class="fa fa-search search-icon"></i>
							</button>
						</div>
						<input type="text" placeholder="Buscar ..." class="form-control">
					</div>
				</form>
			</div>

			<!-- Navegación de usuario -->
			<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
				<li class="nav-item toggle-nav-search hidden-caret">
					<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
						<i class="fa fa-search"></i>
					</a>
				</li>
				<li class="nav-item dropdown hidden-caret">
					<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-envelope"></i>
					</a>
					<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
						<li>
							<div class="dropdown-title d-flex justify-content-between align-items-center">
								Mensajes 									
								<a href="#" class="small">ver mas</a>
							</div>
						</li>
						<li>
							<div class="message-notif-scroll scrollbar-outer">
								<div class="notif-center">
									<a href="#">
										<div class="notif-img"> 
											<img src="../assets/img/jm_denis.jpg" alt="Img Profile">
										</div>
										<div class="notif-content">
											<span class="subject">Pablo Montoya</span>
											<span class="block">
												Se termino?
											</span>
											<span class="time">5 minutos</span> 
										</div>
									</a>
									<a href="#">
										<div class="notif-img"> 
											<img src="../assets/img/chadengle.jpg" alt="Img Profile">
										</div>
										<div class="notif-content">
											<span class="subject">Dani Cortes</span>
											<span class="block">
												En seguida moy
											</span>
											<span class="time">12 minutos</span> 
										</div>
									</a>
									<a href="#">
										<div class="notif-img"> 
											<img src="../assets/img/mlane.jpg" alt="Img Profile">
										</div>
										<div class="notif-content">
											<span class="subject">Lic Santoyo</span>
											<span class="block">
												Mañana te lo envio
											</span>
											<span class="time">12 minutos</span> 
										</div>
									</a>
								</div>
							</div>
						</li>
						<li>
							<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown hidden-caret">
					<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-bell"></i>
						<span class="notification">4</span>
					</a>
					<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
						<li>
							<div class="dropdown-title">Tienes Notificaciones</div>
						</li>
						<li>
							<div class="notif-scroll scrollbar-outer">
								<div class="notif-center">
									<a href="#">
										<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
										<div class="notif-content">
											<span class="block">
												Se agrego un nuevo cliente
											</span>
											<span class="time">5 minutos</span> 
										</div>
									</a>
									<a href="#">
										<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
										<div class="notif-content">
											<span class="block">
												Moises mando un mensaje
											</span>
											<span class="time">12 minutoso</span> 
										</div>
									</a>
									<a href="#">
										<div class="notif-img"> 
											<img src="../assets/img/profile2.jpg" alt="Img Profile">
										</div>
										<div class="notif-content">
											<span class="block">
												Juan Levanto un ticket
											</span>
											<span class="time">12 minutos </span> 
										</div>
									</a>
								</div>
							</div>
						</li>
						<li>
							<a class="see-all" href="javascript:void(0);">Mira todas las notificaciones<i class="fa fa-angle-right"></i> </a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown hidden-caret">
					<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
						<div class="avatar-sm">
							@if (auth()->user()->foto == null)
								<img src="/Base/mono.png" alt="..." class="avatar-img rounded-circle">
							@else
								<img src="/imagenes/usuarios/{{ auth()->user()->foto }}" alt="image profile" class="avatar-img rounded-circle">
							@endif
						</div>
					</a>
					<ul class="dropdown-menu dropdown-user animated fadeIn">
						<li>
							<div class="user-box">
								<div class="avatar-lg">
									@if (auth()->user()->foto == null)
										<img src="/Base/mono.png" alt="..." class="avatar-img rounded-circle">
									@else
										<img src="/imagenes/usuarios/{{ auth()->user()->foto }}" alt="image profile" class="avatar-img rounded-circle">
									@endif
								</div>
								<div class="u-text">
									<h4>{{ auth()->user()->name }}</h4>
									<p class="text-muted">{{ auth()->user()->email }}</p>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Mi perfil</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Configuración</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
	</nav>
	<!-- End Navbar -->
</div>