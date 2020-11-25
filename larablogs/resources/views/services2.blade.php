<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services - {{$setting->site_name}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="author" content="Intprism Technology, info@intprism.com">
	<meta name="keywords" content="ERM Technology | Neon Flex Sign" />
	<meta name="description" content="Kami memproduksi dekorasi ruang berupa Neon Flex Sign yang ditujukan untuk meningkatkan branding suatu toko atau usaha.">
	<link rel="shortcut icon" href="{{asset('newcatalog/images/logo.png')}}" type="image/x-icon">
	<meta property="og:image" content="{{asset('newcatalog/images/logo.png')}}" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="newcatalog/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="newcatalog/css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="newcatalog/css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="newcatalog/css/shop.css" type="text/css" />
	<link href="newcatalog/css/style.css" rel='stylesheet' type='text/css' />
	<link href="newcatalog/css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		@include('includes.header2')
		<!-- banner -->
		<div class="banner_inner" style="background: url('<?php $bingImage = file_get_contents('https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=en-US');$bingImage = json_decode($bingImage, true); echo "https://www.bing.com/".$bingImage['images'][0]['url']; ?>')no-repeat 0px -73px !important;">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="/">Home</a>
							<i>|</i>
						</li>
						<li>Services</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">

			<div class="inner-sec-shop px-lg-4 px-3">
				<div class="about-content py-lg-5 py-3">
					<div class="row">

						<div class="col-lg-6 p-0">
							<img src="{{asset('newcatalog/images/logo.png')}}" style="max-width: 90% !important;">
						</div>
						<div class="col-lg-6 about-info">
							<h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">Layanan Kami</h3>
							<p class="my-xl-4 my-lg-3 my-md-4 my-3">WE ARE THE SOLUTION OF YOUR DECORATION PROBLEMS<br>Kami memproduksi dekorasi ruang berupa Neon Flex Sign yang ditujukan untuk meningkatkan branding suatu toko atau usaha karena Neon Flex Sign ini memiliki ciri khas tersendiri dan juga dilengkapi dengan kontroller buatan sendiri untuk mengaktifkannya</p>

							<a href="{{route('contact')}}" class="btn btn-sm animated-button gibson-three mt-4">Dapatkan Penawaran</a>

						</div>
					</div>
				</div>
				<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Catalog</h3>
                <div class="container-fluid">
                    <div class="inner-sec-shop px-lg-4 px-3">
                        <div class="row">
                            <!-- /womens -->
                            @foreach($pstHomePage as $pstHomePg)
                            <div class="col-md-3 product-men women_two">
                                <div class="product-googles-info googles">
                                    <div class="men-pro-item">
                                        <div class="men-thumb-item">
                                            <img src="{{asset($pstHomePg->featured)}}" class="img-fluid"  style="height: 210px !important;">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="catalog/{{$pstHomePg->slug}}" class="link-product-add-cart">Lihat Detail</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>
                                        </div>
                                        <div class="item-info-product">
                                            <div class="info-product-price">
                                                <div class="grid_meta">
                                                    <div class="product_price">
                                                        <h4>
                                                            <a href="catalog/{{$pstHomePg->slug}}">{{$pstHomePg->title}}</a>
                                                        </h4>
                                                        <div class="grid-price mt-2">
																	@php
																		try {
																			$pricing = $pstPrice::where('posts_id', $pstHomePg->id)->first();
																			$pricing = $prices::where('id', $pricing->prices_id)->first();
																	@endphp
																	<span class="money ">{{ "Rp " . number_format((float)$pricing->harga_diskon,2,',','.')}}</span>
																	@php
																		} catch (\Throwable $th) {
																	@endphp
																	<span class="money ">Rp -</span>
																	@php
																		}
																	@endphp
                                                        </div>
                                                    </div>
                                                    <ul class="stars">
                                                    @php
                                                        $star = rand(3,5);
                                                    @endphp
                                                    @for($i = 0; $i < $star; $i++)
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    @endfor
                                                    </ul>
                                                </div>
                                                <div class="googles single-item hvr-outline-out">
                                                    <a href="catalog/{{$pstHomePg->slug}}"><i class="fas fa-cart-plus" style="margin-top: 1em;font-size: 14pt;"></i></a>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
				<div class="row galsses-grids pt-lg-5 pt-3">
					@foreach($pstEditorPick as $postPicker)
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="{{asset($postPicker->featured)}}" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								@php $postPicker->title = substr($postPicker->title,0,20)." ..."; @endphp
								<p> {{$postPicker->title}}</p>
							</figcaption>
						</figure>
					</div>
				@endforeach
				<div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">

								<span class="far fa-hand-paper"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>
							<p>Garansi pelayanan dan produk terbaik dari ERM Technology.</p>
							<p>
								<a href="#" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-rocket"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>
							<p>Proses pengemasan dan pengiriman cepat sesuai harapan anda.</p>
							<p>
								<a href="#" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="far fa-envelope"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Subscribe Disc</h4>
							<p>Langganan newsletter untuk diskon dan penawaran menarik dari ERM Technology.</p>
							<p>
								<a href="#" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
				<!-- //grids -->
				<!-- /clients-sec -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Genuine Product</h3>
								<p>Temukan produk asli berkualitas.</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Quality Products</h3>
								<p>Produk terjamin berkualitas.</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Cash on Delivery</h3>
								<p>Pembayaran sesuai yang anda inginkan.</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Easy Delivery</h3>
								<p>Katalog sesuai? kami antar ke lokasi anda!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!--footer -->
    @include('includes.footer2')
	<!-- //footer -->

	<!--jQuery-->
	<script src="newcatalog/js/jquery-2.2.3.min.js"></script>
	<!-- newsletter modal -->
	<!--search jQuery-->
	<script src="newcatalog/js/modernizr-2.6.2.min.js"></script>
	<script src="newcatalog/js/classie-search.js"></script>
	<script src="newcatalog/js/demo1-search.js"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="newcatalog/js/minicart.js"></script>
	<script>
		googles.render();

		googles.cart.on('googles_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
	</script>
	<!-- carousel -->
	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- Count-down -->
	<script src="newcatalog/js/simplyCountdown.js"></script>
	<link href="newcatalog/css/simplyCountdown.css" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script>
	<!--// Count-down -->
	<script src="newcatalog/js/move-top.js"></script>
    <script src="newcatalog/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->


	<script src="{{asset('newcatalog/js/bootstrap.js')}}"></script>
	<!-- js file -->
</body>

</html>