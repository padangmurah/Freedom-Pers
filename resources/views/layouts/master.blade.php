
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Freedom Pers</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{ asset('webmag/css/bootstrap.min.css') }}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{ asset('webmag/css/font-awesome.min.css') }}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{ asset('webmag/css/style.css') }}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

	
		<header id="header">
			
			<div id="nav">
				
				<div id="nav-fixed">
					<div class="container">
					<div class="nav-logo">
							<a href="{{ url('/') }}" class="logo"><img src="{{ asset('webmag/img/logo00.png') }}" alt=""></a>
						</div>
						
						<ul class="nav-menu nav navbar-nav">
							<?php
								$kategoris = \DB::table('kategori')->get();
							?>
							@foreach($kategoris as $kt)
							<li><a href="{{ url('artikel/kategori/'.$kt->id) }}">{{ $kt->nama }}</a></li>
							@endforeach

						</ul>
				
						<div class="nav-btns">
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<form method="get" action="{{ url('search') }}">
								<div class="search-form">
									<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
									<button type="submit" class="search-close"><i class="fa fa-times"></i></button>
								</div>
							</form>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>

		@yield('content')
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html" class="logo"><img src="{{ asset('webmag/img/logo00.png') }}" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
								<span>&copy; 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://www.instagram.com/lkm_sa_unissula/">LKM-SA</a> All rights reserved</span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">About Us</h3>
									<ul class="footer-links">
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">Join Us</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Catagories</h3>
									<ul class="footer-links">
										<?php
										$kategoris = \DB::table('kategori')->get();
										?>
										@foreach($kategoris as $kt)
										<?php
										$total = \DB::table('artikel')->where('id_kategori',$kt->id);
										?>
										<li><a href="{{ url('artikel/kategori/'.$kt->id) }}" class="cat-1">{{ $kt->nama }}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Ikuti Kami</h3>
							<ul class="footer-social">
								<li><a href="https://web.facebook.com/UkmLkmSaLembagaKajianMahasiswaSultanAgung?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/lkm_sa_unissula"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/lkm_sa_unissula/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCTb9M3v48mIJh4hwlqWD0TA"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				
			</div>
		
		</footer>
		

		
		<script src="{{ asset('webmag/js/jquery.min.js') }}"></script>
		<script src="{{ asset('webmag/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('webmag/js/main.js') }}"></script>

	</body>
</html>
