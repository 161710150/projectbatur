<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dunia Aksesoris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="{{ asset ('assets/frontend/common-css/bootstrap.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/common-css/ionicons.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/05-news/css/styles.css') }}" rel="stylesheet">
	
	<link href="{{ asset ('assets/frontend/05-news/css/responsive.css') }}" rel="stylesheet">
	
</head>
<body>
	
 	<header>
		
		<div class="container">
		
			
			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon ion-navicon"></i></div>
			
			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="/index">Home</a></li>
				<li><a href="/produk">Product</a></li>
				<li><a href="/galeri">Galeri</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/testimoni">Testimoni</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul><!-- main-menu -->
			
		</div><!-- container -->
	</header>

	
	<div class="main-slider" style="background-image: url('assets/frontend/images/slider-1-1920x1080.jpg');">
		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content">
				
					<h5 class="pre-heading">This is the Product</h5>
					<h1><b>Product</b></h1>
					
				</div><!-- slider-content-->
			</div><!--display-table-cell-->
		</div><!-- display-table-->
	</div><!-- main-slider -->
	
	
	
<center>	
<section class="latest_blog_area">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                    <img class="img-fluid" src="{{ asset ('assets/img/artikel/' .$artikels->gambar. '' ) }}" style="margin-top: 50px; max-width: 75%;height: auto;" alt="">
                    <br>
                    <br>
                        <h1>
                            {{ $artikels->judul }}
                        </h1><br>
                    <div class="content-wrap">
                        <li>
                            {!! $artikels->deskripsi !!}
                        </li>
						

                    </div>
                </div>
				<br>
				<!-- Start nav Area -->
                <section class="nav-area pt-50 pb-100">
                    <div class="container">
                        <div class="row justify-content-between">
                            @if(isset($previous))
                            <div class="col-sm-6 nav-left justify-content-start d-flex">
                                <!-- <div class="thumb">
                                    <img src="/frontend/img/blog/prev.jpg" alt="">
                                </div> -->
                                <div class="post-details">
                                    <h4><p><b>{{ $previous->judul }}</b></p><h4>	
                                    <h4 class="text-uppercase"><a href="{{ URL::to( '/artikels/single/' . $previous->id) }}"><<-Previous</a></h4>
                                </div>
                            </div>
                            @endif
                            @if(isset($next))
                            <div class="col-sm-6 nav-right justify-content-end d-flex">
                                <div class="post-details">
								<h4><p><b>{{ $next->judul }}</b></p></h4>
                                    <h4 class="text-uppercase"><a href="{{ URL::to( '/artikels/single/' . $next->id) }}">Next->></a></h4>
                                </div>
                                             
                                <!-- <div class="thumb">
                                    <img src="/frontend/img/blog/next.jpg" alt="">
                                </div>                          -->
                            </div>
                            @endif
                        </div>
                    </div>    
                </section>
                <!-- End nav Area -->
            </div>
            {{--  view composer  --}}
            @include('frontends.side')
            {{--  end view composer  --}}
        </div>
		<br>
		<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://chou-pro.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
</section>
</center>


	
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-4">
					<div class="margin-b-50">
					<h5 class="title margin-b-20"><b>Dunia Aksesoris</b></h5>
						
						<p class="margin-tb-20">Seiring dengan berkembangnya teknologi informasi khususnya internet, memang tidak dapat kita pungkiri hal ini memberikan manfaat yang begitu besar dalam banyak aspek kehidupan, salah satunya dalam kegiatan jual beli.  Dunia Aksesoris merupakan website resmi kami yang hadir mengiringi kemajuan teknologi tersebut yang tidak lain bertujuan untuk memberikan pelayanan lebih kepada custemer kami.</p>
						<p class="font-black-lite copyright">
</p>
						
					</div><!-- margin-b-30 -->
				</div><!-- col-sm-6 -->
				
				<div class="hidden-lg-down col-xl-2"></div>
				
				<div class="col-md-6 col-lg-3 col-xl-2">
					<div class="footer-section margin-b-30">
						<h5 class="title margin-b-20"><b>Dunia Aksesoris</b></h5>
						<p>H.ibrahim</p>
						<p class="margin-tb-10">089861824001</p>
						<p>duniaaksesoris@gmail.com</p>
					</div><!-- footer-section -->
				</div><!-- col-sm-2 -->
				
			</div><!-- row -->
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	
	<script src="{{ asset ('assets/frontend/common-js/jquery-3.1.1.min.js') }}"></script>
	
	<script src="{{ asset ('assets/frontend/common-js/tether.min.js') }}"></script>
	
	<script src="{{ asset ('assets/frontend/common-js/bootstrap.js') }}"></script>
	
	<script src="{{ asset ('assets/frontend/common-js/swiper.js') }}"></script>

	<script src="{{ asset ('assets/frontend/common-js/isotope.pkgd.min.js') }}"></script>

	<script src="{{ asset ('assets/frontend/common-js/scripts.js') }}"></script>
	<!-- Modernizr JS -->
	<script src="{{ asset ('/js/modernizr-2.6.2.min.js') }}"></script>
	
	
</body>
</html>
