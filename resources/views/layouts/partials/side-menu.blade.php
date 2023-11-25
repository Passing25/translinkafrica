			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="{{route('dashboard')}}">
						<img src="{{URL::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon-light.png')}}" class="header-brand-img icon-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="{{URL::asset('assets/img/brand/icon.png')}}" class="header-brand-img icon-logo theme-logo" alt="logo">
					</a>
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="{{route('dashboard')}}"><span class="shape1"></span><span class="shape2"></span><i class="si si-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="{{route('expedition.create')}}"><span class="shape1"></span><span class="shape2"></span><i class="si si-plus sidemenu-icon"></i><span class="sidemenu-label">Nouvelle Expédition</span></a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="{{route('expedition.index')}}"><span class="shape1"></span><span class="shape2"></span><i class="si si-layers sidemenu-icon"></i><span class="sidemenu-label">Liste des expéditions</span></a>
						</li>
                         <li class="nav-item">
							<a class="nav-link" href="{{route('proposition.create')}}"><span class="shape1"></span><span class="shape2"></span><i class="si si-plus sidemenu-icon"></i><span class="sidemenu-label">Nouvelle Proposition</span></a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="{{route('proposition.create')}}"><span class="shape1"></span><span class="shape2"></span><i class="si si-plus sidemenu-icon"></i><span class="sidemenu-label">Liste des Propsition</span></a>
						</li>
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->
