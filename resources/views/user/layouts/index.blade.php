<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
	<meta name="author" content="themefisher.com">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>IBNUSINA | @yield('title')</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/icofont/icofont.min.css')}}">
	<!-- Slick Slider  CSS -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick-theme.css')}}">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	<link rel="stylesheet" href="{{ asset('assets-profile/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets-profile/vendors/ti-icons/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('assets-profile/vendors/css/vendor.bundle.base.css')}}">
	<link rel="stylesheet" href="{{ asset('assets-profile/vendors/font-awesome/css/font-awesome.min.css')}}">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('assets-profile/vendors/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets-profile/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="{{ asset('assets-profile/css/style.css')}}">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="{{ asset('assets-profile/images/favicon.png')}}">

</head>

<body id="top">

	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<ul class="top-bar-info list-inline-item pl-0 mb-0">
							<li class="list-inline-item"><a href="mailto:support@gmail.com"><i
										class="icofont-support-faq mr-2"></i>rsibnusina@gmail.com</a></li>
							<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Lisman Street No. 07,
								Bojonegoro Regency </li>
						</ul>
					</div>
					<div class="col-lg-6">
						<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
							<a href="tel:+23-345-67890">
								<span>Call Now : </span>
								<span class="h4">(0353) 883238</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navigation" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="assets/images/logo.png" alt="" class="img-fluid">
				</a>

				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
					aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icofont-navigation-menu"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarmain">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="/about">About</a></li>
						<li class="nav-item"><a class="nav-link" href="/service">Services</a></li>

						<li class="nav-item dropdown">
							<a class="nav-link" href="/room" aria-haspopup="true" aria-expanded="false">Our Rooms</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">Doctors</a>
							<ul class="dropdown-menu" aria-labelledby="dropdown03">
								<li><a class="dropdown-item" href="/doctors">Doctors</a></li>
								<li><a class="dropdown-item" href="/doctorssingle">Doctor Single</a></li>
								<li><a class="dropdown-item" href="/appoinment">Appoinment</a></li>
							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
							<ul class="dropdown-menu" aria-labelledby="dropdown05">
								<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>
								<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
							</ul>
						</li>
						<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						@auth
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false">Profile</a>
								<ul class="dropdown-menu" aria-labelledby="profileDropdown">
									<li><a class="dropdown-item" href="/profile">My Profile</a></li>
									<li><a class="dropdown-item" href="/settings">Settings</a></li>
									<li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit">
                                                Log Out
                                            </button>
                                        </form>
                                    </li>
								</ul>
							</li>
						@else
							<li class="nav-item"><a class="nav-link" href="/login">Login/Register</a></li>
						@endauth
					</ul>
				</div>
			</div>
		</nav>
	</header>


	<div class="container mt-4">
		@yield('container')
	</div>

	<!--
    Essential Scripts
    =====================================-->


	<!-- Main jQuery -->
	<script src="{{ asset('assets/plugins/jquery/jquery.js')}}"></script>
	<!-- Bootstrap 4.3.2 -->
	<script src="{{ asset('assets/plugins/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/counterup/jquery.easing.js')}}"></script>
	<!-- Slick Slider -->
	<script src="{{ asset('assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>
	<!-- Counterup -->
	<script src="{{ asset('assets/plugins/counterup/jquery.waypoints.min.js')}}"></script>

	<script src="{{ asset('assets/plugins/shuffle/shuffle.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js')}}"></script>
	<!-- Google Map -->
	<script src="{{ asset('assets/plugins/google-map/map.js')}}"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

	<script src="{{ asset('assets/js/script.js') }}"></script>
	<script src="{{ asset('assets/js/contact.js') }}"></script>

	<script src="{{ asset('assets-profile/vendors/js/vendor.bundle.base.js')}}"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="{{ asset('assets-profile/vendors/chart.js/chart.umd.js')}}"></script>
	<script src="{{ asset('assets-profile/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="{{ asset('assets-profile/js/off-canvas.js')}}"></script>
	<script src="{{ asset('assets-profile/js/misc.js')}}"></script>
	<script src="{{ asset('assets-profile/js/settings.js')}}"></script>
	<script src="{{ asset('assets-profile/js/todolist.js')}}"></script>
	<script src="{{ asset('assets-profile/js/jquery.cookie.js')}}"></script>
	<!-- endinject -->
	<!-- Custom js for this page -->
	<script src="{{ asset('assets-profile/js/dashboard.js') }}"></script>
	<!-- End custom js for this page -->

</body>

</html>
