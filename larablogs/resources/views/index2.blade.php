<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home - {{$setting->site_name}}</title>
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
	<link href="{{ asset('newcatalog/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('newcatalog/css/login_overlay.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('newcatalog/css/style6.css')}}" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="{{ asset('newcatalog/css/shop.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('newcatalog/css/owl.carousel.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('newcatalog/css/owl.theme.css')}}" type="text/css" media="all">
	<link href="{{ asset('newcatalog/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('newcatalog/css/fontawesome-all.css')}}" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		@include('includes.header2')
		<!-- //header -->
		<!-- banner -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<style>
					<?php
						$pstSlider1 = $pstSlider::inRandomOrder()->first();
						$pstSlider2 = $pstSlider::inRandomOrder()->first();
						$pstSlider3 = $pstSlider::inRandomOrder()->first();
						$pstSlider4 = $pstSlider::inRandomOrder()->first();
					?>
					.carousel-item {
						background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider1->featured ?>) no-repeat;
						background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider1->featured ?>) no-repeat;
						background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider1->featured ?>) no-repeat;
						background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider1->featured ?>) no-repeat;
						background-size: cover;
					}

					.carousel-item.item2 {
						background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider2->featured ?>) no-repeat;
						background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider2->featured ?>) no-repeat;
						background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider2->featured ?>) no-repeat;
						background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider2->featured ?>) no-repeat;
						background-size: cover;
					}

					.carousel-item.item3 {
						background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider3->featured ?>) no-repeat;
						background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider3->featured ?>) no-repeat;
						background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider3->featured ?>) no-repeat;
						background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider3->featured ?>) no-repeat;
						background-size: cover;
					}

					.carousel-item.item4 {
						background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider4->featured ?>) no-repeat;
						background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider4->featured ?>) no-repeat;
						background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider4->featured ?>) no-repeat;
						background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?php echo $pstSlider4->featured ?>) no-repeat;
						background-size: cover;
					}
				</style>
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3><?php echo $pstSlider1->title ?>
								<span>Dapatkan diskon up to 20%</span>
							</h3>
							<a href="ctalog/<?php echo $pstSlider1->slug ?>" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3><?php echo $pstSlider2->title ?>
								<span>Produk yang anda cari?</span>
							</h3>
							<a href="catalog/<?php echo $pstSlider2->slug ?>" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
					<div class="carousel-item item3">
						<div class="carousel-caption text-center">
							<h3><?php echo $pstSlider3->title ?>
								<span>Kualitas terbaik di kelasnya</span>
							</h3>
							<a href="catalog/<?php echo $pstSlider3->slug ?>" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
					<div class="carousel-item item4">
						<div class="carousel-caption text-center">
							<h3><?php echo $pstSlider4->title ?>
								<span>Produk yang sedang anda cari?</span>
							</h3>
							<a href="catalog/<?php echo $pstSlider4->slug ?>" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">Catalog Terbaru </h3>
				<div class="row">
					<!-- /womens -->
					@foreach($pstHomePage as $pstHomePg)
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{{asset($pstHomePg->featured) ?? asset('newcatalog/images/logo.png')}}" class="img-fluid"  style="height: 210px !important;">
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
				<!--//row-->
				<!--/meddle-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info " style="background: url('<?php $bingImage = file_get_contents('https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=en-US');$bingImage = json_decode($bingImage, true); echo "https://www.bing.com/".$bingImage['images'][0]['url']; ?>') no-repeat 0px 0px; !important">

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
							<div class="text-center"><a href="{{route('contact')}}" class="btn btn-sm animated-button gibson-three mt-4" style="font-weight: bold;">Contact US</a></div>

						</div>
					</div>
				</div>
				<!--//meddle-->
				<!--/slide-->
				<div class="slider-img mid-sec">
					<!--//banner-sec-->
					<div class="mid-slider">
						<div class="owl-carousel owl-theme row">
							@foreach($pst as $postfive)
							<div class="item">
								<div class="gd-box-info text-center">
									<div class="product-men women_two bot-gd">
										<div class="product-googles-info slide-img googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{{asset($postfive->featured) ?? asset('newcatalog/images/logo.png')}}" class="img-fluid" style="height: 210px !important;">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="catalog/{{$postfive->slug}}" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="catalog/{{$postfive->slug}}">{{$postfive->title}} </a>
																</h4>
																<div class="grid-price mt-2">
																	@php
																		try {
																			$pricing = $pstPrice::where('posts_id', $postfive->id)->first();
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
															<a href="catalog/{{$postfive->slug}}"><i class="fas fa-cart-plus" style="margin-top: 1em;font-size: 14pt;"></i></a>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<!-- /testimonials -->
				<div class="testimonials py-lg-4 py-3 mt-4">
					<div class="testimonials-inner py-lg-4 py-3">
						<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="testimonials_grid text-center">
										<h3>Rudi Kusumo
											<span>Customer</span>
										</h3>
										<label>Sulawesi Selatan, Indonesia</label>
										<p>Sangat bagus. Kami telah melihat hasil yang luar biasa. Ini benar-benar menghemat waktu dan tenaga saya. Technology ERM persis seperti yang kurang dari bisnis kami. Saya kagum dengan kualitas ERM Technology .</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Aisyah Icha Yuniar
											<span>Customer</span>
										</h3>
										<label>Kalimantan, Indonesia</label>
										<p>Persis seperti yang saya cari selama ini. Ini benar-benar tidak bisa dipercaya! Terima kasih telah membuatnya tanpa rasa sakit, menyenangkan, dan yang terpenting, bebas repot! ERM Technology sangat membantu bisnis kami.</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Latika Kusmawati
											<span>Customer</span>
										</h3>
										<label>Sukabumi, Indonesia</label>
										<p>Saya suka ERM Technology. Anda tidak akan menyesalinya. Saya memberikan setidaknya niali 90 untuk ERM Technology.</p>
									</div>
								</div>
								<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="fas fa-long-arrow-alt-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>

								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- //testimonials -->
				<div class="row galsses-grids pt-lg-5 pt-3">
					@foreach($pstEditorPick as $postPicker)
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="{{asset($postPicker->featured) ?? asset('newcatalog/images/logo.png')}}" alt="" class="img-fluid">
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
				<!-- //clients-sec -->
			</div>
		</div>
	</section>
	<!-- about -->
	<!--footer -->
	@include('includes.footer2')
	<!-- //footer -->

	<!--jQuery-->
	<script src="{{ asset('newcatalog/js/jquery-2.2.3.min.js')}}"></script>
	<!-- newsletter modal -->
	<!-- Modal -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center p-5 mx-auto mw-100">
					<h6>Join our newsletter and get</h6>
					<h3>Up to 50% Off for your first order</h3>
					<div class="login newsletter">
						<form action="{{ url('subscribe') }}" method="POST">
							{{ csrf_field() }}
							<div class="form-group">
								<label class="mb-2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
							</div>
							<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>
						</form>
						<p class="text-center">
							<a href="#">No thanks I want to pay full Price</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$("#myModal").modal();
		});
	</script>
	<!-- // modal -->

	<!--search jQuery-->
	<script src="{{ asset('newcatalog/js/modernizr-2.6.2.min.js')}}"></script>
	<script src="{{ asset('newcatalog/js/classie-search.js')}}"></script>
	<script src="{{ asset('newcatalog/js/demo1-search.js')}}"></script>
	<!--//search jQuery-->
	<!-- cart-js -->
	<script src="{{ asset('newcatalog/js/minicart.js')}}"></script>
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
	<!-- Count-down -->
	<!-- <script src="{{ asset('newcatalog/js/simplyCountdown.js')}}"></script>
	<link href="{{ asset('newcatalog/css/simplyCountdown.css')}}" rel='stylesheet' type='text/css' />
	<script>
		var d = new Date();
		simplyCountdown('simply-countdown-custom', {
			year: d.getFullYear(),
			month: d.getMonth() + 2,
			day: 25
		});
	</script> -->
	<!--// Count-down -->
	<script src="{{ asset('newcatalog/js/owl.carousel.js')}}"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					900: {
						items: 3,
						nav: false
					},
					1000: {
						items: 4,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>

	<!-- //end-smooth-scrolling -->


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
  <script src="{{ asset('newcatalog/js/move-top.js')}}"></script>
    <script src="{{ asset('newcatalog/js/easing.js')}}"></script>
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

	<script src="{{ asset('newcatalog/js/bootstrap.js')}}"></script>
	<!-- js file -->
</body>

</html>