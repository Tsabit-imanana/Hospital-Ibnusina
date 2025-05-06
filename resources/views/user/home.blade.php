@extends('user.layouts.index')
@section('container')
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing"  style="color:rgba(240, 240, 240, 0.34);">Providing Better Care for Every Patient</span>
					<h1 class="mb-3 mt-3">Ibnu Sina Hospital</h1>
					<p class="mb-4 pr-5"  style="color:rgba(240, 240, 240, 0.34);">Providing a smooth and comfortable care experience, ensuring every patient receives timely treatment with efficient coordination.</p>
					<div class="btn-container ">
						<a href="/room" class="btn rounded-pill" style="background-color: #e12454; color: white; border: none;">See Rooms<i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Hours</span>
						<h4 class="mb-3">Online Service</h4>
						<p class="mb-4">Providing seamless online services for your convenience anytime, anywhere.</p>
						<a href="/room" class="btn rounded-pill" style="background-color: #223a66; color: white; border: none;">Book a Room</a>
					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing schedule</span>
						<h4 class="mb-3">Working Hours</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
		                    <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
		                    <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
		                </ul>
					</div>

					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Emegency Cases</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>We provide immediate and professional medical care 24/7 to ensure fast and effective treatment for urgent health concerns. Your safety and well-being are our top priorities.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section about">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="assets/images/about/home1.png" alt="" class="img-fluid">
					<img src="assets/images/about/home2.png" alt="" class="img-fluid mt-4">
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="about-img mt-4 mt-lg-0">
					<img src="assets/images/about/home3.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-4">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color">About Our<br>Company</h2>
					<p class="mt-4 mb-5">We are committed to providing comfortable, safe, and high-quality inpatient care for every patient. With a professional team and excellent facilities, we ensure optimal treatment throughout the recovery process.</p>

					<a href="/room" class="btn rounded-pill" style="background-color: #e12454; color: white; border: none;">Rooms<i class="icofont-simple-right ml-3"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">Our Best Rooms</h2>
					<div class="divider mx-auto my-4"></div>
					<p>We offer a variety of comfortable rooms with top facilities, ensuring a peaceful and supportive healing experience.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="assets/images/rsibnusina/room1.png" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="/room" style="text-decoration: none; color: black;">VVIP</a></h4>
						<p>Exclusive luxury facilities with premium personalized services.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="assets/images/rsibnusina/room2.png" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="/room" style="text-decoration: none; color: black;">VIP</a></h4>
						<p>Enhanced comfort with priority services for a seamless stay.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="assets/images/rsibnusina/room3.png" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="/room" style="text-decoration: none; color: black;">Master</a></h4>
						<p>Spacious and well-equipped room for optimal care and relaxation.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block">
					<img src="assets/images/rsibnusina/room4.png" alt="" class="img-fluid w-100">

					<div class="content">
						<h4 class="mt-4 mb-0"><a href="/room" style="text-decoration: none; color: black;">Class I</a></h4>
						<p>A comfortable and private space with high-quality medical care.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
