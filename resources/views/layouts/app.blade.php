<!DOCTYPE HTML>
<html>
<head>
	<title>KVO</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
	<noscript>
        <link rel="stylesheet" href="{{ asset('css/noscript.css')}} " />
    </noscript>
    {{-- Additional libraries or css code --}}
    @yield('libraries')
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper" class="fade-in">
		<!-- Intro -->

		<!-- Header -->
		<header id="header">
			<div class="header-wrapper">
				<div class="left-side-header">
					<div class="logo">
						<a class="logo-container" href="{{ url('./') }}">
							<img src="{{ asset('/images/logo.png') }}" alt="" class="logo-img">
						</a>
					</div>
					<h1 class="min-title">
						Коллектив<br>
						военных<br> 
						охотников
					</h1>
				</div>

				<div class="auto-jsCalendar"></div>
			</div>
		</header>

		<!-- Nav -->
        @include('layouts.navigation')

		<!-- Main -->
		<div id="main">
            {{-- Main content --}}
            @yield('content')
		</div>

		<!-- Copyright -->
		<div id="copyright">
			<ul>
				<li>&copy; ВАС</li>
				<li>Design: Mishin Alexey</li>
			</ul>
		</div>

		<div class="bg"></div>
	</div>

	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Additional scripts or js libraries --}}
    @yield('scripts')
</body>

</html>