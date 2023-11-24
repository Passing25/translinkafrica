<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Application web pour Logistique">
		<meta name="author" content="Translink Africa">

		@include('layouts.partials.custom-css')

        <title>@yield('Title')</title>

	</head>

	<body class="main-body leftmenu">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
        <!-- End Loader -->

        @yield('content')
		@include('layouts.partials.custom-script')

	</body>
</html>
