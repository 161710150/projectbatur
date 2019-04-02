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

<!-- font -->
<link rel="icon" herf="{{ asset ('assets/frontend/images/logoo.png') }}" type="iamge/x-icon"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="/index">Store</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="/index">Home</a></li>
								<li><a href="/galeri">Galeri</a></li>
								<li><a href="/produk">Produk</a></li>
								<li><a href="/blog">Blog</a></li>
								<li><a href="/testimoni">Testimoni</a></li>
								<li><a href="/contact">Contact</a></li>
								<li><a href="/login">login</a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/1.jpeg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Head</h1>
					   					<h2 class="head-2">Phone</h2>
					   					<h2 class="head-3">Collection</h2>
					   					<p class="category"><span>New Product Handphone Accessories</span></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	
			   	<li style="background-image: url(images/2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
									   <h1 class="head-1">Head</h1>
					   					<h2 class="head-2">Phone</h2>
					   					<h2 class="head-3">Collection</h2>
					   					<p class="category"><span>New Product Handphone Accessories</span></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		
		@php
		$galeris =App\galeris::take(6)->get();
		@endphp
		<style type='text/css'>


.photo{
  position:relative;
  float:center;
  height:300px;
  width:300px;
  background:#fff;
  
}

.photo-image{
  cursor: pointer;
  position:relative;
  width:150px;
  z-index:1000;
  opacity:0.6;
  transition: width 1s, top 1s, left 1s, opacity 1s, z-index .01s;
}

.photo-image:hover{
  width:300px;
  z-index:1001;
  opacity:1;
}

.photo-selected{
  cursor:default;
  z-index:2001;
  width:200px;
  opacity:1;
  top:-20px;
  left:-200px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
}

/* Nov 11 2013 - Added "X" to close popup - just a visual cue */
/*.photo-x:after{
  content: "X";
  font-family: arial;
  position: relative;
  top: -535px;
  font-weight: bold;
  left: 285px;
  padding: 10px 14px;
  border: 2px solid black;
  background: white;
  z-index: 9999;
  cursor: pointer;
}*/

.photo-selected:hover{
  width:500px;
  top:-50px;
  left:-50px;
  z-index:2001;
  opacity:1;
  top:-20px;
  left:-200px;
}
</style>
		<section class="event-section section" id="galeri">
			<div class="container">

					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Galeri</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
		<div class="row">
		@foreach($galeris as $data)
			<div class="col-lg-4 col-md-4 padding-Ir-0 container">
			<div class="photo"> 
			<center>	
			<img src="{{ asset ('assets/img/galeri/' .$data->gambar) }}" alt="" class="photo-image" /></div></center>
				</a>
				
		</div><!-- col-lg-4 -->
		@endforeach

		
		
		@php
		$barangs =App\barangs::take(6)->get();
		@endphp
		<section class="event-section section" id="barang">
			<div class="container">

					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>PRODUK</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
		<div class="row">
		@foreach($barangs as $data)
			<div class="col-lg-4 col-md-6 padding-Ir-0">
			<div class="p-item architecture brand-identity"><a href="/barangs/singleproduk/{{$data->id}}">
			<img src="{{ asset ('assets/img/barang/' .$data->gambar) }}" width"200" height="300">
			<div class="portpolio-info">
			<div class="display-table">
						<div class="display-table-cell">
							<h2 class="title"><b>{{$data->nama_barang}}</b></h2>
							<h4 class="pre-title">Rp.{{$data->harga}}</hd>
						</div><!--display-table-cell -->
					</div><!--display-table -->
				</div><!-- portfolio-info -->
				</a>
			</div><!-- p-item -->	
		</div><!-- col-lg-4 -->
		@endforeach


		

		@php
		$testimonis =App\testimonis::all();
		@endphp
			<section class="blog-section section" id="blog">
				<div id="colorlib-testimony" class="colorlib-light-grey">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
								<h2><span>TESTIMONI</span></h2>
							</div>
						</div>
						@foreach($testimonis as $data)
							<div class="col-lg-4 col-md-4 padding-Ir-0">
								<div class="blog-post margin-b-30">
								
					<img src=" {{ asset ('assets/img/testimoni/' .$data->gambar. '' ) }}" width="300" height="300"></p></td>
									<br>
									<h5 class="margin-tb-10">By <b>{{$data->nama}}</b></a></h5>
									<p class="margin-tb-20">{!!$data->testimoni!!}<p>
									
										</div><!-- blog-post-->
									</div><!-- col-sm-4-->
								@endforeach
							</div><!-- row-->
						</div><!-- container-->
					</section><!-- blog-section -->

							</div><!-- col-md-4-->
						</div><!-- row-->
					</div><!-- container-->
				</section><!-- top-service-section -->

		@php
		$artikels =App\artikels::paginate(3);
		$kategoriartikels =App\kategoriartikels::all();
		@endphp
		<div class="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>Recent Blog</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>

				<div class="blog-section section">
					<div class="container">
						<div class="row">
						@foreach($artikels as $data)
							<div class="col-sm-12 col-md-6 col-lg-4">
								<div class="blog-post margin-b-38">

									<img src="{{ asset ('assets/img/artikel/' .$data->gambar. '')}}" width"400" height="300">
									<h3 class="margin-tb-10"><a href="/artikels/single/{{$data->id}}"><b>{{$data->judul}}</b></a><h3>
									<h5 class="font-white-lite">
										<b>By Dunia Aksesoris
										<spam class="bar"></span>
										</b>
									</h5>
									<p class="margin-tb-20">{!!str_limit($data->deskripsi,400)!!}<p>
									<a class="btn btn-fill" href="/artikels/single/{{$data->id}}"><i class="ion-chevron-right"></i>
									<i class="ion-chevron-right"></i><a>

								</div><!-- blog-post -->
							</div><!-- col-sm-4-->
							@endforeach
						</div><!-- row-->
						{{ $artikels->links() }}
					</div><!-- container-->
					</section><!-- blog-section -->

	
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Store</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-2">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							
							<span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<script type="text/javascript">
/* Photography by Hilary Spencer Creative Photography */
/* ************************************************** */

/* https://www.facebook.com/pages/Hilary-Spencer-Creative-Photography/107123415116 */

// Hovering an image gives a smooth enlarge effect
// Clicking an image will enlarge it even more, and add an overlay
// Clicking the overlay will exit the overlay
// You can also hit "esc" to exit the full view

// Added an on click event to make it more like a production environment, though the primary function is the hover effect
// When the page has loaded
$(function() {
  // View the selected photo at full size
  $(".photo-image").click(function(){
    $(this).addClass("photo-selected");
    $(this).parent().addClass("photo-x");
    $("#overlay").show();
  });
  
  // Close the full size view when #overlay is clicked
  $("#overlay").click(function(){
    $(".photo-image").removeClass("photo-selected");
    $(".photo-x").removeClass("photo-x");
    $("#overlay").hide();
  });
});

// Close full size view if "esc"
$(document).keyup(function(e) {
  if (e.keyCode == 27) {
    $(".photo-image").removeClass("photo-selected");
    $("#overlay").hide();
  }
});
</script>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

