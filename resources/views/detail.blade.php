@extends('layouts.master')

@section('content')

<div class="section">
	<div class="container">
		<div class="row">
			
			<div class="col-md-8">
				<div class="section-row sticky-container">
					<div class="main-post">
						<h3>{{ $artikel->judul }}</h3>
						
						<p>
							<center>
								<img style="width: 50%;" src="{{ asset('uploads/'.$artikel->gambar) }}">
							</center>
						</p>
						<div text-align='justify' text-justify='inter-word'>
							{!! $artikel->isi !!}
						</div>

					</div>
					<div class="post-shares sticky-shares" style="position: absolute; top: 0px; left: 0px;">
						<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
						<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-envelope"></i></a>
					</div>
				</div>

				<!-- ad -->
				<div class="section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-2.jpg" alt="">
					</a>
				</div>
				<!-- ad -->

				<!-- comments -->
				<div class="section-row">
					<div class="section-title">
						<h2>{{ $total_komentar }} Comments</h2>
					</div>

					<div class="post-comments">
						
					@foreach($komentar as $km)
						<!-- comment -->
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="./img/avatar.png" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h4>{{ $km->nama }}</h4>
									<span class="time">{{ date('d M Y H:i:s',strtotime($km->created_at)) }}</span>
								</div>
								<p>{{ $km->isi }}</p>
							</div>
						</div>
						@endforeach
						<!-- /comment -->
					</div>
				</div>
				<!-- /comments -->

				<!-- reply -->
				<div class="section-row">
					<div class="section-title">
						<h2>Leave a reply</h2>
						<p>your email address will not be published. required fields are marked *</p>
					</div>
					<form class="post-reply" method="post" action="{{ url('komentar/'.$artikel->artikel_id) }}">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<span>Nama *</span>
									<input class="input" type="text" name="nama">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span>Email *</span>
									<input class="input" type="email" name="email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span>Website</span>
									<input class="input" type="text" name="website">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="input" name="isi" placeholder="Message"></textarea>
								</div>
								<button class="primary-button">Submit</button>
							</div>
						</div>
					</form>
				</div>
				
			</div>

		</div>
	</div>
</div>

@endsection