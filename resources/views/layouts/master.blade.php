<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Application web pour Logistique">
		<meta name="author" content="Translink Africa">

        @include('layouts.partials.css')

        <title>Translink-Africa | @yield('Title')</title>

	</head>

	<body class="main-body leftmenu">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
        <!-- End Loader -->

		<!-- Page -->
		<div class="page">

        @include('layouts.partials.side-menu')
        @include('layouts.partials.main-header')
		@include('layouts.partials.mobile-header')

			<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">
						<div class="page-header">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
								<li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
							</ol>
						</div>
						@yield('content')

					</div>
				</div>
			</div>
			<!-- End Main Content-->

		@include('layouts.partials.footer')
		@yield('modal')

		</div>
        <!-- End Page -->

        @include('layouts.partials.script')
        @yield('additional-scripts')

	</body>
</html>
