<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Kumpulan Artikel</h2>
						</div>
					</div>
					<!-- post -->
					<?php
						$artikel = \DB::table('artikel as a')->join('kategori as k','k.id','=','a.id_kategori')->select('a.judul','a.isi','a.gambar','a.created_at','k.nama as kategori')->orderby('created_at','desc')->get();
					?>

					@foreach($artikel as $at)
					<div class="col-md-12">
						<div class="post post-row">
							<a class="post-img" href="blog-post.html"><img src="{{ asset('uploads/'.$at->gambar) }}" alt="" style="width: 200px;"></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">{{ $at->kategori }}</a>
									<span class="post-date">{{ date('d M Y',strtotime($at->created_at)) }}</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">{{ $at->judul }}</a></h3>
								<p>{!! substr($at->isi,0,400) !!} ....</p>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /post -->


				</div>
			</div>

			<div class="col-md-4">
				<!-- ad -->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="{{ asset('webmag/img/ad-1.jpg') }}" alt="">
					</a>
				</div>
				<!-- /ad -->

				<div class="aside-widget">
					<div class="section-title">
						<h2>Catagories</h2>
					</div>
					<div class="category-widget">
						<ul>
							<?php
							$kategoris = \DB::table('kategori')->get();
							?>
							@foreach($kategoris as $kt)
							<?php
							$total = \DB::table('artikel')->where('id_kategori',$kt->id)->count();
							?>
							<li><a href="{{ url('artikel/kategori/'.$kt->id) }}" class="cat-1">{{ $kt->nama }}<span>{{ $total }}</span></a></li>
							@endforeach
						</ul>
					</div>
				</div>

							</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>